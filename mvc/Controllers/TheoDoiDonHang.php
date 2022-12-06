<?php
    class TheoDoiDonHang extends controller
    {
        private $model;
        function __construct()
        {
            $this->model = $this->model("DonHangModel");
        }
        
        function show()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $result = json_decode($this->model->loadBill($IDKH),true);

            self::view("master",[
                "page" => "TheoDoiDonHang",
                "Bill" => $result
            ]);
        }
        
        function chiTietDonHang()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $IDDH = isseT($_POST["IDDH"]) ? $_POST["IDDH"] : null;
            $result = $this->model->loadDetailBill($IDKH,$IDDH);

            echo $result;
        }

        function deleteBill()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $IDDH = isseT($_POST["IDDH"]) ? $_POST["IDDH"] : null;
            $this->model->deleteBill($IDKH,$IDDH);
        }

        function cancelBill()
        {
            $ID = isseT($_POST["ID"]) ? $_POST["ID"] : null;
            $status = 2;
            
            $this->model->cancelBill($ID, $status);
        }
    }
?>