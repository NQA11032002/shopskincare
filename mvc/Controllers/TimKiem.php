<?php
    class TimKiem extends controller
    {
        function show()
        {
            $model = self::model("SanPhamModel");
            $keyWord = isset($_GET["key"]) ? $_GET["key"] : null;
            $temp = $model->search($keyWord);

            self::view("master",[
                "page" => "TimKiem",
                "data"=>$temp
            ]);
        }
    }
?>