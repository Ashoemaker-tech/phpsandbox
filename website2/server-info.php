<?php 
    # $_SERVER SUPERGLOBAL

    // create Server array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'], 
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];

    // echo $server['Host Server Name']; // returned localhost
    //  echo $server['Host Header']; // also returned localhost due to dev server
    // echo $server['Server Software']; // returns server type OS and PHP version
    // print_r($server); // returned array with server info and deployment port and where the root document is being served from.
    #^ notice print_r function. used to return all the values of array in this case the above $server array.
   
   
    // Create Client Array
    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],
        'Clint IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT'],
    ];

    // print_r($client);

?>