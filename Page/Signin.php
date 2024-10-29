<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path-to-styles.css">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <?php include '../Component/header.php';?>
    <div class="bg-login text-start">
        <div class="container mx-auto px-5">
            <div class="row justify-content-between align-items-stretch">
                <!-- Left -->
                <div class="col-lg-5 p-0">
                    <div>
                        <img src="../img/Logo.png" alt="Login illustration"
                            class="img-fluid pt-5 mt-5 w-100 rounded-start" />
                    </div>
                </div>
                <!-- Right -->
                <div class="col-lg-5 p-0">
                    <form id="form" class="bg-white rounded-3 py-5 px-5 mx-5 my-5" method="post"
                        action="submit-signup.php">
                        <div class="fw-bold text-center mb-3 fs-1 text-info">Sign Up</div>

                        <div class="form-input text-left mb-2">
                            <label for="username" class="ms-4 mb-2 inline-block">
                                Username
                                <strong class="text-danger">*</strong>
                            </label>
                            <div class="mx-3">
                                <input id="username" name="username"
                                    class="border w-100 rounded-pill px-3 py-2 border-secondary"
                                    placeholder="Enter username" type="text" required />
                            </div>
                            <div class="error text-danger fs-6 ms-4" id="error-username" style="display: none;">
                                Wrong username
                            </div>
                        </div>

                        <div class="text-left mb-2">
                            <label for="password" class="ms-4 text-sm font-medium mb-2 inline-block text-gray-600">
                                Password
                                <strong class="text-danger">*</strong>
                            </label>
                            <div class="mx-3">
                                <input id="password" name="password"
                                    class="border w-100 rounded-pill px-3 py-2 border-secondary" type="password"
                                    placeholder="Enter password" required />
                            </div>
                            <div class="error text-danger fs-6 ms-4" id="error-password" style="display: none;">
                                Invalid password
                            </div>
                        </div>

                        <div class="text-left mb-2">
                            <label for="phone" class="ms-4 text-sm font-medium mb-2 inline-block text-gray-600">
                                Phone Number
                                <strong class="text-danger">*</strong>
                            </label>
                            <div class="mx-3">
                                <input id="phone" name="phone"
                                    class="border w-100 rounded-pill px-3 py-2 border-secondary"
                                    placeholder="Enter phone number" type="text" required />
                            </div>
                            <div class="error text-danger fs-6 ms-4" id="error-phone" style="display: none;">
                                Please enter phone with 10 digits
                            </div>
                        </div>

                        <div class="mt-4 mx-3">
                            <button id="signup" name="submit"
                                class="py-2 px-3 w-100 rounded-pill bg-info border border-secondary text-white fw-bold fs-5"
                                type="submit">
                                Create account
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <a href="login.php" class="fs-6 text-decoration-none text-secondary">Log In.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include '../Component/footer.php';?>
</body>

</html>