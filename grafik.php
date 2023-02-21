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
		<h1>График работы магазина</h1>
	<h1>График работы магазина</h1>
	<table>
		<tr>
			<th>День недели</th>
			<th>Часы работы</th>
		</tr>
		<tr>
			<td>Понедельник</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Вторник</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Среда</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Четверг</td>
			<td>10:00 - 20:00</td>
		</tr>
		<tr>
			<td>Пятница</td>
			<td>10:00 - 21:00</td>
		</tr>
		<tr>
			<td>Суббота</td>
			<td>10:00 - 21:00</td>
		</tr>
		<tr>
			<td>Воскресенье</td>
			<td>10:00 - 20:00</td>
		</tr>
	</table>

	<h2>Информация о работе магазина</h2>
	<p>Магазин предлагает широкий выбор шаурмы и хот-догов. У нас всегда свежие и качественные продукты. Мы рады предложить Вам наши лучшие блюда.</p>
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
    <script>
        
        function update() {
            $.ajax({
                type: "POST",
                url: "tools/chat_processor.php",
                data: {"action":"update"},
                success: function(response) {
                    $(".block-chat").html("");
                    console.log(response);
                    let data = JSON.parse(response);
                    for(let i=0; i<data.length;i++){
                        let html = `<div class="message">
                    <h3>${data[i].author}</h3>
                    <p>${data[i].text}</p>
                </div>`;
                    $(".block-chat").append(html);
                    }
                },
            });
        }
        update();
        setInterval(update,1000);
        $("#send-message").click(function(){
            var data = {"action":"send","text":$("#text").val()};
            $("#text").val("");
            $.ajax({
                type: "POST",
                url: "tools/chat_processor.php",
                data: data,
            });
        });

    </script>
</body>

</html>