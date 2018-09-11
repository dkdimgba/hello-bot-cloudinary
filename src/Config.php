<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'coinmentor',

    'accessToken' => 'EAAS4BTFvwwIBAEjQtRzhElxoWPjdEZA2pTj4Gg8C8OpW7ZBPxLv7jm80MqkWr9ZACE2zUQq1n1D5ez4OLkiaOUGeG2OVzDfxmabFYTZBoZCBKZArrDAz4ZCxrfYgASBwKdcC3kRC0zPcZAz2uniwzXsdEYqqsizcjm6XL8bvE88jrgZDZD'
  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
