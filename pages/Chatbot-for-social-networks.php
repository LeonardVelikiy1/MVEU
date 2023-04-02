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
  <link rel="stylesheet" href="../css/Chatbot-for-social-networks.css">
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
            <p class="Targeted-advertising">Чат-бот для соц. сетей</p>
            <p class="this"><b>Чат-бот для соц.сетей</b> — это онлайн-консультант компании, автоматизированная система, которая облегчит работу службе клиентской поддержки и освободит её от решения типовых вопросов/задач.</p>
            <p class="description">Что умеет чат-бот?</p>
            <p class="description-works"><b>Отвечать на вопросы</b><br>Чат-бот распознает запрос по ключевым словам и находит ответ в заранее подготовленной базе знаний. Если вопрос слишком сложный, чат-бот передает диалог оператору;<br><br>
            <b>Продавать товары и услуги</b><br>Чат-бот произведёт продажу по заранее подготовленным скриптам продаж. Поможет клиенту выбрать товар или услугу, закроет все возражения, а также поможет оформить и оплатить покупку;<br><br>
            <b>Рассылать сообщения</b><br>Чат-бот может отправлять новости, уведомления и акции группе лиц или конкретным пользователям;<br><br>
            <b>Собирать статистику</b><br>Чат-бот запоминает все ответы пользователей, может проанализировать их и показать статистику. Вся переписка и контакты остаются в вашей базе данных.</p>
        </div>
        <div>
            <div class="Ellipse_61"></div>
            <div class="Ellipse_62"></div>
            <div class="Ellipse_63"></div>
            <div class="Ellipse_64"></div>
        </div>
        <div>
            <div class="Group">
                <img class="image" src="../images/portfolio/Chatbot-for-social-networks.jpg">
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