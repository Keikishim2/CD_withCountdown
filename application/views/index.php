<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coding Dojo</title>
    <link rel="stylesheet" type="text/css" href="../../assets/less/index.less">
    <link rel="stylesheet/less" type="text/css" href="../../assets/less/index.less">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://use.typekit.net/emv3zbo.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.digital.arizona.edu/lib/arizona-bootstrap/2.0.11/css/arizona-bootstrap.min.css" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/less@4.1.1"></script>
</head>
<body>
    <!-- header_section -->
    <header id="yourHeader" class="head">
        <div class="col">
            <img src="../../assets/images/bg.png" class="bg">
            <div class="virtual">
                <section class="main_form">
                    <div class="container">
                        <p>Next Open House: <span class="aqua">FRIDAY, OCTOBER 18, 2020 @ 03:00 PM PST</span>
                        <ul class="time">
                            <li>DAYS</li>
                            <li>HOURS</li>
                            <li>MINUTES </li>
                            <li>SECONDS</li>
                        </ul>
                        <h1 class="list_time"></h1>
                        <h3>Contact Info</h3>
                        <form id="form" class="form">
                            <label for="">
                                <input type="text" class="contact_inputs" id="full_name" placeholder="Full Name">
                                <span class="invalid_note">Invalid Fullname!</span>
                            </label><!--
                        --><label for="">
                                <input type="Email" class="contact_inputs" id="second" placeholder="Email">
                                <span class="invalid_note">Invalid Email!</span>
                            </label><!--
                        --><label for="">
                                <input type="phone" class="contact_inputs" id="second" placeholder="Phone">
                                <span class="invalid_note">Invalid Phone!</span>
                            </label>
                            <h3 id="camp">Campus of Interest</h3>
                            <h3 id="attend">Date To Attend</h3>
                            <label for="">
                                <select id="second" class="contact_inputs">
                                    <option value="seattle">Seattle</option>
                                    <option value="usa">USA</option>
                                    <option value="japan">Japan</option>
                                </select>
                            </label><!--
                        --><label for="">
                                <input type="text" class="contact_inputs input_date" id="second" placeholder="Date">
                                <span class="invalid_note">Invalid Date!</span>
                            </label>
                            <input type="submit" id="submit" value="Reserve Your Seat">
                        </form>
                    </div>
                </section>
                <h1 class="display-3">Virtual Open House</h1>
                <p class="side_info">Meet the instructors that have changed 5000 careers, and could change yours!</p>
                <ul class="icon_list">
                    <li><img src="../../assets/images/icon1.png" class="icons">Meet Our Instructors</li>
                    <li><img src="../../assets/images/icon2.png" class="icons">Explore Our Curriculum</li>
                    <li><img src="../../assets/images/icon3.png" class="icons">Get Your Questions Answered</li>
                </ul>
                <!-- tablet_section & mobile_section -->
                <section id="tablet_view">
                    <div class="date_info">
                        <img src="../../assets/images/rec.png" class="rec">
                        <p class="tablet_time"><span class="num0"></span> Days<span class="num1"></span> Hours<span class="num2"></span> Mins<span class="num3"></span> Secs <span class="light_text">until our next open house:</p>
                        <p class="timezone">FRIDAY, OCTOBER 18, 2020 @ 03:00 PST</p>
                        <div class="mobile_view">
                            <p class="mobile_house">Next Open House</p>
                            <p class="mobile_timezone">FRIDAY, OCTOBER 18, 2020 @ 03:00 PST</p>
                            <ul class="mobile_time">
                                <li><span class="int0">02</span> Days</li>
                                <li><span class="int1">12</span> Hours</li>
                                <li><span class="int2">42</span> Mins</li>
                                <li><span class="int3">04</span> Secs</li>
                            </ul>
                        <!-- end of tablet_section & mobile_section -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!-- end of header_section -->

    <!-- team_section -->
    <section id="team_section" class="wrap">
        <h2 class="display_team">Meet Some of the Team</h2>
        <div class="wrapper">
            <div class="box1">
                <h2>Phil Sung</h2>
                <h4>Burbank, CA</h4>
                <p>Teaches Python, MERN and Java</p>
                <img src="../../assets/images/sung.jfif" class="cropper">
            </div>
            <div class="box1">
                <h2>Phil Sung</h2>
                <h4>Burbank, CA</h4>
                <p>Teaches Python, MERN and Java</p>
                <img src="../../assets/images/sung.jfif" class="cropper">
            </div>
            <div class="box1">
                <h2>Phil Sung</h2>
                <h4>Burbank, CA</h4>
                <p>Teaches Python, MERN and Java</p>
                <img src="../../assets/images/sung.jfif" class="cropper">
            </div>
            <div class="box1">
                <h2>Phil Sung</h2>
                <h4>Burbank, CA</h4>
                <p>Teaches Python, MERN and Java</p>
                <img src="../../assets/images/sung.jfif" class="cropper">
            </div>
        </div>
    </section>
    <!-- end of team_section -->

    <!-- quote_section -->
    <section id="quote_section" class="wrap-fluid text-center py-4 mt-4" id="contact">
        <div class="row_items">
            <img src="../../assets/images/mic.png" class="alum">
            <h3 class="alumni">"Quisque Imperdiet Risus Ac Felis Convallis Scelerisque.<br><br>
                Fusce Aliquet Nunc Vitae Dictum Efficitur. Quisque<br>Imperdiet Risus Ac Felis Convallis Scelerisque."</h2>
                <p class="michael_r">Michael R.</p>
                <h6>Coding Dojo Alumni<br>Product Manager at AWS</h6>
        </div>
    </section>
    <!-- end of quote_section -->

    <!-- footer_section -->
    <footer id="your_footer">
        <h1 class="bottom_text">Join Us</h1>
        <p>Next Virtual Open House:<br>September 9, 2020 19:00 PST</p>
        <input type="submit" value="Reserve Your Seat" class="submit_last">
    </footer>
    <!-- end of footer_section-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/jquery.countdown.js"></script>
    <script src="../../assets/js/index.js"></script>
</body>
</html>