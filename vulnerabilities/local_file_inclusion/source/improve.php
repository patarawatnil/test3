<?php

// The page we wish to display
$file = $_GET[ 'page' ];
$found = true;
// Only allow file{1..3}.php
if( $file != "file1.php" && $file != "file2.php" && $file != "file3.php" ) {
    // This isn't the page we want!
    echo "<div>ERROR: File not found!</div>";
    $found = false;
}

?>