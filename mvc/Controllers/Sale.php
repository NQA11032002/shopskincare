<?php
    class Sale extends Controller
    {
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
                        "page" => "Sale",
                        "brand" => $brand,
                        "origin" => $origin,
                        "color" => $color,
                        "size" => $size, 
                        "category" => json_decode($category,true)
                    ]);
                    
        }
    }
?>