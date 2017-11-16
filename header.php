<?php
  include_once("includes/database_connection.php");
  include_once("includes/functions.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ziar</title>
    <style>
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          border: 1px solid #e7e7e7;
          background-color: #f3f3f3;
      }

      li {
          float: left;
      }

      li a {
          display: block;
          color: #008cba;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }

      li a:hover:not(.active) {
          background-color: #ddd;
      }
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
