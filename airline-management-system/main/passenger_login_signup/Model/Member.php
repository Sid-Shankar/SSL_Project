<?php

namespace AMS;

error_reporting(0);

class Member
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

   
    //Note: We are referring Passenger_id as username

    public function isUsernameExists($passenger_id)
    {
        $query = 'SELECT * FROM passenger_info where passenger_id = ?';
        $paramType = 's';
        $paramValue = array(
            $passenger_id
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }



    public function isEmailExists($email_id)
    {
        $query = 'SELECT * FROM passenger_info where email_id = ?';
        $paramType = 's';
        $paramValue = array(
            $email_id
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }



    public function isPassportnoExists($passport_no)
    {
        $query = 'SELECT * FROM passenger_info where passport_no = ?';
        $paramType = 's';
        $paramValue = array(
            $passport_no
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    

    public function registerMember()
    {    
         
        $isUsernameExists = $this->isUsernameExists($_POST["passenger_id"]);
        $isEmailExists = $this->isEmailExists($_POST["email_id"]);
        $isPassportnoExists=$this->isPassportnoExists($_POST["passport_no"]);
        if ($isUsernameExists) {
            $response = array(
                "status" => "error",
                "message" => "Passenger ID already exists."
            );
        } else if ($isEmailExists) {
            $response = array(
                "status" => "error",
                "message" => "Email ID already exists."
            );
        } else if ($isPassportnoExists) {
            $response = array(
                "status" => "error",
                "message" => "Passport number already exists."
            );
        } else {
            if (! empty($_POST["signup-password"])) {

                // PHP's password_hash is  used to store passwords

                $hashedPassword = password_hash($_POST["signup-password"], PASSWORD_DEFAULT);
            }
            $query = 'INSERT INTO passenger_info (passenger_id, pass_name, password, email_id, passport_no) VALUES (?, ?, ?, ?, ?)';
            $paramType = 'sssss';
            $paramValue = array(
                $_POST["passenger_id"],
                $_POST["pass_name"],
                $hashedPassword,
                $_POST["email_id"],
                $_POST["passport_no"]
            );
            $memberId = $this->ds->insert($query, $paramType, $paramValue);
            if (! empty($memberId)) {
                $response = array(
                    "status" => "success",
                    "message" => "You have registered successfully. Please login now."
                );
            }
        }
        return $response;
    }


    public function getMember($passenger_id)
    {
        $query = 'SELECT * FROM passenger_info where passenger_id = ?';
        $paramType = 's';
        $paramValue = array(
            $passenger_id
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    

    public function loginMember()
    {
        $memberRecord = $this->getMember($_POST["passenger_id"]);
        $loginPassword = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["login-password"])) {
                $password = $_POST["login-password"];
            }
            $hashedPassword = $memberRecord[0]["password"];
            $loginPassword = 0;
            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            // login sucess so store the member's username in
            // the session
            session_start();
            $_SESSION["passenger_id"] = $memberRecord[0]["passenger_id"];

            // here we can add more session variables to be used by user dashboard
            // sign out option in user dashboard will be taken care by logout.php in this folder

            session_write_close();
            $url = "../passenger_dashboard/passenger_dashboard.php";
            header("Location: $url");
        } else if ($loginPassword == 0) {
            $loginStatus = "Invalid Passenger ID or password.";
            return $loginStatus;
        }



        
    }




}
