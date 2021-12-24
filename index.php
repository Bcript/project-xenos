<?php include($_SERVER["DOCUMENT_ROOT"]. "config/includes.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:title" id="MetaTitle" content="projectXenos (WIP)">
  <meta is="" property="og:description" content="projectXenos. Private server. Yes.">
  <meta property="og:image" content="/assets/img/blur.png/">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <link href="https://unpkg.com/@primer/css/dist/primer.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/all.css">
  <link rel="stylesheet" type="text/css" href="assets/css/duotone.css">
  <title>projectXenos (WIP)</title>
  <style>
    .bg-custom-1 {
      background: rgb(139,198,236);
background: linear-gradient(297deg, rgba(139,198,236) 10%, rgba(183,182,254) 38%, rgba(186,181,255,1) 54%, rgba(103,107,192) 100%); 
    }
    .cont-1 {
  position: relative;
  margin-top: 5%;
    }
    .hover:hover {
  backdrop-filter: brightness(85%);
}

  p {
    font-family: URW Gothic L Book;
  }
    @font-face {
  font-family: URW Gothic L Book;
  src: url("/assets/fonts/URW-Gothic-L/urw_gothic_l_book.ttf");
}
  @font-face {
    font-family: URW Gothic L Demi;
    src: url("/assets/fonts/URW-Gothic-L/urw_gothic_l_demi.ttf");
  }
  @font-face {
    font-family: Roboto Condensed Light;
    src: url("/assets/fonts/Roboto Condensed Light/RobotoCondensed-Light.ttf");
  }
  body {
    background: rgb(103,107,192);
background: linear-gradient(0deg, rgba(103,107,192,1) 14%, rgba(1,66,109,1) 35%, rgba(0,58,99,1) 43%, rgba(1,49,85,1) 54%, rgba(0,39,70,1) 65%, rgba(0,29,55,1) 72%, rgba(1,22,46,1) 81%)
}
  .index-1 {
    position: relative;
  margin-top: 30%;
  }
  html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 60px; 
  height: 100vh;

}
.fad {
  font-style: normal;
}

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 62px; 
  line-height: 60px; 
  background-color: #f5f5f5;
  transform: translateY(50px);
}
.jumbotron {
    background-color: transparent;
}
#particles-js canvas {
            display: block;
            vertical-align: bottom;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
            transition: opacity .8s ease, transform 1.4s ease
        }

        #particles-js {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0
        }


  </style>
</head>
<body>
<?= build_nav(); ?>

  <div id="particles-js" style="filter: blur(4px); -webkit-filter: blur(4px); z-index: -3;"></div>

  <div class="jumbotron" style="height: 100%; width: 100%; background-image: url('/assets/img/blur.png'); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;background-color: transparent;">
    <div class="container text-center cont-1" style="margin-top: -30px; ">
      <h1 class="h1" style="font-family: URW Gothic L Book; color: white;">project<b>Xenos</b></h3>
      <p class="f4" style="color: rgb(214, 214, 214);">an old ROBLOX private server designed to bring back 2012, 2014 and 2016</p>
    </div>
    <br/>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="Box">
          <div class="Box-header">
              <h2 class="Box-title" style="font-family: URW Gothic L Book; font-size: 18px;"><i class="fab fa-discord"></i><b> projectXenos</b> Discord</h2>
          </div>
          <div class="Box-body">
            <div class="card-body">
              <p class="card-text">Join our discord server for updates and more!</p>
              <a href="https://discord.gg/QJPtbTM" class="stretched-link">Discord</a>
            </div>
          </div>
        </div>
        </div>
      <div class="col-sm-6">
        <div class="Box">
          <div class="Box-header">
              <h2 class="Box-title" style="font-family: URW Gothic L Book; font-size: 18px;"><i class="fab fa-twitter"></i><b> projectXenos</b> Twitter</h2>
          </div>
          <div class="Box-body">
            <div class="card-body">
              <p class="card-text">Follow our twitter account for updates!</p>
              <a href="https://twitter.com/project_xenos" class="stretched-link">Twitter</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
 </div>

  

<?= build_footer(); ?>

    <script src="/assets/js/particles/particles.js"></script>
    <script src="/assets/js/app.js"></script>


</body>
</html>
