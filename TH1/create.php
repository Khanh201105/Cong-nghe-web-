<?php
// Không include database, chỉ minh họa POST
$thong_bao = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten_hoa    = $_POST['ten_hoa'] ?? '';
    $mo_ta = $_POST['mo_ta'] ?? '';
    $anh          = $_POST['anh'] ?? '';

    // Ở giai đoạn này, chỉ echo lại dữ liệu hoặc redirect demo
    // Có thể cho sinh viên xem var_dump($_POST) để hiểu dòng chảy
    $thong_bao = "Dữ liệu đã được gửi bằng POST. (Trong bản có DB sẽ INSERT vào bảng.)";

    // Ví dụ: redirect để minh họa vòng đời request
    header("Location: bai1_admin.php?success=created");
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm loại hoa mới (Demo POST)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
    <div>Quản lý Loại hoa</div>
    <div>
        <a href="bai1_admin.php">Dashboard</a>
    </div>
</div>

<div class="container">
    <h2>Thêm loại hoa mới</h2>
    <p>Form này chỉ dùng để minh họa cách gửi dữ liệu bằng <b>POST</b> trong PHP, chưa lưu vào CSDL.</p>

    <form action="create.php" method="POST">
        <div style="margin-bottom:10px;">
            <label>Tên loại hoa</label><br>
            <input type="text" name="ten_hoa" style="width:100%; padding:6px;" required>
        </div>
        <div style="margin-bottom:10px;">
            <label>Mô tả hoa</label><br>
            <input type="text" name="mo_ta" style="width:100%; padding:6px;" required>
        </div>
        <div style="margin-bottom:10px;">
            <label>Ảnh minh họa</label><br>
            <input type="text" name="anh" style="width:100%; padding:6px;" required>
        </div>

        <button type="submit" class="btn btn-primary">Gửi dữ liệu (POST)</button>
        <a href="bai1_admin.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>
</body>
</html>