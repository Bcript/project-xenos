<?php require($_SERVER["DOCUMENT_ROOT"] . "config/includes.php") ?>
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

@font-face {
	font-family: Actief Grotesque;
	font-style: normal;
	font-weight: 400;
	src: url(/assets/fonts/ActiefGrotesque_W_Rg-1f437876.woff) format("woff")
}
@font-face {
	font-family: Roboto Condensed;
	font-style: normal;
	font-weight: 400;
	src: url(/assets/fonts/Roboto Condendsed/RobotoCondensed-Regular.ttf) format("ttf")
}
@font-face {
	font-family: Roboto Condensed;
	font-style: normal;
	font-weight: 500;
	src: url(/assets/fonts/Roboto Condendsed/RobotoCondensed-Bold.ttf) format("ttf")
}
@font-face {
	font-family: Actief Grotesque;
	font-style: normal;
	font-weight: 500;
	src: url(/assets/fonts/ActiefGrotesque_W_Md-293e86f0.woff) format("woff")
}

@font-face {
	font-family: Actief Grotesque;
	font-style: normal;
	font-weight: 700;
	src: url(/assets/fonts/ActiefGrotesque_W_Bd-1bdd99f9.woff) format("woff")
}

@font-face {
	font-family: FreightSans Pro Medium;
	font-style: normal;
	font-weight: 400;
	src: url(/assets/fonts/FreightSans-Pro-Medium-1243d73c.woff) format("woff")
}

@font-face {
	font-family: FreightSans Pro Semibold;
	font-style: normal;
	font-weight: 400;
	src: url(/assets/font/FreightSans-Pro-Semibold-b548f89b.woff) format("woff")
}
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
  font-family: URW Gothic L Book;
  src: url('/assets/fonts/URW-Gothic-L/urw_gothic_l_book.ttf');
}
  @font-face {
    font-family: URW Gothic L Demi;
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
<div class="pusher" style="background-color: #F8FAFC;">

<?= build_nav(); ?>

         <div class="container">
    <div class="ui segment" style="margin-top: 100px;">
<div class="ui segment" style="background: url('/assets/img/users-solid.svg') no-repeat; opacity: 0.2; box-shadow: none; border: none;">
<br><br><br>
</div>
<h1 class="title" style="margin-top: -85px; font-family: 'URW Gothic L Demi'; margin-left: 50px; color: black;">
                Community Guidelines
    </h1>
    <h3 class="subtitle" style="margin-top: -16px; margin-left: 55px; color: #4a4a4a; font-weight: 400; font-family: Actief Grotesque;">
                Here are a few things you should know before creating a thread...
    </h3>
    <br/>
    <p style="margin-top: -7px; font-family: Roboto Condensed; font-weight: 500; font-size: 16px;"><b>1.</b> Drama is forbidden. This means if you participate, fuel or cause ANY drama you will be muted.</p>
    <p style="margin-top: -12px; font-family: Roboto Condensed; font-weight: 500; font-size: 16px;"><b>2.</b> Listen to the moderators and staff. They are there to help you out!</p>
    <p style="margin-top: -12px; font-family: Roboto Condensed; font-weight: 500; font-size: 16px;"><b>3.</b> Have common sense</p>
    <p style="margin-top: -12px; font-family: Roboto Condensed; font-weight: 500; font-size: 16px;"><b>4.</b> Anything derogatory such as slurs or excessive toxicity is not allowed.</p>
</div>

    <h4 class="ui top attached block header" style="font-family: Actief Grotesque; font-weight: 400; font-size: 16px; border-color: #dee0e1!important; margin-top: 20px; border-bottom: 1px solid rgba(0, 0, 0, 0.125); background-color: white;">
    projectXenos 
  </h4>
  <table class="ui unstackable table" style="border-top: none; border-bottom: none; border-top-right-radius: 0px; border-top-left-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 0px; margin-bottom: 0px;">
  <thead>
    <tr>
      <th style="border-top-left-radius: 0px;">Name</th>
      <th class="right aligned" style="border-top-right-radius: 0px;">Last Post &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  </table>
  <div class="ui bottom attached segment" style="border-color: #ededed!important; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
  <a href="#">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">Announcements <i class="fas fa-lock" style="color: #616161;"></i></p> 
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">Important announcements</p>        
</a>
<a href="#2">
        <div style="float: right; margin-top: -42px;">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">Very important (must rea...</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">by <b>taxii</b> &#8212; 2 minutes ago </p>
        </div>
        </a>
  </div>
  <div class="ui bottom attached segment" style="border-color: #ededed!important; margin-top: -14px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
  <a href="#">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">All things Xenos!</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">Discuss about anything related to Xenos!</p>
        </a>
        <a href="#2">
        <div style="float: right; margin-top: -42px;">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">Who wants 2 play xenos ...</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">by <b>taxii</b> &#8212; 2 minutes ago </p>
        </div>
        </a>

  </div>
  <div class="ui bottom attached segment" style="border-color: #ededed!important; margin-top: -14px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
  <a href="#">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">Help</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">Ask others for help for anything related to Xenos.</p>
</a>
<a href="#2">
<div style="float: right; margin-top: -42px;">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">Help me!!! I will die!!!!!!!!!!!!!</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">by <b>taxii</b> &#8212; 2 minutes ago </p>
        </div>
        </a>
  </div>
  <div class="ui bottom attached segment" style="border-color: #ededed!important; margin-top: -14px;">
  <a href="#">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">Off-Topic</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">Talk about anything unrelated to Xenos</p>
</a>
<a href="#2">
<div style="float: right; margin-top: -42px;">
        <p style="font-family: Roboto Condensed; font-weight: 500; font-size: 16px; transform: scale(1, 1.2); color: black;">AAAAAAAAAAAAAAAAAA</p>
        <p style="font-family: Actief Grotesque; font-weight: 400; font-size: 14px; color: #616161; margin-top: -15px;">by <b>taxii</b> &#8212; 2 minutes ago </p>
        </div>
        </a>
  </div>
  </div>
  </div>
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
