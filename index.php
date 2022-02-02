<?php 
include 'db_connect.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>YUVA</title>
    <link rel="shortcut icon" type="image/png" href="yuva - Copy.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main2.css">
    <!--<link rel="stylesheet" type="text/css" href="util1.css">
    <link rel="stylesheet" href="main1.css">-->

    <script src="https://kit.fontawesome.com/0288478d4c.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <body>
    <!--- Navbar -->
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
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hospital">List of Hospitals</a></li>
                    <li class="nav-item"><a class="nav-link" href="#work">Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Our Team</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <iframe src='https://webchat.botframework.com/embed/qnac-bot?s=1uKoNPFqKjA.l4IAodnp16YNn5kZqjzLU61T8uQRIGA9t0QbKbPMkSg'  style='min-width: 300px; width: 100%; min-height: 400px;'></iframe> -->
    <!--- End of Navbar-->
    <!--H Section-->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel"class="container carousel carousel-fade"
        data-ride="carousel">
      <!-- Slide-1 -->
      <div class="carousel-item active">
          <div class="carousel-container">
              <h2 class="animate__animated animate__backInDown">
                  Let's<span> Help</span>
              </h2>
              <p class="animate__animated animate__fadeInUP">
                  YUVA is till now 
                  Helped 86 people in Hospitalization
                  Supplied 126 with essential Medical supplies
                  Food to many
              </p>
              <a href="#about"class="btn hero-btn animate__animated animate__backInUp">
                  Read More
              </a>
          </div>
      </div>
    <!-- End of Slide-1 -->
    <!-- Slide-1 -->
    
    <div class="carousel-item">
        <div class="carousel-container">
            <h2 class="animate__animated animate__backInDown">
                Hi there
            </h2>
            <p class="animate__animated animate__fadeInUP">
                YUVA is till now
                Helped 86 people in Hospitalization
                Supplied 126 with essential Medical supplies
                Food to many
            </p>
            <a href="#" class="btn hero-btn animate__animated animate__backInUp">
                Read More
            </a>
        </div>
    </div>
    <!-- End of Slide-1 -->
    <!-- Slide-1 -->
    
    <div class="carousel-item">
        <div class="carousel-container">
            <h2 class="animate__animated animate__backInDown">
                Hey there 
            </h2>
            <p class="animate__animated animate__fadeInUP">
                YUVA is till now
                Helped 86 people in Hospitalization
                Supplied 126 with essential Medical supplies
                Food to many
            </p>
            <a href="#" class="btn hero-btn animate__animated animate__backInUp">
                Read More
            </a>
        </div>
    </div>
    <!-- End of Slide-1 -->
    <a class="carousel-control-prev"href="#heroCarousel"role="button"
    data-slide="prev">
    <span class="carousel-control-prev-icon fas 
    fa-chevron-left"aria-hidden="true"></span>
    <span class="sr-only">Previous</span>

    </a>
    <a class="carousel-control-next"href="#heroCarousel"role="button"
    data-slide="next">
    <span class="carousel-control-next-icon fas 
    fa-chevron-right"aria-hidden="true"></span>
    <span class="sr-only">Next</span>

    </a>
      
        </div>
    </section>
    <!--End of H Section-->
    <br><br><br>
    <h3 style="color: black;font-size: 25px;text-align: center;font-weight: bold;text-transform: uppercase;">List of Hospitals</h3>
    <p style="font-size: 25px;text-align: center;color: black;">Here we can monitor the occupancies of hospitals</p>
    <br><br>
    <!-- <form>
        <span style="padding: 120px;"></span>
        <input type="text" placeholder="Find by Name" >
        <span style="padding: 5px;"></span>
        <input type="submit" value="Find">
        <span style="padding: 150px;"></span>
        <input type="text" placeholder="Find by Locality">
        <span style="padding: 5px;"></span>
        <input type="submit" value="Find">
    </form>
    <form>
        <span style="padding: 120px;"></span>
        <input type="text" placeholder="Find by Pin">
        <span style="padding: 5px;"></span>
        <input type="submit" value="Find">
    </form><br> -->
    <input type="text" id="Input_name" onkeyup="HospitalName()" placeholder="Search for Hospital names.." style="border-radius: 8px;box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 0.15);">
    <input type="text" id="Input_location" onkeyup="HospitalLocation()" placeholder="Search for Hospital location.."style="border-radius: 8px;box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 0.15);">
    <br><br>

    <div class="limiter" id="hospital" >
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver2 m-b-110">
                    <div class="table100-body js-pscroll">
                        <table id="myTable">
                            <div class="table100-head">
                                <thead>
                                    <tr class="row100 head"style="color: #d43c18;background-color: transparent;padding: 5px;box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);font-weight: bold;">
                                        <th>Sr. No.</th>
                                        <th>Hospital Name</th>
                                        <th>Location</th>
                                        <th>Current Bed Occupancy</th>
                                        <th>Current Oxygen Cylinders Occupancy</th>
                                        <th>Last-Updated</th>
                                    </tr>
                                </thead>
                           </div>
                            <tbody>
                            <?php 
                                $i = 1;
                                $sql = "SELECT id, hospitalname, contactdetail, city, state, pincode, address, beds, cyclinders, date_created FROM alumnus_bio";
                                $result = $conn->query($sql);
                                while($row=$result->fetch_assoc()):	
                                                                
                            ?>
                                <tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class=""><a href="map.php?id=<?php echo $row["id"]; ?>">
										 <p>
                                              <b><?php echo ucwords($row['hospitalname']) ?></b></p></a>
									</td>
									<td class=""><a href="map.php?id=<?php echo $row["id"]; ?>">
										 <p> <b><?php echo $row['city'] ?></b></p></a>
									</td>
									<td class=""><a href="map.php?id=<?php echo $row["id"]; ?>">
										 <p> <b><?php echo $row['beds'] ?></b></p></a>
									</td>
									<td class=""><a href="map.php?id=<?php echo $row["id"]; ?>">
										 <p> <b><?php echo $row['cyclinders'] ?></b></p></a>
									</td>
                                    <td class=""><a href="map.php?id=<?php echo $row["id"]; ?>">
										 <p> <b><?php echo $row['date_created'] ?></b></p></a>
									</td>
								</tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- List of Hospitals
