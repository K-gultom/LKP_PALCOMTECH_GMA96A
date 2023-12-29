@extends('main')
@section('title')
    Program
@endsection

@section('content')
    <style>
        .wave3{
          position: absolute;
          z-index: -10;
        }
        .bungkusFooter{
            background-color:#ddc290
        }
        .menuFooter{
          color: rgb(240, 239, 241);
        }
        .menuFooter:hover{
          color: blue;
        }
        .nav-link{
          color:#4d2f08;
        }
        .nav-link:hover{
          color: rgb(168, 134, 13);
        }
    </style>
<div class="p-5 text-center bg-image rounded-3" style="background-image:url('assets/images/download\ \(3\).jpg') ;"> 
    <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <div class="container ">
                    <div class="row align-items-center ">
                        <div class="col-md-10 ">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-tittle">GMA96A UNIVERSITY</h5>
                                    <p class="card-text">
                                        Welcome to our website profile !
                                    </p>
                                    <a href="#" class="btn btn-outline-primary">About This</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6">
                            <img src="assets/images/SERENITY.png" width="130%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="wave3"viewBox="0 0 1440 320"><path fill="#ddc290" fill-opacity="1" d="M0,32L40,53.3C80,75,160,117,240,128C320,139,400,117,480,122.7C560,128,640,160,720,144C800,128,880,64,960,53.3C1040,43,1120,85,1200,90.7C1280,96,1360,64,1400,48L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

 <br><br><br><br><br>

<!--Program kami 1-->
<div class="container mt-5">
            <div class="text-center mb-5">
                <h2>Program Kami</h2>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/images/perusahaan1.jpg" class="d-block w-100 rounded-5  " alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/images/perusahaan2.jpg" class="d-block w-100 rounded-5" alt="...">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center mb-4">
                <h3>Program Sarjana</h3>
              </div>
                    <p>
                      Program Sarjana di Universitas kami adalah pilihan pendidikan tinggi yang komprehensif dan mendalam, dirancang untuk memberikan pengetahuan, keterampilan, dan pemahaman yang mendalam dalam berbagai disiplin ilmu. Program Sarjana kami biasanya berlangsung selama 3-4 tahun, tergantung pada jurusan yang dipilih. Selama program ini, mahasiswa akan terlibat dalam berbagai mata kuliah inti, mata kuliah elektif, dan proyek penelitian atau magang, tergantung pada jurusan mereka. Program Sarjana di universitas kami bertujuan untuk mempersiapkan mahasiswa untuk memasuki dunia kerja atau melanjutkan ke program pascasarjana, serta mengembangkan keterampilan kritis, analitis, dan pemecahan masalah yang dibutuhkan untuk sukses dalam karir mereka.
                    </p>
                    <a href="#" class="btn btn-outline-primary">See More</a>
                </div>
            </div>
</div>

     <!-- Jurusan -->
     <div class="col-12">
      <div class="container mt-5 g-3">
          <div class="row g-4"> 
              <div class="col-md-4 ">
                <img src="assets/images/perpustakaan.jpg " class="d-block w-100 rounded-5" alt="">
              </div>
              <div class="col-md-8 ">
                <div class="text-center mt-3">
                  <h4>S1 Sistem Informasi</h4>
                  <p>
                    Lulusan Jurusan Sistem Informasi kami memiliki peluang karir yang luas, termasuk sebagai analis bisnis, pengembang perangkat lunak, administrator basis data, manajer TI, konsultan TI, dan berbagai peran lain dalam industri teknologi dan bisnis. Mereka berperan penting dalam membantu organisasi mencapai kesuksesan melalui teknologi informasi.
                    Jurusan Sistem Informasi di Universitas GMA96A adalah tempat bagi individu yang tertarik pada teknologi, bisnis, dan mengembangkan keterampilan yang sangat dicari dalam dunia kerja yang terus berubah.
                  </p>
                </div>
              </div>
        </div>  
    </div>
  </div>

  <div class="col-12">
    <div class="container mt-5 g-3">
        <div class="row g-4"> 
            <div class="col-md-4 ">
              <img src="assets/images/perusahaan01.jpg " class="d-block w-100 rounded-5" alt="">
            </div>
            <div class="col-md-8 ">
              <div class="text-center mt-3">
                <h4>S1 Teknik Komputer</h4>
                <p>
                  Jurusan Teknik Komputer di Universitas GMA96A adalah program pendidikan yang memungkinkan mahasiswa untuk memahami, merancang, dan mengembangkan teknologi komputer yang mendasari sistem komputer dan perangkat lunak yang kita gunakan sehari-hari. Program ini mencakup berbagai aspek teknologi komputer, mulai dari perangkat keras hingga perangkat lunak dan jaringan komputer.
                </p>
              </div>
            </div>
      </div>  
  </div>
