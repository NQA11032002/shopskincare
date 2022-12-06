<?php
    class SanPhamModel extends Database
    {
        public function getCategories()
        {
            $query = "SELECT * FROM theloai";
            $result = mysqli_query(self::$connect,$query);

            $array = array();
            
            while($rows = mysqli_fetch_assoc($result))
            {
                $array[] = $rows;
            }
            
            return json_encode($array);
        }
        public function loadSP($brand,$origin,$size,$color,$fromPrice,$toPrice,$category,$sorted,$reducePrice,$page,$countProduct)
        {            
            $query = self::getQuery($brand,$origin,$size,$color,$fromPrice,$toPrice,$category,$sorted,$reducePrice);

            $temp = $page * $countProduct;
            $query .= " LIMIT $temp,$countProduct";

            $result = mysqli_query(self::$connect,$query);
            $arr = array();
            
            while($rows = mysqli_fetch_assoc($result))
            {
                $arr[] = $rows;
            }
            
            return json_encode($arr);      
        }

        public function getRows($brand,$origin,$size,$color,$fromPrice,$toPrice,$category,$sorted,$reducePrice,$countProduct)
        {
            $query = self::getQuery($brand,$origin,$size,$color,$fromPrice,$toPrice,$category,$sorted,$reducePrice);

            $result = mysqli_query(self::$connect,$query);

            $numRows = mysqli_num_rows($result);

            $numPages = $numRows / $countProduct;

            return $numPages;
        }

        public function getQuery($brand,$origin,$size,$color,$fromPrice,$toPrice,$category,$sorted,$reducePrice)
        {
            if($reducePrice > 0)
            {
                $query = "SELECT * FROM `giamgia` as gg 
                join sanpham as sp on gg.IDSP = sp.ID
                join kichthuoc as kt on sp.IDSize = kt.ID WHERE gg.giaGiam > 0 and sp.status = 1";
            }
            else
            {
                $query = "SELECT * FROM `giamgia` as gg 
                join sanpham as sp on gg.IDSP = sp.ID
                join kichthuoc as kt on sp.IDSize = kt.ID
                WHERE sp.status = 1";
            }

            
            if($category != null)
            {
                $category_filter = implode("','", $category);
                $query .= " AND sp.IDLoai IN ('".$category_filter."')";
            }

            if($brand != null)
            {
                $brand_filter = implode("','", $brand);
                $query .= " AND sp.IDBrand IN ('".$brand_filter."')";
            }
            
            if($origin != null)
            {
                $origin_filter = implode("','", $origin);
                $query .= " AND sp.IDSX IN ('".$origin_filter."')";
            }

            if($size != null)
            {
                $size_filter = implode("','", $size);
                $query .= " AND sp.IDSize IN ('".$size_filter."')";
            }

            if($color != null)
            {
                $color_filter = implode("','", $color);
                $query .= " AND sp.IDMau IN ('".$color_filter."')";
            }

            if($fromPrice != null && $toPrice)
            {
                $query .= " AND (sp.giaSP - (sp.giaSP * (gg.giaGiam / 100))) BETWEEN '".$fromPrice."' AND '".$toPrice."'";
            }

            $query .= " GROUP BY sp.ID";

            if($sorted != null)
            {
                switch($sorted)
                {
                    case "ASCZ":
                        $query .= " ORDER BY sp.tenSP";
                        break;
                    case "DESCA":
                        $query .= " ORDER BY sp.tenSP DESC";
                        break;
                    case "ASC":
                        $query .= " ORDER BY (sp.giaSP - (sp.giaSP * (gg.giaGiam / 100)))";
                        break;
                    case "DESC":
                        $query .= " ORDER BY (sp.giaSP - (sp.giaSP * (gg.giaGiam / 100))) DESC";
                        break;                    
                }
            }

            return $query;
        }
        
        // public function getCategories()
        // {
        //     $query = "SELECT * FROM theloai";

        //     $result = mysqli_query(self::$connect,$query);

        //     return $result;
        // }

        public function getBrand()
        {
            $query = "SELECT * FROM brand";

            $result = mysqli_query(self::$connect,$query);

            return $result;
        }
        
        public function getOrigin()
        {
            $query = "SELECT * FROM xuatxu";

            $result = mysqli_query(self::$connect,$query);

            return $result;
        }

        public function getColor()
        {
            $query = "SELECT * FROM mausac";

            $result = mysqli_query(self::$connect,$query);

            return $result;
        }
        public function getSize()
        {
            $query = "SELECT * FROM kichthuoc";

            $result = mysqli_query(self::$connect,$query);

            return $result;
        }

        public function searchProduct($keyWord)
        {
            $query = "SELECT * FROM `giamgia` as gg 
            join sanpham as sp on gg.IDSP = sp.ID 
            WHERE sp.tenSP like '".'%'.$keyWord.'%'."' GROUP BY sp.ID";
    
    
            $result = mysqli_query(self::$connect,$query);
    
            $arr = array();
    
            while($rows = mysqli_fetch_assoc($result))
            {   
                $arr[] = $rows;
            }

            return json_encode($arr);
        }
        
        public function search($keyWord)
        {
            $query = "SELECT * FROM `giamgia` as gg 
            join sanpham as sp on gg.IDSP = sp.ID 
            join kichthuoc as kt on sp.IDSize = kt.ID
            WHERE sp.tenSP like '".'%'.$keyWord.'%'."' GROUP BY sp.ID";
    
            $result = mysqli_query(self::$connect,$query);

            return $result;
        }

        function increaseFavourite($IDKH,$IDSP)
        {
            $query = "INSERT INTO `danhsachyeuthich`(`IDKH`, `IDSP`) 
                      VALUES ('".$IDKH."','".$IDSP."')";
        
            mysqli_query(self::$connect,$query);
        }

        function getFavourite($IDKH)
        {
            $query = "SELECT ds.ID,ds.IDSP,sp.IDLoai,sp.tenSP,sp.image,sp.giaSP,sp.status,gg.giaGiam FROM danhsachyeuthich as ds 
                      join sanpham as sp on ds.IDSP = sp.ID 
                      join giamgia as gg on gg.IDSP = sp.ID
                      WHERE ds.IDKH = '".$IDKH."'
                      GROUP BY ds.IDSP";

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($rows = mysqli_fetch_array($result))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);
        }
        
        function deleteFavourite($IDKH,$ID)
        {
            $query = "SELECT * from danhsachyeuthich WHERE ID = '".$ID."'";

            $result = mysqli_query(self::$connect,$query);

            while($rows = mysqli_fetch_array($result))
            {
                $del = "DELETE FROM danhsachyeuthich WHERE IDKH = '".$IDKH."' AND IDSP = '".$rows["IDSP"]."'";
                mysqli_query(self::$connect,$del);
            }
        }
        
        function getStarProduct()
        {
            $query = "SELECT IDSP,COUNT(IDSP) as amountStar FROM `binhluan` WHERE star = 5 GROUP BY IDSP";

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($rows = mysqli_fetch_array($result))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);
        }

        public function saleHome()
        {
            $query = "SELECT * FROM `giamgia` as gg 
                      join sanpham as sp on gg.IDSP = sp.ID 
                      join kichthuoc as kt on sp.IDSize = kt.ID 
                      GROUP BY sp.ID 
                      LIMIT 4";
            
            return mysqli_query(self::$connect,$query);;
        }

        public function productSale()
        {
            $query = "SELECT * FROM `giamgia` as gg 
            join sanpham as sp on gg.IDSP = sp.ID 
            join kichthuoc as kt on sp.IDSize = kt.ID 
            where gg.giaGiam > 0
            GROUP BY sp.ID";
            
            return mysqli_query(self::$connect,$query);;
        }

        public function bestProductSelling()
        {
            $query = "SELECT sp.ID,sp.tenSP,sp.image,sp.image1,sp.image2,sp.giaSP,gg.giaGiam,sp.IDLoai,kt.size,sp.IDSize,sum(ls.soLuong) 
                      FROM lichsubanhang as ls 
                      join sanpham as sp on ls.IDSP = sp.ID 
                      JOIN giamgia as gg on gg.IDSP = sp.ID 
                      join kichthuoc as kt on sp.IDSize = kt.ID
                      GROUP BY ls.IDSP 
                      HAVING sum(ls.soLuong) >= 5 
                      ORDER BY `sum(ls.soLuong)` DESC 
                      LIMIT 8";
                      
            return mysqli_query(self::$connect,$query);
        }
        public function productSalePage($page,$countPage)
        {
            $temp = $page * $countPage;

            $query = "SELECT * FROM `giamgia` as gg 
                      join sanpham as sp on gg.IDSP = sp.ID 
                      join kichthuoc as kt on sp.IDSize = kt.ID 
                      where gg.giaGiam > 0 
                      GROUP BY sp.ID
                      LIMIT $temp,$countPage";
            
            return mysqli_query(self::$connect,$query);;
        }
        public function countRow($countPage)
        {

            $query = "SELECT * FROM `giamgia` as gg 
                      join sanpham as sp on gg.IDSP = sp.ID 
                      GROUP BY sp.ID
                      where gg.giaGiam > 0";
            $result = mysqli_query(self::$connect,$query);
            $numRows = mysqli_num_rows($result);

            $numPage = $numRows / $countPage;

            return $numPage;
        }
    }
?>