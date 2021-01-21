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
        <td><?= $row['id'] ?></td>
        <td><?= $row['header'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['contents'] ?></td>
        <td><?= $row['author'] ?></td>
        <td><?= $row['create_at'] ?></td>
        <td><?= $row['update_at'] ?></td>
        <td class="delete"><a href="/admin/articlesAdmin/delete?id=<?=$row['id']?>" title="Удаление строки">X</a></td>
    </tr>

    <?php endforeach ?>
</table>