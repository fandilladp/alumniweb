<?php
helper('auth');
$session = session();
?>
<!-- https://el.itera.ac.id/wp-content/uploads/2020/09/itera.png -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg text-light" style="background-color: #168686;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Alumni Web</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://el.itera.ac.id/">Teknik Elektro</a>
                            <a class="dropdown-item" href="<?= base_url('about/index') ;?>">Alumni Web</a>
                        </div>
                    </li>
                    <li><a class="nav-link" href="<?= base_url('alumni/index'); ?>">Alumni</a></li>
                    <li><a class="nav-link" href="<?= base_url('tracer/index'); ?>">Tracer Study</a></li>
                    <?php if (logged_in()) : ?>
                        <?php if (user()->status == 'tamu') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('user/index') ?>">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                            </li>
                        <?php endif ?>

                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('login'); ?>">Sign In</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('register'); ?>">Register</a>
                        </li> -->
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- ============================= -->