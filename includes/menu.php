<?php
/*
 * This file is responsible for creating the site menu.
 * It is included on all pages making site management easy!
 */
            
// The pages of the website. 
// When we add new pages to the site, we add them to this array
$pages = array(
    'index.php' => 'Home',
    'people.php' => 'People',
    'weather.php' => 'Weather'
);

// Build the HTML menu
$menu = '<ul>' . PHP_EOL;
foreach ($pages as $url => $title) {
    $menu .= '<li><a href="' . $url . '">' . $title . '</a></li>' . PHP_EOL;
}
$menu .= '</ul>' . PHP_EOL;

// Echo the completed HTML menu
echo $menu;
?>
