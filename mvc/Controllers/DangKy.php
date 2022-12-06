<?php
    class DangKy extends controller
    {
        function show()
        {
            if(isset($_SESSION["logined"]))
            {
                header("location: TrangChu");
            }
            
            self::view("master",[
                "page" => "DangKy",
            ]);
        }
    }
?>