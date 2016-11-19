<?php defined("APP") or die(); ?>
<!DOCTYPE html>
<!--
Autor: Michał Bocian <michal.j.bocian@student.put.poznan.pl>
(C) 2016, Michał Bocian.
-->
<html lang="pl" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?=APP_URL?>media/style.css"/>
  <title>Michał Bocian - strona główna</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=APP_URL?>index.php/home">Strona główna</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Programowanie
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?=APP_URL?>index.php/programowanie">Programowanie</a></li>
              <li><a href="#">C/C++</a></li>
              <li><a href="#">C#</a></li>
              <li><a href="#">Python</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://github.com/mhlbocian" target="_blank">GitHub</a></li>
          <li><a href="#">O mnie</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </div>
    </nav>
    <div id="main" class="container">
      <div class="row">
      <div id="title" class="jumbotron" style="background-image: url('<?=APP_URL?>media/title-back.jpg');">
        <h1>Michał Bocian <small>student WI PP</small></h1>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
