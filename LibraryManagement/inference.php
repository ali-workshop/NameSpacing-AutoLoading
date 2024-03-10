<?php
##in this file the engine (inference ) which is for eval the code....\\aliali

// require_once "./LibraryManagement/Classes/Book.php";
// require_once "./LibraryManagement/Classes/Author.php";
// require_once "./LibraryManagement/Classes/BookInventory.php"; #*



#first way and using the spl_autoload_register
// spl_autoload_register(function ($class) {
// echo "is this run time!!!!!!!!!!";
// var_dump($class);#this will through the path of the fisrt line needed in this script code to catch it . which is the BookInventory
// // $path="LibraryManagement\Classes"; this not solve the problem i should build the path as the same above* using the $class and by using parsing :
//  // require_once $path;
// #start parsing:
// $path=__DIR__.'/../'.str_replace("\\","/", $class).'.php';

// require_once $path;
// });
#second way and using the vendor from composer 
require_once "./vendor/autoload.php";
use LibraryManagement\Classes\BookInventory;
use LibraryManagement\Classes\Author;
use LibraryManagement\Classes\Book;
#create instance from the bookinventroy
$bookinventory=new BookInventory();
//  create instances of Author and Book
$author=new Author("aliali","1998");
$book=new book("ارض زيكولا الجزء العاشر ",$author,"2050",10);
// Add books to the LibraryInventory and test the inventory methods.
$bookinventory->addBook($book);
$arr=$bookinventory->listAllBooks();
print_r("\n\n".sizeof($arr));
$bookinventory->findBookById($arr,10);

