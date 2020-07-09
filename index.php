<!DOCTYPE html>
<<?php
//this will include the functions.php code to be used throughout index.php
include ('inc/functions.php');

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="20" />
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 <?php
  //this will provide random background colors every time screen is refreshed
  $backgroundColor = getRandomQuote($colors);
  echo "<body style='background-color: $backgroundColor'>"
  ?>
  <div class="container">
    <div id="quote-box">
      <?php
      //this will print random quotes from $quotes every time screen is refreshed
      echo printQuote($quotes)
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
