<?php
session_start(); ?>
<table class="table table-bordered">
    <thead>
		<tr>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Email</th>
			<th>School</th>
			<th>Ville</th>
			<th>Adresse</th>
			<th>Admin</th>
			<th>Supprimer</th>
		</tr>
    </thead>
    <tbody>
    <?php foreach($users as $user){ ?>

        <tr>
            <td><?php echo $user['firstName']?></td>
            <td><?php echo $user['lastName']?></td>
            <td><?php echo $user['email']?></td>
            <td><?php echo $user['school']?></td>
            <td><?php echo $user['city']?></td>
            <td><?php echo $user['address']?></td>
            <td><?php echo $user['admin']?></td>
            <td>
                <a class="btn btn-danger" href='index.php?ctrl=user&action=deleteUser&userId=<?php echo $user['id']?>' type='button'>Supprimer</a>
            </td>
        </tr>


    <?php }?>
    </tbody>
</table>