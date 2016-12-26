<?php

include ("functions.php");

if($_GET['action'] == "postTodo")
{
    $query="INSERT INTO chores(name, DAY ) VALUES ('" . mysqli_real_escape_string($link, $_POST['todo']) . "','" . mysqli_real_escape_string($link, $_POST['day']) . "')";



    if (mysqli_query($link, $query)) {

        $idQuery="SELECT * FROM chores ORDER BY id DESC LIMIT 1";

        $result=mysqli_query( $link, $idQuery);

        $chores=mysqli_fetch_assoc($result);

        echo $chores['id'];
    }
    else
    {

        echo "no";
    }



}
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    $input = $_POST['inputText']; //get input text
    $message = "Success! You entered: ".$input;
}
if($_GET['action'] == "getInfo")
{
    $query="SELECT * FROM chores WHERE id='" . mysqli_real_escape_string($link, $_POST['id']) . "'LIMIT 1";

    $result = mysqli_query($link, $query);

    $row=mysqli_fetch_assoc($result);

    $choreTitle=$row['name'];

    $choreDescription=$row['chore'];

    $data = array($choreTitle , $choreDescription);
    echo json_encode($data);

}
if($_GET['action'] == "saveChanges")
{

    $query="UPDATE chores SET chore='" . mysqli_real_escape_string($link,$_POST['msg']) . "' WHERE id='" . $_POST['id'] . "'";

    if(mysqli_query($link, $query))
    {
        echo "1";
    }
    else
    {
        echo "Couldn't update the data.";
    }
}
?>