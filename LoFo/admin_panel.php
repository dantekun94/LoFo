<?php
include_once("php_includes/check_login_status.php");
if($user_ok == false || $user_role == 0)
    {
        header("location: contact_us.php");
    exit();
    }
 ?>

    <html>

    <head>
        <title>Lost and Found - Marius Râncu şi Nedelcu Răzvan</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div class="header_menu">
            <div class="menu_content">
                <div class="menu_items">
                    <a href="index.php">HOME</a> |
                    <a href="signup.php">SIGN UP</a> |
                    <a href="report.php">REPORT</a> |
                    <a href="my_profile.php">MY PROFILE</a> |
                    <a href="admin_panel.php" class="activ">ADMIN PANEL</a> |
                    <a href="contact_us.php">CONTACT US</a>
                </div>

            </div>
        </div>
        <div class="banner_bg">
            <div class="banner_itself">
                <div class="slogan">
                    <div class="big_text">L O F O</div>
                    <div class="little_text">Lost & Found V4.0.1 BETA</div>
                </div>
                <?php if($user_ok == true) : ?>
                <div class="login">
                    <div class="login_items">
                        <span class="login_items">Welcome, <a href="./my_profile.php"><?php echo $log_username; ?></a>!
                            <a href="logout.php" style="color: red; position: relative; float: right; right: 10px;top: 45px;">Logout</a></span>

                    </div>
                </div>
                <?php else : ?>
                <div class="login">
                    <div class="login_items">
                        <input type="text" placeholder="Enter Username" id="username" size="18" required/>
                        <input type="checkbox" checked="checked" id="remember"><span>Remember me?</span>
                        <input type="password" placeholder="Enter Password" id="password" size="18" required/>
                        <input type="submit" id="loginbtn" onclick="login()"></submit>
                        <p id="status"></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="container">
            <div class="form">
                <h1>Hello,
                    <a href="./my_profile.php">
                        <?php echo $log_username; ?>
                    </a>!</h1>
            </div>
            <div class="admin_container">
                <div class="admin_button_one">
                    <div class="admin_upside">Pending lost objects</div>
                    <div class="admin_downside">1533</div>
                </div>

                <div class="admin_button_two">
                                    <div class="admin_upside">Unsolved reports</div>
                    <div class="admin_downside">22</div></div>
                <div class="admin_button_three">
                                    <div class="admin_upside">Registered members</div>
                    <div class="admin_downside">199</div></div>
                <div class="admin_button_four">
                                    <div class="admin_upside">Website Statistics</div>
                    <div class="admin_downside_s"> 122 / 22 / 99</div></div>
            </div>
        </div>
    </body>

    </html>