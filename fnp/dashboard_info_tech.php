<?php if ($data['level'] == "100 Level") : ?>
    <div class="tab-pane container-fluid fade border rounded" data-bs-toggle="tab" id="courses">
        <h3 class="text-uppercase d-flex m-3 text-dark" style="font-weight: bold;" id="coursesTitle">Courses</h3>

        <h6 class="text-uppercase d-flex text-dark" style="font-weight: bold;" id="semesterTitle">1st semester courses</h6>
        <ul class=" nav nav-tabs d-flex" id="linkCarrier">
            <li class="nav-item m-2" id="linkList">
                <button type="btn" id="linkbtn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#cmp101" id="link" class="nav-link" data-bs-toggle="tab">CMP 101</a></button>
            </li>

            <li class="nav-item m-2" id="linkList">
                <button type="btn" id="linkbtn" class="btn-secondary p-2 border-0 rounded text-dark"><a href="#cmp102" id="link" class="nav-link" data-bs-toggle="tab">CMP 102</a></button>
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
        <h6 class="text-uppercase d-flex mt-3 text-dark" style="font-weight: bold;" id="semesterTitle">2nd semester courses</h6>
        <ul class="nav nav-tabs d-flex">
            <li class="nav-item m-2" id="linkList">
                <button type="btn" class="btn-secondary p-3 border-0 rounded text-dark"><a href="#sec" class="nav-link text-uppercase" id="link" data-bs-toggle="tab">siwes</a></button>
            </li>
        </ul>
        <!-- timestable section  -->
        <h3 class="text-uppercase d-flex m-3 text-dark" style="font-weight: bold;">Times-Table</h3>
        <div class="border rounded d-flex flex-column p-2 m-2">
            <img src="./img/user.jpg" alt="" style="width:150px;" class=" img-thumbnail mx-auto p-2">
            <div class="d-flex">
                <a href="./img/user.jpg" class="border-0 text-light p-2 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">view</a>
                <a href="#" download="./img/user.jpg" class="border-0 text-light p-2 rounded bg-secondary m-auto text-uppercase" style="text-decoration: none;font-weight: 500;">download</a>
            </div>
        </div>
    </div>

    <!-- the courses content  -->
    <div class="tab-pane container fade" id="cmp101">
        <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
            <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp101')"></button>
            <h1 id="h1">CMP 101</h1>
            <h3 id="h3" class="text-uppercase">Introduction To Computer Programming IV (stuff)</h3>
            <p id="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                epellendus aliquam praesentium. Provident?</p>
        </div>
    </div>
    <div class="tab-pane container fade" id="cmp102">
        <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
            <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#cmp102')"></button>
            <h1 id="h1">CMP 302</h1>
            <h3 id="h3" class="text-uppercase">Introduction To Computer Programming IV (stuff)</h3>
            <p id="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                epellendus aliquam praesentium. Provident?</p>
        </div>
    </div>
    <div class="tab-pane container fade text-dark" id="sec">
        <div name="course-details" class="card d-flex p-2 m-5 text-dark bg-light border">
            <button type="button" class="btn-close" aria-label="Close" onclick="closeTab('#sec')"></button>
            <h1 id="h1" class="text-uppercase">siwes</h1>
            <h3 id="h3" class="text-uppercase">Internship training</h3>
            <p id="paragraph"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudianda
                e inventore aspernatur officiis aliquam qui ducimus eius officia, quidem veritatis, atque dicta magni nobis
                , consequuntur consectetur veniam incidunt dignissimos eaque voluptatum at minus amet pariatur earum? Modi r
                epellendus aliquam praesentium. Provident?</p>
        </div>
    </div>

<?php endif; ?>