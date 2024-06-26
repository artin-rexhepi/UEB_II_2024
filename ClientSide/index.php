<?php include "../API/WelcomeUser.php";?>

<?php
// Shiqo a ekziston cookin ne oren e fundit
if(isset($_COOKIE['font_change_time']) && (time() - $_COOKIE['font_change_time'] < 3600)) {
    // Mbaje fontin
    $font_style = "font-family: 'Times New Roman', Times, serif;";
} else {
    // Nddroje fontin
    $font_style = "font-family: Arial, sans-serif;";
    
    // Cookie per ndrrim te fontit
    setcookie('font_change_time', time(), time() + 3600); 
}
?>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<?php

if (!isset($_SESSION['form_submissions'])) {
    $_SESSION['form_submissions'] = 0;
}


if (isset($_POST['email'])) {
    // Rrite numrin e submits ne session
    $_SESSION['form_submissions']++;


    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/ClientSide/Home.css ">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script defer src="../assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!--  
    <script defer src="js/Home.js"></script>-->
    <title>Spring Hotel &amp; Spa</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>
        $(document).ready(function () {
            // Funksioni qe filtron dhe shfaq/fsheh kartat
            function filterPosts(selectedMonth) {
                $('.card').hide().filter(function () {
                    return $(this).data('posted-month').toLowerCase() === selectedMonth.toLowerCase() || selectedMonth === 'all';
                }).show();
            }

            // Event listener per buttonin e filterit
            $('#filterButton').on('click', function () {
                var selectedMonth = $('#monthFilter').val();
                filterPosts(selectedMonth);
            });
        });
    </script>

    
    <style>
        .modal{
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        /* Styles for the modal content */
        .modal-content {
            max-width: 800px;
            max-height: 63vh;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        /* Styles to center the video */
        .video1{
            width: auto;
            height: 500px;
            object-fit: cover;
        }

        .video2{
            width: auto;
            height: 450px;
            object-fit: cover;
        }

        /* Styles for the close button */
        .close-btn {
            position: absolute;
            padding: 5px;
            border: 2px solid #8f859e;
            border-radius: 50%;
            background-color: transparent;
            top: 20px;
            left: 50%;
            transform: translate(-50%);
            color: #000;
            cursor: pointer;
            transition: background-color ease-in 0.3s;
        }

        .close-btn:hover{
            background-color: #ffffff3d;
        }
        #roomSlideshow {
    margin-top: 20px;
}

.carousel .carousel-inner img {
    width: 100%;
    height: auto;
}
.carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }


        #checkAvailabilityBtn {
            margin-top: 20px;
            margin-bottom: 20px;
    padding: 12px 32px;
    background-color: #8f859e;
    border-color: #8f859e;
    color: #fff;
    transition: all ease-in 0.3s;
}

 #checkAvailabilityBtn:hover{
    background-color: transparent;
    color: #8f859e;
} 

    </style>
</head>

<body>
    <div class="logoja">
        <a href="index.php"><img src="../assets/images/Logo.png" alt="Logo" /></a>
    </div>
    
    <nav class="navbar">
    <div></div>
    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./About-Us.php">About Us</a></li>
        <li><a href="./Contacts.php">Contacts</a></li>
        <li><a href="./FAQ.php">FAQ</a></li>
        <li><a href="./Events.php">Events</a></li>
        </ul>
        <?php if(isset($_SESSION['login_user'])): ?>
            <h7><a href="profile_page.php">Welcome, <?php echo htmlspecialchars($_SESSION['login_user']); ?></a></h7>
            <h7><a href="../API/logout.php"><img src="../assets/images/login-icon.png" alt=""></a></h7>
        <?php else: ?>
            <a href="./login-signup.php"><img src="../assets/images/login-icon.png" alt=""></a>
        <?php endif; ?>
    
