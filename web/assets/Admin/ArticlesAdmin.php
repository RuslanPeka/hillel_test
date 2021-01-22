<h1>Управление статьями</h1>
<br>
<hr>
<br>

<table class="articles_table">
    <tr>
        <th>ID</th>
        <th>Header</th>
        <th>Description</th>
        <th>Contents</th>
        <th>Author</th>
        <th>Create At</th>
        <th>Update At</th>
        <th>&#128465;</th>
    </tr>

    <?php
       foreach($data as $row) :
    ?>

    <tr>
        <td><?= $row['id_article'] ?></td>
        <td><?= $row['header'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['contents'] ?></td>
        <td><?= $row['first_name'] ?> <?= $row['second_name'] ?></td>
        <td><?= $row['create_at_article'] ?></td>
        <td><?= $row['update_at_article'] ?></td>
        <td class="delete"><a href="/admin/articlesAdmin/delete?id_article=<?=$row['id_article']?>" title="Удаление строки">X</a></td>
    </tr>

    <?php endforeach ?>
</table>