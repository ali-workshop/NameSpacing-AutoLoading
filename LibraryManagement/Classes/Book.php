<?php
namespace LibraryManagement\Classes;
require_once "./LibraryManagement/Interfaces/Readable.php";

require_once "./LibraryManagement/Traits/UniqueIdentifier.php";
require_once "./LibraryManagement/Classes/Author.php";

use LibraryManagement\Interfaces\Readable;
use LibraryManagement\Traits\UniqueIdentifier;
class Book implements Readable{
    use UniqueIdentifier;
    static public $arr_of_instances=array();
    protected $title; 
    protected $author;
     public $publishedYear;
    

    #dependency injection ## samer:)
public function __construct($title,Author $author,$publishedYear,$id){
    self::$arr_of_instances[]=$this;
    $this->title = $title;
$this->author = $author;
$this->publishedYear = $publishedYear;
$this->id = $id;


}


    public function getTitle():string{return $this->title;}
    public function getAuthor(){return $this->author;}


}