</nav>


        <section class="carousel-n-booking">

        <div class="carosuel-container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="carousel-card">
                <div class="card-row">
                    <div class="card-icon">1</div>
                    <div class="card-description">
                        <h4>Your Ideal Retreat</h4>
                        <p>Enjoy the world of relaxation and tranquility</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" >
            <label for="c2" class="carousel-card">
                <div class="card-row">
                    <div class="card-icon">2</div>
                    <div class="card-description">
                        <h4>Relax &amp; Unwind</h4>
                        <p>Experience the luxurious level of traditional commodities</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" >
            <label for="c3" class="carousel-card">
                <div class="card-row">
                    <div class="card-icon">3</div>
                    <div class="card-description">
                        <h4>Revitalize &amp; Relax</h4>
                        <p>Indulge in our top-notch spa resort</p>
                    </div>
                </div>
            </label>
        </div>

          

        <div id="booking">

            <div class="booking-form">
                <h1 style="font-size: 30px; margin-top: 10px;">Book a Room</h1>

                <form id="bookingForm" style="display: flex; flex-direction: column;" id="myForm" method="post" action="../API/BookARoom.php">
                    <label class="text-uppercase" for="Full-Name">Your Full Name</label>
                    <input type="text" name="Full-Name" class="form-input" placeholder="Your Full Name..." required="true">
                
                    <label class="text-uppercase" for="Check-In">Arrival</label>
                    <input id="checkInDate" type="date" name="Check-In" class="form-input" placeholder="Check-In Date..." required="true" onchange="validateDates()">
                
                    <label class="text-uppercase" for="Check-Out">Departure</label>
                    <input id="checkOutDate" type="date" class="form-input" name="Check-Out" placeholder="Check-Out Date..." required="true" onchange="validateDates()">
                
                    <label class="text-uppercase" for="Adults">Adults</label>
                    <select name="Adults" required="true" class="form-input" id="adultsSelect" onchange="validateAdults()">
                        <option value="0">0</option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                
                    <label class="text-uppercase" for="Children">Children</label>
                    <select name="Children" class="form-input" id="childrenSelect">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <button id="checkAvailabilityBtn" class="btn btn-primary" type="button">Check Availability</button>
                   <!-- Modal Structure -->
                    <div id="roomModal" class="modal">
                        <div class="modal-content">
                            <span class="close" id="closeModalBtn">&times;</span>
                            <div id="modalContent"></div>
                            <div id="roomDetails">
                                <div class="row"></div>
                            </div>
                            <div class="modal-footer">
                            <button id="formBtn" class="btn btn-primary" type="submit">Book</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        </section>

        
        

        <section class="abt-us-home">

            <!-- Video thumbnail me onlcick event per te hapur modalin -->
            <div class="abt-us-video" onclick="openModal()">
                <img src="../assets/images/video-thumbnail-1.jpg" alt="Video Thumbnail" />
                
                <div class="image-overlay-1" style="cursor: pointer;">
                    <div class="play-button">&#9654;</div>
                </div>
            </div>
