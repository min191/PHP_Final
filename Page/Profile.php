<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Profile.css">
</head>

<body>
<?php include '../Component/Header.php';?>
    <div class="container">
        <h2>Thông Tin Cá Nhân</h2>
        <div class="container-profile">
            <div class="profile">
                <div class="avatar">
                    <img src="../img/mint.jpg" alt="Avatar" />
                </div>
                <div class="info">
                    <p><strong>Mã Học Viên: </strong>123123</p>
                    <p><strong>Họ Và Tên: </strong>Nguyễn Văn A</p>
                    <p><strong>Ngày sinh: </strong>01/01/2000</p>
                    <p><strong>Giới tính: </strong>Nam</p>
                </div>
            </div>
            <form>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="phone">Số Điện Thoại:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="input-group">
                    <label for="quequan">Quê Quán:</label>
                    <input type="text" id="quequan" name="quequan">
                </div>
                <div class="input-group">
                    <label for="address">Địa Chỉ Thường Trú:</label>
                    <input type="text" id="address" name="address">
                </div>

                <h3>Khóa Học Đã Đăng Kí:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Khóa Học</th>
                            <th>Tên Khóa Học</th>
                            <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example row, you can add more -->
                        <tr>
                            <td>1</td>
                            <td>KH001</td>
                            <td>Lập Trình Java</td>
                            <td>3 tháng</td>
                        </tr>
                    </tbody>
                </table>

                <button type="submit" class="update-btn">Cập Nhật Thông Tin Cá Nhân</button>
            </form>
        </div>
    </div>
    <?php include '../Component/Footer.php';?>
</body>

</html>