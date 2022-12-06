<?php
    class Branch extends controller
    {
        private $model;

        function __construct()
        {
            $this->model = $this->modelAdmin("ProductModel");
        }

        function show()
        {
            self::viewAdmin('master', ["page" => "Branch"]);
        }
        
        function insertCategories()
        {
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $category = isset($_POST["category"]) ? $_POST["category"] : null;

            $this->model->insertCategories($name,$category);
        }
        
        function removeCategories()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $this->model->removeCategories($ID);
        }

        function updateCategories()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $category = isset($_POST["category"]) ? $_POST["category"] : null;

            $this->model->updateCategories($ID,$name,$category);
        }
        
        function insertProduce()
        {
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $this->model->insertProduce($name);
        }

        function updateProduce()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $name = isset($_POST["name"]) ? $_POST["name"] : null;

            $this->model->updateProduce($ID,$name);
        }     
        
        function removeProduce()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            
            $this->model->removeProduce($ID);
        }

        public function insertBrand()
        {
            $name = isset($_POST["name"]) ? $_POST["name"] : null;

            $this->model->insertBrand($name);
        }

        function updateBrand()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $name = isset($_POST["name"]) ? $_POST["name"] : null;

            $this->model->updateBrand($ID,$name);  
        }

        function removeBrand()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $this->model->removeBrand($ID);
        }
    }
?>