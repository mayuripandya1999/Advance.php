<!-- * What is object oriented programming?  -->
<!-- OOP in PHP alludes to a programming style having an association of the class, objects,
and various components. PHP is a server-side programming language used for web
development. Object-oriented programming in PHP helps developers build reusable and 
complex web applications.
(OOP) is a style of programming characterized by the identification of classes of object
closely linked with the method (function) with which they are associated. -->

<!-- * What are properties of object oriented system?  -->
<!-- The Major object-oriented programming principles in PHP are as follow:
Encapsulation:- this concept highlights the binding properties, method, and hides
implementation details. The prime objective of encapsulation is to limit the 
complications during software development, and it also simplifies using class objects. -->

<!-- * What is difference between class and interface?  -->
<!-- Difference between class and interface-
Class:-
1 PHP class is a blueprint for objects.
2 A class can have any type of Member like private, public.
3 A class can have constructor method.
Interface:-
1 an interface is a blueprint for classes.
2 Interface can only have public members.
3 Interface cannot have constructor.  -->

<!-- * What is Overloading?  -->
<!-- Overloading in PHP provides means to dynamically create properties and methods. These 
dynamic entities are processes via magic method one can establish in a class for various
action types. 
The Overloading methods are invoked when interacting with properties or method that have
not been declare or are not visible in the current scope. The rest of this section will
use the terms “inaccessible properties” and “inaccessible methods” to refer to this
combination of declaration and visibility.  -->

<!-- * What Is T_PAAMAYIM_NEKUDOTAYIM Scope Resolution Operator (::) with Example?  -->
<!-- The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, 
the double colon, is a token that allows access to static, constant, and overridden 
properties or methods of a class.

When referencing these items from outside the class definition, use the name of the 
class.

It's possible to reference the class using a variable. The variable's value can not be 
a keyword (e.g. self, parent and static).

Paamayim Nekudotayim would, at first, seem like a strange choice for naming a double-colon.
However, while writing the Zend Engine 0.5 (which powers PHP 3), that's what the Zend 
team decided to call it. It actually does mean double-colon - in Hebrew!

Example- 
<?php
// class MyClass {
//     const CONST_VALUE = 'A constant value';
// }

// $classname = 'MyClass';
// echo $classname::CONST_VALUE;
// echo MyClass::CONST_VALUE;


// * What are the differences between abstract class and interface?
// Difference between abstract class and interface-
// Abstract class:- 
// 1 used to define method signatures for a class using “abstract” method (similar to interface).
// 2 used to define method.
// 3 used to define constants for a class.
// 4 used to define properties for a class.
// 5 Extended by the child class.
// Interface:-
// 1 used to define public method signatures for a class.
// 2 used to define constants for a class.

// * Define Constructor and Destructor? 
// Constructor:- A constructor allows you to initialize an objects properties upon creation
// of the object. If the create a _construct () function, PHP will automatically call this
// function when you create an object from a class. Notice that the construct function 
// starts will two underscores (_).

// Destructor:- A destructor is called when the object is destructed or the script is stopped
// or executed. If you create a _ destruct () function, PHP will automatically call this 
// function at the end of the script. Notice that the destruct function starts with two
// underscore (_).

// * How to Load Classes in PHP?
// PHP parser loads it automatically, if it is registered with SPL _ AUTOLAOD _ REGISTER 
// () function. PHP parser gets the least chance to load class/interface before emitting
// an error. Syntax:
//     SPL_AUTOLOAD_REGISTER (function)
//     ($CLASS_NAME) {INCLUDE}
//     $CLASS_NAME
    
// * How to Call Parent Constructor?
// In order to run a parent constructor, a call to parent _constructor () within the child
// constructor is required. If the child does not define then if may be inherited from the
// parent class just like a normal class method (if it was not declared as private). $OBJ
// = new OTHERSUBCLASS (). 

// * Are Parent Constructor Called Implicitly When Create An ObjectOf Class? 
// Parent constructor are not called implicitly if the child class defines a constructor. 
// In order to run a parent constructor, a call to parent _ constructor () within the child
// constructor is required.

