<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DreamSPY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/stylesheet/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/stylesheet/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body background="#A4A1A0">

    <!-- nav section -->
    <nav class="navbar navbar-expand-md  navbar-light fixed-top py-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="./assets/images/logo.png" width="100px" height="25px" alt="">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navcol">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">


                        <button onclick="document.getElementById('id01').style.display='block'" class="btn  ml-4 text-uppercase" style="width:auto;">Sign Up</button>
                        </span>
                    </li>
                    <li class="nav-item">
                        <button onclick="document.getElementById('id02').style.display='block'" class="btn  ml-4 text-uppercase">login</button>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- showcase section -->
    <section id="showcase" class="py-5">
        <img src="./assets/images/home_mobile_dhoni.png" alt="" class="dhoni-image">
        <div class="primary-overlay text-white w-100 h-100">
            <div class="container w-100 h-100">
                <div class="row justify-content-center align-items-center w-100 h-100">
                    <div class="col-md-6 text-center z-index" style="z-index:2;">
                        <img src="./assets/images/icc_dream11_logo.png" style="width: 150px; height: 120px;" alt="">
                        <h1 class="h1 pt-5 m-0  text-uppercase">
                            India's Biggest sport Game
                        </h1>
                        <button onclick="window.location.href=' https://www.cricketexchange.in/'" class="button1" style="vertical-align:middle"><span>Live Score </span></button>
                        <!--                             <a class="btn btn-success btn-lg text-white my-4" href=""> 
                            <i class="fas fa-download mr-3"></i>
                            Read More</a> -->
                        <div>
                            <!-- <a href="./assets/templates/wallet.php/" class="text-capitalize text-white">play Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="./assets/images/home_bolt_mobile.png" alt="" class="thunder-image">
    </section>



    <div id="score-frame"><a rel="nofollow" href="https://www.crictimes.org/cricket-scores">Live Cricket Scores</a></div>
    <script type="text/javascript">
        var html = document.getElementById('score-frame');
        html.innerHTML = '<iframe src="https://cwidget.crictimes.org/?v=1.1&lc=ffff00&lb=ff0000&ti=ff9900&b=d9d9d9&a=000000&sb=000000&c=ffffff" style="width:100%;min-height: 460px;" frameborder="0" scrolling="yes"></iframe>';
    </script>

    <!-- login -->

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" method="POST" action="./logup.php">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Name" name="email" required>

                <label for="email"><b>User Name</b></label>
                <input type="text" placeholder="Enter Email" name="name" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label for="email"><b>Phone</b></label>
                <input type="text" placeholder="Enter Phone Number" name="phone" required>

                <center>
                    Or
                    <hr style="width: 30%;border: #000000;"> <i class="fab fa-facebook-f"></i></li>
                    <i class="fab fa-twitter" style="width: 20px;height: 20px; "></i></label><br></center>
                <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button class="signupbtn " type="submit" value="Login">Login</button>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- logup  -->



    <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" method="POST" action="./login.php">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email or Phone</b></label>
                <input type="text" placeholder="Enter Email or Phone" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <center>
                    Or
                    <hr style="width: 30%;border: #000000;"> <i class="fab fa-facebook-f"></i></li>
                    <i class="fab fa-twitter" style="width: 20px;height: 20px; "></i></label><br></center>
                <label>
                <div class="clearfix">
                    <button class="signupbtn " type="submit" value="Login">Login</button>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

                </div>
            </div>
        </form>
    </div>
  

    <script>
        // Get the modal
        var modal2 = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>

    <br><br>





    <!-- section-3 -->
    <section id="section-3">
        <div class="container py-5">
            <div class="sec-sub-1 border-bottom pb-5 text-center">
                <div class="row">
                    <div class="col-4">
                        <div class="row justify-content-center">
                            <img src="./assets/images/6-crore-user.png" class="mw-s-3 mr-3 " alt="">
                            <div class="content text-uppercase align-self-center py-3">
                                <h3 class="m-0">crore+</h3>
                                <p class="h2 m-0">Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-center">
                            <img src="./assets/images/daily_contest.png" class="mw-s-3 mr-3" alt="">
                            <div class="content text-uppercase align-self-center">
                                <h3 class="m-0">crore+</h3>
                                <p class="h2 m-0">Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-center">
                            <img src="./assets/images/multi_sports.png" class="mw-s-3 mr-3" alt="">
                            <div class="content text-uppercase align-self-center py-3">
                                <h3 class="m-0">crore+</h3>
                                <p class="h2 m-0">Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-sub-2 py-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/uQHXxNTrYpQ?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4">
                            <div class="step d-flex">
                                <div class="number text-muted">1</div>
                                <div class="content align-self-center ml-4">
                                    <h5 class="m-0">selete a Match</h5>
                                    <p class="m-0 text-muted">select upcoming match of your choice</p>
                                </div>
                            </div>
                            <div class="step d-flex">
                                <div class="number text-muted">2</div>
                                <div class="content align-self-center ml-4">
                                    <h5 class="m-0">Create your DreamSPY Team</h5>
                                    <p class="m-0 text-muted">Use your sports knowledge to create a fantasy team using 100 credits</p>
                                </div>
                            </div>
                            <div class="step d-flex">
                                <div class="number text-muted">3</div>
                                <div class="content align-self-center ml-4">
                                    <h5 class="m-0">Join Free & Cash Contests</h5>
                                    <p class="m-0 text-muted">Participate in Cash or Practice Contests and go for glory!</p>
                                </div>
                            </div>
                            <form >
                            <!-- <button  onclick="window.location.href='./assets/templates/wallet.php/'" class="btn btn-block btn-success text-uppercase my-5 py-2">Play Now</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 4 -->
    <section id="section-4">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Get the app for these exclusive features</h2>
                    <ul class="list-unstyled text-muted">
                        <li>invite your friends & get Rs.100 cash bonus per friend</li>
                        <li>Build your own fan following. Follow people and see what they share, right in your feed</li>
                        <li>Play more, level up & get exciting rewards</li>
                    </ul>
                    <div class="app-publicity my-5 row">
                        <div class="android app-pub col-4 text-light py-2 my-2">
                            <div class="d-flex">
                                <i class="fab fa-android text-success align-self-center"></i>
                                <div class="content ml-3">
                                    <h7 class="m-0">Download our</h7>
                                    <h5 class="m-0">Android App</h5>
                                </div>
                            </div>
                        </div>
                        <div class="mac app-pub col-4 text-light ml-1 py-2 my-2">
                            <div class="d-flex">
                                <i class="fab fa-apple text-light align-self-center"></i>
                                <div class="content ml-3">
                                    <h7 class="m-0">Download our</h7>
                                    <h5 class="m-0">Android App</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./assets/images/desktop_app2_new.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 collapse -->
    <section id="section-5" class="collapse-work mb-5">
        <h4 class="text-center my-4 font-weight-bold">ABOUT FANTASY CRICKET</h4>
        <div class="container">
            <div class="card mb-4">
                <div class="card-header btn d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapseOne">
                    <h5 class="card-title mb-0">
                        What is Fantasy Cricket?
                    </h5>
                    <i class="fas fa-chevron-down ml-auto"></i>
                </div>

                <div id="collapseOne" class="collapse">
                    <img class="d-lg-block card-img" src="./assets/images/collapse.png" alt="">
                    <div class="card-img-overlay col-lg-6 overlay-custom-margin">
                        <p class="card-text text-muted">
                            Cricket is not just a sport in India, it's a religion. So it's no surprise that DreamSPY is most popular for its immersive fantasy cricket experience. From Tests to T20s, you can join contests for all formats of international cricket on DreamSPY. Apart
                            from ICC matches and tournaments, users can also play online cricket games from various cricket leagues like the IPL - followed and played across the world.
                        </p>
                        <p class="card-text text-muted">
                            But how does one join and play a fantasy cricket match on DreamSPY? All you need is do is register using your email address and mobile number. An even quicker way to sign up is by connecting your Google or Facebook account. The game comes with a set of
                            rules that are put in place to ensure #FairPlay for everyone.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header btn d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapseTwo">
                    <h5 class="card-title mb-0">
                        How To Play Fantasy Cricket and Win Cash Daily
                    </h5>
                    <i class="fas fa-chevron-down ml-auto"></i>
                </div>

                <div id="collapseTwo" class="collapse">
                    <div class="card-body">
                        <p class="card-text text-muted">Here are the basic rules you need to follow while playing a fantasy cricket match on DreamSPY:</p>
                        <p class="card-text pl-4 text-muted"><span class="h5 font-weight-bold">Selecting the Match</span> - Once you head to the cricket page, you'll see a list of upcoming cricket matches that you can participate in. Pick the match that suits you want to play.</p>
                        <p class="card-text pl-4 text-muted"><span class="h5 font-weight-bold">Creating a Team</span> - After you've selected a match, it's time to put your sports knowledge and analytical skills to good use by picking the right team. This is critical as creating the best
                            team will help you win bigger rewards in Cash Contests.</p>
                        <p class="card-text pl-4 text-muted"><span class="h5 font-weight-bold">Cash Contests</span> - Once you've created your team, you will be redirected to the contests page. Select a Cash Contest that fits your budget. You can also test your skills in Practice Contests.
                            That's it! You're all set for the fantasy cricket game.</p>
                        <p class="card-text pl-4 text-muted"><span class="h5 font-weight-bold">Follow the Match</span>It's time to check your fantasy cricket team’s progress. You can use the fantasy scorecard and contest leaderboard to check your rank. The scorecard is updated every 2 minutes.</p>
                        <p class="card-text pl-4 text-muted">Once the match is over and winners are officially declared, your fantasy team’s final ranking and winning amount will be visible on the leaderboard. You could withdraw winnings over Rs.200 from your DreamSPY account with a one-time
                            verification.
                        </p>
                        <p class="card-text"><span class="h5 font-weight-bold">TIP:</span>Choose your captain and vice-captain carefully as they will score 2x and 1.5x points respectively and will decide whether you are the winner in your fantasy cricket contest.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header btn d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapseThree">
                    <h5 class="card-title mb-0">
                        Beyond Cricket - Fantasy Football And Much More
                    </h5>
                    <i class="fas fa-chevron-down ml-auto"></i>
                </div>

                <div id="collapseThree" class="collapse">
                    <div class="card-body">
                        <p class="card-text text-muted">While fantasy cricket matches are extremely popular on DreamSPY, it also offers Cash Contests in fantasy football, NBA and kabaddi matches. DreamSPY is the official partner of many popular leagues like Indian Super League (ISL),
                            NBA, Pro Kabaddi League (PKL) and others. So why wait? Start playing on DreamSPY right away for the best fantasy sports experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 7 -->
    <section id="section-7 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li class="mb-4 font-weight-bold">Explore Teams</li>
                        <li class="text-primary">Mumbai Indians</li>
                        <li class="text-primary">Chennai Super Kings</li>
                        <li class="text-primary">Royal Challengers Bangalore</li>
                        <li class="text-primary">More Teams...</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-4 font-weight-bold">Explore Matches</li>
                        <li class="text-primary">Chennai Super Kings vs Kings XI Punjab</li>
                        <li class="text-primary">Kings XI Punjab vs Royal Challengers Bangalore</li>
                        <li class="text-primary">Kolkata Knight Riders vs Royal Challengers Bangalore</li>
                        <li class="text-primary">Kings XI Punjab vs Rajasthan Royals</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li class="mb-4 font-weight-bold">Explore Tours</li>
                        <li class="text-primary">Indian Premier League</li>
                        <li class="text-primary">Indian Super League</li>
                        <li class="text-primary">ICC Women's World Cup</li>
                        <li class="text-primary">Big Bash League</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer id="footer">
        <div class="top-footer text-light">
            <div class="container">
                <div class="top-footer-1 row py-5">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-sm-6 sociable">
                                <img src="./assets/images/logo.png" width="160px" height="43px" alt="">
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-youtube"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fas fa-music"></i></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 about-instruction text-center">
                                <ul class="list-unstyled">
                                    <li>Download App</li>
                                    <li>How to Play</li>
                                    <li>Invite Friends</li>
                                    <li>Fantasy Cricket</li>
                                    <li>Fanasy Football</li>
                                </ul>
                            </div>
                            <div class="col-sm-3 about-instruction text-center">
                                <ul class="list-unstyled">
                                    <li>Download App</li>
                                    <li>How to Play</li>
                                    <li>Invite Friends</li>
                                    <li>Fantasy Cricket</li>
                                    <li>Fanasy Football</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-center border-left">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="founding-member">
                                    <h6>Founding Member</h6>
                                    <img src="./assets/images/ifsg.png" style="width:40px;height:40px;" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="official-fantasy-game">
                                    <h6>Founding Member</h6>
                                    <div class="image-group row">
                                        <img src="./assets/images/footer-bbl.png" style="width:40px;height:40px;" class="m-2" alt="">
                                        <img src="./assets/images/footer-cpl.png" style="width:80px;height:40px;" class="m-2" alt="">
                                        <img src="./assets/images/footer-hero-new.png" style="width:40px;height:40px;" class="m-2" alt="">
                                        <img src="./assets/images/footer-icc-1.png" style="width:80px;height:40px;" class="m-2" alt="">
                                        <img src="./assets/images/footer-nba.png" style="width:80px;height:40px;" class="m-2" alt="">
                                        <img src="./assets/images/footer-pkl.png" style="width:40px;height:40px;" class="m-2" alt="">
                                        <img src="./assets/images/vivo_ipl_footer.png" style="width:40px;height:40px;" class="m-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-footer text-center text-capitalize py-4 text-light">
            <span class="mr-3">Developed By </span> <span class="pl-3 border-left">SPY Team</span>
        </div>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script>
        $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
    </script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        /* Add a background color when the inputs get focus */
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Set a style for all buttons */
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        
        button:hover {
            opacity: 1;
        }
        /* Extra styles for the cancel button */
        
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }
        /* Float cancel and signup buttons and add an equal width */
        
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }
        /* Add padding to container elements */
        
        .container {
            padding: 16px;
        }
        /* The Modal (background) */
        
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }
        /* Modal Content/Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }
        /* Style the horizontal ruler */
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        /* The Close Button (x) */
        
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }
        
        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }
        /* Clear floats */
        
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        /* Change styles for cancel button and signup button on extra small screens */
        
        @media screen and (max-width: 300px) {
            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }
    </style>

    <style>
        /* Extra styles for the cancel button */
        
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }
        /* Float cancel and signup buttons and add an equal width */
        
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }
        /* Add padding to container elements */
        
        .container {
            padding: 16px;
        }
        /* Clear floats */
        
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        /* Change styles for cancel button and signup button on extra small screens */
        
        @media screen and (max-width: 300px) {
            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }
        
        .button1 {
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }
        
        .button1 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        
        .button1 span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        
        .button1:hover span {
            padding-right: 25px;
        }
        
        .button1:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>

</body>

</html>