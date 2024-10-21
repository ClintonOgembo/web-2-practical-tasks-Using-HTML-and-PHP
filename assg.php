<?php
/*  Chapter 01 
  Write PHP code to display your Roll Number, Course Name and Technology Name on the 
 browser.
 */

$rollNumber = 'CIT-227-055/2022';
$courseName = 'Bsc_Software_Engineering';
$technology = 'PHP_Language';

echo "My Roll Number is ".$rollNumber." and am currently doing ".$courseName." using ".$technology. " technology";
echo '<br>';

/* Chapter 02
1. Write a simple PHP program to print your BIODATA on the browser screen. */
$name = "Clinton Ogembo";
$dateOfBirth = 1990;
$gender = 'Male';
$maritalStatus = 'Married';

echo "<b>NAME:</b> ".$name;  echo '<br>';
echo "<b>Date Of Birth:</b> ".$dateOfBirth; echo '<br>';
echo "<b>GENDER:</b> ".$gender; echo '<br>';
echo "<b>MARITAL STATUS:</b> ".$maritalStatus; echo '<br>';


/* 2. Elaborate the Error(s) in the code below (if any).
 <?php 
 / This is a comment for PHPprogram 
 echo "Display first line </br>";
 echo "Display second line </br> "
 Print "Display third line with print statement ";
 ?>
 
 // ANSWERS

  -The first_line; comments should have double forward slashes..
    -third_line misses a semi-colon at the end.
    -
*/

// 3. Write down the correct code of above program.
//This is a comment for PHPprogram 
echo "Display first line </br>";
echo "Display second line </br>";
Print "Display third line with print statement ";
echo "<br>";

/*4. Mention the output of above code.
  ANSWER: 
    Display first line
    Display second line
    Display third line with print statement */

# 5. Write PHP code to display any text on the browser uses HTML formatting tags within the echo statements.
echo "<b>Hi there?</b> am Clinton <i>a Software Engineer</i> by Profession";
echo '<br><br>';

//  Chapter 03
// 1. Write a simple program of the following output using Constants.
//  Employee code is 001
//  Employee Name is ABC
//  Employee Salary is 25000
//  Working Hours are 7.5
 define('CODE','001');
 define('NAME','ABC');
 define('SALARY','25000');
 define('WORKING_HOURS','7.5');

 echo "Employee code is ".CODE.'</br>';
 echo "Employee Name is ".NAME.'</br>';
 echo "Employee Salary is ".SALARY.'</br>';
 echo "Working Hours are ".WORKING_HOURS.'</br><br>';

// 2. Repeat the above program using Variables.
//  Hint: Save the given data at 4 memory locations respectively and print on the screen.
$code = 001;
$Name = 'ABC';
$salary = 25000;
$working_hours = 7.5;

echo "Employee code is ".$code; echo '<br>';
echo "Employee name is ".$Name; echo '<br>';
echo "Employee Salary is ".$salary; echo '<br>';
echo "Working Hours are ".$working_hours; echo '<br><br>';

/* 3. How do you make a constant name case insensitive?
 ANSWER;
    you can define case-insensitive constants by passing true as the third argument to the define() function 
*/

/* 4. How do you declare a constant in PHP with example?
    ANSWER;
     constants are declared using the define() function. A constant's value cannot be changed once it is set, and it doesn't need a dollar sign ($) when accessed
     */

// Define a constant
define("INIT_NAME", "JACOB");

// Access the constant
echo INIT_NAME;
echo '<br>';


/* 5. Write make a simple program to set your G.R No. and Name in the variables and display G.R
 No. and name by echo and print functions */

 // Set G.R No. and Name in variables
 $GR_NO = "CIT-227-055/2022";
 $MyName = "Clinton Ogembo";
 
 // Display using echo
 echo "G.R No: " . $GR_NO . "<br>";
 echo "Name: " . $MyName . "<br><br>";
 
 // Display using print
 print "G.R No: " . $GR_NO . "<br>";
 print "Name: " . $MyName.'<br><br>'; 
 
 
/* 
chapter 04
1. Write a simple program of following using post method:
 Enter Student Name:
 Enter Student G.R #:
 Enter Class:
 Enter Section:
  Output should be display on new tab of browser. */

  //answer
 
