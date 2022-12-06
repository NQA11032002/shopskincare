<?php
    class TinTuc extends controller
    {
        function show()
        {
            $model = self::model("SanPhamModel");
            $data = $model->bestProductSelling();

            $model = self::model("TinTucModel");
            $newsOne = json_decode($model->loadNews(1,false),true);
            $newsTwo = json_decode($model->loadNews(2,false),true);
            $topNews = json_decode($model->loadNews(null,false,4),true);
            $sidebar = json_decode($model->loadNews(null,true,4),true);

            self::view("master",
                    [
                        "page" => "TinTuc",
                        "productHot" => $data,
                        "newsOne" => $newsOne,
                        "newsTwo" => $newsTwo,
                        "topNews" => $topNews,
                        "sidebar" => $sidebar,
                    ]);
        }
    }
?>