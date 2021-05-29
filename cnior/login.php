<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
 <?php include "style.css"?>
    </style>
 <?php include 'links.php'?>
 <?php include 'connection.php' ?>

</head>
<body>
                                             <!-- Navigation Bar -->
<div class="navigation-bar">
<p class="navitems" id="awesomelogo"><i id="fa" class="fas fa-head-side-virus"3x></i></p> 
<p class="navitems" id="home"> <a  class="navitem" href="home.php">Home</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="papers.php">Papers</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="roadmaps.php">Roadmaps</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="aboutus.php">AboutUs</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a class="navitem"  href="consult.php">Consult</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a id="login-nav" class="navitem"  href="login.php">Login</a></p>
</div>
<hr color="black" height=1cm >
<div class="background">
<i id="loginpagesymbol" class="fas fa-users"></i>


 

                                                <!-- form -->

 <div class="loginform"> 
<p id="loginheading"> LOGIN FORM  </p>
<hr id="loginhorizantalline">

<form id="loginform" method="post">
<i id="loginemailicon" class="fas fa-user-alt"></i> E-mail <input id="loginmail" type="mail" name="email" placeholder="enter registered email" required > <br>
<i  id="loginpasswordicon" class="fas fa-lock"></i> Password <input id="loginpassword" type="password" name="password" placeholder="enter your password" required><br>
<input class="button" id="loginsubmit" type="submit" placeholder="LOGIN" name="submit"></input>
<p id="havenotsigned">Not Registered ?<a id="registerlogin" href="signup.php"> Register</a> </p>


</form>
<?php 
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password =$_POST['password'];
$select = "SELECT * FROM `registration` WHERE email='$email' ";
$selectquery=mysqli_query($conn,$select);
$mailcount =mysqli_num_rows($selectquery);
if($mailcount){
    $mailsearchsearch=mysqli_fetch_assoc($selectquery);
    $passwordsearch =  $mailsearchsearch['password'];
    $passwordverify =password_verify($password,$passwordsearch);
    if($passwordverify)
    {
       ?> 
       <script>alert("You have Successfully logged in")</script> 
       <br><p id="goto"><a id="gootoprofile" href="profile.php" title="click here to check your profile">Check Profile</a>
       <br><br>  <p id="go"><a id="gotologout" href="afterlogout.php">LOGOUT</a> </p>
       </p>
        <?php      
    }
    else
    {
        ?> <script>alert("Password is not matching")</script> <?php    
    }
}else
{
    ?> <script>alert("Email not registered")</script> <?php
}
}
?>
</div>






                                                        <!-- FOOTER -->
<section class="footer-login">
<div class="contacts">
    <p id="contactus" class="footeroneitems">ContactUs</p> <br>
    <p id="email" class="contactusitems"><i id="emailicon" class="fas fa-envelope"></i> <a class="contactwriting"href="tjstyles555@gmail.com">Email</a></p> 
    <p id="github" class="contactusitems"><i id="githubicon" class="fab fa-github"></i> <a class="contactwriting"href="tjstyles555@gmail.com">Git-Hub</a></p>
    <p id="discord" class="contactusitems"> <i id="discordicon" class="fab fa-discord"></i><a class="contactwriting"href="tjstyles555@gmail.com">Discord-Server </a></p>
</div>  
<div class="about"> 
    <p class="aboutus" ><a id="aboutus" href="aboutus.php">AboutUs</a></p> <br>
    <p class="detailsaboutus">CNIORS is a student's coterie that helps students in many ways. <br> TO KNOW MORE SEE THE <a id="detailaboutus" href="aboutus.php">AboutUs section</a>   </p>
</div>
<div class="signup">
    <p id="signup">SignUp</p> <br>
    <p id="signupdescription">you sign into our page to get the best service  <p id="sign"><i id="idofloginicon" class="fas fa-sign-in-alt"></i><a id="signupphp" href="login.php">SIGN UP</a></p>  </p>
</div>

</section>

<section class="copyright">
    <p id=>@_all rights reserved under Cniors23@gmail.com </p>

    </div>   
</body>
</html>



<!-- <div class="registerplatforms">
<p id="otherplatforms"> Register through other platforms </p>
<hr id="lineunderplatforms">
<i id="instagram" class="fab fa-instagram"></i> Instagram <br>
<i id="facebook" class="fab fa-facebook"></i> Facebook <br>
<i id="google" class="fab fa-google"></i> Google 
</div> -->