// * What Happen, If Constructor Is Defined As Private Or Protected? 
// The constructor mat be made private or protected to prevent it from being called externally.
// If so, only a static method will be able to instantiate the class. Because they are in
// the same class definition they have access to private methods, even if not of the same
// object instance.
// A private constructor in java is used in restricting object creation. It is a special 
// instance constructor used in static member-only classes. If a constructor is declared 
// as private, then its objects are only accessible from within the declared class. You cannot
// access its objects from outside the constructor class. 

// * What are PHP Magic Methods/Functions? List them Write program for Static Keyword in 
// PHP?
// Magic Method are special methods which override PHPs 
// object. All methods names starting with _ are reserved by PHP. Therefore, it is not 
// recommended to use such method names unless overriding PHPs behavior. 
// Static Keyword in PHP - This page describes use of the static keyword to define static
// methods and properties. Static can also be used to define static variable, define
// static anonymous function and for late static bindings. Please refer to the pages 
// for information on those meanings of static.
// ->Static Method:- Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside methods declared as static.
// ->Static Properties:-  static properties are accessed using the Scope Resolution 
// Operator and cannot be accessed through the object operator (- >).
// It possible to reference the class using a variable. The variables value cannot be a 
// keyword (self, parent and static). 

// * Create multiple Traits and use it in to a single class? 
// PHP implements a way to reuse code called Traits.
// Traits are a mechanism for code reuse in single inheritance language such as PHP. A
// Trait is intended to reduce some limitation of single inheritance by enabling a 
// developer to reuse sets of methods freely in several independent classes living in 
// different class hierarchies. The semantics of the combination of traits and classes is
// defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and mix. 
// ->To use a trait in a class, you use the use keyword. All the traits methods are 
// available in the class where it is used. Calling a method of a trait is similar to 
// calling an instance method. Both Bank Account and user classes reuse methods of the 
// Logger traits, which is very flexible.

// * Write PHP Script of Object Iteration? 
// Simple object iteration:-
// Echo “\n”; $class->iterate Visible ()  As the output shown, the for each iterated
// through all of the visible properties that could be accessed.
// PHP provides a way for objects to be defined so it is possible to iterate through a 
// list of items, with, for example a for each statement. By default, all visible
// properties will be used for the iteration. 

// * Use of The $this keyword?
// $this is a reserved keyword in PHP that refers to the calling object. It is usually the
// object to which the method belongs, but possibly another object if the method id called
// statically from the context of a secondary object. This keyword is only application to
// internal methods.

// * What is jQuery? 
// JQuery is a java script library designed to simplify HTML DOM tree traversal and manipulation,
// as well as event handling, CSS animation, and Ajax. It is free, open-source software
// using the permissive MIT License. As of August 2022, JQuery is used by 77% of the 10
// million most popular websites.

// * How are JavaScript and jQuery different?
// Difference between JavaScript and JQuery-
// JAVASCRIPT-
// 1 it is major scripting programming language that is used to make website more
// responsive and interactive.
// 2 it is one of the pivoted parts alongside HTML and CSS which are used to create web 
// pages.
// JQuery- 
// 1 JQuery is a framework for JavaScript developed from JavaScript.
// 2 it is the most popular JavaScript library invented by John Resign and was released
// in January 2006 at BARCAMP NYC. 

// * Which is the starting point of code execution in jQuery?
// $(document). Ready () function is the starting point of JQuery code. It is executed
// when DOM is loaded. 

// * Document Load Vs Window. Load() jQuery? 
// The key difference between Document load and window load event is that the code included
// inside function will run once the entire page (images, iframes, stylesheets) are
// Loaded whereas the document load event fires before all images, iframes etc. 

// * What is the difference between prop and attr?
// Difference between prop and attribute-
// Prop method-
// 1 This method returns the current value.
// 2 This method is mainly used when the user wants to change the value for an HTML tags
// attribute.
// 3 it changes properties for that HTML tag as per the DOM tree.
// Attribute method-
// 1 This method returns the default value.
// 2 This method is mainly used to set the default value for an HTML tags attribute.
// 3 it changes attribute for that HTML tag.

