<!-- http://php-tutorial.test/add_php_loop_and_conditional_inside_html.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
</head>

<body>
    <?php $names = ['john', 'jane', 'jack', 'alex', 'simon']; ?>

    <h1>Names</h1>

    <ul>
        <?php
        foreach ($names as $name) {
            echo '<li>' . $name . '</li>';
        }
        ; ?>

        <?php foreach ($names as $name) { ?>
        <li><?php if ($name == 'jack') {
                echo 'found';
            } else {
                echo $name;
            }
            ; ?></li>
        <?php }
        ; ?>

        <?php foreach ($names as $name): ?>
        <?php if ($name == 'jane'): ?>
        <li>
            <?php echo $name; ?>
        </li>
        <?php endif ?>
        <?php endforeach;
        ?>
    </ul>
</body>

</html>