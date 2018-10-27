
<?php

// Authentication code 
if(isset($_POST['username'], $_POST['password'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    /***
     * WARNING : User credentials are hardcoded for demonstration purposes only
     * Never Hardcode credentials
     ***/

    if($username == 'admin' && $password == 'admin@123'){
        /***
         * A SessionID is created
         * Now the server can keep track of the logged in user
         * We store the sessionId as a cookie called Session Cookie 
         * Each time the user do some action this session cookie would be sent to the server
         * Since its path is / 
         */
		$sessionIdentifier = base64_encode(openssl_random_pseudo_bytes(32));
        setcookie("sessionID", $sessionIdentifier, 0, "/");
        
		/***
         * Here we generate a Token to be used as the CSRF token
         * Then we store it as a cookie in the client side (browser)
         */
        $csrfToken = base64_encode(openssl_random_pseudo_bytes(32));
        setcookie("tokenID", $csrfToken);
        
        /***
         * For demonstration purpose demo action is used which is posting someting 
         * demo_action.php page contains a form
         */
        header('Location:demo_action.php');
    } else {
        /***
         * If invalid credentials used redirect to the login page
         */
        header('Location:index.php');
    }
}