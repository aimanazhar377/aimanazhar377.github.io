<!DOCTYPE html>
<html>
    <head>
        <title>Photo Gallery</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
		<link rel="stylesheet" href="Style/photo_gallery.css">
		<link rel="stylesheet" href="Style/lightbox.min.css">

		<script src="Javascript/lightbox-plus-jquery.min.js"></script>
	
    </head>
    <body>
        <nav>
			<label class="logo">AIMAN AZHAR</label>
			<ul>
				<li><a href="index.php">Personal Profile</a></li>
				<li><a href="photo_Gallery.php">Photo Gallery</a></li>
				<li><a href="about_us.php">About Us</a></li>
			</ul>
		</nav>	


		<div class="song">
			<h1>My Gallery</h1>
			<p>Song Title: Only Human by Jonas Brothers</p>
			<div class="song-contain">
				<br><audio autoplay controls style="position: center">
				<source src="Lagu/Only Human-Jonas Brothers.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
			</div>
		</div>


		<div class="container">
			<div class="gallery">
				<a href="Gambar/picture1.jpg" data-lightbox="mygallery"><img src="Gambar/picture1.jpg"></a>
					<div class="desc">Ini adalah setup wifi di rumah saya yang diletakkan di ruang tamu iaitu di tengah rumah supaya semua penjuru rumah mendapat signal</div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture2.jpg" data-lightbox="mygallery"><img src="Gambar/picture2.jpg"></a>
					<div class="desc"><p>Ini adalah Broadband Termination Unit(BTU), saya mendapat BTU baharu jenama Nokia berwarna hitam</p></div>
			</div>

			<div class="gallery">
			<a href="Gambar/picture3.jpg" data-lightbox="mygallery"><img src="Gambar/picture3.jpg"></a>
					<div class="desc"><p>Ini adalah router jenama Fiberhome. Router ini berkebolehan wifi 5 iaitu 802.11ac dan ianya dual band iaitu 2.4Ghz dan 5Ghz</p></div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture4.jpg" data-lightbox="mygallery"><img src="Gambar/picture4.jpg"></a>
					<div class="desc"><p>Ini adalah hasil speed test daripada website <a href="https://speedtest.tm.com.my/" target="_blank">speedtest.tm.com.my</a></p></div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture5.jpg" data-lightbox="mygallery"><img src="Gambar/picture5.jpg"></a>
					<div class="desc"><p>Ini adalah hasil speed test daripada website <a href="https://fast.com/" target="_blank">fast.com</a></p></div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture6.jpg" data-lightbox="mygallery"><img src="Gambar/picture6.jpg"></a>
					<div class="desc"><p>Ini adalah hasil speed test daripada website <a href="https://www.nperf.com/en/" target="_blank">nperf.com</a></p></div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture7.jpg" data-lightbox="mygallery"><img src="Gambar/picture7.jpg"></a>
					<div class="desc"><p>Ini adalah wifi adapter yang digunakan di PC iaitu TP-Link AX3000 TX50E. Tetapi tidak dapat fully utilize kerana router hanya wifi 5 sahaja</p></div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture8.jpg" data-lightbox="mygallery"><img src="Gambar/picture8.jpg"></a>
					<div class="desc"><p>Ini adalah Personal Computer(PC) yang digunakan oleh saya untuk menghadapi Online Distance Class(ODL)</p></div>
			</div>

			<div class="gallery">
				<a href="Gambar/picture9.jpg" data-lightbox="mygallery"><img src="Gambar/picture9.jpg"></a>
					<div class="desc"><p>Ini adalah tetikus yang digunakan oleh saya dalam mengklik apa-apa GUI pada skrin komputer dan ketika bermain game</p></div>
			</div>
		</div>

    </body>
</html>