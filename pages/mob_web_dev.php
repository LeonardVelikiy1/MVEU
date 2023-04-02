<!DOCTYPE html>
<?php
 include "../db.php";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/splide.min.css">
  <link rel="stylesheet" href="../css/order_form.css">
  <link rel="stylesheet" href="../css/mob_web_dev.css">
  <link rel="stylesheet" href="../css/adapt_portfolio.css">
    <title>Студенческая фирма</title>
</head>

  <div class="wrapper">

  <header>
  
  <div  class="menu">
        <form action="">

    <img class="logo" src="../images/logo2.png">МВЕУ
    <a class="p_au" href="../index.php">О нас</a>
    <a href="services.html" style="text-decoration: none; color:aliceblue;">Услуги</a>
    <a href="portfolio.html" style="text-decoration: none; color:aliceblue;">Портфолио</a>
    <a href="Mentors.html" style="text-decoration: none; color:aliceblue;">Наставники</a>
    <a href="contacts.html" style="text-decoration: none; color:aliceblue;">Контакты</a>
    <button class="menu_button"> <a href="order_form.php" style="text-decoration: none; color:aliceblue;">Заказать проект</a></button>
    </form>
    <main>
        <p class="advertisement">Веб-разработка</p>
        <div class="bloc">
            <p class="Targeted-advertising">Мобильное приложение</p>
            <p class="description">Какие приложения мы делаем?</p>
            <p class="description-works">
            <b>Приложения для iPhone:</b><br>
                <br> - Приложения для iPad;<br>
                <br> - Приложения для Apple Watch;<br>
                <br> - Приложения для Apple TV;<br>
                <br> - App Clips.<br>
            <br><b>Приложения для Android:</b><br>
                <br> - Мобильные приложения для Android;<br>
                <br> - Приложения для Android TV;<br>
                <br> - Приложения для Android Wear;<br>
                <br> - Приложения для планшетов Android;<br>
            <p class="description">Что входит в нашу работу?</p>
            <p class="description-works"><b>Анализ конкурентов:</b><br>
                <br>Мы проанализируем бизнесы ваших конкурентов и их IT-решения, выясним и учтем реальные боли вашей целевой аудитории, создадим уместный и актуальный продукт;<br><br>
            <b>UX/UI-дизайн:</b><br>
                <br>Только лучшие UI/UX-решения (внешний вид приложения, удобная работа в нём) Гарантия создания качественного функционала, который точно понравится вашим пользователям;<br><br>
            <b>Программирование мобильного приложения:</b><br>
                <br>Приведение мобильного приложения в корректную работу.<br><br>
            <b>Поддержка, техническое обслуживание и контроль качества мобильного приложения.</b><br>
            </p>
        </div>
        <div>
            <div class="Ellipse_61"></div>
            <div class="Ellipse_62"></div>
            <div class="Ellipse_63"></div>
            <div class="Ellipse_64"></div>
            <div class="Ellipse_65"></div>
            <div class="Ellipse_66"></div>
        </div>
        <div>
            <div class="Group">
                <img class="image" src="../images/portfolio/Mobile-applications.PNG">
            </div>
        </div>
        <div>
            <div class="btn_prpl">
                <a class="Our-portfolio" href="portfolio.html"><center>Наше портфолио</center></a>
            </div>
        </div>
        <div>
        <div style="height:879px;" class="container">
    
            <div class="order_form">
              <h2 >Заинтересовались?</h2>
              <p style="margin-bottom: 70px;height:42px;  text-align:center;font-size: 30px;font-family:NeutralFaceReg ;">Оставьте свою заявку и мы свяжемся с вами</p>
              <form style="width:727px; display:flex; flex-direction:column;" method="POST">
                <span style="height: 63px;">Телефон</span>
                <input type="text" name="number">
               <span style="height: 63px;"> Ваше имя</span>
                <input type="text" name="name">
                <button class="order_button" name="clik">Отправить</button>
              </span>
              <?php 
              if (!empty($_POST)) 
              {
                $number = $_POST['number'];
                $name = $_POST['name'];
                $clik = $_POST['clik'];
        
                  if(!empty($number) && !empty($name))
                {
                  $insert_number_name = "INSERT INTO `order` (`number`, `name`) VALUES ('$number', '$name');";
                  $result = mysqli_query($connect, $insert_number_name);
                }
              }
              ?>
        </div>
    </main>
    <footer>
        <div class="upper_footer">
          <div class="footer_info">
            <div class="footer_logo"><img style="height: 62px;width: 64px;" src="../images/logo1.svg" alt="">МВЕУ
            <p>Студенческая<br> фирма</p>
            </div>
            <div class="footer_row">
                Информация
                <a href="../index.php">О нас</a>
                <a href="services.html">Услуги</a>
                <a href="portfolio.html">Портфолио</a>
                <a href="contacts.html">Контакты</a>
              </div>
              <div class="footer_row">
                Услуги
                <a href="Design.html">Дизайн</a>
                <a href="Web-development.html">Веб-разработка</a>
                <a href="Advertisement.html">Реклама</a>
                <a href=""></a>
            </div>
          </div>
        </div>
        <div class="copyright"><p>Авторы: Колодкина А, Вахрушева А.</p> <p>© 2023</p>
        </div>
    </footer>
      </div>
      <script src="js/splide.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
          });
    
          splide.mount();
        });
      </script>
</body>
</html>