<?php
session_start();
require "config.php";
session_destroy();
?>
<script>
alert("you have successfully logged out");
    window.location='login.php';
</script>
