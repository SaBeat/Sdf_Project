<?php

$conn = mysqli_connect("localhost", "root", "12345678", "new_db");

if (!$conn) {
    echo "Connection Failed";
}