<?php

$user='ics325sp2217';
$pass='6697';
$db='ics325sp2217';
$host='http://sp-cfsics.metrostate.edu';
$dbs = mysqli_connect("localhost",$user,$pass,$db);

if(mysqli_connect_error()) {
    echo "Cannot connect to Database.";
}

?>