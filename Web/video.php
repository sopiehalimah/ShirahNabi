<?php 
ob_start();
include "koneksi.php"; 

	if (isset($_GET['id'])) {
			$sql1 = $sh->prepare("SELECT *FROM kisah where id_kisah = '$_GET[id]'");
			$sql1->execute();
			$data = $sql1->fetch(PDO::FETCH_ASSOC);

		}elseif (isset($_GET['id'])) {
                        $sql2 = $sh->prepare("SELECT *FROM sahabat where id_sahabat = '$_GET[id]'");
			$sql2->execute();
			$data = $sql2->fetch(PDO::FETCH_ASSOC);

		}else
			{
			header("Location:error.php");
		}if($data===false)
			{
				header("Location:error.php");
		}else if(!isset($_GET['id'])){
		header("location:error.php");
			}
				
				
?>
<html>
<head>
<link rel = "icon" type="Image/png" href="f/sn.png">
</head>
<title>Siroh Nabi</title>
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css.css">
<body>
<div id="c">
<div id="c1">
	<div id="logo">
	<img src="f/sn.png">
	</div>
	<div id="a">
	<div id="s1"></div>
	<div id="s2"></div>
	<div id="s3"></div>
	<div id="s4"></div>
	<div id="s5"></div>
	<div id="s6"></div>
	<div id="s7"></div>
	<div id="s8"></div>
	<div id="s9"></div>
	<div id="s10"></div>
	</div>
	<div id="pencarian">
	<div id="cari">
	<form action="cari.php" method="Post" enctype="multipart/form-data">
		<input type="text" name="cari" placeholder="Search Story?.." required>
	</form>
	</div>
	<div id="ca"><i class="fa fa-search"></i></div>
	</div>
	<a href="index.php">
	<div id="home"><i class="fa fa-home"><span style="margin-left:10px;">Home</span></i></div>
	</a>
	<a href="app.php">
	<div id="app"><i class="fa fa-desktop"><span style="margin-left:10px;">Apps</span></i></div>
	</a> 
        <a href="kontak.php">
	<div id="guest"><i class="fa fa-tags"><span style="margin-left:10px;">Guest Books</span></i></div>
	</a>
	<a href="about.php">
	<div id="about"><i class="fa fa-info-circle"><span style="margin-left:10px;">About</span></i></div>
	</a>
	<a href="admin.php">
	<div id="admin"><i class="fa fa-tags"><span style="margin-left:10px;">Admin</span></i></div>
	</a>	
</div>  
<div id="c2">
	<div id="a">
	<div id="s1"></div>
	<div id="s2"></div>
	<div id="s3"></div>
	<div id="s4"></div>
	<div id="s5"></div>
	<div id="s6"></div>
	<div id="s7"></div>
	<div id="s8"></div>
	<div id="s9"></div>
	<div id="s10"></div>
	</div>
	<div id="ap1">
		<div id="ap2"></div>
		<div id="ap3">
			<div id="ap4">
				<a href="app.php?a=menu">
				<div id="ap5"><i class="fa fa-list"></i><br><span style="font-size:10pt;">List</span></div>
				</a>
				<a href="app.php?a=vid">
				<div id="ap6"><i class="fa fa-video-camera"></i><br><span style="font-size:10pt;">Videos</span></div>
				</a>
				<a href="app.php?a=quotes">
				<div id="ap7"><i class="fa fa-quote-left"></i><br><span style="font-size:10pt;">Quotes</span></div>
				</a>
			</div>
<div id="m4">

<div id="video">
<div id="title"><?php echo $data['judul']; ?></div>
<iframe width="900" height="500" src="<?php echo $data['video'];?>" autofullscreen></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


