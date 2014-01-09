<h1>Utilisateurs</h1>

<table>
    <tr>
        <th>Utilisateur</th>
        <th>Score</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <?php
                echo $this->Html->link($user['User']['username'],
                    array('controller' => 'users', 'action' => 'view', $user['User']['user_id']));
                ?>
            </td>
            <td><?php
                echo $user['User']['score'];
                ?>
            </td>
        </tr>
    <?php endforeach; print_r($users);?>

    <?php unset($user); ?>

</table>