<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit();
}
?>

<h2>Create New Post</h2>
<form method="POST">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content"></textarea><br><br>
    <button type="submit">Create</button>
</form>

<?php include 'footer.php'; ?>