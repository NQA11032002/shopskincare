<?php
    class ChiTietSPModel extends Database
    {
        function getDetailProduct($ID)
        {
            $query = "SELECT * FROM giamgia as gg 
                     join sanpham as sp on gg.IDSP = sp.ID
                     join theloai as tl on sp.IDLoai = tl.ID 
                     join brand as br on sp.IDBrand = br.ID
                     JOIN xuatxu as xx on sp.IDSX = xx.ID
                     join kichthuoc as kt on sp.IDSize = kt.ID 
                     WHERE sp.ID = '".$ID."'
                     GROUP BY sp.ID";

            $arr = array();

            $result = mysqli_query(self::$connect,$query);

            while($rows = mysqli_fetch_assoc($result))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);
        }

        function getProductInvolve($IDLoai)
        {
            $query = "SELECT * FROM `giamgia` as gg 
                      join sanpham as sp on gg.IDSP = sp.ID
                      WHERE sp.IDLoai = '".$IDLoai."'
                      GROUP BY sp.ID";

            $arr = array();

            $result = mysqli_query(self::$connect,$query);

            while($rows = mysqli_fetch_assoc($result))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);    
        }

        function getProductDetailInvolve($ID)
        {
            $query = "SELECT * FROM sanpham AS sp WHERE sp.ID = '".$ID."'";
            $result = mysqli_query(self::$connect,$query);
            $combo = "";

            while($row = mysqli_fetch_array($result))
            {
                $combo = $row["combo"];
            }

            $queryCombo = "SELECT * FROM `giamgia` as gg 
                           join sanpham as sp on gg.IDSP = sp.ID
                           join kichthuoc as kt on sp.IDSize = kt.ID
                           WHERE sp.combo = '".$combo."'
                           GROUP BY sp.ID
                           LIMIT 4";

            $resultCombo = mysqli_query(self::$connect,$queryCombo);

            $arr = array();

            while($rows = mysqli_fetch_assoc($resultCombo))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);
        }

        function review($IDKH,$IDSP,$Review,$Date,$Star)
        {
            $query = "INSERT INTO `binhluan`(`IDKH`, `IDSP`, `binhLuan`, `ngayBL`, `star`) 
                      VALUES ('".$IDKH."','".$IDSP."','".$Review."','".$Date->format('Y-m-d H:i:s')."','".$Star."')";

            mysqli_query(self::$connect,$query);
        }

        function loadReview($IDSP,$amount)
        {
            $query = "SELECT kh.image,kh.hoTen,bl.star,bl.ngayBL,bl.binhLuan FROM binhluan as bl 
                      JOIN khachhang as kh on bl.IDKH = kh.ID
                      JOIN sanpham as sp on bl.IDSP = sp.ID
                      WHERE IDSP = '".$IDSP."'
                      ORDER BY bl.ID DESC
                      LIMIT 0,$amount";

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($rows = mysqli_fetch_array($result))
            {
                $arr[] = $rows;
            }

            return json_encode($arr);
        }

        function lenghtReview($IDSP)
        {
            $query = "SELECT kh.image,kh.hoTen,bl.star,bl.ngayBL,bl.binhLuan 
                      FROM binhluan as bl 
                      JOIN khachhang as kh on bl.IDKH = kh.ID
                      JOIN sanpham as sp on bl.IDSP = sp.ID
                      WHERE IDSP = '".$IDSP."'";

            $result = mysqli_query(self::$connect,$query);
            $lenght = mysqli_num_rows($result);

            return $lenght;
        }   
    }
?>