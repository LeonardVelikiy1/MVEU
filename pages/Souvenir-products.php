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
  <link rel="stylesheet" href="../css/Souvenir-products.css">
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
        <p class="advertisement">РЕКЛАМА</p>
        <div class="bloc">
            <p class="Targeted-advertising">Сувенирная продукция</p>
            <p class="this"><b>Сувенирная продукция</b> — изделия, используемые в качестве подарков, призов, раздаточных материалов в рекламных кампаниях и в виде корпоративных и бизнес-сувениров, чаще всего с нанесением логотипа или фирменного стиля заказчика на самом продукте или упаковке.</p>
            <p class="description">Какую сувенирную продукцию мы изготавливаем?</p>
            <p class="description-works"><b>Промо-сувениры:</b>блокноты, ручки, брелоки, флажки, пакеты, футболки, толстовки, свитшоты, бомберы, ветровки, худи, банданы, бейсболки.<br><br>
            <b>Бизнес-сувениры:</b>календари, ежедневники, визитницы, флешки, зонты, пледы, наборы для пикника, игрушки, эко-сувениры, автомобильные аксессуары, сумки, рюкзаки.<br><br>
            <b>VIP - подарки:</b>портмоне-клатч, подарочные наборы, настольные игры, изделия ручной работы</p>
            <p class="description2">Что входит в нашу работу?</p>
            <p class="description-works"><b>Формирование</b> технического задания на изготовление сувенирной продукции в процессе интервью;<br><br>
            <b>Разработка</b> дизайн концепции на основе фирменного стиля компании;<br><br>
            <b>Создание</b> дизайна сувенирной продукции, согласование с заказчиком, внесение правок;<br><br>
            <b>Утверждение</b> тиража, способа нанесения элементов на продукцию;<br><br>
            <b>Расчет</b> стоимости реализации сувенирной продукции;<br><br>
            <b>Изготовление</b> сувенирной продукции.<br><br>
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
        </div>
        <div>
            <div class="Group">
                <img class="image" src="../images/portfolio/stickers.png">
                <img class="image2" src="../images/portfolio/Souvenir-products.png">
                <img class="image3" src="../images/portfolio/bottles.png">
                <img class="image4" src="../images/portfolio/thermocup.png">
                <img class="image5" src="../images/portfolio/cup.png">
                <img class="image6" src="../images/portfolio/backpack.png">
                <img class="image7" src="../images/portfolio/shopper.png">
                <img class="image8" src="../images/portfolio/laptop-bag.png">
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