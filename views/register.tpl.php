<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $pageData['title']; ?></title>
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header></header>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!-- Форма регистрации -->
                <h2>Форма регистрации</h2>
                <form name="form-signin" id="form-signin" method="post">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required><br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" required><br>
                    <?php if (!empty($pageData['error'])) : ?>
                        <p><?php echo $pageData['error']; ?></p>
                    <?php endif; ?>
                    <button class="btn btn-success" type="submit">Войти</button>
                </form>
                <br>
                <p>Если вы зарегистрированы, тогда нажмите <a href="/">здесь</a>.</p>
            </div>
        </div>
    </div>

    <footer>

    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html>