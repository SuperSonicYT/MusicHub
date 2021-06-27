<?php 
require_once "config.php";
session_start(); 
?>

<html>
    <head>
        <title>New Hits:Music hub</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {margin:0; background-color: #4CAF50;}
            html {font-family: Arial, Helvetica, sans-serif;}
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
                display: flex;
                flex-direction: column;
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
            .homebody { margin: 0; padding: 0; }
            .recent {
                margin: 0;
                background-color: #4CAF50;
            }
            tr { display: table; float: left;  background-color:whitesmoke; padding: 25;}
            td { display: block; } 
            table { display: block; padding: 10;  }
             .title { font-size: 20; font-weight: bold; text-align: center;} 
             .buy-btn {
                float: right; 
                background-color: #0099CC; 
                border-radius: 30px; 
                text-transform: uppercase; 
                height: 40;
                width: 150;
                margin: 0 75;
                font-size: 15;
                color: white;
             }
             .music-buy-button { height: 20; }

             .wrapper {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.cart-box {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.payment-box {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.cart-box,
.col-50,
.payment-box {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.cart-box,
.col-50,
.payment-box {
  box-sizing: border-box;
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
            </form>
            <div class="social">
                <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://www.instagram.com" target="_blank" 
                
                class="fa fa-instagram"></a>
            </div>  
        </div>

        <ul class="menu">
            <li><a href="home.php">HOME</a></li>
            <li><a class="active" href="newhits.php">NEW HITS</a></li>
            <li><a href="recent.php">RECENTLY ADDED</a></li>
            <li><a href="atf.php">ALL TIME FAVOURITES</a></li>
            <li><a href="playlists.php">PLAYLISTS</a></li>
            <li><a href="licensing.php">BUY MUSIC</a></li>
            <li><a href="about.php">ABOUT US</a></li>
        </ul>

    </div>
    <div class="wrapper">
        <div class="payment-box">
            <div class="container">
                <form action="/action_page.php">
                    <div class="wrapper">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Firstname Lastname">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="xyz@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="123, xyz Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="Bangalore">
                            <div class="wrapper">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="Karnataka">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="560001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="Firstname Lastname">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="wrapper">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>
        <div class="cart-box">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
      <p><?php echo $_POST['song_name']; ?><span class="price">Rs.1050</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs.1050</b></span></p>
    </div>
  </div>
</div>
    </body>
</html>