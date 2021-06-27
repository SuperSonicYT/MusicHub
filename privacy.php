<?php 
session_start(); 
?>

<html>
    <head>
        <title>Privacy Policy:Music Hub</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {margin:0; background-color: none;}
            html {font-family: Arial, Helvetica, sans-serif;}
            .homebody {
                padding: 50;
            }
            .menu {
                
                list-style-type: none;
                margin-top: 0;
                padding-top: 0;
                padding-left: 0;
                overflow: hidden;
                background-color: #333;
                top: 0;
                width: 100%;
            }
            .menu li {
                float: left;
            }
            .menu li a {
                position: relative;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 40px;
                text-decoration: none;
                font-size: 25px;
            }
            .menu li a:hover:not(.active) {
                background-color: #111;
            }
            .menu .active {
                background-color: #4CAF50;
            }
            .header2 a img {
                position: absolute;
                left: 0px;
                top: 0px;
                z-index: 1; 
            }
            .header1 {
                width: 100%;
                left: 0px;
                top: 0px;
                height: 36px;
                background-color: #111;
                text-align: right;
                ;
            }
            .header1 a {
                margin-top: 15px;
                padding: 15px;
                color: white;
                font-size: 15px;
                text-align: center;
            }
            .header2 {
                margin: 0;
                height: 150;
                background-color: #f8c615;
                position: relative;
            }
            .header2 .social {
                margin-left: 1100px;
                margin-top: 20px;
            }
            .header2 .title {
                font-family:  fantasy;
                position: absolute;
                top: 0;
                left: 0;
                margin-left: 160px;
                margin-top: 10px;
                font-size: 75px;
                z-index: 1;
            }
            .header2 .subtitle {
                font-family: serif, fantasy;
                font-style: oblique;
                position: absolute;
                top: 0;
                left: 0;
                margin-left: 160px;
                margin-top: 90px;
                font-size: 20px;
                z-index: 1;
            }
            .search {
                float: right;
                text-align: left;
                margin: 0;
                padding: 14px;
            }

            .search input[type=text] {
                height: 60px;
                padding: 6px;
                margin-top: 30px;
                font-size: 17px;
                border: none;
            }

            .search button {
                height: 60px;
                width: 60px;
                float: right;
                padding: 6px 10px;
                margin-top: 30px;
                margin-right: 16px;
                background: #ddd;
                border: none;
                cursor: pointer;
            }
            .search button i {
                margin: 0;
                padding:0;
            }

            .search button:hover {
                background: #ccc;
            }

            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 10px;
                font-size: 15px;
                border: none;
            }
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover {background-color: #ddd;}
            .dropdown:hover .dropdown-content {display: block;}
            .dropdown:hover .dropbtn {background-color: #3e8e41;}

            .social .fa {
                padding: 20px;
                font-size: 30px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
            }

            .social .fa:hover {
                    opacity: 0.7;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-twitter {
                background: #55ACEE;
                color: white;
            }

            .fa-linkedin {
                background: #007bb5;
                color: white;
            }
            .fa-instagram {
                background: #C13584;
                color: white;
            }
        </style>
        
 
    </head>
    <body>
    <div class="common">
        <div class="header1">  
            <a href="privacy.php">Privacy Policy</a></li>
            <a href="t&c.php">Terms and Conditions</a></li>
            <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ ?>
                <div class="dropdown">
                    <button class="dropbtn">Login/Signup</button>
                    <div class="dropdown-content" style="right:0;">
                        <a href="login&signup/login.php">Login</a></li>
                        <a href="login&signup/register.php">Sign Up</a></li>
                    </div>
                </div>
            <?php } else { ?>
                <div class="dropdown">
                    <button class="dropbtn"><?php echo htmlspecialchars($_SESSION["username"]); ?></button>
                    <div class="dropdown-content" style="right:0;">
                        <a href="login&signup/reset-password.php">Change Password</a></li>
                        <a href="login&signup/logout.php">Log out</a></li>
                    </div>
                </div>
            <?php } ?>
        </div>
        

        <div class="header2">
            <p class="title">MUSIC HUB</p>
            <p class="subtitle">--------------------------------------------------<br>One stop shop for all your musical needs</p>  
            <a href="home.php">
                <img src="images/logo.gif" width="150" height="150">Music Hub logo</img>
            </a>
            <form class="search" action="search.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search" style="font-size:20px"></i></button>
            </form>
            <div class="social">
                <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://www.instagram.com" target="_blank" class="fa fa-instagram"></a>
            </div>  
        </div>

        <ul class="menu">
            <li><a href="home.php">HOME</a></li>
            <li><a href="newhits.php">NEW HITS</a></li>
            <li><a href="recent.php">RECENTLY ADDED</a></li>
            <li><a href="atf.php">ALL TIME FAVOURITES</a></li>
            <li><a href="playlists.php">PLAYLISTS</a></li>
            <li><a href="licensing.php">BUY MUSIC</a></li>
            <li><a href="about.php">ABOUT US</a></li>
        </ul>

    </div>

    <div class="homebody">
    <h1>Privacy Policy for Music Hub</h1>

<p>At musichub, accessible from www.musichub.xyz, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by musichub and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in musichub. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info">Privacy Policy Generator</a> and the <a href="https://www.generateprivacypolicy.com/">Free Privacy Policy Generator</a>.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms. For our Terms and Conditions, please visit the <a href="https://www.privacypolicyonline.com/terms-conditions-generator/">Terms & Conditions Generator</a>.</p>

<h2>Information we collect</h2>

<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

<h2>How we use your information</h2>

<p>We use the information we collect in various ways, including to:</p>

<ul>
<li>Provide, operate, and maintain our webste</li>
<li>Improve, personalize, and expand our webste</li>
<li>Understand and analyze how you use our webste</li>
<li>Develop new products, services, features, and functionality</li>
<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
<li>Send you emails</li>
<li>Find and prevent fraud</li>
</ul>

<h2>Log Files</h2>

<p>musichub follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>




<h2>Advertising Partners Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of musichub.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on musichub, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that musichub has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>musichub's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

<p>Under the CCPA, among other rights, California consumers have the right to:</p>
<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>GDPR Data Protection Rights</h2>

<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>musichub does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
    </div>
    </body>
</html>