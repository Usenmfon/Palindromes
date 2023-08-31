<?php

class Palindrome
{
    public function __construct()
    {
        // Constructor intentionally left empty
    }

    /**
     * Check if the given parameter is a palindrome and return a string
     * containing palindromic words.
     *
     * @param mixed $param The input parameter to check for palindromes.
     * @return string A space-separated string of palindromic words.
     * @throws InvalidArgumentException If the input string is empty or not a string.
     */
    public function isPalindrome($param): string
    {
        // Validate that the input string is not empty
        if (empty($param)) {
            throw new InvalidArgumentException("Input string cannot be empty.");
        }

        // Validate that the input parameter is a string
        if (!$this->checkDataType($param)) {
            throw new InvalidArgumentException("Input value must be a string.");
        }

        // Split the input string into individual words
        $words = explode(" ", $param);
        $validPalindrome = [];

        // Iterate through each word to check for palindromes
        foreach ($words as $word) {
            // If the word is a palindrome, add it to the valid palindrome array
            if ($this->isWordPalindrome($word)) {
                $validPalindrome[] = $word;
            }
        }

        // Return the palindromic words as a space-separated string
        return implode(" ", $validPalindrome);
    }

    /**
     * Check if the given parameter is of type string.
     *
     * @param mixed $param The parameter to check for data type.
     * @return bool True if the parameter is a string, false otherwise.
     */
    public function checkDataType($param): bool
    {
        return is_string($param);
    }

    /**
     * Check if a word is a palindrome.
     *
     * @param string $word The word to check for palindrome.
     * @return bool True if the word is a palindrome, false otherwise.
     */
    private function isWordPalindrome(string $word): bool
    {
        // Get the length of the current word
        $length = strlen($word);
        // Calculate the midpoint index of the word
        // Determine how far to iterate when checking for palindromes
        $mid = floor($length / 2);
        

        // Iterate through the characters from the beginning and end of the word
        for ($i = 0; $i < $mid; $i++) {
            // If characters do not match, the word is not a palindrome
            if ($word[$i] !== $word[$length - $i - 1]) {
                return false;
            }
        }

        // All characters matched, the word is a palindrome
        return true;
    }
}

/**
 * There are 11 examples below to
 * test the implementation
 * with some examples throwing exceptions
 */

try {
    $input1 = true;
    $palindrome1 = new Palindrome();
    $result1 = $palindrome1->isPalindrome($input1);
    echo "Palindromes in '$input1': $result2" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
} catch (Exception $e) {
    echo "Caught exception: ",  $e->getMessage() . PHP_EOL;; // output: Caught exception: Exception message here!
}

try {
    $input2 = "madam arora teaches malayalam and civic";
    $palindrome2 = new Palindrome();
    $result2 = $palindrome2->isPalindrome($input2);
    echo "Palindromes in '$input2': $result2" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input3 = "racecar level deed radar";
    $palindrome3 = new Palindrome();
    $result3 = $palindrome3->isPalindrome($input3);
    echo "Palindromes in '$input3': $result3" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input4 = "hello world";
    $palindrome4 = new Palindrome();
    $result4 = $palindrome4->isPalindrome($input4);
    echo "Palindromes in '$input4': $result4" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input5 = "abcd5dcba 1230321 09234 0124210";
    $palindrome5 = new Palindrome();
    $result5 = $palindrome5->isPalindrome($input5);
    echo "Palindromes in '$input5': $result5" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input6 = "1230321";
    $palindrome6 = new Palindrome();
    $result6 = $palindrome6->isPalindrome($input6);
    echo "Palindromes in '$input6': $result6" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input7 = "";
    $palindrome7 = new Palindrome();
    $result7 = $palindrome7->isPalindrome($input7);
    echo "Palindromes in '$input7': $result7" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input8 = [];
    $palindrome8 = new Palindrome();
    $result8 = $palindrome8->isPalindrome($input8);
    echo "Palindromes in '$input8': $result8" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;;
}

try {
    $input9 = "hello anna civic racecar";
    $palindrome9 = new Palindrome();
    $result9 = $palindrome9->isPalindrome($input9);
    echo "Palindromes in '$input9': $result9" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $input10 = "moon kayak noon radar sun";
    $palindrome10 = new Palindrome();
    $result10 = $palindrome10->isPalindrome($input10);
    echo "Palindromes in '$input10': $result10" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $input11 = "level stats hello kayak";
    $palindrome11 = new Palindrome();
    $result11 = $palindrome11->isPalindrome($input11);
    echo "Palindromes in '$input11': $result11" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

