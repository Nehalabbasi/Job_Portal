<!-- Header -->
<?php include 'include/header.php'; ?>


<!-- Sign In form Code Start -->
<section class="sign-in-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="sign-in-form">
                    <div class="web-logo-img">
                        <img src="images/logo.png" alt="">
                    </div>
                    <div class="welcome-web-head">
                        <h4>Welcome to Careerbuilder</h4>
                        <p>Sign in and start hiring the best talent out there.</p>
                    </div>
                    <form action="">
                        <div class="form-item-signin">
                            <input type="email" id="email" autocomplete="off" required value="">
                            <label for="username">Email</label>
                        </div>
                        <div class="form-item-signin">
                            <input type="password" id="password" autocomplete="off" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="stay-forgotton">
                            <div class="stay-signed">
                                <input type="checkbox" name="" id="">
                                <p>Stay Signed In</p>
                            </div>
                            <div class="fogotton-signin-pass">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="sign-in-btn">
                            <a href="#">Sign In</a>
                        </div>
                        <div class="use-sso-btn">
                            <a href="sign-in-sso.php">Sign In using SSO</a>
                        </div>
                        <div class="create-new">
                            <p>Don't have an account?</p>
                            <a href="create-new-one.php">Create One Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign In form Code Start -->








<!-- Footer -->
<?php include 'include/footer.php'; ?>