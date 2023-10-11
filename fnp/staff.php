<div class="tab-pane container fade m-3 d-flex border rounded" data-bs-toggle="tab" id="courses">
    <ul class="nav nav-tabs d-flex">
        <li class="nav-item m-3">
            <button type="btn" class="btn-secondary p-4 border-0 d-flex rounded text-dark"><a href="#add" class="nav-link" data-bs-toggle="tab">Add Courses</a></button>
        </li>
        <?php
        $counter = 0; // Initialize a counter variable
        foreach ($me as $course) {
            $counter++; // Increment the counter
        ?>
            <li class="nav-item m-3">
                <button type="button" class="btn-secondary p-2 border-0 d-flex rounded text-dark">
                    <a href="#testing" class="nav-link" data-bs-toggle="tab">

                        <h5 id="h1" class="text-uppercase"><?= $course["courseT"] ?></h1>
                            <h6 id="h3" class="text-uppercase"><?= $course["courseName"] ?></h3>
                    </a>
                </button>
            </li>
        <?php
        }
        ?>
    </ul>
</div>
<div class="tab-pane container fade" id="testing">
    <?php
    $counter = 0; // Reset the counter
    foreach ($me as $course) {
        $counter++; // Increment the counter
    ?>
        <div name="course-details" class="card d-flex p-2 m-3 text-dark bg-light border">
            <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#testing')"></button>

            <p id="paragraph"><?= $course["courseDescription"] ?></p>

        </div>
    <?php
    }
    ?>
</div>

<div class="tab-pane container fade text-dark" id="add">
    <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border rounded">
        <form class="card-body" method="post">
            <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#add')"></button>
            <h4 class="text-center card-title text-dark mb-4 d-flex justify-content-start text-dark" name="text" style="font-size: 30px;">Add Course</h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="courseT" required>
                <label for="courseTitle">Course Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="courseName" required>
                <label for="courseName">Course Name</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" rows="5" name="courseDescription" required></textarea>
                <label for="courseDescription">Course Description</label>
                <small class="text-dark d-block" style="font-size: 12px;">Not more than 280 characters.</small>
            </div>
            <div class="form-check mb-3" required>
                <h6>Select A Level</h6>
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
            </div>
            <select name="Department" class="form-select mb-3" required>
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
            </select>
            <div class="d-grid mb-3">
                <input type="submit" name="post" class="btn btn-secondary btn-lg" value="Add Course">
            </div>
        </form>
    </div>
</div>