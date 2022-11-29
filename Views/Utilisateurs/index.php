<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
</head>
<body>
<center>
<h1 text-align="center" ></h1>
        <table align=center border="2">
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>ADRESSE</th>
                <th>MOTE DE PASS</th>
                <th>TELE</th>
                <th colspan="3"><a href="Utilisateurs/create">Ajouter</a></th>
            </tr>
            <?php
            foreach($data as $E)
            {?>
            <tr>
                <td><?=$E->id?></td>
                <td><?=$E->nom ?></td>
                <td><?=$E->prenom ?></td>
                <td><?=$E->Adresse ?></td>
                <td><?=$E->mot_de_pass ?></td>
                <td><?=$E->numero_tel ?></td>
                <td><a href="Utilisateurs/destroy/<?=$E->id ?>">delete</a></td>
                <td><a href="Utilisateurs/edit/<?=$E->id ?>">edit</a></td>
                <td><a href="Utilisateurs/show/<?=$E->id ?>">show</a></td>
            </tr>

            <?php
            }
            ?>
        </table>
</center>
</body>
</html>

