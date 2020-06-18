<?php include 'components/header.php'; ?>
<main>
  <div class="registration container">
    <div class="form">
      <span>Вход для партнёров</span>
      <!-- create acc -->
      <div class="create_acc">
        <p>С помощью аккаунта Shopogasm</p>
        <a href="registration_clients.php">Создать партнёрский аккаунт</a>
      </div>
      <!-- form -->
      <form class="reg_form" action="" method="">
        <!-- Email -->
        <label for="">Email</label>
        <input class="default_input" type="text" name="email" placeholder="Email">
        <!-- Password -->
        <label for="">Пароль</label>
        <input class="default_input" type="text" name="password" placeholder="Пароль">
        <!-- Save password -->
        <!-- forgot password? -->
        <div class="forgot">
          <!-- checkbox -->
          <div class="pretty p-default p-fill">
              <input type="checkbox"/>
              <div class="state">
                <label>Сохранить пароль</label>
              </div>
          </div>
          <!-- forgot password? -->
          <a href="">Забыли пароль?</a>
        </div>
          <!-- Reg button -->
        <button class="action_button">
            <p>Войти</p>
        </button>
      </form>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
