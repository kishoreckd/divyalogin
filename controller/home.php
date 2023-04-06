<?php
if (!isset($_SESSION['no'])) {
    header('location:/');
}
require "view/homeview.php";