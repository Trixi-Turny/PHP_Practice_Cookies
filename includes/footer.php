		<div id="footer">
            <h3>Personalise this website</h3>
            <?php
            // Collect the output in a variable
            // This will end up containing either the form or success messages
            $footer_output = '';
            
            // use the state variables set in header.php to decide what action to take
          if (isset($_COOKIE['style']) && isset($_COOKIE['site_title'])){
             $self = htmlentities($_SERVER['PHP_SELF']);
                $footer_output = '<form action='. $self . ' method="post"><input type = "submit" value = "Delete Cookies" name = "deleteCookies"/></form>' ;
                if(isset($_POST['deleteCookies'])){
                   setcookie('site_title', "", time()-(2*24*60*60),'/');
                   setcookie('style', "", time()-(2*24*60*60),'/');
                }
            } else {

                // Either the form was not submitted, or it was submitted and errors were detected.
            
                // If we are redisplaying the form... i.e. errors were detected
                if ($errors_detected == true) {
                    $messages = implode(', ', $errors);
                    $footer_output .= '<p>Some errors were detected: ' . $messages . '</p>';
                }
                
                // if $clean['site_title'] exists, we will redisplay it in the form
                if (isset($clean['site_title'])) {
                    $redisplay_title = htmlentities($clean['site_title']);
                } else {
                    $redisplay_title = '';
                }
                
                // Sanitise the current URL for use in the "action" attribute
                $self = htmlentities($_SERVER['PHP_SELF']);
                
                // Add the form code to $footer_output
                $footer_output .= '<form action="' . $self . '" method="post">
                    <div>
                        <label for="sitetitle">Site title:</label>
                        <input type="text" name="site_title" id="sitetitle" value="' . $redisplay_title . '" />          
                        <label for="styleselect">Select a style:</label>
                        <select name="site_style" id="styleselect">
                            <option value="plain">Plain theme</option>
                            <option value="light">Light theme</option>
                            <option value="dark">Dark theme</option>
                        </select>   
                        <label for = "expiry">Select Expiry Date for Cookie</label>
                        <select name = "expiry">
                            <option value = "0" >This Session</option>
                            <option value = "86400">A Day</option>
                            <option value = "604800">A Week</option>
                        </select>    
                        <input type="submit" name="personalise" value="Go" />
                    </div>
                </form>';       
            }
            
            // Echo either the form HTML or the "success" messages
            echo $footer_output;

            ?>

		</div>

	</div>
</body>

</html>
