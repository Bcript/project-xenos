<?php require($_SERVER["DOCUMENT_ROOT"]. "config/includes.php"); ?>
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
        a {
    color: #363738;
    text-decoration: none;
}
  </style>
</head>
<body>
<div class="pusher">

<?= build_nav(); ?>

<div class="container">
     <div style="margin-top: 130px;">
       <div class="row">
        <div class="col-md-3">
         <div style="font-size: 20px; font-weight: 600; margin-bottom: 3px;">Catalog</div>
         <div style="font-size: 14px; font-weight: 500; margin-bottom: 10px;">Browse items & so much more.</div>
         <style>
          .nav-pills .nav-link {
            color: #2F2F2F !important;
          }
          .nav-pills{
            margin-top: 3px;
          }
          .nav-pills:hover{
            background-color: rgba(107, 111, 195, 0.84) !important;
            color: white;
            border-radius: 4px;
            transition: 0.3s;
          }
          .nav-pills-active {
            color: #FFFFFF !important;
            background-color: #6b6fc3 !important;
            border-radius: 4px;
          }
         </style>
         <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a href="" class="nav-link nav-pills-active" style="color: black;">Recent</a>
          <a href="" class="nav-link nav-pills">Hats</a>
          <a href="" class="nav-link nav-pills">Faces</a>
          <a href="" class="nav-link nav-pills">Shirts</a>
          <a href="" class="nav-link nav-pills">Pants</a>
          <a href="" class="nav-link nav-pills">Tools</a>
          <a href="" class="nav-link nav-pills">Models</a>
         </div>
        </div>
        <div class="col-md-9">
         <div class="row" style="margin-bottom: 10px;">
         <div class="col-6 text-left">
         <div style="font-size: 20px; font-weight: 600; margin-bottom: 3px;">Recent</div>
         <div style="font-size: 14px; font-weight: 500; margin-bottom: 10px;">These are recent hats, created by the team.</div>
         </div>
         <div class="col-6 text-right">
           <div class="ui selection dropdown">
             <input type="hidden" name="gender">
             <i class="dropdown icon"></i>
             <div class="default text">Advanced sorting</div>
             <div class="menu">
               <div class="item" data-value="1">Best selling</div>
               <div class="item" data-value="0">Price (Low to high)</div>
               <div class="item" data-value="0">Price (High to low)</div>
             </div>
           </div>
         </div>
         </div>
         <div class="row">
          <div class="col-md-3">
            <div class="card text-center" style="margin-bottom: 6px;">
            <span class="badge badge-success" style="float: left;margin-left: 70px;"><i style="font-size: 10px;" class="fas fa-star"></i> Limited</span>
            <span class="badge badge-primary" style="float: right; margin-left: 70px; background-color: #6b6fc3 !important;"><i class="fad fa-check" style="font-size: 10px;"></i> Owned</span>
            <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRib4x3IHAEPAiY2HJzdJVikVaBL9xX7CtgsA&usqp=CAU" class="img-fluid">
            </div>
            </div>
            <div style="font-size: 15px; font-weight: 600; margin-bottom: 1px;">Item name here</div>
            <div style="font-size: 13px; font-weight: 500; margin-bottom: 3px;">By <a href="#">Xenos</a></div>
            <a><i class="fad fa-euro-sign" style="font-size: 12px;"></i>  <b style="font-size: 13px;">300</b></a>
         </div>
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
