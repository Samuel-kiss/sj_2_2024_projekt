<?php
include_once('partials/header.php');
?>
    <main>
      <!-- Banner -->
      <div class="Banner">
        <img src="jpg/Banner.jpg" alt="Banner" >
        <div class="center">  
          <h1>Informácie o počítačoch</h1>
          <p>Na tejto stránke si môžete obohatiť vašu znalosť o počítačoch <br>
            ,najmä technicky menej skúsení ľudia
          </p>
          <p>Sú tu informácie ohľadom častí a zariadení ktoré počítač má </p>
        </div>
      </div>
      <!-- Akordeon  -->
      <!-- 1. -->
      <button class="akordeon">Čo je počítač?</button>
      <div class="cast">
       <h2>Čo je počítač?</h2>
       <img src="jpg/Obrazok1.jpg" alt="Počítač">
       <p>Počítač je zariadenie alebo stroj na realizáciu výpočtov alebo riadenie operácií vyjadriteľných číselnými alebo logickými výrazmi.
          Počítače sa skladajú z komponentov, ktoré vykonávajú čiastkové, dobre definované funkcie. 
          Komplexné vzťahy medzi týmito komponentmi dávajú počítačom schopnosti spracovávať informácie.
        </p>
      </div>
      <!-- 2. -->
      <button class="akordeon">Aké sú časti počítača?</button>
      <div class="cast">
        <h2>Aké časti poznáme?</h2>
        <dl>
          <dt>Softwarová časť:</dt>
          <dd>Je všetko programové vybavenie počítača. Bez programov by nám bol počítač platný len ako
          okrasa v domácnosti</dd>
          <hr>
          <dt>Hardverová časť:</dt>
          <dd>Je všetka technika v počítači aj mimo neho (s ním súvisiaca). To je všetko, čo sa týka počítača
          a čo môžem chytiť do ruky.</dd>
        </dl> 
      </div>
      <!-- 3. -->
      <button class="akordeon">Z čoho sa skladá počítač?</button>
      <div class="cast">
        <h2>Z čoho sa skladá počítač?</h2>
        <img src="jpg/Obrazok3.jpg" alt="Zloženie">
        <dl>
          <dt>Počítač je zložený zo sústavy komponentov ktoré su:</dt>
          <dd>-Skrinka a zdroj = skrinka slúži ako uložisko komponentov a zároveň chráni komponenty pred vodou.</dd>
          <dd>-MB-main board = Matičná doska</dd>
          <dd>-CPU-Central Processor Unit = Centrálna procesorová jednotka</dd>
          <dd>-HD - Hard Disk = Pevný disk </dd>
          <dd>-SSD - Solid State Drive = Mechanika s nepohyblivým médiom(častejšie používaná kvôli lepším vlastnosťiam ako HD)</dd>
          <dd>-RAM - Random Access Memory = Ľubovoľne prístupná pamäť </dd>
          <dd>-CACHE - Rýchla vyrovnávacia pamäť </dd>
        </dl>
      </div>
      <!-- 4. -->
      <button class="akordeon">Aké sú externé zariadenia?</button>
      <div class="cast">
        <dl>
         <dt>K počítaču sa dajú pripojiť aj Externé zariadenia, ktoré sú nutnou súčasťou aby sme mohli pracovať s počítačom.</dt>
          <br>
          <dt>Takéto zariadenia sú napríklad:</dt>
          <dd>-Monitor</dd>
          <dd>-Klávesnica</dd>
          <dd>-Myška</dd>
          <br>
          <dt>Máme aj zariadenia ktoré rozširujú zostavu počítača ako napríklad:</dt>
          <dd>-Slúchadká</dd>
          <dd>-Reproduktory</dd>
          <dd>-Mikrofón</dd>
          <dd>-Tlačiareň</dd>
          <dd>A mnoho dalších</dd>
        </dl>
      </div>
      <!-- 5. -->
      <button class="akordeon">Načo si dať pozor?</button>
      <div class="cast">
        <h3>Načo si dať pozor pri kúpe komponentov?</h3>
        <div class="btn">
          <p>klikni tu a zisťi viac &#10095;</p>
          <a href="https://datacomp.sk/ako-vybrat-komponenty-pre-pc-zostavu.html" target="_blank">Info</a>
        </div>
      </div>
      <!-- 6. -->
      <button class="akordeon">Aké su typy socketu na CPU?</button>
      <div class="cast">
        <img src="jpg/Obrazok2.jpg" alt="Procesor">
        <div class="table">
          <h4>Pár typov socketov pre CPU</h4>
          <a href="https://www.cpu-world.com/Sockets/" target="_blank">Viac typov nájdete v tomto linku</a>
          <table>
            <tr>
              <th>Procesor</th>
              <th>Socket</th>
            </tr>
            <tr>
              <td>AMD-</td>
              <td>Socket A</td>
            </tr>
            <tr>
              <td>AMD-</td>
              <td>Socket 754</td>
            </tr>
            <tr>
              <td>AMD-</td>
              <td>Socket AM2</td>
            </tr>
            <tr>
              <td>AMD-</td>
              <td>Socket AM4</td>
            </tr>
            <tr>
              <td>AMD-</td>
              <td>Socket TR4</td>
            </tr>
            <tr>
              <td>Intel-</td>
              <td>Socket 478</td>
            </tr>
            <tr>
              <td>Intel-</td>
              <td>Socket LGA 755</td>
            </tr>
            <tr>
              <td>Intel-</td>
              <td>Socket LGA 1155</td>
            </tr>
            <tr>
              <td>Intel-</td>
              <td>Socket LGA 2011</td>
            </tr>
            <tr>
              <td>Intel-</td>
              <td>Socket LGA 2066</td>
            </tr>
            <tr>
              <td>Intel-</td>
              <td>Socket LGA 1700</td>
            </tr>
          </table>
        </div>
      </div>
    </main>
<?php
  include_once('partials/footer.php');
?>
