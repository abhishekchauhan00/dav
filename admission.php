<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tablet.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="mobilesmall.css">
    <!-- owl crousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <title>Admission</title>

</head>

<body>
     <!--Navbar Strip -->
 <nav>
    <div>
        <i class="fa fa-envelope" id="envelope"></i>
        <a href="mailto:dav@yahoo.com">dav@yahoo.com
        </a>
    </div>
    <div>
        <i class="fa fa-mobile" id="mobile"></i>
        <a href="tel:+918923078672">+91 2132435465</a>
    </div>
    <div class="socialmedia">
        <a href=""><i class="fa fa-facebook-official" ></i></a>
        <a href=""><i class="fa fa-instagram" ></i></a>
        <a href=""><i class="fa fa-youtube-play" ></i></a>

    </div>
</nav>
<!-- nav main -->
<div class="navmain" id="navmain">
    <img src="images/logo1.png">

    <ul>
        <a href="index.html">
            <li>Home</li>
        </a>
        <a href="about.html">
            <li>About Us</li>
        </a>
        <div class="dropdown">
            <a href="">
                <li>Academics <i class="fa fa-angle-down"></i></li>
            </a>
            <div class="dropdown-content">
                <a href="academic.html">Curriculum</a>
        
                <a href="academic.html">Primary Section</a>
                <a href="academic.html">Secondary & Senior Secondary Section</a>
                <a href="academic.html">Faculties</a>
                <a href="academic.html">Carrier Guidence Cell</a>
                
            </div>
        </div>
        <div class="dropdown">
            <a href="">
                <li>Facalities <i class="fa fa-angle-down"></i></li>
            </a>
            <div class="dropdown-content" style="right: 45%;">
                <a href="facilities.html">Computer Lab</a>
                <a href="facilities.html">Science Lab</a>
                <a href="facilities.html">Coding Club</a>
                <a href="facilities.html">Sport Club</a>
                
                <a href="facilities.html">Personality Development Trainings</a>

            </div>
        </div>
        <div class="dropdown">
            <a href="">
                <li>Rules & Regulation <i class="fa fa-angle-down"></i></li>
            </a>
            <div class="dropdown-content" style="right: 33%;">
                <a href="rules.html">School Policy & timings</a>
                <a href="rules.html">Exam Policy</a>
                <a href="rules.html">Academics Calender</a>


            </div>
        </div>
        <div class="dropdown">
            <a href="">
                <li>Campus <i class="fa fa-angle-down"></i> </li>
            </a>
            <div class="dropdown-content" style="right: 22%;">
                <a href="campus.php">Photos</a>
                <a href="campus.php">Videos</a>


            </div>
        </div>

        <a href="admission.php">
            <li class="appointment">Admission Enquiry</li>
        </a>
    </ul>

    <div id="menuitems">
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="academic.html">Academics <i class="fa fa-angle-right"></i></a>
        <a href="facilities.html">Facalities <i class="fa fa-angle-right"></i></a>
        <a href="rules.html">Rules & Regulation <i class="fa fa-angle-right"></i></a>
        <a href="campus.php">Campus <i class="fa fa-angle-right"></i></a>
        <a href="admission.php" style="color: whitesmoke; background-color: var(--primary)">Admission Enquiry </a>
    </div>

    <i class="fa fa-bars" onclick="myfunction()" id="menubar"></i>
    <i class="fa fa-times" onclick="myfunctions()" id="menubar1"></i>
  
</div>
<!-- Navbar done -->
<!-- enquiry form -->
<h3 class="heading">Admission Query Form</h3>
<div class="formcontain">
    <div class="sidebar">
        <center>
            <i class="fa fa-envelope-open-o" alt="email" style="font-size: 2rem; padding-top: 1rem;"></i>
            <h1>For Admission related information, fill this form</h1>
        </center>
    </div>
  
    <div class="mainform">
    <form method="post" >
        <div class="textarea" id="firstname">
            <label class="label">First Name:</label><br>
            <input type="text" class="entry" placeholder="Enter First Name" name="name">
        </div>
        <div class="textarea" id="second name">
            <label class="label">Second Name:</label><br>
            <input type="text" class="entry" placeholder="Enter Second Name" name="sname">
        </div>
        <div class="textarea" id="classname">
            <label class="label">Class:</label><br>
            <input type="text" class="entry" placeholder="Enter Class" name="class">
        </div>
        <div class="textarea" id="previousschool">
            <label class="label">Previous School:</label><br>
            <input type="text" class="entry" placeholder="Enter Previous School Name" name="school">
        </div>
        <div class="textarea" id="phonenumber">
            <label class="label">Phone Number:</label><br>
            <input type="text" class="entry" placeholder="Enter Your Phone Number" name="phone">
        </div>
        <div class="textarea" id="email">
            <label class="label">Email ID:</label><br>
            <input type="email" class="entry" placeholder="Enter Your Email Id" name="email">
        </div>

        <button class="submitbtn" name="submit">Submit</button>
        </form>
    </div>

