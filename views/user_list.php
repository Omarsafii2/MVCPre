<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <a href="?controller=user&action=show&id=<?= $user['id'] ?>">
                    <?= htmlspecialchars($user['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
