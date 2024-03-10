new Task ALI ALI :


library management system.The system should include books, authors, and a library inventory.
i will use #interfaces, #traits, #classes, and #namespaces to organize and implement the functionality.
#spl_autoload_register,#Parsing ,#static for count the objects at the time of creating.Store the objects in array of objects at the moment of creat new object.

Requirements
Namespace: Create a base namespace called LibraryManagement.and other name spaces with the base and the name of coressponding folder.
Interface (Readable):
Location: LibraryManagement/Interfaces/Readable.php
Methods: getTitle(), getAuthor()
Trait (UniqueIdentifier):
Location: LibraryManagement/Traits/UniqueIdentifier.php
Property: $id
Method: getId()
Classes:
Author:
Location: LibraryManagement/Classes/Author.php
Properties: name, birthdate
i use the UniqueIdentifier trait.
Book:
Location: LibraryManagement/Classes/Book.php
Implements Readable interface.
Properties: title, author (type Author), publishedYear
i use the UniqueIdentifier trait.
LibraryInventory:
Location: LibraryManagement/Classes/LibraryInventory.php
Methods: addBook(Book $book), findBookById($id), listAllBooks() 
Autoloading:  i use Composer for autoloading the classes, traits, and interfaces.
Testing:
i Create a test script where you create instances of Author and Book.
Add books to the LibraryInventory and test the inventory methods in the Infernce file.
