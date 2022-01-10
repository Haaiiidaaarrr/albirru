<?php
session_start();
include 'dbconnect.php';

$idproduk = $_GET['idproduk'];

if(isset($_POST['addprod'])){
	if(!isset($_SESSION['log']))
		{	
			header('location:login.php');
		} else {
				$ui = $_SESSION['id'];
				$cek = mysqli_query($conn,"select * from cart where userid='$ui' and status='Cart'");
				$liat = mysqli_num_rows($cek);
				$f = mysqli_fetch_array($cek);
				$orid = $f['orderid'];
				
				//kalo ternyata udeh ada order id nya
				if($liat>0){
							
							//cek barang serupa
							$cekbrg = mysqli_query($conn,"select * from detailorder where idproduk='$idproduk' and orderid='$orid'");
							$liatlg = mysqli_num_rows($cekbrg);
							$brpbanyak = mysqli_fetch_array($cekbrg);
							$jmlh = $brpbanyak['qty'];
							
							//kalo ternyata barangnya ud ada
							if($liatlg>0){
								$i=1;
								$baru = $jmlh + $i;
								
								$updateaja = mysqli_query($conn,"update detailorder set qty='$baru' where orderid='$orid' and idproduk='$idproduk'");
								
								if($updateaja){
									echo " <div class='alert alert-success'>
								Barang sudah pernah dimasukkan ke keranjang, jumlah akan ditambahkan
							  </div>
							  <meta http-equiv='refresh' content='1; url= product.php?idproduk=".$idproduk."'/>";
								} else {
									echo "<div class='alert alert-warning'>
								Gagal menambahkan ke keranjang
							  </div>
							  <meta http-equiv='refresh' content='1; url= product.php?idproduk=".$idproduk."'/>";
								}
								
							} else {
							
							$tambahdata = mysqli_query($conn,"insert into detailorder (orderid,idproduk,qty) values('$orid','$idproduk','1')");
							if ($tambahdata){
							echo " <div class='alert alert-success'>
								Berhasil menambahkan ke keranjang
							  </div>
							<meta http-equiv='refresh' content='1; url= product.php?idproduk=".$idproduk."'/>  ";
							} else { echo "<div class='alert alert-warning'>
								Gagal menambahkan ke keranjang
							  </div>
							 <meta http-equiv='refresh' content='1; url= product.php?idproduk=".$idproduk."'/> ";
							}
							};
				} else {
					
					//kalo belom ada order id nya
						$oi = crypt(rand(22,999),time());
						
						$bikincart = mysqli_query($conn,"insert into cart (orderid, userid) values('$oi','$ui')");
						
						if($bikincart){
							$tambahuser = mysqli_query($conn,"insert into detailorder (orderid,idproduk,qty) values('$oi','$idproduk','1')");
							if ($tambahuser){
							echo " <div class='alert alert-success'>
								Berhasil menambahkan ke keranjang
							  </div>
							<meta http-equiv='refresh' content='1; url= product.php?idproduk=".$idproduk."'/>  ";
							} else { echo "<div class='alert alert-warning'>
								Gagal menambahkan ke keranjang
							  </div>
							 <meta http-equiv='refresh' content='1; url= product.php?idproduk=".$idproduk."'/> ";
							}
						} else {
							echo "gagal bikin cart";
						}
				}
		}
};
?>

<!DOCTYPE html>
<html>
<head>
<title>Al-Birru Collection - Produk</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Al-Birru Collection, Richard's Lab" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>DAPATKAN PENAWARAN MENARIK KHUSUS HARI INI, BELANJA SEKARANG!</p>
			</div>
			<div class="agile-login">
				<ul>
				<?php
				if(!isset($_SESSION['log'])){
					echo '
					<li><a href="registered.php"> Daftar</a></li>
					<li><a href="login.php">Masuk</a></li>
					<li><a href="../index.php">Back to Home</a></li>
					';
				} else {
					
					if($_SESSION['role']=='Member'){
					echo '
					<li style="color:white">Halo, '.$_SESSION["name"].'
					<li><a href="logout.php">Keluar?</a></li>
					<li><a href="../index.php">Back to Home</a></li>
					';
					} else {
					echo '
					<li style="color:white">Halo, '.$_SESSION["name"].'
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Keluar?</a></li>
					<li><a href="../index.php">Back to Home</a></li>
					';
					};
					
				}
				?>
					
				</ul>
			</div>
			<div class="product_list_header">  
					<a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					 </a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami : +62-8562-2280-120</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Al-Birru</a></h1>
			</div>
		<div class="w3l_search">
			<form action="search.php" method="post">
				<input type="search" name="Search" placeholder="Cari produk...">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori Produk<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Kategori</h6>
														
														<?php 
														$kat=mysqli_query($conn,"SELECT * from kategori order by idkategori ASC");
														while($p=mysqli_fetch_array($kat)){

															?>
														<li><a href="kategori.php?idkategori=<?php echo $p['idkategori'] ?>"><?php echo $p['namakategori'] ?></a></li>
																				
														<?php
																	}
														?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li><a href="cart.php">Keranjang Saya</a></li>
									<li><a href="konfirmasi.php">Daftar Order</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active"><?php 
				$p = mysqli_fetch_array(mysqli_query($conn,"Select * from produk where idproduk='$idproduk'"));
				echo $p['namaproduk'];
				?></li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<ul>
						<li>
						<img id="example" src="<?php echo $p['gambar']?>" alt=" " class="img-responsive">
						</li>
						<li>
						<img id="example" src="<?php echo $p['gambar2']?>" alt=" " class="img-responsive">
						</li>
						
					</ul>
				
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2><?php echo $p['namaproduk'] ?></h2>
					<div class="rating1">
						<span class="starRating">
							<?php
								$bintang = '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
								$rate = $p['rate'];
								
								for($n=1;$n<=$rate;$n++){
								echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
								};
								?>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Deskripsi :</h4>
						<p><?php echo $p['deskripsi'] ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">Rp<?php echo number_format($p['hargaafter']) ?> <span>Rp<?php echo number_format($p['hargabefore']) ?></span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="idprod" value="<?php echo $idproduk ?>">
									<input type="submit" name="addprod" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<!-- //footer -->
<div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-4 w3_footer_grid">
                    <h3>Hubungi Kami</h3>
                    
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Setiawan Budi Santoso</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="#">albirrubursa@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62-8562-2280-120</li>
                    </ul>
                </div>
				<div class="col-md-4 w3_footer_grid" >
                    <h3>Alamat Kami</h3>
					<iframe   
                class="right"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506230.4375118843!2d110.41830168660627!3d-7.583111027163449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3d4f3237866b%3A0x7ada580d59e0c4c7!2sAl-Birru%20Busana%20Muslim!5e0!3m2!1sid!2sid!4v1635747554916!5m2!1sid!2sid"
                width="100%"
                height="70%"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        
        <div class="footer-copy">
            
            <div class="container">
                <p> © Created By Al-birru | © 2021 All rights reserved.</p>
        </div>
        </div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="https://www.instagram.com/albirru_produsen_gamis/" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="https://wa.me/6285642280120" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/albirru.gamis" class="agile_twitter"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>