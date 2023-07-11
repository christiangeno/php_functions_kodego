<?php

// 1. Create a function that check if a character is a vowel or consonant.
    function charChecker($char){
        $char = strtolower($char);
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        if (in_array($char, $vowels)) {
            return 'That letter is a vowel';
        } else {
            return 'That letter is a consonant';
        }
    }

    echo charChecker('a'); 
    
    
// 2. Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One.
    function DigitToWord($digit) {
        $digits = array(
            '0' => 'Zero',
            '1' => 'One',
            '2' => 'Two',
            '3' => 'Three',
            '4' => 'Four',
            '5' => 'Five',
            '6' => 'Six',
            '7' => 'Seven',
            '8' => 'Eight',
            '9' => 'Nine',
        );

        $digitStr = strval($digit);
        $digitsArray = str_split($digitStr);
        $wordArray = array_map(function ($digit) use ($digits) {
            return $digits[$digit];
        }, $digitsArray);

        $wordRep = implode(' ', $wordArray);

        return $wordRep;
    }

        $number = 722;
        $word = digitToWord($number);
        echo $word; 


// 3. Create a function that determine if a given number is divisible by 3.
    function numberchecker($num){
        if ($num == 3 || ($num % 3 == 0)) {
            echo $num, " is divisible by three.";
        } else {
            echo $num, " is not divisible by three.".'<br><br>';
        }
    }

    numberchecker(3);
       
// 4. Create a function that delete the recurring elements inside a sorted list of strings.
    function deleteRecurringElements($listOfStrings) {
        $newListOfStrings = [];
        $previousString = "";
      
        foreach ($listOfStrings as $string) {
          if ($string != $previousString) {
            $newListOfStrings[] = $string;
          }
      
          $previousString = $string;
        }
      
        echo "The new list of strings without recurring elements is: ".'<br>' . print_r($newListOfStrings, true);
      }
      
      $listOfStrings = ["a", "b", "b", "c", "c", "d"];
      
      deleteRecurringElements($listOfStrings);


// 4. Create a function that determine if the given number is an Armstrong Number. 
// An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself.
      function checkerArmstrong($number) {
        $convertToString = (string) $number;
        $length = strlen($convertToString);
        $sum = 0;

        for ($i = 0; $i < $length; $i++) {
            $digit = (int) $convertToString[$i];
            $sum += pow($digit, $length);
        }

        if ($sum === $number) {
            echo "$number is an Armstrong number";
        } else {
            echo "$number is not an Armstrong number";
        }
    }

    checkerArmstrong(153);
      
?>
