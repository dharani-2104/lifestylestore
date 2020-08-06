<footer>
    <div class="container" >
        <div class="row">
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        			<h3>Information</h3>
        			<a href="contact.php" style="color:#9d9d9d"><h5>Contact Us</h5></a>
        			<a href="aboutus.php" style="color:#9d9d9d"><h5>About Us</h5></a>
        	</div>
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" >
        			<h3>My Account</h3>
        			<?php
        			if (!isset($_SESSION['email'])) { ?>
        		   <a data-toggle="modal" data-target="#myModal" href="#" style="color:#9d9d9d"><h5>Login</h5></a>
        		 <?php
        		   include "loginmodal.php";
                    
                } else {
                    ?>
        			<a href="#" style="color:#9d9d9d"><h5>Login</h5></a>
        			<?php
                    }
                    ?>
        			<a href="signup.php" style="color:#9d9d9d"><h5>Sign Up</h5></a>
        	</div>
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        			<h3>Contact Us</h3>
        			<h5>Contact: 9876543210</h5>
        	</div>
        </div>
    </div>
</footer>

                    
