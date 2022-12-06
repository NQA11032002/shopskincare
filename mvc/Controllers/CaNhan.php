<?php
    class CaNhan extends controller
    {
        function show()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $model = $this->model("TaiKhoanModel");
            $result = json_decode($model->loadAccount($IDKH),true);

            self::view("master",[
                "page" => "CaNhan",
                "Account" => $result]);
        }

        function taiKhoan()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $model = $this->model("TaiKhoanModel");
            $result = json_decode($model->loadAccount($IDKH),true);

            self::view("TaiKhoan",["Account" => $result]);
        }

        function changeAccount(){
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $Name = isseT($_POST["Name"]) ? $_POST["Name"] : null;
            $Gender = isseT($_POST["Gender"]) ? $_POST["Gender"] : null;
            $birthDate = isseT($_POST["birthDate"]) ? $_POST["birthDate"] : null;
            $Phone = isseT($_POST["Phone"]) ? $_POST["Phone"] : null;
            $Address = isseT($_POST["Address"]) ? $_POST["Address"] : null;
            $oldPassword = isseT($_POST["oldPasswords"]) ? $_POST["oldPasswords"] : null;
            $newPassword = isseT($_POST["newPasswords"]) ? $_POST["newPasswords"] : null;
            $confirmPassword = isseT($_POST["confirmPasswords"]) ? $_POST["confirmPasswords"] : null;

            $model = $this->model("TaiKhoanModel");

            $pass_hash = $model->checkOldPass($IDKH);

            if(strlen($newPassword) > 0 && strlen($newPassword) < 6)
            {
                echo "Mật khẩu mới phải có độ dài từ 6 trở lên";
                return;
            }

            if(strlen($oldPassword) > 0 && password_verify($oldPassword, $pass_hash) == false)
            {
                echo "Mật khẩu hiện tại không chính xác!!!";
                return;
            }

            if(strlen($newPassword) > 0 && strlen($confirmPassword) > 0 && $newPassword !== $confirmPassword)
            {
                echo "Mật khẩu xác nhận không khớp mật khẩu mới!!!";
                return;
            }

            if(password_verify($oldPassword, $pass_hash) == true && $newPassword == $confirmPassword)
            {
                $model->changedPassword($IDKH,password_hash($newPassword, PASSWORD_DEFAULT));
            }

            $model->changedAccount($IDKH,$Name,$Gender,$birthDate,$Phone,$Address);

            $infor = $model->getInforAccount($_SESSION["email"],$_SESSION["passwords"]);
            $_SESSION["logined"][0]["hoTen"] = $infor[0]["hoTen"];

            echo "Đổi thông tin thành công.";
        }

        function registerEmailNotify()
        {
            $Email = isset($_POST["Email"]) ? $_POST["Email"] : null;

            require "./Public/package/PHPMailer-master/src/PHPMailer.php"; 
            require "./Public/package/PHPMailer-master/src/SMTP.php"; 
            require './Public/package/PHPMailer-master/src/Exception.php'; 

            //thời gian thực của việt nam
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('d/m/Y H:i:s');

            $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:xử lý lỗi nếu có

            try {
                $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //địa chỉ mail sever gmail
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'myphamskincares@gmail.com'; //TK email gửi
                $mail->Password = 'ifyhydkcxtdgwazl';   // pass email gửi
                $mail->SMTPSecure = 'ssl';  // encryption SSL/Port = 465  TSL/Port = 587
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom('myphamskincares@gmail.com', 'Wibugangz' ); //địa chỉ email người gửi
                $mail->addAddress($Email, $Email); //mail và tên người nhận  
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Thông báo Đăng ký nhận tin từ SkinCare"; //tiêu đề thư
                $noidungthu = "<div class='Main__Mailer'
                                    style='
                                        background: #f3f3f3;
                                        width: 700px;
                                        height: 500px;
                                        border-radius: 10px;
                                        color: #252a2b;                         
                                    '>
                                    <img style='
                                            width: 150px; 
                                            height: 150px; 
                                            margin: 10px 40%;
                                            border-radius: 50%;'  
                                            src='https://adtimin.vn/wp-content/uploads/2017/09/Logo-1.jpg' >  

                                    <h2 style='text-align: center'>Cảm ơn bạn đã đăng ký</h2>

                                    <div style='margin: 0 87px;'>
                                        <h3>Xin chào: $Email</h3>
                                        <p><b>Ngày:</b>$date</p>
                                        <p style='color: rgb(119,119,119)'>Chúc mừng bạn đăng ký nhận tin từ Wibugangz thành công!!!
                                        <hr> 
                                        <p style='color: rgb(119,119,119); line-height: 1.7;'>
                                            Bạn vui lòng để ý Mail để nhận được các sự kiện hấp dẫn từ Wibugangz. <br>
                                            Các thông tin đơn hàng sẽ được thông báo qua gmail của bạn.
                                        </p>
                                    </div>                   
                                </div>"; 
                $mail->Body = $noidungthu; //nội dung thư
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send(); //gủi mail
            } catch (Exception $e) {
            }
        }

        function contactEmail()
        {
            $Title = isset($_POST["Title"]) ? $_POST["Title"] : null;
            $Name = isset($_POST["Name"]) ? $_POST["Name"] : null;
            $Email = isset($_POST["Email"]) ? $_POST["Email"] : null;
            $Content = isset($_POST["Content"]) ? $_POST["Content"] : null;

            require "./Public/package/PHPMailer-master/src/PHPMailer.php"; 
            require "./Public/package/PHPMailer-master/src/SMTP.php"; 
            require './Public/package/PHPMailer-master/src/Exception.php'; 
        
            $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:xử lý lỗi nếu có
        
            try {
                $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
                $mail->isSMTP();
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //địa chỉ mail sever gmail
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'myphamskincares@gmail.com'; //TK email gửi
                $mail->Password = 'ifyhydkcxtdgwazl';   // pass email gửi
                $mail->SMTPSecure = 'ssl';  // encryption SSL/Port = 465  TSL/Port = 587
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom("myphamskincares@gmail.com", $Name); //địa chỉ email người gửi, và tên
                $mail->addAddress('myphamskincares@gmail.com', 'Wibugangz'); //mail và tên người nhận  
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = $Title; //tiêu đề thư
                $mail->Body = "<b>Email: </b>".$Email."<br><b>Nội dung: </b>".$Content; //nội dung thư
                $mail->smtpConnect(array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send(); //gủi mail
            } catch (Exception $e) {
            }
        }
    }
?>