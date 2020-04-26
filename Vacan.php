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

<section class="telo">

 <div class="vac"> Вакансии</div>

<p class="cent">У нас открыты вакансии:</p>

<dir class="text">
  <p>Контролер-кассир</p>
  <br>
<li>Ты научишься сразу 2 профессиям:  Кассир, Контролер билетов</li>
<li>Ты будешь зарабатывать деньги и получать премии</li>
<li>Ты получишь прекрасную возможность вырасти по карьерной лестнице</li>

<li>Ты выберешь удобный график, который подходит именно тебе - 2/2 или 5/2</li>

</dir>
<p class="cent">Присоединяйся!</p>
<dir class="text">
<div class="cent">

 <form name= "formBak"  method="POST" action="php/vacansion.php" >



   <label><input type="text" name="surname" placeholder="Фамилия" onKeyUp=" 
    if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1);  }  vacpravc();" required></label><br>
  <label><input type="text" name="name" placeholder="Имя"  onKeyUp=" 
    if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1);  }  vacpravc();" required></label><br>


 <label><input type="number" name="age" placeholder="Возраст" onKeyUp=" 
    if(/[^0123456789]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1);  }  vacpravc();" required></label><br>
  <label><input type="text" name="citizenship" placeholder="Гражднство" onKeyUp="vacpravc();  " required></label><br>
 
<label><input type="email" name="maill" placeholder="Почта" onKeyUp="vacpravc(); " required></label><br>
  
   <input type="submit" class="vxod"  value="Выплнить" onclick="otprav();" name="btnvac"><br>

  <input type="reset"  class="closs"  onclick="sbros();" >



</form></div>
</dir>




</section>









        
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




