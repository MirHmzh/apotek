<?php 
	session_start();
	require_once 'lib/function.php';
	$result = query("SELECT * FROM tblidentitas");
	$row = mysqli_fetch_array($result);
	$menu = 0;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Apotek Seger Waras</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="SHORTCUT ICON" type="image/x-icon" href="assets/logo1.ico" />
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>                                                 
	<script src="select2.min.js"></script>
 </head>
 <body>
 	<div id="wrapper">
 		<header>
 			<span class="btn"><a href="logout.php" class="logout">Logout</a></span>
 			<a href="index.php"><img src="assets/logo2.png"></a>
 			<h1>
 				<span class="sg"><?php echo $row[0]; ?></span>
 			</h1>
 			
 		</header>
 		<nav>
 		<?php 
 			if (isset($_SESSION['level'])) {
 				$level = $_SESSION['level'];
 		 ?>
 			<ul>
 			<?php 
 				if ($level == 1) {
 			 ?>
 				<li><a class="mother" href="index.php?menu=1&action=0">User</a></li>
 			<?php } ?>
 				<li class="transaksi">Transaksi
 					<ul>
 						<li class="child"><a href="index.php?menu=2">Pembelian Obat</a></li>
 						<li class="child"><a href="index.php?menu=3&rdr=0&act=0">Penjualan Obat</a></li>
 						<li class="child"><a href="index.php?menu=4">Laporan Penjualan</a></li>
 						<li class="child"><a href="index.php?menu=5">Laporan Pembelian</a></li>
 					</ul>
 				</li>
 				<li><a class="mother" href="index.php?menu=6&action=0">Obat</a></li>
 			</ul>
 			<?php } ?>
 		</nav>
 		<div class="container">
 			<?php 
 				if (!isset($_SESSION['level'])) {
 					header('location:login.php');
 				}else{
		 			if (isset($_GET['menu'])) {
		 				$menu = $_GET['menu'];
		 				if (isset($_GET['action'])) {
		 					$action = $_GET['action'];
				 		}
				 		if (isset($_GET['rdr'])) {
				 				$rdr = $_GET['rdr'];
				 			}
				 				if (isset($_GET['act'])) {
				 						$act = $_GET['act'];
				 					}	
				 			switch ($menu) {
				 				case '1':
				 					if ($action == 0 && $menu == 1) {
				 						require_once 'page/user/index.php';
				 					}elseif ($action == 1 && $menu == 1) {
				 						require_once 'page/user/insert.php';
				 					}elseif ($action == 2 && $menu == 1) {
				 						require_once 'page/user/delete.php';
				 					}elseif ($action == 3 && $menu == 1) {
				 						require_once 'page/user/update.php';
				 					}
				 					break;
				 				case '2':
				 					if ($menu == 2) {
				 					require_once 'page/transaksi_pembelian/index.php';
				 				}
				 					break;

				 				case '3':
				 					if ($act == 0 && $rdr == 0 && $menu == 3) {
									require_once 'page/transaksi_penjualan/index.php';
				 				}elseif ($act == 0 && $rdr == 1 && $menu == 3) {
				 					require_once 'page/transaksi_penjualan/checkout.php';
				 				}elseif ($act == 1 && $rdr == 0 && $menu == 3) {
				 					require_once 'page/transaksi_penjualan/delete.php';
				 				}
				 					break;

				 				case '4':
				 					if ($menu == 4) {
				 					require_once 'page/lap_penjualan/index.php';
				 				}
				 					break;

				 				case '5':
				 					if ($menu == 5) {
				 					require_once 'page/lap_pembelian/index.php';
				 				}
				 					break;

				 				case '6':
				 					if ($action == 0 && $menu == 6) {
				 						require_once 'page/obat/index.php';
				 					}elseif($action == 1 && $menu == 6){
				 						require_once 'page/obat/insert.php';
				 					}elseif($action == 2 && $menu == 6){
				 						require_once 'page/obat/delete.php';
				 					}elseif($action == 3 && $menu == 6){
				 						require_once 'page/obat/update.php';
				 					}
				 					break;
				 				case '7':
				 					if ($menu == 7) {
				 						require_once 'home.php';
				 					}
				 					break;
				 				default:
				 					# code...
				 					break;
				 			}
				 		
	 				}
	 			}
 			 ?>
 		</div>
 	<footer>
 			<div class="foot-container">
				<span>Email&nbsp&nbsp&nbsp : corn.row81@gmail.com</span><br>
				<span>Alamat &nbsp: Jl. Mandala IV No.418 Semambung, Gedangan</span><br>
				<span>Contact :  081232555232</span><br>
 			</div>
 		</footer>	
 	</div>
 	
 </body>
 </html>