<?php

//1. Variables

$daysInWeek = 7;
echo $daysInWeek.'<br>';

$name = ' maaz ';
echo $name. '<br>';

// Variable in a Sentence
echo $sentence = 'There are ' . $daysInWeek . ' days in a Week. <br> and My name is ' . $name;

// Overwriting a variable
$name = 'talha';
echo $sentence = '<br>There are ' . $daysInWeek . ' days in a Week. <br> and My name is ' . $name . '<br>';
 
//2. Data Types - Strings

// Using String on Integer
$txt = 'hello';
$daysInWeek = 7;
$mobileNo = '8898971045';
echo $text = $txt. ' my number is ' . $mobileNo . ' and there are ' .$daysInWeek. ' days in a week. ';

// Using Quotes inside a Quotes
echo $msg = '<br>I didn\'t want to start';
echo $msg = '<br><a href="">Link</a><hr>';

//2. Data Types - Integers and FLoats

// Integers
echo '<br>Integers : '.$num1 = 1003;
echo '<br>Integers : '.$bankBalance = 1.2e6;

// Floats
echo '<br><hr>Floats : '.$pi = 3.14142. '<hr>';

//3. Data Types - booleans

// using boolean values with php inbuilt functions
$is_strings = is_string('alex'); 
var_dump($is_strings);

$is_int = is_int(1);
var_dump($is_int);

// Boolean Using If statements

$fieldsIsUploaded = -1;
var_dump($fieldsIsUploaded);

if($fieldsIsUploaded) {
    echo '<br><br>fieldsIsUploaded with 1 as a boolean values<hr>';
} else {
    echo '<hr>fieldsIsUploaded<hr>';
}

// 4. Data Types - Arrays   

// Indexed Arrays

// How to initiate Arrays
$users1 = [];

// how to insert Multiple values in arrays
$users1 = ['Maaz', 24, 'love lane road', true];

// how to insert Single values in arrays
$users1[] = 'Asad';

// Accessing Arrays
var_dump($users1);
echo $users1[4];

echo '<hr>';

// Associative Arrays

$users = [
    'names'=>'Maaz',
    'roll_no' => 24,
    'street' => 'Love Lane Road',
    'is_student' => true 
];

$users['city'] = 'Mumbai';

var_dump($users);
echo '<br>'.$users['names'];

// Multi-Dimensional Arrays

$users2 = [
    ['names'=>'Maaz',
    'roll_no' => 24,
    'likes' => ['Burgers', 'Pizza'],
    'address' => ['street' => 'Love Lane Road',
                  'pin-code' => '400010',
                  'city' => 'Mumbai'],
    'is_student' => true],

    ['names'=>'Saad',
    'roll_no' => 23,
    'likes' => ['McDonald', 'Pizza Hut'],
    'address' => ['street' => 'Love Lane Road',
                  'pin-code' => '400010',
                  'city' => 'Mumbai'],
    'is_student' => true] 
];

$users2[1]['address']['company']['name'] = 'softdigits';

echo '<hr><pre>', print_r($users2), '</pre>';

// Accessing a Particular Arrays
echo '<hr>'.$users2[1]['address']['city'].'<br>';

// Looping key values of an every Array
foreach($users2 as $user) {
    echo $user['names'], '<br>' ;
}

// 5. Data Types - Null 
$zero = null;
echo '<hr>',var_dump($zero),'<hr>';

// 6. Data Types - Concatenation

// Concatenation
$weather = 'Sunny';
$degrees = 39.5;

echo 'The Current weather is ' .$weather. ' and it is ' .$degrees. '°C <br>';
echo 'The Current weather is ' ,$weather, ' and it is ' ,$degrees, '°C';

// Variable Parsing

echo "<hr>The Current weather is $weather and it is $degrees °C";

echo "<hr>The Current weather is {$weather} and it is {$degrees}°C";

// 6. IF STATEMENTS

$dayOfWeek = 1;

// Normal If Statements
if ($dayOfWeek == 1) {
    echo '<hr>It is Monday <br>';
} else {
    echo '<hr>It is not a Monday ';
}

// If Statements using ElseIf 
$dayOfWeek = 2;

