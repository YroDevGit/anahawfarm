<?php
$file_path = 'db/connections.php';  // Replace with the actual file path

try {
    if (unlink($file_path)) {
        header("refresh:0;url=http://localhost/farmers.com");
    } else {
        //echo 'Error deleting file.';
    }
} catch (Exception $e) {
    //echo 'Error: ' . $e->getMessage();
}
?>
