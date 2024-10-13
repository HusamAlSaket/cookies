<?php
session_start();

function checkAccess($allowedRoles) {
    if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $allowedRoles)) {
        echo "Access Denied.";
        exit;
    }
}
?>
