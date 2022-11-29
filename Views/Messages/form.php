<center>
    <h1>Formulaire</h1>
    <?=$data!=null?$id=$data->id:''?>
    <form action="<?=$data==null?"store":"../update/$id"?>" method="post">
    <table>
        <tr>
            <td><label for="adresse_exp">Adresse_exp :</label></td>
            <td><input type="text"  name="Adresse_exp"  value="<?=$data!=null?$data->Adresse_exp:''?>"></td>
        </tr>
        <tr>
            <td><label for="sujet">Sujet :</label></td>
            <td><input type="text"  name="Sujet" value="<?=$data!=null?$data->Sujet :''?>"></td>
        </tr>
        <tr>
            <td><label for="date_envoi">Date_envoi :</label></td>
            <td><input type="text"  name="Date_envoi" value="<?=$data!=null?$data->Date_envoi :''?>"></td>
        </tr>
        <tr>
            <td><label for="contenu">Contenu :</label></td>
            <td><input type="text"  name="Contenu" value="<?=$data!=null?$data->Contenu :''?>"></td>
        </tr>
        <tr>
            <td><label for="etat">Etat :</label></td>
            <td><input type="text"  name="Etat" value="<?=$data!=null?$data->Etat :''?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="envoyer"></td>
            <td><input type="reset" value="Anuler"></td>
        </tr>
    </table>
    </form>
</center>