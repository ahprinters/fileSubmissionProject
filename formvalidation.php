<?php
if(!empty($_POST["name"])){
        $name = $_POST["name"];
    if(ctype_alpha(str_replace(" ", "", $name))===false){
        $errors[] = "Name should contain only alphabets of space";
    } else{
        $errors["Name can't be empty"];
    }
}

if(!empty($_POST["email"])){
    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== $email){
        $errors[] = "Email is not valid";
    }    
} else {
    $errors[] = "Email can't be empty";
}

if(!empty($_POST["region"])){
    $region = $_POST["region"];
    $approved_reg = ["Asia", "Oceania", "Africa", "Europe", 
      "North America", "Latin America"];
    if (!in_array($region, $approved_reg)){
        $errors[] = "Region is not valid";
    }    
} else {
    $errors[] = "Rigion is not selected";
}

if(!empty($_POST["season"])){
    $season = $_POST["season"];
    $approved_season = ["Summer", "Winter", "Spring", "Autumn", 
      "Monsoon"];
    if (!in_array($season, $approved_season)){
        $errors[] = "No valid season is Selected";
    }    
} else {
    $errors[] = "Invalid Season";
}

if(!empty($_POST["interests"])){
    $interests = $_POST["interests"];
    $allowed_interests = ["Reading", "Travelling", "Playing", "TV Watching", 
      "Swimming"];
      foreach($interests as $interest){
        if (!in_array($interests, $allowed_interests)){
            $errors[] = "Activity is invalid";
        }    
      }
    
} else {
    $errors[] = "No item selected";
}

if(!empty($_POST["perticipants"])){
    $perticipants =(int)$_POST["perticipants"];    
} else {
    $errors[] = "No perticipants in mentioned";
}

if(!empty($_POST["message"])){
    $message = $_POST["message"];    
} else {
    $errors[] = "No Message is written";
}

?>