`
            <!-- Modali  -->
            <div id="myModal" class="modal">

                <img class="close-btn" src="../assets/images/close-video.png" width="auto" height="auto" onclick="closeModal()"/>

                <div class="modal-content">
                <!-- Video element -->
                <video class="video1" controls autoplay muted>
                    <source src="../assets/video/hotel-video.mp4" type="video/mp4">
                </video>
                </div>
            </div>


            <div class="abt-us-text" style="background-color: #8f859e;">
                <h1>About Us</h1>
                <p>Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p>
                <div class="schedule-home">
                    <p><b>Weekdays: </b></p>
                    <p>8:00 - 20:00</p>
                </div>
                <div class="schedule-home">
                    <p><b>Weekends: </b></p>   
                    <p>9:00 - 18:00</p>
                </div>
                <button class="btn btn-outline-light" onclick="scrollToElement()" style="margin: 20px 0; padding: 12px 32px;">Book Now</button>
            </div>
        </section>
        

    

    <section class="pool-section">

        <div class="formating-div">
        <div class="pool-text" style="<?php echo $font_style; ?>">
    <h1>Indoor Hotel Pool</h1>
    <p>
        The indoor heated pool has vaulted wood beam ceilings. 
        The whirlpool features bay windows and overlooks the pond and the north face of the local beauty spot. 
        For the safety and health reasons, children must be accompanied by an adult when visiting the pool.
    </p>

    <p>
        The serene pool at Spring Hotel &amp; Spa resort and hotel boasts sleek décor that features striking floor-to-ceiling teak columns set against a cool black tile floor.
        Poolside dining is also available, featuring a selection of dishes from any cuisine you desire that are both healthy and delicious. 
        Daily aqua aerobics classes help keep guests fit while on the road.
    </p>

    <a href="About-Us.html" id="poolBtn" class="btn btn-primary">Learn More</a>
</div>
            <div class="pool-container" onclick="openModal2()" >
                <img src="../assets/images/indoor-pool.jpg" width="auto" height="400px"/>
                <div class="image-overlay-2" style="cursor: pointer;">
                    <div class="play-button">&#9654;</div>
                </div>
            </div>

            <div id="myModal2" class="modal">

                <img class="close-btn" src="../assets/images/close-video.png" width="auto" height="auto" onclick="closeModal2()"/>

                <div class="modal-content">
                <!-- Video element -->
                <video class="video2" controls autoplay muted>
                    <source src="../assets/video/pool-showcase-video.mp4" type="video/mp4">
                </video>
                </div>
            </div>
        </div>
    </section>


    <section class="blog">

        <h1>Our Blog</h1>
        
        <div class="filter-container">
            <label for="monthFilter"></label>
            <select id="monthFilter">
                <option value="all">All Months</option>
                <option value="june">June</option>
                <option value="august">August</option>
                <!-- Opsionet e flitrimit -->
            </select>
            <button id="filterButton">Filter</button>
        </div>

        <div class="card mb-3" style="max-width: 800px;  margin-top: 30px;" data-posted-month="June">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../assets/images/blog-image-1.jpg" class="img-fluid rounded-start" alt="Blog Image 1">
              </div>
              <div id="artikulli1" class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="width: 100%;">Top 3 Reasons Why Spring Villas Offers the Best Spa Procedures</h5>

                    <p class="card-text"><img src="../assets/images/clock-blog.png" width="16px" height="16px" style="margin-right: 30px;" />
                        June 12, 2023
                    </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 800px;" data-posted-month="June">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../assets/images/blog-image-2.jpg" class="img-fluid rounded-start" alt="Blog Image 1">
              </div>
              <div id="artikulli2" class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="width: 100%;">Featured Therapies and Activities at Spring Villas Spa Resort and Hotel</h5>

                    <p class="card-text"><img src="../assets/images/clock-blog.png" width="16px" height="16px" style="margin-right: 30px;" />
                        June 12, 2023
                    </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 800px;" data-posted-month="August">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../assets/images/blog-image-3.jpg" class="img-fluid rounded-start" alt="Blog Image 3">
              </div>
              <div id="artikulli3" class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="width: 100%;">Why Your Relaxing Getaway Starts Here</h5>

                    <p class="card-text"><img src="../assets/images/clock-blog.png" width="16px" height="16px" style="margin-right: 30px;" />
                        August 26, 2023
                    </p>
                </div>
              </div>
            </div>
          </div>

    </section>

    <footer>
        <div class="row footer-main">
            <div class="col-md-3 footer-main-opening">
                <h2>Opening Hours</h2>
                <p><span class="footer-weekendweekdays">Weekdays:</span> 8:00 AM - 8:00 PM</p>
                <p><span class="footer-weekendweekdays">Weekends:</span> 9:00 AM - 6:00 PM</p>
            </div>
            <div class="col-md-3 footer-main-adress">
                <h2>Address</h2>
                <p><span><a href="https://www.google.com/maps/search/6036+Richmond+Hwy,+Alexandria,+VA+2230/@38.7860603,-77.0740174,16.25z?entry=ttu"
                            target="_blank">
                            <address style="margin: 0;"><img src="../assets/images/location.png"
                                    class="footer-location-icon">6036 Richmond Hwy, Alexandria, VA 2230</address>
                        </a></span></p>
    
                <p><img src="../assets/images/call.png" class="footer-call-icon">Call Us: <a href="tel:+1 (409) 987–5874">+1
                        (409) 987–5874</a></p>
                <a href="mailto:spring@hotel.com"><img src="../assets/images/email.png"
                        class="footer-call-icon">spring@hotel.com</a>
            </div>
            <div class="col-md-3 footer-main-newsletter">
            <h2>Join our Newsletter</h2>
        <form id="newsletterForm" method="post" action="../API/newsletter.php" onsubmit="subscribeNewsletter(event)">
            <input type="email" name="email" placeholder="Enter your e-mail" required class="footer-newsletter-textfield" id="emailInput">
            <?php if ($_SESSION['form_submissions'] == 0 && !isset($_SESSION['submit_disabled'])) { ?>
                <button type="submit" class="footer-newsletter-subscribebtn" id="subscribeBtn" onclick="playAudio()">Subscribe</button>
            <?php } ?>
            <audio id="subscribeAudio" src="../assets/audio/button-click.mp3" type="audio/mp3"></audio>
            <output id="subscribeOutput" for="emailInput"></output>
        </form>

            <script>
            window.onload = function() {
                var formSubmissions = <?php echo $_SESSION['form_submissions']; ?>;
                sessionStorage.setItem('formSubmissions', formSubmissions);

            if (sessionStorage.getItem('submitDisabled')) {
                document.getElementById('SubscribeBtn').style.display = 'none';
                document.getElementById('subscribeOutput').textContent = "You're already subscribed.";
            }
        };

            function subscribeNewsletter(event) {
                event.preventDefault();

                var form = document.getElementById('newsletterForm');
                var formData = new FormData(form);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '../API/NewsLetter.php', true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Handle successful response
                            var response = xhr.responseText;
                            var subscribeOutput = document.getElementById('subscribeOutput');
                            subscribeOutput.textContent = response;
                            form.reset();
                        } else {
                            // Handle error response
                            console.error('Error:', xhr.status);
                        }
                    }
                };
                xhr.send(formData);
            }

            function playAudio() {
                subscribeAudio.play();
            };
            </script>
            </div>
            </div>
            
        </div>
        <div class="footer-socials">
            <a href="https://www.instagram.com/" target="_blank"><img src="../assets/images/instagram.png"
                    class="footer-socials-icon"></a>
            <a href="https://www.facebook.com/" target="_blank"><img src="../assets/images/facebook.png"
                    class="footer-socials-icon"></a>
            <a href="https://twitter.com/" target="_blank"><img src="../assets/images/twitter.png"
                    class="footer-socials-icon"></a>
        </div>
    </footer>         
    
    <button id="backToTopBtn" title="Go to top" onclick="topFunciton()"><img width="30px" height="30px"
            style="display: flex; align-items: center; justify-content: center;"
            src="../assets/images/backToTop.png" /></button>
    <audio id="backToTopSound" src="../assets/audio/whoosh.mp3" type="audio/mp3"></audio>
<script src = "../js/ClientSide/Home.js"></script>
<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
