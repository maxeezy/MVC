<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="application/styles/st.css">
</head>
<body style="margin: 0;
    box-sizing: border-box;">
<form action="http://mvc/account/registration" method="POST">
    <div class="wrap" style="height: 100vh;display: flex;flex-direction: column;align-items: center;justify-content: center;background-color: #262626;">
        <input type="text" name="login" placeholder="Введите логин" style="margin-top: 10px;margin-bottom: 10px;min-width: 300px;padding: 15px 20px;border: none;border-radius: 4px;background-color:#1a1a1a;color: #737373;outline: none;">
        <input type="text" name="mail" placeholder="Введите mail " style="margin-top: 10px;margin-bottom: 10px;min-width: 300px;padding: 15px 20px;border: none;border-radius: 4px;background-color:#1a1a1a;color: #737373;outline: none;">
        <input type="password" name="password" placeholder="Введите пароль" style="margin-top: 10px;margin-bottom: 10px;min-width: 300px;padding: 15px 20px;border: none;border-radius: 4px;background-color:#1a1a1a;color: #737373;outline: none;">
        <input type="submit" name="butt" class="button" style="margin-top: 10px;margin-bottom: 10px;min-width: 300px;padding: 15px 20px;border: none;border-radius: 4px;background-color:#1a1a1a;color: #737373;outline: none;background-color: #ffbb33;color: white;">
        <div class="field" style="display: flex;flex-direction: column;align-items: center;justify-content: center;background-color: #262626;">
            <?php foreach ($data as $value) {
                print "<div style='color: #ffbb33'>$value</div>";
            } ?></div>

    </div>
</form>

</body>
</html>
