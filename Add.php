<!DOCTYPE html>
<html>
  <head>
      <title>Киносмотр</title>
      <link href="css/menu.css" rel="stylesheet" type="text/css">
     <link href="css/teloanc0.css" rel="stylesheet" type="text/css">
         <script src="js/myscript.js"></script>
      <link rel="shortcut icon" href="images/logo.jpg" type="image/png">
      <meta name="viewpow" content="width=device-width">
      <meta charset="utf-8">
  </head>

  <body>
     <div class="content">






<header class="menuM">
<nav class="mobile-menu">
<label for="show-menu" class="show-menu"><span style="font-family:Ubuntu; font-size:1.6em; padding:5px; font-weight:bold;"><a href="../index.php" class="logoM">Киносмотр</a></span><div class="lines"></div></label>
<input type="checkbox" id="show-menu">
<!--div id="menu"-->
<ul id="menu" class="nav">
<li><a href="index.php">Главная</a></li>
<li><a href="Films.php">Фильмы</a></li>
<li><a href="Kinoteatry.php">Кинотеатры</a></li>
<li><a href="Vacan.php">Вакансим</a></li>
<li><a href="Action.php">Акции</a></li>
<li><a href="Kont.php">Контакты</a></li>
<li><a href="Add.php">Корзина</a></li>
<li><a href="VxodReg.php">Войти</a></li>
</ul>
<!--/div-->
</nav>
</header>


<style>
.idf
{display: none;}
</style>

      <header class="menuP">
            <nav>
            <ul>
                <li class="logo"><a href="index.php">Киносмотр</a></li>
              <li class="kont">  <a href="Add.php"> <img src="images/add-to-cart.png" width="30px" alt="Корзина"> </a> </li>
                  <li class="kont">  <a href="VxodReg.php" class="knopka">Войти</a>  </li>
                <li  class="kont">  <img src="images/download.png" width="30px" >  </li>

             </ul> 
             <ul  class="menum">

                     <li class="menu"><a href="Films.php">Фильмы</a></li>
                     <li class="menu"><a href="Kinoteatry.php">Кинотеатры</a></li>
                     <li class="menu"><a href="Action.php">Акции</a></li>
            </ul>  
            </nav>


      </header>

<style>
  
  </style>


<section class="telo1">

 <div class="vac1 vac1plus"> Корзина</div>













<?php

$link = mysqli_connect("localhost", "root", "","prov");


$sql = "SELECT * FROM bilets,films  WHERE  films.idfilm=bilets.idfilm and korz=1";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

$namef=$row['idbilet']; 

