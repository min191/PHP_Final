<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/Finance.css"> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
</head>

<body>
    <?php include '../Component/Header.php';?>
    <div class="mt-2" style="min-height: 500px;">
    <div class="row">
        <div class="col-12 col-lg-8 mx-4 mb-5 mt-2">
            <div class="row bg-light text-center py-2">
                <div class="col-2">IMAGE</div>
                <div class="col-3">PRODUCT</div>
                <div class="col-2">PRICE</div>
                <div class="col-2">QUANTITY</div>
                <div class="col-2">TOTAL</div>
                <div class="col-1">REMOVE</div>
            </div>

            <!-- Example product item -->
            <div class="row align-items-center text-center py-3 border-bottom">
                <div class="col-2">
                    <img src="image-url.jpg" style="width: 100%;" alt="Product Title">
                </div>
                <div class="col-3 text-start">Product Title</div>
                <div class="col-2">100,000 VNĐ</div>
                <div class="col-2">1</div>
                <div class="col-2">100,000 VNĐ</div>
                <div class="col-1">
                    <button class="btn btn-dark">Remove</button>
                </div>
            </div>
            <!-- End example product item -->
        </div>
        
        <div class="col-12 col-lg-3 pt-3">
            <div>
                <div class="d-flex justify-content-between border-bottom align-items-center py-2">
                    <div class="fw-bold">Subtotal:</div>
                    <div>200,000 VNĐ</div>
                </div>
                <div class="d-flex justify-content-between border-bottom align-items-center py-2">
                    <div class="fw-bold">Coupon code:</div>
                    <div>0 VNĐ</div>
                </div>
                <div class="d-flex justify-content-between border-bottom align-items-center py-2">
                    <div class="fw-bold">Grand total:</div>
                    <div class="fs-3">200,000 VNĐ</div>
                </div>
                <div class="text-start my-3">
                    <div class="row mt-4">
                        <div class="col-md-9">
                            <span>Congrats, you're for</span><br>
                            <span class="fw-bold">free shipping</span>
                        </div>
                        <div class="col-md-3">
                            <i class="fa-solid fa-car-side"></i>
                        </div>
                    </div>
                    <div class="line border-top border-4 border-info my-4"></div>
                    <div>
                        <button class="w-100 btn btn-warning">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="../js/Carousel_home.js"></script>
<?php include '../Component/Footer.php';?>

</html>