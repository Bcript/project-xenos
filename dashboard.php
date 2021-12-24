<?php require("config/functions.php") ?>
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="/assets/css/min.xe-frontend-main.css">
  <script src="/assets/js/min.xe-frontend-main.js"></script>
  <link rel="stylesheet" type="text/css" href="/assets/css/all.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/duotone.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/regular.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/light.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <style>



.pushable > .pusher {
  transition: transform 500ms ease, width 800ms ease;
}
  .ui.blue.button:hover{
    box-shadow: 0 0.5em 1em -0.125em rgba(25,100,157,.1), 0 0 0 1px rgba(25,100,157,.02);
  }
  .ui.blue.button:active{
    -webkit-box-shadow:inset 0px 0px 0px 1px #114269;
    -moz-box-shadow:inset 0px 0px 0px 1px #114269;
    box-shadow:inset 0px 0px 0px 1px #114269;
  }
    .bg-custom-1 {
      background: rgb(139,198,236);
background: linear-gradient(297deg, rgba(139,198,236) 10%, rgba(183,182,254) 38%, rgba(186,181,255,1) 54%, rgba(103,107,192) 100%); 
    }
    
    .timeline-comment {
    position: relative;
    color: #24292e;
    background-color: #fff;
    border: 1px solid #d1d5da;
    border-radius: 6px;
    }
    .cont-1 {
  position: relative;
  margin-top: 5%;
    }
    .hover:hover {
  backdrop-filter: brightness(85%);
}
.bg-custom-2{
  background: rgb(139,198,236);
background: linear-gradient(297deg, rgba(139,198,236) 10%, rgba(183,182,254) 38%, rgba(186,181,255,1) 54%, rgba(103,107,192) 100%);
filter: brightness(85%);

}
.xe-comment-avatar {
    float: left;
    border-radius: 6px;
}
.card:hover{
  box-shadow: 0 0.5em 1em -0.125em rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.02);
}

    @font-face {
  font-family: URW-Gothic-L;
  src: url('/assets/fonts/URW-Gothic-L/urw_gothic_l_book.ttf');
}
  @font-face {
    font-family: URW-Gothic-L2;
    src: url('/assets/fonts/URW-Gothic-L/urw_gothic_l_demi.ttf');
  }
  @font-face {
    font-family: Roboto Condensed Light;
    src: url('/assets/fonts/Roboto Condensed Light/RobotoCondensed-Light.ttf');
  }
  .index-1 {
    position: relative;
  margin-top: 30%;
  }
  html {
  position: relative;
  min-height: 100%;
}

