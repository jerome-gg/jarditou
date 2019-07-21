// filtre expression régulières
var generique = new RegExp("^([A-Za-z0-9\\sàéèê\_]+)$");// reference, libelle, rue, ville,pass
var int = new RegExp("^([0-9]+)$");// int,stock
var filtrecp = new RegExp("^[0-9]+$"); // cp
var filtreMail = new RegExp("^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$");// mail valide 
var filtreDescription = new RegExp("^[\'.\\sA-Za-zéèàç,]*$");// 0 ou plusieurs caractères ,description
var filtreCouleur = new RegExp("^[A-Za-z]*$");// 0 ou plusieurs caractères, couleur
var filtrePrix = new RegExp("^([0-9]+)([.]?[0-9]+)?$"); // champ prix
var filtreNomPrenom = new RegExp("^([A-Za-z\\sàéèê]+)$");// nom, prenom
