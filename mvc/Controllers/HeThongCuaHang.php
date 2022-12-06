<?php
    class HeThongCuaHang extends controller
    {
        function show()
        {
            self::view("master",[
                "page" => "HeThongCuaHang"
            ]);
        }
    }
?>