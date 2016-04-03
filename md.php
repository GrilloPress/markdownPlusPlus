<?php

$test_markdown = "# Heading One";

// search string.
// Find #
// add <h1>
// replace #
// add </h1> to the end of the line

$transform = str_replace("#", "<h1>", $test_markdown);
echo $transform . "</h1>";

// explode(PHP_EOL,$string);
// this would turn every new line into one line in an array
// cycle through each line looking for certain parts like # etc.
