<?php
session_start();
session_unset();
session_destroy();
localStorage.removeItem('activeTab');
header('location:Index.php');
?>
