<?php
    // echo date('d').'<br>'; // day
    // echo date('m').'<br>'; // Month
    // echo date('Y').'<br>'; // Year
    // echo date('l').'<br>'; // day of the week

    // # Combine date
    // echo date('m/d/Y');

    # Time
    // echo date('h:i:sa'); // hours min sec AM or PM
    #set timezone
    // date_default_timezone_set('America/Chicago'); // setting central time
    // echo date('h:i:sa');

    /* 
    Working with unix time stamps and converting them to usable time stamps.
    
    UNIX timestamp is a long integer containing the number of seconds 
    between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
    */

    $timestamp = mktime(10, 14, 54, 10, 17, 1990);

    // echo $timestamp; // genterate a string of numbers which is seconds sine Unix.

    # Converting UNIX time to a readable date
    // echo date('m/d/Y h:i:sa', $timestamp);

    # Str to time
    $timestamp2 = strtotime('7:00pm March 22 2016'); // returns 1458669600 
    $timestamp3 = strtotime('next Sunday'); // passing in a value that is more vague 

    echo $timestamp2.'<br>';
    echo date('m/d/Y h:i:sa', $timestamp2).'<br>';
    echo date('m/d/Y h:i:sa', $timestamp3).'<br>';
    
?>