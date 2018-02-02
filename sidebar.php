<?php
include "db.php";

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$statement = $connection->prepare($sql);

$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$posts = $statement->fetchAll();
?>
<link rel="stylesheet" href="styles/styles.css">

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h3>Latest posts</h3>
        <?php

        foreach ($posts as $post) { ?>

                <h5><a style="color: #b34848;" href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a></h5>


            <?php
        }
        ?>
    </div>

</aside><!-- /.blog-sidebar -->
