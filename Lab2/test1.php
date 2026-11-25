<?php

$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ]
];
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];
$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav ul {
            display: flex;
            list-style-type: none;
        }

        nav li {
            flex: 1;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            background-color: rgb(4, 40, 94);
            display: block;
            color: white;
            padding: 20px;
        }

        nav a:hover {
            background-color: #084298;
        }

        .s1 {
            max-width: 80%;
            box-shadow: 0 0 10px gray;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
        }

        .s1 h3 {
            color: #0d6efd;
            text-align: center;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            background-color: #e7f1ff;
            margin: 10px;
            padding: 15px;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
        }

        .s1 li:hover {
            background-color: #cfe2ff;
            transform: translateX(5px);
            transition: 0.3s;
        }

        .s1 h4 {
            margin: 20px 0 0 10px;
            color: #0d6efd;
        }

        .s2 {
            max-width: 80%;
            box-shadow: 0 0 10px gray;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
        }

        .s2 h3 {
            color: #0d6efd;
            margin: 0 0 10px 10px;
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }

        .s2 thead {
            background-color: #0d6efd;
            color: white;
        }

        .s2 td,
        .s2 th {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }

        .s2 tbody tr:nth-child(odd) {
            background-color: #f5f6f7;
        }

        .s2 tbody tr:hover {
            background-color: #d9e7fa;
        }
    </style>

</head>

<body>

    <nav>
        <ul>
            <?php foreach ($menus as $item) { ?>
                <li><a href=""><?= $item ?></a></li>
            <?php } ?>
        </ul>
    </nav>

    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php foreach ($subjects as $item) { ?>
                <li><?= $item ?></li>
            <?php } ?>
        </ul>
        <h4>Tổng số môn học: <?= count($subjects) ?></h4>
    </section>

    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $index => $student) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $student["id"] ?></td>
                        <td><?= $student["name"] ?></td>
                        <td><?= $student["gender"] ?></td>
                        <td><?= $student["class"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <section class="s3">
        <h3>Đăng ký thông tin sinh viên</h3>
        <form action="#" method="post">
            <div>
                <label for="n">Họ và tên</label>
                <input type="text" name="name" id="n">
            </div>
            <div>
                <label for="k">Khoa</label>
                <select name="khoa" id="k">
                    <?php foreach ($faculties as $item) { ?>
                        <option value="<?= $item ?>"><?= $item ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="l">Lớp</label>
                <select name="class" id="l">
                    <?php foreach ($classes as $key => $valus) { ?>
                        <option value="<?= $key ?>"><?= $valus ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="gt">Giới tính</label>
                <?php foreach ($genders as $gender) { ?>
                    <label>
                        <input type="radio" name="gender" id="gt" value="<?= $gender ?>"> <?= $gender ?>
                    </label>
                <?php } ?>
            </div>
            <div>
                <label for="st">Sở thích</label>
                <?php foreach ($hobbies as $key => $valus) { ?>
                    <label><input type="checkbox" name="hobbies" id="st" value="<?= $key ?>"><?= $valus ?></label>
                <?php } ?>
            </div>
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </section>

</body>

</html>