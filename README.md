### Instructions:

You have been provided with the skeleton of a simple project:  Library management system written in PHP. Your task is to complete the implementation of the classes by fulfilling the requirements specified in the TODO comments. 
Below is a detailed breakdown of what you need to do for each class:

#### 1. AbstractLibrary Class (Already Provided)
This abstract class defines the structure and methods for a library system. You do not need to modify this class. Instead, you will implement its methods in the `Library` class.

- **Key Methods:**
  - `addAuthor`: Adds an author to the library.
  - `addBookForAuthor`: Associates a book with an author.
  - `getBooksForAuthor`: Retrieves all books for a specific author.
  - `search`: Searches for a book by its title and returns its instance.
  - `print`: Prints the authors and their books in a formatted output.

---

#### 2. Library Class
The `Library` class extends `AbstractLibrary`. Your job is to implement all the methods declared in the abstract class.

- **Steps:**
  - Implement the `addAuthor` method to add authors to the `$authors` array and return the newly created `Author` instance.
  - Implement the `addBookForAuthor` method to associate a `Book` instance with an existing author and set the book’s `author` property.
  - Implement the `getBooksForAuthor` method to retrieve all books for a given author.
  - Implement the `search` method to find and return a book by its title from the authors' books.
  - Implement the `print` method to display the authors and their books in the required format.

---

#### 3. Book Class
The `Book` class represents a book and has the following attributes:
- `title`: The title of the book.
- `price`: The price of the book.
- `author`: The author of the book (optional during creation).

- **Steps:**
  - Generate getters and setters for all properties.
  - Create a constructor that accepts values for all attributes. The `author` parameter should be optional.

---

#### 4. Author Class
The `Author` class represents an author and contains the following:
- `name`: The name of the author.
- `books`: An array of books written by the author.

- **Steps:**
  - Generate getters and setters for all properties.
  - Create a constructor that initializes the `name` and optionally the `books` array.
  - Implement the `addBook` method to create a new book, add it to the `$books` array, and return the `Book` instance.

---

#### 5. Testing the Implementation
You are provided with a test script at the end of the file:

```php
require_once "Book.php";
require_once "Library.php";

$library = new Library();
$author = $library->addAuthor('Jack London');
$author->addBook("Martin Eden", 55);
$author->addBook("The Game", 35);
$library->addBookForAuthor('Jack London', new Book("A Son of the Sun", 25));

$author2 = $library->addAuthor('Mark Twain');
$author2->addBook('The Adventures of Tom Sawyer', 65);
$author2->addBook('Luck', 12);

$book = $library->search('Martin Eden'); // This must return instance of the book
$author = $book->getAuthor(); // This must return instance of the Author class
echo $author->getName(); // This must print "Jack London"

$library->print();
```

- **Run the Script:**
  - After completing the implementation, run the test script to ensure all functionalities work as expected.
  - The output of the `print` method should match the format given in the comments.

---
