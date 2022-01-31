<?php 
include 'db_connect.php'; 
?>
<!doctype html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="main2.css">
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<style>
hr{
    border-top: 1px solid #000;
    width:50%;
}
a{
    color: #000;
}
a:link{
    text-decoration:none;
}
#contact2{
    letter-spacing:3px;
}
#author a{
  color: #fff;
  text-decoration: none;    
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2"id="mainNav">
        <div class="container" id="home">
            <img src="yuva - Copy.png" class="image-fluid" width="70px" alt="">
            <a class="navbar-brand "href="#" style="color: #d43c18; font-weight: bold; font-size: 28px;">&nbspYUVA</a>
            <button class="navbar-toggler navbar-toggler-right"type="button"
                data-toggle="collapse"data-target="#myNavbar"aria-control="myNavbar"
                aria-expanded="false"area-label="Toggel navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"id="myNavbar">
                <ul class="navbar-nav ml-auto my-2my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Map</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Our Team</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav><br><br><br><br><br>
<div class="container">
  <div class="row" >
  <?php
        $i = 1; 
        $records = mysqli_query($conn,"select * from alumnus_bio where id='" . $_GET["id"] . "'");
        while($row = mysqli_fetch_array($records))
{                                                                
    ?>
    <div class="col-sm-8">
    <iframe src="https://maps.google.com/maps?q=<?php echo ucwords($row['hospitalname']) ?>,<?php echo ucwords($row['address']) ?>&output=embed" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
    <div class="col-sm-4" id="contact2">
        <h3><?php echo ucwords($row['hospitalname']) ?></h3>
        <hr align="left" width="50%">
        <h4 class="pt-2"><?php echo ucwords($row['address']) ?></h4>
        <i class="fas fa-globe" style="color:#000"></i> address<br><br>
        <h4 class="pt-2">Contact Details</h4>
        <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"><?php echo ucwords($row['contactdetail']) ?></a><br>
        <?php
}
?>
      </div>
  </div>
  
</div> 
<br><br><br>
<footer class="footer mt-5">
        <div class="footer-top" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-des">
                            <h3>YUVA</h3>
                            <p class="pb-3">
                                <em>YUVA is till now
                                Helped 86 people in Hospitalization
                                Supplied 126 with essential Medical supplies
                                Food to many</em>
                            </p>
                            <p>Solapur <br>
                                413002, India <br><br><strong>
                                    Phone
                                </strong>
                                9518573652 <br>
                                <strong>
                                    Email:
                                </strong>
                                yuva@gmail.com<br>
                            </p>
                            <div class="social-link mt-3">
                                <a href=""><i class="fab fa-facebook" style="color: white"></i></a>
                                <a href=""><i class="fab fa-instagram" style="color: white"></i></a>
                                <a href=""><i class="fab fa-linkedin" style="color: white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Yuva A</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>About Us</h4>
                        <ul>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                                <a href="">Yuva A</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-joinus">
                        <h4>Join Us</h4>
                        <p>
                            Join YUVA
                        </p>
                        <form>
                            <input type="email" name="Email" value="Email">
                            <input type="submit" value="Join">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>