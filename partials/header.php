
<?php
  require('_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Táto stránka obsahuje znalosti a informácie zo sveta počítačov ">
    <meta name="author" content="Samuel Kiss">
    <meta name="keywords" content="počítač,informácie,komponenty">
    <title><?php 'Moj web | '.(basename($_SERVER["SCRIPT_NAME"],'.php')); ?></title>
    <?php
      add_stylesheet();
    ?>
</head>
    <header>
      <div class="topnav">
        <!-- Refresh Stránky -->
        <div class="nav">
            <a href="index.php" class="active"> <img src="jpg/logo.png" width="50px" height="50px"></a>
            <a id="list" href="index.php" class="active"> Info List</a>
        </div>
        <!-- linky -->
        <div id="mojelinky">
            <?php
            $pages = array(
                            'Domov'=>'index.php',
                            'Galeria'=>'galeria.php',
                            'Kontakt' => 'kontakt.php',
                            'O nás' => 'o_nas.php'
                          );
                          echo(generate_menu($pages));
            ?>
          <!-- "Hamburger menu"  -->
          <button class="icon"  id= "hamburger" onclick="moja_funkcia()" class="fa fa-bars">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
    </header>