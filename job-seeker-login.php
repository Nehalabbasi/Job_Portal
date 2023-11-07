 <!-- Header -->
 <?php include 'include/header.php'; ?>

 <!-- Job Seeker Login Section Start -->
 <section class="job-seeker-login-sec">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5">
                 <div class="job-seeker-login">
                     <h2>Job Seeker Login</h2>
                     <div class="google-login">
                         <a href="#"><img width="22" src="images/google-icon.png" alt=""> Continue with Google</a>
                     </div>
                     <span class="divider">OR</span>
                     <form action="">
                         <div class="jobseeker-input-login">
                             <input type="email" id="email" autocomplete="off" required value="">
                             <label for="username">Email</label>
                         </div>
                         <div class="jobseeker-input-login">
                             <input type="password" id="password" autocomplete="off" required>
                             <label for="password">Password</label>
                         </div>
                     </form>
                     <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                     </div>
                     <div class="job-seeker-login-btn">
                        <a href="#">Job Seeker Login</a>
                     </div>
                     <div class="job-seeker-create-acc">
                        <p>New to Eraas?</p>
                        <a href="create-new-acc-job-seeker.php">Create an account</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Job Seeker Login Section End -->





 <!-- Footer -->
 <?php include 'include/footer.php'; ?>