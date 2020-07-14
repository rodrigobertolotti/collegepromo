<?php

    $response = array();

    // Get user data
    if(isset($_POST['email'])&&$_POST['email']!="") {

        require_once "../model/user.php";
        $user = new User();

        $email = $_POST['email'];

        // check if email is registered
        if(!$user->emailRegistered($email)) {

            if($user->signUp($email)) {

                $response['evt'] = 'success';
                $response['msg'] = 'E-mail registered!';

            } else {
                
                $response['evt'] = 'failed';
                $response['msg'] = 'Please try again later.';

            }
       
        } else {

            $response['evt'] = 'failed';
            $response['msg'] = 'E-mail already registered!';

        }

    }

    echo json_encode($response);

?>