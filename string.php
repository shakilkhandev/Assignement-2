<?php   
   

   function vowelCount($item){  //declaring function to count vowels

           $vowels = ['a','e', 'i', 'o','u','A','E','I','O','U']; //declaring the vowels (UPPERCASE AND LOWERCASE).
            
           //note:alternate:  by converting the input string to lowercase by string method  uppercase letters can be avoided.

           $count = 0 ;                             //count variable declared store the number of vowel if there is. 
           
           foreach (str_split($item) as $letter ) {
              foreach($vowels as  $vowel){
                if($vowel == $letter){
                    $count++;
                }
              }
          }
          echo "Vowel Count: ".$count.", " ;
   };

   
   //declaring the reverse string function
   function reverseStr($item){ //Note aurgument must be a string here
       echo  "Reversed String: ".strrev($item);
   };







   $strings = ["Hello", "World", "PHP", "Programming"];

   for ($item =0 ;  $item < sizeof( $strings ) ; $item++) { 

    echo "Original String: " .$strings[$item]." ," ;
   
   
   
    vowelCount($strings[$item]);//calling the vowelCount function.
    reverseStr($strings[$item]);//calling the reverseStr function
    
    
    
    echo PHP_EOL;
  };