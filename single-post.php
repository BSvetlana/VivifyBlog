<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/images.png"/>
<link href="styles/blog.css" rel="stylesheet">
<link rel="stylesheet" href="styles/styles.css">
<title>Blog</title>
<?php
include "header.php"; ?>


<main role="main" class="container">

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <?php
                include "db.php";
                $post_id = $_GET['post_id'];
                $sql = "SELECT * FROM posts WHERE posts.id = '" . $post_id . "'";
                $statement = $connection->prepare($sql);

                $statement->execute();

                $statement->setFetchMode(PDO::FETCH_ASSOC);

                $singlePost = $statement->fetch();
                //var_dump($singlePost);
                ?>

                <h2 class="blog-post-title"><a href="single-post.php"><?php echo($singlePost['title']) ?></a></h2>
                <p class="blog-post-meta"><?php echo($singlePost['created_at']) ?>  by <a href="#"><?php echo($singlePost['author']) ?></a></p>

                <p><?php echo($singlePost['body']) ?></p>
                <button type="button" class="btn btn-default" id="com" >Hide comments</button>
                <?php
                $com_id = $_GET['post_id'];
                $sql = "SELECT * FROM comments INNER JOIN posts ON comments.post_id = posts.id WHERE comments.post_id = ".$com_id;

                $com = $connection->prepare($sql);
                $com->execute();
                $com->setFetchMode(PDO::FETCH_ASSOC);
                $comments = $com->fetchAll();


                foreach ($comments as $comment) { ?>


                    <ul class="list">
                        <hr>
                        <li><p><h6><i>Comment: </i></h6><?php echo($comment['text']) ?></p></li>
                        <li><h6><i>Author by </i><?php echo($comment['author']) ?></h6></li>
                    </ul>

                <?php } ?>
                <hr>
            </div><!-- /.blog-post -->
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div><!-- /.row -->
        <?php include "sidebar.php"; ?>
    </div><!-- /.blog-main -->

</main><!-- /.container -->
<script type="text/javascript" src="js/script.js" ></script>

