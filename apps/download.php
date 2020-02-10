<?php
// var_dump($_POST);
// die;
    if (isset($_POST["docx"])) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($_POST["docx"]).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($_POST["docx"]));
        readfile($_POST["docx"]);
        header("Location: ../index.php");
        exit;
    }
    if (isset($_POST["pdf"])) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($_POST["pdf"]).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($_POST["pdf"]));
        readfile($_POST["pdf"]);
        header("Location: ../index.php");
        exit;
    }
?>


