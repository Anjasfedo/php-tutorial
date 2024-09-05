<?php

/*
create a contact form that gets name email and text
store the data and the time of contact in a json file
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];
        $date = date('Y-m-d H:i:s');

        $newData = [
            'name' => $name,
            'email' => $email,
            'text' => $text,
            'date' => $date
        ];

        $file = 'project_6.json';

        if (file_exists($file)) {
            $currentData = json_decode(file_get_contents($file), true);

            if (!is_array($currentData)) {
                $currentData = [];
            }
        } else {
            $currentData = [];
        }
        
        $currentData[] = $newData;

        file_put_contents($file, json_encode($currentData, JSON_PRETTY_PRINT));
        
        header('Location: project_6.php?success=1');
        exit;
    } else {
        header('Location: project_6.php?error=1');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_GET['success'])): ?>
    <p style="color:green;">Form submitted successfully!</p>
    <?php elseif (isset($_GET['error'])): ?>
    <p style="color:red;">Please fill in all fields.</p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"
            value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        <?php if (isset($_GET['error']) && empty($_POST['name'])): ?>
        <span style="color:red;">Name is required.</span>
        <?php endif; ?>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"
            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        <?php if (isset($_GET['error']) && empty($_POST['email'])): ?>
        <span style="color:red;">Email is required.</span>
        <?php endif; ?>
        <br>

        <label for="text">Message:</label>
        <textarea name="text"
            id="text"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea>
        <?php if (isset($_GET['error']) && empty($_POST['text'])): ?>
        <span style="color:red;">Message is required.</span>
        <?php endif; ?>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>