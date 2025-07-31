<?php 

class Validator {

    // a static method that is not dependent on any external state, PURE FUNCTION
    public static function string($value, $min = 1, $max = INF) {

        $value = trim($value);

        if (mb_strlen($value) < $min || mb_strlen($value) > $max) {
            return false;
        }

        return true;
    }
    
}

$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$validator = Validator::string($content, 1, 100); // should return false case

if ($validator) {
    // true
    echo "Your string is valid" . PHP_EOL;
} else {
    // false
    echo "Your string is not valid" . PHP_EOL;
}



