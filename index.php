<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP CRUD Operation</title>
</head>

<body>
    <header>PHP CRUD Operation</header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <div class="add-button">
            <?php include 'add_data.php'; ?>
            <div class="div" style="width: 20px;"></div>
        </div>
    </nav>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Semester</th>
                    <th>CGPA</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
    </main>
</body>

</html>