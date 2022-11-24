
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.scss">
    <title>Registration users</title>
</head>
<body>


    <a href="usersList.php"><h3>Перейти к списку пользователей</h3></a>


<div class="form_wrapper">
    <form class="creation_form" >

        <label for="">Ваше имя</label>
        <input type="text" name="name">
        <label for="">Ваша фамилия</label>
        <input type="text" name="lastName">
        <label for="">Дата рождения</label>
        <input type="date" name="date">
        <label for="">Место вашего рождения</label>
        <input type="text" name="city">
        <label for="">Укажите ваш пол</label>
        <select name="sex">
            <option>мужчина</option>
            <option>женщина</option>
        </select>
        <button class="regNewUser_btn btn btn-primary" type="submit">Создать пользователя</button>

    </form>
</div>


    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>