<br><br><br><br>
<section class="right">
    <h3>List of Hospitals</h3>
    <p>Here we can monitor the occupancies of hospitals</p>
    <form>
        <span style="padding: 90px;"></span>
        <input type="text" name="Find by name" value="Find by Name">
        <span style="padding: 5px;"></span>
        <input type="submit" value="Find">
        <span style="padding: 150px;"></span>
        <input type="text" name="Find by Locality" value="Find by Locality">
        <span style="padding: 5px;"></span>
        <input type="submit" value="Find">
    </form>
    <form>
        <span style="padding: 90px;"></span>
        <input type="text" name="Find by pin" value="Find by Pin">
        <span style="padding: 5px;"></span>
        <input type="submit" value="Find">
    </form><br><br><br>
<table>
    <tr>
        <th>Sr. No.</th>
        <th>Hospital Name</th>
        <th>Location</th>
        <th>Current Bed Occupancy</th>
        <th>Last-Updated</th>
    </tr>
    <tr>
        <td>1</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>2</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>3</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>4</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>5</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>6</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>7</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>8</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>9</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    <tr>
        <td>10</td>
        <td>AKLUJ CRITICAL CARE AND TRAUMA CENTER</td>
        <td>SOLAPUR</td>
        <td>18</td>
        <td>29-05-2021 16:25:18</td>
    </tr>
    </table>
