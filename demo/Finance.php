<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lecturer</title>
    <link rel="stylesheet" href="../css/Finance.css">
    <link rel="stylesheet" href="../css/Blog.css">
</head>

<body>
    <!-- Include header component -->
    <?php include '../Component/Header.php'; ?>

    <!-- Banner Section -->
    <div class="containernew-Finance">
        <p>
            <span style="font-size: 24px; color: blue;">Home</span>
            <span style="font-size: 12px;">/Finance</span>
        </p>
    </div>

    <!-- Main content -->
    <div class="containernew-lotter">
        <div class="container-latter">
            <p>
                <span style="font-size: 24px; color: red;">VIEW STUDENT FINANCIAL GUIDE HERE (SUPPORT PHONE NUMBER: )</span> ↰
            </p>
            <p>
                <span style="font-size: 24px; color: red;">VIEW TUITION FEE OBLIGATION NOTICE HERE (SUPPORT PHONE NUMBER: )</span> ↰
            </p>

            <!-- Container for table and subtotal box -->
            <div class="container-table-subtotal">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Course</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <!-- Subtotal Box -->
                <div class="subtotal-box">
                    <h4>Subtotal:</h4>
                    <p>0 VNĐ</p>
                    <h4>Coupon code:</h4>
                    <p>0 VNĐ</p>
                    <h4>Grand total:</h4>
                    <p>0 VNĐ</p>
                    <p>Congrats, you're eligible for <strong>free shipping</strong></p>
                    <hr>
                    <button class="checkout-button">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include footer component -->
    <?php include '../Component/Footer.php'; ?>
</body>

</html>
