<?php
    class SanPham extends controller{
        function show()
        {
            $model = $this->model("SanPhamModel");
            $brand = $model->getBrand();
            $origin = $model->getOrigin();
            $color = $model->getColor();
            $size = $model->getSize();
            $category = $model->getCategories();

            self::view("master",
                    [  
                        "page" => "SanPham",
                        "brand" => $brand,
                        "origin" => $origin,
                        "color" => $color,
                        "size" => $size, 
                        "category" => json_decode($category,true)
                    ]);           
        }

        function getCategories()
        {
            $model = $this->model("SanPhamModel");

            $result = $model->getCategories();

            echo $result;
        }
    }
?>