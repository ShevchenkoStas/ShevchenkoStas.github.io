<?php
session_start();
$user = $_SESSION['user'];
if($user!=null){
    include("tools/db.php");
    $id = $user['id'];
    $basket = $mysql->query("SELECT * FROM basket WHERE user_id='$id'");
}
$suma = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаурма-онлайн | Купуй тільки у нас</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/basket.css">
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
                <?php if($user!=null){
                    if($user['admin']==1){?>
                        
                    <?php }?>
                        
                    
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
    <div class="basket">
        <h2>СПИСООК ЗАМОВЛЕНЬ:</h2>
        <!DOCTYPE html>
<html>

<body>
	

	<table>
		<tr>
			<th>Номер заказа</th>
			<th>Дата заказа</th>
			<th>Тип заказа</th>
			<th>Сумма заказа</th>
		</tr>

		<?php
		

		// Вывод данных в виде таблицы
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["order_id"] . "</td>";
				echo "<td>" . $row["order_date"] . "</td>";
				echo "<td>" . $row["order_type"] . "</td>";
				echo "<td>" . $row["order_total"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='4'>Нет заказов</td></tr>";
		}


		?>

</body>
</html>
        

