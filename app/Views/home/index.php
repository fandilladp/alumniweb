<?= $this->extend('layout/templatehome') ;?>

<?= $this->section('isicontent'); ?>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="<?= base_url('assets') ;?>/perfect-learn/images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <?= $this->include('layout/navbar') ;?>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url('https://el.itera.ac.id/wp-content/themes/bizbuzz/assets/images/default.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="#">Start a Course</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url('https://el.itera.ac.id/wp-content/uploads/2020/09/cropped-back.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="#">Start a Course</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu">
				    <ul>
					   <li><a href="<?= base_url('lowongan') ;?>"><span class="icon"><img src="<?= base_url('assets') ;?>/perfect-learn/images/i1.png" alt="#" /></span><span>Lowongan</span></a></li>
                       
                       <li><a href="#"><span class="icon"><img src="<?= base_url('assets') ;?>/perfect-learn/images/i2.png" alt="#" /></span><span>Pelatihan</span></a></li>
                       
                       <li><a href="#"><span class="icon"><img src="<?= base_url('assets') ;?>/perfect-learn/images/i4.png" alt="#" /></span><span>Perusahaan</span></a></li>
                       
                       <li><a href="#"><span class="icon"><img src="<?= base_url('assets') ;?>/perfect-learn/images/i5.png" alt="#" /></span><span>Location</span></a></li>
                      
                       <li><a href="<?= base_url('contact') ;?>"><span class="icon"><img src="<?= base_url('assets') ;?>/perfect-learn/images/i6.png" alt="#" /></span><span>contact</span></a></li>
                       
                       <li><a href="#"><span class="icon"><img src="<?= base_url('assets') ;?>/perfect-learn/images/i7.png" alt="#" /></span><span>Email</span></a></li>
					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 mb-5">
        <div class="container">
            <div id="doc" class="yui-t2">
                <div id="hd">
                    <div id="header"><h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam asperiores voluptatum amet repudiandae possimus doloremque, consectetur ipsum reprehenderit nesciunt eligendi eos esse eum nulla exercitationem saepe assumenda et quis pariatur!
                    </h1></div>
                </div>
                <div id="bd">
                    <div id="yui-main">
                    <div class="yui-b">
                        <div class="yui-gc">
                        <div class="yui-u first">
                            <div class="content">Content Here</div>
                        </div>
                        <div class="yui-u">
                            <div class="content">Content Here</div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="yui-b">
                    <div id="secondary">Secondary Column</div>
                    </div>
                </div>
                <div id="ft">
             </div>
            </div>
        </div>
    </div>
	<!-- section -->
    <div class="section contact_section" style="background:#168686;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12">
				    <div class="full float-right_img">
                        <img src="<?= base_url('assets') ;?>/perfect-learn/images/img10.png" alt="#">
                    </div>
                 </div>
				 <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
				    <div class="contact_form">
					    <form action="contact.html">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="Your Name" name="your name" />
							   </div>
							   <div class="full field">
							      <input type="email" placeholder="Email Address" name="Email" />
							   </div>
							   <div class="full field">
							      <input type="phn" placeholder="Phone Number" name="Phone number" />
							   </div>
							   <div class="full field">
							      <textarea placeholder="Massage"></textarea>
							   </div>
							   <div class="full field">
							      <div class="center"><button>Send</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="<?= base_url('assets') ;?>/perfect-learn/images/footer_logo.png" alt="#" />
					 </div>
					 <div class="full white_fonts">
					    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Quick links</h3>
						    <ul> 
							  <li><a href="#">> Join Us</a></li>
							  <li><a href="#">> Maintenance</a></li>
							  <li><a href="#">> Language Packs</a></li>
							  <li><a href="#">> LearnPress</a></li>
							  <li><a href="#">> Release Status</a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Newsletter</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
							 <ul class="full">
							   <li><img src="<?= base_url('assets') ;?>/perfect-learn/images/i5.png"><span>London 145<br>United Kingdom</span></li>
							   <li><img src="<?= base_url('assets') ;?>/perfect-learn/images/i6.png"><span>demo@gmail.com</span></li>
							   <li><img src="<?= base_url('assets') ;?>/perfect-learn/images/i7.png"><span>+12586954775</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 design by html.design</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

<?= $this->endSection() ;?>