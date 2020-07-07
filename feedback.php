<?php include 'components/header.php'; ?>
<main>
  <div class="feedback_page">
    <div class="container">
      <!-- navigation block-->
      <div class="navigation">
        <div class="grey_line"></div>
        <div class="nav">
          <a href="index.php">Главная /</a>
          <a href="feedback.php"> &nbsp;Обратная связь</a>
        </div>
      </div>
      <div class="feedback_wrap">
        <!-- left  -->
        <div class="left">
          <!-- title -->
          <div class="name_of_web">
            <p>Обратная <br> связь </p>
          </div>

          <div class="contacts">
            <p>Горячая линия</p>
            <div class="contact">
              <img src="img/icons/phone.png" alt="phone">
              <a href="tel:+78005116564">+7 800 511-65-64</a>
            </div>
            <div class="contact">
              <img src="img/icons/calendar.png" alt="calendar">
              <span>Понедельник - Воскресенье, 11:00 - 21:00</span>
            </div>
          </div>

        </div>
        <!-- right -->
        <div class="right">
          <p class="send_feedback">Отправьте Ваше сообщение на нашу почту</p>
          <form class="feedback_form" action="" method="">
            <div class="form_block">
              <input class="default_input" type="text" name="name" placeholder="Имя">
              <input class="default_input" type="text" name="Email" placeholder="E-mail">
            </div>

            <div class="form_block">
              <textarea name="Message" placeholder="Сообщение"></textarea>
            </div>
            <button class="default_button black_button">
              Отправить
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>
</main>
 <?php include 'components/footer.php'; ?>
