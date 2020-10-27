<?php
    $session = session();
?>
<header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="https://el.itera.ac.id/wp-content/uploads/2020/09/itera.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="<?= base_url('home') ;?>">Home</a></li>
                        <li><a class="nav-link" href="https://el.itera.ac.id/">About</a></li>
                        <li><a class="nav-link" href="<?= base_url('alumni') ;?>">Alumni</a></li>
                        <li><a class="nav-link" href="<?= base_url('tracer/index') ;?>">Tracer Study</a></li>
                <?php if ($session->get('isLoggedIn')) : ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('user/index') ?>">My Account</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                     </li>
                 <?php else : ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a>
                     </li>
                 <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>