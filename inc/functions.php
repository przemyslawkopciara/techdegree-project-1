<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
	[
		'quote' => 'We know what we are, but know not what we may be.',
		'source' => 'William Shakespeare',
		'citation' => '',
		'year' => ''
	],

	[
		'quote' => 'That\'s one small step for a man, one giant leap for mankind',
		'source' => 'Neil Armstrong',
		'citation' => '',
		'year' => ''
	],

	[
		'quote' => 'Anyone who has never made a mistake has never tried anything new.',
		'source' => 'Albert Einstein',
		'citation' => '',
		'year' => ''
	],

	[
		'quote' => 'We’ve all got both light and dark inside us. What matters is the part we choose to act on. That’s who we really are.',
		'source' => 'J. K. Rowling',
		'citation' => 'Harry Potter and the Order of the Phoenix',
		'year' => '2004'
	],

	[
		'quote' => 'It\'s the possibility of having a dream come true that makes life interesting.',
		'source' => 'Paulo Coelho',
		'citation' => 'The Alchemist',
		'year' => '2017'
	],

];


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array) {

	// Return random array element
	return $array[array_rand($array)];
}


// Create the printQuote funtion and name it printQuote
function printQuote($array) {

	// Call getRandomQuote function and store the result in a variable
	$quote = getRandomQuote($array);

	// Create a variable that strores created HTML string
	$html = '<p class="quote">'.$quote['quote'].'</p>';
	$html .= '<p class="source">'.$quote['source'];

	// The span elements that hold the citation and year properties should only be created if the current quote element has those items
	if ($quote['source'] && $quote['year']) {
		$html .= '<span class="citation">'.$quote['citation'].'</span><span class="year">'.$quote['year'].'</span>';
	}

	$html .= '</p>';

	// Display the completed HTML string
	echo $html;
}
?>