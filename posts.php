<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/images.png"/>
<!-- Custom styles for this template -->
<link href="styles/blog.css" rel="stylesheet">
<link rel="stylesheet" href="styles/styles.css">
<title>Blog</title>

<?php
include "db.php";
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$statement = $connection->prepare($sql);
// izvrsavamo upit
$statement->execute();
// zelimo da se rezultat vrati kao asocijativni niz.
// ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
$statement->setFetchMode(PDO::FETCH_ASSOC);
// punimo promenjivu sa rezultatom upita
$posts = $statement->fetchAll();
// koristite var_dump kada god treba da proverite sadrzaj neke promenjive
// echo '<pre>';
//var_dump($posts);
// echo '</pre>';*/
foreach ($posts as $post) {
    ?>

    <div class="blog-post">

        <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a></h2>

        <p class="blog-post-meta"><?php echo($post['created_at']) ?> by <a style="color: #5bc0de; text-decoration: none" href="#"><?php echo($post['author']) ?></a>
        </p>

        <p><?php echo($post['body']) ?></p>

    </div><!-- /.blog-post -->


    <?php
}
?>