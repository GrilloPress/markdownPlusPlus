<?php

$test_markdown = "# Heading One";

// search string.
// Find #
// add <h1>
// replace #
// add </h1> to the end of the line

$transform = str_replace("#", "<h1>", $test_markdown);
echo $transform . "</h1>";
