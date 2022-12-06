<?php
    class DanhSachYeuThich extends controller
    {
        function show()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            
            $model = $this->model("SanPhamModel");
            $result = $model->getFavourite($IDKH);

            self::view("master",[
                "page" => "DanhSachYeuThich",
                "Favourite" => json_decode($result,true)
            ]);
        }

        function deleteFavourite()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $model = $this->model("SanPhamModel");
            $model->deleteFavourite($IDKH,$ID);
        }
    }
?>