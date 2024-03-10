<?php
namespace LibraryManagement\Classes;
require_once "./LibraryManagement/Traits/UniqueIdentifier.php";

use LibraryManagement\Traits\UniqueIdentifier;
class Author{
use UniqueIdentifier;


public $name;

public $birthdate;

public function __construct($name,$birthdate){
$this->name = $name;
$this->birthdate=$birthdate;

}}