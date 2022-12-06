<?php
    class TinTucModel extends Database
    {
        function loadNews($category = null, $sidebar = false, $amount = null)
        {
            $query = "SELECT * FROM tintuc";

            if($sidebar)
            {
                $query .= " GROUP BY category";
            }

            if(!empty($category))
            {
                $query .= " Where category = '".$category."'";
            }
            else
            {
                $query .= " ORDER BY (ID) LIMIT ".$amount."";
            }

            $result = mysqli_query(self::$connect,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }
    }
?>