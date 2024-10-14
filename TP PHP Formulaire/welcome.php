<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['email']); ?> !</h1>

    <form action="logout.php" method="POST">
        <button type="submit">Déconnexion</button>
    </form>
</body>
</html>
