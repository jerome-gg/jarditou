/*
PROCEDURE a l'ajout d'une ligne de commande 
calcul du prix total HT et TTC 
Update en base des prix totaux / décrémentation du stock.
*/

/*
* Pour créer la procédure dans phpMyAdmin il faut retirer le delimiter en bas de page */

DELIMITER $$
CREATE OR REPLACE PROCEDURE maj_prix (IN p_com_id INT)
    BEGIN

        DECLARE nbcommande INT;
        DECLARE qtearticle INT;
        DECLARE idproduit INT;
        DECLARE v_finished INTEGER DEFAULT 0;

        /* declaration d'un cursor qui selectionne tout les prlig_id, lig_quantite , pro_ido_id  des lignes de commande concernant la com_id */
        DECLARE mycursor CURSOR FOR SELECT lig_id, lig_quantite , pro_id FROM `ligne_de_commande` WHERE `com_id` = p_com_id;

        DECLARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;

        OPEN mycursor;
           flag : LOOP
                /* Récupération des infos du select a chaque tour de boucle*/
                FETCH mycursor INTO nbcommande , qtearticle, idproduit;
                
                IF v_finished = 1 THEN 
                LEAVE flag;
                END IF;
                /* Pour chaque tout de boucle j'effectue les différentes requetes*/

                /* Mise a jour du prix total HT de la ligne de commande*/
                UPDATE ligne_de_commande, produits 
                SET ligne_de_commande.lig_total_ht = (round(ligne_de_commande.lig_quantite * produits.pro_prix_ht, 2)) 
                WHERE ligne_de_commande.pro_id = produits.pro_id 
                AND ligne_de_commande.lig_id = nbcommande;

                /* Mise a jour du stock par pro_id en fonction de la ligne de commande*/
                UPDATE produits
                SET pro_stock = (pro_stock - qtearticle)
                where pro_id = idproduit;

            END LOOP;

        CLOSE mycursor;

        /* Mise a jour du prix TTC de la commande*/
        UPDATE commande c 
        set c.com_total_ttc = (select round(sum(lig_total_ht + (lig_total_ht * 0.2)),2) 
        from ligne_de_commande where com_id = p_com_id) 
        where c.com_id = p_com_id;

    END$$

  