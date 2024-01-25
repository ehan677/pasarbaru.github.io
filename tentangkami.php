<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sistem Informasi Pasar Baru</title>

    <link
      rel="shortcut icon"
      href="./assets/compiled/svg/ars.svg"
      type="image/x-icon"
    />
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    
  <link rel="stylesheet" href="./assets/compiled/css/app.css">
  <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
<?php include "partial/sidebar.php"?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sistem Informasi Pasar Baru</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                       <?php if (isset($_SESSION['status']) == 'login') { ?>
                        <li class="breadcrumb-item"><a href="dashboardadmin.php">Dashboard</a></li>
                        <?php } else { ?>
                          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                          <?php } ?>
                        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Tentang Pasar Baru</h4>
                    </div>
                    <div class="card-body">
						<p>Pilih Informasi Yang Ingin Diketahui Dengan Mengklik Salah Satu Judulnya</p>
                        <div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Sejarah Pasar Baru
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
									 <p>Pada awalnya, Bandung memiliki Pasar Ciguriang yang terletak di Jalan Kepatihan pada abad ke-19. Pasar ini dibakar oleh Munadah, seorang pengusaha yang sebelumnya bernama Lim Sang. Kejadian ini dipicu oleh emosinya karena dipenjara oleh asisten residen bernama Wilhem August Nagel. Munadah memiliki perilaku negatif seperti berjudi, berpesta, mabuk-mabukan, dan bermain perempuan, yang membuat warga muak hingga dia dijebloskan ke penjara.</p>

                    <p>Setelah kejadian itu, pedagang harus menjual barang dagangannya di berbagai lokasi sekitar alun-alun Bandung, Jalan Cibadak, Jl. ABC, Suniaraja, dan sekitarnya selama sekitar 50 tahun karena tidak ada pasar yang tetap. Baru pada tahun 1906, dibangun pasar semi permanen di Jalan Otto Iskandar Di Nata (Otista). Pasar ini kemudian diperluas pada tahun 1926 dan menjadi Pasar Baroeweg.</p>

                    <p>Pasar Baru mendapat namanya karena merupakan pengganti pasar sebelumnya. Pada tahun 1935, pasar ini diakui sebagai pasar terbersih dan teratur di Hindia Belanda. Jalan Tamim di daerah Pasar Baru menjadi pusat wisata belanja dengan harga terjangkau dan menjadi awal berkembangnya Factory Outlet di Bandung.</p>

                    <p>Para pedagang terkenal sebagai keluarga Saudagar Pasar Baru, mereka memiliki kekayaan yang besar dari berdagang kain dan barang-barang pasar. Beberapa nama jalan dan gang di sekitar Pasar Baru menggunakan nama-nama keturunan Saudagar tersebut. Mereka terkenal karena kebiasaan mereka saling mengawinkan sesama saudagar kaya untuk menjaga kekayaan dan usaha mereka.</p>

                    <p>Pasar Baru yang besar saat ini, dikenal sebagai Pasar Baru Trade Center, adalah hasil pembangunan tahun 2001 dan diresmikan pada 2003 oleh Wali Kota Bandung. Bangunan ini menjadi pusat perekonomian yang menjual berbagai jenis barang. Meskipun sebagian besar pedagang saat ini adalah pendatang, mereka masih memahami gambaran tentang bagaimana wujud Pasar Baru hampir satu abad yang lalu.</p>
                  </div>
								</div>
								</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Detail Lantai Di Pasar Baru
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										  <p>Luas total Pasar Baru Trade Center tercatat mencapai 10,4 hektare</p>
                    <p>Penjelasan Detail Tiap Lantai : </p>

                    <ul>
                      <li>Basement A1-D2: Tempat jualan grosiran, pusat oleh-oleh Bandung, dan kebutuhan sembako.</li>
                      <li>Lantai 1: Sprei, selimut, mukena termasuk kerudung, kain baik secara eceran maupun grosiran.</li>
                      <li>Lantai 2: Pusat tekstil, kain-kain meteran atau kiloan, beberapa toko pakaian, serta toko perhiasan.</li>
                      <li>Lantai 3: Pusat fashion untuk pria dan wanita. Terdapat juga layanan money changer dan pusat jasa pengiriman barang.</li>
                      <li>Lantai 4: ATM center dan pusat pakaian muslim, perlengkapan umrah, dan haji.</li>
                      <li>Lantai 5: Pusat aksesoris, tas, sepatu, pakaian muslim, kantor pos, dan cabang dari beberapa bank di Indonesia.</li>
                      <li>Lantai 6 & 7: Area hiburan, food court, dan beberapa toko sepatu dan tas.</li>
                      <li>Lantai 8: Tempat parkir tertinggi dan area masjid.</li>
                    </ul></div>
								</div>
							</div>
								<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Fasilitas Umum
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
									 <p>Fasilitas Yang Tersedia : </p>
                    <ul>
                      <li>Hotel atau Penginapan
                        <p>Anda tidak akan kesulitan mencari penginapan atau hotel di sekitar Pasar Baru Trade Center Bandung karena memang letaknya yang berada di pusat kota dekat masjid Agung Bandung. Dari mulai hotel berbintang satu hingga bintang lima bisa Anda temukan dengan harga bervariasi. Belum tentu hotel dengan bintang yang lebih kecil mematok harga lebih murah, karena Anda bisa mendapatkan penawaran harga diskon jika memesan hotel secara online. Anda bisa booking hotel secara online di Agoda (kartu kredit) atau PegiPegi (bisa dengan transfer) dengan memasukkan kata kunci: “pasar baru trade center“.</p>
                      </li>
                      <li>Rumah Makan
                        <p>Jika Anda lapar ketika berbelanja di sini, maka Anda tidak perlu keluar dari gedung Pasar Baru Trade Center Bandung karena Anda bisa langsung menuju lantai 6. Di sana terdapat food court dengan kios-kios yang menawarkan berbagai macam makanan khas Bandung.</p>
                      </li>
                      <li>Tempat parkir Dan Masjid
                        <p>Area parkir dan Masjid bisa Anda temukan di lantai 7 (paling atas). Dari lantai teratas gedung pasar baru trade center ini Anda bisa menikmati indahnya kota Bandung dari ketinggian.</p>
                      </li>
                      <li>Toilet
                        <p>Terdapat toilet yang dapat digunakan di tiap lantainya</p>
                      </li>
                    </ul></div>
								</div>
							</div>
								<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
									Akses Yang Dapat Digunakan Untuk Ke Pasar Baru
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Jika Anda menggunakan kendaraan umum, berikut rute yang bisa Anda gunakan :</p>
                    <ul>
                      <li>Dari Terminal Bis Leuwipanjang
                        <p>Naik angkot jurusan Kebon Kelapa dan berhenti di samping ITC, lalu dilanjutkan dengan naik angkot warna biru jurusan Kelapa – Sukajadi dan turun di pabrik Kopi Aroma, dari situ lokai Pasar Baru sudah dekat tinggal jalan lurus melewati jalan kecil untuk sampai di lokasi.</p>
                      </li>
                      <li>Dari Stasiun Hall Bandung
                        <p>Keluar melalui pintu utara, lalu naik angkot yang berwarna hijau muda jurusan Gede Bage – St. Hall dan turun di depan Pasar Baru.</p>
                      </li>
                      <li>Dari Bandara Husein Sastranegara
                        <p>Jika Anda datang dari luar kota Bandung dengan menggunakan pesawat, maka sangat disarankan untuk menggunakan taksi karena untuk menaiki angkot kita harus berjalan agak jauh. Untuk menggunakan jasa taksi sebaiknya kita tidak menggunakan argo tapi langsung bernegosiasi mengenai ongkos jalan ke Pasar Baru Trade Center ini.</p>
                      </li>
                    </ul></div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>



             <div class="col-12 col-md-6">
                 <div class="card">
          <div class="card-header">
            <h4>Foto Sederhana Pasar Baru</h4>
            <p>Berikut Ini Bisa Dilihat Gambaran Tentang Pasar Baru</p>
          </div>
          <div class="card-body">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/compiled/jpg/pasar1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/compiled/jpg/pasar2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/compiled/jpg/pasar3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/compiled/jpg/pasar4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/compiled/jpg/pasar5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/compiled/jpg/pasar6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./assets/compiled/jpg/pasar7.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
        </div>
            </div>
        </div>
    </section>
</div>

     <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2023 &copy; Tugas Akhir Web Programming 2</p>
            </div>
            <div class="float-end">
              <p>
                Dibuat Dengan
                <span class="text-danger"><i class="bi bi-fire"></i></span>
                by <a href="https://github.com/7fadillahIl">Ilham</a> &amp;
                <a href="https://www.instagram.com/rehan_alif_albani123/"
                  >Rehan</a
                >
              </p>
            </div>
          </div>
        </footer>
        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    
    <script src="assets/compiled/js/app.js"></script>
    

    
</body>

</html>