<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>
	<!-- hapus buat normal -->
	<div class="col-12 col-md-12 bg-white text-center fixed-top shadow"><a href="https://axcora.com/getaxcoracms/" target="_blank"><img class="img-fluid" src="https://axcora.com/img/axcora%20design%20pembuatan%20website%20blogspot%20template.gif" /></a>
	<ul class="nav justify-content-center">
		<li class="nav-item"><a class="nav-link active" href="<?php get_site_url(); ?>">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="?id=how-to-order">How To Order</a></li>
		<li class="nav-item"><a class="nav-link" href="?id=contact-us">Contact</a></li>
	</ul>
</div>
<!--end hapus -->
	<div class="container-fluid">
		<!-- page content -->
<div class="row">
<div class="col-12 col-md-12 p-3 p-md-5">
				<h1 class="text-center"><strong><a href="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></strong></h1>
				<nav class="breadcrumb justify-content-center bg-white">
  <ol class="breadcrumb bg-danger p-2 text-light">
			 <li class="breadcrumb-item">
				<a class="text-light" href="<?php get_site_url(); ?>">Home</a> </li>
				<li class="breadcrumb-item">
				<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
				</li> 
				<li class="breadcrumb-item"><a class="text-light" href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a></li>
			</ol></nav>
			<p class="text-center"><time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
				</div>
				<div class="container-fluid">
				<?php get_page_content(); ?>
				</div>
</div></div>

<?php include('footer.inc.php'); ?>