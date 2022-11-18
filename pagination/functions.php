<?php
    function query($conn, $query){
        $mysqliQuery = mysqli_query($conn, $query);
        while($x = mysqli_fetch_assoc($mysqliQuery)){
            $person[] = $x;
        }
        return $person;
    }
?>