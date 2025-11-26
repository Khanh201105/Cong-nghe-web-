<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Loại hoa</title>
    <!-- Chèn CSS nếu cần, ví dụ Bootstrap hay style.css -->
    <link rel="stylesheet" href="style_b3.css">
    
</head>
<?php 

    //load câu hỏi

    $SVfile = fopen('SinhVien.csv','r') or die ("Lỗi mở file");
    echo "<table border = '1' class='table'>";
    echo "<thead class='thead'><tr>";
        //đọc dòng đầu lấy làm header
        if (($header = fgetcsv($SVfile, 1000,",")) !==FALSE){
            foreach ($header as $col) {
                echo "<th>$col</th>";
            }
        }
    echo "</tr></thead>";
    echo "<tbody class='tbody'>";
        //Đọc các dòng còn lại làm nd bảng
    while (($row = fgetcsv($SVfile, 1000, ",")) !== FALSE){
        echo "<tr>";
        foreach ($row as $col){
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    fclose($SVfile);
?>