$sum+= $row['price']*$row['prodan'];            

    print("<div class=\"text \">


      <form  name=\"form7".$namef. "\"  method=\"POST\" action=\"php/ubrizk.php\" >

      <input class=\"idf\" name=\"idf\"type = \"text\" value=\"".$row['idbilet']. "\" readonly>

      <p class=\"biletname\" > ".$row['namefilm']. "<input class=\"databil\" type = \"text\" value=\"".$row['Time']. "\" readonly></p> 
<p class=\"biletname\">
    


       <input class=\"kolvbil\" 
      type = \"number\" min=\"0\" max=\"120\" name=\"kolic7\"      onchange=\" a7".$namef. "=form7".$namef. ".kolic7.value; a7".$namef. " = Number.parseInt(a7".$namef. ")  ;  
      form7".$namef. ".cen7".$row['idbilet']. ".value=".$row['price']."*a7".$namef. "\"; value=\"".$row['prodan']. "\" >

       

       <input class=\"cenabil\" type = \"text\" name=\"cen7".$namef. "\" value=\"".$row['prodan']*$row['price']. "\"  readonly>p 

       <input class=\"closs\" type=\"submit\"  value=\"Удалить\"/></p>
</form>
</div>
<hr size=\"2\" color=\"#000\"> " );
  }


 print("<div class=\"text lef\">
  <form name=\"summa\">


<a  href=\"#openModal\" type=\"button1\"><input type=\"button\" class=\"vxod\" onClick=\"#openModal\" value=\"Купить\" ></a>
 
</p>

  </form>
</div>");

?>








</section>

        
</div>




<div id="openModal" class="modalDialog" >
  <div>
    <a href="#close" title="Закрыть" class="close">X</a>
    <h2>Оплата</h2>

    <form name="formoplat" method="POST" action="chec.php" >
   <input  type="text" name="surname"  placeholder="Фамилия" onKeyUp="if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1); }  oplatbil()"> 
   <input  type="text" name="name"  placeholder="Имя" onKeyUp="if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1); } oplatbil()"> 
<p>Карта</p> 
<input  type="text"  pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" placeholder="XXXX XXXX XXXX XXXX" name="cardcode1" onKeyUp=" oplatbil()" > 
    

     <input type="submit" name="submit" class="vxod"  value="Оплатить" disabled>
   </form>
  </div>
</div>




         <footer>
          <section class="Mob">

<div class="footer">

            <ul>
                     <li class="menufooterlogo"><a href="index.php">Киносмотр</a></li><br>
                     <li class="menufooter"><a href="Kinoteatry.php">Кинотеатры</a></li><br>
                     <li class="menufooter"><a href="Action.php">Акции</a></li><br>
                     <li class="menufooter"><a href="Kont.php">Контакты</a></li><br>
                     <li class="menufooter"><a href="Vacan.php">Вакансии</a></li><br>
            

            <li class="menufooter"> <img src="images/vk (1).png" width="30px"  onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="images/instagram.png" width="30px"  onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="images/telegram.png" width="30px" onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="images/twitter.png" width="30px" onclick="location.href='#'"/></li>

                     <li class="podnaz"  >© 2020,  «Киносмотр»</li>


</ul>
</div>
 </section>               
                 
            </ul> 
          </section>





          <section class="Pk">
          <div class="footer">
         <ul>
                     <li class="menufooterlogo"><a href="index.php">Киносмотр</a></li>
                     <li class="menufooter"><a href="Kinoteatry.php">Кинотеатры</a></li>
                     <li class="menufooter"><a href="Action.php">Акции</a></li>
                     <li class="menufooter"><a href="Kont.php">Контакты</a></li>
                     <li class="menufooter"><a href="Vacan.php">Вакансии</a></li>
            </ul>    
              <ul class="podbloc"> 

                     <li class="podscot">Cчетчик посещений: <?php
$digits = 8;

$filelocation="entercounter.txt";


$newfile = fopen($filelocation,"r");
$content = fread($newfile, filesize($filelocation));
fclose($newfile);
$newfile = fopen($filelocation,"w+");

fwrite($newfile, $content);
fclose($newfile);
echo "".sprintf ("%0"."$digits"."d",$content)."";
?></li>
                     <li class="podnaz"  >© 2020,  «Киносмотр»</li>
<section class="ssilkna">
          
  <li class="pod"><a href="#" ><img src="images/vk.png" onmouseover=" this.src='images/vk1.png'" onmouseout="this.src='images/vk.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="images/instagram.png" onmouseover=" this.src='images/instagram1.png'" onmouseout="this.src='images/instagram.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="images/telegram.png" onmouseover=" this.src='images/telegram1.png'" onmouseout="this.src='images/telegram.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="images/twitter.png" onmouseover=" this.src='images/twitter1.png'" onmouseout="this.src='images/twitter.png'" width="30px"></img></a></li>
 </section>               
                 
            </ul>  
          </div>

      </section>
          </footer>


  </body>
</html>




<script >
            var cc = formoplat.cardcode1;
for (var i in ['input', 'change', 'blur', 'keyup']) {
    cc.addEventListener('input', formatCardCode, false);

}



function formatCardCode() {
    var cardCode = this.value.replace(/[^\d]/g, '').substring(0,16);
    cardCode = cardCode != '' ? cardCode.match(/.{1,4}/g).join(' ') : '';
    this.value = cardCode;
}





        </script>

