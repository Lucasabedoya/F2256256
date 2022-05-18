<?php
  require_once("view/module/head.php");
  require_once("view/module/header.php");
  require_once("view/module/menu.php");

  if (isset($_GET['ruta'])) {
    switch ($_GET['ruta']) {
      case 'usuario':
          include_once("view/module/user.php");
        break;
      case 'aprendiz':
          include_once("view/module/aprendiz.php");
        break;
      case 'matricula':
          include_once("view/module/matricula.php");
        break;
      case 'erase':
          include_once("view/module/erase.php");
          break;
      default:
        include_once("view/module/presentation.php");
        break;
      }
  }else {
    include_once("view/module/presentation.php");
  }

  require_once("view/module/footer.php");

?>