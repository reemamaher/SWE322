<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Lab 4</title>
    <style>
      
        li {
            font-size: 20px;
            font-family: sans-serif;
            color: orange;
        }
        table, tr, th {
            border: 1px solid;
            margin-left: 25%;
            font-size: 20px;
            width: auto;
        }
        p{
            text-align: center;
            font-size: 20px;
            color: green;
        }
    </style>
</head>
<body>
<?php

$classmates = array("Salah","Khalid", "Abdul karem", "Samer", "Ahmed","Abdulaziz","Saud","Salim","Reem","Haifa","Fatima","Nandini");

echo "<h3> Course SWE 322 classmates are: </h3>";
echo "<ul>";
foreach($classmates as $classmate) {
            echo "<li>$classmate</li>";
        }
        echo "</ul>";
  #this marks the end of the first part


echo "<hr>";

$course = array(
    "CIS 103" => "Programming Fundamentals I",
    "CIS 104" => "Programming Fundamentals II",
    "CIS 202" => "Data Structures",
    "SWE 300" => "Software Process & Modeling",
    "SWE 201" => "Foundation of Web Design",
    "PHL101" => "critical thinking",
    "CIS 381" => "Computer Ethics",
);

echo "<h3> Courses I took: </h3>";
echo "<table border=3>";
echo "<tr>";
echo "<th>Course Code</th>";
echo "<th>Course Name</th>";

foreach ($course as $c => $c_value) {
    echo "<tr>";
    echo "<td> $c </td>";
    echo "<td> $c_value </td>";
    echo "</tr>";
}
echo "</table>";
 #this marks the end of the first part

echo "<hr>";
echo "<br>";
$info = array(
    array("Labtop", "Asus", "MSI"),
    array("CPU", "AMD", "Intel"),
    array("GPU", "AMD", "Nvidia")
);


echo "<p>I am looking for " 
	. $info[0][1] . " " . $info[0][0] . " with " 
	. $info[1][1] . " " . $info[1][0] . " and " 
	. $info[2][1] . " " . $info[2][2] . ".</p>";
   ?>
</body>
</html>L