<?php
    class DangNhap extends controller
    {
        function show()
        {
            if(isset($_SESSION["logined"]))
            {
                header("location: TrangChu");
            }

            self::view("master",[
                "page" => "DangNhap",
            ]);
        }

        /*-------------------------------------- Logout -------------------------------------- */
        function logOut()
        {
            if(isset($_SESSION["logined"]))
            {
                $this->model("TaiKhoanModel")->LogOut($_SESSION["email"]);

                unset($_SESSION["logined"]);
                unset($_SESSION["hoTen"]);
                unset($_SESSION["diachi"]);
                unset($_SESSION["sdt"]);
                unset($_SESSION["email"]);
            }
        }
    }
?>