if ($dayOfWeek == 1) {
    echo 'It is Monday<br>';
} elseif ($dayOfWeek == 2) {
    echo 'It is Tuesday<br>';
} elseif ($dayOfWeek == 3) {
    echo 'It is Wednesday<br>';
} elseif ($dayOfWeek == 4) {
    echo 'It is Thursday<br>';
} elseif ($dayOfWeek == 5) {
    echo 'It is Friday<br>';
} elseif ($dayOfWeek == 6) {
    echo 'It is Saturday<br>';
} elseif ($dayOfWeek == 7) {
    echo 'It is Sunday<br>';
} else {
    echo 'Not a Valid Day in a week<br>';
}

// If Statement using Array Inbuilt functions
$dayOfWeek = 3;

$daysOfWeek = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
];

if (in_array($dayOfWeek, array_keys($daysOfWeek) )) {
    echo $daysOfWeek[$dayOfWeek];
} else {
    echo 'Not a Valid Day in a week<br>';
}

// 7. Logical Operators

// AND OPERATORS [&&]
// Username and Password should be required to get in websites
$username = 'maaz';
$password = '123456';

if ($username == 'maaz' && $password == '123456') {
    echo "<hr>Your username is {$username} and your password is {$password}. <hr>" ;
}

// OR Operators [||]
// If the days of week are 6 or 7 then print it is a week days

if ($dayOfWeek == 6 || $dayOfWeek == 7) {
    echo 'It is a week days';
}   else {
    echo 'It is a working days';
}

// Using every logical operators
// Print 'It is a week days' if days are 6 or 7 and it is not a working days

$dayOfWeek = 6;
$weekDays = false;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$weekDays) {
    echo '<br>It is a week days<hr>';
}   else {
    echo '<br>It is a working days<hr>';
}
// 8. Comparison Operators

// Equal to Operators
$fileIsUploaded = 1;

if ($fileIsUploaded === true) {
    echo "file is uploaded<br>";
} else {
    echo "file is not uploaded<br>";
}

// Not Equal to Operators
$tablesAreAvailable = true;

if ($tablesAreAvailable !== false) {
    echo "<hr>Tables are available";
} else {
    echo "<hr>No Tables are available";
}

// Compare Room requested vs Room Available
$roomsAvailable = 3;
$roomsRequested = 2;

if ($roomsAvailable >= $roomsRequested) {
    echo "<hr>There are not enough rooms";
}
 
// comparison operators with logical operators
$roomsAreAvailable = 5;
$roomsAreRequested = 6;
$maxRoomsAllowed = 4;

if (($roomsAreRequested < $roomsAreAvailable) && ($roomsAreRequested <= $maxRoomsAllowed)) {
    echo '<br>Rooms are Available<hr>';
} else {
    echo '<br>rooms are not available<hr>';
}

// 9. Switch Statements

$weather = 'sunny';
$color = null;

switch($weather == true) {

    case $weather == 'sunny' :
        echo $color = 'blue <hr>';
        break;
    
    case $weather == 'cloudy' :
        echo $color = 'grey';
        break;

    default :
        echo $color = 'Its dark';
        break; 

}

// 10. Arithmetic & Assignment Operators

// Addition

$a = 5;
$b = 10;
$c = $a + $b;
echo $c.'<br>';

$b += $b;
echo $b.'<br>';

// Increment
$totalCourse = 30;
$totalCourse++;
echo "{$totalCourse}<br>";

// Subtraction
$a = 5;
$b = 10;
$c = $a - $b;
echo $c.'<br>';

$b -= $a;
echo $b.'<br>';

// Decrement
$totalCourse = 30;
$totalCourse--;
echo "{$totalCourse}<br>";

// Multiplication
$a = 5;
$b = 10;
$c = $a * $b;
echo 'Multiplication : 5 * 10 = '.$c.'<br>';

// Exponents
$a = 5;
$b = 2;
$c = $a ** $b;
echo 'Exponents : 5<sup>2</sup> = '.$c.'<br>';

// division
$a = 5;
$b = 10;
$c = $b / $a;
echo 'Division : 10 / 5 = '.$c.'<br>';

