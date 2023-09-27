<?php 

   /* ----- Task-1: String Manipulation: ----------*/

    // Create the string variable
    $text = "The quick brown fox jumps over the lazy dog.";

    // Define the function
    function manipulateString($inputText) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($inputText);

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    return $modifiedText;
}
    // Call the function with the $text variable as an argument
    $modifiedString = manipulateString($text);

    echo $modifiedString;

?>