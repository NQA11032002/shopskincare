<?php
    class BillsModel extends Database
    {
        function loadBill($keyword,$page,$amountPage)
        {
            $temp = $page * $amountPage;
            
            $query = "SELECT * FROM `donhang` WHERE tinhTrang = 'Đang xử lý' OR tinhTrang = 'Đã duyệt'";

            if($keyword != null)
            {
                $query .= " AND ID = '".$keyword."' or MONTH(ngayDat) = '".$keyword."'";
            }

            $query .= " ORDER BY ID DESC LIMIT $temp,$amountPage";

            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function lengthListBill($keyword)
        {
            $query = "SELECT * FROM `donhang` WHERE tinhTrang = 'Đang xử lý' OR tinhTrang = 'Đã duyệt'";

            if($keyword != null)
            {
                $query .= " AND ID = '".$keyword."' or MONTH(ngayDat) = '".$keyword."'";
            }

            $query .= " ORDER BY ID DESC";

            $result = mysqli_query(self::$connect, $query);
            $length = mysqli_num_rows($result);
            
            return $length;
        }

        function loadDetailBill($ID)
        {
            $query = "SELECT ct.ID, ct.status, ct.IDSP, ct.soLuong, ct.Size, ct.tongTien, ct.cachThanhToan, ct.ten, ct.diaChi, ct.sdt, ct.email, ct.ghiChu, sp.tenSP 
                      FROM `chitietdonhang` as ct 
                      join sanpham as sp on ct.IDSP = sp.ID 
                      WHERE IDDH = '".$ID."'";

            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function cancelBill($ID)
        {
            $removeDetailBill = "DELETE FROM `chitietdonhang` WHERE IDDH = '".$ID."'";
            mysqli_query(self::$connect, $removeDetailBill);

            $removeBill = "DELETE FROM `donhang` WHERE ID = '".$ID."'";
            mysqli_query(self::$connect, $removeBill);
        }

        function checkBill($ID,$status,$IDKH)
        {
            if(strcmp($status, "Đã nhận hàng") == 0)
            {
                $arr = json_decode($this->loadDetailBill($ID), true);
                $date = date("Y-m-d");
                
                foreach($arr as $item)
                {
                    $insertHistory = "INSERT INTO `lichsubanhang`(`IDKH`, `IDSP`, `soLuong`, `ngayBan`) 
                                      VALUES ('".$IDKH."','".$item["IDSP"]."','".$item["soLuong"]."','".$date."')";
                    
                    mysqli_query(self::$connect, $insertHistory);
                }

                $updateBill = "UPDATE donhang SET `tinhTrang`= '".$status."' WHERE ID = '".$ID."'";
                mysqli_query(self::$connect, $updateBill);
            }
            else if(strcmp($status, "Đã duyệt") == 0)
            {
                $updateBill = "UPDATE donhang SET `tinhTrang`= '".$status."' WHERE ID = '".$ID."'";
                mysqli_query(self::$connect, $updateBill);
            }
        }

        function confirmCancelBill($ID, $IDDH, $status)
        {
            $query ="UPDATE `chitietdonhang` SET `status`= '".$status."' WHERE ID = '".$ID."'";

            mysqli_query(self::$connect, $query);

            $amountProductInBill = $this->getAmountProductBill($IDDH);
            $amountProductCancelInBill = $this->getAmountProductBill($IDDH, $status);

            if($amountProductInBill - $amountProductCancelInBill <= 0)
            {
                $this->updateStatusBill($IDDH);
            }
        }

        function getAmountProductBill($IDDH, $status = null)
        {
            $query = "SELECT * FROM chitietdonhang WHERE IDDH = '".$IDDH."'";

            if(!empty($status))
            {
                $query .= " AND status = ".$status."";
            }

            $result = mysqli_query(self::$connect, $query);
            
            return mysqli_num_rows($result);
        }

        function updateStatusBill($IDDH)
        {
            $query = "UPDATE donhang SET tinhTrang = 'Đã hủy hàng' WHERE ID = '".$IDDH."'";

            mysqli_query(self::$connect, $query);
        }
    }
?>