// Modulus
$a = 5;
$b = 10;
$c = $b % $a;
echo 'Remainder : 10 / 5 = '.$c.'<br>';

// Suppose you want to check percentage of how much courses you have completed
$totalCourse = 30;
$courseCompleted = 25;

$percentage = number_format((($courseCompleted / $totalCourse) * 100), 2);

echo "Courses Completed : {$percentage}% <hr>";

// 11. For Loops

// Pagination Example
$totalPosts = 200;
$postsPerPage = 10;
$pageCount = ceil($totalPosts / $postsPerPage);

if ($pageCount > 1) {
    for ($i = 1; $i <= $pageCount; $i++) {
        echo '<a href="?page= '. $i .' "> '. $i . '</a> ';
    }
}

//looping arrays 
$users1 = ['Maaz', 24, 'love lane road', true];

for ($i = 0; $i < count($users1); $i++) {
    echo '<br>' ,$users1[$i];
}

// 12. While Loops

// To loops from 1 to 10
$start = 1;
$end = 10;
$increment = 1;

while ($start < $end) {
    $start += $increment;
    echo $start;  
}

// Rolling a dice to get the number you want
$numberIwant = 6;

while (($rollDice = rand(1, 6)) !== $numberIwant) {
    echo "<br>The number on dice after rolling is {$rollDice} and the number you want {$numberIwant}.";
}

echo "<br>finally it is {$numberIwant}";

// 13. Do While Loops

$i = 1;
do { 
    echo "<br> $i ";
    $i++;
} while ($i <= 10);

// 14. foreach loop

$names =  ['talha', 'rizwan', 'sahil', 'majid'];
foreach ( $names as $name ) {
	echo "<br> $name "; 
} 

// Using for Each Loop inside for Each Loop
$users = [
    ['names'=>'Maaz',
    'roll_no' => 24,
    'likes' => ['Burgers', 'Pizza'],
    'address' => [
        ['street' => 'Love Lane Road',
                  'pin-code' => '400010',
                  'city' => 'Mumbai',
    'is_student' => true]
    ]
    ],

    ['names'=>'Saad',
    'roll_no' => 23,
    'likes' => ['McDonald', 'Pizza Hut'],
    'address' => [
        ['street' => 'Love Lane Road',
                  'pin-code' => '400010',
                  'city' => 'Mumbai',
    'is_student' => true
    ]]
    ]
];

echo '<pre>' , print_r($users) , '</pre>';

foreach ( $users as $user ) {
	echo "<h1> {$user['names']} </h1>";
    foreach ( $user['address'] as $post ) {
        echo "<p> {$post['street']} </p>";
        echo "<p> {$post['pin-code']} </p>";
        echo "<p> {$post['city']} </p>";
    } 
}

// foreach loop break & Continue

$users = [
    ['username' => 'maaz'],
    ['username' => 'saad'],
    ['username' => 'talha'],
    ['username' => 'rizwan'],
    ['username' => 'kaleem']
];

$tofind = 'talha';
$result = null;

// Print the username before talha using break 
foreach( $users as $user) {
    if ($user['username'] === $tofind) {
        break ;
    }
    echo  $user['username'] .'<hr>';
}

// Print the username except talha using continue

foreach($users as $user) {
    if ($user['username'] === $tofind) {
        continue ;
    }
    echo '<br>' . $user['username'];
}

// Print the particular value and doesn't want the same value to print if it comes after 
// Print all values of a particular name
$users = [
    [
        'names' => 'maaz',
        'favourites' => ['cats','dogs','code']
    ],
    [
        'names' => 'shafik',
        'favourites' => ['cats','dogs','code']
    ],
];

$tofind = 'code';
$found = null;

foreach($users as $user) {
    foreach ($user['favourites'] as $favourites ) {
        if ($favourites === $tofind) {
            echo '<br>' . $found = $favourites;
            break 2;
        }
    }
}

// 15. functions

// Assigning function to a variable
function fullName() {
    return 'maaz mohammad siddique';
}

$fullName = fullName();
echo '<hr> 1. '. $fullName;

// Using Functions with Parameters
function name($firstName, $lastName, $seperator = ' ') {
    return "{$firstName}{$seperator}{$lastName}";
}

