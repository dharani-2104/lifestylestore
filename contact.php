<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        	<script>
        	function fun(){
        		document.getElementById("msg").innerHTML="We will contact you soon..";
        	}
        	</script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container">
        <div class="row">
        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
        			<h1>LIVE SUPPORT</h1>
        			<h3>24 hours| 7 days a week | 365 days a year| Live Technical Support</h3>
        			<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at is tryout. The point of own Lorem Ipsum is that n has a more-of-less normal Otstnbobon of letters.There are many variations of passages of Lorem Ipsum SVB118.. but the mapdy have suffer. alteration in sane form, by infected humour on randomried words which 00.1 look even *nay believe.. If you are going to use a passage of Lorem Ipso, you need to be are there isn't anything embarrassing hidden in the middle of text. </p>
        	   </div>
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
        			<img  class="img-responsive" src="img/contact.png" alt="picture">
        		</div>
        	</div>
     
        <div class="row">
        	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
        			<h3>CONTACT US</h3>
                        <form onsubmit="fun()">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><!-- <?php echo $_GET['m1']; ?> -->
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control"  placeholder="Message" name="message"  rows="5" cols="60" required = "true"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br>
                            <p id="msg"></p>
                        </form>
        	</div>
        	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        			<p><h3>Company Information:</h3> <br>
500 Lorem Ipsum Dolor Sit,<br> 22-56-29 Se Amet, Lorem,<br> USA<br> Phone:(00) 2226660 <br> Fax:(000) 10001000000 <br>Email: info@mycompany.com<br> Folow on: Facebook,Twitter</p>
        	</div>
        </div>
    </div>
        <?php include 'includes/footer.php'; ?>
    </body>
    </html>

