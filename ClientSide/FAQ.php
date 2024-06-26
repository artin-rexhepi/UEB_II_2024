<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['form_submissions'])) {
    $_SESSION['form_submissions'] = 0;
}

if (isset($_POST['email'])) {
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
    <title>Spring Hotel | FAQ</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ClientSide/FAQ.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

    <div class="logoja">
        <a href="./index.html"><img src="../assets/images/Logo.png" alt="Logo" /></a>
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

    <header class="header">
        <h1>FAQ</h1>
        <p><a href="/">Home</a>&rarr;<b>FAQ</b></p>
    </header> 





    <ul class="parent-list">
        <li>
            <h2>General Information:</h2>
            <ul class="faq-list">
                <li>
                    <div class="question">What is the location of your hotel and spa?</div>
                    <div class="answer">Our hotel and spa are located at 6036 Richmond Hwy, Alexandria, VA 2230.</div>
                </li>
                <li>
                    <div class="question">How can I contact your hotel and spa for reservations?</div>
                    <div class="answer">You can contact us by phone at +1 (409) 987–5874 or by email at spring@hotel.com.</div>
                </li>
                <li>
                    <div class="question">What types of accommodations do you offer?</div>
                    <div class="answer">We offer a range of accommodations, including standard rooms, deluxe rooms, and suites.
                    </div>
                </li>
                <li>
                    <div class="question">Do you have both smoking and non-smoking rooms?</div>
                    <div class="answer">All our rooms are non-smoking to ensure a comfortable environment for all guests.</div>
                </li>
                <li>
                    <div class="question">What are your check-in and check-out times?</div>
                    <div class="answer">Check-in time is at 10:00 am, and check-out time is at 12:00 pm.
                    .</div>
                </li>
                <li>
                    <div class="question">Is there a minimum age requirement for check-in?</div>
                    <div class="answer">The minimum age for check-in is 18 (if you are younger you need your parents approval).</div>
                </li>
                <li>
                    <div class="question">Do you offer parking facilities for guests?</div>
                    <div class="answer">Yes, we provide complimentary parking for all registered guests.</div>
                </li>
                <li>
                    <div class="question">Is your hotel pet-friendly?</div>
                    <div class="answer">Unfortunately, we do not allow pets at our hotel.</div>
                </li>
                <li>
                    <div class="question">Are there any nearby attractions or points of interest?</div>
                    <div class="answer">Nearby we have a shopping mall , a football stadium and a 3 Michelin Star restaurant.</div>
                </li>
                <li>
                    <div class="question">What languages do your staff members speak?</div>
                    <div class="answer">Our staff is multilingual, and we can assist you in English, French, German and Albanian.</div>
                </li>
            </ul>
        </li>
        <br>
        <li>
            <h2>Reservations:</h2>
            <ul class="faq-list">
                <li>
                    <div class="question">How can I make a reservation at your hotel and spa?</div>
                    <div class="answer">You can make a reservation by calling us directly, visiting our website, or using our online
                        booking platform.</div>
                </li>
                <li>
                    <div class="question">What is your cancellation policy?</div>
                    <div class="answer">Our cancellation policy allows free cancellation up to 1 day before
                        the check-in date. Please refer to our website for detailed information.</div>
                </li>
                <li>
                    <div class="question">Can I modify or cancel my reservation online?</div>
                    <div class="answer">Yes, you can modify or cancel your reservation through our website or by contacting our
                        reservations team.</div>
                </li>
                <li>
                    <div class="question">Do you offer group reservations or special event packages?</div>
                    <div class="answer">We do offer group reservations and special event packages. Please contact our events team
                        for more information.</div>
                </li>
                <li>
                    <div class="question">Are there any discounts for extended stays?</div>
                    <div class="answer">Yes, we provide discounts for extended stays. The longer you stay, the more you save.</div>
                </li>
            </ul>
        </li>
        <br>
        <li>
            <h2>Rooms and Suites:</h2>
            <ul class="faq-list">
                <li>
                    <div class="question">What amenities are included in your rooms?</div>
                    <div class="answer">Our rooms come equipped with lots of amenities, including comfortable beds, clean bathrooms, nice views etc.</div>
                </li>
                <li>
                    <div class="question">Do you provide cribs or rollaway beds for families with children?</div>
                    <div class="answer">Yes, we offer cribs and rollaway beds upon request for families with children.</div>
                </li>
                <li>
                    <div class="question">Is there a difference between standard and deluxe rooms?</div>
                    <div class="answer">Deluxe rooms offer master beds, larger space, jacuzzis and other stuff compared to standard rooms.</div>
                </li>
                <li>
                    <div class="question">Do you have accessible rooms for guests with disabilities?</div>
                    <div class="answer">Yes, we have accessible rooms designed to accommodate guests with disabilities.</div>
                </li>
                <li>
                    <div class="question">Is room service available, and what are the hours?</div>
                    <div class="answer">Room service is available from 08:00 to 20:00, offering a variety of delicious options.</div>
                </li>
            </ul>
        </li>
        <br>
        <li>
            <h2>Facilities and Amenities:</h2>
            <ul class="faq-list">
                <li>
                    <div class="question">What recreational facilities do you have on-site?</div>
                    <div class="answer">We have sports facilities, chill facilities, including SPA, ind0or pool, indo0r tennis court etc.</div>
                </li>
                <li>
                    <div class="question">Is there a fitness center, and what are the hours of operation?</div>
                    <div class="answer">Our fitness center is open from 10:00 to 19:00, equipped with state-of-the-art exercise machines.
                    </div>
                </li>
                <li>
                    <div class="question">Do you have a swimming pool, and is it heated?</div>
                    <div class="answer">Yes, we have a heated swimming pool open to guests.</div>
                </li>
                <li>
                    <div class="question">Are there any business or meeting facilities available?</div>
                    <div class="answer">We offer 4 meeting rooms and business facilities for conferences and
                        events.</div>
                </li>
                <li>
                    <div class="question">Is Wi-Fi available throughout the hotel, and is it complimentary?</div>
                    <div class="answer">Complimentary Wi-Fi is available throughout the hotel for all guests.</div>
                </li>
            </ul>
        </li>
    </ul>

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
<script src="../js/ClientSide/FAQ.js"></script>
<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
