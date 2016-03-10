<?php
  $currentServer = $_SERVER['HTTP_HOST'];
  if ($currentServer == 'localhost') {
    $siteUrl = 'http://localhost/gdgbh/devfest2015/site/';
  }else{
    $siteUrl = 'http://sudeste.devfest.com.br/';
  }
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <meta name="description" content="O DevFest é um evento que acontece no mundo inteiro, voltado para desenvolvedores e organizado pela comunidade GDG. Participe!">
  <meta name="robots" content="index, follow">

  <!-- Facebook OG Tags -->
  <meta property="og:title" content="GDG Devfest Sudeste - Participe, aprenda e divirta-se!" />
  <meta property="og:description" content="24 de Outubro | CDL-BH | Belo Horizonte" />
  <meta property="og:site_name" content="GDG Devfest Sudeste 2015" />
  <meta property="og:url" content="<?php echo $siteUrl; ?>" />
  <meta property="og:image" content="<?php echo $siteUrl; ?>assets/img/og.jpg" />
  <!-- ================ -->

  <title>GDG Devfest Sudeste 2015</title>
  <link rel="icon" href="<?php echo $siteUrl; ?>assets/img/favicon.png" type="image/png" />
  <link rel="stylesheet" href="<?php echo $siteUrl; ?>assets/dist/all.min.css">
  <link rel="stylesheet" href="<?php echo $siteUrl; ?>assets/dist/animate.css">

  <!-- OPEN SANS / GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800,400,700' rel='stylesheet' type='text/css'>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Create HTML 5 elements and fix media queries on Internet Explorer -->
  <!--[if IE]>
  <script src="<?php echo $siteUrl; ?>assets/hacks/respond.min.js"></script>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
