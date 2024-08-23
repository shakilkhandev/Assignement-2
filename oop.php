 

<?php 
  
     // I have kept the template of the question by comment out,may be later it will help & increase readability, if i work on  .
    //Shakil Khan
   //Email:Shakilkhanfv@gmail.com 
  //Asignment-2 



  class Book {

    // TODO: Add properties as Private
    private $title ;
    private $availableCopies ;

    


    public function  __construct($title,$availableCopies){

        // TODO: Initialize properties

        $this->title = $title ;
        $this->availableCopies = $availableCopies;

    }
   


    // TODO: Add getTitle method
    public function getTitle(){
        return $this->title ;
    }



    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
        return $this->availableCopies ;
    }


   
    // TODO: Add borrowBook method
    public function borrowBook(){
        
        if ($this->availableCopies>0) {
            $this->availableCopies--;
            return true ;
        }

        else {
            return  false ;
        }

    }

    // TODO: Add returnBook method
    public function returnBook(){
        $this->availableCopies++ ;
    }


  }

  class Member {
          
    // TODO: Add properties as Private
    private $name ;
    

     
    public function __construct($name){
        $this->name = $name ;
    }
    
    // TODO: Add getName method
    public function getName(){
        return $this->name;
    }
    
    // TODO: Add borrowBook method

    
    public function borrowBook($book){ //Note: this is a object not the regular variable 
         if ($book->borrowBook()) {
            echo $this->getName() . " borrowed '" . $book->getTitle() . "'\n" ;
         }
         else " No copies available for ' ".$book->getTitlee();
    }


     // TODO: Add returnBook method
    public function returnBook($book){  
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() ."'.\n";
    }


  }


   //TODO: Usage 

  // TODO: Create 2 books with the following properties

  $book1 = new  Book("The Great Gatsby",5);
  $book2 = new Book("To Kill a Mockingbird",3);


  // TODO: Create 2 members with the following properties

  $member1 = new Member("Shakil");
  $member2 = new Member("Hasan");
   
  // TODO: Apply Borrow book method to each member

  $member1->borrowBook($book1);
  $member2->borrowBook($book2);
  
  echo PHP_EOL ;

  // TODO: Print Available Copies with their names:

  echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
  echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