</div>

<div class="col-12">
  <div class="container mt-5 g-3">
      <div class="row g-4"> 
          <div class="col-md-4 ">
            <img src="assets/images/perusahaan02.jpg " class="d-block w-100 rounded-5" alt="">
          </div>
          <div class="col-md-8 ">
            <div class="text-center mt-3">
              <h4>S1 Manajemen Bisnis</h4>
              <p>
                Jurusan Manajemen Bisnis di Universitas GMA96A adalah program pendidikan yang bertujuan untuk membekali mahasiswa dengan pengetahuan dan keterampilan yang diperlukan untuk mengelola dan mengembangkan organisasi secara efektif. Program ini mencakup berbagai aspek manajemen, termasuk perencanaan strategis, pengambilan keputusan, pemasaran, sumber daya manusia, dan manajemen keuangan.
              </p>
            </div>
          </div>
    </div>  
</div>
</div>

<br><br>

<!-- Program Kami 2 -->
<div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="assets/images/perusahaan2.jpg" class="d-block w-100 rounded-5  " alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/images/perusahaan1.jpg" class="d-block w-100 rounded-5" alt="...">
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text-center mb-4">
                    <h3>Program Diploma</h3>
                  </div>
                    <p>
                      Program Diploma di Universitas kami adalah pilihan pendidikan yang lebih pendek dan praktis yang berfokus pada pengembangan keterampilan khusus untuk memasuki dunia kerja dengan cepat. Program ini biasanya berlangsung selama 1-2 tahun dan menawarkan pelatihan yang intensif dalam berbagai bidang seperti teknik, ilmu komputer, manajemen perhotelan, dan banyak lagi. Mahasiswa dalam program Diploma akan mempelajari mata kuliah yang langsung terkait dengan pekerjaan yang ingin mereka tekuni, serta berpartisipasi dalam proyek-proyek praktis dan magang industri yang memberikan pengalaman kerja nyata. Program Diploma di universitas kami bertujuan untuk mempersiapkan lulusan untuk langsung masuk ke dunia kerja dengan keterampilan yang relevan dan dibutuhkan oleh industri.
                    </p>
                    <a href="#" class="btn btn-outline-primary">See More</a>
                </div>
            </div>

            <div class="col-12">
              <div class="container mt-5 g-3">
                  <div class="row g-4"> 
                      <div class="col-md-4 ">
                        <img src="assets/images/perusahaan03.jpg " class="d-block w-100 rounded-5" alt="">
                      </div>
                      <div class="col-md-8 ">
                        <div class="text-center mt-3">
                          <h4>D4 Manajemen Informatika</h4>
                          <p>
                            Lulusan Jurusan D4 Manajemen Informatika kami memiliki peluang karir yang luas, termasuk sebagai manajer TI, analis bisnis TI, administrator jaringan, konsultan TI, atau pengembang perangkat lunak. Mereka memiliki peran penting dalam mengintegrasikan teknologi informasi dengan proses bisnis dan menjaga keseimbangan yang baik antara kebutuhan teknis dan tujuan bisnis.
                          </p>
                        </div>
                      </div>
                </div>  
            </div>

            <div class="col-12">
              <div class="container mt-5 g-3">
                  <div class="row g-4"> 
                      <div class="col-md-4 ">
                        <img src="assets/images/perusahaan04.jpg " class="d-block w-100 rounded-5" alt="">
                      </div>
                      <div class="col-md-8 ">
                        <div class="text-center mt-3">
                          <h4>D4 Teknik Informatika</h4>
                          <p>
                            Jurusan D4 Teknik Informatika di Universitas GMA96A adalah program pendidikan yang berfokus pada pengembangan dan penerapan teknologi informasi. Program ini bertujuan untuk melatih mahasiswa dalam aspek teknis dan aplikasi praktis teknologi informasi, mempersiapkan mereka untuk berperan dalam pengembangan perangkat lunak, manajemen jaringan, dan pemecahan masalah teknis.
                          </p>
                        </div>
                      </div>
                </div>  
            </div>

            <div class="col-12">
              <div class="container mt-5 g-3">
                  <div class="row g-4"> 
                      <div class="col-md-4 ">
                        <img src="assets/images/perusahaan05.jpg " class="d-block w-100 rounded-5" alt="">
                      </div>
                      <div class="col-md-8 ">
                        <div class="text-center mt-3">
                          <h4>D4 Multimedia Digital</h4>
                          <p>
                            Lulusan Jurusan D4 Multimedia Digital kami memiliki peluang karir yang luas, termasuk sebagai desainer grafis, produser multimedia, penyunting video, pengembang permainan, dan spesialis animasi. Mereka memiliki peran penting dalam industri kreatif, periklanan, hiburan, dan teknologi.
                          </p>
                        </div>
                      </div>
                </div>  
            </div>
