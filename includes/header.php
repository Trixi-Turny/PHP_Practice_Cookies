<?php
if ($form_is_submitted == true && $errors_detected == false) {
    setcookie('site_title', $clean['site_title'], 0, '/');
    echo "cookie".$_COOKIE['site_title'];
}
?>
<?php
// Store valid styles in an array for convenience
$site_styles = array('plain', 'light', 'dark'); 

// Variables to store data/errors
$clean = array();
$errors = array();

// "State" flags
$form_is_submitted = false;
$errors_detected = false;

// Check for submitted form
if (isset($_POST['personalise'])) {
    $form_is_submitted = true;
    
    // Validate the site title
    if (isset($_POST['site_title'])) {
        $trimmed = trim($_POST['site_title']);
        if ($trimmed != '') {
            $clean['site_title'] = $trimmed;
            echo "clean".$clean['site_title'];
        } else {
            $errors[] = 'Site title is empty';
            $errors_detected = true;
             echo "error".$errors['site_title'];
        }
    } else {
        $errors[] = 'Site title not submitted';
        $errors_detected = true;
    }
    
    // Use the built-in "in_array" function to validate the style selection
    if (isset($_POST['site_style']) && in_array($_POST['site_style'], $site_styles)) {
        $clean['site_style'] = $_POST['site_style'];
    } else {
        $errors[] = 'Style not submitted or not valid';
        $errors_detected = true;
    }
}

// If the form was submitted and data was valid...


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
      $title  = isset($_COOKIE['site_title']) ? $_COOKIE['site-title']:"P1" ;
    ?>
        
        <h1><a href="index.php"><?php echo $title;?> </a></h1>
