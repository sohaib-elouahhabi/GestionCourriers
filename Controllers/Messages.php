<?php
class Messages extends Controller
{

    public function __Construct()
    {
        parent::__Construct('message');
    }

    //charger le model  et afficher  les donnes dans le views
    public function index()
    {
        parent::view("index",message::All());
    }
    
        //charger le model  et afficher  les donnes dans le views en utilisant la methode find que recuperer une seul enregistrement
    public function show($id)
    {
        parent::view("show",message::find($id));
    }

    public function destroy($id)
    {
        $P=message::find($id);
        $P->delete();
        $this->Redirect("../../Messages");
    }

    //ajouter un enregistrement
    public function store($request)
    {
        $P=new message();
        $P->Adresse_exp=$request->Adresse_exp;
        $P->Sujet=$request->Sujet;
        $P->Date_envoi=$request->Date_envoi;
        $P->Contenu=$request->Contenu;
        $P->Etat=$request->Etat;
        $P->save();
        $this->Redirect("../Messages");
    }

    //modifier un enregistrement en utilisant 
    public function edit($id)
    {
        parent::view("form",message::find($id));
    }

    public function update($id,$request)
    {
        $P=message::find($id);
        $P->Adresse_exp=$request->Adresse_exp;
        $P->Sujet=$request->Sujet;
        $P->Date_envoi=$request->Date_envoi;
        $P->Contenu=$request->Contenu;
        $P->Etat=$request->Etat;
        $P->save();
        $this->Redirect("../../Messages");
    }
    //redirection ou formulaire de l'ajoute
    public function create()
    {
        parent::view("form");
    }   
}
?>