<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="">
   </head>
   <body>
      <?php
      include "connection.php";
      ?>

      <form action="entry.php" method="post">
         <div>
         <label>Emp_Name:</label>
         <select name="emp">
            <option>Select</option>
            <option>Name1</option>
            <option>Name2</option>
            <option>Name3</option>
            <option>Name4</option>
         </select>

         <label>Area:</label>
         <select name="area">
            <option>Select</option>
            <option>Area 1</option>
            <option>Area 2</option>
            <option>Area 3</option>
            <option>Area 4</option>
         </select>
         </div>
         <br>
         <div>
         <label >Customer:</label>
         <input type="text" name="cust">
        <label name=""> Who visited:</label>
         <select name="visit">
            <option>select</option>
            <option>Name1</option> 
            <option>Name2</option>
            <option>Name3</option>
            <option>Name4</option>
         </select>

         <label>Visiting type:</label>
         <select name="typ">
            <option>select</option>
            <option>call</option>
            <option>visited</option>
         </select>
         </div>
         <br>
         <div>
         <label>Cus_Name:</label>
         <input type="text" name="custname">
         <label>Position:</label>
         <input type="text" name="position">
         </div>
         <br>
         <div>
         <label>Contact No:</label>
         <input type="text" name="contact">
         <label>Payment mode:</label>
         <select name="payment">
            <option>select</option>
            <option>PTP</option>
            <option>PDC</option>
            <option>New customer</option>
         </select>
         </div>
         <br>
         <div>
         <label>Remarks:</label>
         <input type="text" name="remark">
         </div>
         <br>
         <div>
         <label>Date:</label> 
         <input type="date" name="dat" value="" min="2021-01-01" max="2025-12-31">
         <label>Next Appointment:</label> 
         <input type="date" name="appointment" value="" min="2021-01-01" max="2025-12-31">

         <label>Priority: </label>                                                                           
         <select name="priority">
            <option>Select</option>
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
            <option>Important</option>
         </select> 
         </div> 
         <br>
         <input type="submit" name="submit" value="submit">                                                      
         </form>
   
   </body>
</html>