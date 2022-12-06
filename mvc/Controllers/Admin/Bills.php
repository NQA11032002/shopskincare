<?php
    class Bills extends Controller
    {
        private $model;

        function __construct()
        {
            $this->model = $this->modelAdmin("BillsModel");
        }

        function show()
        {
            self::viewAdmin('master', ["page" => "Bills"]);
        }
        
        function loadBill()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;
            $page = isset($_POST["page"]) ? $_POST["page"] : null;
            $amountPage = isset($_POST["amountPage"]) ? $_POST["amountPage"] : null;

            $result = $this->model->loadBill($keyword,$page,$amountPage);
            
            echo $result;
        }

        function lengthListBill()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;
            $result = $this->model->lengthListBill($keyword);

            echo $result;
        }
        
        function loadDetailBill()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $result = $this->model->loadDetailBill($ID);
            
            echo $result;
        }

        function cancelBill()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $this->model->cancelBill($ID);
        }

        function checkBill()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $IDKH = isset($_POST["IDKH"]) ? $_POST["IDKH"] : null;
            $status = isset($_POST["status"]) ? $_POST["status"] : null;

            $this->model->checkBill($ID,$status,$IDKH);
        }

        function confirmCancelBill()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $IDDH = isset($_POST["IDDH"]) ? $_POST["IDDH"] : null;
            $status = 1;

            $result = $this->model->confirmCancelBill($ID, $IDDH, $status);
        }
    }
?>