<?php
session_start();
require_once '../conn.php';
require_once '../constants.php';
$class = "reg";
?>
<?php
$cur_page = 'signup';
include 'includes/inc-header.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $file = 'file';
    $address = $_POST['address'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    if (!isset($name, $address, $phone, $email, $password, $cpassword) || ($password != $cpassword)) { ?>
        <script>
            alert("Ensure you fill the form properly.");
        </script>
        <?php
    } else {
        //Check if email exists
        $check_email = $conn->prepare("SELECT * FROM passenger WHERE email = ? OR phone = ?");
        $check_email->bind_param("ss", $email, $phone);
        $check_email->execute();
        $res = $check_email->store_result();
        $res = $check_email->num_rows();
        if ($res) {
        ?>
            <script>
                alert("Email already exists!");
            </script>
        <?php

        } elseif ($cpassword != $password) { ?>
            <script>
                alert("Password does not match.");
            </script>
            <?php
        } else {
            //Insert
            $password = md5($password);
            $can = 1;
            $loc = uploadFile('file');
            if ($loc == -1) {
                echo "<script>alert('We could not complete your registration, try again later!')</script>";
                exit;
            }
            $stmt = $conn->prepare("INSERT INTO passenger (name, email, password, phone, address, loc) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param("ssssss", $name, $email, $password, $phone, $address, $loc);
            if ($stmt->execute()) {
            ?>
                <script>
                    alert("Congratulations.\nYou are now registered.");
                    window.location = 'signin.php';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("We could not register you!.");
                </script>
<?php
            }
        }
    }
}
?>
<style>
    body {
        background-image: url('images/vehiclelg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .signup-page {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
    }
</style>
<div class="signup-page">
    <div class="form">
        <img src="images/uvexpresslogo.png" alt="Logo" style="display: block; margin: 0 auto 20px; max-width: 150px;">
        <h2>Passenger Sign Up Form</h2>
        <br>

        <form class="login-form" method="post" role="form" enctype="multipart/form-data" id="signup-form" autocomplete="off">
            <!-- json response will be here -->
            <div id="errorDiv"></div>
            <!-- json response will be here -->
            <div class="col-md-12">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Full Name:</label>
                    <input type="text" required minlength="10" name="name">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Contact Number:</label>
                    <input type="text" minlength="11" pattern="[0-9]{11}" required name="phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Email Address:</label>
                    <input type="email" required name="email">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Select Picture:</label>
                    <input type="file" name='file' required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Address:</label>
                    <input type='text' name="address" class="form-group" required>
                    </select>
                    <span class="help-block" id="error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Password:</label>
                    <input type="password" name="password" id="password">
                    <span class="help-block" id="error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Confirm Password:</label>
                    <input type="password" name="cpassword" id="cpassword">
                    <span class="help-block" id="error"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" id="btn-signup">
                        SIGN UP
                    </button>
                </div>
            </div>
            <p class="message">
                <a href="#">.</a><br>
            </p>
            <div class="splash-footer">If you already have an account <a href = "signin.php">Sign In</a></div>
            <div class="splash-footer">Back <a href = "../index.php">Home</a></div>
        </form>
    </div>
</div>
</div>
<script src="assets/js/jquery-1.12.4-jquery.min.js"></script>

</body>

</html>