// * Explain Difference Between JQuery And JavaScript? 
// It is a major scripting programming language that is used to make websites more 
// responsive and interactive. It is one of the pivoted parts alongside HTML and CSS which
// are used to create web pages. If HTML & CSS decorates and designed the web pages so,
// JavaScript makes the web page dynamic (we can say it gives them life).  JavaScript
// is a major client-side language.
// JQuery-
// JQuery is a framework for JavaScript developed from JavaScript. It is the most popular
// JavaScript library invented by John Resign and was released in January 2006 at BARCAMP
// NYC. It is a free open-source library and it’s a fast, concise and rich-featured
// JavaScript library and also has cross-browser compatibility.

// * How We Can Select The Specified <li> Element From The ListOf <li> Elements In <ul>? 
// All my LI elements have an attribute "REL" which I am trying to ultimately find that 
// attribute and use it for something else on all LI elements within that parent DIV. I 
// do eventually want to find more based on each but for not the very least the REL. Any 
// Ideas how I can achieve that with jQuery? Example:
//     <UL id="column1">
//        <li REL="1">Info</li>
//        <li REL="2">Info</li>
//        <li REL="3">Info</li>
//     </UL>
//     <UL id="column2">
//        <li REL="4">Info</li>
//        <li REL="5">Info</li>
//        <li REL="6">Info</li>
//     </UL>
//     <UL id="column3">
//        <li REL="7">Info</li>
//        <li REL="8">Info</li>
//        <li REL="9">Info</li>
//     </UL>

// * In <table> Design Change The Color Of Even <tr> Elements To“green”And Change The Color
// Of Odd <tr> Elements To “blue” Color? Give An Example Code? 
// I want to style a table, giving a blue background color to every second row.
// However, I want to ignore a specific row the second one from this styling rule.
// This means that even through there are 4 rows. I want to treat then as 3 rows, so that 
// row 1 is odd, row 2 doesnt exist, row 3 is even, and row 4 is odd. 
// I tried using not or defining REG class for all regular rows, but it didnt help. 
// My expected result would be to have row 3 in blue color. Result in fact: row 4 is in 
// blue color.
// (The logic for my objective: in my real project row 2 is not really a “row”. I use it 
// to add info related to row 1).
// TR td {
// Vertical-align: top;
// }
// Td {
// Width: 100px;
// Height: 100px;
// Background-color: green;
// }
// Table # aa TR: not (. Jack): nth-child(even) td 
// {
// Background-color: blue;
// }
// Table # bb TR, REG: nth-child(even) td 
// {
// Background-color: blue;
// } 

// * How We Can Implement Animation Effects In Jquery? 
// The JQuery animate () method is used to create custom animations.
// Syntax-
// $(Selector).  Animate ({PARAMS}, speed, callback);
//  The required PARAMS parameters defines the CSS properties to be animated.
// The optional speed parameters Specifies the duration of the effect. It can take the 
// following values: “slow”, “fast”, or milliseconds.
// The optional callback parameter is a function to be executed after the animation 
// completes.

// * Apply jQuery validation using library. 
// 1 include the JQuery library and JQuery validation Plugin.
// 2 create your form by adding HTML.
// 3 When the DOM has loaded, attach the ‘validate’ method to the form. 

// * Get state data by country selection (Ajax). 
// Empty (); $(‘#state’). Append (“option value=’O’>select state</option>”));
// If (Selected Country) 
// //alert(“working”) $. Ajax ({type: ‘POST’, url:
// “/Home/Get states”, data: {
// Selected Country:
// Selected Country}, success:
// Function (data) {If (data && data)}.

// * Image uploading with preview. 
// Use the JS read as data URL () method
// The File Reader result property returns the file’s contents. Let’s try out the following
// example which demonstrates how to read an image file using this method and preview it 
// in uploaded on the server.

// * Consider the exercise11and add a edit link near delete link e.g. Clicking up on edit
// button a particular row should be open in editing mode
// e.g. on the Particular row there should be filled text box with data and on the option
// column there should be a confirm button clicking upon it arrow should be updated. 


// Sample data (you should fetch data from your database)
// $data = array(
//     array('id' => 1, 'name' => 'Item 1', 'description' => 'Description 1'),
//     array('id' => 2, 'name' => 'Item 2', 'description' => 'Description 2'),
    // Add more data here
