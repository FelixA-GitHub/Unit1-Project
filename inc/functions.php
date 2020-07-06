<?php
// PHP - Random Quote Generator

// Multidimentional Array of Quotes with elements

$quotes = array(
   array(
    'quote' => 'Moral indignation is jealousy with a halo.',
    'source' => 'H. G. Wells',
    'citation' => 'The Wife of Sir Isaac Harman',
    'year' => '1914'
  ),

  array(
    'quote' => 'The way to get started is to quit talking and begin doing.',
    'source' => 'Walt Disney'
  ),

  array(
    'quote' => 'You can avoid reality, but you cannot avoid the consequences of avoiding reality.',
    'source' => 'Ayn Rand'
  ),

  array(
    'quote' => 'No one can make you feel inferior without your consent.',
    'source' => 'Eleanor Roosevelt',
    'citation' => 'This is My Story',
    'year' => '1935'
  ),

  array(
    'quote' => 'If you tell the truth you do not have to remember anything.',
    'source' => 'Mark Twain',
    'year' => '1898'
  )
);

// getRandomQuote function created
function getRandomQuote($quotes){
  return $quotes[rand(0,4)];
}

// printQuote function created
function printQuote($quotes){
  $randomQuote = getRandomQuote($quotes);

  $results = "";

  if(isset($randomQuote['quote'])){
    $results = "<p class='quote'>" . $randomQuote['quote'] . "</p>";
  } else{
      $results = "<p class='quote'>" . "Unknown" . "</p>";
  }


  if(isset($randomQuote['source'])){
    $results = "<p class='source'>" . $randomQuote['source'] . "</p>";
  } else{
      $results = "<p class='source'>" . 'Unknown' . "</p>";
  }


  if(isset($randomQuote['citation'])){
    $results[ = "<span class='citation'>" . $randomQuote['citation'] . "</span>";
  } else{
      $results = "<span class='citation'>" . 'Unknown' . "</span>";
  }


  if(isset($randomQuote['year'])){
    $results = "<span class='year'>" . $randomQuote['year'] . "</span>";
  } else{
      $results = "<span class='year'>" . 'Unknown' . "</span>";
  }
}

echo $results;


?>
