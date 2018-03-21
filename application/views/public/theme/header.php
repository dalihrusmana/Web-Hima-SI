<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>{judul}</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Chrome, Firefox OS, Opera and Vivaldi -->
	<meta name="theme-color" content="#0575e6">
  {css}
	<link rel="stylesheet" type="text/css" href="{url}">
  {/css}

</head>
<body>
	<!-- ini bagian header -->
	<nav class="navbar navbar-default navbar-fixed-top wow fadeIn">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-hima" href="index.html"><img src="assets/image/logohimasi.png" width="50">hima si</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="index.html">home</a></li>
	        <li class="dropdown">
	          <a href="#" >tentang <span class="caret"></span></a>
	          <ul class="dropdown-menu animated fadeIn">
	            <li><a href="#">sejarah</a></li>
	            <li><a href="#">ketua hima</a></li>
	            <li><a href="#">visi - misi</a></li>
	            <li><a href="#">divisi</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" >gallery <span class="caret"></span></a>
	          <ul class="dropdown-menu animated fadeIn">
	            <li><a href="#">pengurus</a></li>
	            <li><a href="#">angkatan muda</a></li>
	            <li><a href="#">alumni</a></li>
	            <li><a href="#">kegiatan</a></li>
	          </ul>
	        </li>
	        <li><a href="#">kontak</a></li>
	        <li><a href="events-page.html">events</a></li>
	        <li><a href="blog-page.html">blog</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">daftar hima si</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="hima-header wow fadeIn">
		<div class="image-gradient">
		<div class="container">
			<div class="himaheader-inner">
				<h1 class="wow bounceIn" data-wow-delay=".2s">himpunan mahasiswa <br>sistem informasi</h1>
				<h2 class="wow bounceIn" data-wow-delay=".3s">universitas komputer indonesia</h2>
				<a href="" type="button" class="btn btn-default wow bounceIn" data-wow-delay=".4s">tentang</a>
				<div class="arrow animated infinite fadeInDown">
					<img src="<?= base_url("assets/image/download.png") ?>" width="30">
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- end header -->
