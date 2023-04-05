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
  <link rel="stylesheet" href="../css/advertising-printing.css">
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
    <button class="menu_button"><a href="order_form.php" style="text-decoration: none; padding-left: 43px; padding-right: 43px; padding-top: 15px; padding-bottom: 15px; color:aliceblue;">Заказать проект</a></button>
    </form>
    <main>
        <p class="advertisement">РЕКЛАМА</p>
        <div class="bloc">
            <p class="advertising-printing">Дизайн полиграфической продукции</p>
            <p class="this"><b>Дизайн полиграфической продукции</b> — это разработка макетов и материалов под печать на бумажном носителе.<br><br><b>Мы создаём дизайн для:</b></p>
            <p class="description">
            Брошюр, буклетов, листовок, лифлетов, флаеров;<br><br>
            Рекламы в газетах, журналах, ежегодниках;<br><br>
            Наружной рекламы, рекламы внутри помещения, афиш, плакатов, пресс-воллы, икс-баннеров;<br><br>
            Визитных карточек, папок, конвертов и другой деловой документации<br><br>
            Календарей, и другой сувенирной продукции;<br><br>
            Любой упаковки;<br><br>
            Меню,табличек, пригласительных, сертификатов, стикеров, открыток и т.д</p>
            <p class="description-works">Мы занимаемся не только разработкой макетов, но и <b>печатаем полиграфическую продукцию любых сложности и тиражей.</b></p>
            <p class="description-works2">Что входит в нашу работу?</p>
            <p class="description">
            Анализ целевой аудитории, анализ современных аналогов;<br><br>
            Создание макета будущей продукции (минимум 3 варианта на ваш выбор)<br><br>
            Подготовка макетов для печати;<br><br>
            Выбор материалов для печати;<br><br>
            Печать полиграфической продукции.
            </p>
        </div>
        <div>
            <div class="Ellipse_61"></div>
            <div class="Ellipse_62"></div>
            <div class="Ellipse_63"></div>
            <div class="Ellipse_64"></div>
            <div class="Ellipse_65"></div>
            <div class="Ellipse_66"></div>
            <div class="Ellipse_67"></div>
            <div class="Ellipse_68"></div>
            <div class="Ellipse_69"></div>
            <div class="Ellipse_70"></div>
            <div class="Ellipse_71"></div>
            <div class="Ellipse_72"></div>
        </div>
        <div>
            <div class="Group">
                <img class="image" src="../images/portfolio/choi_mockup.png">
                <img class="image2" src="../images/portfolio/perepechkin_food.png">
                <img class="image3" src="../images/portfolio/perepechkin_food2.png">
                <img class="image4" src="../images/portfolio/calendar.png">
                <img class="image5" src="../images/portfolio/triangular_calendar.png">
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
            </div>
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