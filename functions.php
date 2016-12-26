<?php

$link=mysqli_connect("localhost", "root", "", "todoList");

if(mysqli_connect_errno())
{
    print_r(mysqli_connect_error());
    exit();
}
function showeChores($day)
{
    global $link;

    $query= "SELECT * FROM chores WHERE day='" . mysqli_real_escape_string($link, $day) . "'";

    $result=mysqli_query($link, $query);

    while($row=mysqli_fetch_assoc($result))
    {
        echo "<li>" . $row['name'] . "<a href='#' class='info' data-toggle='modal' data-target='#infoModal' data-id='" . $row['id'] . "'> info</a>";
    }
}


?>