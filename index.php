<!DOCTYPE html>
<?php
 include "db.php";

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/adapt_index.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/splide.min.css">
<title>Студенческая фирма</title>
</head>

  <div class="wrapper">
  <div class="head_wrapper">
  <header>
  
  <div  class="menu">
    <form action="">

    <img class="logo" src="images/logo.svg" style="text-decoration: none; color:aliceblue;">МВЕУ
    <a class="p_au" href="#about_us" style="text-decoration: none; color:aliceblue;">О нас</a>
    <a href="pages/services.html" style="text-decoration: none; color:aliceblue;">Услуги</a>
    <a href="pages/portfolio.html" style="text-decoration: none; color:aliceblue;">Портфолио</a>
    <a href="pages/mentors.html"  style="text-decoration: none; color:aliceblue;">Наставники</a>
    <a href="pages/contacts.html"  style="text-decoration: none; color:aliceblue;">Контакты</a>
      <button class="menu_button"> <a href="pages/order_form.php" style="text-decoration: none; color:aliceblue;">Заказать проект</a></button>
    </form>
  </div>
  <div class="main">
    <div class="left_block">
          <span>СТУДЕНЧЕСКАЯ<br> ФИРМА</span>
      <p>Колледж креативных индустрий</p>
      <form action="">
              <button style="position: relative; bottom: 4%; right: 1%; width: 419px;" class="menu_button"> <a href="pages/order_form.php" style="text-decoration: none; color:aliceblue;">Задайте нам вопрос</a></button>
      </form>
    </div>
  </div>
  </header> 
</div>
<main>
  <div style="height: 880px;" class="container">
  <div class="portfolio">
    <h2> Наше портфолио</h2>
    <div class="portfolio_a">
    <a style="width: 105px; height: 28px;"> Дизайн </a>
    <a> Разработка сайтов и  приложений</a>
    <a style="width: 105px; height: 28px;"> Реклама</a>
    </div>
      <section class="splide" aria-label="Splide Basic HTML Example">
          <div class="splide__arrows">

        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><img  src="images/slide.png" alt=""></li>
            <li class="splide__slide"><img src="images/slide1.png" alt=""></li>
            <li class="splide__slide"><img src="images/slide2.png" alt=""></li>
          </ul>
        </div>
        </div>
      </section>
  </div> 
  </div> 
  <div style="height: 675px;" class="container">  
  <div id="reasons" class="reasons">
    <h2>3 причины заказать у нас</h2>
    <div class="three_reasons">
    <div style="background-image: url(images/money.svg);" class="reason">Цены ниже<br> среднерыночных</div>
    <div style="background-image: url(images/chat.svg);" class="reason">24\7 НА СВЯЗИ</div>
    <div style="background-image: url(images/zoom.svg);" class="reason">ИНДИВИДУАЛЬНЫЙ <br> ПОДХОД</div>
    </div>
    </div>
  </div>
  <div id="about_us" style="height:1119px;" class="container">
  <div  class="about_us">
    <h2>Немного о нас</h2>
    <div class="text"><p class="p1" style="height:defoult;"><b>Студенческая фирма </b>— это сообщество самых инициативных и трудолюбивых ребят, готовых взяться за решение любой вашей
    задачи. Наши студенты компетентны в таких областях как веб-разработка, дизайн, реклама и интернет-продвижение.
    </p>
    <p class="p2">
    Молодые профессионалы отличаются неординарным мышлением и способны привнести в работу новые креативные идеи и
    нестандартные, актуальные решения, а для более идеального результата наши студенты находятся под руководством
    <b><i>наставников, преподавателей-практиков</i></b> с огромными багажом знаний и опытом. Для работы мы отбираем только самых активных,
    амбициозных, целеустремленных и адаптивных студентов, которые отличаются стремлением к развитию, быстрой и легкой
    обучаемостью, а также идеальной исполнительностью. Все они имеют опыт работы с реальными проектами и с удовольствием
    помогут вам!
    </p>
    <p class="p3" style="height:0%;">
    Выбирая работать с нами, вы помогаете студентам нашего колледжа пополнять портфолио качественными проектами, а также
    выигрываете для себя в бюджете.
    </p>
