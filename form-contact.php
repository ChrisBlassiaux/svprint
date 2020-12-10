<?php

$array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
$emailTo = "sandy@svprint.fr";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    $array["name"] = test_input($_POST["name"]);
    $array["company"] = test_input($_POST["company"]);
    $array["email"] = test_input($_POST["email"]);
    $array["phone"] = test_input($_POST["phone"]);
    $array["message"] = test_input($_POST["message"]);
    $array["isSuccess"] = true; 
    $emailText = "";
    
    if (empty($array["name"]))
    {
        $array["nameError"] = "Votre prénom ?";
        $array["isSuccess"] = false; 
    } 
    else
    {
        $emailText .= "Firstname: {$array['firstname']}\n";
    }
    $emailText .= "Entreprise: {$array["company"]}\n";
    if(!isEmail($array["email"])) 
    {
        $array["emailError"] = "Votre e-mail ?";
        $array["isSuccess"] = false; 
    } 
    else
    {
        $emailText .= "Email: {$array['email']}\n";
    }
    if (!isPhone($array["phone"]))
    {
        $array["phoneError"] = "Votre numéro ?";
        $array["isSuccess"] = false; 
    }
    else
    {
        $emailText .= "Phone: {$array['phone']}\n";
    }
    
    if (empty($array["message"]))
    {
        $array["messageError"] = "Votre message ?";
        $array["isSuccess"] = false; 
    }
    else
    {
        $emailText .= "Message: {$array['message']}\n";
    }
    
    if($array["isSuccess"]) 
    {
        $headers = "From: {$array['name']} {$array['company']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
    }
    
    echo json_encode($array);
    
}

function isEmail($email) 
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isPhone($phone) 
{
    return preg_match("/^[0-9 ]*$/",$phone);
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


