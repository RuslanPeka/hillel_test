<h1>Управление пользователями</h1>
<br>
<hr>
<br>
<table class="users_table">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>E-mail</th>
        <th>User Role</th>
        <th>Create At</th>
        <th>Update At</th>
        <th>&#128465;</th>
    </tr>

    <?php
        foreach($data as $row) :
    ?>

    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['second_name'] ?></td>
        <td><?= $row['e_mail'] ?></td>
        <td><?= $row['id_user_permission'] ?></td>
        <td><?= $row['create_at'] ?></td>
        <td><?= $row['update_at'] ?></td>
        <td class="delete"><a href="/admin/usersAdmin/delete?id=<?=$row['id']?>" title="Удаление строки">X</a></td>
    </tr>

    <?php endforeach ?>
</table>

<br>

<div class="user_reg_div">
    <fieldset>
        <legend>Форма регистрации пользователя</legend>
        <form action="/admin/usersAdmin/insert" method="post" class="user_reg_form">
            <table class="user_reg_table">
                <tr>
                        <td><label for="id_first_name">Имя:</label></td>
                        <td><input type="text" name="first_name" id="id_first_name" placeholder="Дарт" required></td>
                </tr>
                <tr>
                    <td><label for="id_second_name">Фамилия:</label></td>
                    <td><input type="text" name="second_name" id="id_second_name" placeholder="Вейдер"></td>
                </tr>
                <tr>
                    <td><label for="id_e_mail">Почтовый ящик:</label></td>
                    <td><input type="email" name="e_mail" id="id_e_mail" placeholder="example@ukr.net"></td>
                </tr>
                <tr>
                    <td><label for="id_pass">Пароль:</label></td>
                    <td><input type="text" name="pass" id="id_pass" placeholder="*************" required></td>
                </tr>
                <tr>
                    <td><label for="id_user_permission">Категория:</label></td>
                    <td>
                        <select name="id_user_permission">
                            <option value="1">Посетитель</option>
                            <option value="2">Администратор</option>
                            <option value="3">Менедржер</option>
                            <option value="4">Разработчик</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit">Зарегистрировать</button>
        </form>
    </fieldset>
</div>