/* Check if the POST data is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST['student_name'];
    $gr_no = $_POST['gr_no'];
    $class = $_POST['class'];
    $section = $_POST['section'];
} else {
    echo "No data submitted!";
    exit;
}
echo $student_name.'<br>';
echo $gr_no.'<br>';
echo $class.'<br>';
echo $section.'<br>';
*/

/*2. Input your Gr.No and Course Name and then print using get and post method.*/

//using GET
$Gr_no = $_GET['gr_No'];
$Course = $_GET['Course'];

echo 'Using GET method<br>';
echo $Gr_no. '<br>';
echo $Course. '<br>';


//using POST
//  $Gr_no = $_POST['gr_No'];
//  $course = $_POST['Course'];

// echo 'Using POST method<br>';
// echo $Gr_no. '<br>';
// echo $course. '<br>';


/*3. Write make a simple form where input your Gr No. and Name with submit and reset button 
after submit form display Gr No. and name to other web page.

//ANSWER;
<!-- form.html -->
<form action="display.html" method="POST">
    <label for="grno">Gr No:</label>
    <input type="text" id="grno" name="grno"><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<!-- display.html -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grno = $_POST['grno'];
        $name = $_POST['name'];
        echo "Gr No: $grno<br>";
        echo "Name: $name";
    }
?>


4. You send Roll number and Name by using hyperlinks from one page to other page.

//ANSWER;
<!-- index.html -->
<a href="display.html?rollno=12345&name=JohnDoe">Click here to display Roll Number and Name</a>

<!-- display.html -->
<?php
    $rollno = $_GET['rollno'];
    $name = $_GET['name'];
    echo "Roll Number: $rollno<br>";
    echo "Name: $name";
?>


5. Write syntax of the action and method attributes in the opening <form> tag

//ANSWER;
<form action="process.php" method="POST">

chapter 05
1. Write a simple program to calculate total numbers of days you lived up to until now
 Hint: Input your age (in years) and then calculate number of days 
 number _of _days= age(in years) * 365

 // ANSWER;
<?php
    $age_in_years = 29;
    $days_lived = $age_in_years * 365;
    echo "You have lived for $days_lived days.";
?>


2. Write a code to calculate and print percentage of a student where,
 Total_Marks=400, Obtained_Marks=Sum of obtained marks of all 4 subjects
 Percentage= (Obtained_Marks*100)/Total_Marks.
 (Hint: input marks of four subjects out of 100).

 //ANSWER
<?php
    $subject1 = 82; 
    $subject2 = 70;
    $subject3 = 75;
    $subject4 = 95;
    $total_marks = 400;
    $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;
    $percentage = ($obtained_marks * 100) / $total_marks;
    echo "Percentage: $percentage%";
?>


3. Write a code to input Temperature in Centigrade and convert to Fahrenheit. 

//ANSWER
<?php
    $temperature_celsius = 24; 
    $temperature_fahrenheit = ($temperature_celsius * 9/5) + 32;
    echo "Temperature in Fahrenheit: $temperature_fahrenheit";
?>


4. If $A= 34 and $B=55 then solve the following Exercise; Also Justify your answer
 a) $A= = 34 && $B = = 55 b) $A>=30 || $B<=50 c) $B= = 55 || $A= =35
 d) $A !=34 e) $A>=30 && $A<35 f) $B>50 || $B<56 

//ANSWER
<?php
    $A = 34;
    $B = 55;
    
    // a) $A == 34 && $B == 55
    var_dump($A == 34 && $B == 55); // True

    // b) $A >= 30 || $B <= 50
    var_dump($A >= 30 || $B <= 50); // True

    // c) $B == 55 || $A == 35
    var_dump($B == 55 || $A == 35); // True

    // d) $A != 34
    var_dump($A != 34); // False

    // e) $A >= 30 && $A < 35
    var_dump($A >= 30 && $A < 35); // True

    // f) $B > 50 || $B < 56
    var_dump($B > 50 || $B < 56); // True
?>


5. Mention the output of the following code at each step
<?php Output
 $a = 33;
 $b = 55;
 $a += $b;
 $c = $a;
 $c -= $b;
 $c *= $a;
 $a++;
 echo "a=$a ,b=$b , c=$c";
 ?>

 //ANSWER
a=89 ,b=55 , c=2904


6. What is the result after the execution of the following program segment?
 <?php 
 $a = 8;
 $b = ++$a + 5;
 $c = $b-- + 10;
 echo "a= $a , b= $b , c = $c "; ?>

 //ANSWER
a= 9 , b= 13 , c = 24

7. Write down the output of following code and also justify your answer
a) echo 4 + 2 - 12 * 3 ; //what will be output
b) echo 4 + (2 – 12) * 3 ; //what will be output
c) echo ( (4 + 2) - 12 ) * 3 //what will be output

//ANSWER
echo 4 + 2 - 12 * 3; // Output: -30
echo 4 + (2 - 12) * 3; // Output: -26
echo ((4 + 2) - 12) * 3; // Output: -18


8. What value is assigned to $ReturnValue for each of the following expression.
a) $ReturnValue = 2 == 3; b) $returnValue = "2" + "3";
 c ) $ReturnValue = 2 > 3; d) $ReturnValue = 2 < 3;
 e ) $ReturnValue = (2 > 3 ) && ( 2 < 3) ; f) $ReturnValue = (2 > 3 ) || (2 < 3 )

 //ANSWER;
 $ReturnValue = 2 == 3; // False
$ReturnValue = "2" + "3"; // 5 (automatic type conversion)
$ReturnValue = 2 > 3; // False
$ReturnValue = 2 < 3; // True
$ReturnValue = (2 > 3) && (2 < 3); // False
$ReturnValue = (2 > 3) || (2 < 3); // True


chapter 06
1. Write a simple program to construct a Calculator that can perform Basic operation
Mathematical operation as well.

//ANSWER;
<?php
    $num1 = 5;
    $num2 = 3;
    echo "Addition: " . ($num1 + $num2) . "<br>";
    echo "Subtraction: " . ($num1 - $num2) . "<br>";
    echo "Multiplication: " . ($num1 * $num2) . "<br>";
    echo "Division: " . ($num1 / $num2);
?>


2. Write a simple program to check an alphabet entered by user is a Vowel or not using if 
statement, if else if else statement and switch case statements.


 //ANSWER;
 //If Statement 
 <?php
    $char = 'a';
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
        echo "$char is a vowel.";
    }
?>
 // If else if Statement
<?php
    $char = 'b';
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
        echo "$char is a vowel.";
    } else {
        echo "$char is not a vowel.";
    }
?>

// Switch Case
<?php
    $char = 'a';
    switch ($char) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "$char is a vowel.";
            break;
        default:
            echo "$char is not a vowel.";
    }
?>



3. Write a code to check an integer number entered by user is Even or Odd using Conditional 
operator statement.

//ANSWER;
<?php
    $number = 4;
    echo ($number % 2 == 0) ? "$number is Even" : "$number is Odd";
?>


4. Write a program to input subject marks Math, English and Physics then to prepare marks 
sheet of a student that will show the Obtain marks, percentage and grade.

//ANSWER;
<?php
    $math = 90;
    $english = 65;
    $physics = 80;
    $total_marks = 300;
    $obtained_marks = $math + $english + $physics;
    $percentage = ($obtained_marks / $total_marks) * 100;
    
    echo "Obtained Marks: $obtained_marks<br>";
    echo "Percentage: $percentage%<br>";
    if ($percentage >= 80) {
        echo "Grade: A";
    } elseif ($percentage >= 60) {
        echo "Grade: B";
    } else {
        echo "Grade: C";
    }
?>


5. Write a program that input a number, then report whether the number is in the range from 
1 to 100. Otherwise the number above to 100.

//ANSWER;
<?php
    $number = 101;
    if ($number >= 1 && $number <= 100) {
        echo "The number is in the range of 1 to 100.";
    } else {
        echo "The number is above 100.";
    }
?>


6. The following is supposed to cause an action or print message, whenever x is 5 and y is 9.
<?php
 If ( $x >= $y )
 echo “x is greater than y”
 else
 echo “y is greater than x “;
 ?>

 //ANSWER:
<?php
    $x = 5;
    $y = 9;
    if ($x >= $y) {
        echo "x is greater than or equal to y";
    } else {
        echo "y is greater than x";
    }
?>


7. Write a switch statement that output messages indicating what day has been numerically 
input (for example 1-> Monday, 2-> Tuesday, 3-> Wednesday,...)

//ANSWER;
<?php
    $day = 3;
    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid input";
    }
?>


*/

?>