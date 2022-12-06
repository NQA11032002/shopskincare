<?php
    class ChiTietSanPham extends controller
    {
        protected $myModel;

        function __construct()
        {
            $this->myModel = $this->model("ChiTietSPModel");
        }

        function show()
        {
            $ID = isset($_GET["ID"]) ? $_GET["ID"] : null;
            $IDLoai = isset($_GET["IDLoai"]) ? $_GET["IDLoai"] : null;

            if($ID != null)
            {
                $result= json_decode($this->myModel->getDetailProduct($ID),true);
            }

            $size = $this->model("SanPhamModel")->getSize();
            $involve = json_decode($this->myModel->getProductInvolve($IDLoai),true);
            $getStarProduct = $this->model("SanPhamModel")->getStarProduct();

            $this->view("master",
            [
                        "page" => "ChiTietSanPham",
                        "data" => $result,
                        "size" => $size,
                        "involve" => $involve,
                        "star"=> json_decode($getStarProduct,true)
            ]);
        }

        function review()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $IDSP = isset($_POST["IDSP"]) ? $_POST["IDSP"] : null;
            $Review = isset($_POST["review"]) ? $_POST["review"] : null;
            $Date = new DateTime();
            $Star = isset($_POST["star"]) ? $_POST["star"] : null;

            $model = $this->model("ChiTietSPModel");

            if($IDKH != null)
            {
                $model->review($IDKH,$IDSP,$Review,$Date,$Star);
            }
            else
            {
                echo -1;
            }
        }

        function loadReview()
        {
            $IDSP = isset($_POST["IDSP"]) ? $_POST["IDSP"] : null;
            $amount = isset($_POST["Amount"]) ? $_POST["Amount"] : null;
            $model = $this->model("ChiTietSPModel");

            $result = $model->loadReview($IDSP,$amount);

            echo $result;
        }

        function lenghtReview()
        {
            $IDSP = isset($_POST["IDSP"]) ? $_POST["IDSP"] : null;
            $model = $this->model("ChiTietSPModel");

            $result = $model->lenghtReview($IDSP);

            echo $result;
        }
    }
?>