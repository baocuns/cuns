<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Music</title>
  <!-- css -->
  <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/music_main.css" />
  <link rel="shortcut icon" href="public/uploads/images/music_img/logo.png" type="image/x-icon">
</head>

<body>
  <!-- nav -->
  <?php include './app/include/nav.php'; ?>

  <header>
    <p class="logo"></p>
    <i class="fa-solid fa-bars"></i>
  </header>
  <audio class="audio" autoplay></audio>

  <div class="btn__music">
    <i class="fa-solid fa-retweet reload"></i>
    <img src="public/uploads/images/music_img/btn-l.svg" class="btn left" />
    <img src="public/uploads/images/music_img/btn-play.svg" class="btn play" />
    <img src="public/uploads/images/music_img/btn-play-pause.svg" class="btn playPause" />
    <img src="public/uploads/images/music_img/btn-r.svg" class="btn right" />
    <i class="fa-solid fa-download download"></i>
  </div>

  <div trung="listMenu" class="menu close">
    <i class="fa-solid fa-xmark"></i>
    <div class="listSong">
      <h1 class="listSong__title">List Songs</h1>
      <div class="listSong__list">
      </div>
    </div>
    <div class="admin">
      <div class="info">
        <a href="https://www.facebook.com/Puti78/"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://m.me/Puti78/"><i class="fa-brands fa-facebook-messenger"></i></a>
        <a href="https://instagram.com/puti78"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@nguyenv.trung"><i class="fa-brands fa-tiktok"></i></a>
        <a href="https://www.youtube.com/TrungVN"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
  </div>


  <!-- js -->
  <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/music_main.js"></script>
  <script src="public/js/music_cursor.js"></script>
  <script src="public/js/music_kitfontawesome.js" crossorigin="anonymous"></script>
</body>

</html>