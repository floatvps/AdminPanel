<?php include('functions.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<script type='text/javascript'> 
title = " [AdminPanel - Login] ";
position = 0;
function scrolltitle() {
    document.title = title.substring(position, title.length) + title.substring(0, position); 
    position++;
    if (position > title.length) position = 0;
    titleScroll = window.setTimeout(scrolltitle,170);
}
scrolltitle();
</script>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="en">
<link href="style.css" rel="stylesheet" type="text/css"></head><body>
    <div id="page">         
        <div id="header"> <a href="#"><img id="logo" src="images/logo.jpg" alt=""></a>
            <h1><a href="#">AdminPanel v0.0.2</a></h1>
            <p class="subtitle">You really shouldnt be here.</p>
        </div>	
        <div id="menu">
            <ul><li><a href="../">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Your VPS</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Discord</a></li>
            </ul></div>
			
        <div id="main"><div id="main2">	
                <div id="content">
                    <h2>Login</h2>
                   <form method="post" action="login.php">

		           <?php echo display_error(); ?>

		           <div class="input-group">
			       <label>Username</label>
		           <input type="text" name="username" >
		           </div>
		           <div class="input-group">
			       <label>Password</label>
			       <input type="password" name="password">
		           </div>
		           <div class="input-group">
		       	   <button type="submit" class="btn" name="login_btn">Login</button>
		           </div>
		           <p>
		           	Not yet a member? <a href="register.php">Sign up</a>
		           </p>
	               </form>
                   <h2>About AdminPanel</h2>
                    <div class="box">
                        <p>AdminPanel was created because there were no free or paid ESX-i Control Panels and the only one was AutoVM. Upon testing AutoVM, it proved to be super broken and buggy. i created AdminPanel because:</p>
                        <ul><li><span>+</span>I wanted something that WORKED</li>
                            <li><span>+</span>I wanted a Control panel for FloatVPS.</li>
                            <li><span>+</span>I also want to learn the ESX-i API</li>
                            <li><span>+</span>Did i mention its Open Source?</li>
                            <li><span>+</span>Its also 100% Free Forever!</li>
                        </ul><p>AdminPanel is free to use. Please turn off adblock and do not remove the ads! i spent lots of time coding this panel!</p>
                    </div>
                  
                </div><!-- content -->   
                                
                <div class="clearing"> </div>
        </div></div><!-- main --><!-- main2 -->
        <div id="footer">
            <p>Copyright © 2011, designed by <a href="http://www.alphastudio.pl/" target="_blank">Alpha Studio</a> | AdminPanel - by FloatVPS/Samdisk - <a href="" target="_blank">Github</a>
</p>
        </div>
    </div><!-- page -->
</body></html>