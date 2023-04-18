<?php


?>
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url(images/9.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            object-fit: cover;
        }

        form {
            background-color: #cd853f;
        }
    </style>
    <title>Street Food Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container my-5 d-flex justify-content-center">

        <form method="POST" action="router.php" class="w-50 p-3 mb-2 opacity-75 rounded-5 text-white">

            <h1>User Registration</h1>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" required="" placeholder="Username" name="username">
            </div>


            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" required="">
                    <option value="" disabled selected>Food Type</option>
                    <option value="1">Vegetables</option>
                    <option value="2">Fruits</option>
                    <option value="3">Grains,Beans and Nuts</option>
                    <option value="4">Fish and Seafoods</option>
                    <option value="5">Dairy Foods</option>
                    <option value="7">Meat and/or eggs</option>
                    <option value="8">All of the above</option>
                </select>
            </div>


            <div class="mb-3">
                <label class="form-label">Mobile Number</label><br>
                <input class="form-control" placeholder="Mobile Number" name="phone" maxlength="10" minlength="10" required="" type="text">
            </div>


            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" required="" placeholder="Email address" name="email">
            </div>


            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" required="Password" maxlength="15" minlength="8" placeholder="Password" name="password">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-light" name="register">Register</button>

                <a class="text-decoration-none link-primary mx-5" href="index.php">Already have an account!</a>

            </div>





        </form>
    </div>

</body>

</html>