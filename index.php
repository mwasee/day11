
        <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="students";
        
        $conn=new mysqli ($hostname,$username,$password,$databasename);
        $q="select * from reportcard";
        $result=$conn->query($q);
        while ($row = mysqli_fetch_assoc($result)){
           
    echo $row ['CONTACT'] ."&nbsp;&nbsp;&nbsp;";
    echo $row ['NAME'] ."&nbsp;&nbsp;&nbsp;" ;
    echo $row ['ID'] ."&nbsp;&nbsp;&nbsp;" ;
    echo "<br>";
}
        ?>
