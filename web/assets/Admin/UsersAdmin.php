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
        <th>&#10062;</th>
    </tr>

    <?php
        foreach($data[0] as $row) :
    ?>

    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['second_name'] ?></td>
        <td><?= $row['e_mail'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['create_at'] ?></td>
        <td><?= $row['update_at'] ?></td>
        <td class="delete"><a href="/admin/usersAdmin/delete?id=<?=$row['id']?>" title="Удаление строки">X</a></td>
        <td class="update"><a href="/admin/usersAdmin/update?id=<?=$row['id']?>" title="Обновление строки строки">U</a></td>
    </tr>

    <?php endforeach ?>
</table>

<br>

<?php
    $action = '';
    if(mb_strstr($_SERVER['REQUEST_URI'], 'update') && isset($_GET['id'])) {
        $action = 'update';
        $values = [];
        foreach($data[1] as $val) {
            foreach($val as $k => $v) {
                $values[$k] = $v;
            }
        }
    } else {
        $action = 'insert';
    }
?>

<div class="user_reg_div">
    <fieldset>
        <legend>Форма регистрации пользователя</legend>
        <form action="/admin/usersAdmin/<?=$action?>" method="post" class="user_reg_form">
        <input type="hidden" name="id" id="id_user" value="<?= $values['id'] ?>">
            <table class="user_reg_table">
                <tr>
                        <td><label for="id_first_name">Имя:</label></td>
                        <td><input type="text" name="first_name" id="id_first_name" placeholder="Дарт" value="<?= $values['first_name'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="id_second_name">Фамилия:</label></td>
                    <td><input type="text" name="second_name" id="id_second_name" placeholder="Вейдер" value="<?= $values['second_name'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="id_e_mail">Почтовый ящик:</label></td>
                    <td><input type="email" name="e_mail" id="id_e_mail" placeholder="example@ukr.net" value="<?= $values['e_mail'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="id_pass">Пароль:</label></td>
                    <td><input type="text" name="pass" id="id_pass" placeholder="*************" value="<?= $values['pass'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="id_user_permission">Категория:</label></td>
                    <td>
                        <select name="id_user_permission">
                            <option value="1" <?php if($values['id_user_permission'] == 1) echo 'selected'; ?>>Посетитель</option>
                            <option value="2" <?php if($values['id_user_permission'] == 2) echo 'selected'; ?>>Администратор</option>
                            <option value="3" <?php if($values['id_user_permission'] == 3) echo 'selected'; ?>>Менедржер</option>
                            <option value="4" <?php if($values['id_user_permission'] == 4) echo 'selected'; ?>>Разработчик</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit">
                <?php
                    if(mb_strstr($_SERVER['REQUEST_URI'], 'update')) echo 'Обновить';
                    else echo 'Зарегистрировать';
                ?>
            </button>
        </form>
    </fieldset>
</div>