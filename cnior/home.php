<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Cniors </title>
    <style> 
    <?php include 'style.css'?>
    </style>
    <?php include 'links.php'?>
</head>
<body>
                                         <!-- Navigation Bar -->
<div class="navigation-bar">
<p class="navitems" id="awesomelogo"><i id="fa" class="fas fa-head-side-virus"3x></i></p> 
<p class="navitems" id="home"> <a id="home-nav" class="navitem" href="home.php">Home</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="papers.php">Papers</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="roadmaps.php">Roadmaps</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="aboutus.php">AboutUs</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a class="navitem"  href="consult.php">Consult</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a class="navitem"  href="login.php">Login</a></p>
<p class="navitems"> <p id="clock">  </p>  </p>
</div>
<script type="text/javascript">
var clock = setInterval(clk,1000);
    function clk() {
        var dt = new Date();
var time = dt.toLocaleTimeString();
document.getElementById('clock').innerHTML=time;
}
</script>





                                                <!-- SECOND PART  -->

<span class="secondpart">
    
        <p id=quote>CNIORS</p>
       
      <section id="imageafterquote">  <img id="birdimage" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYAT6Y5YzX1LttubXvkVV1b5rml8uXwGMudQ&usqp=CAU" alt="bird"></section> 
     
</span>




                                               <!-- THIRD PART  -->

<div class="thirdpart">
<span class="flexboxone">  
<p id="motivation" >  DON'T STOP UNTIL <br> YOU ARE PROUD  </p>  
</span>

<div class="flexboxtwo">
    <section id="transitionimage"></section>
</div>
</div>

                                                <!-- FOURTH PART  -->

 <div class="fourthpart">
     
<p class="whatweprovide"><i id="iconofprovider" class="fas fa-angle-double-down"></i>       THINGS WE PROVIDE </p>
<div class="partfourthflexbox">
    <section class="providings">
        <p class="itemsinsideprovider" id="papers"><a  class="linktoall" href="papers.php">PAPERS</a></p>
        <p class="itemsinsideprovider" id="assignments"><a class="linktoall" href="papers.php">ASSIGNMENT</a></p>
        <p class="itemsinsideprovider" id="consultancy"><a class="linktoall" href="seniors.php">CONSULTANCY</a></p>
        <p class="itemsinsideprovider" id="roadmaps"><a class="linktoall" href="roadmaps.php">ROADMAPS</a></p>
    </section>
</div>
</div>   

<!-- used twak.to for online live chat  -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60b011816699c7280da95218/1f6ns8p6u';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

 

                                                        <!-- FOOTER -->

<section class="footer">
<div class="contacts">
    <p id="contactus" class="footeroneitems">ContactUs</p> <br>
    <p id="email" class="contactusitems"><i id="emailicon" class="fas fa-envelope"></i> <a class="contactwriting"href="tjstyles555@gmail.com">Email</a></p> 
    <p id="github" class="contactusitems"><i id="githubicon" class="fab fa-github"></i> <a class="contactwriting"href="tjstyles555@gmail.com">Git-Hub</a></p>
    <!-- <p id="discord" class="contactusitems"> <i id="discordicon" class="fab fa-discord"></i><a class="contactwriting"href="tjstyles555@gmail.com">Discord-Server </a></p> -->
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
</section>
</body>
</html>

