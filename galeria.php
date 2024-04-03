<?php
include_once('partials/header.php');
?>
    <main>
        <!-- Galéria -->
       <div class="slider">
            <!-- Obrázok 1 -->
            <div class="mojestrany">
                <div class="pozicia">1/3</div>
                <img src="jpg/slide1.jpg" alt="1.obrazok" style="width: 100%" height="1000px">
                <div class="text">Prvý počítač</div>
            </div>
            <!-- Obrázok 2 -->
            <div class="mojestrany">
                <div class="pozicia">2/3</div>
                <img src="jpg/slide2.jpg" alt="2.obrazok" style="width: 100%" height="1000px">
                <div class="text">Druhý počítač</div>
            </div>
            <!-- Obrázok 3 -->
            <div class="mojestrany">
                <div class="pozicia">3/3</div>
                <img src="jpg/slide3.jpg" alt="3.obrazok" style="width: 100%" height="1000px">
                <div class="text">Tretí počítač</div>
            </div>
            <a class="pred" onclick="posun(-1)">&#10094;</a>
            <a class="po" onclick="posun(1)">&#10095;</a>
       </div>
    </main>
<?php
  include_once('partials/footer.php');
?>
