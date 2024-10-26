<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Finance.css">
</head>

<body>
    <?php include '../Component/Header.php';?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastLearn - Home</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container mt-2" style="min-height: 500px">
        <div class="row">
            <div class="product-list-container mx-4 mb-5 mt-2">
                <div class="row header-row py-2">
                    <div class="col-image">IMAGE</div>
                    <div class="col-product">PRODUCT</div>
                    <div class="col-price">PRICE</div>
                    <div class="col-quantity">QUANTITY</div>
                    <div class="col-total">TOTAL</div>
                    <div class="col-remove">REMOVE</div>
                </div>
                <div key={product.id} class="row product-row align-items-center py-3 border-bottom">
                    <div class="col-image">
                        <img src={product.img} class="product-image" alt={product.title} />
                    </div>
                    <div class="col-product text-start">{product.title}</div>
                    <div class="col-price">{formatPrice(product.price)} VNĐ</div>
                    <div class="col-quantity">{product.quantity}</div>
                    <div class="col-total">{formatPrice(product.price * product.quantity)} VNĐ</div>
                    <div class="col-remove">
                        <button class="btn-remove">Remove</button>
                    </div>
                </div>
            </div>
            <div class="summary-container pt-3">
                <div class="summary-box">
                    <div class="summary-row py-2">
                        <div class="summary-label">Subtotal:</div>
                        <div class="summary-value">{formatPrice(calculateTotal())} VNĐ</div>
                    </div>
                    <div class="summary-row py-2">
                        <div class="summary-label">Coupon code:</div>
                        <div class="summary-value">0 VNĐ</div>
                    </div>
                    <div class="summary-row py-2">
                        <div class="summary-label">Grand total:</div>
                        <div class="summary-grand-total">{formatPrice(calculateTotal())} VNĐ</div>
                    </div>
                    <div class="shipping-info my-3">
                        <div class="row mt-4">
                            <div class="col-info">
                                <span>Congrats, you're for</span>
                                <br />
                                <span class="fw-bold">free shipping</span>
                            </div>
                            <div class="col-icon">
                                <i class="fa-solid fa-car-side"></i>
                            </div>
                        </div>
                        <div class="separator my-4"></div>
                        <div>
                            <button class="btn-checkout" onclick="openPopup()">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/Carousel_home.js"></script>
</html>

    <?php include '../Component/Footer.php';?>
</body>

</html>