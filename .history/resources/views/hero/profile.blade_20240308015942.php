{{-- <?php
$first_name='';
$last_name='';
$user_name='';
$city='';
$age='';
$data_of_birth='';
$country='';
$contact_number='';
$email='';
$url='';
?> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>

      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/libs.min.css">
      <link rel="stylesheet" href="../assets/css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="../assets/vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">


              <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                      <a href="../dashboard/index.php">
                          <img src="../assets/images/logo.png" class="img-fluid" alt="">
                          <span>SocialV</span>
                      </a>

                  </div>
                  <div class="iq-search-bar device-search">
                      <form action="#" class="searchbox">
                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                          <input type="text" class="text search-input" placeholder="Search here...">
                      </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  ms-auto navbar-list">
                          <li>
                              <a href="../dashboard/index.php" class="  d-flex align-items-center">
                                  <i class="ri-home-line"></i>
                              </a>
                          </li>
                          <li class="nav-item dropdown">
                               <a href="#" class="dropdown-toggle" id="group-drop" data-bs-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false"><i class="ri-group-line"></i></a>
                              <div class="sub-drop sub-drop-large dropdown-menu" aria-labelledby="group-drop">
                                  <div class="card shadow-none m-0">
                                       <div class="card-header d-flex justify-content-between bg-primary">
                                      <div class="header-title">
                                      <h5 class="mb-0 text-white">Friend Request</h5>
                                      </div>
                                      <small class="badge  bg-light text-dark ">4</small>
                                  </div>
                                      <div class="card-body p-0">
                                          <div class="iq-friend-request">
                                              <div
                                                  class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                                              alt="">
                                                      <div class="ms-3">
                                                          <h6 class="mb-0 ">Jaques Amole</h6>
                                                          <p class="mb-0">40 friends</p>
                                                      </div>
                                                  </div>
                                                  <div class="d-flex align-items-center">
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-primary rounded">Confirm</a>
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="iq-friend-request">
                                              <div
                                                  class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                          <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                                              alt="">
                                                      <div class="ms-3">
                                                          <h6 class="mb-0 ">Lucy Tania</h6>
                                                          <p class="mb-0">12 friends</p>
                                                      </div>
                                                  </div>
                                                  <div class="d-flex align-items-center">
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-primary rounded">Confirm</a>
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="iq-friend-request">
                                              <div
                                                  class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                          <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                                              alt="">
                                                      <div class=" ms-3">
                                                          <h6 class="mb-0 ">Manny Petty</h6>
                                                          <p class="mb-0">3 friends</p>
                                                      </div>
                                                  </div>
                                                  <div class="d-flex align-items-center">
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-primary rounded">Confirm</a>
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="iq-friend-request">
                                              <div
                                                  class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                          <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                                              alt="">
                                                      <div class="ms-3">
                                                          <h6 class="mb-0 ">Marsha Mello</h6>
                                                          <p class="mb-0">15 friends</p>
                                                      </div>
                                                  </div>
                                                  <div class="d-flex align-items-center">
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-primary rounded">Confirm</a>
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="text-center">
                                              <a href="#" class=" btn text-primary">View More Request</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                                    <a href="#" class="search-toggle   dropdown-toggle" id="notification-drop" data-bs-toggle="dropdown">
                                        <i class="ri-notification-4-line"></i>
                                    </a>
                                    <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                                        <div class="card shadow-none m-0">
                                            <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title bg-primary">
                                                        <h5 class="mb-0 text-white">All Notifications</h5>
                                                        </div>
                                                    <small class="badge  bg-light text-dark">4</small>
                                            </div>
                                            <div class="card-body p-0">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                         <div class="">
                                                        <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                                            </div>
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                              <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">95 MB</p>
                                                            <small class="float-right font-size-12">Just Now</small>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">New customer is join</h6>
                                                             <div class="d-flex justify-content-between align-items-center">
                                                                    <p class="mb-0">Cyst Bni</p>
                                                                   <small class="float-right font-size-12">5 days ago</small>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                         <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                                                </div>
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Two customer is left</h6>
                                                             <div class="d-flex justify-content-between align-items-center">
                                                                  <p class="mb-0">Cyst Bni</p>
                                                                <small class="float-right font-size-12">2 days ago</small>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                         <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                                        </div>
                                                        <div class="w-100 ms-3">
                                                            <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                 <p class="mb-0">Cyst Bni</p>
                                                                <small class="float-right font-size-12">3 days ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                          </li>
                          <li class="nav-item dropdown">
                                    <a href="#" class="dropdown-toggle" id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-mail-line"></i>
                                    </a>
                                    <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                                        <div class="card shadow-none m-0">
                                              <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title bg-primary">
                                                         <h5 class="mb-0 text-white">All Message</h5>
                                                        </div>
                                                    <small class="badge bg-light text-dark">4</small>
                                                    </div>
                                            <div class="card-body p-0 ">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex  align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                                        </div>
                                                        <div class=" w-100 ms-3">
                                                            <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                            <small class="float-left font-size-12">13 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                            <small class="float-left font-size-12">20 Apr</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Why do we use it?</h6>
                                                            <small class="float-left font-size-12">30 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Variations Passages</h6>
                                                            <small class="float-left font-size-12">12 Sep</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/05.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                            <small class="float-left font-size-12">5 Dec</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                           <li class="nav-item dropdown">
                              <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle me-3" alt="user">
                                  <div class="caption">
                                      <h6 class="mb-0 line-height">Bni Cyst</h6>
                                  </div>
                              </a>
                              <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                                  <div class="card shadow-none m-0">
                                       <div class="card-header  bg-primary">
                                          <div class="header-title">
                                              <h5 class="mb-0 text-white">Hello Bni Cyst</h5>
                                              <span class="text-white font-size-12">Available</span>
                                          </div>
                                      </div>
                                      <div class="card-body p-0 ">
                                          <a href="../app/profile.php" class="iq-sub-card iq-bg-primary-hover">
                                              <div class="d-flex align-items-center">
                                                  <div class="rounded card-icon bg-soft-primary">
                                                      <i class="ri-file-user-line"></i>
                                                  </div>
                                                  <div class="ms-3">
                                                      <h6 class="mb-0 ">My Profile</h6>
                                                      <p class="mb-0 font-size-12">View personal profile details.</p>
                                                  </div>
                                              </div>
                                          </a>
                                          <a href="../app/profile-edit.php" class="iq-sub-card iq-bg-warning-hover">
                                              <div class="d-flex align-items-center">
                                                  <div class="rounded card-icon bg-soft-warning">
                                                      <i class="ri-profile-line"></i>
                                                  </div>
                                                  <div class="ms-3">
                                                      <h6 class="mb-0 ">Edit Profile</h6>
                                                      <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                  </div>
                                              </div>
                                          </a>
                                          <a href="../app/chat.php" class="iq-sub-card iq-bg-info-hover">
                                             <div class="d-flex align-items-center">
                                                 <div class="rounded card-icon bg-soft-info">
                                                     <i class="ri-account-box-line"></i>
                                                 </div>
                                                 <div class="ms-3">
                                                     <h6 class="mb-0 ">Chat</h6>
                                                     <p class="mb-0 font-size-12">Chat with your friends.</p>
                                                 </div>
                                             </div>
                                         </a>

                                          <div class="d-inline-block w-100 text-center p-3">
                                              <a class="btn btn-primary iq-sign-btn" href="../dashboard/sign-in.php" role="button">Sign
                                                  out<i class="ri-login-box-line ms-2"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>

            <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body profile-page p-0">
               <div class="profile-header">
                  <div class="position-relative">
                     <img src="../assets/images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid">
                     <ul class="header-nav list-inline d-flex flex-wrap justify-end p-0 m-0">
                        <li><a href="#"><i class="ri-pencil-line"></i></a></li>
                        <li><a href="#"><i class="ri-settings-4-line"></i></a></li>
                     </ul>
                  </div>
                  <div class="user-detail text-center mb-3">
                     <div class="profile-img">
                        <img src="../assets/images/user/11.png" alt="profile-img" class="avatar-130 img-fluid" />
                     </div>
                     <div class="profile-detail">
                        <h3 class="">Bni Cyst</h3>
                     </div>
                  </div>
                  <div class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">

                     <div class="social-info">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center ps-3">
                              <h6>Posts</h6>
                              <p class="mb-0">690</p>
                           </li>
                           <li class="text-center ps-3">
                              <h6>Followers</h6>
                              <p class="mb-0">206</p>
                           </li>
                           <li class="text-center ps-3">
                              <h6>Following</h6>
                              <p class="mb-0">100</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body p-0">
               <div class="user-tabing">
                  <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="pill" data-bs-target="#timeline" role="button">Timeline</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill" data-bs-target="#about" role="button">About</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-friends-tab" data-bs-toggle="pill" data-bs-target="#friends" role="button">Friends</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">Photos</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="tab-content">
            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="card">
                           <div class="card-body">
                              <a href="#"><span class="badge badge-pill bg-primary font-weight-normal ms-auto me-1"><i class="ri-star-line"></i></span> 27 Items for yoou</a>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Life Event</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                       <a href="#"><img src="../assets/images/page-img/07.jpg" alt="gallary-image" class="img-fluid rounded"></a>
                                       <div class="job-icon-position">
                                          <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line text-white"></i></div>
                                       </div>
                                       <div class="card-body text-center p-2">
                                          <h5>Started New Job at Apple</h5>
                                          <p>January 24, 2019</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                       <a href="#"><img src="../assets/images/page-img/06.jpg" alt="gallary-image" class="img-fluid rounded"></a>
                                       <div class="job-icon-position">
                                          <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line text-white"></i></div>
                                       </div>
                                       <div class="card-body text-center p-2">
                                          <h5>Freelance Photographer</h5>
                                          <p class="mb-0">January 24, 2019</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Photos</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g1.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g2.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g3.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g4.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g5.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g6.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g7.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g8.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g9.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Friends</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                 <li class="">
                                    <a href="#">
                                    <img src="../assets/images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Anna Rexia</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Tara Zona</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Polly Tech</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/08.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Bill Emia</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/09.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Moe Fugga</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/10.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Hal Appeno </h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Zack Lee</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Terry Aki</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Greta Life</h6>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div id="post-modal-data" class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Create Post</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                    <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
                                 </div>
                                 <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="#">
                                    <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                 </form>
                              </div>
                              <hr>
                               <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                                    <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="../assets/images/small/07.png" alt="icon" class="img-fluid me-2"> Photo/Video</li>
                                    <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="../assets/images/small/08.png" alt="icon" class="img-fluid me-2"> Tag Friend</li>
                                    <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3"><img src="../assets/images/small/09.png" alt="icon" class="img-fluid me-2"> Feeling/Activity</li>
                                    <li class="bg-soft-primary rounded p-2 pointer text-center">
                                        <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" id="post-option"   data-bs-toggle="dropdown">
                                                <i class="ri-more-fill h4"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live Video</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Gif</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play with Friend</a>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                </ul>
                           </div>
                           <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                              <div class="modal-dialog  modal-lg modal-fullscreen-sm-down">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                          </div>
                                          <form class="post-text ms-3 w-100" action="#">
                                             <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                          </form>
                                       </div>
                                       <hr>
                                       <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/08.png" alt="icon" class="img-fluid"> Tag Friend</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/10.png" alt="icon" class="img-fluid"> Check in</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/11.png" alt="icon" class="img-fluid"> Live Video</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/12.png" alt="icon" class="img-fluid"> Gif</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/13.png" alt="icon" class="img-fluid"> Watch Party</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/14.png" alt="icon" class="img-fluid"> Play with Friends</div>
                                          </li>
                                       </ul>
                                       <hr>
                                       <div class="other-option">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <div class="user-img me-3">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                                </div>
                                                <h6>Your Story</h6>
                                             </div>
                                             <div class="card-post-toolbar">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <span class="btn btn-primary">Friend</span>
                                                   </span>
                                                   <div class="dropdown-menu m-0 p-0">
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Public</h6>
                                                               <p class="mb-0">Anyone on or off Facebook</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Friends</h6>
                                                               <p class="mb-0">Your Friend on facebook</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-user-unfollow-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Friends except</h6>
                                                               <p class="mb-0">Don't show to some friends</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Only Me</h6>
                                                               <p class="mb-0">Only me</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                       </div>
                        <div class="card">
                           <div class="card-body">
                              <div class="post-item">
                                 <div class="user-post-data pb-3">
                                    <div class="d-flex justify-content-between">
                                       <div class="me-3">
                                          <img class="rounded-circle  avatar-60" src="../assets/images/user/1.jpg" alt="">
                                       </div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between flex-wrap">
                                             <div class="">
                                                <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni Cyst</a></h5>
                                                <p class="ms-1 mb-0 d-inline-block">Add New Post</p>
                                                <p class="mb-0">3 hour ago</p>
                                             </div>
                                             <div class="card-post-toolbar">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <i class="ri-more-fill"></i>
                                                   </span>
                                                   <div class="dropdown-menu m-0 p-0">
                                                       <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                          <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Save Post</h6>
                                                               <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-pencil-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Edit Post</h6>
                                                               <p class="mb-0">Update your post and saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Hide From Timeline</h6>
                                                               <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-delete-bin-7-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Delete</h6>
                                                               <p class="mb-0">Remove thids Post on Timeline</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                          <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Notifications</h6>
                                                               <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="user-post">
                                    <a href="#"><img src="../assets/images/page-img/p1.jpg" alt="post-image" class="img-fluid w-100" /></a>
                                 </div>
                                 <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                       <div class="like-block position-relative d-flex align-items-center">
                                          <div class="d-flex align-items-center">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="total-like-block ms-2 me-3">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   140 Likes
                                                   </span>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Max Emum</a>
                                                      <a class="dropdown-item" href="#">Bill Yerds</a>
                                                      <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                      <a class="dropdown-item" href="#">Tara Misu</a>
                                                      <a class="dropdown-item" href="#">Midge Itz</a>
                                                      <a class="dropdown-item" href="#">Sal Vidge</a>
                                                      <a class="dropdown-item" href="#">Other</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="total-comment-block">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                20 Comment
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Max Emum</a>
                                                   <a class="dropdown-item" href="#">Bill Yerds</a>
                                                   <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                   <a class="dropdown-item" href="#">Tara Misu</a>
                                                   <a class="dropdown-item" href="#">Midge Itz</a>
                                                   <a class="dropdown-item" href="#">Sal Vidge</a>
                                                   <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                            <span class="ms-1">99 Share</span></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                       <li class="mb-2">
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Monty Carlo</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                       <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                       <div class="comment-attagement d-flex">
                                          <a href="#"><i class="ri-link me-3"></i></a>
                                          <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                          <a href="#"><i class="ri-camera-line me-3"></i></a>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="post-item">
                                 <div class="user-post-data py-3">
                                    <div class="d-flex  justify-content-between">
                                       <div class="me-3">
                                          <img class="rounded-circle  avatar-60" src="../assets/images/user/1.jpg" alt="">
                                       </div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="">
                                                <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni Cyst</a></h5>
                                                <p class="mb-0 d-inline-block">Share Anna Mull's Post</p>
                                                <p class="mb-0">5 hour ago</p>
                                             </div>
                                             <div class="card-post-toolbar">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <i class="ri-more-fill"></i>
                                                   </span>
                                                    <div class="dropdown-menu m-0 p-0">
                                                       <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Save Post</h6>
                                                               <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-pencil-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Edit Post</h6>
                                                               <p class="mb-0">Update your post and saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Hide From Timeline</h6>
                                                               <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                          <i class="ri-delete-bin-7-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Delete</h6>
                                                               <p class="mb-0">Remove thids Post on Timeline</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Notifications</h6>
                                                               <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="user-post">
                                    <a href="#"><img src="../assets/images/page-img/p3.jpg" alt="post-image" class="img-fluid w-100" /></a>
                                 </div>
                                 <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                       <div class="like-block position-relative d-flex align-items-center">
                                          <div class="d-flex align-items-center">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="total-like-block ms-2 me-3">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   140 Likes
                                                   </span>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Max Emum</a>
                                                      <a class="dropdown-item" href="#">Bill Yerds</a>
                                                      <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                      <a class="dropdown-item" href="#">Tara Misu</a>
                                                      <a class="dropdown-item" href="#">Midge Itz</a>
                                                      <a class="dropdown-item" href="#">Sal Vidge</a>
                                                      <a class="dropdown-item" href="#">Other</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="total-comment-block">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                20 Comment
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Max Emum</a>
                                                   <a class="dropdown-item" href="#">Bill Yerds</a>
                                                   <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                   <a class="dropdown-item" href="#">Tara Misu</a>
                                                   <a class="dropdown-item" href="#">Midge Itz</a>
                                                   <a class="dropdown-item" href="#">Sal Vidge</a>
                                                   <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                            <span class="ms-1">99 Share</span></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                       <li class="mb-2">
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Monty Carlo</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                       <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                       <div class="comment-attagement d-flex">
                                          <a href="#"><i class="ri-link me-3"></i></a>
                                          <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                          <a href="#"><i class="ri-camera-line me-3"></i></a>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="post-item">
                                 <div class="user-post-data py-3">
                                    <div class="d-flex justify-content-between">
                                       <div class="me-3">
                                          <img class="rounded-circle avatar-60" src="../assets/images/user/1.jpg" alt="">
                                       </div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="">
                                                <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni Cyst</a></h5>
                                                <p class="ms-1 mb-0 d-inline-block">Update his Status</p>
                                                <p class="mb-0">7 hour ago</p>
                                             </div>
                                             <div class="card-post-toolbar">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <i class="ri-more-fill"></i>
                                                   </span>
                                                   <div class="dropdown-menu m-0 p-0">
                                                       <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Save Post</h6>
                                                               <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-pencil-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Edit Post</h6>
                                                               <p class="mb-0">Update your post and saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                          <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Hide From Timeline</h6>
                                                               <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-delete-bin-7-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Delete</h6>
                                                               <p class="mb-0">Remove thids Post on Timeline</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Notifications</h6>
                                                               <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="user-post">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                 </div>
                                 <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                       <div class="like-block position-relative d-flex align-items-center">
                                          <div class="d-flex align-items-center">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="total-like-block ms-2 me-3">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   140 Likes
                                                   </span>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Max Emum</a>
                                                      <a class="dropdown-item" href="#">Bill Yerds</a>
                                                      <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                      <a class="dropdown-item" href="#">Tara Misu</a>
                                                      <a class="dropdown-item" href="#">Midge Itz</a>
                                                      <a class="dropdown-item" href="#">Sal Vidge</a>
                                                      <a class="dropdown-item" href="#">Other</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="total-comment-block">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                20 Comment
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Max Emum</a>
                                                   <a class="dropdown-item" href="#">Bill Yerds</a>
                                                   <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                   <a class="dropdown-item" href="#">Tara Misu</a>
                                                   <a class="dropdown-item" href="#">Midge Itz</a>
                                                   <a class="dropdown-item" href="#">Sal Vidge</a>
                                                   <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                            <span class="ms-1">99 Share</span></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                       <li class="mb-2">
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Monty Carlo</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                       <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                       <div class="comment-attagement d-flex">
                                          <a href="#"><i class="ri-link me-3"></i></a>
                                          <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                          <a href="#"><i class="ri-camera-line me-3"></i></a>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="post-item">
                                 <div class="user-post-data py-3">
                                    <div class="d-flex justify-content-between">
                                       <div class=" me-3">
                                          <img class="rounded-circle avatar-60" src="../assets/images/user/1.jpg" alt="">
                                       </div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="">
                                                <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni Cyst</a></h5>
                                                <p class=" mb-0 d-inline-block">Change Profile Picture</p>
                                                <p class="mb-0">3 day ago</p>
                                             </div>
                                             <div class="card-post-toolbar">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <i class="ri-more-fill"></i>
                                                   </span>
                                                  <div class="dropdown-menu m-0 p-0">
                                                       <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Save Post</h6>
                                                               <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-pencil-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Edit Post</h6>
                                                               <p class="mb-0">Update your post and saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Hide From Timeline</h6>
                                                               <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-delete-bin-7-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Delete</h6>
                                                               <p class="mb-0">Remove thids Post on Timeline</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Notifications</h6>
                                                               <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="user-post text-center">
                                    <a href="#"><img src="../assets/images/page-img/p1.jpg" alt="post-image" class="img-fluid profile-img" /></a>
                                 </div>
                                 <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                       <div class="like-block position-relative d-flex align-items-center">
                                          <div class="d-flex align-items-center">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                      <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="total-like-block ms-2 me-3">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   140 Likes
                                                   </span>
                                                   <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="#">Max Emum</a>
                                                      <a class="dropdown-item" href="#">Bill Yerds</a>
                                                      <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                      <a class="dropdown-item" href="#">Tara Misu</a>
                                                      <a class="dropdown-item" href="#">Midge Itz</a>
                                                      <a class="dropdown-item" href="#">Sal Vidge</a>
                                                      <a class="dropdown-item" href="#">Other</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="total-comment-block">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                20 Comment
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Max Emum</a>
                                                   <a class="dropdown-item" href="#">Bill Yerds</a>
                                                   <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                   <a class="dropdown-item" href="#">Tara Misu</a>
                                                   <a class="dropdown-item" href="#">Midge Itz</a>
                                                   <a class="dropdown-item" href="#">Sal Vidge</a>
                                                   <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                            <span class="ms-1">99 Share</span></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                       <li class="mb-2">
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Monty Carlo</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                       <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                       <div class="comment-attagement d-flex">
                                          <a href="#"><i class="ri-link me-3"></i></a>
                                          <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                          <a href="#"><i class="ri-camera-line me-3"></i></a>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel" >
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                              <li>
                                 <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic Info</a>
                              </li>


                           </ul>
                        </div>
                        <div class="col-md-9 ps-4">
                           <div class="tab-content" >
                              <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"  aria-labelledby="v-pills-basicinfo-tab">
                                 <h4>Contact Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"></p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Mobile</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"></p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $country .'of'. $city ?></p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3"> Social Links</h4>
                                 <hr>
                                 <div class="row">


                                    <div class="col-3">
                                       <h6>Social Link</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $contact_number ?></p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3">Basic Information</h4>
                                 <hr>
                                 <div class="row">


                                    <div class="col-3">
                                       <h6>Birth Year</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $data_of_birth ?></p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Gender</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"></p>
                                    </div>

                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-family" role="tabpanel">
                                 <h4 class="mb-3">Relationship</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                       <div class="media-support-info ms-3">
                                          <h6>Add Your Relationship Status</h6>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mt-3 mb-3">Family Members</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                       <div class="media-support-info ms-3">
                                          <h6>Add Family Members</h6>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="ms-3">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Brothe</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex justify-content-between mb-4  align-items-center">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class=" ms-3">
                                                <h6>Anna Mull</h6>
                                                <p class="mb-0">Sister</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="ms-3">
                                                <h6>Paige Turner</h6>
                                                <p class="mb-0">Cousin</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-work-tab" role="tabpanel" aria-labelledby="v-pills-work-tab">
                                 <h4 class="mb-3">Work</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex justify-content-between mb-4  align-items-center">
                                       <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                       <div class="ms-3">
                                          <h6>Add Work Place</h6>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="ms-3">
                                                <h6>Themeforest</h6>
                                                <p class="mb-0">Web Designer</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>iqonicdesign</h6>
                                                <p class="mb-0">Web Developer</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>W3school</h6>
                                                <p class="mb-0">Designer</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mb-3">Professional Skills</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                       <div class="ms-3">
                                          <h6>Add Professional Skills</h6>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mt-3 mb-3">College</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                       <div class="ms-3">
                                          <h6>Add College</h6>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>Lorem ipsum</h6>
                                                <p class="mb-0">USA</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-lived-tab" role="tabpanel" aria-labelledby="v-pills-lived-tab">
                                 <h4 class="mb-3">Current City and Hometown</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>Georgia</h6>
                                                <p class="mb-0">Georgia State</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>Atlanta</h6>
                                                <p class="mb-0">Atlanta City</p>
                                             </div>
                                             <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                       <div class="ms-3">
                                          <h6>Add Place</h6>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                                 <h4 class="mb-3">About You</h4>
                                 <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                 <h4 class="mt-3 mb-3">Other Name</h4>
                                 <p>Bini Rock</p>
                                 <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="friends" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Friends</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends" data-bs-target="#all-feinds">All Friends</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add" data-bs-target="#recently-add">Recently Added</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends" data-bs-target="#closefriends"> Close friends</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-home" data-bs-target="#home-town"> Home/Town</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-following" data-bs-target="#following">Following</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Petey Cruiser</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Anna Sthesia</h5>
                                                   <p class="mb-0">50  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton02" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paul Molive</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton03" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Gail Forcewind</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paige Turner</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>b Frapples</h5>
                                                   <p class="mb-0">6  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton06" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton06">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Walter Melon</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton07" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton07">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Ackue</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton08" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton08">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Buck Kinnear</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton09" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Ira Membrit</h5>
                                                   <p class="mb-0">22  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Shonda Leer</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>ock Lee</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">40  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton13" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Rick O'Shea</h5>
                                                   <p class="mb-0">50  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton14" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Pete Sariya</h5>
                                                   <p class="mb-0">5  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton15" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Monty Carlo</h5>
                                                   <p class="mb-0">2  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton16" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Sal Monella</h5>
                                                   <p class="mb-0">0  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton17" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton17">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Sue Vaneer</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton18" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton18">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cliff Hanger</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton19" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton19">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Dwyer</h5>
                                                   <p class="mb-0">23  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton20" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton20">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Terry Aki</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton21" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton21">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cory Ander</h5>
                                                   <p class="mb-0">7  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton22">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Robin Banks</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton23" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton23">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Jimmy Changa</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton24" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton24">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Wine</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton25" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton25">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Poppa Cherry</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton26" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton26">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Zack Lee</h5>
                                                   <p class="mb-0">33  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton27" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton27">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Don Stairs</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton28" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton28">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton29" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton29">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Hal Appeno </h5>
                                                   <p class="mb-0">13  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton30" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton30">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="recently-add" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Otto Matic</h5>
                                                   <p class="mb-0">4  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton31" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Moe Fugga</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton32" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton32">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tom Foolery</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton33" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton33">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bud Wiser</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton34" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton34">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton35" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton35">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Holly Graham</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton36">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tara Zona</h5>
                                                   <p class="mb-0">5  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton37" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton37">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Cade</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton38" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton38">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="closefriends" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bud Wiser</h5>
                                                   <p class="mb-0">32  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton39" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Otto Matic</h5>
                                                   <p class="mb-0">9  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton40" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">2  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton41" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton41">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Zack Lee</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton42" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton42">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Wine</h5>
                                                   <p class="mb-0">36  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton43" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton43">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Robin Banks</h5>
                                                   <p class="mb-0">22  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton44" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton44">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cory Ander</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton45" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton45">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Moe Fugga</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton46" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton46">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton47" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton47">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Hal Appeno</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton48" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton48">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="home-town" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paul Molive</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton49" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paige Turner</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton50" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Ackue</h5>
                                                   <p class="mb-0">23  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton51" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton51">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Ira Membrit</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton52" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton52">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton53" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton53">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="following" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton54" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Monty Carlo</h5>
                                                   <p class="mb-0">3  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton55" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cliff Hanger</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton56" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton56">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>b Ackue</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton57" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton57">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bob Frapples</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton58" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton58">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Anna Mull</h5>
                                                   <p class="mb-0">6  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton59" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton59">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>ry Wine</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton60" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton60">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Don Stairs</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton61" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton61">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton62" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton62">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton63" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton63">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tara Zona</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton64" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton64">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Arty Ficial</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton65" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton65">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bill Emia</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton66" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton66">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bill Yerds</h5>
                                                   <p class="mb-0">9  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton67" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton67">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Matt Innae</h5>
                                                   <p class="mb-0">19  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton68" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton68">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Photos</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou" data-bs-target="#photosofyou">Photos of You</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos" data-bs-target="#your-photos">Your Photos</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/61.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/62.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/63.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/64.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/65.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="your-photos" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 text-center">
         <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
      </div>
   </div>
</div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer bg-white">
       <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
<li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
            </div>
        </div>
    </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    <!-- masonry JavaScript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="../assets/js/charts/weather-chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="../assets/js/lottie.js"></script>


    <!-- offcanvas start -->

    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
       <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body small">
          <div class="d-flex flex-wrap align-items-center">
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
                <h6>Facebook</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
                <h6>Twitter</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
                <h6>Instagram</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="">
                <h6>Google Plus</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
                <h6>In</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
                <h6>YouTube</h6>
             </div>
          </div>
       </div>
    </div>
  </body>
</html>
