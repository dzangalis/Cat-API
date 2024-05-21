<?php

$url = 'https://cat-fact.herokuapp.com/facts';
$apiContents = file_get_contents($url);
$catFacts = json_decode($apiContents);
if (is_array($catFacts)) {
    for ($i = 0; $i < count($catFacts); $i++) {
        if (isset($catFacts[$i]->text)) {
            echo $catFacts[$i]->text . PHP_EOL;
        }
    }
} else {
    echo "Failed to get any facts.";
}

