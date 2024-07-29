<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: read.php?id=$id");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();
$stmt->close();
?>

<h2>Edit Post</h2>
<form method="POST">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>"><br><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content"><?php echo $post['content']; ?></textarea><br><br>
    <button type="submit">Update</button>
</form>

<?php include 'footer.php'; ?>