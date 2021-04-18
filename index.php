<?php require_once('config.php'); ?>
<?php  include('includes/reg-log.php'); ?>
<?php include('includes/profile.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  
<!-- Mirrored from lmpixels.com/demo/breezycv/light/2/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 10 Apr 2021 19:50:07 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Farmers Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="farmer's portal - kissan" />
    <meta name="keywords" content="kissan,vivasayee,farmer" />
    <meta name="author" content="sabarish sanjeevi" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(image.webp);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="12.png" alt="Alex Smith" height= "130" width="150">
              </div>
              <div class="header-titles">
                <h2>
                <?php if(!isset($_SESSION['user'])){
                           ?>
                           Please Login
                           <?php }else{
                             ?>
                             <?php echo $_SESSION['user']['name']; ?>
                             </h2>
                             <?php } ?>
                <h4>Farmer</h4>
              </div>
            </div>

            <ul class="main-menu">
            <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
            <?php if(!isset($_SESSION['user'])){
                           ?>
              <li class="active">
                <a href="#login" class="nav-anim">
                  <span class="menu-icon lnr lnr-enter"></span>
                  <span class="link-text">Login</span>
                </a>
              </li>
              <?php }else{
              ?>
              <li class="active">
                <a href="#dash" class="nav-anim">
                  <span class="menu-icon lnr lnr-dice"></span>
                  <span class="link-text">Dashboard</span>
                </a>
              </li>
              <?php } ?>
              <li>
                <a href="#products" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Products</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
              <?php if(isset($_SESSION['user'])){
              ?>
              <li>
                <a href="#logout" class="nav-anim">
                  <span class="menu-icon lnr lnr-exit"></span>
                  <span class="link-text">Logout</span>
                </a>
              </li>
              <?php } ?>
              <a href="#register"></a>
              <a href="#profile"></a>
              <a href="#product-add"></a>
            </ul>

<?php if(!isset($_SESSION['user'])){
?>
            <div class="header-buttons">
              <a href="#login"  class="btn btn-primary">Login</a>
            </div>
<?php }else{ ?>
            <div class="header-buttons">
              <a href="#dash" class="btn btn-primary">Dashboard</a>
            </div>
<?php } ?>
            <div class="copyrights">Let's Hack © 2021 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>Welcome 
                          <?php if(!isset($_SESSION['user'])){
                           ?>
                          to Farmers Portal
                           <?php }else{ 
                             echo $_SESSION['user']['name']; ?>
                             <?php } ?>
</h2>
                          <p>This website is for <mark><span title="the backbone of india">Farmers</span></mark> and Resellers only.
                         <?php if(!isset($_SESSION['user'])){
                           ?>
                         <div class="fw-button-row">
                         <a href="#login" class="btn btn-primary">Login</a>
                          </div>
<?php
}else{
?>
                         <div class="fw-button-row">
                         <a href="#dash" class="btn btn-primary">Dashboard</a>
                          </div>
<?php }?>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->
              <section data-id="login" class="animated-section start-page">
              <div class="section-content vcentered">
                      <form  class="contact-form" action="#login" method="post">

                        <div class="messages"></div>
                        <p  style="color:red;"><?php include('includes/errors.php') ?></p>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="username" class="form-control" placeholder="" required="required" data-error="Phone is required.">
                                <label>Phone</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_password" type="password" name="password" class="form-control" placeholder="" required="required" data-error="Valid password is required.">
                                <label>password</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group ">
                          <input type="submit" class="button btn-send" value="Login" name="login_btn">
                        </div>
                      </form>
                      <p> Im new here!! <a href="#register">Register Now</a>
                      </div>
                    <!-- End of Contact Form -->
                    
                </div>
              </section>

              <!-- About Me Subpage -->

              <section data-id="register" class="animated-section start-page">
              <div class="section-content vcentered">
                      <form  class="contact-form" action="#register" method="post">

                        <div class="messages"></div>
                        <p  style="color:red;"><?php include('includes/errors.php') ?></p>

                        <div class="controls two-columns">
                          <div class="fields clearfix">

                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="username" class="form-control" placeholder="" required="required" data-error="Phone is required.">
                                <label>Phone</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="text" name="email" class="form-control" placeholder="Optional" >
                                <label>Email</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_password" type="password" name="password_1" class="form-control" placeholder="" required="required" data-error="Valid password is required.">
                                <label>password</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_password" type="password" name="password_2" class="form-control" placeholder="" required="required" data-error="Valid password is required.">
                                <label>confirm - password</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="form-group ">
                          <input type="submit" class="button btn-send" value="Register" name="reg_user">
                        </div>
                      </form>
                      <p> Already hava a account ??  <a href="#login">Login Here</a>
                      </div>
                    <!-- End of Contact Form -->
                    
                </div>
              </section>


              <section data-id="logout" class="animated-section">
              <div class="section-content vcentered">
              <div class="fw-button-row">
                         <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
              </div>
              </div>
              </section>

              <!--registratio over -->

              <section data-id="profile" class="animated-section start-page">
              <div class="section-content vcentered">
                      <form  class="contact-form" action="#profile" method="post">

                        <div class="messages"></div>
                        <p  style="color:red;"><?php include('includes/errors.php') ?></p>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_text" type="text" name="address" class="form-control" placeholder="" required="required" data-error="Phone is required."></textarea>
                                <label>Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_text" type="text" name="location" class="form-control" placeholder="" required="required" data-error="Valid password is required.">
                                <label>Exact Location</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_text" type="text" name="area" class="form-control" placeholder="" data-error="Phone is required.">
                                <label>Area (Acers/sqft.)</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div> 
                          </div>
                          <div class="form-group ">
                          <input type="submit" class="button btn-send" value="Update" name="profile">
                        </div>
                      </form>
                      <p> Im done !! <a href="#dash">Go To dashboard</a>
                      </div>
                    <!-- End of Contact Form -->
                    
                </div>
              </section>





              <section data-id="product-add" class="animated-section start-page">
              <div class="section-content vcentered">
                      <form  class="contact-form" action="#profile" method="post">

                        <div class="messages"></div>
                        <p  style="color:red;"><?php include('includes/errors.php') ?></p>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_text" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Phone is required."></textarea>
                                <label>Product Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_text" type="text" name="detials" class="form-control" placeholder="" required="required" data-error="Valid password is required.">
                                <label>Product Detials</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_text" type="text" name="amount" class="form-control" placeholder="" data-error="Phone is required.">
                                <label>Amount</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div> 
                          </div>
                          <div class="form-group ">
                          <input type="submit" class="button btn-send" value="Add" name="product">
                        </div>
                      </form>
                      </div>
                    <!-- End of Contact Form -->
                    
                </div>
              </section>
<!--profile - edit over -->

              
              <section data-id="dash" class="animated-section">
                <div class="page-title">
                  <h2>User <span>Dash</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p>Hello <mark><?php echo $_SESSION['user']['name']; ?></mark> This a dashboard of yours here you can sell the products and also you can determine your price.</p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Area : </span>
                            <span class="value"><?php echo $_SESSION['user']['area']; ?></span>
                          </li>

                          <li>
                            <span class="title">Exact Location : </span>
                            <span class="value"><?php echo $_SESSION['user']['location']; ?></span>
                          </li>

                          <li>
                            <span class="title">Address : </span>
                            <span class="value"><?php echo $_SESSION['user']['address']; ?></span>
                          </li>

                          <li>
                            <span class="title">e-mail : </span>
                            <span class="value"><a href="<?php echo $_SESSION['user']['email']; ?>"><?php echo $_SESSION['user']['email']; ?></a></span>
                          </li>

                          <li>
                            <span class="title">Phone : </span>
                            <span class="value"><?php echo $_SESSION['user']['username']; ?></span>
                          </li>
                        </ul>
                      </div>
                      <div class="fw-button-row">
                         <a href="#profile"> <button class="btn btn-primary" >Update Profile</button></a>
                        </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>My <span>Products</span></h3>
                      </div>
                    </div>
                  </div>

                <!--  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-store"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Ecommerce</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div><div class="ci-text">
                              <h4>Web Design</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-pencil"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Copywriting</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-flag"></i>
                            </div><div class="ci-text">
                              <h4>Management</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  End of Services 

                  <div class="white-space-30"></div>

                   End of Clients 

                  <div class="white-space-50"></div>


                  <div class="white-space-50"></div>


                </div>-->
              </section>
              <!-- End of About Me Subpage -->



              <!-- Portfolio Subpage -->
              <section data-id="products" class="animated-section">
                <div class="page-title">
                  <h2>Products</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">Detailed</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li>
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">
                          
                          <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/1.jpg" alt="SoundCloud Audio" title="" />
                              <a href="../../../../../external.html?link=https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                            </div>

                            <i class="fa fa-volume-up"></i>
                            <h4 class="name">SoundCloud Audio</h4>
                            <span class="category">SoundCloud</span>
                          </figure>

                          <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/2.jpg" alt="Media Project 2" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 2</h4>
                            <span class="category">Detailed</span>
                          </figure>

                          <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/3.jpg" alt="Vimeo Video 1" title="" />
                              <a href="../../../../../external.html?link=https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">Vimeo Video 1</h4>
                            <span class="category">Vimeo Videos</span>
                          </figure>

                          <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/4.jpg" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 1</h4>
                            <span class="category">Detailed</span>
                          </figure>

                          <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/5.jpg" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="img/portfolio/full/5.jpg"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 1</h4>
                            <span class="category">Mockups</span>
                          </figure>

                          <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/6.jpg" alt="YouTube Video 1" title="" />
                              <a href="../../../../../external.html?link=https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video 1</h4>
                            <span class="category">YouTube Videos</span>
                          </figure>
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">
                        
                        <!-- Blog Post 1 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_1.jpg" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">05 Mar 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_2.jpg" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">23 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_3.jpg" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_4.jpg" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">07 Jan 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 4 -->
                      </div>
                    </div>
                  </div>
                </div>


              </section>
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>San Francisco</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>415-832-2000</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4><a href="../../../../../external.html?link=https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86e7eae3fec6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map"></div>
                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="../../../../../external.html?link=https://lmpixels.com/demo/breezycv/light/2/contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>Email Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Subject</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
      
                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>

    <script src='js/perfect-scrollbar.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="../../../../../external.html?link=https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
  </body>

<!-- Mirrored from lmpixels.com/demo/breezycv/light/2/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 10 Apr 2021 19:50:55 GMT -->
</html>
