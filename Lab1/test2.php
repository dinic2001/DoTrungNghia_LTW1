<?php
    $a = 14;
    $b = 11;
    echo "Tong: $a + $b = ".$a + $b."<br>";
    echo "Tru: $a - $b = ".$a - $b."<br>";
    echo "Nhan: $a * $b = ".$a * $b."<br>";
    echo "Chia: $a / $b = ".$a / $b."<br>";
    echo "Chia lay du: $a % $b = ".$a % $b."<br>";

    $int = 14;
    $str = "string";
    //so sanh bang (chi so sanh gia tri bang nhau)
    echo "<br>So sanh $int == $str >> ";
    var_dump($int == $str);
    //so sanh bang tuyet doi (so sanh gia tri va kieu du lieu)
    echo "<br>So sanh $int === $str >> ";
    var_dump($int === $str);
    // so sanh khac gia tri
    echo "<br>So sanh $int != $str >> ";
    var_dump($int != $str);
    // so sanh khac
    echo "<br>So sanh $int <> $str >> ";
    var_dump($int <> $str);
    // so sanh khac gia tri hoac kieu du lieu
    echo "<br>So sanh $int !== $str >> ";
    var_dump($int !== $str);

    $x = 1;
    echo 'Gia tri bien $x = '.$x;
    // bien tang 1 don vi truoc khi thuc hien phep toan
    echo '<br><br>Tang truoc ++$x: '.++$x;
    $x = 1;
    // bien tang 1 don vi sau khi thuc hien phep toan
    echo '<br>Tang sau $x++: '.$x++;

    $str1 = "Lap Trinh ";
    $str2 = "Web ";
    // Noi chuoi bang . tao chuoi moi tu cac chuoi duoc noi
    echo "<br><br>Noi tu bang . : ".$str1.$str2;
    // Noi chuoi bang .= noi chuoi roi gan vao bien trai
    echo "<br>Noi chuoi bang .= : ".$str1.=$str2;

    $str = "Do Trung Nghia";
    // Dem so byte cua chuoi
    echo "<br><br>Do dai chuoi khong dau: ".strlen($str);
    $str = "Đỗ Trung Nghĩa";
    // Dem so ky tu cua chuoi theo bang ma
    echo "<br>Do dai chuoi co dau: ".mb_strlen($str);

    $str = "Do Trung Nghia";
    echo "<br><br>Chuoi ban dau: ".$str;
    // Bien chuoi thanh chuoi thuong
    echo "<br>Chuoi thuong: ".strtolower($str);
    // Bien chuoi thanh chuoi in hoa
    echo "<br>Chuoi hoa: ".strtoupper($str);
    // mb_strtoupper(), mb_strtolower() tuong tu nhu strtoupper(), strtolower() nhung co the thuc hien duoc tren chuoi co dau, con strtoupper(), strtolower() thi khong

    $str1 = "123 abc";
    $str2 = "abc 123";
    echo "<br><br>Ket qua ep kieu chuoi 1: "; echo var_dump((int)$str1);
    echo "<br>Ket qua ep kieu chuoi 2: "; echo var_dump((int)$str2);

    $int = 1;
    $float = 1.0;
    $str = "abc";
    $bool = true;
    echo "<br><br>"; echo var_dump($int);
    echo "<br>"; echo var_dump($float);
    echo "<br>"; echo var_dump($str);
    echo "<br>"; echo var_dump($bool);
?>