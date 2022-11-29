<center>
    <h1>Formulaire</h1>
    <?=$data!=null?$id=$data->id:''?>
    <form action="<?=$data==null?"store":"../update/$id"?>" method="post">
    <table>
        <tr>
            <td><label for="nom">NOM :</label></td>
            <td><input type="text"  name="nom"  value="<?=$data!=null?$data->nom:''?>"></td>
        </tr>
        <tr>
            <td><label for="sujet">PRENOM :</label></td>
            <td><input type="text"  name="prenom" value="<?=$data!=null?$data->prenom :''?>"></td>
        </tr>
        <tr>
            <td><label for="Adresse">ADRESSE :</label></td>
            <td><input type="text"  name="Adresse" value="<?=$data!=null?$data->Adresse :''?>"></td>
        </tr>
        <tr>
            <td><label for="mot_de_pass">MOT DE PASS :</label></td>
            <td><input type="text"  name="mot_de_pass" value="<?=$data!=null?$data->mot_de_pass :''?>"></td>
        </tr>
        <tr>
            <td><label for="numero_tel">TEL :</label></td>
            <td><input type="text"  name="numero_tel" value="<?=$data!=null?$data->numero_tel :''?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="envoyer"></td>
            <td><input type="reset" value="Anuler"></td>
        </tr>
    </table>
    </form>
</center>