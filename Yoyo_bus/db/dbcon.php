<?php
$con = mysqli_connect('localhost','root','','yoyo_bus');
if ($con) {
     "Success";
}else{
        die(mysqli_error($con));
    }


?>