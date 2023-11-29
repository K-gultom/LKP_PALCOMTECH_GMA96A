@extends('main')
@section('title')
    Tentang Kami
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
        <h3>Sejarah Universitas</h3>
        <p>
            Universitas GMA96A memiliki sejarah panjang dan berpengaruh dalam dunia pendidikan. Didirikan pada tahun 2023, universitas ini telah berkembang menjadi lembaga pendidikan terkemuka yang terus memainkan peran penting dalam membentuk masa depan generasi muda.
        </p>
  </div>
    
    <div class="row">
        <div class="col-md-6">
                <h4>Awal Mula</h4>
            <p>
                Universitas ini dimulai sebagai gagasan visioner sekelompok pendidik dan pemikir masyarakat yang berkomitmen untuk memberikan akses pendidikan berkualitas kepada individu dari berbagai latar belakang. Pada tahun [tahun pendirian], universitas ini secara resmi didirikan dengan tujuan utama menyediakan pendidikan tinggi yang berkualitas dan berfokus pada pengembangan akademik, karakter, dan keterampilan individu.
            </p>
                <h4>Pertumbuhan dan Perkembangan</h4>
            <p>
                Seiring berjalannya waktu, universitas kami terus tumbuh dan berkembang. Ini melibatkan perluasan kurikulum untuk mencakup berbagai program akademik, pembangunan fasilitas modern, dan peningkatan dalam kualitas pengajaran dan penelitian. Dalam beberapa dekade terakhir, universitas ini telah meraih prestasi yang mengesankan dalam berbagai bidang dan telah menjadi pusat penelitian dan pendidikan yang diakui secara internasional.
            </p>
            <a href="#" class="btn btn-outline-primary">See More</a>
            <!-- <img src="assets/images/gedung kampus 2.jpg  " class="d-block w-100 rounded-5" alt=""> -->
        </div>
        <div class="col-md-6">
            <img src="assets/images/gedung kampus.jpg  " class="d-block w-100 rounded-5" alt="">
            <!-- <p>
              abc
            </p>
            <a href="#" class="btn btn-outline-primary">See More</a> -->
        </div>
    </div>
</div>
<br>


 <div class="container mt-5 gy-4 mb-5" >
    <div class="text-center mt-5 mb-5 ">
        <h3>Visi Kami</h3>
        <p>
            We are committed to providing quality education and focusing on the personal and professional development of our students, both in the Bachelor's and Diploma programs. For further information about these programs, please visit our website.
          </p>
  </div>
    
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/toga1.jpg  " class="d-block w-100 rounded-5" alt="">
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <h4>Misi Kami</h4>
            </div>
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
<br>

<div class="container mt-5 gy-4 mb-5" >
    <div class="text-center mt-5 mb-5 ">
     <h3>Misi Masa Depan</h3>
  </div>
    
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/toga.jpg " class="d-block w-100 rounded-5" alt="">
        </div>
        <div class="col-md-6">
            <p>
                Sebagai universitas yang selalu menghadapi tantangan dan peluang baru, kami terus berusaha untuk menjadi pusat pembelajaran unggulan yang berfokus pada penelitian berkualitas dan pendidikan terbaik. Kami berkomitmen untuk menjembatani kesenjangan pendidikan, memajukan pengetahuan manusia, dan memberikan dampak positif pada masyarakat.
            </p>
            <p>
                Universitas GMA96A bangga akan warisan sejarahnya dan terus melanjutkan perjalanan pendidikan yang penuh inspirasi. Kami mengundang Anda untuk bergabung bersama kami dalam menciptakan masa depan yang lebih baik.
            </p>
            <a href="#" class="btn btn-outline-primary">See More</a>
        </div>
    </div>
</div>


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