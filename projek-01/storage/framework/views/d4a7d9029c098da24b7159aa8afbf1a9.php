<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/style.css'); ?>
    <title>Portofolio</title>
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav
      class="navbar fixed-top navbar-expand-lg navbar-dark shadow p-3"
      style="background-color: #000000"
    >
      <div class="container">
        <a class="navbar-brand" href="https://www.instagram.com/dirasetya_41/">
            <img src="<?php echo e(Vite::asset('resources/css/image/logo.jpg')); ?>" alt="logo" width="50" height="44" class="d-inline-block align-text">
            Dirga Eka Prasetya
          </a>
        <button
          class="navbar-toggler" 
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skill">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/routing')); ?>">Back Routing</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Jumbotron -->
    <section id="heading" style="background-color: #292929;padding-top:10rem;">
      <div class = "container">
        <div class="row text-center mb 5">
          <div class="col">
            <img
        src="<?php echo e(Vite::asset('resources/css/image/foto.jpg')); ?>"
        alt="Dirga Eka Prasetya"
        width="250"
        class="img-thumbnail rounded-circle"
      />
          </div>
        </div>
        <div class="row text-center mb 5">
          <div class="col">
            <h1 class="display-4" style="color: white">Dirga Eka Prasetya</h1>
          </div>
        </div>
        <div class="row text-center mb 5">
          <div class="col">
            <p class="lead" style="color: white">Student | Gamer</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#4e4e4e"
          fill-opacity="1"
          d="M0,192L20,181.3C40,171,80,149,120,128C160,107,200,85,240,64C280,43,320,21,360,42.7C400,64,440,128,480,144C520,160,560,128,600,117.3C640,107,680,117,720,149.3C760,181,800,235,840,229.3C880,224,920,160,960,144C1000,128,1040,160,1080,170.7C1120,181,1160,171,1200,181.3C1240,192,1280,224,1320,202.7C1360,181,1400,107,1420,69.3L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Jumbotron -->

    <!-- About me! -->
    <section id="about" style="background-color: #4e4e4e">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 style="color: #292929">About me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center fs-5">
            <p style="color: white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
              reiciendis ut consequatur corporis, ipsum in, iusto facilis ipsa
              nemo id doloremque dolores eum modi! Asperiores corporis,
              doloremque voluptatem vero iure nisi tenetur aliquam! Illum quasi
              sit possimus provident minima quis culpa suscipit enim iste ex.
              Eos ex neque, ad repudiandae doloremque atque maiores molestias
              similique nemo quo? Molestias corporis molestiae, laborum minus ab
              officia explicabo aliquid aliquam, repudiandae expedita at.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#777777"
          fill-opacity="1"
          d="M0,160L18.5,154.7C36.9,149,74,139,111,117.3C147.7,96,185,64,222,80C258.5,96,295,160,332,181.3C369.2,203,406,181,443,176C480,171,517,181,554,186.7C590.8,192,628,192,665,192C701.5,192,738,192,775,208C812.3,224,849,256,886,240C923.1,224,960,160,997,128C1033.8,96,1071,96,1108,90.7C1144.6,85,1182,75,1218,96C1255.4,117,1292,171,1329,197.3C1366.2,224,1403,224,1422,224L1440,224L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End About me! -->

    <!-- Skills -->
    <section id="skill">
        
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 style="color: #292929">Skills</h2>
          </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3 text-center">
            <div class="card" style="background-color: #a2a2a2">
              <img
                src="<?php echo e(Vite::asset('resources/css/image/html.jpg')); ?>"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">HTML</h5>
                <p class="card-text">
                  CSS (Cascading Style Sheets) adalah bahasa pem味付け website.
                  Ia mengatur hal visual seperti warna, font, layout, dan
                  animasi elemen HTML, membuat website terlihat menarik dan
                  terstruktur.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 text-center">
            <div class="card" style="background-color: #a2a2a2">
              <img
                src="<?php echo e(Vite::asset('resources/css/image/css.jpg')); ?>"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">CSS</h5>
                <p class="card-text">
                  CSS (Cascading Style Sheets) adalah bahasa untuk "mendandani"
                  website. Ia mengatur hal visual seperti warna, font, layout,
                  dan animasi elemen HTML, membuat website lebih menarik dan
                  terstruktur.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 text-center">
            <div class="card" style="background-color: #a2a2a2">
              <img
                src="<?php echo e(Vite::asset('resources/css/image/python.jpg')); ?>"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Python</h5>
                <p class="card-text">
                  Python adalah bahasa pemrograman populer dan mudah dipelajari.
                  Ia bisa digunakan untuk membangun berbagai aplikasi web,
                  menganalisis data, bahkan membuat kecerdasan buatan sederhana.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#d0d0d0" fill-opacity="1" d="M0,288L18.5,277.3C36.9,267,74,245,111,202.7C147.7,160,185,96,222,96C258.5,96,295,160,332,176C369.2,192,406,160,443,128C480,96,517,64,554,53.3C590.8,43,628,53,665,80C701.5,107,738,149,775,144C812.3,139,849,85,886,106.7C923.1,128,960,224,997,229.3C1033.8,235,1071,149,1108,117.3C1144.6,85,1182,107,1218,112C1255.4,117,1292,107,1329,101.3C1366.2,96,1403,96,1422,96L1440,96L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
    </section>
    <!-- End Skills -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 style="color: #292929;">Contat Person</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3">
                    <form>
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,288L18.5,277.3C36.9,267,74,245,111,202.7C147.7,160,185,96,222,96C258.5,96,295,160,332,176C369.2,192,406,160,443,128C480,96,517,64,554,53.3C590.8,43,628,53,665,80C701.5,107,738,149,775,144C812.3,139,849,85,886,106.7C923.1,128,960,224,997,229.3C1033.8,235,1071,149,1108,117.3C1144.6,85,1182,107,1218,112C1255.4,117,1292,107,1329,101.3C1366.2,96,1403,96,1422,96L1440,96L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
    </section>
    <!-- End Contact -->

    <!-- footer -->
    <footer class="bg-dark text-white text-center p-3">
        <p>Created by <a href="https://www.instagram.com/dirasetya_41/">Dirga Eka Prasetya</a></p>
    </footer>
    <!-- Akhir footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php /**PATH C:\Penyimpanan Utama\Documnets\XAMPP\htdocs\Laravel\projek-01\resources\views/webpersonal.blade.php ENDPATH**/ ?>