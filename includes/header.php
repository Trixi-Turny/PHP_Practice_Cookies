<?php
  if (isset($_POST['submit'])){
      $userSetTitle = trim($_POST['title']);
      $userSetTitle = htmlentities($userSetTitle);
       setcookie("title", $userSetTitle, 0, '/');
       echo "cookie".$_COOKIE['title']; 
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Web Programming using PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/plain.css" />
</head>
<body>
	<div id="page">


<?php
  $title = isset($_COOKIE['title']) ?  $_COOKIE['title'] :  "P1" ;
?>
        <h1><a href="index.php"><?php echo $title ?></a></h1>
