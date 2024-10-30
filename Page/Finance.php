<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../Component/Header.php'; ?>
    <div class="mt-4" style="min-height: 530px;">
        <div class="row">
            <div class="col-12 col-lg-8 mx-4 mb-5 mt-2">
                <div class="row bg-light text-center py-2">
                    <div class="col-1">STT</div>
                    <div class="col-3">COURSE</div>
                    <div class="col-2">PRICE</div>
                    <div class="col-1">REMOVE</div>
                </div>
                <div id="course-list"></div> <!-- Dynamic course list will be inserted here -->
            </div>
            <div class="col-12 col-lg-3 pt-3">
                <div>
                    <div class="d-flex justify-content-between border-bottom align-items-center py-2">
                        <div class="fw-bold">Course:</div>
                        <div id="title"></div> <!-- Display course names -->
                    </div>
                    <div class="d-flex justify-content-between border-bottom align-items-center py-2">
                        <div class="fw-bold">Total:</div>
                        <div id="total" class="fs-3">0 VNĐ</div> <!-- Display total fees -->
                    </div>
                    <div class="text-start my-3">
                        <div class="row mt-4">
                            <div class="col-md-9">
                                <span>Congrats, you're eligible for</span><br>
                                <span class="fw-bold">free shipping</span>
                            </div>
                            <div class="col-md-3">
                                <i class="fas fa-car-side"></i>
                            </div>
                        </div>
                        <div class="line border-top border-4 border-info my-4"></div>
                        <div>
                            <button id="checkout-btn" class="w-100 btn btn-warning" onclick="checkout()">Checkout</button>
                        </div>
                        <div id="checkout-confirmation" style="display: none;">
                            <button class="btn btn-success w-100 mt-3" onclick="confirmCheckout()">OK</button>
                            <p id="checkout-status" class="text-center mt-2 text-success" style="display: none;">Checkout Success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            function formatCurrency(value) {
                return value.toLocaleString('en-VN', { style: 'currency', currency: 'VND' }).replace('$', '') + ' VND';
            }

            function displayCourses() {
                const courses = JSON.parse(localStorage.getItem('purchasedCourses')) || [];
                const courseList = document.getElementById('course-list');
                courseList.innerHTML = ""; 

                let totalFees = 0;
                courses.forEach((course, index) => {
                    totalFees += course.fee;
                    courseList.innerHTML += `
                        <div class='row product-row align-items-center text-center py-3 border-bottom'>
                            <div class='col-1 text-start'>${index + 1}</div>
                            <div class='col-3 text-start'>${course.name}</div>
                            <div class='col-2 product-price'>${formatCurrency(course.fee)}</div>
                            <div class='col-1'>
                                <button class='btn btn-dark' onclick='removeCourse(${index})'>Remove</button>
                            </div>
                        </div>`;
                });

                document.getElementById('title').textContent = courses.map(course => course.name).join(", ");
                document.getElementById('total').textContent = formatCurrency(totalFees);
            }

            function removeCourse(index) {
                let courses = JSON.parse(localStorage.getItem('purchasedCourses')) || [];
                const courseName = courses[index].name;
                if (confirm(`Are you sure you want to remove ${courseName}?`)) {
                    courses.splice(index, 1);
                    localStorage.setItem('purchasedCourses', JSON.stringify(courses));
                    displayCourses();
                }
            }

            function checkout() {
                const courses = JSON.parse(localStorage.getItem('purchasedCourses')) || [];
                if (courses.length > 0) {
                    document.getElementById("checkout-confirmation").style.display = "block";
                    document.getElementById("checkout-btn").style.display = "none";
                } else {
                    alert("No courses to checkout.");
                }
            }

            function confirmCheckout() {
                localStorage.removeItem('purchasedCourses');
                displayCourses();
                document.getElementById("checkout-status").style.display = "block";
                setTimeout(() => {
                    document.getElementById("checkout-status").style.display = "none";
                    document.getElementById("checkout-btn").style.display = "block";
                    document.getElementById("checkout-confirmation").style.display = "none";
                }, 2000);
            }

            document.addEventListener("DOMContentLoaded", displayCourses);
        </script>
    </div>
    <?php include '../Component/Footer.php'; ?>
</body>
</html>