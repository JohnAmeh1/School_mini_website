<?php
include("./php/all_files.php");


$login = new Login();
$data = $login->val($_SESSION['schedulefnproject']);

$me = null;
// echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['post'])) {
        $post = new Submit();
        $result = $post->create_course($_POST);
        if ($result == "") {
            header("Location: ./dashboard.php");
            die;
        } else {
            echo $result;
        }
    }
}
$postnew = new Submit();
$me = $postnew->addCourses();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="./bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link href="./css_styles/style.css" rel="stylesheet">
    <title>COMPUTER SCIENCE</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-1">
        <div class="container-fluid d-flex">
            <!-- <a class="navbar-brand" href="#">
                <img class="logo" src="./img/cmpbg.png" alt="" width="100" height="70" style="object-fit: cover; border-radius: 25px">
            </a> -->
            <li class="d-flex nav-item align-end" style="list-style: none; justify-content: space-between; width: 100%;">
                <a href="#" class="nav-link active text-secondary" style="font-weight: 450; font-size: 18px;" data-bs-toggle="tab"><?php echo $data['matNumber'] ?></a>
                <button id="dark-mode-btn" class=" border-0">Dark</button>
            </li>
        </div>
    </nav>
    <!-- sidebar  -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="bg-light">
                <div class="position-sticky">
                    <ul class="nav nav-tabs nav-fill" style="font-weight: 400;">
                        <li class="nav-item text-uppercase">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">
                                Profile
                            </a>
                        </li>

                        <li class="nav-item text-uppercase">
                            <a class="nav-link" data-bs-toggle="tab" href="#courses">
                                Courses/TimesTables
                            </a>
                        </li>
                        <li class="nav-item text-uppercase">
                            <a class="nav-link" data-bs-toggle="tab" href="#">
                                Notifications
                            </a>
                        </li>
                        <li class="nav-item text-uppercase">


                            <?php
                            if ($data['level'] == "Staff") {
                                echo '<a class="nav-link" data-bs-toggle="tab" href="#viewStudents">
                            View Students
                            </a>';
                            } else {
                                echo '
                            <a class="nav-link" data-bs-toggle="tab" href="#">
                                Exeat
                            </a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item text-uppercase text-primary">
                            <?php
                            if ($data['level'] == "100 Level") {
                                echo '<a class="nav-link data-bs-toggle="tab">
                            100 Level
                         </a>';
                            }
                            if ($data['level'] == "200 Level") {
                                echo '<a class="nav-link data-bs-toggle="tab">
                            200 level
                         </a>';
                            }
                            if ($data['level'] == "300 Level") {
                                echo '<a class="nav-link data-bs-toggle="tab">
                            300 level
                         </a>';
                            }
                            if ($data['level'] == "400 Level") {
                                echo '<a class="nav-link data-bs-toggle="tab">
                            400 level
                         </a>';
                            }
                            if ($data['level'] == "500 Level") {
                                echo '<a class="nav-link data-bs-toggle="tab">
                            500 level
                         </a>';
                            }
                            if ($data['level'] == "Staff") {
                                echo '<a class="nav-link data-bs-toggle="tab">
                            Staff
                         </a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item text-uppercase">
                            <a class="nav-link logout-button rounded bg-danger" href="./logout.php">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- profile Content -->
            <main class="col-md-9 m-sm-auto col-lg-10 p-md-4">
                <div class="container">
                    <div class="tab-content">
                        <div class="tab-pane container active text-dark p-3 p-md-5" id="home">
                            <div class="card d-flex p-3 p-md-5 m-3 border border-5" id="card">
                                <img src="./img/user.jpg" alt="" class="card-img-top img-thumbnail rounded-circle mx-auto p-2" style="width: 150px;">
                                <div class="card-body text-center">
                                    <p name="text" class="text-dark text-uppercase">Matriculation Number:
                                        <span class="text-primary ps-2 ps-md-5 text-uppercase" style="font-weight: 500;"><?php echo $data['matNumber'] ?></span>
                                    </p>
                                    <hr class="text-dark" id="hr">
                                    <p name="text" class="text-dark text-uppercase">Email Address:
                                        <span class="text-primary ps-2 ps-md-5 text-lowercase" style="font-weight: 500;"><?php echo $data['email'] ?></span>
                                    </p>
                                    <hr class="text-dark" id="hr">
                                    <p name="text" class="text-dark text-uppercase">Department:
                                        <span class="text-primary ps-2 ps-md-5" style="font-weight: 500;"><?php echo $data['department'] ?></span>
                                    </p>
                                    <hr class="text-dark" id="hr">
                                    <p name="text" class="text-dark text-uppercase">Level:
                                        <span class="text-primary ps-2 ps-md-5" style="font-weight: 500;"><?php echo $data['level'] ?></span>
                                    </p>
                                    <hr class="text-dark" id="hr">
                                </div>
                            </div>
                        </div>

                        <!-- courses/timetable page  -->
                        <!-- dept test  -->
                        <?php if ($data['department'] == "Computer Science") : ?>
                            <?php if ($data['level'] == "100 Level") : ?>

                                <div class="tab-pane container fade m-3 border rounded" data-bs-toggle="tab" id="courses">
                                    <h3 class="text-uppercase d-flex m-3 text-dark" name="text" style="font-weight: bold;" id="courseTitle">Courses</h3>

                                    <h6 class="text-uppercase d-flex text-dark" name="text" style="font-weight: bold;" id="semesterTitle">1st semester courses</h6>
                                    <ul class="nav nav-tabs d-flex" id="linkCarrier">
                                        <li class="nav-item text-uppercase m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 d-flex rounded text-dark"><a href="#cmp101" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>

                                        <li class="nav-item text-uppercase m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#cmp102" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#cmp103" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#cmp104" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                    </ul>
                                    <h6 class="text-uppercase d-flex mt-4 text-dark" name="text" style="font-weight: bold;" id="semesterTitle">2nd semester courses</h6>
                                    <ul class="nav nav-tabs d-flex">
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                    </ul>
                                    <!-- timestable section  -->
                                    <h3 class="text-uppercase d-flex m-3 text-dark" name="text" style="font-weight: bold;" id="semesterTitle">Times-Table</h3>
                                    <div class="border rounded d-flex flex-column p-3 m-2">
                                        <img src="./img/user.jpg" alt="" style="width:150px;" class=" img-thumbnail mx-auto p-2">
                                        <div class="d-flex">
                                            <a href="./img/user.jpg" class="border-0 text-light p-3 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">view</a>
                                            <a href="#" download="./img/user.jpg" class="border-0 text-light p-3 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">download</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- the courses content  -->
                                <div class="tab-pane container fade text-dark" id="cmp101">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp101')"></button>
                                        <h1>CMP 101</h1>
                                        <h3 class="text-uppercase">Introduction To Computer Programming I (PYTHON)</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                                <div class="tab-pane container fade text-dark" id="cmp102">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp102')"></button>
                                        <h1>CMP 102</h1>
                                        <h3 class="text-uppercase">Introduction To Computer Programming II (PYTHON)</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($data['level'] == "200 Level") : ?>

                                <div class="tab-pane container fade m-3 border rounded" data-bs-toggle="tab" id="courses">
                                    <h3 class="text-uppercase d-flex m-3 text-dark" name="text" style="font-weight: bold;" id="courseTitle">Courses</h3>

                                    <h6 class="text-uppercase d-flex text-dark" name="text" style="font-weight: bold;" id="semesterTitle">1st semester courses</h6>
                                    <ul class="nav nav-tabs d-flex" id="linkCarrier">
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 d-flex rounded text-dark"><a href="#cmp201" class="nav-link" data-bs-toggle="tab">CMP 201</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#cmp202" class="nav-link" data-bs-toggle="tab">CMP 202</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                    </ul>
                                    <h6 class="text-uppercase d-flex mt-4 text-dark" name="text" style="font-weight: bold;" id="semesterTitle">2nd semester courses</h6>
                                    <ul class="nav nav-tabs d-flex">
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 103</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
                                        </li>
                                    </ul>
                                    <!-- timestable section  -->
                                    <h3 class="text-uppercase d-flex m-3" name="text" style="font-weight: bold;" id="semesterTitle">Times-Table</h3>
                                    <div class="border rounded d-flex flex-column p-3 m-2">
                                        <img src="./img/user.jpg" alt="" style="width:150px;" class=" img-thumbnail mx-auto p-2">
                                        <div class="d-flex">
                                            <a href="./img/user.jpg" class="border-0 text-light p-3 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">view</a>
                                            <a href="#" download="./img/user.jpg" class="border-0 text-light p-3 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">download</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- the courses content  -->
                                <div class="tab-pane container fade text-dark" id="cmp201">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp201')"></button>
                                        <h1>CMP 101</h1>
                                        <h3 class="text-uppercase">Introduction To Computer Programming I (PYTHON)</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                                <div class="tab-pane container fade text-dark" id="cmp202">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp202')"></button>
                                        <h1>CMP 102</h1>
                                        <h3 class="text-uppercase">Introduction To Computer Programming II (PYTHON)</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($data['level'] == "300 Level") : ?>
                                <div class="tab-pane container-fluid fade border rounded" data-bs-toggle="tab" id="courses">
                                    <h3 class="text-uppercase d-flex m-3 text-dark" name="text" style="font-weight: bold;" id="courseTitle">Courses</h3>

                                    <h6 class="text-uppercase d-flex text-dark" style="font-weight: bold;" name="text" id="semesterTitle">1st semester courses</h6>
                                    <ul class=" nav nav-tabs d-flex" id="linkCarrier">
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" id="linkbtn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#cmp301" id="link" class="nav-link" data-bs-toggle="tab">CMP 301</a></button>
                                        </li>

                                        <?php
                                        foreach ($me as $course) {
                                        ?>
                                            <li class="nav-item m-3">
                                                <button type="button" class="btn-secondary p-4 border-0 d-flex rounded text-dark">
                                                    <a class="nav-link">

                                                        <h1 id="h1" class="text-uppercase"><?= $course["courseT"] ?></h1>
                                                        <h3 id="h3" class="text-uppercase"><?= $course["courseName"] ?></h3>
                                                        <p id="paragraph"><?= $course["courseDescription"] ?></p>
                                                    </a>
                                                </button>
                                            </li>
                                        <?php
                                        }
                                        ?>

                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" id="linkbtn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#cmp302" id="link" class="nav-link" data-bs-toggle="tab">CMP 302</a></button>
                                        </li>
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 303</a></button>
                                        </li>

                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 302</a></button>
                                        </li>
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 303</a></button>
                                        </li>

                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 302</a></button>
                                        </li>
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 303</a></button>
                                        </li>

                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 302</a></button>
                                        </li>
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 303</a></button>
                                        </li>

                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 302</a></button>
                                        </li>
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 301</a></button>
                                        </li>
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#" class="nav-link" id="link" data-bs-toggle="tab">CMP 301</a></button>
                                        </li>
                                    </ul>
                                    <h6 class="text-uppercase d-flex mt-3 text-dark" name="text" style="font-weight: bold;" id="semesterTitle">2nd semester courses</h6>
                                    <ul class="nav nav-tabs d-flex">
                                        <li class="nav-item m-2" id="linkList">
                                            <button type="btn" class="btn-secondary p-3 border-0 rounded text-dark"><a href="#siwes" class="nav-link text-uppercase" id="link" data-bs-toggle="tab">siwes</a></button>
                                        </li>
                                    </ul>
                                    <!-- timestable section  -->
                                    <h3 class="text-uppercase d-flex m-3 text-dark" name="text" style="font-weight: bold;" id="semesterTitle">Times-Table</h3>
                                    <div class="border rounded d-flex flex-column p-2 m-2">
                                        <img src="./img/user.jpg" alt="" style="width:150px;" class=" img-thumbnail mx-auto p-2">
                                        <div class="d-flex">
                                            <a href="./img/user.jpg" class="border-0 text-light p-2 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">view</a>
                                            <a href="#" download="./img/user.jpg" class="border-0 text-light p-2 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">download</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- the courses content  -->
                                <div class="tab-pane container fade" id="cmp301">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp301')"></button>
                                        <h1 id="h1">CMP 301</h1>
                                        <h3 id="h3" class="text-uppercase">Introduction To Computer Programming IV (java)</h3>
                                        <p id="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="cmp302">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp302')"></button>
                                        <h1 id="h1">CMP 302</h1>
                                        <h3 id="h3" class="text-uppercase">Introduction To Computer Programming IV (java)</h3>
                                        <p id="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                                <div class="tab-pane container fade text-dark" id="siwes">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#siwes')"></button>
                                        <h1 id="h1" class="text-uppercase">siwes</h1>
                                        <h3 id="h3" class="text-uppercase">Internship training</h3>
                                        <p id="paragraph"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>

                            <?php endif; ?>
                            <?php if ($data['level'] == "400 Level") : ?>
                                <div class="tab-pane container fade m-3 border rounded text-dark" data-bs-toggle="tab" id="courses">
                                    <h3 class="text-uppercase d-flex m-3" name="text" style="font-weight: bold;" id="courseTitle">Courses</h3>

                                    <h6 class="text-uppercase d-flex text-dark" name="text" style="font-weight: bold;" id="semesterTitle">1st semester courses</h6>
                                    <ul class="nav nav-tabs d-flex" id="linkCarrier">
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 d-flex rounded text-dark"><a href="#cmp401" class="nav-link" data-bs-toggle="tab">CMP 401</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#cmp402" class="nav-link" data-bs-toggle="tab">CMP 402</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 403</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 402</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 403</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 402</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 403</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 402</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 403</a></button>
                                        </li>

                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 402</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 401</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link" data-bs-toggle="tab">CMP 401</a></button>
                                        </li>
                                    </ul>
                                    <h6 class="text-uppercase d-flex mt-4 text-dark" name="text" style="font-weight: bold;">2nd semester courses</h6>
                                    <ul class="nav nav-tabs d-flex">
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#cmp404" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                        <li class="nav-item m-3">
                                            <button type="btn" class="btn-secondary p-4 border-0 rounded text-dark"><a href="#" class="nav-link text-uppercase" data-bs-toggle="tab">cmp 404</a></button>
                                        </li>
                                    </ul>
                                    <!-- timestable section  -->
                                    <h3 class="text-uppercase d-flex m-3 text-dark" name="text" style="font-weight: bold;">Times-Table</h3>
                                    <div class="border rounded d-flex flex-column p-3 m-2">
                                        <img src="./img/user.jpg" alt="" style="width:150px;" class=" img-thumbnail mx-auto p-2">
                                        <div class="d-flex">
                                            <a href="./img/user.jpg" class="border-0 text-light p-3 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">view</a>
                                            <a href="#" download="./img/user.jpg" class="border-0 text-light p-3 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">download</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- the courses content  -->
                                <div class="tab-pane container fade" id="cmp401">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp401')"></button>
                                        <h1>CMP 301</h1>
                                        <h3 class="text-uppercase">Introduction To Computer Programming IV (java)</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="cmp402">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp402')"></button>
                                        <h1>CMP 302</h1>
                                        <h3 class="text-uppercase">Introduction To Computer Programming II (java)</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>
                                <div class="tab-pane container fade text-dark" id="cmp404">
                                    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp404')"></button>
                                        <h1 class="text-uppercase">siwes</h1>
                                        <h3 class="text-uppercase">Internship training</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                                            e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                                            , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                                            epellendus aliquam praesentium. Provident?</p>
                                    </div>
                                </div>

                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($data['department'] == "Information Technology") : ?>
                            <?php
                            include("./dashboard_info_tech.php");
                            ?>
                        <?php endif; ?>
                        <?php if ($data['level'] == "Staff") : ?>
                            <?php
                            include("./staff.php");
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="./bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function closeTab(tabId) {
            document.querySelector(tabId).classList.remove('show', 'active')
        }


        const darkModeBtn = document.getElementById("dark-mode-btn")
        const body = document.querySelector("body")
        const card = document.getElementById("card")
        const sidebar = document.getElementById("sidebar")
        // const hr = document.getElementById("hr")
        const text = document.getElementsByName("text")
        const courseDetails = document.getElementsByName("course-details")
        darkModeBtn.addEventListener("click", toggleDarkMode)

        function toggleDarkMode() {
            if (body.classList.contains("bg-dark")) {
                body.classList.replace("bg-dark", "bg-light")
                card.classList.remove("bg-dark")
                sidebar.classList.replace("bg-dark", "bg-light")
                // hr.classList.remove("text-dark", "text-light")
                text.forEach(item => item.classList.replace("text-light", "text-dark"))
                courseDetails.forEach(item => {
                    item.classList.replace("text-light", "text-dark")
                    item.classList.replace("bg-dark", "bg-light")
                })
                darkModeBtn.textContent = "Dark"
            } else if (body.classList.contains("bg-light")) {
                body.classList.replace("bg-light", "bg-dark")
                text.forEach(item => item.classList.replace("text-dark", "text-light"))
                courseDetails.forEach(item => {
                    item.classList.replace("text-dark", "text-light")
                    item.classList.replace("bg-light", "bg-dark")
                })
                card.classList.add("bg-dark")
                sidebar.classList.replace("bg-light", "bg-dark")
                // hr.classList.add("text-dark", "text-light")
                darkModeBtn.textContent = "Light"
                // darkModeBtn.textContent = < button class = "border-0 bg-dark text-light" > light </button>
            }
        }
    </script>
</body>

</html>