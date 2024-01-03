<html>
<head>
</head>
<body>
    <form method="GET" action="mcaform.php">
        Course ID:<input type="text" name="cid" >    
        Course Name:<input type="text" name="cname" > 
        Duration:<input type="text" name="dur" > 
        <input type="submit" name="submit" value="Submit" >
<?php
if (isset($GET['submit']))
    {
    
        $cid = $GET["cid"];
        $cname = $GET["cname"];
        $dur = $GET["dur"];
        echo $cid;
        echo $cname;
        echo $dur;
        echo "hi";
    
}

$conn = new mysqli("localhost","root","","db_student");
?>
</body>
</html>