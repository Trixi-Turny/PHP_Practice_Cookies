<?php
// Include the first block of HTML (beginning of page and h1)
include 'includes/header.php';
?>

		<div class="nav">
            <?php
            // Include the dynamic menu script
            include 'includes/menu.php';
            ?>
		</div>
		
        <h2>Welcome</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum.</p>


  <?php

 $self = htmlentities($_SERVER['PHP_SELF']);

  
?>

            <form action = "<?php $self ;?>" method = "POST">
                <fieldset>

                <input type = text value = "<?php ?>" name = "title">

                <input type = "submit" name = "submit" value = "change title"> 

                </fieldset>
            </form>
        
<?php
// Include the footer and closing body/html tags
include 'includes/footer.php';
?>






