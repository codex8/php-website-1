<?php 
session_start(); 
if(isset($_POST['done'])){ 
    if(isset($_SESSION['cap'])){ 
        //This is the code for comparing the user input against the session variable 
        $cap = $_POST['captcha']; 
        if($_SESSION['cap']==strtolower($cap)) echo "Okay you are human :)"; 
        else echo "Off You go BOT / SPAMMER!!"; 
    } 
} 
?> 
<html> 
<head> 
<title>Simple Captcha Script</title> 
</head> 
<body> 
<form action="index.php" method="post"> 
<img src="captcha.php" align="absmiddle" /> 
<!-- NOTE how the captcha.php is used as an image link, that's a whole new way to think --> 
<input type="text" size="20" name="captcha" /><br /> 
<input type="submit" name="done" value="Login" /> 
</form> 
</body> 
</html>