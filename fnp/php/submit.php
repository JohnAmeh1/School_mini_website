<?php
class Submit
{

    private $error = "";

    public function create_course($data)
    {
        if (empty($data)) {
            $this->error .= $data . " is empty!<br>";
        } else {
            $courseT = $data['courseT'];
            $courseName = $data['courseName'];
            $courseDescription = $data['courseDescription'];
            $level = $data['level'];
            $Department = $data['Department'];
            $query = "INSERT INTO `add_courses` (courseT, courseName, courseDescription, level, Department) VALUES  ('$courseT','$courseName','$courseDescription','$level','$Department')";

            $DB = new Database();
            $DB->save($query);
        }
    }
    // public function addCourses()
    // {
    //     $DB = new Database();

    //     $querytest = "SELECT courseT FROM add_courses WHERE";

    //     $resultnow = $DB->read($querytest);

    //     print_r($resultnow);
    //     die;
    //     return $resultnow;
    // }
    public function addCourses()
    {
        $course = $this->course();
        if ($course) {
            return $course;
        } else {
            header("location: ./dashboard.php");
            die;
        }
    }

    private function course()
    {
        $query = "SELECT * FROM add_courses";
        $DB = new Database();
        $results = $DB->read($query);
        return $results;
    }
}
