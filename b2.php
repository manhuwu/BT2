<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen()
$x1 = strlen('Viết một chương trình PHP để đếm số ký tự trong một chuỗi');
echo "Độ dài kí tự trong chuỗi trên là: $x1"."<br>";

//Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()
$x2 = str_word_count('Viết một chương trình PHP để đếm số từ trong một chuỗi');
echo "Số từ trong chuỗi trên là: $x2"."<br>";

//Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev()
$x3 = strrev('maianh');
echo "Từ đảo ngược là: $x3"."<br>";

//Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
$x4 = strpos('Tết trung thu rước đèn đi chơi', "đèn");
echo "Vị trí chuỗi 'đèn' trong chuỗi trên là: $x4"."<br>";

//Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()
$chuoi1 = "Em rước đèn đi khắp phố phường";
$search = "Em";
$replace = "Anh";
$x5 = str_replace($search, $replace, $chuoi1);
echo "chuỗi mới: $x5"."<br>";

//Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
$chuoi_goc1 = "Tôi tên là hổ nhưng tôi không đủ ranh mãnh";
$chuoi_con1 = "Tôi";
$x6 = strncmp($chuoi_goc1, $chuoi_con1, strlen($chuoi_con1)) === 0;
echo "Chuỗi '$chuoi_goc1' ".($x6 ? "bắt đầu":"không bắt đầu")." bằng chuỗi con '$chuoi_con1'."."<br>";

//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
$chuoi2 = "ăn uống thì thanh cảnh tính chẳng đủ lưu manh";
$x7 = strtoupper($chuoi2);
echo "Chuỗi sau khi chuyển thành chữ hoa: $x7"."<br>";

//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower()
$chuoi3 = "TÔI TÊN LÀ THỎ";
$x8 = strtolower($chuoi3);
echo "Chuỗi sau khi chuyển thành chữ thường: $x8"."<br>";

//Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
$chuoi4 = "tôi không ở xa lắm";
$x9 = ucwords($chuoi4);
echo "Chuỗi sau khi chuyển thành in hoa chữ cái đầu: $x9"."<br>";

//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
$chuoi5 = "   sống ở bên kia đồi   ";
$x10 = trim($chuoi5);
echo "Chuỗi sau khi loại bỏ khoảng trắng: '$x10'"."<br>";

//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
$chuoi6 = "bên kia đồi xanh xanh";
$x11 = ltrim($chuoi6, "b");
echo "Chuỗi sau khi loại bỏ ký tự đầu tiên: '$x11'"."<br>";

//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
$chuoi7 = "ôi voi con ơiii?";
$x12 = rtrim($chuoi7, "?");
echo "Chuỗi sau khi loại bỏ ký tự cuối cùng: '$x12'"."<br>";

//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
$chuoi8 = "quên,lời,rồi,huhu";
$x13 = explode(",", $chuoi8);
echo "Mảng sau khi tách chuỗi: ";
print_r($x13);
echo "<br>";

//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
$mang = ["Bánh", "Trung", "Thu", "Bánh", "Nướng"];
$x14 = implode(" ", $mang);
echo "Chuỗi sau khi nối các phần tử của mảng: '$x14'"."<br>";

//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
$chuoi9 = "Bánh";
$x15 = str_pad($chuoi9, 10, "Nướng ", STR_PAD_LEFT);
echo "Chuỗi sau khi thêm vào đầu: '$x15'"."<br>";

//Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
$chuoi_goc2 = "Chiếc đèn ông sao sao 5 cánh tươi màu";
$chuoi_con2 = "màu";
$x16 = strrchr($chuoi_goc2, $chuoi_con2) === $chuoi_con2;
echo "Chuỗi '$chuoi_goc2' " . ($x16 ? "kết thúc" : "không kết thúc") . " bằng chuỗi con '$chuoi_con2'." . "<br>";

//Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
$chuoi_goc3 = "Cán cây rất dài cán cao quá đầu";
$chuoi_con3 = "cây";
$x17 = strstr($chuoi_goc3, $chuoi_con3) !== false;
echo "Chuỗi '$chuoi_goc3' " . ($x17 ? "có chứa" : "không chứa") . " chuỗi con '$chuoi_con3'." . "<br>";

//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$chuoi10 = "toi muon di ngu!!!!";
$x18 = preg_replace("/[^a-zA-Z0-9]/", "_", $chuoi10);
echo "Chuỗi sau khi thay thế các ký tự đặc biệt: '$x18'"."<br>";

//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
$chuoi11 = "1404";
$x19 = is_int((int)$chuoi11);
echo "'$chuoi11' " . ($x19 ? "là" : "không phải là") . " một số nguyên." . "<br>";

//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
$email = "manhne14424@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "'$email' là một email hợp lệ.<br>";
} else {
    echo "'$email' không phải là một email hợp lệ.<br>";
}


?>

</body>
</html>