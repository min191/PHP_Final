<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <?php include '../Component/Header.php';?>
    <div class="bg-login container mx-auto px-5">
        <div class="row justify-content-between align-items-stretch">
            <!-- Left -->
            <div class="col-lg-5 p-0">
                <div>
                    <img src="../img/Logo.png" class="img-fluid pt-5 mt-5 w-100 rounded-start" />
                </div>
            </div>
            <!-- Right -->
            <div class="col-lg-5 p-0">
                <form class="bg-white rounded-3 py-5 px-5 mx-5 my-5">
                    <div class="fw-bold text-center mb-3 fs-1 text-info">Log In</div>
                    <!-- Username -->
                    <div class="form-input text-start mb-4">
                        <label for="username" class="ms-4 text-sm font-medium mb-2 inline-block">
                            Username
                            <strong class="text-danger">*</strong>
                        </label>
                        <div class="mx-3">
                            <input id="phone" class="border w-100 rounded-pill px-3 py-2 border-secondary"
                                placeholder="Enter phone number" data-gtm-form-interact-field-id="0" />
                        </div>
                        <div class="error text-danger fs-6 ms-4" id="error-message" style="display: none;">
                            Wrong phone
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="text-start mb-4">
                        <label for="pwd" class="ms-4 text-sm font-medium mb-2 inline-block text-gray-600">
                            Password
                            <strong class="text-danger">*</strong>
                        </label>
                        <div class="mx-3">
                            <input id="password" class="border w-100 rounded-pill px-3 py-2 border-secondary"
                                type="password" placeholder="Enter password" />
                        </div>
                        <div class="error text-danger fs-6 ms-4" id="error-pass" style="display: none;">
                            Wrong password
                        </div>
                    </div>
                    <!-- LogIn button -->
                    <div class="mt-4 mx-3">
                        <button id="logIn"
                            class="py-2 px-3 w-100 rounded-pill bg-info border border-secondary text-white fw-bold fs-5"
                            type="submit">
                            Log In
                        </button>
                    </div>
                    <!-- Links -->
                    <div class="ms-4 mt-3 mb-3 text-center">
                        <a class="text-secondary fs-6 text-decoration-none" href="#">
                            Forgot the password ?
                        </a>
                        <br />
                        <a class="text-secondary fs-6 text-decoration-none" href="./Signin.php">
                            Create new account.
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include '../Component/footer.php';?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>