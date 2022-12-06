<?php
    class Event extends controller
    {
        private $model;
        private $image;
        private $ID;
        
        function __construct()
        {
            $this->model = $this->modelAdmin("EventModel");
        }

        function show()
        {
            $categories = $this->modelAdmin("ProductModel")->apiCategories();
            
            self::viewAdmin('master', 
                            [   'page' => "Events",
                                'categories' => json_decode($categories,true)
                            ]);
        }

        function apiListEvent()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;

            $result = $this->model->apiListEvent($keyword);

            echo $result;
        }

        function insertEvent()
        {
            $name = isset($_POST["event--name"]) ? $_POST["event--name"] : null;
            $content = isset($_POST["event--content"]) ? $_POST["event--content"] : null;
            $dateStart = isset($_POST["event--datestart"]) ? $_POST["event--datestart"] : null;
            $dateEnd = isset($_POST["event--dateend"]) ? $_POST["event--dateend"] : null;
            $categories = isset($_POST["event-categories"]) ? $_POST["event-categories"] : null;
            $discount = isset($_POST["event-discount"]) ? $_POST["event-discount"] : null;
            $gifCode = isset($_POST["event--code"]) ? $_POST["event--code"] : null;

            $this->model->insertEvent($name,$content,$dateStart,$dateEnd,$this->image);
        

            if(!empty($gifCode))
            {
                $IDSK = $this->model->getSK();

                $this->model->insertGiftCode($IDSK, $gifCode, $discount);
            }

            if(!empty($discount) && !empty($categories))
            {
                $this->updateDiscount($categories,$discount);
            }
        }

        function updateDiscount($categories,$discount)
        {
            $products = $this->getProductByCategories($categories);
            $IDSK = $this->model->getSK();

            foreach($products as $item)
            {
                $this->model->updateDiscount($IDSK,$item["ID"],$discount);
            }
        }

        function getProductByCategories($ID)
        {
            $result = $this->model->getProductByCategories($ID);

            return json_decode($result,true);
        }

        function updateEvent()
        {
            $name = isset($_POST["event--name"]) ? $_POST["event--name"] : null;
            $content = isset($_POST["event--content"]) ? $_POST["event--content"] : null;
            $dateStart = isset($_POST["event--datestart"]) ? $_POST["event--datestart"] : null;
            $dateEnd = isset($_POST["event--dateend"]) ? $_POST["event--dateend"] : null;

            $this->model->updateEvent($this->ID,$name,$content,$dateStart,$dateEnd, $this->image);
        }

        function removeEvent()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $this->model->removeEvent($ID);
        }

        
        function ChangedImage()
        {            
            $dir = "Public/image/SuKien/";
            $file1 = $_FILES["Image"]["tmp_name"];
            $path1 = $dir .$_FILES["Image"]["name"];

            if(!file_exists($dir))
            {
                mkdir($dir);
            }

            if ($_FILES["Image"]["size"] > 5000000) {
                echo 2;
                return;
            }

            move_uploaded_file($file1,$path1);

            $this->image = $path1;
            $this->insertEvent();
        }
    }
?>