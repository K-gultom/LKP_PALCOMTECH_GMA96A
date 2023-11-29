@extends('main')
@section('title')
    Beranda
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


<div class="container mt-5 gy-4 mb-5" >
  <div class="text-center mt-5 mb-5 ">
      <h3>Visi Kami</h3>
      <p>
        We are committed to providing quality education and focusing on the personal and professional development of our students, both in the Bachelor's and Diploma programs. For further information about these programs, please visit our website.
      </p>
</div>
  
  <div class="row">
      <div class="col-md-6">
          <img src="assets/images/gedung kampus 2.jpg  " class="d-block w-100 rounded-5" alt="">
      </div>
      <div class="col-md-6">
        <h4>Misi Kami</h4>
          <p>
            "Pioneering a smarter and connected digital future, by delivering innovative solutions that transform how people work, learn, and live."
          </p>
          <p>
            1. Limitless Innovation:
             We will continue to push the boundaries of technological innovation. We are determined to create solutions that not only solve current challenges but also create new opportunities and change how people interact with the digital world.
          </p>
          <p>
            2. Transforming How We Work, Learn, and Live:
             We will design technology that transforms how people work, learn, and live. We aim to help society address challenges and seize opportunities in the digital age.
          </p>
          <p>
             3. Global Connectivity:
             We are committed to creating technological solutions that enhance global connectivity. We want to build networks that enable people worldwide to connect and collaborate more effectively.
          </p>
          <a href="#" class="btn btn-outline-primary">See More</a>
      </div>
  </div>
</div>


    <!-- Fasilitas Kampus -->
 <div class="col-12">
    <div class="container mt-5 g-3">
        <div class="text-center mb-5 mt-5">
          <br> <br>
            <h3>Fasilitas Kampus</h3>
        </div>
        <div class="row g-4"> 
            <!-- g = untuk pemisah carousel saat layar kecil -->
            <div class="col-md-3 col-12">
              <img src="assets/images/perpustakaan.jpg " class="d-block w-100 rounded-5" alt="">
              <div class="text-center mt-3">
                <h4>Perpustakaan</h4>
              </div>
            </div>

            <div class="col-md-3 col-12">
              <img src="assets/images/perusahaan03.jpg" class="d-block w-100 rounded-5" alt="">
              <div class="text-center mt-3">
                <h4>Ruang Group</h4>
              </div>
            </div>

            <div class="col-md-3 col-12">
              <img src="assets/images/perusahaan04.jpg " class="d-block w-100 rounded-5" alt="">
              <div class="text-center mt-3">
                <h4>Lab Komputer</h4>
              </div>
          </div>

          <div class="col-md-3 col-12">
            <img src="assets/images/perusahaan05.jpg " class="d-block w-100 rounded-5" alt="">
            <div class="text-center mt-3">
              <h4>Ruang Meeting</h4>
            </div>
        </div>

        <div class="col-md-3 col-12">
          <img src="assets/images/perusahaan06.jpg " class="d-block w-100 rounded-5" alt="">
          <div class="text-center mt-3">
            <h4>Ruang Programming</h4>
          </div>
      </div>

      <div class="col-md-3 col-12">
        <img src="assets/images/perusahaan07.jpg " class="d-block w-100 rounded-5" alt="">
        <div class="text-center mt-3">
          <h4>Ruang Belajar</h4>
        </div>
    </div>

    <div class="col-md-3 col-12">
      <img src="assets/images/perusahaan02.jpg " class="d-block w-100 rounded-5" alt="">
      <div class="text-center mt-3">
        <h4>Ruang Diskusi Privat</h4>
      </div>
  </div>

  <div class="col-md-3 col-12">
    <img src="assets/images/perusahaan01.jpg " class="d-block w-100 rounded-5" alt="">
    <div class="text-center mt-3">
      <h4>Kelas</h4>
    </div>
</div>
      </div>  
  </div>
</div>

<br><br>

    <!--Program kami 1-->
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h3>Program Kami</h3>
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
                <p>
                    <h4><b>Program Sarjana</b></h4>
                </p>
                <p>
                  Program Sarjana di Universitas kami adalah pilihan pendidikan tinggi yang komprehensif dan mendalam, dirancang untuk memberikan pengetahuan, keterampilan, dan pemahaman yang mendalam dalam berbagai disiplin ilmu. Program Sarjana kami biasanya berlangsung selama 3-4 tahun, tergantung pada jurusan yang dipilih. Selama program ini, mahasiswa akan terlibat dalam berbagai mata kuliah inti, mata kuliah elektif, dan proyek penelitian atau magang, tergantung pada jurusan mereka. Program Sarjana di universitas kami bertujuan untuk mempersiapkan mahasiswa untuk memasuki dunia kerja atau melanjutkan ke program pascasarjana, serta mengembangkan keterampilan kritis, analitis, dan pemecahan masalah yang dibutuhkan untuk sukses dalam karir mereka.
                </p>
                <a href="#" class="btn btn-outline-primary">See More</a>
            </div>
        </div>
    </div>

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
                <p>
                    <h4><b>Program Diploma</b></h4>
                </p>
                <p>
                  Program Diploma di Universitas kami adalah pilihan pendidikan yang lebih pendek dan praktis yang berfokus pada pengembangan keterampilan khusus untuk memasuki dunia kerja dengan cepat. Program ini biasanya berlangsung selama 1-2 tahun dan menawarkan pelatihan yang intensif dalam berbagai bidang seperti teknik, ilmu komputer, manajemen perhotelan, dan banyak lagi. Mahasiswa dalam program Diploma akan mempelajari mata kuliah yang langsung terkait dengan pekerjaan yang ingin mereka tekuni, serta berpartisipasi dalam proyek-proyek praktis dan magang industri yang memberikan pengalaman kerja nyata. Program Diploma di universitas kami bertujuan untuk mempersiapkan lulusan untuk langsung masuk ke dunia kerja dengan keterampilan yang relevan dan dibutuhkan oleh industri.
                </p>
                <a href="#" class="btn btn-outline-primary">See More</a>
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