</section>
End of List of Hospitals-->
    <!--About us
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section">
                    <h3>About Us</h3>
                    <h2 class="mb-3">Our Mission | Vision & Plans</h2>
                </div>
            </div>
       
            <div class="row tabs mt-4">
                <div class="col-md-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block 
                    flex-column">
                        <li class="nav-item text-left">
                            <a class="nav-link active py-4"data-toggle="tab"
                            href="#about-1">About</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab"
                             href="#about-2">Our Beginning</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab"
                            href="#about-3">Our Mission</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" 
                            href="#about-4">Our Vision</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4" data-toggle="tab" 
                            href="#about-5">Our Plans</a>
                        </li>
                    </ul>
                </div>
    
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane container p-0 active"id="about-1">
                <div class="img"style="background-image: url(about-1.jpg);">
                </div>
                <h3><a href="#">About Us</a></h3>
                <p>
                    YUVA is till now
                    Helped 86 people in Hospitalization
                    Supplied 126 with essential Medical supplies
                    Food to many
                </p>
                </div>
   
                <div class="tab-pane container p-0"id="about-2">
                <div class="img" style="background-image: url(about-2.jpg);">
                </div>
                <h3><a href="#">Our Beginning</a></h3>
                <p>
                    YUVA is till now
                    Helped 86 people in Hospitalization
                    Supplied 126 with essential Medical supplies
                    Food to many
                </p>
                </div>
    
                <div class="tab-pane container p-0" id="about-3">
                <div class="img" style="background-image: url(about-3.jpg);">
                </div>
                <h3><a href="#">Our Mission</a></h3>
                <p>
                    YUVA is till now
                    Helped 86 people in Hospitalization
                    Supplied 126 with essential Medical supplies
                    Food to many
                </p>
                </div>
    
                <div class="tab-pane container p-0" id="about-4">
                <div class="img" style="background-image: url(about-4.jpg);">
                </div>
                <h3><a href="#">Our Vision</a></h3>
                <p>
                    YUVA is till now
                    Helped 86 people in Hospitalization
                    Supplied 126 with essential Medical supplies
                    Food to many
                </p>
                </div>
       
                <div class="tab-pane container p-0" id="about-5">
                <div class="img" style="background-image: url(about-5.jpg);">
                </div>
                <h3><a href="#">Our Plans</a></h3>
                <p>
                    YUVA is till now
                    Helped 86 people in Hospitalization
                    Supplied 126 with essential Medical supplies
                    Food to many
                </p>
                </div>
     
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    End of About us-->
    <!-- Work-->
    <br><br><br><br><section class="mt-3" id="work">
        <div class="work">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Work</h3>
                    <p>
                        YUVA is till now
                        Helped 86 people in Hospitalization
                        Supplied 126 with essential Medical supplies
                        Food to many
                    </p>
                </div>
                <!---->
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box overlay shadow">
                            <div class="work-icon">
                                <i class="fas fa-ambulance"></i>
                            </div>
                            <h2>Health</h2>
                            <p>
                                YUVA is till now
                                Helped 86 people in Hospitalization
                                Supplied 126 with essential Medical supplies
                                Food to many
                            </p>
                        </div>
                    </div>
                    <!---->
                <div class="col-md-4">
                    <div class="work-box overlay shadow">
                        <div class="work-icon">
                            <i class="fas fa-band-aid"></i>
                        </div>
                        <h2>Med</h2>
                        <p>
                            YUVA is till now
                            Helped 86 people in Hospitalization
                            Supplied 126 with essential Medical supplies
                            Food to many
                        </p>
                    </div>
                </div>
                    <!---->
                <div class="col-md-4">
                    <div class="work-box overlay shadow">
                        <div class="work-icon">
                            <i class="fas fa-hospital-symbol    "></i>
                        </div>
                        <h2>Hospital</h2>
                        <p>
                            YUVA is till now
                            Helped 86 people in Hospitalization
                            Supplied 126 with essential Medical supplies
                            Food to many
                        </p>
                    </div>
                </div>
                <!---->
                </div>
            </div>
        </div>
    </section>
    <!-- End of work-->
    <!--About Us-->
    <br><br><br><br>
    <section class="mt-3" id="about">
        <div class="About Us">
            <div class="container">
                <div class="section-title text-center">
                    <h3>About Us</h3>
                    <p>
                        YUVA is till now
                        Helped 86 people in Hospitalization
                        Supplied 126 with essential Medical supplies
                        Food to many
                    </p>
                </div>
                <!---->
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box overlay shadow">
                            <div class="work-icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <h2>Our Beginning</h2>
                            <p>
                                YUVA is till now
                                Helped 86 people in Hospitalization
                                Supplied 126 with essential Medical supplies
                                Food to many
                            </p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-4">
                        <div class="work-box overlay shadow">
                            <div class="work-icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <h2>Our Mission</h2>
                            <p>
                                YUVA is till now
                                Helped 86 people in Hospitalization
                                Supplied 126 with essential Medical supplies
                                Food to many
                            </p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-4">
                        <div class="work-box overlay shadow">
                            <div class="work-icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <h2>Our Vision</h2>
                            <p>
                                YUVA is till now
                                Helped 86 people in Hospitalization
                                Supplied 126 with essential Medical supplies
                                Food to many
                            </p>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team -->
<!--
    <br><br><br><section class="team">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Our Team</h2>
                <p class="text-center">
                    YUVA is till now
                    Helped 86 people in Hospitalization
                </p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Name</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Name</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                 </a>
                                <a href="">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Name</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-1">
                        <div class="pic">
                            <img src="img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Name</h4>
                            <span>Specification</span>
                            <div class="social">
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
     End of Our Team -->
 
    <!-- Contact Us -->
    <br><br><br><br><footer class="footer mt-5">
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
                        </form><br>
                        <iframe src='https://webchat.botframework.com/embed/covi1-bot?s=xmjyMLQYlKs.afgJV81oTbL97hWHCpnRySzocfrnAuw4aCatIgOrVa0'  style='min-width: 350px; width: 30%; min-height: 200px;'></iframe>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="table.js"></script>
    <script src="tab.js"></script>
  </body>
</html>
