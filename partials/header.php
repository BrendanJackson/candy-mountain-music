<!DOCTYPE html>
<html>
<head>
  <!-- Concrete5 Mini-Header -->
  <?= Loader::element('header_required'); ?>
  <!-- Mobile Max Size -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BS CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
  <!-- BS jQuery slim etc -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->


  <!-- My Styles -->
  <link rel="stylesheet" href="<?=$view->getThemePath()?>/dest/css/style.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">


</head>
<body>
 <!-- !TODO: Should this be class be on the body? -->
<div class="<?= $c->getPageWrapperClass(); ?>" > <!-- Concrete5 Side Bars -->


  <header>
    <div class="header-image"></div>
    <nav class="">
      <div class="logo"> <a href="/"><img src="<?=$view->getThemePath()?>/dest/images/logo-stripped.png" alt="Candy Mountain Music Logo"><h1>Candy Mountain Music</h1></a> </div>
      <div class="xylophone-wrap ">
        <div class="v-line x-line1"></div><div class="v-line x-line2"></div>

        <ul class="xylophone">
          <div class="peg-aligner">
            <div class="xylophone-peg peg1"></div>
            <div class="xylophone-peg peg2"></div>
            <li class="peg-li1">
              <a href="#">Home</a>
            </li>
          </div>

          <div class="peg-aligner">
            <div class="xylophone-peg peg3"></div>
            <div class="xylophone-peg peg4"></div>
            <li class="peg-li2">
              <a href="#">Classes</a>
            </li>
          </div>

          <div class="peg-aligner">
            <div class="xylophone-peg peg5"></div>
            <div class="xylophone-peg peg6"></div>
            <li class="peg-li3">
              <a href="#">Special Events</a> <!-- Parties/<br> -->
            </li>
          </div>

          <div class="peg-aligner">
            <div class="xylophone-peg peg7"></div>
            <div class="xylophone-peg peg8"></div>
            <li class="peg-li4">
              <a href="#">Blog</a>
            </li>
          </div>

        </ul>
      </div>
    </nav>

  </header>

  <div class="content-wrap">
