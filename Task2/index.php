<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<?php
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
while($row = $result->fetch_assoc()):
?>
    <div class="post">
        <h2><a href="read.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
        <p><?php echo substr($row['content'], 0, 100); ?>...</p>
    </div>
<?php endwhile; ?>

<?php include 'footer.php'; ?>