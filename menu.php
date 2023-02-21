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
    <link rel="stylesheet" href="./css/avt.css">
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
    <div class="chat">
        <form action="tools/add_product.php" method="POST" class="avt" enctype="multipart/form-data">
            <h2>ЗАМОВЛЕННЯ ОНЛАЙН</h2>
          
            <p>НАЗВА ТОВАРУ</p>
            <input type="text" placeholder="Кебаб от шеф-повара Шевченко" required name="title">
            <p>КАТЕГОРІЯ ТОВАРУ</p>
            <select name="category" required>
                <option value="none" disabled>ВИД ЗАМОВЛЕННЯ</option>
                <option value="shaaurma">Шаурма</option>
                <option value="hot-dog">Хот-доги</option>
            </select>
            <p>ДОДАТКОВИЙ ОПИС ЗАМОВЛЕННЯ</p>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <p>КІЛЬКІСТЬ ЗАМОВЛЕННЯ (ШТ.)</p>
            <input type="number" name="price" placeholder="123123">
            <button style="background-color: orange;">ЗАМОВИТИ</button>
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
</body>

</html>