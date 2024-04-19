<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Signup</title>
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/ClientSide/login-signup.css">
    <style>
        .termsAndConditions-container {
            display: inline-block;
            position: relative;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <form action="../API/WelcomeUser.php" method="post" class="form" >
            <div class="logoja">
                <h1 class="form-title">Login</h1>
                <a href="./index.php"><img src="../assets/images/Logo.png" alt="Logo" /></a>
            </div>
            <div class="form-message form-message-error"></div>
            <div class="form-input-group">
                <label for="username"></label>
                <input id="username" name="username" type="text" class="form-input"  autofocus placeholder="Username or email">
                <div class="form-input-error-message"></div>
            </div>
            <div class="form-input-group">
                <label for="password"></label>
                <input type="password" name="password" id="password" class="form-input" autofocus placeholder="Password">
                <div class="form-input-error-message"></div>
            </div>
            <button type="submit" class="form-button" >Continue</button>
            <p class="form-text">
                <a class="form-link" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
            <p class="form-text">
                <a href="./index.php" class="form-link">Back home</a>
            </p>
        </form>

        <form class="form form-hidden" id="createAccount">
            <div class="logoja">
                <h1 class="form-title">Create Account</h1>
                
            </div>
            <div class="form-message form-message-error"></div>
            <div class="form-input-group">
                <input type="text" id="signupUsername" class="form-input" autofocus placeholder="Username">
                <div class="form-input-error-message"></div>
            </div>
            <div class="form-input-group">
                <input type="email" class="form-input" autofocus placeholder="Email adress">
                <div class="form-input-error-message"></div>
            </div>
            <div class="form-input-group">
                <input type="password" class="form-input" autofocus placeholder="Password">
                <div class="form-input-error-message"></div>
            </div>
            <div class="form-input-group">
                <input type="password" class="form-input confirm-password" autofocus placeholder="Confirm Password">
                <div class="form-input-error-message"></div>
            </div>
            <label class="termsAndConditions-container" style="font-size: small; color: gray;">
                <input type="checkbox" id="termsCheckbox">
               <span class="terms-link" onClick="openPopup()">Terms And Conditions</span>
            </label>
            <div class="newsletter-radio-main">
                Do you want to sign up for our newsletter? 
                <div>
                    <input type="radio" id="Yes" name="newletter-option"> 
                    <label for="Yes">Yes</label>
                    <input type="radio" id="No" name="newletter-option">
                    <label for="No">No</label>
                </div>
            </div>
            <div id="humanVerification" class="human-verification">
                <p>Verify that you are human:</p>
                <div class="figure-box">
                <div id="draggableFigure" class="draggable-figure" draggable="true"><img src="/assets/images/arrow-right.png" id="draggable-image" alt=""></div>
                <div id="dropZone" class="drop-zone"></div>
                </div>
                <p id="verificationResult" class="verification-result form-message-success"></p>
            </div>
            <button class="form-button" type="submit">Continue</button>
            <p class="form-text">
                <a class="form-link" id="linkLogin">Already have an account? Login</a>
            </p>
            <p align="center">
                <a href="index.php" class="form-link">Back home</a>
            </p>
        </form>
            <!-- Popup for terms and conditions -->
        <div class="popup" id="termsPopup">
            <div class="popup-content">
                <span class="close-btn" onclick="closePopup()"><img src="/assets/images/close-video.png"></span>
                <h3 class="popup-title">Terms and Conditions</h3>
                <!-- Include your terms and conditions text or a link to download -->
                <p>
                    <ol class="terms-text">
                        <li>
                            Introduction:
   These terms and conditions govern your use of our website. By using our website, you agree to these terms in full. <mark>If you disagree with any part of these terms, please do not use our website.</mark></li>
                        <li>
                            Intellectual Property Rights:
   Unless otherwise stated, we or our licensors own the intellectual property rights on the website and its content. All rights are reserved.

                        </li>
                        <li>
                            License to Use Website:
   You may view, download, and print pages from the website for personal use only. Any other use is prohibited.
                        </li>
                        <li>
                            Restrictions:
   You must not republish, sell, rent, sublicense, or exploit material from the website for commercial purposes. Additionally, you must not engage in any activity that could damage the website.
                        </li>
                        <li>
                            Acceptable Use:
   Use our website responsibly. Do not engage in any activities that may harm the website's functionality or violate any laws.
                        </li>
                        <li>
                            Privacy Policy:
   Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and protect your personal information.
                        </li>
                        <li>
                            Changes to Terms:
                            We reserve the right to modify or update these terms and conditions at any time. It is your responsibility to check for changes.
                        </li>
                        <li>
                            Termination:
   We may terminate or suspend your access to the website without prior notice for any violation of these terms.
                        </li>
                        <li>
                            Governing Law:
   These terms are governed by and construed in accordance with the laws of the State of <abbr title="Virginia">VA</abbr>.

                        </li>
                        <li>
                            Contact Us:
    If you have any questions or concerns regarding these terms, please contact us at <i>spring@hotel.com</i>.

                        </li>
                    </ol>
                    By using our website, you agree to abide by these terms and conditions.
                </p>
                <a href="../assets/Terms and Conditions.pdf" target="_blank" id="terms-download">Download</a>
            </div>
        </div>
    </div>

    <script src="../js/ClientSide/login-signup.js"></script>
</body>
</html>