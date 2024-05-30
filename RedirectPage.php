<?php ob_start(); ?>
<h1> My Page </h1>
<h2> This is my page </h2>

<?php
$redirect_page = 'https://youtube.com';
$redirect = false;
if($redirect == true){
    header('Location: ' .$redirect_page);
}
ob_end_flush();
?>