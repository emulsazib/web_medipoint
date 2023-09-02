<?php
    require_once('php/db.php');

    function display_data(){
        global $con;
        $query= "Select * from add_product";
        $result = mysqli_query($con,$query);
        return $result;
    }

    
?>