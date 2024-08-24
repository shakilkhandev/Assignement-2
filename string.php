<?php   
   


   //function to print original strings
   function originalString($originalString){
 
    echo "Original String: " .$originalString." ," ;
  
     }
    


     
   //declaring function to count vowels
   function vowelCount($item){ 

           
    //  $vowels = ['a','e', 'i', 'o','u','A','E','I','O','U']; //declaring the vowels (UPPERCASE AND LOWERCASE).
                         
    //note:alternate:  by converting the input string to lowercase by string method  uppercase letters can be avoided.


    $vowels = ['a','e','i','o','u'];

     $count = 0 ;                             //count variable declared store the number of vowel if there is. 
     
     foreach (str_split($item) as $letter ) {
        foreach($vowels as  $vowel){

          
          if (strtolower($letter) == $vowel){
              $count++;
          }
        }
    }
    echo "Vowel Count: ".$count.", " ;
}



//declaring the reverse string function
function reverseStr($item){ //Note aurgument must be a string here
  echo  "Reversed String: ".strrev($item);
}
   



   function countVowelAndPrintRev($strings){

    for ($i =0 ;  $i< sizeof( $strings ) ; $i++) { 

    echo PHP_EOL; 

    $item = $strings[$i];
    originalString($item);
    vowelCount($item);//calling the vowelCount function.
    reverseStr($item);//calling the reverseStr function
    
    echo PHP_EOL;
  };


}

//input strings which will be checked to count the vowel 
$strings = ["Hello", "World", "PHP", "Programming"]; // declared  The  array of strings/words


countVowelAndPrintRev($strings);
