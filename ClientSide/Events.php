<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
    <link rel="stylesheet" href="../css/ClientSide/Events.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Spring Hotel | Events</title>
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
        <h1>Events</h1>
        <p><a href="./index.html">Home </a>&rarr;<b> Events</b></p>
    </header> 

    <div class="container">
        <div class="hero-section d-flex flex-column justify-content-center align-items-center">
        <div class="title">
            <h1 class="hero-title text-center mt-4">Happenings &amp; Entertainment</h1>
            <h3 class="hero-subtitle text-center">at Spring Hotel &amp; Spa</h3>
        </div>
        <p class="text-center mt-4 mb-4">
            You know that one friend who always has the heads up on amazing events? <br>
            Congratulations. That's now you. Browse through all the happenings, events & entertainment that span Spring Hotel &amp; Spa.
        </p>
        </div>

        <div class="events table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col" colspan="3" class="text-center"><h2>FEATURED</h2></th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <th class="align-middle text-center" scope="row" style="width: 20%;">EVERY DAY</th>
                    <td ><img src="https://virginhotels.com/media/d03j5ggb/photo-dec-15-2023-5-07-32-pm.jpg?width=400&height=400&quality=60&v=1da347b6e19fe70" width="223px" height="223"></td>
                    <td>
                        <h1 class="text-center event-title">Nomad Snow Globes</h1>
                        <h6 class="text-center">11AM - 3PM & 4PM - 11PM | Rooftop</h6>
                        <p class="text-center">Step into our 10 life-sized Winter Snow Globes on the Spring Terrace - the perfect way to stay cozy all winter long.</p>
                    </td>
                  </tr>
                  <tr>
                    <th class="align-middle text-center " scope="row" style="width: 20%;">EVERY <br/>WEEKDAY</th>
                    <td><img src="https://virginhotels.com/media/specjlcx/happyhour.jpg?rxy=0.44665670141704983,0.4351194470942674&width=400&height=400&quality=60&v=1d9f78392b01510" width="223px" height="223"></td>
                    <td>
                        <h1 class="text-center event-title">Sundown Social: Happy Hour</h1>
                        <h6 class="text-center">4 pm - 8 pm | Second floor Restaurant</h6>
                        <p class="text-center">Pull up a seat and discover the perfect blend of food, cocktails, & music with after work entertainment ranging from jazz to DJs, it’s not just a happy hour; it’s a social affair. So let loose and unwind at Spring every Monday through Friday from 4-8pm because life’s too short to wait for the weekend.</p>
                    </td>
                  </tr>
                  <tr>
                    <th class="align-middle text-center" scope="row" style="width: 20%;">EVERY <br/>TUESDAY & THURSDAY</th>
                    <td><img src="https://shorturl.at/aCPQV" width="223px" height="223"></td>
                    <td>
                        <h1 class="text-center event-title">Live At Spring</h1>
                        <h6 class="text-center">4 pm - 9 pm | Spring Club</h6>
                        <p class="text-center">Enjoy an intimate evening at Spring and start the night off with a lively DJ set to kick off Happy Hour from 4-6pm, that slowly transitions into Live Jazz from 6-9pm, featuring some of the greatest young talent in Prishtina City</p>
                    </td>
                  </tr>
                  <tr>
                    <th class="align-middle text-center" scope="row" style="width: 20%;">EVERY <br/>WEDNESDAY</th>
                    <td><img src="https://shorturl.at/jrEPS" width="223px" height="223"></td>
                    <td>
                        <h1 class="text-center event-title">Selectors</h1>
                        <h6 class="text-center">5 pm - 9 pm | Spring Club</h6>
                        <p class="text-center">Your Wednesday night happy hour entertainment is brought to you by Soul in the Horn curator Derick Prosper, bringing his legendary talents of eclectic performers and DJs to Spring from 5 - 9pm.</p>
                    </td>
                  </tr>
                  <tr>
                    <th class="align-middle text-center" scope="row" style="width: 20%;">EVERY <br/>FRIDAY & SATURDAY</th>
                    <td><img src="https://shorturl.at/dfyF4" width="223px" height="223"></td>
                    <td>
                        <h1 class="text-center event-title">Twilight</h1>
                        <h6 class="text-center">5 pm - 9 pm | Spring Club</h6>
                        <p class="text-center">Ease into the evening at Spring for cocktails, good vibes, and curated jams from some of Prishtina’s most experienced selectors every Friday & Saturday from 5-9pm.</p>
                    </td>
                  </tr>
                </tbody>
                
              </table>
        </div>
    </div>

    <div class="promoters">
        <h1 class="text-center promoters-title mb-5 mt-3">#springluxury</h1>
        <div class="row mb-5 justify-content-center mr-auto posts">
            <div class="col-md-4 mt-md-4 text-center ">
                <div class="card" >
                    <img class="card-img-top" src="https://instagram.fprn3-1.fna.fbcdn.net/v/t39.30808-6/406466899_18166380178292458_6338572700259867951_n.jpg?stp=dst-jpg_e15&efg=eyJ2ZW5jb2RlX3RhZyI6ImltYWdlX3VybGdlbi4xNDQweDE0NDAuc2RyIn0&_nc_ht=instagram.fprn3-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=a6aXityj11IAX-73J5K&edm=ABmJApAAAAAA&ccb=7-5&ig_cache_key=MzI1MDUzNDI2ODMzMzEwNzUyNw%3D%3D.2-ccb7-5&oh=00_AfCb5TwDu52EHBKd604OejNWbcwZtdX0owKIDqr3U_2wHQ&oe=65A5BD61&_nc_sid=b41fef" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-start text-dark"><a href="https://www.instagram.com/virginhotelsnyc/" class="card-text text-dark text-decoration-none"><b>springhotel</b> </a> Heading into the Holidays at <a href="https://www.instagram.com/virginhotelsnyc/" class="card-text text-dark text-decoration-none">@springhotel</a> ✨🎁 #SpringHotelsLuxury</p>
                        <a href="https://www.instagram.com/p/C1X2ZB0vrC6/" target="_blank" class="btn btn-outline-dark btn-costum">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="14" viewBox="0 0 448 512" class="ig-svg"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512" class="different-color-ig"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f7f7f7" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            See original post</a>                    </div>
                  </div>
            </div>
            <div class="col-md-4  text-center">
                    <div class="card" >
                        <img class="card-img-top" src="https://curatorio.s3.amazonaws.com/f6202c5a-6ec2-41f7-8e2f-c4547db8ceb3/342577318_4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-start text-dark"><a href="https://www.instagram.com/virginhotelsnyc/" class="card-text text-dark text-decoration-none"><b>springhotel</b> </a> 2024 Loading ⏰🥂 Head to the link in bio for tickets to our Midnight in Prishtina soirée at <a href="https://www.instagram.com/virginhotelsnyc/" class="card-text text-dark text-decoration-none">@springhotel</a> #SpringHotelsLuxury</p>
                          <a href="https://www.instagram.com/p/C1X2ZB0vrC6/" target="_blank" class="btn btn-outline-dark btn-costum">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="14" viewBox="0 0 448 512" class="ig-svg"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512" class="different-color-ig"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f7f7f7" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            See original post</a>
                        </div>
                      </div>
            </div>
            <div class="col-md-4 mt-md-4 animated bounce infinite text-center">
                <div class="card" >
                    <img class="card-img-top" src="../assets/images/city_view.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-start text-dark"><a href="https://www.instagram.com/virginhotelsnyc/" class="card-text text-dark text-decoration-none"><b>springhotel</b> </a> This room service spread is giving us all the heart eyes! 😍🍴 #SpringHotelsLuxury</p>
                        <a href="https://www.instagram.com/p/C1X2ZB0vrC6/" target="_blank" class="btn btn-outline-dark btn-costum">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="14" viewBox="0 0 448 512" class="ig-svg"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512" class="different-color-ig"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f7f7f7" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            See original post</a>                  </div>
            </div>
        </div>
    </div>
    </div>

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
<script src="../js/ClientSide/Events.js"></script>
<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
