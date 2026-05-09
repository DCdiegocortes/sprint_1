# Sprint 1 – Layout Exercises

## 📃 Description

This repository contains the exercises for Sprint 1.  
Level 1 focuses on layout structure using HTML and CSS.  
The following levels focus on backend PHP fundamentals and advanced PHP concepts:
including form handling, sessions, validation, error handling, object-oriented programming, abstraction, interfaces, magic methods, and polymorphism.

## 🔩Structure
### Level 1 - Frontend 
  - **Exercise 1**: Desktop layout based on the provided wireframe
  - **Exercise 2**: Tablet layout based on the provided wireframe
  - **Exercise 3** : Mobile layout based on the provided wireframe

### Level 2
  - **Exercise 4**: Header & graphics based on japanese travel website     
     -  graphical assets (logo and header background) stored in the `assets` folder
       
### Level 02.1 – PHP Fundamentals Exercises

- **Exercise 1**: Variables and constants  
  - integer, float, string, boolean and constant declaration
  - output using `echo`

- **Exercise 2**: String functions  
  - uppercase conversion
  - length counting
  - counting characters without spaces
  - reversing strings
  - concatenation

- **Exercise 3**: Arithmetic operations and calculator  
  - operations with integers and floating numbers
  - sum, subtraction, multiplication, division and modulo
  - double values
  - total sum and product
  - calculator function with user input and operation validation

- **Exercise 4**: Counting function with optional step  
  - function with default values
  - custom step counting
  - input validation
  - exception handling with `InvalidArgumentException`(back-end estructure)

- **Exercise 5**: Student average classification  
  - validates the student's average mark
  - classifies results into:
    - First division
    - Second division
    - Third division
    - Failing

- **Exercise 6**: Random boolean function  
  - simulates whether “Charlie bit you” or not
  - uses randomness with `rand()`
    
### Level 02.2 – PHP Fundamentals Exercises
- **Exercise 1**: Call cost calculator 
- conditionals
- constants
- progressive cost calculation
  
### Level 03.1 – PHP Arrays Exercises
- **Exercise 1**: Print all numbers in an array  
  - indexed arrays  
  - `foreach` loop  
  - output with `echo`

- **Exercise 2**: Array size and element removal  
  - array length with `count()`  
  - deleting elements with `unset()`  
  - reindexing arrays with `array_values()`  
  - iterating through updated arrays

- **Exercise 3**: Check if all words contain a given character  
  - functions  
  - loops  
  - string traversal  
  - boolean validation  
  - case-insensitive comparison

- **Exercise 4**: Associative array with personal information  
  - associative arrays  
  - key-value iteration with `foreach`

### Level 03.2 – PHP Array Comparison Exercises
- **Exercise 1**: Guest list comparison  
  - compares two indexed arrays of guest names  
  - finds common elements between both lists  
  - creates a merged list without duplicates  
  - finds exclusive elements from each list  
  - nested loops  
  - boolean flags  
  - array traversal with `foreach`
### Level 04.1 – PHP OOP Shapes Exercises
- **Exercise 1**: Employee tax validation  
  - object-oriented programming (OOP)  
  - class definition (`Employee`)  
  - attributes and constructor initialization  
  - methods and object behavior  
  - conditional logic inside class methods  
  - business rule validation (tax payment based on salary)  
  - code reuse with `require_once`

- **Exercise 2**: Shape area calculation using OOP  
  - abstract parent class (`Shape`)  
  - abstract method enforcement (`calculateArea()`)  
  - inheritance with `extends`  
  - method overriding  
  - constants to avoid magic numbers  
  - area calculation for different shapes (`Rectangle`, `Triangle`)  
  - code reuse with `require_once`
   
### Level 05.1 – PHP OOP Inheritance and Abstraction

- **Exercise 1**: Animals with interface and abstract class  
  - interfaces  
  - abstract classes  
  - inheritance with `extends`  
  - implementation with `implements`  
  - constructor reuse  
  - method overriding  
  - polymorphism  

- **Exercise 2**: Shape area calculation with abstract class  
  - abstract parent class (`Shape`)  
  - shared attributes and constructor  
  - method overriding in subclasses  
  - area calculation for different shapes (`Rectangle`, `Triangle`)  
  - object arrays  
  - polymorphism  

### Level 05.2 – PHP OOP Interfaces

