<?php include 'include/header.php'; ?>





<section class="user_hero_sec">
	<div class="container">
		<div class="user_profile_main">
			<div class="user_bg_image"><img class="img_Fluid" src="images/user_bg_img.jpg" alt=""></div>
			<div class="user_profile_image"><img src="images/user_profile_picture.jpg" alt=""></div>
		    <div class="user_info">
				<h2 class="title">SkySoft Tech</h2>
				<h6 class="subtitle">Revolutionary Step for Revolutionary Business</h6>
				<ul class="about_user_location" >
					<li>IT Services and IT Consulting</li>
					<li>Karachi</li>
					<li>2,803 followers</li>
					<li><a href="#">85 employees</a></li>
				</ul>
				<div class="follow_btn">
					<a href="#"><i class='bx bx-plus'></i>Follow</a>
				</div>
		     </div>
		    <div class="about_other_info_about_user">
			<!-- Nav tabs -->
			<div class="tab-container">
				<div class="tab active" onclick="showTab('tab1')">Home</div>
				<div class="tab" onclick="showTab('tab2')">About</div>
				<div class="tab" onclick="showTab('tab3')">Jobs</div>
			</div>
		   </div>
		</div>
	</div>
</section>


<section class="about_tabs_info">
	<div class="container">
		<div class="about_com">
			<!-- Tab panes -->
			<div class="tab-content active" id="tab1">
				<div class="about_content">
					<h3>About</h3>
					<p>Sky Soft-Tech is a group of companies empowering businesses in their early venture stages.
						Our services are designed to initiate entrepreneurial ventures, acquire investments,
						and build and connect clients with business prospects. Working with us equals working
						with a full-fledged consultant network tha</p>
					<a href="#tab2"  onclick="showTab('tab2')" class="ftr_btn">Show all details </a>	
				</div>
			</div>

			<div class="tab-content" id="tab2">
			   <div class="about_content">
					<h3>Overview</h3>
					<p>Sky Soft-Tech is a group of companies empowering businesses in their early venture stages. 
						Our services are designed to initiate entrepreneurial ventures, acquire investments, and build and connect clients with business prospects. 
						Working with us equals working with a full-fledged consultant network that builds on startups' and venture partners' business goals, operations, and revenue streams. We present our experience in the industry and connect businesses with a vast network of people who can help scale opportunities. 
						We are your partners in venture growth as we work to define and execute key growth strategies, deliver immaculate launch experiences, innovate products and markets, and secure appropriate funding. 
						From focused planning and development to strategic execution, we help businesses achieve long-term growth.</p>
						<h6 class="subtitle">Industry</h6>
						<p>IT Services and IT Consulting</p>
						<h6 class="subtitle">Company size</h6>
						<p>201-500 employees</p>
						<h6 class="subtitle">Founded</h6>
						<p>2021</p>
						<h6 class="subtitle">Specialties</h6>
						<p>Strategy and Planning, Business Modeling, Marketing Consulting, Application Development
							& Design, Web Development & Design, HTML Development, Social Media Marketing,
							2D and 3D Animation, SEO & SMM Marketing, Paid Marketing, Ghost Writing,
							and Academic Writing</p>
				</div>
			</div>

			 <div class="tab-content " id="tab3">
				<div class="job_post">
					<div class="d-flex">
						<span><i class='bx bxs-briefcase'></i></span>
						<div><h2>Are you hiring?</h2><p>Attract qualified applicants by posting and showcasing jobs on your page.</p></div>
						</div>
					   <div class="follow_btn">
					   <a href="job_post.php"><i class='bx bx-plus'></i>Post a Job</a>
				     </div>
			   </div>
			   <div class="job_post">
					<div class="job_persons_list">
						<h2>All Jobs</h2>
						<div class="d-flex">
							<div><img src="images/user_profile_picture.jpg" alt=""></div>
							<div>
								<h2>Frontend Developer</h2>
								<P>SaaQiTech</P>
								<p>	 2019 - Feb 2023 · 4 yrs 2 mos</p>
							</div>
						</div>
					</div>
			   </div>
			</div>
		</div>
	</div>
</section>






<!-- Footer -->
<?php include 'include/footer.php'; ?>


<script>
    function showTab(tabId) {
      // Hide all tab contents
      var tabContents = document.getElementsByClassName("tab-content");
      for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
      }

      // Show the selected tab content
      var selectedTab = document.getElementById(tabId);
      selectedTab.classList.add("active");

      // Highlight the active tab
      var tabs = document.getElementsByClassName("tab");
      for (var j = 0; j < tabs.length; j++) {
        tabs[j].classList.remove("active");
      }
      event.target.classList.add("active");
    }
  </script>