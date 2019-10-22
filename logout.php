<?php
session_start();
session_destroy();
header('location:index.php');//rediect to index page after logout
exti();
?>