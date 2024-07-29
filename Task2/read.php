<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();
$stmt->close();
?>

<h2><?php echo $post['title']; ?></h2>
<p><?php echo $post['content']; ?></p>
<a href="update.php?id=<?php echo $post['id']; ?>">Edit</a>
<form method="POST" action="delete.php" style="display:inline;">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <button type="submit">Delete</button>
</form>
<a href="index.php">Back to Posts</a>

<?php include 'footer.php'; ?>

