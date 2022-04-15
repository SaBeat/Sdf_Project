<?php
session_start();
session_destroy();
header("Location: /sdf/index.php");
?>