<?php 
session_start(); 
?>

<html>
    <head>
        <title>Terms & Conditions:Music Hub</title>
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
            <a href="t&c.html">Terms and Conditions</a></li>
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
    <h2><strong>Terms and Conditions</strong></h2>

<p>Welcome to musichub!</p>

<p>These terms and conditions outline the rules and regulations for the use of Music Hub's Website, located at www.musichub.xyz.</p>

<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use musichub if you do not agree to take all of the terms and conditions stated on this page.</p>

<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

<h3><strong>Cookies</strong></h3>

<p>We employ the use of cookies. By accessing musichub, you agreed to use cookies in agreement with the Music Hub's Privacy Policy. </p>

<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

<h3><strong>License</strong></h3>

<p>Unless otherwise stated, Music Hub and/or its licensors own the intellectual property rights for all material on musichub. All intellectual property rights are reserved. You may access this from musichub for your own personal use subjected to restrictions set in these terms and conditions.</p>

<p>You must not:</p>
<ul>
    <li>Republish material from musichub</li>
    <li>Sell, rent or sub-license material from musichub</li>
    <li>Reproduce, duplicate or copy material from musichub</li>
    <li>Redistribute content from musichub</li>
</ul>

<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com">Terms And Conditions Generator</a> and the <a href="https://www.generateprivacypolicy.com">Privacy Policy Generator</a>.</p>

<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Music Hub does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Music Hub,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Music Hub shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

<p>Music Hub reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

<p>You warrant and represent that:</p>

<ul>
    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>

<p>You hereby grant Music Hub a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

<h3><strong>Hyperlinking to our Content</strong></h3>

<p>The following organizations may link to our Website without prior written approval:</p>

<ul>
    <li>Government agencies;</li>
    <li>Search engines;</li>
    <li>News organizations;</li>
    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
</ul>

<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

<p>We may consider and approve other link requests from the following types of organizations:</p>

<ul>
    <li>commonly-known consumer and/or business information sources;</li>
    <li>dot.com community sites;</li>
    <li>associations or other groups representing charities;</li>
    <li>online directory distributors;</li>
    <li>internet portals;</li>
    <li>accounting, law and consulting firms; and</li>
    <li>educational institutions and trade associations.</li>
</ul>

<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Music Hub; and (d) the link is in the context of general resource information.</p>

<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Music Hub. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

<p>Approved organizations may hyperlink to our Website as follows:</p>

<ul>
    <li>By use of our corporate name; or</li>
    <li>By use of the uniform resource locator being linked to; or</li>
    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
</ul>

<p>No use of Music Hub's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

<h3><strong>iFrames</strong></h3>

<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

<h3><strong>Content Liability</strong></h3>

<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

<h3><strong>Your Privacy</strong></h3>

<p>Please read Privacy Policy</p>

<h3><strong>Reservation of Rights</strong></h3>

<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

<h3><strong>Removal of links from our website</strong></h3>

<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

<h3><strong>Disclaimer</strong></h3>

<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

<ul>
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>

<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
    </div>
    </body>
</html>