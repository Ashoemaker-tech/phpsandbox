<?php
require('config/config.php');
require('config/db.php');
// Create Query
$query = 'SELECT * FROM posts';

// Get Result
$result = mysqli_query($conn, $query);

//Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);
// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
<div class="container">
  <h1 class="text-primary">Posts</h1>
  <?php foreach ($posts as $post) : ?>
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <h3 class="text-primary"><?php echo $post['title']; ?></h3>
      <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
      <p><?php echo $post['body']; ?></p>
      <div class="container">
        <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
      </div>
    </div>
  <?php endforeach; ?>

  <?php include('inc/footer.php'); ?>