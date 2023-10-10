<?php
include("./php/all_files.php");

// $data = $login->val($_SESSION['schedulefnproject']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = new Login();
    $result = $login->evaluate($_POST);

    if ($result != "") {
        echo "<center>
                        <div class='form container align-items-center text-center w-100 rounded mt-5 pt-25 border'>
                        <h3 class='text-dark'>Incorrect Details</h3><br>
                        <p class='link text-dark'>Click here to <a href='index.php'>login</a></p>
                        </div>
                    </center>";
    } else {
        header("location: ./dashboard.php");
        die;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.css">
    <title>Login</title>
    <style>
        /* Add custom styles here if needed */
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-10">
                <div class="card border rounded">
                    <form action="" class="card-body" method="post">
                        <h2 class="text-center card-title text-dark mb-4 d-flex justify-content-start" style="font-size: 30px;">LOGIN</h2>
                        <div class="mt-3 d-flex justify-content-end" style="font-size: 14px;">
                            <span class="text-secondary">Don't Have an Account? </span><a href="./signup.php" style="text-decoration: none;" class="text-info">Sign Up Here</a>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="matNumber" placeholder="Enter Your Matriculation Number" required>
                            <label for="matNumber">Matriculation Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                            <label for="email">Email Address</label>
                        </div>

                        <select name="department" class="form-select mb-3" required>
                            <option value="Select_Your_Department">Select Your Department</option>
                            <option value="Staff">Staff</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Anatomy">Anatomy</option>
                            <option value="Physics">Physics</option>
                            <option value="Industrial Physics">Industrial Physics</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Industrial Mathematics">Industrial Mathematics</option>
                            <option value="Industrial Chemistry">Industrial Chemistry</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Biology">Biology</option>
                            <option value="Microbiology">Microbiology</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Mass Communication">Mass Communication</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="Economics">Economics</option>
                            <option value="Theology">Theology</option>
                            <option value="Etc">Etc</option>
                            <!-- Add your department options here -->
                        </select>

                        <div class="form-check mb-3">
                            <label class="form-check-label pe-4 text-dark">
                                <input type="radio" class="form-check-input" name="level" value="100 Level">100 Level
                            </label>
                            <label class="form-check-label pe-4 text-dark">
                                <input type="radio" class="form-check-input" name="level" value="200 Level">200 Level
                            </label>
                            <label class="form-check-label pe-4 text-dark">
                                <input type="radio" class="form-check-input" name="level" value="300 Level">300 Level
                            </label>
                            <label class="form-check-label pe-4 text-dark">
                                <input type="radio" class="form-check-input" name="level" value="400 Level">400 Level
                            </label>
                            <label class="form-check-label pe-4 text-dark">
                                <input type="radio" class="form-check-input" name="level" value="500 Level">500 Level
                            </label>
                            <label class="form-check-label pe-4 text-dark">
                                <input type="radio" class="form-check-input" name="level" value="Staff">Staff
                            </label>
                            <!-- Add your other radio options here -->
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="d-grid mb-3">
                            <input type="submit" class="btn btn-secondary btn-lg" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>