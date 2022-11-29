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
                <th>ADRESSE_EXP</th>
                <th>SUJET</th>
                <th>DATE_ENVOI</th>
                <th>CONTENU</th>
                <th>ETAT</th>
                <th colspan="3"><a href="Messages/create">Ajouter</a></th>
            </tr>
            <?php
            foreach($data as $E)
            {?>
            <tr>
                <td><?=$E->id?></td>
                <td><?=$E->Adresse_exp ?></td>
                <td><?=$E->Sujet ?></td>
                <td><?=$E->Date_envoi ?></td>
                <td><?=$E->Contenu ?></td>
                <td><?=$E->Etat ?></td>
                <td><a href="Messages/destroy/<?=$E->id ?>">delete</a></td>
                <td><a href="Messages/edit/<?=$E->id ?>">edit</a></td>
                <td><a href="Messages/show/<?=$E->id ?>">show</a></td>
            </tr>

            <?php
            }
            ?>
        </table>
</center>
</body>
</html>

