<?php
/**
 * CakeLte Layout for AdminLTE Theme
 * Based on vendor/arodu/cakelte/templates/layout/default.php
 *
 * @var \App\View\AppView $this
 * @var \CakeLte\View\Helper\CakeLteHelper $this->CakeLte
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= strip_tags($this->fetch('title') . ' | CakePHP') ?></title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <?= $this->Html->css('/adminlte/plugins/fontawesome-free/css/all.min.css') ?>
    <!-- Theme style -->
    <?= $this->Html->css('/adminlte/dist/css/adminlte.min.css') ?>
    <?= $this->Html->css('CakeLte.style') ?>
    <?php 
    // Load custom CakeLte extra css if exists
    try {
        echo $this->element('CakeLte.extra/css');
    } catch (\Exception $e) {
        // Element not found, ignore
    }
    ?>
    <?= $this->fetch('css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <?= $this->Html->image('/cake_lte/img/cake.icon.svg', ['alt' => 'CakePHP Logo', 'class' => 'brand-image']) ?>
                <span class="brand-text font-weight-light">Cake<b>PHP</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?= $this->Html->image('/adminlte/dist/img/user2-160x160.jpg', ['alt' => 'User Image', 'class' => 'img-circle elevation-2']) ?>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">User</a>
                    </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/" class="nav-link <?= $this->request->getPath() === '/' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/users" class="nav-link <?= strpos($this->request->getPath(), '/users') === 0 ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/agencies" class="nav-link <?= strpos($this->request->getPath(), '/agencies') === 0 ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Agencies</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/judges" class="nav-link <?= strpos($this->request->getPath(), '/judges') === 0 ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-gavel"></i>
                                <p>Judges</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rooms" class="nav-link <?= strpos($this->request->getPath(), '/rooms') === 0 ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-door-open"></i>
                                <p>Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/court-cases" class="nav-link <?= strpos($this->request->getPath(), '/court-cases') === 0 ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Court Cases</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $this->fetch('title') ?: 'Dashboard' ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active"><?= $this->fetch('title') ?: 'Dashboard' ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="https://cakephp.org">CakePHP</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?= $this->Html->script('/adminlte/plugins/jquery/jquery.min.js') ?>
    <!-- Bootstrap 4 -->
    <?= $this->Html->script('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>
    <!-- AdminLTE App -->
    <?= $this->Html->script('/adminlte/dist/js/adminlte.min.js') ?>
    
    <?php 
    // Load custom CakeLte extra script if exists
    try {
        echo $this->element('CakeLte.extra/script');
    } catch (\Exception $e) {
        // Element not found, ignore
    }
    ?>
    <?= $this->fetch('script') ?>
</body>

</html>
