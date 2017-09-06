<?php 
    $mydate = date("Y/m/d h:i:s");
    $month = date("Y",strtotime($mydate))."-";
    $month .= date("m",strtotime($mydate));
    echo $month;