# Robot_Arm
An Interface in HTML  for specifying the values of the motors for the arm  and linking them to the database via PHP.
Html interface to determine the values of arm motors, link them to the database and retrieve them via PHP.

This project is based on the analysis, design, and implementation of the user interface of a robot control system using IOT web development techniques, 
By controlling the first part of the project "Fighting robot", which is the robot arm.



1- The control interface of the arm was designed using HTML with the addition of changes in CSS.
   The  HTML page contains 6 range sliders to determine the values of 6 motors at the arm.
   These values were linked through the JavaScript to appear on the right of the cursor
   with the addition of the Save and Run button under range sliders.





2- A database was created and a table was created to save the motors values, 
    and a table to show the operation process when pressing the RUN button on the HTML page.
  




3- The database was linked to the control interface via PHP 
   with the creation of a PHP page to retrieve the values of the motors on a special page through the code in "display.php" 
   and the values will be displayed on the PHP page as a table containing the name of the motor and its value.
