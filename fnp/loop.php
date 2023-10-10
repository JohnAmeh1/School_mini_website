<?php include("./php/all_files.php");


foreach ($resultn as $course) {
    echo '<li class="nav-item m-3">';
    echo ' <button type="button" class="btn-secondary p-4 border-0 d-flex rounded text-dark">';

    echo '<a href="#" class="nav-link" data-bs-toggle="tab">';

    echo $course['courseT'];

    echo '</a>';
    echo '</button>';
    echo '</li>';
}
?>
