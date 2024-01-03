<!DOCTYPE html>
<html>  
 
    <style>
        #abc{
            border : 5px outset black ;
            background-color:lightgrey;
            
            width : 600px;
            height :500px;
            text-align:center;
        }
     </style>   
     <body>
    <form name="form" action="exam.php" method="POST" onSumbit="validateform()">
        <center>
        <div id="abc">
        Book Id:<input type="text" id="id" name="id"><br><br>
        Movie Name:<input type="text" id="name" name="name"><br><br>
        Seat No:<input type="text" id="seat" name="seat"><br><br>
        Date:<input type="text" id="date" name="date"><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
        </div></center>
    </form>
    <script>
        function validateform()
        {
            var bookid=document.getElementById("id").value;
            var name=document.getElementById("name").value;
            var seat=document.getElementById("seat").value;
            var date=document.getElementById("date").value;
           

        if(bookid==="")
        {
        alert("enter Booking ID");
        return false;
        }    
        if(name=="")
        {
        alert("enter Name");
        return false;
        }        
        if(seat=="")
        {
        alert("enter Seat Number");
        return false;
        }
        if(date isNumber())
        {
        alert("enter a date");
        return false;
        }
    }
    </script>
    <?php
      
      $conn=mysqli_connect("localhost","root","","exam");
      if(!$conn)
      {
        die("Connection failed");
      }
      else{
        echo("connected succesfully\n");
        echo '<br>';
      }
      
      if(isset($_POST['submit']))
      {
        $bookid=$_POST['id'];
        $name=$_POST['name'];
        $seat=$_POST['seat'];
        $date=$_POST['date'];

        echo "Booking id :" .$bookid.'<br>';
        echo "Movie Name :".$name.'<br>';
        echo "Seat Number :".$seat.'<br>';
        echo "Date :".$date.'<br>';

        $sql1="INSERT INTO tbl_movie VALUES ('$bookid','$name','$seat','$date')";
        if(mysqli_query($conn,$sql1))
        {
            echo "Record Inserted";
        }
        else
        {
            echo "not inserted";
        }
      }
    ?>    
    





        
</body>     

</html>