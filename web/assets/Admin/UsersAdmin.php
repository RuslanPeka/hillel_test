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
    </tr>

    <?php endforeach ?>
</table>