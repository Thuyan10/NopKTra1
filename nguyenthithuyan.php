<!--
Bai kiem tra 
Trac nghiem : 
Cau 1 : 5
Cau 2 : b
Cau 3 : d
Cau 4 : a
Cau 5 : a -->
<?php
// Bài 1:
echo "Bài 1: <br>";
// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
// Kiểm tra xem số 5 có phải là số nguyên tố hay không
$numberToCheck = 5;
if (isPrime($numberToCheck)) {
    echo $numberToCheck . " là số nguyên tố. <br>";
} else {
    echo $numberToCheck . " không là số nguyên tố. <br>";
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: <br>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";
// Bài 2: 
echo "Bài 2: <br>";
// Khai báo mảng
$products = [
    [
        "name" => "Áo ",
        "price" => 120000,
        "quantity" => 5
    ],
    [
        "name" => "Quần",
        "price" => 250000,
        "quantity" => 3
    ],
    [
        "name" => "Giày",
        "price" => 500000,
        "quantity" => 2
    ],
    [
      "name" => "Khăn",
      "price" => 50000,
      "quantity" => 1
    ],
  [
    "name" => "Túi",
    "price" => 200000,
    "quantity" => 1
]
];
// Hiển thị thông tin sản phẩm
foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product['name'] . "<br>";
    echo "Giá: " . $product['price'] . "<br>";
    echo "Số lượng: " . $product['quantity'] . "<br>";
  
}

// Hàm tính tổng giá trị sản phẩm
function tinhTongGiaTri($products) {
    $tongGiaTri = 0;

    foreach ($products as $product) {
        $tongGiaTri += $product['price'] * $product['quantity'];
    }

    return $tongGiaTri;
}

$tongGiaTri = tinhTongGiaTri($products);
echo "Tổng giá trị của tất cả sản phẩm là: " . $tongGiaTri . "<br>";

?>

