<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSIB 5 Latihan GIT</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
  </head>
  <body>
    <?php
        session_start();

        $sessionKey = 'angka';

        if (!isset($_SESSION[$sessionKey])) {
            $_SESSION[$sessionKey] = 0;
        }

        if (isset($_POST['increment'])) {
            $_SESSION[$sessionKey]++;
            header("Location: ".$_SERVER['PHP_SELF']);
        }

        $nama = "Suhermanto";
        $univ = "Universitas Jember";
        $jurusan = "Informatika";
        $bidang = "Full Stack Web Development";
        $mitra = "PT Gits Indonesia";
    ?>
    <div class="content">
        <div class="card d-flex shadow-lg rounded-5">
            <div class="card-header rounded-5" style="background-color: white; border: none;"><img src="/img/profil.jpg" class="rounded-circle mx-3 my-3" width="46" height="46" alt="">absgdhlf_</div>
            <form action="" method="post">
                <button type="submit" name="increment" class="btn rounded-circle" style="background-color: white; padding: 15px;"><img src="/img/heart.png" class="heart" width="50" height="50" alt=""></button>
            </form>
            <img src="/img/feed.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-title">
                    <div class="" style="display: flex; align-items: center;">
                        <img src="/img/profil.jpg" class="orang-1 rounded-circle" width="30" height="30" alt="">
                        <img src="/img/profil.jpg" class="orang-2 rounded-circle" width="30" height="30" alt="">
                        <img src="/img/profil.jpg" class="orang-3 rounded-circle" width="30" height="30" alt="">
                        <p style="margin-left: 35px; margin-top: 10px;">Disukai oleh <span style="font-weight: 700;"><?php echo $_SESSION['angka']; ?></span> orang</p>
                    </div>
                </div>
                <p class="card-text mt-2">Halo, Nama saya <span style="font-weight: 700;"><?php echo $nama ?></span>, Saya merupakan mahasiswa <span style="font-weight: 700;"><?php echo $jurusan ?></span> dari <span style="font-weight: 700;"><?php echo $univ ?></span>. Saya telah dipilih sebagai <span style="font-weight: 700;"><?php echo $bidang ?></span> di <span style="font-weight: 700;"><?php echo $mitra ?></span>. Hobi saya yaitu bermain <span style="font-weight: 700;">Game</span>, <span style="font-weight: 700;">Makan</span> (Prioritas) dan <span style="font-weight: 700;">Olahraga</span> (kalo inget). Rencana kedepannya mau menjadi Rektor kampus😂.
<br><span style="font-weight: 700;">#YOURPARTNERTOSCALEIMPACTWITHTECHNOLOGY</span></p>
                <div class="content-link mt-5 mb-3">
                    <a href="" class="instagram-icon mx-2"><i class="fa-brands fa-instagram fa-2xl" style="color: #2D2D39;"></i></a>
                    <a href="" class="facebook-icon mx-2"><i class="fa-brands fa-facebook fa-2xl" style="color: #2D2D39;"></i></a>
                    <a href="" class="linkedin-icon mx-2"><i class="fa-brands fa-linkedin-in fa-2xl" style="color: #2D2D39;"></i></a>
                    <a href="" class="github-icon mx-2"><i class="fa-brands fa-github fa-2xl" style="color: #2D2D39;"></i></a>
                    <a href="" class="github-icon mx-2"><i class="fa-brands fa-figma fa-2xl" style="color: #2D2D39;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>