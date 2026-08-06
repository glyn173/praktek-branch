<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_tentang_website WHERE id = 1");
$tentang_website = mysqli_fetch_assoc($query);
$aktif = 'tentang_website'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profil Singkat Artikel - SMK Negeri 1 Wanareja</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SMK Negeri 1 Wanareja</span><br>
					<span class="visi">Mewujudkan SMK Berkarakter, Berkompeten dan Unggul.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Profil Singkat SMK Negeri 1 Wanareja
				</div>
				<div class="artikel">
					<?= $tentang_website['tentang_website'] ?>
				</div>

				<hr>

<div class="card mt-4">
    <div class="card-body">
        <h4>Profil Sekolah</h4>
        <p>
            SMK Negeri 1 Wanareja merupakan sekolah menengah kejuruan yang berkomitmen
            mencetak lulusan yang berkarakter, disiplin, dan siap menghadapi dunia kerja.
            Sekolah menyediakan berbagai program keahlian serta didukung oleh tenaga pendidik
            yang profesional dan lingkungan belajar yang nyaman.
        </p>

        <h5>Visi</h5>
        <p>
            Menjadi sekolah kejuruan yang unggul, berkarakter, dan berprestasi.
        </p>

        <h5>Misi</h5>
        <ul>
            <li>Meningkatkan kualitas pembelajaran yang inovatif.</li>
            <li>Membentuk peserta didik yang disiplin dan bertanggung jawab.</li>
            <li>Mengembangkan keterampilan sesuai kebutuhan dunia kerja.</li>
            <li>Menumbuhkan semangat berprestasi dan kerja sama.</li>
        </ul>
    </div>
</div>

			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white footer">
			2019 © Copyright by Fakhrul Fanani Nugroho.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>