<?php

if(!isset($_SESSION['data'])){
    header("Location:/");
}


require "view/homeview.php";