<?php
// ฟังก์ชันคำนวณแคลอรี่
function calculateCalories($foodItems) {
    $totalCalories = 0;
    foreach ($foodItems as $item) {
        $totalCalories += (int)$item['calories']; // Convert to integer
    }
    return $totalCalories;
}

// ฟังก์ชันคำนวณสารอาหาร
function calculateNutrients($foodItems) {
    $nutrients = [
        'protein' => 0,
        'carbs' => 0,
        'fat' => 0
    ];
    foreach ($foodItems as $item) {
        $nutrients['protein'] += (int)$item['protein']; // Convert to integer
        $nutrients['carbs'] += (int)$item['carbs']; // Convert to integer
        $nutrients['fat'] += (int)$item['fat']; // Convert to integer
    }
    return $nutrients;
}

// รับค่าจากฟอร์ม
$foodItems = [
    [
        'name' => $_POST['food1_name'],
        'calories' => $_POST['food1_calories'],
        'protein' => $_POST['food1_protein'],
        'carbs' => $_POST['food1_carbs'],
        'fat' => $_POST['food1_fat']
    ],
    [
        'name' => $_POST['food2_name'],
        'calories' => $_POST['food2_calories'],
        'protein' => $_POST['food2_protein'],
        'carbs' => $_POST['food2_carbs'],
        'fat' => $_POST['food2_fat']
    ]
];

// คำนวณแคลอรี่และสารอาหาร
$totalCalories = calculateCalories($foodItems);
$nutrients = calculateNutrients($foodItems);

// Convert PHP variables to JavaScript
echo "<script>
    var totalCalories = $totalCalories;
    var protein = {$nutrients['protein']};
    var carbs = {$nutrients['carbs']};
    var fat = {$nutrients['fat']};
</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <?php include_once('_Php_Script/header.php'); ?>
    <?php include('_Php_Script/nav.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Display the results using SweetAlert2
        Swal.fire({
            title: 'ผลลัพธ์การคำนวณ',
            html: `
                <p>แคลอรี่ทั้งหมด: ${totalCalories} kcal</p>
                <p>โปรตีน: ${protein} กรัม</p>
                <p>คาร์โบไฮเดรต: ${carbs} กรัม</p>
                <p>ไขมัน: ${fat} กรัม</p>
            `,
            icon: 'info',
            confirmButtonText: 'ตกลง',
            willClose: () => {
                window.location.href = 'index.php'; // เปลี่ยนเส้นทางไปยังหน้าหลัก
            }
        });
    </script>
</body>
</html>
