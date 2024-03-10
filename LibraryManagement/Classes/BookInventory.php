<?php 


namespace LibraryManagement\Classes;
require_once "./LibraryManagement/Classes/Book.php";
use LibraryManagement\Classes\Book;
class BookInventory{
    public function addBook(Book $book){
            echo "Added Successfully and the id of this book is : ".$book->get_id()."and the name of the author is : ".$book->getAuthor()->name."and the Title is : ".$book->getTitle();


    }
    
    public function findBookById($booklist,$id){
foreach ($booklist as $book){

if($id== $book->get_id()){
    
echo" \nthe book is found and this is the title : ".$book->getTitle()."and this is the author : ".$book->getAuthor()->name."\n";
}
    }    }
    public function listAllBooks():array{

return Book::$arr_of_instances;
    }




}