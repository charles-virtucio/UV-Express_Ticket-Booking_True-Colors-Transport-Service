<?php
session_start();
require_once '../conn.php';
$class = "signin";

?>
<?php
$cur_page = 'signup';
include 'includes/inc-header.php';
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!isset($email, $password)) {
?>
        <script>
            alert("Ensure you fill the form properly.");
        </script>
        <?php
    } else {

        //Check for login
        $password = md5($password);
        $check = $conn->prepare("SELECT * FROM passenger WHERE email = ? AND password = ?");
        $check->bind_param("ss", $email, $password);
        if (!$check->execute()) die("Form Filled With Error");
        $res = $check->get_result();
        $no_rows = $res->num_rows;
        if ($no_rows ==  1) {
            $row = $res->fetch_assoc();
            $id = $row['id'];
            $status = $row['status'];
            if ($status != 1) {
        ?>
                <script>
                    alert("Account Deactivated!\nContact The System Administrator!");
                    window.location = "signin.php";
                </script>
            <?php
                exit;
            }
            session_regenerate_id(true);
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;

            ?>
            <script>
                alert("Access Granted!");
                window.location = "individual.php";
            </script>
        <?php
            exit;
        } else { ?>
            <script>
                alert("Access Denied.");
            </script>
<?php
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
    <div class="form" style="max-width: 400px; margin: 0 auto;">
        <img src="images/uvexpresslogo.png" alt="Logo" style="display: block; margin: 0 auto 20px; max-width: 150px;">
        <h2>Sign In</h2>
        <br>
        <form class="login-form" method="post" role="form" id="signup-form" autocomplete="off">
            <!-- json response will be here -->
            <div id="errorDiv"></div>
            <!-- json response will be here -->

            <div class="col-md-12">
                <div class="form-group">
                    <label style="text-align: left; display: block;">Email Address:</label>
                    <input type="email" required name="email">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                <label style="text-align: left; display: block;">Password:</label>
                    <input type="password" name="password" id="password">
                    <span class="help-block" id="error"></span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" id="btn-signup">
                        SIGN IN
                    </button>
                </div>
            </div>
            <p class="message">
                <a href="#">.</a><br>
            </p>
            <div class="splash-footer">Dont have an account yet? <a href="individual_reg.php">Sign Up</a></div>
            <div class="splash-footer">Back <a href="../index.php">Home</a></div>
        </form>
    </div>
</div>
</div>
<script src="assets/js/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/sweetalert2.js"></script>
</body>

</html>