- **Exercise 1**: Shape area calculation with interface  
  - interface definition (`ShapeInterface`)  
  - contract-based design  
  - implementation in multiple classes (`Rectangle`, `Triangle`, `Circle`)  
  - constants to avoid magic numbers  
  - object arrays  
  - polymorphism  
  - dynamic class identification with `get_class()
 
 ### Level 06.1 – PHP Sessions, Magic Constants and Magic Methods
- **Exercise 1**: HTML form with PHP session handling  
  - HTML form creation  
  - form submission using `POST`  
  - reading form data with `$_POST`  
  - session initialization with `session_start()`  
  - storing user data in `$_SESSION`  
  - basic session usage without destroying the session  

- **Exercise 2**: Magic constants usage  
  - predefined magic constants  
  - `__FILE__`, `__DIR__`, `__LINE__`  
  - runtime context inspection  

- **Exercise 3**: Magic methods with objects  
  - object-oriented programming  
  - constructor (`__construct`)  
  - property access with `__get()`  
  - object string representation with `__toString()`  
  - working with arrays of objects  
  - dynamic object behavior

### Level 07.1 – PHP Validation and Exceptions
- **Exercise 1**: Division calculator with exception handling  
  - user input with `readline()`  
  - input validation  
  - numeric validation with `is_numeric()`  
  - division by zero validation  
  - exception handling with `try` / `catch`  
  - custom validation flow using `InvalidArgumentException`  

- **Exercise 2**: Form validation with sessions  
  - HTML form handling with `POST`  
  - form field validation  
  - empty field validation  
  - email validation with `filter_var()`  
  - password length validation with `strlen()`  
  - exception handling with `try` / `catch`  
  - storing validated data in `$_SESSION`

## ⚡️Technologies
### Frontend
- HTML5
- CSS3
- Flexbox
- CSS Grid
- Responsive Web Design (Media Queries)
- Font Awesome

### Backend / Programming Fundamentals

- PHP
- Input handling with `readline()`
- Control structures (if / else / switch / loops)
- Functions
- Exception handling (`InvalidArgumentException`)
- Arrays (indexed and associative)
- Array traversal with `foreach`
- Manual array comparison logic (nested loops and flags)
- Object-Oriented Programming (OOP)
- Classes and objects
- Constructors and attributes
- Encapsulation (`public`, `protected`, `private`)
- Inheritance with `extends`
- Abstract classes and abstract methods
- Interfaces and contract-based design
- Method definition and overriding
- Polymorphism
- Object arrays
- Constants to avoid magic numbers
- Dynamic class inspection with `get_class()`
- Code reuse with `require_once`
- Form handling with `$_POST`
- Sessions with `$_SESSION`
- Input validation
- Email validation with `filter_var()`
- Numeric validation with `is_numeric()`
- String length validation with `strlen()`
- Magic constants (`__FILE__`, `__DIR__`, `__LINE__`)
- Magic methods (`__construct()`, `__get()`, `__toString()`)

 ## ✏️ References 
### HTML
- [HTML Standard (WHATWG)](https://html.spec.whatwg.org/)
- [Learn HTML and CSS – Scrimba](https://scrimba.com/learn-html-and-css-c0p)

### CSS
- [Responsive Web Design Media Queries – W3Schools](https://www.w3schools.com/css/css_rwd_mediaqueries.asp)

### Flexbox
- [Curso de Flexbox desde 0 – YouTube](https://www.youtube.com/watch?v=XdrRF4rMXkA)

### CSS Grid
- [An Interactive Guide to CSS Grid – Josh W. Comeau](https://www.joshwcomeau.com/css/interactive-guide-to-grid/)
- [Slaying The Dragon – YouTube Channel](https://www.youtube.com/channel/UCNG1I_kw2p3evITFIBX_2zA)

### PHP fundamentals
- [PHP Introduction – W3Schools](https://www.w3schools.com/php/php_intro.asp)

### Best Practices
- [IT Academy – Barcelona Activa](https://itacademy.barcelonactiva.cat/mod/page/view.php?id=14493)

### Validation
- [PHP Form Validation – GeeksforGeeks](https://www.geeksforgeeks.org/php/php-form-validation/)
- [PHP Filter Functions – PHP Manual](https://www.php.net/manual/es/ref.filter.php)
- [PHP Regular Expressions – W3Schools](https://www.w3schools.com/php/php_regex.asp)

### Exceptions
- [PHP Exceptions – PHP Manual](https://www.php.net/manual/es/language.exceptions.php)
- [Handling Exceptions to Impress in Your Tech Interview – DEV Community](https://dev.to/lukeskw/handling-exceptions-to-impress-in-your-tech-inte




