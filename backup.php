

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  
  
  <body>
    <div class="container-fluid">
<div class="container text-center">
  <div class="row">
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
  </div>
</div>
</div>
	
	

<?php
// Create an array of 52 cards
$suits = ["hearts", "diamonds", "clubs", "spades"];
$ranks = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "jack", "queen", "king", "ace"];
$deck = [];

foreach ($suits as $suit) {
    foreach ($ranks as $rank) {
        $deck[] = $rank . " of " . $suit;
    }
}

// Shuffle the deck using the Fisher-Yates algorithm
function shuffleDeck(&$deck) {
    $count = count($deck);
    for ($i = $count - 1; $i > 0; $i--) {
        $j = mt_rand(0, $i);
        $temp = $deck[$i];
        $deck[$i] = $deck[$j];
        $deck[$j] = $temp;
    }
}

shuffleDeck($deck);

// Initialize arrays to represent the players' hands
$player1Hand = [];
$player2Hand = [];
$player3Hand = [];
$player4Hand = [];
$s = 0;
$t = 0;
$u = 0;

// Distribute 3 cards to each player
for ($i = 0; $i < 3; $i++) {
    $player1Hand[] = array_shift($deck);
    $player2Hand[] = array_shift($deck);
    $player3Hand[] = array_shift($deck);
    $player4Hand[] = array_shift($deck);
}

// Display the players' hands
echo "<br>Player 1's hand:<br>";



foreach ($player1Hand as $card) {
	echo '<img id="image'.$t++.'" width="125" height="180" src="image/front.png"  onclick="flipImage'.$u++.'()">';
	echo '<img id="imagesss'.$s++.'" src="image/'.$card.'.png" width="125" height="180"  style="display: none;"/>';
	echo $s;
	echo $t;
	echo $u;
}



echo "<br>Player 2's hand:<br>";
foreach ($player2Hand as $card) {
   // echo $card . ".png<br>";
   echo '<img src="image/'.$card.'.png" width="125" height="180" />';
}

echo "<br>Player 3's hand:<br>";
foreach ($player3Hand as $card) {
   // echo $card . ".png<br>";
   echo '<img src="image/'.$card.'.png" width="125" height="180" />';
}

echo "<br>Player 4's hand:<br>";
foreach ($player4Hand as $card) {
   // echo $card . ".png<br>";
   echo '<img src="image/'.$card.'.png" width="125" height="180" />';
}




?>
	
	
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



<script>

function flipImage1() {
  const image1 = document.getElementById('image1');
  const imagesss1 = document.getElementById('imagesss1');
  if (image1.style.display !== 'none') {
    image1.style.display = 'none';
    imagesss1.style.display = 'block';
  } else {
    image1.style.display = 'block';
    imagesss1.style.display = 'none';
  }
}


function flipImage2() {
  const image2 = document.getElementById('image2');
  const imagesss2 = document.getElementById('imagesss2');
  if (image2.style.display !== 'none') {
    image2.style.display = 'none';
    imagesss2.style.display = 'block';
  } else {
    image2.style.display = 'block';
    imagesss2.style.display = 'none';
  } 
}


function flipImage3() {
  const image3 = document.getElementById('image3');
  const imagesss3 = document.getElementById('imagesss3');
  if (image3.style.display !== 'none') {
    image3.style.display = 'none';
    imagesss3.style.display = 'block';
  } else {
    image3.style.display = 'block';
    imagesss3.style.display = 'none';
  }
}

</script>



