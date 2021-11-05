<?php

namespace AMS;

//error_reporting(0);

class Member
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }




    public function updateMember()
    {    
        $response="";
        
            $name=$_POST["name"];
            $emailid=$_POST["email_id"];
            $contactno=$_POST["contact_no"];



            if(!empty(trim($_POST["new_password"])) && !empty(trim($_POST["confirm_new_password"])))
            {          

               $hashedPassword = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

               $query = "UPDATE admin_info SET  password=?,admin_name=?,email_id=?,contact_no=?;";

               $paramType = 'sssi';
               $paramValue = array(
                $hashedPassword,
                $name,
                $emailid,
                $contactno
               );
              $memberId = $this->ds->update($query, $paramType, $paramValue);
              if (!empty($memberId))
              {
                $response = array(
                    "status" => "success",
                    "message" => "Congratulations ! admin details updated successfully with NEW password."
                );
              }


            }
          else
          {
            $query = "UPDATE admin_info SET  admin_name=?,email_id=?,contact_no=?;";
            
            $paramType = 'ssi';
            $paramValue = array(
                $name,
                $emailid,
                $contactno
            );
            $memberId = $this->ds->update($query, $paramType, $paramValue);
            if (!empty($memberId))
             {
                $response = array(
                    "status" => "success",
                    "message" => "Congratulations ! admin details updated successfully keeping OLD password as it is."
                );
             }
          }

        
        return $response;
    }




}
