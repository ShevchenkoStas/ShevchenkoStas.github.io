<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    if($user['admin']==1){
        header("Location: admin.php");
    }
    else{
        header("Location: catalog.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаурма-онлайн | Купуй тільки у нас</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/avt.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
            </div>
            <div class="header-icon">
                <a href="korzina.php">
                    <img src="./images/pokupka.png" alt="">
                </a>
            </div>
        </header>
    </div>
    <!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<style>
		.container {
			margin: auto;
			padding: 20px;
			width: 400px;
			border: 1px solid #ccc;
			border-radius: 10px;
		}

		input[type="text"], input[type="email"], input[type="password"], input[type="tel"], button {
			display: block;
			margin-bottom: 10px;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
		}

		button {
			background-color: orange;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			font-size: 16px;
			cursor: pointer;
		}

		button:hover {
			background-color: #ff8c00;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Регистрация</h2>
		<form method="POST">
			<label for="login">Логін:</label>
			<input type="text" name="login" id="login" required>
			<label for="password">Пароль:</label>
			<input type="password" name="password" id="password" required>
			<label for="confirm_password">Підтвердіть пароль:</label>
			<input type="password" name="confirm_password" id="confirm_password" required>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
			<label for="phone">Телефон:</label>
			<input type="tel" name="phone" id="phone" required>
			<label for="captcha">Введіть код з картинки:</label>
			<input type="text" name="captcha" id="captcha" required>
			<img src="captcha.php" alt="Captcha">
			<button type="submit">Зареєструватися</button>
			<p>якщо ви зареєстровані - <a href="avtoriz.php">авторизуйтеся</a></p
		</form>
	</div>
</body>
</html>
          
        </form>
    </div>
   <div class="wrap-footer">
        <footer>
            
            <div class="footer-block">
                <p>Все про магазин</p>
                
                <span><a href="error.php">Графік роботи</a></span>
                <span><a href="error.php">Вакансії</a></span>
                <span><a href="error.php">Контакти</a></span>
            </div>
            <div class="footer-block">
                <p>Допомога</p>
                  <span><a href="error.php">Доставка</a></span>
                <span><a href="error.php">Графік роботи</a></span>
                <span><a href="error.php">Повернення товару</a></span>
            </div>
            <div class="footer-block">
                <p>Сервіси</p>
                <span><a href="error.php">Доставка</a></span>
                <span><a href="error.php">Графік роботи</a></span>
                <span><a href="error.php">Повернення товару</a></span>

            </div>
        </footer>
    </div>
    <script>
        $('form').submit(function (e) {
            e.preventDefault();
            var data = $('form').serializeArray();
            $.ajax({
                type: "POST",
                url: "tools/reg_user.php",
                data: data,
                success: function(response) {
                    if(response==777){
                        window.location.href = "login.php";
                    }
                    else{
                        $("#message").html(response);
                    }
                },
                error: function(response) {
                    $("#message").html("Помилка серверу.");
                }
            });
        }); 
    </script>
</body>

</html>