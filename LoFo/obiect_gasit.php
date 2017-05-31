<?php
include_once("php_includes/check_login_status.php");
if($user_ok == false)
    {
        header("location: signup.php");
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
                <?php if($user_role == true) : ?>
                <a href="admin_panel.php">ADMIN PANEL</a> |
                <?php endif; ?>
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
                    <p class="login_items">Welcome, <?php echo $log_username; ?></p>
                    <a href="logout.php">Logout</a>
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
            <h1>Obiect Gasit</h1>
            <span>Object Name: </span> <input type="text" placeholder="Enter the name of the found object" name="uname" size="55" required>
            <br><br>
            <span>Category: </span> <select name="reasons">
                <option value="">Please select the category of the object</option>
                <option value="value01">Phone</option>
                <option value="value02">Accesories</option>
                <option value="value03">Electronics</option>
                <option value="value04">Papers</option>
                <option value="value05">Keys</option>
            </select>
            <br><br>
            <span>Producer: </span><input type="text" placeholder="Enter the object's producer (if it has any)" name="uname" size="55" required>
            <br><br>
            <span>Model: </span><input type="text" placeholder="Enter the object's model (if it has any)" name="uname" size="55" required>
            <br><br>
            <span>Color: </span><input type="text" placeholder="Enter your object's color" name="uname" size="55" required>
            <br><br>
            <span>Picture: </span><input type="text" placeholder="<HERE SHOULD BE AN UPLOAD FUNCTION>" name="uname" size="55" required>
            <br><br>
            <span>Found Location: </span>
            <select name="reasons">
                <option value="">Please select the location where you found the object</option>
                <option value="value01">Copou</option>
                <option value="value02">Tatarasi</option>
                <option value="value03">Alexandru</option>
                <option value="value04">Baza III</option>
                <option value="value05">Nicolina</option>
            </select>
            <br><br>
            <span>Found Date: </span><input type="date" placeholder="Enter your phone no. -- it will not be made public" name="uname" size="55" required>
            <!--
            <br><br>
                    <span>CNP: </span><input type="text" placeholder="Enter your CNP -- it will not be made public" name="uname" size="55" required>
-->
            <br><br><br>
            <input type="submit" value="Let me help!">
        </div>
    </div>

</body>

</html>