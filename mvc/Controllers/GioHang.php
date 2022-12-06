<?php
    class GioHang extends controller
    {
        function show()
        {     
            $this->view("master", [
                "page"=> "GioHang"
            ]);
        }
    }
?>