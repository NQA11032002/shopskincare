<?php
    class DonHangModel extends Database
    {
        function loadBill($IDKH)
        {
            $query = "SELECT *, SUM(ct.tongTien) as total,sum(ct.soLuong) as amount FROM `donhang` as dh join chitietdonhang as ct on ct.IDDH = dh.ID 
                      WHERE dh.IDKH = '".$IDKH."'
                      GROUP BY ct.IDDH";

            $result = mysqli_query(self::$connect,$query);
            $arr = array();

            while($row = mysqli_fetch_array($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function loadDetailBill($IDKH,$IDDH)
        {
            $query = "SELECT *, ct.status as statusDetail, ct.ID as idDetail  FROM `donhang` as dh 
                      join chitietdonhang as ct on ct.IDDH = dh.ID 
                      join sanpham as sp on ct.IDSP = sp.ID
                      WHERE dh.IDKH = '".$IDKH."' AND ct.IDDH = '".$IDDH."'";

            $result = mysqli_query(self::$connect,$query);
            $arr = array();

            while($row = mysqli_fetch_array($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function deleteBill($IDKH,$IDDH)
        {
            $delDetail = "DELETE FROM chitietdonhang WHERE IDDH = '".$IDDH."'";
            mysqli_query(self::$connect,$delDetail);

            $delBill = "DELETE FROM donhang WHERE IDKH = '".$IDKH."' AND ID = '".$IDDH."'";
            mysqli_query(self::$connect,$delBill);
        }

        function cancelBill($ID, $status)
        {
            $query = "UPDATE `chitietdonhang` SET `status`='".$status."' WHERE ID = '".$ID."'";

            mysqli_query(self::$connect,$query);
        }
    }
?>