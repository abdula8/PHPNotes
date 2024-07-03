<?php

    $input = $_POST['name'];
    // echo $string;
    // $sanitized = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    $sanitized = filter_var($input, FILTER_SANITIZE_EMAIL);
    // echo 'Main input = ' . $input . '<br>';
    echo 'After sanitized = ' . $sanitized . '<br>';
    $opt = array(
      'options' => array(
        'min_range' => 1,
        'max_range' => 999999999
      ),
      'flags' => FILTER_FLAG_ALLOW_HEX
    );
    // $opt = array(
    //   'options' => array(
    //   ),
    //   'flags' => FILTER_FLAG_IPV6
    // );

    // filter_var($input, FILTER_VALIDATE_INT, $opt)
    // filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) if there is  not need to options
    if ( filter_var($sanitized, FILTER_VALIDATE_EMAIL) !== FALSE){
      echo 'Good The <b>' . $sanitized . ' </b>You entered is EMAIL<br>';
    }else{
      echo 'Good The <b>' . $sanitized . ' </b>You entered is NOT EMAIL <br>';
    }
    // echo filter_var($string, FILTER_SANITIZE_STRING);
