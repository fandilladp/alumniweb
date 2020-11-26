<?= $this->extend('layout/templatehome'); ?>

<?= $this->section('isicontent'); ?>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

  <!-- LOADER -->
  <div id="preloader">
    <div class="loader">
      <img src="<?= base_url('assets'); ?>/perfect-learn/images/loader.gif" alt="#" />
    </div>
  </div>
  <!-- end loader -->
  <!-- END LOADER -->

  <!-- Start header -->
  <?= $this->include('layout/navbar'); ?>
  <!-- End header -->

  <!-- Start Banner -->
  <div class="ulockd-home-slider">
    <div class="container-fluid">
      <div class="row">
        <div class="pogoSlider" id="js-main-slider">
          <div class="pogoSlider-slide" style="background-image:url('http://localhost/alumniweb/public/assets/img/1.jpg');">
          </div>
          <div class="pogoSlider-slide" style="background-image:url('http://localhost/alumniweb/public/assets/img/2.jpg');">

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
          <div class="col-md-5">
            <div class="tab_menu" style="background-color: #168686;">
              <ul>
                <li><a href="<?= base_url('lowongan'); ?>"><span class="icon"><img src="<?= base_url('assets'); ?>/perfect-learn/images/i1.png" alt="#" /></span><span>Lowongan</span></a></li>
                <li><a href="#"><span class="icon"><img src="<?= base_url('assets'); ?>/perfect-learn/images/i2.png" alt="#" /></span><span>Pelatihan</span></a></li>
                <li><a href="<?= base_url('perusahaan'); ?>"><span class="icon"><img src="<?= base_url('assets'); ?>/perfect-learn/images/i4.png" alt="#" /></span><span>Perusahaan</span></a></li>
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
        <div class="container">

          <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Thumbnail Gallery</h1>

          <hr class="mt-2 mb-5">

          <div class="card-deck">
            <div class="card">

              <div class="card-body">
                <h1 class="card-number"><?= $jumlahalumni ;?></h1>
                <h1 class="card-title">ALUMNI</h1>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-light">Selengkapnya</button>
              </div>
            </div>
            <div class="card">

              <div class="card-body">
                <h1 class="card-number">0</h1>
                <h1 class="card-title">PENGURUS DAERAH X</h1>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <button type="button" class="btn btn-light">Selengkapnya</button>
              </div>
            </div>
            <div class="card">

              <div class="card-body">
                <h1 class="card-number">0</h1>
                <h1 class="card-title">KOMUNITAS ALUMNI</h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <button type="button" class="btn btn-light">Selengkapnya</button>
              </div>
            </div>
          </div>

          <div class="jumbotron mt-5">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-outline-danger btn-lg" href="#" role="button">Learn more</a>
          </div>



          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card-deck">
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="carousel-item">
                <div class="card-deck">
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-deck">
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.MvqKXW4tMVvhpEQ1nc37iwHaF6?pid=Api&rs=1" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-info mb-5">Selengkapnya</button>
  </div>
  <!-- section -->
  <div class="section contact_section" style="background:#168686;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="full float-right_img">
            <img src="" alt="">
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
              <img src="<?= base_url('assets'); ?>/perfect-learn/images/footer_logo.png" alt="#" />
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
              <li><img src="<?= base_url('assets'); ?>/perfect-learn/images/i5.png"><span>London 145<br>United Kingdom</span></li>
              <li><img src="<?= base_url('assets'); ?>/perfect-learn/images/i6.png"><span>demo@gmail.com</span></li>
              <li><img src="<?= base_url('assets'); ?>/perfect-learn/images/i7.png"><span>+12586954775</span></li>
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
          <p class="crp">© Copyrights alumnielektro 2020</p>
        </div>
      </div>
    </div>
  </div>

  <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

  <?= $this->endSection(); ?>