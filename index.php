<!DOCTYPE html>
<html>
  <head>
      <title>Киносмотр</title>
      <link href="css/menu.css" rel="stylesheet" type="text/css">
      <link href="css/telo.css" rel="stylesheet" type="text/css">
     
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
<li class="noautoriz"><a href="VxodReg.php">Войти</a></li>
</ul>
<!--/div-->
</nav>
</header>






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



<section class="content">

         




         <section class="Pk">	
               <div class="vac"> Фильмы</div>

 <div class="filmnaz">  Сегодня в кино    </div>
                
                <article class="aa">
                 
                  









<?php


$link = mysqli_connect("localhost", "root", "","prov");



$sql = 'SELECT `namefilm`, `ccilk`, `kart` FROM `films` WHERE (now=1) LIMIT 4';
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {



      print("<div class=\"mivse\"> <a href=\"" . $row['ccilk'] .  "\"> <div class=\"car\"><div class=\"imf\">
                    <img src=\"". $row['kart'] ."\" width=\"80px\"  height=\"140px\" /></div> </div>". $row['namefilm'] . "</a></div>");
  }




 

?>





                  	<div class="mi"><a href="Films.php"> <div class="car1"><div class="imf">
                  	<img src="images/add.png" width="80px" /></div> </div> Другие фильмы  </a></div>
                  
                  
                </article>
                 
                 <div class="filmnaz">  Скоро в кино  </div>
                <article class="aa">
                 
                  <?php


$link = mysqli_connect("localhost", "root", "","prov");



$sql = 'SELECT `namefilm`, `ccilk`, `kart` FROM `films` WHERE (now=0) LIMIT 4';
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {



      print("<div class=\"mivse\"> <a href=\"" . $row['ccilk'] .  "\"> <div class=\"car\"><div class=\"imf\">
                    <img src=\"". $row['kart'] ."\" width=\"80px\"  height=\"140px\" /></div> </div>". $row['namefilm'] . "</a></div>");
  }

?>
                    
                  	<div class="mi"><a href="Films.php"> <div class="car1"><div class="imf">
                  	<img src="images/add.png" width="80px" /></div> </div> Другие фильмы </a></div>
                  
                  
                </article>
                  
                  <article>

                    <div class="vac">  Акции </div>

                    
                    


                     <?php

$link = mysqli_connect("localhost", "root", "","prov");








$sql = 'SELECT `Acttext` FROM `action` where idac=1 ';
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {



      print("<dir class=\"action\">" . $row['Acttext'] .  "</dir >");
  }

?>
                     
                  </article>

</section>


</section>

<article class="Mob">
	    <div class="vac"> Фильмы</div>

 <div class="filmnaz">  Сегодня в кино    </div>
                
                <article class="aa">
                 
                  <?php


$link = mysqli_connect("localhost", "root", "","prov");



$sql = 'SELECT `namefilm`, `ccilk`, `kart` FROM `films` WHERE (now=1) LIMIT 1';
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {



      print("<div class=\"mivse\"> <a href=\"" . $row['ccilk'] .  "\"> <div class=\"car\"><div class=\"imf\">
                    <img src=\"". $row['kart'] ."\" width=\"80px\"  height=\"140px\" /></div> </div>". $row['namefilm'] . "</a></div>");
  }

?>
                  	
                  	<div class="mi"><a href="Films.php"> <div class="car1"><div class="imf">
                  	<img src="images/add.png" width="80px" /></div> </div> Другие фильмы  </a></div>
                  
                  
                </article>
                
                 
                 <div class="filmnaz">  Скоро в кино  </div>


                
                <article class="aa">
                 
                  <?php


$link = mysqli_connect("localhost", "root", "","prov");



$sql = 'SELECT `namefilm`, `ccilk`, `kart` FROM `films` WHERE (now=0) LIMIT 1';
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {



      print("<div class=\"mivse\"> <a href=\"" . $row['ccilk'] .  "\"> <div class=\"car\"><div class=\"imf\">
                    <img src=\"". $row['kart'] ."\" width=\"80px\"  height=\"140px\" /></div> </div>". $row['namefilm'] . "</a></div>");
  }

?>
                  	
                  	<div class="mi"><a href="Films.php"> <div class="car1"><div class="imf">
                  	<img src="images/add.png" width="80px" /></div> </div> Другие фильмы </a></div>
                  
                </article>
</article>


        






       <footer>
          <section class="Mob">

<div class="footer">

            <ul>
                     <li class="menufooterlogo"><a href="index.php">Киносмотр</a></li><br>
                     <li class="menufooter"><a href="Kinoteatry.php">Кинотеатры</a></li><br>
                     <li class="menufooter"><a href="Action.php">Акции</a></li><br>
                     <li class="menufooter"><a href="Kont.php">Контакты</a></li><br>
                     <li class="menufooter"><a href="Vacan.php">Вакансии</a></li><br>
            

            <li class="menufooter"> <img src="images/vk.png" width="30px"  onclick="location.href='#'"/></li>
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
//Определяет кол-во показываемых чисел – в этом случае 00000x.
$filelocation="entercounter.txt";
//Имя файла счетчика. Если хотите изменить на другое, замените здесь и переименуйте .txt файл.
if (!file_exists($filelocation)) {
$newfile = fopen($filelocation,"w+");
$content=1;
fwrite($newfile, $content);
fclose($newfile);
}
$newfile = fopen($filelocation,"r");
$content = fread($newfile, filesize($filelocation));
fclose($newfile);
$newfile = fopen($filelocation,"w+");
if (!$c){
$content++;
}
fwrite($newfile, $content);
fclose($newfile);
echo "".sprintf ("%0"."$digits"."d",$content)."";
//Если вы хотите, чтобы какой либо текст был вокруг счетчика, заключите строку выше в цитатные кавычки (quotation marks).
?> </li>

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
