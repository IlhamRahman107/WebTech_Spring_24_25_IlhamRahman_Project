<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: /web-tech-project/app/views/Forms/login_admin_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Home</title>
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <?php include 'Layouts/header.php';
    ?>

    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin_name']); ?>!</h1>
    <p>This is the admin dashboard.</p>
    <a href="/web-tech-project/app/views/Forms/logout_user.php">Logout</a>

    <?php include 'Layouts/footer.php';
    ?>
</body>

</html>