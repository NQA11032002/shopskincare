<?php
    class HomeModel extends Database
    {
        function amountAccount()
        {
            $query = "SELECT COUNT(ID) FROM `taikhoan`";

            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }

        function amountProductSelled()
        {
            $query = "SELECT SUM(soLuong) FROM `lichsubanhang`";
            
            $result = mysqli_query(self::$connect, $query);
            
            return mysqli_fetch_row($result)[0];
        }

        function amountProduct()
        {
            $query = "SELECT COUNT(ID) FROM `sanpham`";

            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }
        
        function amountLogined()
        {
            $query = "SELECT COUNT(ID) FROM `taikhoan` WHERE status = 1";

            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }

        function apiTopProductSellest()
        {
            $query = "SELECT sp.image, sp.tenSP, SUM(soLuong) * sp.giaSP as total FROM `lichsubanhang` as ls join sanpham as sp on ls.IDSP = sp.ID WHERE 1 group BY(IDSP) ORDER BY SUM(soLuong) ASC LIMIT 3";
            
            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function apiNewUser()
        {
            $query = "SELECT kh.ID, kh.image, kh.hoTen, tk.role FROM khachhang as kh JOIN taikhoan as tk on kh.IDTK = tk.ID ORDER BY ID DESC LIMIT 4";

            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function productSelledOfMonth()
        {
            $query = "SELECT SUM(soLuong) FROM `lichsubanhang` WHERE MONTH(ngayBan) = MONTH(NOW()) and YEAR(ngayBan) = YEAR(NOW())";
            
            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }

        function productDiscountOfMonth()
        {
            $query = "SELECT COUNT(gg.ID) FROM `sukien` as sk join giamgia as gg on gg.IDSK = sk.ID WHERE MONTH(sk.ngayBD) = MONTH(NOW()) and YEAR(SK.ngayBD) = YEAR(NOW())";

            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }

        function revenueOfMonth()
        {
            $query = "SELECT SUM(ls.soLuong * sp.giaSP) FROM `lichsubanhang` as ls join sanpham as sp on ls.IDSP = sp.ID WHERE MONTH(ls.ngayBan) = MONTH(NOW()) and YEAR(ls.ngayBan) = YEAR(NOW())";

            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }

        function billOfMonth()
        {
            $query = "SELECT COUNT(ID) FROM `donhang` WHERE MONTH(ngayDat) = MONTH(NOW()) and YEAR(ngayDat) = YEAR(NOW())";

            $result = mysqli_query(self::$connect, $query);

            return mysqli_fetch_row($result)[0];
        }

        function topCustomerLoyal()
        {
            $query = "SELECT kh.image, kh.hoTen,SUM(ls.soLuong) as amount,SUM((ls.soLuong * sp.giaSP)) as total FROM `lichsubanhang` as ls join khachhang as kh on ls.IDKH = kh.ID join sanpham as sp on ls.IDSP = sp.ID WHERE 1 GROUP BY IDKH ORDER BY SUM((ls.soLuong * sp.giaSP)) DESC LIMIT 3";
                
            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function topCustomerRank()
        {
            $query = "SELECT kh.image,kh.hoTen,kh.ranks FROM `khachhang` as kh WHERE 1 ORDER BY ranks DESC LIMIT 3";

            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function chartProductSelled()
        {
            $query = "SELECT SUM(soLuong) as total, MONTH(ngayBan) as month FROM `lichsubanhang` WHERE 1 GROUP BY MONTH(ngayBan) ORDER BY MONTH(ngayBan)";

            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }

        function amountNewBills()
        {
            $query = "SELECT * FROM `donhang` as dh join khachhang as kh on dh.IDKH = kh.ID WHERE tinhTrang = 'Đang xử lý'";

            $result = mysqli_query(self::$connect, $query);

            $array = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }

            return json_encode($array);
        }
    }
?>