    <!-- Header -->
    <?php include 'include/header.php'; ?>
    <style>
.switch {
    position: relative;
    display: inline-block;
    width: 53px;
    height: 26px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 22px;
    width: 22px;
    left: 3px;
    bottom: 2px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #333;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
    </style>



    <!-- Profile Section Start -->
    <section class="profile-detail-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="about-me-box">
                        <div class="about-edit">
                            <h6>About Me</h6>
                            <a href="#">Edit</a>
                        </div>
                        <div class="aboutme-box-txt">
                            <img src="images/profile-avater.JPG" alt="">
                            <h4>Robert brook</h4>
                            <div class="aboutme-txt-btn">
                                <a href="#" data-toggle="modal" data-target="#HeadlineModal">Add Headline</a>
                                <!--  Add Headline Box Modal  Start -->
                                <div class="modal fade" id="HeadlineModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">About Me</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="profile-photo">
                                                            <img src="images/profile-photo-ram.PNG" alt="">
                                                            <a href="#">Add Profle Photo</a>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">First Name</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Headline (optional)</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="location">Please add a Location</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="location">ZIP / Postal Code (optional)</label>
                                                        </div>
                                                        <div class="relocate-switch">
                                                            <span>I am willing to relocate</span>
                                                            <label class="switch">
                                                                <p class="switch-on-off">Yes</p>
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label></h2>
                                                        </div>
                                                        <div class="relocate-switch">
                                                            <span>I am willing to work remotelyMore Info</span>
                                                            <label class="switch">
                                                                <p class="switch-on-off">Yes</p>
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                            <div class="modal-end-para">
                                                <p>All information you choose to add to your profile, including your profile photo, will be shown to hiring managers as part of your application. If you have opted-in to our resume database by making your profile 'Public', this information will also be available to hiring managers who use our resume database or associated features. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  Add Headline Box Modal  Closed -->







                                <a href="#" data-toggle="modal" data-target="#LocationModal">Add Location</a>
                              <!--  Add Headline Box Modal  Start -->
                              <div class="modal fade" id="LocationModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">About Me</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="profile-photo">
                                                            <img src="images/profile-photo-ram.PNG" alt="">
                                                            <a href="#">Add Profle Photo</a>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">First Name</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Headline (optional)</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="location">Please add a Location</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="location">ZIP / Postal Code (optional)</label>
                                                        </div>
                                                        <div class="relocate-switch">
                                                            <span>I am willing to relocate</span>
                                                            <label class="switch">
                                                                <p class="switch-on-off">Yes</p>
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label></h2>
                                                        </div>
                                                        <div class="relocate-switch">
                                                            <span>I am willing to work remotelyMore Info</span>
                                                            <label class="switch">
                                                                <p class="switch-on-off">Yes</p>
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                            <div class="modal-end-para">
                                                <p>All information you choose to add to your profile, including your profile photo, will be shown to hiring managers as part of your application. If you have opted-in to our resume database by making your profile 'Public', this information will also be available to hiring managers who use our resume database or associated features. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  Add Headline Box Modal  Closed -->












                            </div>
                        </div>
                        <div class="about-me-box">
                            <div class="about-edit">
                                <h6>Contact Information</h6>
                                <a href="#">Edit</a>
                            </div>
                            <div class="aboutme-box-txt">
                                <ul>
                                    <li><span><i class='bx bx-envelope'></i></span><a href="#">Demo@gmail.com</a></li>
                                    <li><span><i class='bx bxs-phone-call'></i></span><a href="#" data-toggle="modal" data-target="#PhoneModal" >Add Phone Number</a>
                                             <!--  Phone Number Box Modal  Start -->
                                <div class="modal fade" id="PhoneModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-item-headline-modal">
                                                            <input type="email" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Email</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="number" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Phone Number</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  Phone Number Box Modal  Closed -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="about-me-box">
                        <div class="about-edit">
                            <h6>Websites</h6>
                            <a href="#">Edit</a>
                        </div>
                        <div class="aboutme-box-txt">
                            <ul>
                                <li><span><i class='bx bx-link-alt'></i></span><a href="#" data-toggle="modal" data-target="#WebsiteModal">Add Website</a>
                                      <!--  Websites URL Box Modal  Start -->
                                      <div class="modal fade" id="WebsiteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Websites</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <!-- <span aria-hidden="true">×</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add website URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Twitter profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add LinkedIn profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Facebook profile URL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Websites URL  Box Modal  Closed -->
                            </li>
                                <li><span><i class='bx bxl-twitter'></i></span><a href="#" data-toggle="modal" data-target="#TwitterModal">Add Twitter Profile</a>
                                        <!--  Websites URL Box Modal  Start -->
                                        <div class="modal fade" id="TwitterModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Websites</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <!-- <span aria-hidden="true">×</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add website URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Twitter profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add LinkedIn profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Facebook profile URL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Websites URL  Box Modal  Closed -->
                            </li>
                                <li><span><i class='bx bxl-linkedin'></i></span><a href="#"  data-toggle="modal" data-target="#LinkdinModal">Add LinkedIn Profile</a>
                                        <!--  Websites URL Box Modal  Start -->
                                        <div class="modal fade" id="LinkdinModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Websites</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <!-- <span aria-hidden="true">×</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add website URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Twitter profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add LinkedIn profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Facebook profile URL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Websites URL  Box Modal  Closed -->
                                </li>
                                <li><span><i class='bx bxl-facebook'></i></span><a href="#"   data-toggle="modal" data-target="#FacebookModal">Add Facebook Profile</a>
                                    <!--  Websites URL Box Modal  Start -->
                                    <div class="modal fade" id="FacebookModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Websites</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <!-- <span aria-hidden="true">×</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add website URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Twitter profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add LinkedIn profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Facebook profile URL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Websites URL  Box Modal  Closed -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="employer_resume_details_main">
                        <div class="employer_title">
                            <h2 d-flex>Let Employers Find You <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label></h2>
                            <p>Private: Your profile is not publicly accessible. However, it is viewable as a part of
                                your applications.</p>
                        </div>
                        <!-- Work Experience Box -->
                        <h2 class="title_head">Work Experience</h2>
                        <div class="employe_work_ex">
                            <a href="#" data-toggle="modal" data-target="#workingmodal"><span><i
                                        class='bx bx-plus'></i></span>Add Work Experience</a>
                            <div class="work-experiene-data">
                                <div class="work-name">
                                    <h4 id="pTitle">Shahdin</h4>
                                    <h5>Editor</h5>
                                    <h6>fsf</h6>
                                </div>
                                <div class="work-edit">
                                    <a href="#" class="work-edit">Edit</a>
                                    <p>Apr 2003 - Feb 2004</p>
                                </div>
                            </div>
                        </div>
                        <!--  Work Experience Box Modal start -->
                        <div class="modal fade" id="workingmodal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Work Experience</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="work-title">
                                                    <input type="text" placeholder="Title" id="title">
                                                </div>
                                                <div class="work-title">
                                                    <input type="text" placeholder="Company">
                                                </div>
                                                <div class="work-checkbox">
                                                    <input type="checkbox" name="" id="">
                                                    <p>I currently work here</p>
                                                </div>
                                                <div class="working-date">
                                                    <input type="date" name="" id="" placeholder="Add a Start Date">
                                                    <input type="date" name="" id="" placeholder="End Date (mm/yyyy)">
                                                </div>
                                                <div class="work-textarea">
                                                    <textarea name="" id="" rows="5"
                                                        placeholder="Description (optional)"></textarea>
                                                </div>
                                                <div class="liststyle-btn">
                                                    <a href="#"><svg width="40" height="40" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="40" height="40" rx="6" fill="#F6F7F8"></rect>
                                                            <path
                                                                d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                stroke="#515659" stroke-width="2.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></a>

                                                    <a href="#"><svg width="40" height="40" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="40" height="40" rx="6" fill="#F6F7F8"></rect>
                                                            <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                stroke-width="2.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                fill="#515659"></path>
                                                            <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></a>
                                                </div>
                                                <div class="save-another">
                                                    <a href="#"><i class='bx bx-plus'></i></a>
                                                    <a href="#" class="another-position">Save and add another
                                                        position</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn modal-cancel"
                                            data-dismiss="modal">cancel</button>
                                        <button type="button" class="btn modal-save"
                                            onclick="getInputValue()">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Work Experience Box Modal  Closed -->




                        <!-- Add Education Box -->
                        <h2 class="title_head">Education</h2>
                        <div class="employe_work_ex">
                            <a href="#" data-toggle="modal" data-target="#educationmodal"><span><i
                                        class='bx bx-plus'></i></span>Add Education</a>
                        </div>
                        <!--  Add Education Box Modal start -->
                        <div class="modal fade" id="educationmodal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Education</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="work-title">
                                                    <input type="text" placeholder="School">
                                                </div>
                                                <div class="work-title">
                                                    <input type="text" placeholder="Degree">
                                                </div>
                                                <div class="work-title">
                                                    <input type="text" placeholder="Major or field of study (optional)">
                                                </div>
                                                <div class="work-checkbox">
                                                    <input type="checkbox" name="" id="">
                                                    <p>Currently in progress</p>
                                                </div>
                                                <div class="working-date">
                                                    <input type="date" name="" id="" placeholder="Start year">
                                                    <input type="date" name="" id="" placeholder="End year">
                                                </div>
                                                <div class="work-textarea">
                                                    <textarea name="" id="" rows="5"
                                                        placeholder="Description (optional)"></textarea>
                                                </div>
                                                <div class="liststyle-btn">
                                                    <a href="#"><svg width="40" height="40" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="40" height="40" rx="6" fill="#F6F7F8"></rect>
                                                            <path
                                                                d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                stroke="#515659" stroke-width="2.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></a>

                                                    <a href="#"><svg width="40" height="40" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="40" height="40" rx="6" fill="#F6F7F8"></rect>
                                                            <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                stroke-width="2.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                fill="#515659"></path>
                                                            <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></a>
                                                </div>
                                                <div class="save-another">
                                                    <a href="#"><i class='bx bx-plus'></i></a>
                                                    <a href="#" class="another-position">Save and add another
                                                        position</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn modal-cancel"
                                            data-dismiss="modal">cancel</button>
                                        <button type="button" class="btn modal-save">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Add Education Box Modal  Closed -->



                        <!-- Add Resume Box -->
                        <h2 class="title_head">Resume</h2>
                        <div class="employe_work_ex">
                            <a href="#"><span><i class='bx bx-plus'></i></span>Add Resume </a>
                            <input type="file" placeholder="Add Resume">
                        </div>




                        <!-- Reference Box -->
                        <h2 class="title_head">References</h2>
                        <div class="requst_refer">
                            <p>Hiring managers prefer candidates with references! Ask a former co-worker,
                                manager, teacher or friend to write a reference for you.</p>
                            <a href="#" data-toggle="modal" data-target="#exampleModal">Request References</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Modal content goes here -->
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="hiring-txt">
                                                    <h4>Hiring managers prefer candidates with references</h4>
                                                    <p>Hiring managers prefer candidates with references! Ask a former
                                                        co-worker, manager, teacher or friend to write a reference for
                                                        you.</p>
                                                    <img src="images/msg-box-img.PNG" alt="">
                                                    <h6>Request reference with:</h6>
                                                    <div class="hiring-btn">
                                                        <a href="#"><i class='bx bxs-envelope'></i> Email</a>
                                                        <a href="#"><i class='bx bx-link'></i> Copy Link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>





                        <!-- Certificates and Licensesences Box -->
                        <h2 class="title_head">Certificates and Licensesences</h2>
                        <div class="requst_refer">
                            <p>You can add licenses, certifications, and credentials manually or save time by importing
                                from Credly or another third party.</p>
                            <a href="#" data-toggle="modal" data-target="#ManualModal">Add Manually</a>
                            <!-- Add manually Modal box Start -->
                            <div class="modal fade" id="ManualModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Certificate or License</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Add a Certificate or License">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Issuing Authority (optional)">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text"
                                                            placeholder="Major or field of study (optional)">
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="issued_date" id="LabeledField_issued_date">
                                                            <option value="">Year Received (optional)</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-textarea">
                                                        <textarea name="" id="" rows="5"
                                                            placeholder="Description (optional)"></textarea>
                                                    </div>
                                                    <div class="liststyle-btns">
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path
                                                                    d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                    stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>

                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                    stroke-width="2.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                    fill="#515659"></path>
                                                                <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                    <div class="save-anothers">
                                                        <a href="#"><i class='bx bx-plus'></i></a>
                                                        <a href="#" class="another-position">Save and add another
                                                            position</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add manually Modal box End -->





                            <a href="#" data-toggle="modal" data-target="#ImportModal">Import</a>
                            <!-- Add Import Modal box Start -->
                            <div class="modal fade" id="ImportModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><img
                                                    src="images/import-img.PNG" alt=""></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="import-txt">
                                                        <h4>Import Credentials</h4>
                                                        <p>Select either Credly or somewhere else to import your
                                                            credentials.</p>
                                                    </div>
                                                    <div class="import-txt-btn">
                                                        <a href="#">Import from Credly</a>
                                                        <span>or</span>
                                                        <a href="#">Import Other credentials</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="add_license">
                                <h2><span><i class='bx bx-badge-check'></i></span> Add Licenses and Certifications</h2>
                                <p>Tell employers what you're qualified for by adding a license or certification to your
                                    profile.</p>
                                <a href="#" data-toggle="modal" data-target="#CredlyModal">I have a Credly or another
                                    Certification</a>
                                <!-- Add Import Modal box Start -->
                                <div class="modal fade" id="CredlyModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><img
                                                        src="images/import-img.PNG" alt=""></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="import-txt">
                                                            <h4>Import Credentials</h4>
                                                            <p>Select either Credly or somewhere else to import your
                                                                credentials.</p>
                                                        </div>
                                                        <div class="import-txt-btn">
                                                            <a href="#">Import from Credly</a>
                                                            <span>or</span>
                                                            <a href="#">Import Other credentials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="employe_work_ex my-5">
                            <a href="#" data-toggle="modal" data-target="#summarymodal"><span><i
                                        class='bx bx-plus'></i></span>Add Executive Summary</a>
                            <!--  Add Education Box Modal start -->
                            <div class="modal fade" id="summarymodal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Executive Summary</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-textarea">
                                                        <textarea name="" id="" rows="5"
                                                            placeholder="Executive Summary"></textarea>
                                                    </div>
                                                    <div class="excutivebtn">
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path
                                                                    d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                    stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                    stroke-width="2.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                    fill="#515659"></path>
                                                                <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>








                            <a href="#" data-toggle="modal" data-target="#ObjectiveModal"><span><i
                                        class='bx bx-plus'></i></span>Add Objective</a>
                            <div class="modal fade" id="ObjectiveModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Objective</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-textarea">
                                                        <textarea name="" id="" rows="5"
                                                            placeholder="Objective"></textarea>
                                                    </div>
                                                    <div class="excutivebtn">
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path
                                                                    d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                    stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                    stroke-width="2.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                    fill="#515659"></path>
                                                                <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <a href="#" data-toggle="modal" data-target="#AchieveModal"><span><i
                                        class='bx bx-plus'></i></span>Add Achievements</a>
                            <div class="modal fade" id="AchieveModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Achievement</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-textarea">
                                                        <textarea name="" id="" rows="5"
                                                            placeholder="Achievement"></textarea>
                                                    </div>
                                                    <div class="excutivebtn">
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path
                                                                    d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                    stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                    stroke-width="2.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                    fill="#515659"></path>
                                                                <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>









                            <a href="#" data-toggle="modal" data-target="#AssociateModal"><span><i
                                        class='bx bx-plus'></i></span>Add Associations</a>
                            <div class="modal fade" id="AssociateModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Association</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-textarea">
                                                        <textarea name="" id="" rows="5"
                                                            placeholder="Association"></textarea>
                                                    </div>
                                                    <div class="excutivebtn">
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path
                                                                    d="M16 14h13M16 20h13M16 26h13M11 14h.01M11 20h.01M11 26h.01"
                                                                    stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                        <a href="#"><svg width="40" height="40" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="6" fill="#F6F7F8">
                                                                </rect>
                                                                <path d="M16 14h13M16 20h13" stroke="#515659"
                                                                    stroke-width="2.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M10.095 18.979h1.294v-6.185H10.1l-1.598 1.11v1.166l1.517-1.055h.077v4.964zM8.5 23.287h1.112c0-.56.366-.953.95-.953.559 0 .884.373.884.842 0 .397-.155.659-.869 1.354l-2.009 1.94v.807h4.133v-.965h-2.517v-.071l1.19-1.136c.954-.905 1.247-1.365 1.247-2.036 0-.965-.778-1.668-1.992-1.668-1.255 0-2.128.77-2.128 1.886z"
                                                                    fill="#515659"></path>
                                                                <path d="M16 26h13" stroke="#515659" stroke-width="2.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <a href="#" data-toggle="modal" data-target="#SkillModal"><span><i
                                        class='bx bx-plus'></i></span>Add Skills</a>
                            <div class="modal fade" id="SkillModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Skills</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="skill-input">
                                                        <input type="text" placeholder="Enter Skills">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="d-flex">
                            <h2 class="title_head">More Information</h2>
                            <a href="#">Edit</a>
                        </div>
                        <div class="employe_work_ex more_info ">
                            <a href="#" data-toggle="modal" data-target="#LicenseModal">Minimum Desired Pay</a>
                            <!-- Add manually Modal box Start -->
                            <div class="modal fade" id="LicenseModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Add a Certificate or License">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Issuing Authority (optional)">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text"
                                                            placeholder="Major or field of study (optional)">
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="desired_salary" id="LabeledField_desired_salary">
                                                            <option value="">Minimum Desired Pay</option>
                                                            <option value="25000">$25,000 / year</option>
                                                            <option value="30000">$30,000 / year</option>
                                                            <option value="35000">$35,000 / year</option>
                                                            <option value="40000">$40,000 / year</option>
                                                            <option value="45000">$45,000 / year</option>
                                                            <option value="50000">$50,000 / year</option>
                                                            <option value="55000">$55,000 / year</option>
                                                            <option value="60000">$60,000 / year</option>
                                                            <option value="65000">$65,000 / year</option>
                                                            <option value="70000">$70,000 / year</option>
                                                            <option value="75000">$75,000 / year</option>
                                                            <option value="80000">$80,000 / year</option>
                                                            <option value="85000">$85,000 / year</option>
                                                            <option value="90000">$90,000 / year</option>
                                                            <option value="100000">$100,000 / year</option>
                                                            <option value="125000">$125,000 / year</option>
                                                            <option value="150000">$150,000 / year</option>
                                                            <option value="175000">$175,000 / year</option>
                                                            <option value="200000+">$200,000+ / year</option>
                                                        </select>
                                                    </div>
                                                    <div class="license-txt">
                                                        <p>We'll use this information to match you with the most
                                                            relevant jobs. <strong>This will not be shared with
                                                                employers.</strong></p>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="experience" id="LabeledField_experience">
                                                            <option value="">Years of Experience</option>
                                                            <option value="intern">Intern</option>
                                                            <option value="entry">Entry Level (0-2 years)</option>
                                                            <option value="mid">Mid Level (3-6 years)</option>
                                                            <option value="senior">Senior Level (7+ years)</option>
                                                            <option value="director">Director</option>
                                                            <option value="executive">Executive</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="education" id="LabeledField_education">
                                                            <option value="">Highest Degree Earned</option>
                                                            <option value="ged">High School Diploma/GED</option>
                                                            <option value="assoc">Associates Degree</option>
                                                            <option value="undergrad">Bachelors Degree</option>
                                                            <option value="grad">Masters or Ph.D</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="industry" id="LabeledField_industry">
                                                            <option value="">Industry</option>
                                                            <option value="Accounting/Finance">Accounting/Finance
                                                            </option>
                                                            <option value="Admin/Secretarial">Admin/Secretarial</option>
                                                            <option value="Advertising">Advertising</option>
                                                            <option value="Architect/Design">Architect/Design</option>
                                                            <option value="Art/Media/Writers">Art/Media/Writers</option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotech/Pharmaceutical">
                                                                Biotech/Pharmaceutical</option>
                                                            <option value="Computer/Software">Computer/Software</option>
                                                            <option value="Construction/Skilled Trade">
                                                                Construction/Skilled Trade</option>
                                                            <option value="Customer Service">Customer Service</option>
                                                            <option value="Domestic Help/Care">Domestic Help/Care
                                                            </option>
                                                            <option value="Education">Education</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Environmental Science">Environmental Science
                                                            </option>
                                                            <option value="Events">Events</option>
                                                            <option value="Everything Else">Everything Else</option>
                                                            <option value="Facilities/Maintenance">
                                                                Facilities/Maintenance</option>
                                                            <option value="General Labor/Warehouse">General
                                                                Labor/Warehouse</option>
                                                            <option value="Gov/Military">Gov/Military</option>
                                                            <option value="HR &amp; Recruiting">HR &amp; Recruiting
                                                            </option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Hospitality/Restaurant">
                                                                Hospitality/Restaurant</option>
                                                            <option value="Information Technology">Information
                                                                Technology</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Internet">Internet</option>
                                                            <option value="Law Enforcement/Security">Law
                                                                Enforcement/Security</option>
                                                            <option value="Legal">Legal</option>
                                                            <option value="Management &amp; Exec">Management &amp; Exec
                                                            </option>
                                                            <option value="Manufacturing/Operations">
                                                                Manufacturing/Operations</option>
                                                            <option value="Marketing/PR">Marketing/PR</option>
                                                            <option value="Nonprofit &amp; Fund">Nonprofit &amp; Fund
                                                            </option>
                                                            <option value="Oil/Energy/Power">Oil/Energy/Power</option>
                                                            <option value="Quality Assurance">Quality Assurance</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research &amp; Dev">Research &amp; Dev
                                                            </option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Sales &amp; Biz Dev">Sales &amp; Biz Dev
                                                            </option>
                                                            <option value="Salon/Beauty/Fitness">Salon/Beauty/Fitness
                                                            </option>
                                                            <option value="Social Services">Social Services</option>
                                                            <option value="Supply Chain/Logistics">Supply
                                                                Chain/Logistics</option>
                                                            <option value="Telecommunications">Telecommunications
                                                            </option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Trucking/Transport">Trucking/Transport
                                                            </option>
                                                            <option value="TV/Film/Musicians">TV/Film/Musicians</option>
                                                            <option value="Vet &amp; Animal Care">Vet &amp; Animal Care
                                                            </option>
                                                            <option value="Work from Home">Work from Home</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="is_veteran" id="LabeledField_is_veteran">
                                                            <option value="">Veteran Status</option>
                                                            <option value="true">I am a Veteran</option>
                                                            <option value="false">I do not wish to specify at this time
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <a href="#" data-toggle="modal" data-target="#ExpertModal">Add Years of Experience</a>
                            <!-- Add manually Modal box Start -->
                            <div class="modal fade" id="ExpertModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Add a Certificate or License">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Issuing Authority (optional)">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text"
                                                            placeholder="Major or field of study (optional)">
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="desired_salary" id="LabeledField_desired_salary">
                                                            <option value="">Minimum Desired Pay</option>
                                                            <option value="25000">$25,000 / year</option>
                                                            <option value="30000">$30,000 / year</option>
                                                            <option value="35000">$35,000 / year</option>
                                                            <option value="40000">$40,000 / year</option>
                                                            <option value="45000">$45,000 / year</option>
                                                            <option value="50000">$50,000 / year</option>
                                                            <option value="55000">$55,000 / year</option>
                                                            <option value="60000">$60,000 / year</option>
                                                            <option value="65000">$65,000 / year</option>
                                                            <option value="70000">$70,000 / year</option>
                                                            <option value="75000">$75,000 / year</option>
                                                            <option value="80000">$80,000 / year</option>
                                                            <option value="85000">$85,000 / year</option>
                                                            <option value="90000">$90,000 / year</option>
                                                            <option value="100000">$100,000 / year</option>
                                                            <option value="125000">$125,000 / year</option>
                                                            <option value="150000">$150,000 / year</option>
                                                            <option value="175000">$175,000 / year</option>
                                                            <option value="200000+">$200,000+ / year</option>
                                                        </select>
                                                    </div>
                                                    <div class="license-txt">
                                                        <p>We'll use this information to match you with the most
                                                            relevant jobs. <strong>This will not be shared with
                                                                employers.</strong></p>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="experience" id="LabeledField_experience">
                                                            <option value="">Years of Experience</option>
                                                            <option value="intern">Intern</option>
                                                            <option value="entry">Entry Level (0-2 years)</option>
                                                            <option value="mid">Mid Level (3-6 years)</option>
                                                            <option value="senior">Senior Level (7+ years)</option>
                                                            <option value="director">Director</option>
                                                            <option value="executive">Executive</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="education" id="LabeledField_education">
                                                            <option value="">Highest Degree Earned</option>
                                                            <option value="ged">High School Diploma/GED</option>
                                                            <option value="assoc">Associates Degree</option>
                                                            <option value="undergrad">Bachelors Degree</option>
                                                            <option value="grad">Masters or Ph.D</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="industry" id="LabeledField_industry">
                                                            <option value="">Industry</option>
                                                            <option value="Accounting/Finance">Accounting/Finance
                                                            </option>
                                                            <option value="Admin/Secretarial">Admin/Secretarial</option>
                                                            <option value="Advertising">Advertising</option>
                                                            <option value="Architect/Design">Architect/Design</option>
                                                            <option value="Art/Media/Writers">Art/Media/Writers</option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotech/Pharmaceutical">
                                                                Biotech/Pharmaceutical</option>
                                                            <option value="Computer/Software">Computer/Software</option>
                                                            <option value="Construction/Skilled Trade">
                                                                Construction/Skilled Trade</option>
                                                            <option value="Customer Service">Customer Service</option>
                                                            <option value="Domestic Help/Care">Domestic Help/Care
                                                            </option>
                                                            <option value="Education">Education</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Environmental Science">Environmental Science
                                                            </option>
                                                            <option value="Events">Events</option>
                                                            <option value="Everything Else">Everything Else</option>
                                                            <option value="Facilities/Maintenance">
                                                                Facilities/Maintenance</option>
                                                            <option value="General Labor/Warehouse">General
                                                                Labor/Warehouse</option>
                                                            <option value="Gov/Military">Gov/Military</option>
                                                            <option value="HR &amp; Recruiting">HR &amp; Recruiting
                                                            </option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Hospitality/Restaurant">
                                                                Hospitality/Restaurant</option>
                                                            <option value="Information Technology">Information
                                                                Technology</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Internet">Internet</option>
                                                            <option value="Law Enforcement/Security">Law
                                                                Enforcement/Security</option>
                                                            <option value="Legal">Legal</option>
                                                            <option value="Management &amp; Exec">Management &amp; Exec
                                                            </option>
                                                            <option value="Manufacturing/Operations">
                                                                Manufacturing/Operations</option>
                                                            <option value="Marketing/PR">Marketing/PR</option>
                                                            <option value="Nonprofit &amp; Fund">Nonprofit &amp; Fund
                                                            </option>
                                                            <option value="Oil/Energy/Power">Oil/Energy/Power</option>
                                                            <option value="Quality Assurance">Quality Assurance</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research &amp; Dev">Research &amp; Dev
                                                            </option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Sales &amp; Biz Dev">Sales &amp; Biz Dev
                                                            </option>
                                                            <option value="Salon/Beauty/Fitness">Salon/Beauty/Fitness
                                                            </option>
                                                            <option value="Social Services">Social Services</option>
                                                            <option value="Supply Chain/Logistics">Supply
                                                                Chain/Logistics</option>
                                                            <option value="Telecommunications">Telecommunications
                                                            </option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Trucking/Transport">Trucking/Transport
                                                            </option>
                                                            <option value="TV/Film/Musicians">TV/Film/Musicians</option>
                                                            <option value="Vet &amp; Animal Care">Vet &amp; Animal Care
                                                            </option>
                                                            <option value="Work from Home">Work from Home</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="is_veteran" id="LabeledField_is_veteran">
                                                            <option value="">Veteran Status</option>
                                                            <option value="true">I am a Veteran</option>
                                                            <option value="false">I do not wish to specify at this time
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <a href="#" data-toggle="modal" data-target="#HighestEarned">Add Highest Degree Earned</a>
                            <!-- Add manually Modal box Start -->
                            <div class="modal fade" id="HighestEarned" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Add a Certificate or License">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Issuing Authority (optional)">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text"
                                                            placeholder="Major or field of study (optional)">
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="desired_salary" id="LabeledField_desired_salary">
                                                            <option value="">Minimum Desired Pay</option>
                                                            <option value="25000">$25,000 / year</option>
                                                            <option value="30000">$30,000 / year</option>
                                                            <option value="35000">$35,000 / year</option>
                                                            <option value="40000">$40,000 / year</option>
                                                            <option value="45000">$45,000 / year</option>
                                                            <option value="50000">$50,000 / year</option>
                                                            <option value="55000">$55,000 / year</option>
                                                            <option value="60000">$60,000 / year</option>
                                                            <option value="65000">$65,000 / year</option>
                                                            <option value="70000">$70,000 / year</option>
                                                            <option value="75000">$75,000 / year</option>
                                                            <option value="80000">$80,000 / year</option>
                                                            <option value="85000">$85,000 / year</option>
                                                            <option value="90000">$90,000 / year</option>
                                                            <option value="100000">$100,000 / year</option>
                                                            <option value="125000">$125,000 / year</option>
                                                            <option value="150000">$150,000 / year</option>
                                                            <option value="175000">$175,000 / year</option>
                                                            <option value="200000+">$200,000+ / year</option>
                                                        </select>
                                                    </div>
                                                    <div class="license-txt">
                                                        <p>We'll use this information to match you with the most
                                                            relevant jobs. <strong>This will not be shared with
                                                                employers.</strong></p>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="experience" id="LabeledField_experience">
                                                            <option value="">Years of Experience</option>
                                                            <option value="intern">Intern</option>
                                                            <option value="entry">Entry Level (0-2 years)</option>
                                                            <option value="mid">Mid Level (3-6 years)</option>
                                                            <option value="senior">Senior Level (7+ years)</option>
                                                            <option value="director">Director</option>
                                                            <option value="executive">Executive</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="education" id="LabeledField_education">
                                                            <option value="">Highest Degree Earned</option>
                                                            <option value="ged">High School Diploma/GED</option>
                                                            <option value="assoc">Associates Degree</option>
                                                            <option value="undergrad">Bachelors Degree</option>
                                                            <option value="grad">Masters or Ph.D</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="industry" id="LabeledField_industry">
                                                            <option value="">Industry</option>
                                                            <option value="Accounting/Finance">Accounting/Finance
                                                            </option>
                                                            <option value="Admin/Secretarial">Admin/Secretarial</option>
                                                            <option value="Advertising">Advertising</option>
                                                            <option value="Architect/Design">Architect/Design</option>
                                                            <option value="Art/Media/Writers">Art/Media/Writers</option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotech/Pharmaceutical">
                                                                Biotech/Pharmaceutical</option>
                                                            <option value="Computer/Software">Computer/Software</option>
                                                            <option value="Construction/Skilled Trade">
                                                                Construction/Skilled Trade</option>
                                                            <option value="Customer Service">Customer Service</option>
                                                            <option value="Domestic Help/Care">Domestic Help/Care
                                                            </option>
                                                            <option value="Education">Education</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Environmental Science">Environmental Science
                                                            </option>
                                                            <option value="Events">Events</option>
                                                            <option value="Everything Else">Everything Else</option>
                                                            <option value="Facilities/Maintenance">
                                                                Facilities/Maintenance</option>
                                                            <option value="General Labor/Warehouse">General
                                                                Labor/Warehouse</option>
                                                            <option value="Gov/Military">Gov/Military</option>
                                                            <option value="HR &amp; Recruiting">HR &amp; Recruiting
                                                            </option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Hospitality/Restaurant">
                                                                Hospitality/Restaurant</option>
                                                            <option value="Information Technology">Information
                                                                Technology</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Internet">Internet</option>
                                                            <option value="Law Enforcement/Security">Law
                                                                Enforcement/Security</option>
                                                            <option value="Legal">Legal</option>
                                                            <option value="Management &amp; Exec">Management &amp; Exec
                                                            </option>
                                                            <option value="Manufacturing/Operations">
                                                                Manufacturing/Operations</option>
                                                            <option value="Marketing/PR">Marketing/PR</option>
                                                            <option value="Nonprofit &amp; Fund">Nonprofit &amp; Fund
                                                            </option>
                                                            <option value="Oil/Energy/Power">Oil/Energy/Power</option>
                                                            <option value="Quality Assurance">Quality Assurance</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research &amp; Dev">Research &amp; Dev
                                                            </option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Sales &amp; Biz Dev">Sales &amp; Biz Dev
                                                            </option>
                                                            <option value="Salon/Beauty/Fitness">Salon/Beauty/Fitness
                                                            </option>
                                                            <option value="Social Services">Social Services</option>
                                                            <option value="Supply Chain/Logistics">Supply
                                                                Chain/Logistics</option>
                                                            <option value="Telecommunications">Telecommunications
                                                            </option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Trucking/Transport">Trucking/Transport
                                                            </option>
                                                            <option value="TV/Film/Musicians">TV/Film/Musicians</option>
                                                            <option value="Vet &amp; Animal Care">Vet &amp; Animal Care
                                                            </option>
                                                            <option value="Work from Home">Work from Home</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="is_veteran" id="LabeledField_is_veteran">
                                                            <option value="">Veteran Status</option>
                                                            <option value="true">I am a Veteran</option>
                                                            <option value="false">I do not wish to specify at this time
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <a href="#" data-toggle="modal" data-target="#IndustryModal">Add Industry</a>
                            <!-- Add manually Modal box Start -->
                            <div class="modal fade" id="IndustryModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Add a Certificate or License">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Issuing Authority (optional)">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text"
                                                            placeholder="Major or field of study (optional)">
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="desired_salary" id="LabeledField_desired_salary">
                                                            <option value="">Minimum Desired Pay</option>
                                                            <option value="25000">$25,000 / year</option>
                                                            <option value="30000">$30,000 / year</option>
                                                            <option value="35000">$35,000 / year</option>
                                                            <option value="40000">$40,000 / year</option>
                                                            <option value="45000">$45,000 / year</option>
                                                            <option value="50000">$50,000 / year</option>
                                                            <option value="55000">$55,000 / year</option>
                                                            <option value="60000">$60,000 / year</option>
                                                            <option value="65000">$65,000 / year</option>
                                                            <option value="70000">$70,000 / year</option>
                                                            <option value="75000">$75,000 / year</option>
                                                            <option value="80000">$80,000 / year</option>
                                                            <option value="85000">$85,000 / year</option>
                                                            <option value="90000">$90,000 / year</option>
                                                            <option value="100000">$100,000 / year</option>
                                                            <option value="125000">$125,000 / year</option>
                                                            <option value="150000">$150,000 / year</option>
                                                            <option value="175000">$175,000 / year</option>
                                                            <option value="200000+">$200,000+ / year</option>
                                                        </select>
                                                    </div>
                                                    <div class="license-txt">
                                                        <p>We'll use this information to match you with the most
                                                            relevant jobs. <strong>This will not be shared with
                                                                employers.</strong></p>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="experience" id="LabeledField_experience">
                                                            <option value="">Years of Experience</option>
                                                            <option value="intern">Intern</option>
                                                            <option value="entry">Entry Level (0-2 years)</option>
                                                            <option value="mid">Mid Level (3-6 years)</option>
                                                            <option value="senior">Senior Level (7+ years)</option>
                                                            <option value="director">Director</option>
                                                            <option value="executive">Executive</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="education" id="LabeledField_education">
                                                            <option value="">Highest Degree Earned</option>
                                                            <option value="ged">High School Diploma/GED</option>
                                                            <option value="assoc">Associates Degree</option>
                                                            <option value="undergrad">Bachelors Degree</option>
                                                            <option value="grad">Masters or Ph.D</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="industry" id="LabeledField_industry">
                                                            <option value="">Industry</option>
                                                            <option value="Accounting/Finance">Accounting/Finance
                                                            </option>
                                                            <option value="Admin/Secretarial">Admin/Secretarial</option>
                                                            <option value="Advertising">Advertising</option>
                                                            <option value="Architect/Design">Architect/Design</option>
                                                            <option value="Art/Media/Writers">Art/Media/Writers</option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotech/Pharmaceutical">
                                                                Biotech/Pharmaceutical</option>
                                                            <option value="Computer/Software">Computer/Software</option>
                                                            <option value="Construction/Skilled Trade">
                                                                Construction/Skilled Trade</option>
                                                            <option value="Customer Service">Customer Service</option>
                                                            <option value="Domestic Help/Care">Domestic Help/Care
                                                            </option>
                                                            <option value="Education">Education</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Environmental Science">Environmental Science
                                                            </option>
                                                            <option value="Events">Events</option>
                                                            <option value="Everything Else">Everything Else</option>
                                                            <option value="Facilities/Maintenance">
                                                                Facilities/Maintenance</option>
                                                            <option value="General Labor/Warehouse">General
                                                                Labor/Warehouse</option>
                                                            <option value="Gov/Military">Gov/Military</option>
                                                            <option value="HR &amp; Recruiting">HR &amp; Recruiting
                                                            </option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Hospitality/Restaurant">
                                                                Hospitality/Restaurant</option>
                                                            <option value="Information Technology">Information
                                                                Technology</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Internet">Internet</option>
                                                            <option value="Law Enforcement/Security">Law
                                                                Enforcement/Security</option>
                                                            <option value="Legal">Legal</option>
                                                            <option value="Management &amp; Exec">Management &amp; Exec
                                                            </option>
                                                            <option value="Manufacturing/Operations">
                                                                Manufacturing/Operations</option>
                                                            <option value="Marketing/PR">Marketing/PR</option>
                                                            <option value="Nonprofit &amp; Fund">Nonprofit &amp; Fund
                                                            </option>
                                                            <option value="Oil/Energy/Power">Oil/Energy/Power</option>
                                                            <option value="Quality Assurance">Quality Assurance</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research &amp; Dev">Research &amp; Dev
                                                            </option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Sales &amp; Biz Dev">Sales &amp; Biz Dev
                                                            </option>
                                                            <option value="Salon/Beauty/Fitness">Salon/Beauty/Fitness
                                                            </option>
                                                            <option value="Social Services">Social Services</option>
                                                            <option value="Supply Chain/Logistics">Supply
                                                                Chain/Logistics</option>
                                                            <option value="Telecommunications">Telecommunications
                                                            </option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Trucking/Transport">Trucking/Transport
                                                            </option>
                                                            <option value="TV/Film/Musicians">TV/Film/Musicians</option>
                                                            <option value="Vet &amp; Animal Care">Vet &amp; Animal Care
                                                            </option>
                                                            <option value="Work from Home">Work from Home</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="is_veteran" id="LabeledField_is_veteran">
                                                            <option value="">Veteran Status</option>
                                                            <option value="true">I am a Veteran</option>
                                                            <option value="false">I do not wish to specify at this time
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a href="#" data-toggle="modal" data-target="#StatusModal">Add Veteran Status</a>
                            <!-- Add manually Modal box Start -->
                            <div class="modal fade" id="StatusModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Add a Certificate or License">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text" placeholder="Issuing Authority (optional)">
                                                    </div>
                                                    <div class="work-title">
                                                        <input type="text"
                                                            placeholder="Major or field of study (optional)">
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="desired_salary" id="LabeledField_desired_salary">
                                                            <option value="">Minimum Desired Pay</option>
                                                            <option value="25000">$25,000 / year</option>
                                                            <option value="30000">$30,000 / year</option>
                                                            <option value="35000">$35,000 / year</option>
                                                            <option value="40000">$40,000 / year</option>
                                                            <option value="45000">$45,000 / year</option>
                                                            <option value="50000">$50,000 / year</option>
                                                            <option value="55000">$55,000 / year</option>
                                                            <option value="60000">$60,000 / year</option>
                                                            <option value="65000">$65,000 / year</option>
                                                            <option value="70000">$70,000 / year</option>
                                                            <option value="75000">$75,000 / year</option>
                                                            <option value="80000">$80,000 / year</option>
                                                            <option value="85000">$85,000 / year</option>
                                                            <option value="90000">$90,000 / year</option>
                                                            <option value="100000">$100,000 / year</option>
                                                            <option value="125000">$125,000 / year</option>
                                                            <option value="150000">$150,000 / year</option>
                                                            <option value="175000">$175,000 / year</option>
                                                            <option value="200000+">$200,000+ / year</option>
                                                        </select>
                                                    </div>
                                                    <div class="license-txt">
                                                        <p>We'll use this information to match you with the most
                                                            relevant jobs. <strong>This will not be shared with
                                                                employers.</strong></p>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="experience" id="LabeledField_experience">
                                                            <option value="">Years of Experience</option>
                                                            <option value="intern">Intern</option>
                                                            <option value="entry">Entry Level (0-2 years)</option>
                                                            <option value="mid">Mid Level (3-6 years)</option>
                                                            <option value="senior">Senior Level (7+ years)</option>
                                                            <option value="director">Director</option>
                                                            <option value="executive">Executive</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="education" id="LabeledField_education">
                                                            <option value="">Highest Degree Earned</option>
                                                            <option value="ged">High School Diploma/GED</option>
                                                            <option value="assoc">Associates Degree</option>
                                                            <option value="undergrad">Bachelors Degree</option>
                                                            <option value="grad">Masters or Ph.D</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="industry" id="LabeledField_industry">
                                                            <option value="">Industry</option>
                                                            <option value="Accounting/Finance">Accounting/Finance
                                                            </option>
                                                            <option value="Admin/Secretarial">Admin/Secretarial</option>
                                                            <option value="Advertising">Advertising</option>
                                                            <option value="Architect/Design">Architect/Design</option>
                                                            <option value="Art/Media/Writers">Art/Media/Writers</option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotech/Pharmaceutical">
                                                                Biotech/Pharmaceutical</option>
                                                            <option value="Computer/Software">Computer/Software</option>
                                                            <option value="Construction/Skilled Trade">
                                                                Construction/Skilled Trade</option>
                                                            <option value="Customer Service">Customer Service</option>
                                                            <option value="Domestic Help/Care">Domestic Help/Care
                                                            </option>
                                                            <option value="Education">Education</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Environmental Science">Environmental Science
                                                            </option>
                                                            <option value="Events">Events</option>
                                                            <option value="Everything Else">Everything Else</option>
                                                            <option value="Facilities/Maintenance">
                                                                Facilities/Maintenance</option>
                                                            <option value="General Labor/Warehouse">General
                                                                Labor/Warehouse</option>
                                                            <option value="Gov/Military">Gov/Military</option>
                                                            <option value="HR &amp; Recruiting">HR &amp; Recruiting
                                                            </option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Hospitality/Restaurant">
                                                                Hospitality/Restaurant</option>
                                                            <option value="Information Technology">Information
                                                                Technology</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Internet">Internet</option>
                                                            <option value="Law Enforcement/Security">Law
                                                                Enforcement/Security</option>
                                                            <option value="Legal">Legal</option>
                                                            <option value="Management &amp; Exec">Management &amp; Exec
                                                            </option>
                                                            <option value="Manufacturing/Operations">
                                                                Manufacturing/Operations</option>
                                                            <option value="Marketing/PR">Marketing/PR</option>
                                                            <option value="Nonprofit &amp; Fund">Nonprofit &amp; Fund
                                                            </option>
                                                            <option value="Oil/Energy/Power">Oil/Energy/Power</option>
                                                            <option value="Quality Assurance">Quality Assurance</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research &amp; Dev">Research &amp; Dev
                                                            </option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Sales &amp; Biz Dev">Sales &amp; Biz Dev
                                                            </option>
                                                            <option value="Salon/Beauty/Fitness">Salon/Beauty/Fitness
                                                            </option>
                                                            <option value="Social Services">Social Services</option>
                                                            <option value="Supply Chain/Logistics">Supply
                                                                Chain/Logistics</option>
                                                            <option value="Telecommunications">Telecommunications
                                                            </option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Trucking/Transport">Trucking/Transport
                                                            </option>
                                                            <option value="TV/Film/Musicians">TV/Film/Musicians</option>
                                                            <option value="Vet &amp; Animal Care">Vet &amp; Animal Care
                                                            </option>
                                                            <option value="Work from Home">Work from Home</option>
                                                        </select>
                                                    </div>
                                                    <div class="work-checkbox">
                                                        <select name="is_veteran" id="LabeledField_is_veteran">
                                                            <option value="">Veteran Status</option>
                                                            <option value="true">I am a Veteran</option>
                                                            <option value="false">I do not wish to specify at this time
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn modal-cancel"
                                                data-dismiss="modal">cancel</button>
                                            <button type="button" class="btn modal-save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="persnol_requireter_main">
                        <div class="personal-detail-required">
                            <div class="required-img">
                                <img src="images/phil_avatar.webp" alt="">
                            </div>
                            <div class="required-txt">
                                <h5>Phil</h5>
                                <h6>Your AI Personal Recruiter</h6>
                            </div>
                        </div>
                        <p>Your profile is almost complete. Finish your profile to unlock better job matches and stand
                            out.</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:30%">
                            </div>
                        </div>
                        <div class="not-required">
                            <ul>
                                <li>Register with ZipRecruiter</li>
                            </ul>
                        </div>
                        <div class="add-resume-detail">
                            <div class="input-resume-radio">
                                <input type="radio" name="" id="">
                            </div>
                           <a href="#"  data-toggle="modal" data-target="#ResumeModal"> <div class="add-resume-txt">
                                <a href="#" class="txt-lg">Add Resume</a>
                                <a href="#" class="txt-sm">Show employers you're qualified</a>
                            </div>
                               <!--  Add Resume Box Modal  Start -->
                               <div class="modal fade" id="ResumeModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Websites</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <!-- <span aria-hidden="true">×</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add website URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Twitter profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add LinkedIn profile URL</label>
                                                        </div>
                                                        <div class="form-item-headline-modal">
                                                            <input type="text" id="email" autocomplete="off" required=""
                                                                value="">
                                                            <label for="username">Add Facebook profile URL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-headline">
                                                <button type="button" class="btn modal-cancel"
                                                    data-dismiss="modal">cancel</button>
                                                <button type="button" class="btn modal-save"
                                                    onclick="getInputValue()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Websites URL  Box Modal  Closed -->
                        </a>
                            <div class="resume-plus">
                                <a href="#"><i class='bx bx-plus'></i></a>
                            </div>
                        </div>
                        <div class="add-resume-detail">
                            <div class="input-resume-radio">
                                <input type="radio" name="" id="">
                            </div>
                            <div class="add-resume-txt">
                                <a href="#" class="txt-lg">Add Phone Number</a>
                                <a href="#" class="txt-sm">Hiring managers need to reach you!</a>
                            </div>
                            <div class="resume-plus">
                                <a href="#"><i class='bx bx-plus'></i></a>
                            </div>
                        </div>
                        <div class="add-resume-detail">
                            <div class="input-resume-radio">
                                <input type="radio" name="" id="">
                            </div>
                            <div class="add-resume-txt">
                                <a href="#" class="txt-lg">Add Skills</a>
                                <a href="#" class="txt-sm">Tell employers why you stand out</a>
                            </div>
                            <div class="resume-plus">
                                <a href="#"><i class='bx bx-plus'></i></a>
                            </div>
                        </div>
                        <div class="add-resume-detail">
                            <div class="input-resume-radio">
                                <input type="radio" name="" id="">
                            </div>
                            <div class="add-resume-txt">
                                <a href="#" class="txt-lg">Receive a Reference</a>
                                <a href="#" class="txt-sm">Allow others to speak for your work</a>
                            </div>
                            <div class="resume-plus">
                                <a href="#"><i class='bx bx-plus'></i></a>
                            </div>
                        </div>
                        <div class="hired-btn">
                            <a href="#">i got hired <img
                                    src="https://www.ziprecruiter.com/img/candidate/party_popper.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile Section End -->











    <!-- Button to trigger modal -->
    <button  style="opacity:0;" type="button" class="btn btn-primary">
        Open Modal 1
    </button>

    <button style="opacity:0;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Open Modal 2
    </button>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
function getInputValue() {
    // Selecting the input element and get its value 
    var title = document.getElementById("title").value;
    document.getElementById("pTitle").innerText = title;

    // Displaying the value
    alert(inputVal);
}
    </script>





    <!-- Footer -->
    <?php include 'include/footer.php'; ?>