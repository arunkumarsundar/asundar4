<?php
  //process client request
  header("Content-Type:application/json");
  if(!empty($_GET['uname']) And !empty($_GET['upword']))
  {
    $varUname = $_GET['uname'];
    $varUpword = $_GET['upword'];
    //simple logic to validate the provided Username and UserPassword
    if($varUname == "Arun" and $varUpword == "Maverick")
    {
      $response['Message'] = "Login successfull";
      $response['Organisation'] = "Top Gun";
      $response['Role'] = "Fighter pilot/coach";
      $response['Track'] = "Take my breath away";
      echo json_encode($response);
    }
    else 
    { 
      $response['Message'] = "Invalid user credentials";
      $response['Useraction'] = "Next time try with valid credentials";
      echo json_encode($response);
    }
  }
  else
  {
    $response['Message'] = "Invalid JSON request";
    $response['Useraction'] = "Contact developer in order to obtain correct JSON structure";
    echo json_encode($response);
  }
