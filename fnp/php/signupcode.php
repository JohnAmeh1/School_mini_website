<?php
class Signup
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error .= $key . " is empty!<br>";
            }

            if ($key == "email") {
                // Use a more comprehensive email validation pattern
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->error .= "Invalid email address!<br>";
                }
            }
        }

        $checkMat = $this->corrMatNumber($data['matNumber']);
        $checkEmail = $this->corrEmail($data['email']);

        if ($this->error == "") {
            if ($checkMat && $checkMat["matNumber"] == $data['matNumber']) {
                return $this->error .= "User with this Matriculation Number already exists";
            }

            if ($checkEmail && $checkEmail["email"] == $data['email']) {
                return $this->error .= "User with this Email Address already exists";
            }

            if (!$checkMat && !$checkEmail) {
                // If neither Matriculation Number nor Email Address exist, create the user.
                return $this->create_user($data);
            }
        } else {
            // If there is an error message, return it.
            return $this->error;
        }
    }
    private function corrMatNumber($id)
    {
        $query = "select * from computer_science where matNumber = '$id' limit 1 ";
        $DB = new Database();
        $result = $DB->read($query, [$id]);
        if ($result) {
            return $result[0];
        }
    }
    private function corrEmail($id)
    {
        $query = "select * from computer_science where email = '$id' limit 1 ";
        $DB = new Database();
        $result = $DB->read($query, [$id]);
        if ($result) {
            return $result[0];
        }
    }
    private function create_user($data)
    {
        $matNumber = $data['matNumber'];
        $email = $data['email'];
        $department = $data['department'];
        $level = $data['level'];
        $password = $data['password'];
        $query = "INSERT INTO `computer_science` (matNumber, email, department, level, password) VALUES  ('$matNumber','$email','$department','$level','$password')";

        $DB = new Database();
        $DB->save($query);
        header("location: index.php");
        die;
    }
}
