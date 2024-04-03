<?php
  require('_inc/functions.php');
  add_stylesheet();
?>

<body>
    <!-- Dotazník -->
    <form id="dotaznik" >
        <div class="items">
            <label for="meno">Meno:</label><br>
            <input type="text" required id="meno" name="meno" placeholder="Janko" ><br>

            <label for="priezvisko">Priezvisko:</label><br>
            <input type="text" required id="priezvisko" name="priezvisko" placeholder="Mrkvička"  ><br>

            <label for="email">Email:</label><br>
            <input type="email" required name="email" id="email" placeholder="meno@mail.com"><br>

            <label for="pole">Zadajte Vašu otázku:</label><br>
            <textarea name="pole" id="pole" cols="30" rows="10" placeholder="Tu možeťe písať text"></textarea><br>

            <label for="suhlas">Súhlas so spracovaním osobných údajov </label><br>
            <input type="checkbox" required name="suhlas" id="suhlas"  ><br>

            <button type="submit" onclick="hlasenie()">Odoslať</button>
        </div>
    </form>

