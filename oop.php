<?php 

  class Book {
    private $title ;
    private $availableCopies ;

    


    public function  __construct($title,$availableCopies){
       
        $this->title = $title ;
        $this->availableCopies = $availableCopies;

    }
   
    public function getTitle(){
        return $this->title ;
    }

    public function getAvailableCopies(){
        return $this->availableCopies ;
    }
   
    public function borrowBook(){
        
        if ($this->availableCopies>0) {
            $this->availableCopies--;
            return true ;
        }

        else {
            return  false ;
        }

    }
    public function returnBook(){
        $this->availableCopies++ ;
    }


  }

  class Member {
          
    public $name ;
    
    public function __construct($name){
        $this->name = $name ;
    }
    
    public function getName(){
        return $this->name;
    }

    public function borrowBook($book){ //Note: this is a object not the regular variable 
         if ($book->borrowBook()) {
            echo $this->getName() . " borrowed '" . $book->getTitle() . "'\n" ;
         }
         else " No copies available for ' ".$book->getTitlee();
    }

    public function returnBook($book){
        $book->returnBook();
        echo $this->name . "returned " . $book->getTitle() .".\n";
    }


  }

  //creating 2 books

  $book1 = new  Book("The Great Gatsby",5);
  $book2 = new Book("To Kill a Mockingbird",3);



  $member1 = new Member("Shakil");
  $member2 = new Member("Hasan");

  $member1->borrowBook($book1);
  $member2->borrowBook($book2);
  
  echo PHP_EOL ;

  echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
  echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

