<!doctype html>
<html lang="th">
<head>
<?php include_once('_Php_Script/header.php'); ?>
</head>
<body>
<?php include('_Php_Script/nav.php'); ?>
        <br><br>
        <br><br>
    <div class="container mt-5">
        <h1 class="text-center">คำนวณแคลอรี่และสารอาหาร</h1>
        <form action="calculate.php" method="post">
            <div class="form-group">
                <label for="food1">อาหาร 1:</label>
                <input type="text" class="form-control" id="food1" name="food1_name" placeholder="ชื่ออาหาร">
                <input type="number" class="form-control mt-2" id="food1_calories" name="food1_calories" placeholder="แคลอรี่">
                <input type="number" class="form-control mt-2" id="food1_protein" name="food1_protein" placeholder="โปรตีน">
                <input type="number" class="form-control mt-2" id="food1_carbs" name="food1_carbs" placeholder="คาร์โบไฮเดรต">
                <input type="number" class="form-control mt-2" id="food1_fat" name="food1_fat" placeholder="ไขมัน">
            </div>
            <div class="form-group">
                <label for="food2">อาหาร 2:</label>
                <input type="text" class="form-control" id="food2" name="food2_name" placeholder="ชื่ออาหาร">
                <input type="number" class="form-control mt-2" id="food2_calories" name="food2_calories" placeholder="แคลอรี่">
                <input type="number" class="form-control mt-2" id="food2_protein" name="food2_protein" placeholder="โปรตีน">
                <input type="number" class="form-control mt-2" id="food2_carbs" name="food2_carbs" placeholder="คาร์โบไฮเดรต">
                <input type="number" class="form-control mt-2" id="food2_fat" name="food2_fat" placeholder="ไขมัน">
            </div>
            <button type="submit" class="btn btn-primary btn-block">คำนวณ</button>
        </form>
    </div>

</body>
</html>