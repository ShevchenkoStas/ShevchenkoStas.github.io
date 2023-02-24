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
   
        <body>
		__________________________
		__________________________
		<h1>Графік роботи магазину</h1>
	<h1>Графік роботи магазину</h1>
	<table>
		<tr>
			<th>День тижня</th>
			<th>Години роботи</th>
		</tr>
		<tr>
			<td>Понеділок</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Вівторок</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Середа</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Четвер</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>П'ятниця</td>
			<td>10:00 - 21:00</td>
		</tr>
		<tr>
			<td>Субота</td>
			<td>10:00 - 21:00</td>
		</tr>
		<tr>
			<td>Неділя</td>
			<td>10:00 - 20:00</td>
		</tr>
	</table>

	<h2>Інформація по роботі магазину</h2>
	<p>Магазин пропонує широкий вибір шаурми і хот-догів. У нас завжди свіжі та якісні продукти. Ми раді предоставити Вам наші найкращі страви.</p>
</body>
</html>
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
    
</body>

</html>