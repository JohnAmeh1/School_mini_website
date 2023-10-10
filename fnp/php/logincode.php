<?php

class Login
{
    private $error = "";

    public function evaluate($data)
    {
        $matNumber = addslashes($data['matNumber']); 
        $email = addslashes($data['email']);
        $department = addslashes($data['department']); 
        $level = addslashes($data['level']);
        $password = addslashes($data['password']);

        $query = "select * from computer_science where matNumber = '$matNumber' limit 1 ";

        $DB = new Database();
        $result = $DB->read($query);

        if($result)
        {
            $row = $result[0];

            if($matNumber == $row['matNumber'])
            {
                //create session data

                $_SESSION['schedulefnproject'] = $row['matNumber'];
            }
            if($email == $row['email'])
            {
                //create session data

                $_SESSION['schedulefnproject'] = $row['matNumber'];
            }
            if($department == $row['department'])
            {
                //create session data

                $_SESSION['schedulefnproject'] = $row['matNumber'];
            }
            if($level == $row['level'])
            {
                //create session data

                $_SESSION['schedulefnproject'] = $row['matNumber'];
            }
            if($password == $row['password']){

                $_SESSION['schedulefnproject'] = $row['matNumber'];
                
            }
            else
            {
                $this->error .= "Invalid Credientials!<br>";
            }

        }else{
            $this->error .= "Invalid Credientials!<br>";
        }
        return $this->error;
    }

    public function val($id){
        $correctMatNumber = $this->corrMatNumber($id);

        if($correctMatNumber){
            return $correctMatNumber;
        }else{
            header("location: index.php");
            die;
        }
    }

    private function corrMatNumber($id){
        $query = "select * from computer_science where matNumber = '$id' limit 1 ";
        $DB = new Database();
        $result = $DB->read($query, [$id]);
        return $result ? $result[0] : null;
    }

    // public function check_login($id,$redirect = true)
    // { 
    //     if(is_numeric($id))
    //  {
    //         $query = "select * from computer_science where matNumber = $id limit 1 ";

    //         $DB = new Database();
    //         $result = $DB->read($query);

    //         if($result)
    //         {
    //             $user_data = $result[0];
    //             return $user_data;
    //         }else
    //         {
    //             if($redirect){
    //             header("Location: index.php");
    //             die;
    //             }else{
    //                 $_SESSION['schedulefnproject'] = 0;
    //             }
    //         }
    //     }
    // }else
    // {
    //     if($redirect){
    //         header("Location: login.php");
    //         die;
    //     }else{
    //         $_SESSION['cmp'] = 0;
    //     }
    // }

    }
