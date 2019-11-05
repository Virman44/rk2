<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Моя страничка с рк2</title>
</head>
<body>
	<p>Ильин Андрей ИУ4-12Б Вариант 8 Задание 1</p>
 <p><?php
 	echo "<div>x | x^2 | x^3</div>";
 	for($i = 0; $i<=100 ; $i++){
        $i1=$i*$i;
        $i2=$i*$i*$i;
  echo "<div>$i | $i1 | $i2</div>";  
}
 	?></p>
 	<p>Задание 2</p>
 	<form action="" method="POST">
 		<p>Длина<input selected value="0" type="number" name="dl"></p>
 		<p>Ширина<input selected value="0" type="number" name="sh"></p>
 		<p>Высота<input selected value="0" type="number" name="vi"></p>
 <select name="option">
                <option selected value="1">Площадь</option>
                <option value="2">Объем</option>
                <option value="3">Площадь и объем</option>
            </select>
 <p><input type="submit" value="Получить результат"></p>
 <p>Результат: <?php
 $dl=$_POST["dl"];
 $sh=$_POST["sh"];
 $vi=$_POST["vi"];
if($_POST["option"] == "1"){
    $S=$dl*$sh;
        echo "<div>S=$S</div>";
    }
    if($_POST["option"] == "2"){
        $V=$dl*$sh*$vi;
        echo "<div>V=$V</div>";
    } 
    if($_POST["option"] == "3"){
       $S=$dl*$sh;
        $V=$dl*$sh*$vi;
        echo "<div>S=$S V=$V</div>";
    }
?></p>
</body>
</html>
