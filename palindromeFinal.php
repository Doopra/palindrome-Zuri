<?php

class CascadingPalindrome {
    public function findCascadingPalindrome($input) {
        if (!is_string($input)) {
            return "Invalid input. Please provide a string";
        }

        $components = explode(" ", $input);
        $palindromes = [];

        foreach ($components as $component) {
            if ($this->isPalindrome($component)) {
                $palindromes[] = $component;
            }
        }

        return implode(" ", $palindromes);
    }

    private function isPalindrome($str) {
        $str = preg_replace("/[^a-zA-Z0-9]/", "", $str); //This will remove non-alphanumeric characters
        $str = strtolower($str); // Convert to lowercase
        $len = strlen($str);
        
        for ($i = 0; $i < $len / 2; $i++) {
            if ($str[$i] !== $str[$len - 1 - $i]) {
                return false;
            }
        }

        return true;
    }
}


$cascadingPalindrome = new CascadingPalindrome();

// Example 1
$input1 = "1230321";
$result1 = $cascadingPalindrome->findCascadingPalindrome($input1);
echo "Input: $input1\nResult: $result1\n\n";

// Example 2
$input2 = "1230321 09234 0124210";
$result2 = $cascadingPalindrome->findCascadingPalindrome($input2);
echo "Input: $input2\nResult: $result2\n\n";

// Example 3
$input3 = "abcd5dcba 1230321 09234 0124210";
$result3 = $cascadingPalindrome->findCascadingPalindrome($input3);
echo "Input: $input3\nResult: $result3\n\n";

// Example 4
$input4 = "racecar radar 12321 hello world";
$result4 = $cascadingPalindrome->findCascadingPalindrome($input4);
echo "Input: $input4\nResult: $result4\n\n";

// Example 5
$input5 = "abcde edcba 12321";
$result5 = $cascadingPalindrome->findCascadingPalindrome($input5);
echo "Input: $input5\nResult: $result5\n\n";

// Example 6
$input6 = "hello 123 world";
$result6 = $cascadingPalindrome->findCascadingPalindrome($input6);
echo "Input: $input6\nResult: $result6\n\n";

// Example 7
$input7 = "level 12321 kayak";
$result7 = $cascadingPalindrome->findCascadingPalindrome($input7);
echo "Input: $input7\nResult: $result7\n\n";

// Example 8
$input8 = "madam arora abcdcba";
$result8 = $cascadingPalindrome->findCascadingPalindrome($input8);
echo "Input: $input8\nResult: $result8\n\n";

// Example 9
$input9 = "hello 1234321 world";
$result9 = $cascadingPalindrome->findCascadingPalindrome($input9);
echo "Input: $input9\nResult: $result9\n\n";

// Example 10
$input10 = "abcd dcba 12321 9876789";
$result10 = $cascadingPalindrome->findCascadingPalindrome($input10);
echo "Input: $input10\nResult: $result10\n\n";

// Example 11
$input11 = "palindrome abcdcba racecar";
$result11 = $cascadingPalindrome->findCascadingPalindrome($input11);
echo "Input: $input11\nResult: $result11\n\n";

// Example 12
$input12 = "hello 12345 world";
$result12 = $cascadingPalindrome->findCascadingPalindrome($input12);
echo "Input: $input12\nResult: $result12\n\n";

// Example 13
$input13 = "abcba 12321 madam";
$result13 = $cascadingPalindrome->findCascadingPalindrome($input13);
echo "Input: $input13\nResult: $result13\n\n";

// Example 14
$input14 = "hello 12321 world";
$result14 = $cascadingPalindrome->findCascadingPalindrome($input14);
echo "Input: $input14\nResult: $result14\n\n";

// Example 15
$input15 = "abcde edcba 1234321";
$result15 = $cascadingPalindrome->findCascadingPalindrome($input15);
echo "Input: $input15\nResult: $result15\n\n";


?>