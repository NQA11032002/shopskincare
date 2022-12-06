<?php
    class ProductModel extends Database
    {
        function apiListProduct($page,$amountProduct,$keyword)
        {
            $temp = $page * $amountProduct;
            
            $query = "SELECT tl.tenTL,br.tenBrand,s.size,m.tenMau,sx.tenSX,sp.tenSP, sp.giaSP, 
            sp.image,sp.image1,sp.image2,sp.moTa,sp.congDung, 
            sp.suDung, sp.gioiThieuTH,sp.status,sp.ID,
            sp.IDLoai,sp.IDBrand,sp.IDSize,sp.IDMau,sp.IDSX,sp.combo
            FROM sanpham as sp 
            JOIN theloai as tl on sp.IDLoai = tl.ID 
            JOIN brand as br on sp.IDBrand = br.ID 
            JOIN kichthuoc as s on sp.IDSize = s.ID 
            JOIN mausac as m on sp.IDMau = m.ID 
            JOIN xuatxu as sx on sp.IDSX = sx.ID";

            if($keyword != null)
            {
                $query.= " WHERE sp.ID = '".$keyword."' or sp.tenSP like '".'%'.$keyword.'%'."'";
            }

            $query .= " ORDER BY sp.ID LIMIT $temp,$amountProduct";
    
            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function lengthListProduct($keyword)
        {
            $query = "SELECT tl.tenTL,br.tenBrand,s.size,m.tenMau,sx.tenSX,sp.tenSP, sp.giaSP, 
            sp.image,sp.image1,sp.image2,sp.moTa,sp.congDung, 
            sp.suDung, sp.gioiThieuTH,sp.status,sp.ID,
            sp.IDLoai,sp.IDBrand,sp.IDSize,sp.IDMau,sp.IDSX,sp.combo
            FROM sanpham as sp 
            JOIN theloai as tl on sp.IDLoai = tl.ID 
            JOIN brand as br on sp.IDBrand = br.ID 
            JOIN kichthuoc as s on sp.IDSize = s.ID 
            JOIN mausac as m on sp.IDMau = m.ID 
            JOIN xuatxu as sx on sp.IDSX = sx.ID";

            if($keyword != null)
            {
                $query.= " WHERE sp.ID = '".$keyword."' or sp.tenSP like '".'%'.$keyword.'%'."'";
            }

            $result = mysqli_query(self::$connect, $query);
            $length = mysqli_num_rows($result);
            
            return $length;
        }

        function apiCategories($ID = null)
        {
            $query = "SELECT * FROM theLoai";
            
            if($ID != null)
            {
                $query .= " WHERE ID = '".$ID."' or tenTL like '".'%'.$ID.'%'."'";
            }

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function apiBrands($keyword = null)
        {
            $query = "SELECT * FROM brand";
            
            if($keyword != null)
            {
                $query .= " WHERE ID = '".$keyword."' or tenBrand like '".'%'.$keyword.'%'."'";
            }

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function apiSizes()
        {
            $query = "SELECT * FROM kichthuoc";
            
            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function apiColors()
        {
            $query = "SELECT * FROM mausac";
            
            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function apiProduces($keyword = null)
        {
            $query = "SELECT * FROM xuatxu";
            
            if($keyword != null)
            {
                $query .= " WHERE ID = '".$keyword."' OR tenSX like '".'%'.$keyword.'%'."'";
            }

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function apiCombo()
        {
            $query = "SELECT * FROM combo";
            
            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function createCombo($name)
        {
            $query = "INSERT INTO `combo`(`tenCombo`) VALUES ('".$name."')";

            mysqli_query(self::$connect,$query);
        }

        function updateProduct($ID,$IDCategory,$IDBrand,$IDSize,$IDColor,$IDProduce,$Image1,$Image2,$Image3,$name,$price,$description,$effect,$usage,$introduce,$combo)
        {
            $query = "UPDATE `sanpham` SET `IDLoai`='".$IDCategory."',`IDBrand`='".$IDBrand."',`IDSize`='".$IDSize."',`IDMau`='".$IDColor."',`IDSX`='".$IDProduce."',
                            `tenSP`='".$name."',`giaSP`='".$price."', `moTa`='".$description."',`congDung`='".$effect."',`suDung`='".$usage."',`gioiThieuTH`='".$introduce."',
                            `combo`='".$combo."',`image` = '".$Image1."', `image1` = '".$Image2."', `image2` = '".$Image3."'
                            WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);
        }
        
        function insertProduct($IDCategory,$IDBrand,$IDSize,$IDColor,$IDProduce,$image1,$image2,$image3,$name,$price,$description,$effect,$usage,$introduce,$combo)
        {
            $insertProduct = "INSERT INTO `sanpham`(`IDLoai`, `IDBrand`, `IDSize`, `IDMau`, `IDSX`, `tenSP`, `giaSP`, `image`, `image1`, `image2`, `moTa`, `congDung`, `suDung`, `gioiThieuTH`, `combo`, `status`) 
                      VALUES ('".$IDCategory."','".$IDBrand."','".$IDSize."','".$IDColor."','".$IDProduce."','".$name."','".$price."','".$image1."','".$image2."','".$image3."','".$description."','".$effect."','".$usage."','".$introduce."','".$combo."',1)";

            mysqli_query(self::$connect,$insertProduct);

            $selectID = "SELECT Max(ID) FROM `sanpham`";
            $result = mysqli_query(self::$connect,$selectID);
            $IDSP = mysqli_fetch_array($result)[0];
            
            $this->insertDiscount($IDSP);
        }

        function insertDiscount($IDSP)
        {
            $query = "INSERT INTO `giamgia`(`IDSK`, `IDSP`, `giaGiam`) 
            VALUES (null,'".$IDSP."',0)";
            mysqli_query(self::$connect,$query);          
        }

        function removeProduct($IDSP)
        {
            $removeDiscount= "DELETE FROM `giamgia` WHERE IDSP = '".$IDSP."'";
            mysqli_query(self::$connect,$removeDiscount);    

            $removeProduct = "DELETE FROM `sanpham` WHERE ID = '".$IDSP."'";
            mysqli_query(self::$connect,$removeProduct);          
        }

        function insertCategories($name,$category)
        {
            $query = "INSERT INTO `theloai`(`ID`, `tenTL`, `Loai`) 
                     VALUES ('[value-1]','".$name."','".$category."')";

            mysqli_query(self::$connect,$query);    
        }

        function removeCategories($ID)
        {
            $selectProduct = "SELECT ID FROM sanpham WHERE IDLoai = '".$ID."'";
            $result = mysqli_query(self::$connect, $selectProduct);

            while($row = mysqli_fetch_array($result))
            {
                $removeProduct = "DELETE FROM `binhluan` WHERE IDSP = '".$row["ID"]."'";
                mysqli_query(self::$connect,$removeProduct);  

                $removeSale = "DELETE FROM `giamgia` WHERE IDSP = '".$row["ID"]."'";
                mysqli_query(self::$connect,$removeSale);   

                $removeHistory = "DELETE FROM `lichsubanhang` WHERE IDSP = '".$row["ID"]."'";
                mysqli_query(self::$connect,$removeHistory);  
                
                $removeLike= "DELETE FROM `danhsachyeuthich` WHERE IDSP = '".$row["ID"]."'";
                mysqli_query(self::$connect,$removeLike);  
            }

                        
            $removeProduct = "DELETE FROM `sanpham` WHERE IDLoai = '".$ID."'";
            mysqli_query(self::$connect,$removeProduct);   

            $query = "DELETE FROM `theloai` WHERE ID = '".$ID."'";
            mysqli_query(self::$connect,$query);    
        }

        function updateCategories($ID,$name,$category)
        {
            $query = "UPDATE `theloai` SET `tenTL`='".$name."',`Loai`='".$category."' 
                      WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);    
        }

        public function insertProduce($name)
        {
            $query = "INSERT INTO `xuatxu`(`tenSX`) 
                        VALUES ('".$name."')";

            mysqli_query(self::$connect,$query);
        }

        function updateProduce($ID,$name)
        {
            $query = "UPDATE `xuatxu` SET `tenSX`='".$name."'
                      WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);    
        }

        function removeProduce($ID)
        {
            $query = "DELETE FROM `xuatxu` WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);    
        }

        public function insertBrand($name)
        {
            $query = "INSERT INTO `brand`(`tenBrand`) 
                        VALUES ('".$name."')";

            mysqli_query(self::$connect,$query);
        }

        function updateBrand($ID,$name)
        {
            $query = "UPDATE `brand` SET `tenBrand`='".$name."'
                      WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);    
        }

        function removeBrand($ID)
        {
            $query = "DELETE FROM `brand` WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);    
        }
    }
?>