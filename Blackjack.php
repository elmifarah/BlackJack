<?php
// I chose the 4 type of cards i want here
$suite =['hearts','Spades','Ace','diamonds'];
// The values i will be using to play the game with are set in an list below including jack,queen,kings
$Values = [
    'ace' => 11,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'jack' => 10,
        'queen' => 10,
        'king' => 10
];
// This section Shuffles the Cards , i used this instead or rand
function shuffleCards($values)
{
// i used shuffle to randomize the order of the elements in my array
    shuffle($values);
// i used the foreach loop so that it can loop through the values of my array, it will loop
// through the array and each value
    foreach ($values as $value) {
        // The shuffle array variable is equal to the value
        $shuffleArray[] = $value;
        // i used array_slice so it can return a part of my array,
        $sliceFour = array_slice($shuffleArray, 0, 4);
    }
// i used return so i could stop and get back the array
    return $sliceFour;
}
//You would need to get 2 random cards from the pack
// Over here i have to shuffle both player 1 and 2's values


$cards = shuffleCards($Values); // this now contains 4 cards
$player1 = [$cards[0], $cards[1]];
$player2 = [$cards[2], $cards[3]];



// Now you would have to get a Total of 2 random cards
// The total is being worked out here by adding player 1's scores and both player 2's scores
    $total1 = $player1[0] + $player1[1];
    $total2 = $player2[0] + $player2[1];

// This section is how you Declare the Winner
// This function allows me to declare the winner inside is total 1 and total 2
    function winner($total1,$total2)
    {
// if and else statement to declare winner, this piece of code allows me to basically decide the
// the winner, using if and else statements
        if ($total1 > $total2) {
            return 'PLAYER 1!';
        } else {
            return 'PLAYER 2!';
        }
    }
// Returned now the winner can be declared, i used a end variable so that i could relate to it later on with my html
//this is deciding who the winner is from whatever the end result is from the if and else statements
$end = winner($total1, $total2);


// This Shuffle's the suits;

function shuffleSuit($suite){
    $mixSuite = array_rand($suite);
    $getSuite = $suite[$mixSuite];
    return $getSuite;
}
$shuffle1 = shuffleSuit($suite);
$shuffle2 = shuffleSuit($suite);
$shuffle3 = shuffleSuit($suite);
$shuffle4 = shuffleSuit($suite);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Blackjacknew.css">
    <title>Blackjacknew</title>
</head>
<body>
<h1> WELCOME TO MY UNIQUE & ENTERTAINING BLACK JACK GAME! </h1>
<div id="container">

<div class="MyPlayer1">
    <h4> PLAYER 1</h4>
    <p> <?php echo "$player1[0] $shuffle1"; ?></p>
    <p> <?php echo "$player1[1] $shuffle2"; ?></p>
    <p>Total: <?php echo "$total1"; ?></p>
</div>

<div class= "MY PLAYER 2">
    <h4> PLAYER 2 </h4>
    <p> <?php echo "$player2[0] $shuffle1"; ?></p>
    <p> <?php echo "$player2[1] $shuffle2"; ?></p>
    <p>Total: <?php echo "$total2"; ?></p>
</div>

</div>

<h2> THE WINNER OF THIS BLACKACK GAME IS ....... <?php echo "$end" ?> </h2>

</body>
</html>