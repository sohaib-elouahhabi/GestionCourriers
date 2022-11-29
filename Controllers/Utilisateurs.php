<?php
class Utilisateurs extends Controller
{

    public function __Construct()
    {
        parent::__Construct('user_m');
    }
    public function index()
    {
        parent::view("index",user_m::All());
    }
    public function show($id)
    {
        parent::view("show",user_m::find($id));
    }
    public function destroy($id)
    {
        $P=user_m::find($id);
        $P->delete();
        $this->Redirect("../../Utilisateurs");
    }
    
    public function store($request)
    {
        $P=new user_m();
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->Adresse=$request->Adresse;
        $P->mot_de_pass=$request->mot_de_pass;
        $P->numero_tel=$request->numero_tel;
        $P->save();
        $this->Redirect("../Utilisateurs");
    }
    public function edit($id)
    {
        parent::view("form",user_m::find($id));
    }
    public function update($id,$request)
    {
        $P=user_m::find($id);
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->Adresse=$request->Adresse;
        $P->mot_de_pass=$request->mot_de_pass;
        $P->numero_tel=$request->numero_tel;
        $P->save();
        $this->Redirect("../../Utilisateurs");
    }
    public function create()
    {
        parent::view("form");
    }   
}
?>