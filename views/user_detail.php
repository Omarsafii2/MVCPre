<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <p>ID: <?= htmlspecialchars($user['id']) ?></p>
    <p>Name: <?= htmlspecialchars($user['name']) ?></p>
    <a href="?controller=user&action=index">Back to user list</a>
</body>
</html>
