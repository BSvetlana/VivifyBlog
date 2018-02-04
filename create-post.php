<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/images.png"/>
<link href="styles/blog.css" rel="stylesheet">
<link rel="stylesheet" href="styles/styles.css">
<title>Blog</title>
<style>
    .contact {
        width: 70%;
        margin: 0 auto  ;
        background-color: #f9f9f9;
    }

    input[type=text]:hover {
        background-color: lightgoldenrodyellow;
    }
    input[type=email]:hover {
        background-color: lightgoldenrodyellow;
    }

    textarea:hover {
        background-color: lightgoldenrodyellow;
    }

    input[type=email]{
        width: 100%;
        padding: 12px;
        border: 1px solid #5bc0de;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=password]{
        width: 100%;
        padding: 12px;
        border: 1px solid #5bc0de;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=text]{
        width: 100%;
        padding: 12px;
        border: 1px solid #5bc0de;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=datetime-local]{
        width: 100%;
        padding: 12px;
        border: 1px solid #5bc0de;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=submit] {
        background-color: 	#5cb85c;
        width: 25%;
        float: right;
        color: white;
        padding: 12px 20px;
        border: none;
        margin-bottom: 6%;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px;
        border: 1px solid #5bc0de;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
        resize: none;
    }

</style>
<?php include "header.php"; ?>
<div class="contact">
    <h2>Create post:</h2>
    <form action="create.php" method="POST">
        <label for="title">Title</label>
        <input type="text" id="title" name="title">

        <label for="content">Content</label>
        <textarea type="text" id="content" name="content"></textarea>

        <label for="author">Author</label>
        <input type="text" id="author" name="author">

        <label for="date">Created At</label>
        <input id="datetime" type="datetime-local" name="created_at">


        <input type="submit" name="submit" value="Add Data">
    </form>
</div>
