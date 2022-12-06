<?php
    class Product extends controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->modelAdmin("ProductModel");
        }
        
        function show()
        {
            self::viewAdmin('master', [
                "page" => "Product",
            ]);
        }

        function apiListProduct()
        {
            $page = isset($_POST["page"]) ? $_POST["page"] : null;
            $amountProduct = isset($_POST["amountProduct"]) ? $_POST["amountProduct"] : null;
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;

            $result = $this->model->apiListProduct($page,$amountProduct,$keyword);

            echo $result;
        }

        function lengthListProduct()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;
            $result = $this->model->lengthListProduct($keyword);

            echo $result;
        }

        function apiCategories()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $result = $this->model->apiCategories($ID);

            echo $result;
        }

        function apiBrands()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;

            $result = $this->model->apiBrands($keyword);

            echo $result;
        }

        function apiSizes()
        {
            $result = $this->model->apiSizes();

            echo $result;
        }

        function apiColors()
        {
            $result = $this->model->apiColors();

            echo $result;
        }

        function apiProduces()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;

            $result = $this->model->apiProduces($keyword);

            echo $result;
        }

        function apiCombo()
        {
            $result = $this->model->apiCombo();

            echo $result;
        }

        function createCombo()
        {
            $name = isset($_POST["name"]) ? $_POST["name"] : null;

            $this->model->createCombo($name);
        }

        function updateProduct()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $IDCategory = isset($_POST["IDCategory"]) ? $_POST["IDCategory"] : null;
            $IDBrand = isset($_POST["IDBrand"]) ? $_POST["IDBrand"] : null;
            $IDSize = isset($_POST["IDSize"]) ? $_POST["IDSize"] : null;
            $IDColor = isset($_POST["IDColor"]) ? $_POST["IDColor"] : null;
            $IDProduce = isset($_POST["IDProduce"]) ? $_POST["IDProduce"] : null;
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $price = isset($_POST["price"]) ? $_POST["price"] : null;
            $description = isset($_POST["description"]) ? $_POST["description"] : null;
            $effect = isset($_POST["effect"]) ? $_POST["effect"] : null;
            $usage = isset($_POST["usage"]) ? $_POST["usage"] : null;
            $introduce = isset($_POST["introduce"]) ? $_POST["introduce"] : null;
            $combo = isset($_POST["combo"]) ? $_POST["combo"] : null;
            $image1 = isset($_POST["image1"]) ? $_POST["image1"] : null;
            $image2 = isset($_POST["image2"]) ? $_POST["image2"] : null;
            $image3 = isset($_POST["image3"]) ? $_POST["image3"] : null;
            
            $this->model->updateProduct($ID,$IDCategory,$IDBrand,$IDSize,$IDColor,$IDProduce,$image1,$image2,$image3,$name,$price,$description,$effect,$usage,$introduce,$combo);
        }
        
        function ChangedImage()
        {            

            $dir = "Public/image/";

            $file1 = $_FILES["Image1"]["tmp_name"];
            $nameFile1 = explode('.',$_FILES["Image1"]["name"]);
            $path1 = $dir."/".$nameFile1[0].'.'.$nameFile1[1];  

            $file2 = $_FILES["Image2"]["tmp_name"];
            $nameFile2 = explode('.',$_FILES["Image2"]["name"]);
            $path2 = $dir."/".$nameFile2[0].'.'.$nameFile2[1];  

            $file3 = $_FILES["Image3"]["tmp_name"];
            $nameFile3 = explode('.',$_FILES["Image3"]["name"]);
            $path3 = $dir."/".$nameFile3[0].'.'.$nameFile3[1];  

            
            if(!file_exists($dir))
            {
                mkdir($dir);
            }

            if ($_FILES["Image1"]["size"] > 5000000 || $_FILES["Image2"]["size"] > 5000000 || $_FILES["Image3"]["size"] > 5000000) {
                echo 2;
                return;
            }

            $arrayFile = array("jpg","png","jpeg","gif");
            $fileName1 = pathinfo($_FILES["Image1"]["name"], PATHINFO_EXTENSION);
            $fileName2 = pathinfo($_FILES["Image2"]["name"], PATHINFO_EXTENSION);
            $fileName3 = pathinfo($_FILES["Image3"]["name"], PATHINFO_EXTENSION);
                        
            $checkFile = 0;

            foreach($arrayFile as $item)
            {
                if(strcmp($fileName1,$item) == 0 || strcmp($fileName2,$item) == 0 || strcmp($fileName3,$item) == 0 )
                {
                    $checkFile = 1;
                }
            }

            if ($_FILES["Image1"]["size"] > 1000000 || $_FILES["Image2"]["size"] > 1000000 || $_FILES["Image3"]["size"] > 1000000)
            {
                echo 2;
            }
            else if($checkFile == 1)
            {
                move_uploaded_file($file1,$path1);
                move_uploaded_file($file2,$path2);
                move_uploaded_file($file3,$path3);
            }
            else
            {
                echo 0;
            }
        }

        function insertProduct()
        {
            $IDCategory = isset($_POST["IDCategory"]) ? $_POST["IDCategory"] : null;
            $IDBrand = isset($_POST["IDBrand"]) ? $_POST["IDBrand"] : null;
            $IDSize = isset($_POST["IDSize"]) ? $_POST["IDSize"] : null;
            $IDColor = isset($_POST["IDColor"]) ? $_POST["IDColor"] : null;
            $IDProduce = isset($_POST["IDProduce"]) ? $_POST["IDProduce"] : null;
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $price = isset($_POST["price"]) ? $_POST["price"] : null;
            $description = isset($_POST["description"]) ? $_POST["description"] : null;
            $effect = isset($_POST["effect"]) ? $_POST["effect"] : null;
            $usage = isset($_POST["usage"]) ? $_POST["usage"] : null;
            $introduce = isset($_POST["introduce"]) ? $_POST["introduce"] : null;
            $combo = isset($_POST["combo"]) ? $_POST["combo"] : null;
            $image1 = isset($_POST["image1"]) ? $_POST["image1"] : null;
            $image2 = isset($_POST["image2"]) ? $_POST["image2"] : null;
            $image3 = isset($_POST["image3"]) ? $_POST["image3"] : null;
            
            if($name == null || $price == null || $description == null || $effect == null || $usage == null || $introduce == null)
            {
                echo "Vui lòng nhập đầy đủ thông tin sản phẩm !!!";
            }
            else
            {
                $this->model->insertProduct($IDCategory,$IDBrand,$IDSize,$IDColor,$IDProduce,$image1,$image2,$image3,$name,$price,$description,$effect,$usage,$introduce,$combo);
                echo 1;
            }
        }

        function removeProduct()
        {
            $IDSP = isset($_POST["IDSP"]) ? $_POST["IDSP"] : null;

            $result = $this->model->removeProduct($IDSP);

            echo $result;
        }
    }
?>