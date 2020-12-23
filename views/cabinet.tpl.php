<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php
        if (!empty($pageData['title'])) : ?>
            <?php echo $pageData['title']; ?>
        <?php endif; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <header></header>

    <div id="content">
        <p><?php echo "Кабинет"; ?></p>
    </div>

    <footer>
    </footer>

</body>

</html>