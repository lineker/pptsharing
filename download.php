<?php
ob_start();
$file = urldecode(htmlspecialchars($_GET["name"]));
//echo $file;
if($file) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_flush();
    ob_clean();
    flush();
    readfile($file);
    exit;
} else {
	echo 'ERROR';
}
?>