// );

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission (update data in the database)
    // $itemId = $_POST['item_id'];
    // $newName = $_POST['new_name'];
    // $newDescription = $_POST['new_description'];
    
    // Update data in the database (you need to implement this)
    // For this example, we'll just update the sample data array
//     foreach ($data as &$item) {
//         if ($item['id'] == $itemId) {
//             $item['name'] = $newName;
//             $item['description'] = $newDescription;
//             break;
//         }
//     }
// }


// <!DOCTYPE html>
// <html>
// <head>
//     <title>Edit Table Row Data</title>
// </head>
// <body>
//     <table border="1">
//         <tr>
//             <th>ID</th>
//             <th>Name</th>
//             <th>Description</th>
//             <th>Action</th>
//         </tr>
//          foreach ($data as $item): 
//         <tr>
//             <td><echo $item['id'];</td>
//             <td>
//                  if (!isset($_POST['edit']) || $_POST['item_id'] != $item['id']):
//                      echo $item['name']; 
//                  else: 
//                     <input type="text" name="new_name" value="echo $item['name'];">
//                  endif;
//             </td>
//             <td>
//                  if (!isset($_POST['edit']) || $_POST['item_id'] != $item['id']):
//                      echo $item['description'];
//                  else:
//                     <input type="text" name="new_description" value=" echo $item['description'];">
//                  endif;
//             </td>
//             <td>
//                  if (!isset($_POST['edit']) || $_POST['item_id'] != $item['id']):
//                     <form method="post">
//                         <input type="hidden" name="item_id" value=" echo $item['id'];">
//                         <input type="submit" name="edit" value="Edit">
//                         <input type="submit" name="delete" value="Delete">
//                     </form>
//                  else:
//                     <form method="post">
//                         <input type="hidden" name="item_id" value=" echo $item['id'];">
//                         <input type="submit" name="confirm" value="Confirm">
//                     </form>
//                  endif;
//             </td>
//         </tr>
//          endforeach;
//     </table>
// </body>
// </html>

// * Create Hotel Room Booking System User can book room by 3 ways
// Full day
// Half day
// Custom

// include 'config.php';
// include 'functions.php';

// Get room types from the database
// $roomTypes = getRoomTypes();

// Handle form submission
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $roomType = $_POST['room_type'];
//     $bookingType = $_POST['booking_type'];
//     $checkIn = $_POST['check_in'];
//     $checkOut = $_POST['check_out'];

//     Calculate the total price based on room type, booking type, and duration
//     $totalPrice = calculateTotalPrice($roomType, $bookingType, $checkIn, $checkOut);

    // Create a new booking record in the database
//     $bookingId = createBooking($roomType, $bookingType, $checkIn, $checkOut, $totalPrice);

//     Redirect to payment page with the booking details
//     header("Location: confirm_booking.php?booking_id=$bookingId");
//     exit();
// }

// <!DOCTYPE html>
// <html>
// <head>
//     <title>Hotel Room Booking</title>
// </head>
// <body>
//     <h1>Hotel Room Booking</h1>
//     <form method="post" action="">
//         <label for="room_type">Select Room Type:</label>
//         <select name="room_type" id="room_type">
//              foreach ($roomTypes as $roomType):
//                 <option value=" echo $roomType['room_id'];">echo $roomType['room_name'];</option>
//              endforeach;
//         </select><br>

//         <label for="booking_type">Select Booking Type:</label>
//         <select name="booking_type" id="booking_type">
//             <option value="full_day">Full Day</option>
//             <option value="half_day">Half Day</option>
//             <option value="custom">Custom</option>
//         </select><br>

//         <label for="check_in">Check-In Date:</label>
//         <input type="date" name="check_in" id="check_in"><br>

//         <label for="check_out">Check-Out Date:</label>
//         <input type="date" name="check_out" id="check_out"><br>

//         <input type="submit" value="Book Now">
//     </form>
// </body>
// </html>

// * If user select for the full day than user only have selection for the checking 
// checkout date.
// <!DOCTYPE html>
// <html>
// <head>
//     <title>Booking Page</title>
// </head>
// <body>
//     <h1>Booking Form</h1>
    
