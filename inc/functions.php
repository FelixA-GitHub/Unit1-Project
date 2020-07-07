<?php
// PHP - Random Quote Generator

// Multidimentional Array of Quotes with elements
$quotes = array(
   array(
    'quote' => 'Moral indignation is jealousy with a halo.',
    'source' => 'H. G. Wells',
    'occupation'=> 'English Novelist, Journalist, Sociologist, and Historian',
    'citation' => 'The Wife of Sir Isaac Harman',
    'year' => '1914'
  ),

  array(
    'quote' => 'The way to get started is to quit talking and begin doing.',
    'source' => 'Walt Disney',
    'occupation'=> 'American Entrepreneur, Animator, Voice Actor, Film Producer'
  ),

  array(
    'quote' => 'You can avoid reality, but you cannot avoid the consequences of avoiding reality.',
    'source' => 'Ayn Rand',
    'occupation'=> 'Russian-American Writer and Philosopher'
  ),

  array(
    'quote' => 'No one can make you feel inferior without your consent.',
    'source' => 'Eleanor Roosevelt',
    'occupation'=> 'American Political Figure, Diplomat and Activist',
    'citation' => 'This is My Story',
    'year' => '1935'
  ),

  array(
    'quote' => 'If you tell the truth you do not have to remember anything.',
    'source' => 'Mark Twain',
    'occupation'=> 'American Writer, Humorist, Entrepreneur, Publisher, and Lecturer',
    'year' => '1898'
  )
);


//Color Array created for background color changes
$colors = array ("#B22222",
                "#DDA0DD",
                "#66CDAA",
                "#FE17E7",
                "#FF7F50",
                "#C0C0C0",
                "#808000",
                "#FFE4E1",
               );



// getRandomQuote function created to pull random quotes from $quotes array
function getRandomQuote($quotes){
  return $quotes[rand(0,4)];
};


// printQuote function created to display random quotes in HTML with all available elements
function printQuote($quotes){
  $randomQuote = getRandomQuote($quotes);
  $results = "";

  if(isset($randomQuote['quote'])){
    $results .= "<p class='quote'>" . $randomQuote['quote'] . "</p>";
  };


  if(isset($randomQuote['source'])){
    $results .= "<p class='source'>" . $randomQuote['source'] . "</p>";
  };


  if(isset($randomQuote['occupation'])){
    $results .= "<p class='occupation'>" . $randomQuote['occupation'] . "</p>";
  };


  if(isset($randomQuote['citation'])){
    $results .= "<span class='citation'>" . $randomQuote['citation'] . "</span>";
  }


  if(isset($randomQuote['year'])){
    $results .= "<span class='year'>" . $randomQuote['year'] . "</span>";
  }

echo $results;

};


?>
