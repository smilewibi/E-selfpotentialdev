<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrap">
	  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SP</b>Dev</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Self Potential</b>Dev.</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="adminLTE/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Nama User
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><?=html::a('Lihat Semua Pesan', ['/pesan/index']) ?></li>
            </ul>
          </li>
          <!-- Kesan: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="adminLTE/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Nama User
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><?=html::a('Lihat Semua Kesan', ['/kesan/index']) ?></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="adminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="adminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
				  <?=html::a('Sign out', ['site/logout'], ['data-method'=>'post','class'=>'btn btn-default btn-flat']) ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
	  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="adminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Psikotes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><i class="fa fa-circle-o"></i><?=html::a('MBTI', ['/tesmbti/index']) ?></li>
            <li><i class="fa fa-circle-o"></i><?=html::a('TPA', ['/tes-tpa/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('EPPS', ['#']) ?></li>
          </ul>
        </li>
		<li class="treeview">
            <?=html::a('Kepribadian', ['/kepribadian/index']) ?>
            <i class="fa fa-files-o"></i>
        </li>
		<li class="treeview">
            <?=html::a('Karir', ['/karir/index']) ?>
            <i class="fa fa-files-o"></i>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Psikogram</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><i class="fa fa-circle-o"></i><?=html::a('Cetak Psikogram', ['/potensi-kepribadian/index']) ?></li>
            <li><i class="fa fa-circle-o"></i><?=html::a('Cetak Penjelasan Psikogram', ['#']) ?></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><i class="fa fa-circle-o"></i><?=html::a('Dikotomi Ekstrovet / Introvet', ['/dikotomi-ei/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('Dikotomi Sensory / Intuitive', ['/dikotomi-sn/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('Dikotomi Thinking / Feeling', ['/dikotomi-tf/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('Dikotomi Judging / Perceiving', ['/dikotomi-jp/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('Tipe Kepribadian', ['/type-kepribadian/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('Bidang Karir', ['/bid-karir/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('Kategori', ['/kategori/index']) ?></li>
			<li><i class="fa fa-circle-o"></i><?=html::a('User', ['/user/index']) ?></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
	</section>
    </div>
</div>


	<div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
