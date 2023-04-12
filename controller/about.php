<?php

if(!isset($_SESSION['data'])){
    header("Location:/");
}

require "view/aboutview.php";