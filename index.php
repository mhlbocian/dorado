<?php
define("APP", 1);
define("APP_URL", "http://dorado.student.put.poznan.pl/michal.j.bocian@student.put.poznan.pl/");
define("APP_PAGES", "pages/");
define("EXT", ".html");

$_controller = filter_input(INPUT_SERVER, "PATH_INFO");
$_controller = str_replace("/", "", $_controller);

switch($_controller){
  case "":
  case "/":
  case "/home":
    $_controller = "home";
    break;
}

$_leftPane = @file_get_contents(APP_PAGES.$_controller.EXT);
$_rightPane = @file_get_contents(APP_PAGES.$_controller."-right".EXT);

include_once "templates/header.php";

if($_leftPane!==FALSE){
  echo $_leftPane;
}else{
  echo "<h1>Oops, coś poszło nie tak :(</h1>";
  echo "<p>Jeżeli zabłądziłeś i nie wiesz jak wrócić, to";
  echo "najlepiej udaj się pod stronę główną.</p><br/>";
  echo '<img src="'.APP_URL.'media/404.jpg" class="img-responsive img-rounded" alt="kot"/>';
}

if($_rightPane!==FALSE){
  include_once "templates/column-separator.php";
  echo $_rightPane;
}

include_once "templates/footer.php";
