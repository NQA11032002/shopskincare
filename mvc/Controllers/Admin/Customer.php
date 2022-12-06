<?php
    class Customer extends controller
    {
        private $model;

        function __construct()
        {
            $this->model = $this->modelAdmin('CustomerModel');
        }

        function show()
        {
            self::viewAdmin('master', ["page" => "Customer"]);
        }

        function apiListCustomer()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;
            $page = isset($_POST["page"]) ? $_POST["page"] : null;
            $amountElement = isset($_POST["amountElement"]) ? $_POST["amountElement"] : null;

            $result = $this->model->apiListCustomer($keyword,$page,$amountElement);

            echo $result;
        }
        
        function lengthListCustomer()
        {
            $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;
            $result = $this->model->lengthListCustomer($keyword);

            echo $result;
        }
        
        function removeCustomer()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            if($ID == null)
            {
                echo 0;
            }
            else
            {
                $this->model->removeCustomer($ID);
            }
        }

        function updateCustomer()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $birthDay = isset($_POST["birthDay"]) ? $_POST["birthDay"] : null;
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
            $phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
            $address = isset($_POST["address"]) ? $_POST["address"] : null;
            $rank = isset($_POST["rank"]) ? $_POST["rank"] : null;
            $role = isset($_POST["role"]) ? $_POST["role"] : null;

            $this->model->updateCustomer($ID,$name,$birthDay,$gender,$phone,$address,$rank,$role);
        }

        function changedAvatar()
        {
            $ID = isset($_GET["ID"]) ? $_GET["ID"] : null;
            
            $dir = "Public/image/Avatar";
            $file = $_FILES["Avatar"]["tmp_name"];
            $date = date("Y_m_d_H_s_i");
            $nameFile = explode('.',$_FILES["Avatar"]["name"]);
            $path = $dir."/".$nameFile[0].$date.'.'.$nameFile[1];  

            if(!file_exists($dir))
            {
                mkdir($dir);
            }
            
            $arrayFile = array("jpg","png","jpeg","gif");
            $fileName = pathinfo($_FILES["Avatar"]["name"], PATHINFO_EXTENSION);
            $checkFile = false;

            foreach($arrayFile as $item)
            {
                if(strcmp($fileName,$item) == 0)
                {
                    $checkFile = true;
                }
            }

            
            if ($_FILES["Avatar"]["size"] > 1000000)
            {
                echo 2;
            }
            else if($checkFile)
            {
                move_uploaded_file($file,$path);
                
                $this->model->updateAvatarCustomer($ID,$path);

                echo $path;
            }
            else
            {
                echo 0;
            }
        }
    }
?>