.fad {
  font-style: normal;
}

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px; 
  line-height: 60px; 
  background-color: #f5f5f5;
}
.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: transparent;
    border-radius: 0.3rem;
}
@media screen and (min-width: 992px) {
  .xe-hidden-desktop {
    display: none !important;
  }
}
@media screen and (max-width: 767px) {
  .xe-hidden-mobile {
    display: none !important;
  }
}
@media screen and (min-width: 480px) {
  .xe-hidden {
    display: none !important;
  }
}
@media screen and (max-width: 480px) {
  .xe-character {
    display: none !important;
  }
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
<div class="pusher">

<?= build_nav(); ?>

         <div class="container">
         <div class="ui segment xe-hidden-mobile" style="border: none; margin-top: 100px; background-color: #F8FAFC; box-shadow: 0 0.5em 1em -0.125em rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.02);">
  <div class="container xe-hidden-mobile welcome" >
    <div class="jumbotron jumbotron-fluid" style="background-color: #F8FAFC;">
      <div class="container">
        <h2 class="h1 display-4" style="font-family: URW-Gothic-L2;">Welcome, taxii!</h2>
        <p class="lead">
          Welcome to Xenos! <br/>
          <button class="ui blue button" style="margin-top: 10px; border-radius: 4px;"><i class="fad fa-gamepad"></i>&nbsp;  Games</button>
          <button class="ui button" style="margin-top: 10px; border-radius: 4px;"><i class="fad fa-pencil-paintbrush"></i>&nbsp;  Edit Character</button>
        </p>
      </div>
    </div>
  
    <div class="float-right">
      <img class="xe-character" height="200px" width="auto" style="margin-top: -240px;" src="https://cdn.discordapp.com/attachments/723290063177252865/739798101984018482/Png.png"/>  
    </div>
    <div class="float-right">
      <img class="xe-hidden" height="120px" width="auto" style="margin-top: -450px;" src="https://cdn.discordapp.com/attachments/723290063177252865/739798101984018482/Png.png"/>  
    </div>
    <h2 id="type-scale" class="indexesm__Heading-sc-1ao7p5-40 heading__StyledHeading-jf9hph-0 indexesm__Heading-sc-1ao7p5-40 heading__StyledHeading-jf9hph-0 cExNwN heading__StyledH2-jf9hph-2 cUakGF">
      Recently Played Games
    </h2>
  <hr>
  <div class="row">
    <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
      <a href="" style="text-decoration: none;">
      <div class="card bg-light mb-2">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
          <h5 class="card-title" style="color: black;">Roblox HQ</h5>
          <p class="card-text text-muted" style="margin-top: -10px;">
            by: <b>taxii</b>
          </p>
          <p class="card-text" style="margin-top: -10px; color: black;">
            <i class="fal fa-users"></i>&nbsp; 2
          </p>
        </div>
      </div>
    </a>
    </div>
    <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
      <a href="" style="text-decoration: none;">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
          <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
            <h5 class="card-title" style="color: black;">Roblox HQ</h5>
            <p class="card-text text-muted" style="margin-top: -10px;">
              by: <b>taxii</b>
            </p>
            <p class="card-text" style="margin-top: -10px; color: black;">
              <i class="fal fa-users"></i>&nbsp; 2
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
      <a href="" style="text-decoration: none;">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
          <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
            <h5 class="card-title" style="color: black;">Roblox HQ</h5>
            <p class="card-text text-muted" style="margin-top: -10px;">
              by: <b>taxii</b>
            </p>
            <p class="card-text" style="margin-top: -10px; color: black;">
              <i class="fal fa-users"></i>&nbsp; 2
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
      <a href="" style="text-decoration: none;">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
          <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
            <h5 class="card-title" style="color: black;">Roblox HQ</h5>
            <p class="card-text text-muted" style="margin-top: -10px;">
              by: <b>taxii</b>
            </p>
            <p class="card-text" style="margin-top: -10px; color: black;">
              <i class="fal fa-users"></i>&nbsp; 2
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
      <a href="" style="text-decoration: none;">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
          <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
            <h5 class="card-title" style="color: black;">Roblox HQ</h5>
            <p class="card-text text-muted" style="margin-top: -10px;">
              by: <b>taxii</b>
            </p>
            <p class="card-text" style="margin-top: -10px; color: black;">
              <i class="fal fa-users"></i>&nbsp; 2
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <h2 id="type-scale" class="indexesm__Heading-sc-1ao7p5-40 heading__StyledHeading-jf9hph-0 indexesm__Heading-sc-1ao7p5-40 heading__StyledHeading-jf9hph-0 cExNwN heading__StyledH2-jf9hph-2 cUakGF">
    Popular Games
  </h2>
<hr>
<div class="row">
  <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
    <a href="" style="text-decoration: none;">
    <div class="card bg-light mb-2">
      <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
      <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
        <h5 class="card-title" style="color: black;">Roblox HQ</h5>
        <p class="card-text text-muted" style="margin-top: -10px;">
          by: <b>taxii</b>
        </p>
        <p class="card-text" style="margin-top: -10px; color: black;">
          <i class="fal fa-users"></i>&nbsp; 2
        </p>
      </div>
    </div>
  </a>
  </div>
  <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
    <a href="" style="text-decoration: none;">
      <div class="card bg-light mb-3">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
          <h5 class="card-title" style="color: black;">Roblox HQ</h5>
          <p class="card-text text-muted" style="margin-top: -10px;">
            by: <b>taxii</b>
          </p>
          <p class="card-text" style="margin-top: -10px; color: black;">
            <i class="fal fa-users"></i>&nbsp; 2
          </p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
    <a href="" style="text-decoration: none;">
      <div class="card bg-light mb-3">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
          <h5 class="card-title" style="color: black;">Roblox HQ</h5>
          <p class="card-text text-muted" style="margin-top: -10px;">
            by: <b>taxii</b>
          </p>
          <p class="card-text" style="margin-top: -10px; color: black;">
            <i class="fal fa-users"></i>&nbsp; 2
          </p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
    <a href="" style="text-decoration: none;">
      <div class="card bg-light mb-3">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
          <h5 class="card-title" style="color: black;">Roblox HQ</h5>
          <p class="card-text text-muted" style="margin-top: -10px;">
            by: <b>taxii</b>
          </p>
          <p class="card-text" style="margin-top: -10px; color: black;">
            <i class="fal fa-users"></i>&nbsp; 2
          </p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-sm" style="margin-bottom: 15px; padding-right: 1px;">
    <a href="" style="text-decoration: none;">
      <div class="card bg-light mb-3">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
          <h5 class="card-title" style="color: black;">Roblox HQ</h5>
          <p class="card-text text-muted" style="margin-top: -10px;">
            by: <b>taxii</b>
          </p>
          <p class="card-text" style="margin-top: -10px; color: black;">
            <i class="fal fa-users"></i>&nbsp; 2
          </p>
        </div>
      </div>
    </a>
  </div>
</div>


</div>
 
</div>
 

  <div class="xe-hidden-desktop" style=" ">
    <div class="jumbotron jumbotron-fluid bg-white">
      <div class="container">
        <h2 class="h1 display-4" style="font-family: URW-Gothic-L2;">Welcome, taxii!</h2>
        <p class="lead">
          Welcome to Xenos! <br/><br/>
          <button class="btn btn-primary mr-2 xe-block" style="border-radius: 4px;"><i class="fad fa-gamepad"></i>&nbsp;  Games</button>
          <button class="btn btn-light mr-2 xe-block" style="border-radius: 4px;"><i class="fad fa-pencil-paintbrush"></i>&nbsp;  Edit Character</button>
        </p>
      </div>
    </div>
  
    <div class="float-right">
      <img class="xe-character" height="200px" width="auto" style="margin-top: -240px;" src="https://cdn.discordapp.com/attachments/723290063177252865/739798101984018482/Png.png"/>  
    </div>
    <div class="float-right">
      <img class="xe-hidden" height="120px" width="auto" style="margin-top: -450px;" src="https://cdn.discordapp.com/attachments/723290063177252865/739798101984018482/Png.png"/>  
    </div>
    <h2 id="type-scale" style="margin-left: 20px;" class="indexesm__Heading-sc-1ao7p5-40 heading__StyledHeading-jf9hph-0 indexesm__Heading-sc-1ao7p5-40 heading__StyledHeading-jf9hph-0 cExNwN heading__StyledH2-jf9hph-2 cUakGF">
      Recently Played Games
    </h2>
  <hr>
  
  <div class="container">
    <div class="row">
      <div class="col-sm" style="margin-bottom: 15px;">
        <a href="" style="text-decoration: none;">
        <div class="card bg-light mb-2">
          <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
          <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
            <h5 class="card-title" style="color: black;">Roblox HQ</h5>
            <p class="card-text text-muted" style="margin-top: -10px;">
              by: <b>taxii</b>
            </p>
            <p class="card-text" style="margin-top: -10px; color: black;">
              <i class="fal fa-users"></i>&nbsp; 2
            </p>
          </div>
        </div>
      </a>
      </div>
      <div class="col-sm">
        <a href="" style="text-decoration: none;">
          <div class="card bg-light mb-3">
            <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
            <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
              <h5 class="card-title" style="color: black;">Roblox HQ</h5>
              <p class="card-text text-muted" style="margin-top: -10px;">
                by: <b>taxii</b>
              </p>
              <p class="card-text" style="margin-top: -10px; color: black;">
                <i class="fal fa-users"></i>&nbsp; 2
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm">
        <a href="" style="text-decoration: none;">
          <div class="card bg-light mb-3">
            <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17496f51469%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17496f51469%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
            <div class="card-body" style="padding-left: 15px; padding-right: 15px; padding-top: 12px; padding-bottom: 12px;">
              <h5 class="card-title" style="color: black;">Roblox HQ</h5>
              <p class="card-text text-muted" style="margin-top: -10px;">
                by: <b>taxii</b>
              </p>
              <p class="card-text" style="margin-top: -10px; color: black;">
                <i class="fal fa-users"></i>&nbsp; 2
              </p>
              
            </div>
          </div>
        </a>
      
      </div>
    </div>
  </div>
  </div>
  </div>

  <?= build_footer(); ?>
</div>

<script> 
$('.ui.sidebar')
  .sidebar('attach events', '.q-flex .item.sidebar')
;
</script>
<script>
$('.ui.dropdown')
  .dropdown()
;
</script>


    <script src="/assets/js/particles/particles.js"></script>
    <script src="/assets/js/app.js"></script>

</body>
</html>
