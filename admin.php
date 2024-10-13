<?php
session_start();
checkAccess(['admin']);
echo "Welcome to the Admin Dashboard!";
?>