<style>
    form {
        width: 100%;
        margin: 0 auto 10%;
    }

    input[type=text] {
        width: 100%;
        padding: 5px;
        border: 1px solid #A4A4A4;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 5px;
        cursor: pointer;
    }

    input[type=submit] {
        background-color: #E6E6E6;
        width: 23%;
        float: left;
        color: #2E2E2E;
        padding: 7px 9px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type=submit]:hover {
        background-color: #D8D8D8;
    }

    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #A4A4A4;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
        resize: none;
    }

</style>
<p>Your Comment:</p>

<form name="myForm" action="create-coment.php" method="POST" onsubmit="return required()">

    <label for="name">Author</label>
    <input type="text" id="name" name="name" class="inp">
    <div class="alert alert-danger" style="display: none">
        <p>Obavezno polje</p>
    </div>
    <label for="content">Comment</label>
    <textarea type="text" id="content" name="content"></textarea>
    <div class="alert alert-danger" style="display: none">
        <span>Obavezno polje</span>
    </div>
    <input type="hidden" name="post_id" value="<?php echo($post_id) ?>">
    <input id="inpForm" type="submit" name="submit" value="Add comment">

</form>


<button type="button" class="btn btn-default" id="com">Hide comments</button>