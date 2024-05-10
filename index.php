<?php 
require_once("models/Produit.php");
require_once("models/Fournisseur.php");
require_once("models/Unite.php");
require_once("models/Categorie.php");
require_once("models/Type.php");
require_once("models/Approvisionement.php");
$fournisseur = new Fournisseur();
$fournisseurs = $fournisseur->findAll();
$produit=new Produit();
$produits=$produit->findAll();
$unite=new Unite();
$unites=$unite->findAll();
$categorie=new Categorie();
$categories=$categorie->findAll();
$type=new Type();
$types=$type->findAll();
$approvisionnement=new Approvisionnement();
$approvisionnements=$approvisionnement->findAll();


// require_once("views/approvisionnement/add.html.php");
// require_once("views/approvisionnement/liste.html.php");
require_once("views/fournisseur/liste.html.php");
// require_once("views/categorie/liste.html.php");
//  require_once("views/produit/liste.html.php");
// require_once("views/type/liste.html.php");
// require_once("views/unite/liste.html.php");