</div>
  </div> 
  </div>
  <div class="line">
  <div class="line_text">
  Хотите заказать проект
  <p style="font-family: RobotoRegular; font-size: 26px;">ОСТАВЬТЕ ЗАЯВКУ И МЫ СВЯЖЕМСЯ С ВАМИ!</p>
  </div>
    <form action="">
      <button class="write"> <a href="pages/order_form.php" style="text-decoration: none; color:aliceblue;">Напишите нам</a></button>
    </form>
  </div>
  <div style="height:1040px;" class="container">
    <div class="reviews">
      <h2> Отзывы о работе с нами </h2>
      <div class="reviews_block">
      <div class="review_item">
        <div class="review">
          <!-- <span style=" font-family: OswaldBold;color:#F4914E;font-size:96px;">“</span> -->
          <p>Не ожидал такого качества от студентов. Молодцы, уверен, что далеко пойдут и будут еще делать сайты круче, чем у эппл. 
          </p>
        </div>
        <div class="review_name">Головаш Никита</div>  
      </div>
      <div class="review_item">
        <div class="review">
          <!-- <span style=" font-family: OswaldBold;color:#F4914E;font-size:96px;">“</span> -->
          <p>Заказывали фотосъемку для своего маленького интернет-магазина. Сделали быстро, качественно, обязательно обратимся еще, приятно, когда к работе подходят с такой ответственностью. Ребятам успехов! .</p>
        </div>
        <div class="review_name">Иван Кощеев</div>
      </div>
      <div class="review_item">
        <div class="review">
          <!-- <span style=" font-family: OswaldBold;color:#F4914E;font-size:96px;">“</span> -->
          <p>Отличная идея доверить студентам простые задачи - и ребята портфолио набирают и нам, заказчикам выгодно. Спасибо всем, кто трудился, остался доволен и сайтом и наполнением</p>
        </div>
        <div class="review_name">Цолак Григорян</div>
      </div>
      </div>
      <form style="height:66px;display: flex;" action="">
        <button class="review_button">Все отзывы</button>
      </form>
    </div>
  </div>
  <div style="height:879px;" class="container">
    <div class="order_form">
      <h2>Закажите проект у нас!</h2>
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
      </form>
    </div>
  </div>
  <div style="height:800px;" class="container">
    <div class="contacts">
      <h2>Контакты</h2>
      <div class="contact_block">
        <div class="contact_item">
            Адрес:<br>
            <p style="height:50px;"> ПУШКИНСКАЯ, 268 <br>
            Г. ИЖЕВСК<br></p>
        </div>
              <div class="contact_item">
                ТЕЛЕФОН:<br>
                <p style="height:50px;"> 8 (812) 111-22-33<br>
                8 (812) 111-22-33</p>
              </div>
                      <div class="contact_item">
                        ВРЕМЯ РАБОТЫ:<br>
                        <p style="height:50px;">ПН-СБ <br>
                          10:00 - 20:00<br></p>
                      </div>
                              <div class="contact_item">
                              E-MAIL:<br>
                                <p style="height:50px;"><a style="color:#F4914E; text-decoration: none;" href="mailto:info@MVEU.RU"> info@MVEU.RU </a>  <br></p>
                              </div>
                              
      </div>
    </div>
  </div>
  </main>
  <footer>
    <div class="upper_footer">
      <div class="footer_info">
        <div class="footer_logo"><img style="height: 62px;width: 64px;" src="images/logo1.svg" alt="">МВЕУ
        <p>Студенческая<br> фирма</p>
        </div>
        <div class="footer_row">
          Информация
          <a href="#about_us">О нас</a>
          <a href="pages/services.html">Услуги</a>
          <a href="pages/portfolio.html">Портфолио</a>
          <a href="pages/contacts.html">Контакты</a>
        </div>
        <div class="footer_row">
          Услуги
          <a href="pages/Design.html">Дизайн</a>
          <a href="pages/Web-development.html">Веб-разработка</a>
          <a href="pages/Advertisement.html">Реклама</a>
          <a href=""></a>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>Авторы: Колодкина А, Вахрушева А.</p> <p>© 2023</p>
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