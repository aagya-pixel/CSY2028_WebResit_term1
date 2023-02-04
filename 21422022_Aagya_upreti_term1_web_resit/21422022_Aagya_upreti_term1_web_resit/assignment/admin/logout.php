<?php
session_start();
//session_destroy destroys session from whole page
session_destroy();
include('../admin/login.php');
?>