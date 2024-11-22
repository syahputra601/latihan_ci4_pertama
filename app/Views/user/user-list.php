<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
</head>
<body>

    <h1>Daftar User</h1>

    <!-- Tampilkan list pengguna -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php foreach ($users as $user): ?> -->
                <!-- <tr>
                    <td><?= esc($user['user_id']) ?></td>
                    <td><?= esc($user['name']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                </tr> -->
            <!-- <?php endforeach; ?> -->
        </tbody>
    </table>

</body>
</html>
