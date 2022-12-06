<?php
    class TaiKhoanModel extends Database
    {
        function Reigster($name,$gender,$date,$address,$email,$password)
        {
            if($this->checkEmail($email) == false)
            {
                return 2;
            }
            else
            {
                $insertTK = "INSERT INTO `taikhoan`(`email`, `passwords`, `checktk`, `role`, `status`) 
                VALUES ('".$email."','".$password."',0,'user', 0)";
                mysqli_query(self::$connect,$insertTK);

                $query = "SELECT MAX(ID) from taikhoan";
                $result = mysqli_query(self::$connect,$query);
                $rows = mysqli_fetch_array($result);
                $IDNew = $rows[0];            

                $insertCustomer = "INSERT INTO `khachhang`(`IDTK`, `hoTen`, `ngaysinh`, `gioiTinh`, `sdt`, `diachi`, `ranks`, `image`) 
                                    VALUES ('".$IDNew."','".$name."','".$date."','".$gender."','null','".$address."','0','Public/image/Avatar/noavatar.png')";
                mysqli_query(self::$connect,$insertCustomer);

                return true;
            }
        }

        function checkEmail($email)
        {
            $query = "SELECT * from taikhoan WHERE email = '".$email."'";
            $result = mysqli_query(self::$connect,$query);
            $count =   mysqli_num_rows($result);
    
            $check = $count > 0 ? false : true;

            return $check;
        }

        function checkLogin($Email)
        {
            $query = "SELECT * from taikhoan WHERE email = '".$Email."'";
            $result = mysqli_query(self::$connect,$query);
            
            $password = "";
            
            while($row = mysqli_fetch_array($result))
            {
                $password = $row["passwords"];
            }

            $check = $password != "" ? $password : false;

            return $check;
        }

        function getInforAccount($Email)
        {
            $query = "SELECT * from taikhoan AS tk join khachhang as kh on tk.ID = kh.IDTK WHERE tk.email = '".$Email."'";
            $result = mysqli_query(self::$connect,$query);
            $arr = array();

            while($rows = mysqli_fetch_array($result))
            {
                $arr[] = $rows;
            }

            return $arr;
        }

        function loadAccount($IDTK)
        {
            $query = "SELECT * from taikhoan AS tk join khachhang as kh on tk.ID = kh.IDTK WHERE kh.ID = '".$IDTK."'";
            $result = mysqli_query(self::$connect,$query);
            $arr = array();

            while($rows = mysqli_fetch_array($result))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);
        }

        function changedAccount($IDKH,$Name,$Gender,$birthDate,$phone,$Address)
        {
            $query = "UPDATE `khachhang` SET `hoTen`='".$Name."',`ngaysinh`='".$birthDate."',`gioiTinh`='".$Gender."',`sdt`='".$phone."',`diachi`='".$Address."' WHERE IDTK = '".$IDKH."'";

            mysqli_query(self::$connect,$query);
        }

        function changedPassword($IDKH,$newPassword)
        {
            $query = "UPDATE `taikhoan` SET `passwords`='".$newPassword."' WHERE ID = '".$IDKH."'";
            mysqli_query(self::$connect,$query);
        }

        function checkOldPass($IDKH)
        {
            $query = "SELECT * FROM taikhoan WHERE ID = '".$IDKH."'";
            $result = mysqli_query(self::$connect,$query);

            $password = "";

            while($row = mysqli_fetch_array($result))
            {
                $password = $row["passwords"];
            }

            return $password;
        }

        function recovery($email,$newPassWord)
        {
            $query = "UPDATE taikhoan SET passwords = '".$newPassWord."' WHERE email = '".$email."'";
            mysqli_query(self::$connect,$query);
        }

        function changedAvatar($IDKH,$Avatar)
        {
            $query = "UPDATE `khachhang` SET `image`='".$Avatar."' WHERE IDTK = '".$IDKH."'";
            mysqli_query(self::$connect,$query);
            
            return $Avatar;
        }

        function checkLockLogin($Email)
        {
            $query = "SELECT * FROM taikhoan WHERE email = '".$Email."'";
            $result = mysqli_query(self::$connect,$query);

            $row = mysqli_fetch_array($result);
            
            if(mysqli_num_rows($result) > 0)
            {
                $status = $row["checktk"];
                return $status;

            }

        }

        function updateLockLogin($Email,$amountLogin,$status)
        {
            $query = "UPDATE taikhoan SET checktk = '".$amountLogin."', status = '".$status."' WHERE email = '".$Email."'";
            mysqli_query(self::$connect,$query);
        }

        function LogOut($email)
        {
            $query = "UPDATE taikhoan SET status = 0 WHERE email = '".$email."'";
            
            mysqli_query(self::$connect,$query);
        }
    }
?>