$fullName = name( 'maaz','siddique','_');
echo '<hr> 2. $fullname : '. $fullName;

// Using functions with variable
function fname($firstName, $lastName, $seperator = ' ') {
    return "{$firstName}{$seperator}{$lastName}";
}

$firstName = 'maaz mohammad';
$lastName = 'siddique';

$Name = fname($firstName, $lastName);
echo '<hr> 3. $fullname : '. $Name;

// Using function with variable without using function name
$fname = function ($firstName, $lastName, $seperator = ' ') {
    return "{$firstName}{$seperator}{$lastName}";
};

$firstName = 'maaz mohammad';
$lastName = 'siddique';

// $Name = fname($firstName, $lastName);
echo '<hr> 4. $fullname : '. $fname($firstName, $lastName);

// You can call function anywhere you want either before defining or After defining it
echo '<hr> 5 . $fullname ' .lname('Maaz', 'Siddique', '_');

function lname($firstName, $lastName, $seperator = ' ') {
    return "{$firstName}{$seperator}{$lastName}";
};

// If you dont want to print anything after first name when you didn't have last name stored
echo '<hr> 6 . $fullname : ' . Full('Maaz') . '<hr>';

function Full($First, $Last = null, $seperator = '_') {

    if(trim($First) === '') {
        return;
    }
    if($Last === null) {
        return $First;
    }
    
    return "{$First}{$seperator}{$Last}";
}

// Adding Number using Functions [Not Flexible]

function addition($num1, $num2, $num3) {
    return $num1 + $num2 + $num3 ;
}

echo addition(5, 10, 15) . '<br>';

// Adding Number from variable Arrays using functions

function  arr_add(array $numbers) {

    $total = 0;
    foreach($numbers as $num) {
        $total += $num;
    }
    return $total;
}

$numbers = [5, 10, 20];

echo arr_add($numbers). '<br>';

// Adding Number from Arrays without defining array in variable using functions

function  var_arr_add(array $numbers) {

    $total = 0;
    foreach($numbers as $num) {
        $total += $num;
    }
    return $total;
}

echo var_arr_add([5, 10, 20]). '<br>';

// Adding Number from Arrays using functions

function func_get_args_add() {
    $total = 0;
    foreach( func_get_args() as $num) {
        if (!is_numeric($num)) {
            continue;
        }
        $total += $num;
    }
    return $total;
}

echo func_get_args_add(5,5,5, '1maaz') .'<br>';

// Adding Numbers with functions array_sum and func_get_args

function add() {
    return array_sum(func_get_args());
}

echo add(5, 10, 25) . '<hr>';

// PHP scopes Keyword "Global"

$config = ['seperator' => ' '];

function indexname($first , $last) {

    global $config;

    return "{$first}{$config['seperator']}{$last}";
}

echo indexname('maaz', 'Siddique') . '<br>';

// PHP scopes Keyword "use" but only use with variable functions

$config = ['seperator' => '_'];

$indexname = function ($first , $last) use ($config) {
    return "{$first}{$config['seperator']}{$last}";
};

echo $indexname('maaz', 'Siddique') . '<br>';

// 17. PHP Super Globals GET & POST

// using $_GET Generating URL on search Bar when click on page links [' ?search=learn-php&pages=8 ']

// $pages = 10;

// if (isset($_GET['search'])) {
//     $search = $_GET['search'];
//     for ($i = 1; $i <= $pages; $i++) {
//         echo '<a href="?search=' .$search. '&pages='. $i .' "> '.$i.'</a> ';
//     }
// }

// 16. Ternary Operator [Inline If Statements]

// Using isset() function with Ternary Operator
// $page = isset($_GET['page']) ? $_GET['page'] : 'Please Enter URL';
// echo '<hr> <h3>' . $page . '</h3>';

// Without Using isset() function with Ternary Operator
$page = $_GET['page'] ?? 'Please Enter URL';
echo '<hr> <strong>' . $page . '</strong><br>';

// If you want to print something when it should be false
$balance = 0;
$availableBalance = $balance ?: 'zero';

echo '<em>Available Balance : ' . $availableBalance . '</em><hr>';

// 17. PHP Inbuilt Functions

