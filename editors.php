<?php
if ($_SERVER["REQUEST_URI"] == '/editor.php') {
    checkAccess(['admin', 'editor']);
    echo "Welcome to the editor page!";
    echo "edit away and have fun";
    exit;
}

?>