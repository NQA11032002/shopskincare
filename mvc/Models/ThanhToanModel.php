<?php
    class ThanhToanModel extends Database
    {
        function discount($code)
        {
            $query = "SELECT * from magiam where codes = '".$code."'";
            $result = mysqli_query(self::$connect,$query);
            $array = array();

            while($rows = mysqli_fetch_assoc($result))
            {
                $array[] = $rows;
            }

            return json_encode($array);
        }
    }
?>