//     <label for="booking_type">Select Booking Type:</label>
//     <select id="booking_type">
//         <option value="half_day">Half Day</option>
//         <option value="full_day">Full Day</option>
//     </select>

//     <label for="checkin_date">Check-in Date:</label>
//     <input type="date" id="checkin_date" name="checkin_date">
    
//     <label for="checkout_date">Check-out Date:</label>
//     <input type="date" id="checkout_date" name="checkout_date" disabled>

    // <script>
        // Get the elements
        // const bookingType = document.getElementById('booking_type');
        // const checkoutDateInput = document.getElementById('checkout_date');

        // Add an event listener to the booking type select element
        // bookingType.addEventListener('change', function () {
            // If "full_day" is selected, enable the checkout date input
            // if (bookingType.value === 'full_day') {
            //     checkoutDateInput.disabled = false;
            // } else {
                // Otherwise, disable it
//                 checkoutDateInput.disabled = true;
//             }
//         });
//     </script>
// </body>
// </html>

// * If user select Half day than user have option of date and slot option(like user want 
// to book room for first half – Morning (8AM to 6PM) if user select for second halfit‟s
// for evening (7PM to Morning 7AM)). Do proper validation like if user can book only
// available slot. (have touse jQuery -> Ajax, validation, Json passing). 
// <!DOCTYPE html>
// <html>
// <head>
//     <title>Room Booking</title>
    // <script src="https: //code.jquery.com/jquery-3.6.0.min.js"></script>
// </head>
// <body>
//     <form id="bookingForm">
//         <label for="halfDay">Select Half Day:</label>
//         <select id="halfDay" name="halfDay">
//             <option value="morning">Morning</option>
//             <option value="evening">Evening</option>
//         </select>

//         <label for="bookingDate">Select Date:</label>
//         <input type="date" id="bookingDate" name="bookingDate">

//         <button type="submit">Book Room</button>
//     </form>

//     <div id="result"></div>

//     <script>
//         $(document).ready(function() {
//             $("#bookingForm").submit(function(event) {
//                 event.preventDefault();

                // Get selected values
                // var halfDay = $("#halfDay").val();
                // var bookingDate = $("#bookingDate").val();

                // Validate and make an Ajax request
//                 $.ajax({
//                     type: "POST",
//                     url: "booking.php",
//                     data: { halfDay: halfDay, bookingDate: bookingDate },
//                     success: function(response) {
//                         $("#result").html(response);
//                     }
//                 });
//             });
//         });
//     </script>
// </body>
// </html>


// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get user inputs
    // $halfDay = $_POST["halfDay"];
    // $bookingDate = $_POST["bookingDate"];

    // Perform validation (e.g., check available slots)
    // $valid = validateBooking($halfDay, $bookingDate);

    // Return JSON response
//     if ($valid) {
//         $response = ["success" => true, "message" => "Booking successful!"];
//     } else {
//         $response = ["success" => false, "message" => "Invalid booking slot."];
//     }

//     echo json_encode($response);
// }

// function validateBooking($halfDay, $bookingDate) {
    // Perform your validation logic here, checking for available slots
    // For this example, let's assume all bookings are valid

    // In a real application, you would check a database for available slots
    // and return true or false based on the availability.

//     return true;
// }
?>

// * Create custom dynamic function for require field validator?
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
//     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
// </head>
// <body>
// <form id="myForm">
// <label for="name">Name</label>
// <input type="text" id="name" class="required-field">

// <label for="email">Email</label>
// <input type="text" id="email" class="required-field">

// <input type="submit" value="Submit">
// </form>
// <script>
// $(document).ready(function() {
//   $('#myForm').submit(function(event) {
//     var isValid = true;
    
//     $('.required-field').each(function() {
//       if ($(this).val() === '') {
//         isValid = false;
//         $(this).addClass('error'); // Add a CSS class to highlight the empty field
//       } else {
//         $(this).removeClass('error'); // Remove the error class if the field is not empty
//       }
//     });
    
//     if (!isValid) {
//       event.preventDefault(); // Prevent form submission if any required field is empty
//       alert('Please fill in all required fields.');
//     }
//   });
// });
// </script>
// </body>
// </html>