/* 1. strlen();
    - To check length of a string.

   2. strtoupper();
    - Convert string into Uppercase.

   3. strtolower();
    - Convert string into lowercase.

   4. trim( '$string', 'character_mask' );
    - Deleting white space from string and if you want to delete other characters
     like DOT COMMA or any other special character that you want to remove
     you can use character_mask also.

   5. ltrim( '$string', 'character_mask' ); 
       - Deleting white space from string in the left hand side.
   OR 
      rtrim( '$string', 'character_mask' );
      - Deleting white space from string in the left hand side.
   
   6. substr( '$string', int(Starting_Point), condition );
      - This is used to grab any character from string.

   7. empty()
      - This is used to check an empty string.

   8. number_format() 
      - This is used to verify how many decimal number should you want to print
      - You can also define decimal point also
      - You can also define big number seperation also

   9. header() = redirect to pages
      - This is used to redirect pages from one page to other.

*/

// 18. OOP ['Object Oriented Programming']

// 1. classes = Person;
// 2. Objects = maaz
// 3. Properties = name and age
// 4. Constructor = __construct
// 5. Inheritance & Properties visibility

class People {

    public function __construct($id, $name, $email, $balance) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }

}

$people = new People(2, 'saad mohammad siddique', 'saad@gmail.com', 10);
echo "My name is {$people->name} and my email address is {$people->email} <br>";
// $maaz = new Person('maaz', '20');
// echo $maaz->sentence();

class Customer {

    public $id;
    public $name;
    public $email;
    public $balance;
    public $age;

    public function __construct($id, $name, $email, $balance) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }

    public function getCustomers() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

}

$customer = new Customer(1, 'Maaz Mohammad Siddique', 'maaz@gmail.com', 0);

// echo "<br> My name is {$customer->name} and i have {$customer->balance} amount in my bank account";
echo "<br> My name is {$customer->getCustomers()} and my email address is {$customer->getEmail()} <br>";

class Person extends Customer {

    public function __construct($id, $name, $email, $balance, $age) {
        parent::__construct($id, $name, $email, $balance, $age);
        $this->age = $age;
    }

    // public function __construct($name, $age) {
    //     $this->name = $name;
    //     $this->age = $age;
    // }

    // public function sentence() {
    //     return 'My name is ' .$this->name. ' and iam ' .$this->age. ' years old <br>';
    // }

}

$person = new Person(2, 'saad mohammad siddique', 'saad@gmail.com', 10, 25);

echo "My name is {$person->name} and i am {$person->age} years old <br>";
// echo "My name is {$person->name} and i have {$person->balance} rupees in my bank account <br>";
// echo "My name is {$person->getCustomers()} and my email address is {$person->getEmail()} <br>";

// 6. Static Properties

class User {

    public $username;
    public $email;
    public static $passwordLength;

    public function getPasswordLength() {
        return self::$passwordLength;
    }

}

echo User::$passwordLength = 5;

// class Bird {

//     public $fly;
//     public $legCount;
//     public $color = 'blue';
//     private $gender = 'male';

//     public function __construct($fly, $legCount) {
//         $this->fly = $fly;
//         $this->legCount = $legCount;
//     }

//     public function fly() {
//         return ($this->fly === true) ? ' birds can fly and ' : 'Please enter a boolean value';     
//     }

//     public function legCount() {
//         return $this->legCount;
//     }
// }

// class Pigeon extends Bird {

//     public function color() {
//         return $this->color;
//     }

// }

// class Pet {
//     public function color() {
//         return $this->color;
//     }
// }

// $bird = new Bird(true, 2);
// echo '<hr>'.$bird->fly(). ' Birds have ' .$bird->legCount(). ' legs that is also true. <br>';

// $pigeon = new Pigeon(true, 2);
// echo $bird->fly(). '50% pigeon have ' .$pigeon->color(). ' color and they have '.$pigeon->legCount(). ' legs which is true.';

// $pet = new Pet(true, 2);
// echo  $pet->fly(). '50% pets have ' .$pet->color(). ' color and they have '.$pet->legCount(). ' legs which is true.';
// echo $pet->fly(). ' Birds have ' .$pet->legCount(). ' legs that is also true.';

