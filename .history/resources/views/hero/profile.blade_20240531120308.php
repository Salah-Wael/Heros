@extends('layout.nav')

@section('title')
Heros | hero
@endsection

@section('css')
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/libs.min.css">
    <link rel="stylesheet" href="../assets/css/socialv.css?v=4.0.0">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
@endsection

@section('script')
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
@endsection

@section('content')

    <body class="  ">
    
    <div class="wrapper">
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
                     <div class="social-links">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center pe-3">
                              <a href="#"><img src="../assets/images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="../assets/images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="../assets/images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                           </li>
                        </ul>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>         <div class="card">
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
                        <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">Photos</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="tab-content">
            <div class="tab-pane fade" id="about" role="tabpanel" >
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                              <li>
                                 <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic Info</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-family-tab" data-bs-toggle="pill" data-bs-target="#v-pills-family" role="button">Family and Relationship</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-work-tab" data-bs-toggle="pill" data-bs-target="#v-pills-work-tab" role="button">Work and Education</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-lived-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lived-tab" role="button">Places You've Lived</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">Details About You</a>
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
                                       <p class="mb-0">Bnijohn@gmail.com</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Mobile</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">(001) 4544 565 456</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">United States of America</p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3">Websites and Social Links</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Website</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Social Link</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3">Basic Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Birth Date</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">24 January</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Birth Year</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">1994</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Gender</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Female</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>interested in</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Designing</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>language</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">English, French</p>
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
            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-lg-4">
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
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g7.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g8.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class=""><a href="#"><img src="../assets/images/page-img/g9.jpg" alt="gallary-image" class="img-fluid" /></a></li>
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
                                    <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3"><img src="../assets/images/small/09.png" alt="icon" class="img-fluid me-2"> Feeling/Activity</li>
                                    <li class="bg-soft-primary rounded p-2 pointer text-center">
                                        <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" id="post-option"   data-bs-toggle="dropdown">
                                                <i class="ri-more-fill h4"></i>
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
                                                   <img src="{{ asset }}/assets/images/icon/01.png" class="img-fluid" alt="">
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
                                    
                                    
                                 </div>
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
       <!-- Backend Bundle JavaScript -->
    


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

@endsection