</div>
    <!-- footer main -->
     <!-- footer -->
<div class="footer ">
    <div class="contact ">
        <i class="fa fa-map-marker " id="l " aria-hidden="true "></i>
        <h3>Bhaleri, Jansath, Muzaffarnagar U.P.</h3>
        <i class="fa fa-phone " aria-hidden="true " id="p"></i>
        <h3 id="p">+91 122123443</h3>
        <i class="fa fa-envelope-open " aria-hidden="true "></i>
        <h3>&nbsp;dav@yahoo.com</h3>
 </div>
    <div class="map ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1791938.2140110112!2d77.4592853310494!3d28.693256251463822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390c0eab9f2c005f%3A0x21f99cb1e1e57012!2sdav%20ineter%20college%20jansath%20muzaffarnagar!3m2!1d29.3269587!2d77.83353369999999!5e0!3m2!1sen!2sin!4v1638326780279!5m2!1sen!2sin"
            width="100% " height="100% " style="border:0; " allowfullscreen=" " loading="lazy "></iframe>
    </div>
    <div class="name ">
        <div class="n ">
            <h3>DAV INTER COLLEGE</h3>
            <h4>Affiliation No. 123456</h4>
        </div>
    </div>
    <div>

    </div>
</div>
<!-- footer close -->
</body>
<script>
function myfunction() {
    document.getElementById('menuitems').style.display = 'block';
    document.getElementById('menubar').style.display = 'none';
    document.getElementById('menubar1').style.display = 'block';
}

function myfunctions() {
    document.getElementById('menuitems').style.display = 'none';
    document.getElementById('menubar').style.display = 'block';
    document.getElementById('menubar1').style.display = 'none';
}

    $(document).ready(function() {

$(window).scroll(function () { 

console.log($(window).scrollTop());

if ($(window).scrollTop() > 10) {
  $('#navmain').addClass('navbar-fixed');
  document.getElementById('menubar').style.top = '1.2rem';
  document.getElementById('menubar1').style.top = '1.2rem';
  document.getElementById('menuitems').style.top = '4rem';
}
else{
$('#navmain').removeClass('navbar-fixed');
document.getElementById('menubar').style.top = '3.1rem';
document.getElementById('menubar1').style.top = '3.1rem';
document.getElementById('menuitems').style.top = '6rem';
}

});
});
</script>
<script>
    $(document).ready(function() {
  
  $(window).scroll(function () { 

    console.log($(window).scrollTop());

    if ($(window).scrollTop() > 10) {
      $('#navmain').addClass('navbar-fixed');
      document.getElementById('menubar').style.top = '1.2rem';
      document.getElementById('menubar1').style.top = '1.2rem';
      document.getElementById('menuitems').style.top = '4rem';
    }
else{
    $('#navmain').removeClass('navbar-fixed');
    document.getElementById('menubar').style.top = '3.1rem';
    document.getElementById('menubar1').style.top = '3.1rem';
    document.getElementById('menuitems').style.top = '6rem';
}
   
  });
});
</script>
<!-- menubar script -->
<script>
    function myfunction() {
        document.getElementById('menuitems').style.display = 'block';
        document.getElementById('menubar').style.display = 'none';
        document.getElementById('menubar1').style.display = 'block';
    }

    function myfunctions() {
        document.getElementById('menuitems').style.display = 'none';
        document.getElementById('menubar').style.display = 'block';
        document.getElementById('menubar1').style.display = 'none';
    }
</script>
</html>