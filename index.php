<?php 

$db = mysqli_connect('localhost', 'root','', 'tarikovadb') or die("connection error");

$sql ="SELECT * FROM names";

$query = mysqli_query($db,$sql);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

//echo"<pre>";
//var_dump($result);
//echo"</pre>";

    foreach($result as $row) {
        echo $row['sport']."<hr>";
    }

        mysqli_close($db);

?>