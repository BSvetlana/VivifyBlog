<?php  ?>
<?php
//send value in database comments table

$connection = mysqli_connect('localhost','root','','blog');
if(mysqli_connect_errno($connection)){
    echo 'Faild conect!';
}

if (!empty($_POST)) {
    $author = $_POST['name'];
    $coment = $_POST['content'];
    $com_id = $_POST['post_id'];


    $sql = "INSERT INTO comments (author,text,post_id) VALUES ('$author','$coment','$com_id')";
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
header("Location: http://academy.local/vivifyacademy-basic-blog-boilerplate/single-post.php?post_id=$com_id ");

?>


