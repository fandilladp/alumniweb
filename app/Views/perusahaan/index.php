<?= $this->extend('layout/templatehome') ;?>
<?= $this->section('isicontent') ;?>



<!-- Page Content -->
<section class=" py-5 mb-4" >
  <?= $this->include('layout/navbar') ;?>    
<div class="jumbotron jumbotron-fluid" style="background-color: #168686;">
  <div class="container">
    <h1 class="display-4">Informasi Perusahaan</h1>
  </div>
</div>
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>
</section>
<?= $this->endSection() ;?>