<?php

require 'Movie.php';
require 'ActionMovie.php';
require 'FantasyMovie.php';

// Couplage faible entre les films
// D�couplage de l'abstraction et de l'implementation

$MadMax = new ActionMovie('Mad Max');
$LOTR = new FantasyMovie('Lord Of The Ring');

echo $MadMax->getMovieName();
echo $LOTR->getMovieName();