</div>
 <br>     


<!-- Kontak Kami -->
<div class="container">
        <div class="text-center mt-5 mb-5">
            <h3>Kontak Kami</h3> <br>
        </div>
        <div class="row gy-4">
            <!-- gy artinya gap vertical  -->
            <div class="col-md-3 col-sm-12">
                <div class="card" style="background-image: url('assets/images/download\ \(3\).jpg');">
                    <div class="card-body">
                    <img src="assets/images/logo situs.png" width="50%" alt="">
                    <h6 class="card-tittle text-dark">Temukan Kami di Website</h6>
                    <a href="#" class="btn btn-outline-success">Follow</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="card" style="background-image: url('assets/images/download\ \(3\).jpg');">
                    <div class="card-body">
                    <img src="assets/images/logo gmail.png" width="50%" alt="">
                    <h6 class="card-tittle text-dark">Temukan Saya di Gmail</h6>
                    <a href="#" class="btn btn-outline-success">Follow</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="card" style="background-image: url('assets/images/download\ \(3\).jpg');">
                    <div class="card-body">
                    <img src="assets/images/logo twitter.png" width="50%" alt="">
                    <h6 class="card-tittle text-dark">Temukan Kami di Twitter</h6>
                    <a href="#" class="btn btn-outline-success">Follow</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="card" style="background-image: url('assets/images/download\ \(3\).jpg');">
                    <div class="card-body">
                    <img src="assets/images/logo ig.png" width="65%" alt="">
                    <h6 class="card-tittle text-dark">Temukan Kami di Instagram</h6>
                    <a href="#" class="btn btn-outline-success">Follow</a>
                    </div>
                </div>
            </div>
        </div>
</div>
    
</div>

 
    <br>
    <br><br><br>
  <!-- Footer -->
 <div class="bungkusFooter overflow-hidden">
    <footer class="text-white mt-5">
        <div class="row gy-sm-4">
          <!-- Bagian Kiri -->
          <div class="col-12 col-md-4">
              <div class="row mx-5 ">
                <div class="col">
                  <h4><b>GMA96A University</b></h4>
                </div>
              </div>
              <div class="row mx-5">
                <div class="col">
                  <a class="text-decoration-none menuFooter" href="index.html">Home</a>
                  <a class="text-decoration-none menuFooter" href="program.html">Portofolio</a>
                  <a class="text-decoration-none menuFooter" href="aboutUs.html">About Us</a>
                </div>
              </div>
              <div class="row mx-5 my-3">
                <i>GMA96A&copy;2023</i>
              </div>
          </div>
          <!-- Bagian Tengah -->
          <div class="col-12 col-md-4 ">
              <div class="row gy-3 mx-5  mb-3">
                <div class="col-12">
                  <a href="#" class="text-decoration-none text-light"><i class="bi bi-geo-alt-fill"></i>&nbsp; Google Maps <br> &nbsp; &nbsp; JL.Jenderal Sudirman. No...,Palembang</a>
                  <!-- Boostrap-ICON-Pilih Icon-Copy di Icon Font -->
                  <!-- &nbsp; adalah untuk spasi -->
                </div>
                <div class="col-12">
                  <a href="#" class="text-decoration-none text-light"><i class="bi bi-telephone-fill"></i>&nbsp;+6285783646382</a>
                </div>
                <div class="col-12">
                  <a href="#" class="text-decoration-none text-light"><i class="bi bi-envelope"></i>&nbsp; gma96aUniversity@gmail.com </a>
                </div>
              </div>
          </div>
          <!-- Bagian Kanan -->
          <div class="col-12 col-md-4 ">
            <div class="row mx-5">
              <div class="col-12">
                <h4>About the University</h4>
              </div>
              <div class="col-12">
                <p>
                  We are committed to providing quality education and focusing on the personal and professional development of our students, both in the Bachelor's and Diploma programs. For further information about these programs, please visit our website.
                </p>
              </div>
              <div class="col-12 mt-1 mb-3">
                <a href=""><img class="mx-2" src="assets/images/logo situs.png" width="7%" alt=""></a>
                <a href=""><img class="mx-2" src="assets/images/logo twitter.png" width="10%" alt=""></a>
                <a href=""><img class="mx-2" src="assets/images/logo gmail.png" width="7%" alt=""></a>
                <a href=""><img class="mx-2" src="assets/images/logo ig.png" width="10%" alt=""></a>
               
              </div>
            </div>
          </div>
        </div>
    </footer>
 </div>
@endsection