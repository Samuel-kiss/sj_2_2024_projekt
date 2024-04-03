<footer>
      <div class="stlpec1">
        <p>Rýchle odkazy:</p>
        <?php
            $pages = array(
                'Domov'=>'index.php',
                'Galeria'=>'galeria.php',
                'Kontakt'=>'kontakt.php',
                'O_nas'=>'o_nas.php'
            );
            echo(generate_menu($pages));
        ?>
      </div>
      <div class="stlpec2">
        <p>Kontakt:</p>
        <a href="tel:+421908597481">Tel: +421 908 597 481</a>
        <a href="mailto:kisssamuel37@gmail.com">Mail: kisssamuel37@gmail.com</a>
      </div>
      <div class="stlpec3">
        <p>Dátum vytvorenia:4.12.2023</p>
        <p>Vytvoril:Samuel Kiss</p>
        <p>Vytvorené bez webstránok &copy; </p>
      </div>
    </footer>
    <?php
      add_scripts();
    ?>