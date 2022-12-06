<?php
    class EventModel extends Database
    {
        function apiListEvent($keyword = null)
        {
            $query = "SELECT sk.ID, sk.image, sk.tenSK, sk.ngayBD, sk.ngayKT, sk.noiDung, mg.codes, mg.giagiam
                      FROM sukien as sk join magiam as mg on sk.ID = mg.IDSK";

            if($keyword != null)
            {
                $query .= " WHERE sk.ID = '".$keyword."' or sk.tenSK like '".'%'.$keyword.'%'."'";
            }

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function getProductByCategories($ID)
        {
            $query = "SELECT * FROM sanpham WHERE IDLoai = '".$ID."'";

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function getSK()
        {
            $query = "SELECT MAX(ID) FROM sukien";

            $result = mysqli_query(self::$connect,$query);

            $ID = mysqli_fetch_array($result)[0];

            return $ID;
        }

        function updateDiscount($IDSK,$IDSP,$discount)
        {
            $query = "UPDATE `giamgia` SET `IDSK`='".$IDSK."',`IDSP`='".$IDSP."',`giaGiam`='".$discount."' 
                      WHERE IDSP = '".$IDSP."'";

            mysqli_query(self::$connect,$query);
        }
        
        function insertEvent($name,$content,$dateStart,$dateEnd,$image)
        {
            $query = "INSERT INTO `sukien`(`tenSK`, `ngayBD`, `ngayKT`, `noiDung`, `image`) 
                      VALUES ('".$name."','".$dateStart."','".$dateEnd."','".$content."','".$image."')";

            mysqli_query(self::$connect,$query);
        }

        function insertGiftCode($IDSK, $code, $discount)
        {
            $query = "INSERT INTO `magiam`(`IDSK`, `codes`, `giagiam`) 
                      VALUES ('".$IDSK."','".$code."','".$discount."')";

            mysqli_query(self::$connect,$query);
        }

        function updateEvent($ID,$name,$content,$dateStart,$dateEnd,$image)
        {
            $query = "UPDATE `sukien` SET `tenSK`='".$name."',`ngayBD`='".$dateStart."',
                             `ngayKT`='".$dateEnd."',`noiDung`='".$content."',`image`='".$image."' WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);
        }

        function removeEvent($ID)
        {
            $updateDiscount = "UPDATE `giamgia` SET `IDSK` = NULL, `giaGiam` = 0 WHERE IDSK = '".$ID."'";
            mysqli_query(self::$connect,$updateDiscount);
            
            $updateCodeDiscount= "DELETE FROM `magiam` WHERE IDSK = '".$ID."'";
            mysqli_query(self::$connect,$updateCodeDiscount);

            $removeGiftCode = "DELETE FROM magiam WHERE IDSK = '" . $ID . "'";
            mysqli_query(self::$connect,$removeGiftCode);

            $query = "DELETE FROM `sukien` WHERE ID = '".$ID."'";
            mysqli_query(self::$connect,$query);
        }
    }
?>