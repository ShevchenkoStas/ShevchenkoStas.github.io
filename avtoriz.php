<?php
session_start();
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаурма-онлайн | Купуй тільки у нас</title>
    <link rel="stylesheet" href="./css/index.css">
	<style>
    body {
      background-color:#FFB6C1; /* здесь можно задать нужный цвет */
    }
  </style>
</head>

<body>

    <div class="wrap-header">
        <header>
            <div class="header-logo">
                <img src="./images/keb.png" alt="">
            </div>
            <div class="header-menu">
                <span><a class="active" href="index.php">Головна</a></span>
                <span><a href="menu.php">МЕНЮ</a></span>
                <span><a href="grafik.php">Графік роботи</a></span>
				<span><a href="avtoriz.php">ВХІД</a></span>
                <?php if($user!=null){
                    if($user['admin']==1){?>
                        <span><a href="admin.php">Адмін-панель</a></span>
                    <?php }?>
                        <span><a href="tools/exit.php">Вийти</a></span>
                    
                <?php }else{?>
                    
                <?php } ?>
            </div>
            <div class="header-icon">
                <a href="korzina.php">
                    <img src="./images/pokupka.png" alt="">
                </a>
            </div>
        </header>
    </div>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Авторизация/Регистрация - Шаурма-онлайн</title>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        text-align: center;
      }
      
      h1 {
        color: #dd7711;
        margin-top: 50px;
      }
      
      form {
        border: 2px solid #dd7711;
        border-radius: 5px;
        display: inline-block;
        padding: 20px;
        margin-top: 50px;
      }
      
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        text-align: left;
      }
      
      input[type="text"], input[type="password"] {
        border: 1px solid #ccc;
        border-radius: 3px;
        display: block;
        margin-bottom: 20px;
        padding: 5px;
        width: 100%;
      }
      
      input[type="submit"] {
        background-color: #dd7711;
        border: none;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 16px;
        font-weight: bold;
        margin-top: 20px;
        padding: 10px;
        width: 100%;
      }
    </style>
  </head>
  <body>
  
  <h1>.</h1>
    <h1>АВТОРИЗАЦІЯ</h1>
    <form action="login.php" method="post">
      <label for="username">Логін:</label>
      <input type="text" id="username" name="username">
      <label for="password">Пароль:</label>
      <input type="password" id="password" name="username">
      <input type="submit" value="Увійти">
    </form>
    <p>Відсутній аккаунт? <a href="register.php">Зареєструйтесь</a></p>
  </body>
</html>