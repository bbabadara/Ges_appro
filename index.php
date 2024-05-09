<?php 
require_once("models/Produit.php");
require_once("models/Fournisseur.php");
require_once("models/Unite.php");
require_once("models/Categorie.php");
$fournisseur = new Fournisseur();
$fournisseurs = $fournisseur->findAll();
$produit=new Produit();
$produits=$produit->findAll();
$unite=new Unite();
$unites=$unite->findAll();
$categorie=new Categorie();
$categories=$categorie->findAll();

// require_once("views/approvisionnement/add.html.php");
require_once("views/fournisseur/liste.html.php");
?>
