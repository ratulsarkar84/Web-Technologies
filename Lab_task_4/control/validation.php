<?php
$validatename="";
$validateusername="";
$validateemail="";
$validatepass="";
$validategender="";
$validatedob="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $username=$_REQUEST["username"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $gender=$_REQUEST["gender"];
    $dob=$_REQUEST["dob"];

    $usernamelength= strlen($username);
    $passwordlength= strlen($password);

    if(empty($name))
    {
        $validatename= "You can not submit without name";
    }
    else
    {
        $validatename= "Your name is: ".$name;
    }

    if(empty($email) || preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'))
    {
        $validateemail= "You have to enter a valid email";
    }
    else
    {
        $validateemail= "Your email is: ".$email;
    }

    if(empty($password) || $passwordlength < 6)
    {
        $validatepass= "Password is required and minimum lenth 6";
    }

    if(empty($username) || $usernamelength < 5)
    {
        $validateusername= "Username is required and minimum lenth 5";
    }

    if(empty($gender))
    {
        $validategender= "Gender is required";
    }

    if(empty($dob))
    {
        $validatedob= "Date of Birth is required";
    }
}
?>
