<?php

$con = mysqli_connect("localhost" , "root" , "" , "blog");

if(!$con){
    die('connection failed' . mysqli_connect_error());
}
