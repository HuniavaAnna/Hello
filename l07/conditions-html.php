<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if (random_int(1, 100) % 2 === 0) : ?>
        <h1>Hell Anna</h1>
    <?php else: ?>
        <h1>Hell Guest</h1>
    <?php endif ?>
</body>
</html>
