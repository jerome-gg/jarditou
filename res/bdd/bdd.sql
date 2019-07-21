#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        user_id          Int (11)  Auto_increment  NOT NULL ,
        user_nom         Varchar (255) NOT NULL ,
        user_prenom      Varchar (255) NOT NULL ,
        user_mail        Varchar (255) NOT NULL ,
        user_pass        Varchar (255) NOT NULL ,
        user_date_ins    Date NOT NULL ,
        user_date_der_co Date ,
        user_droit       Varchar (255) DEFAULT 'utilisateur',
        user_rue         Varchar (255) NOT NULL ,
        user_ville       Varchar (255) NOT NULL ,
        user_cp          Varchar (255) NOT NULL,
	    CONSTRAINT users_PK PRIMARY KEY (user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        com_id        Int (11) Auto_increment  NOT NULL ,
        com_date      Datetime NOT NULL ,
        com_total_ttc Decimal (6,2) NOT NULL ,
        com_status    Varchar (255) ,
        user_id       Int (11) NOT NULL,
	   CONSTRAINT commande_PK PRIMARY KEY (com_id),
	   CONSTRAINT commande_users_FK FOREIGN KEY (user_id) REFERENCES users(user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        cat_id     Int (11) Auto_increment  NOT NULL ,
        cat_nom    Varchar (255) NOT NULL ,
        cat_parent Int (11) NOT NULL,
	   CONSTRAINT categorie_PK PRIMARY KEY (cat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produits
#------------------------------------------------------------

CREATE TABLE produits(
        pro_id          Int (11) Auto_increment  NOT NULL ,
        pro_ref         Varchar (255) NOT NULL ,
        pro_libelle     Varchar (255) NOT NULL ,
        pro_description Varchar (3000) ,
        pro_prix_ht     varchar (255) NOT NULL ,
        pro_stock       Int NOT NULL ,
        pro_couleur     Varchar (255) ,
        pro_photo       Varchar (255) ,
        pro_d_ajout     Date NOT NULL ,
        pro_d_modif     Date ,
        pro_bloque      Int (1) NOT NULL ,
        cat_id          Int (11) NOT NULL,
	    CONSTRAINT produits_PK PRIMARY KEY (pro_id),
	    CONSTRAINT produits_categorie_FK FOREIGN KEY (cat_id) REFERENCES categories(cat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ligne_de_commande
#------------------------------------------------------------

CREATE TABLE ligne_de_commande(
        lig_id       Int  Auto_increment  NOT NULL ,
        lig_quantite Int (11) NOT NULL ,
        lig_total_ht Decimal (6,2) ,
        com_id       Int (11) NOT NULL ,
        pro_id       Int (11) NOT NULL,
	    CONSTRAINT ligne_de_commande_PK PRIMARY KEY (lig_id),
	    CONSTRAINT ligne_de_commande_commande_FK FOREIGN KEY (com_id) REFERENCES commande(com_id),
	    CONSTRAINT ligne_de_commande_produits0_FK FOREIGN KEY (pro_id) REFERENCES produits(pro_id)
)ENGINE=InnoDB;

INSERT INTO `categories` (`cat_id`, `cat_nom`, `cat_parent`) VALUES
(1, 'Outillage', 0),
(2, 'Outillage manuel', 1),
(3, 'Outillage mécanique', 2),
(4, 'Plants et semis', 0),
(5, 'Arbres et arbustes', 0),
(6, 'Pots et accessoires', 0),
(7, 'Mobilier de jardin', 0),
(8, 'Matériaux', 0),
(9, 'Tondeuses éléctriques', 3),
(10, 'Tondeuses à moteur thermique', 3),
(11, 'Débroussailleuses', 3),
(12, 'Sécateurs', 2),
(13, 'Brouettes', 2),
(14, 'Tomates', 4),
(15, 'Poireaux', 4),
(16, 'Salade', 4),
(17, 'Haricots', 4),
(18, 'Thuyas', 5),
(19, 'Oliviers', 5),
(20, 'Pommiers', 5),
(21, 'Pots de fleurs', 6),
(22, 'Soucoupes', 6),
(23, 'Supports', 6),
(24, 'Transats', 7),
(25, 'Parasols', 7),
(26, 'Tonnelles', 7),
(27, 'Barbecues', 7),
(28, 'Lames de terrasse', 8),
(29, 'Grillages', 8),
(30, 'Panneaux de clôture', 8);

INSERT INTO `produits` (`pro_id`, `cat_id`, `pro_ref`, `pro_libelle`, `pro_description`, `pro_prix_ht`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_d_modif`, `pro_bloque`) VALUES
(7, 27, 'barb001', 'Aramis ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor sit amet ipsum sit amet dapibus. Cras suscipit neque ac magna sagittis lobortis. Duis venenatis enim ac nisl luctus, a scelerisque velit porttitor. Integer nec massa quis urna mollis consectetur et et nisl. Nullam eget nunc vitae nisl convallis faucibus. Vestibulum dapibus, metus nec molestie lobortis, nunc sem mollis tortor, et auctor dolor nunc at nisi. Pellentesque sit amet turpis nisi. ', '110.00', 2, 'Brun', 'jpg', '2018-04-18', NULL, 0),
(8, 27, 'barb002', 'Athos', 'Curabitur pellentesque posuere luctus. Sed et risus vel quam pharetra pretium non quis odio. Praesent varius risus vel orci ultrices tincidunt.', '249.99', 0, 'Noir', 'jpg', '2016-06-14', NULL, 0),
(11, 27, 'barb003', 'Clatronic', 'Fusce rutrum odio sem, quis finibus nisl finibus a. Praesent dictum ex in lectus porta, vitae varius lacus eleifend. Sed sed lacinia mi, sed egestas odio. Integer a congue lectus.', '135.90', 10, 'Chrome', 'jpg', '2017-10-18', NULL, 0),
(12, 27, 'barb004', 'Camping', 'Phasellus auctor mattis justo, in semper urna congue eget. Nunc sit amet nunc sed dui fringilla scelerisque a eget sem. Aenean cursus eros vehicula arcu blandit, sit amet faucibus leo finibus. Duis pharetra felis eget viverra tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', '88.00', 5, 'Noir', 'jpg', '2018-08-20', NULL, 0),
(13, 13, 'brou001', 'Green', 'Fusce interdum ex justo, vel imperdiet erat volutpat non. Donec et maximus lacus. ', '49.00', 25, 'Verte', 'jpg', '2018-08-01', NULL, 0),
(14, 13, 'brou002', 'Silver', 'Pellentesque ultrices vestibulum sagittis.', '88.00', 0, 'Argent', 'jpg', '2018-08-09', NULL, 0),
(15, 13, 'brou003', 'Yellow', 'Sed lobortis pulvinar orci, ut efficitur urna egestas eu.', '54.49', 3, 'Jaune', 'jpg', '2018-08-12', NULL, 0),
(16, 2, 'GA410', 'Bêche GA 410', 'Nulla at consequat orci.', '19.90', 50, 'Gris', 'png', '2018-08-13', NULL, 0),
(17, 2, 'beche002', 'Bêche GA 388', 'Curabitur varius interdum nulla, sit amet consequat massa. Vestibulum rutrum leo lectus. Phasellus sit amet viverra velit.', '24.90', 1, 'Argent', 'png', '2018-03-15', NULL, 0),
(18, 2, 'scm0555', 'Scie à main ', 'Pellentesque fermentum ut est sagittis feugiat. Morbi in turpis augue. Maecenas dapibus ligula velit, ac gravida risus imperdiet in.', '31.19', 0, 'Bleue', 'png', '2018-08-19', NULL, 0),
(19, 2, 'scm559', 'Scie couteau', 'raesent ante felis, iaculis vitae lectus sed, luctus laoreet metus. Aenean mattis egestas eleifend. Morbi dictum erat ut lorem porta, a volutpat nibh ultrices. Nunc ut tortor ac velit fringilla dictum at non nulla.', '14.90', 4, 'Bleu', 'png', '2018-04-13', NULL, 0),
(20, 2, 'h0662', 'Hache H062', 'Cras nec dapibus erat. Cras bibendum auctor dui quis tristique.', '31.19', 0, 'Noir', 'png', '2018-08-12', NULL, 0),
(21, 11, 'DB0703', 'Titan', 'Etiam eu sem ligula. Donec aliquet velit a condimentum sagittis. Nullam ipsum augue, porta non vestibulum cursus, eleifend tempor erat. Proin et turpis molestie augue mollis laoreet. Nulla lorem tellus, pellentesque nec hendrerit vehicula, consectetur non nisl. Maecenas eget accumsan lectus. Vivamus eleifend lorem scelerisque augue rutrum laoreet. ', '599.99', 4, 'Bleue', 'png', '1999-08-26', NULL, 0),
(22, 11, 'DB0755', 'Attila', "Là où passe Attila, l'herbe ne repousse pas.", '499.99', 0, 'Bleue', 'png', '2018-05-16', NULL, 0),
(23, 28, 'LAM121', 'Aquitaine', 'Integer aliquet accumsan eleifend. Pellentesque mauris tortor, ultricies a pulvinar ut, fringilla ac mi. Sed consequat, nibh at tempus porttitor, tellus nunc dictum nulla, sed finibus felis augue sed libero. Donec augue mi, mattis et orci ac, mollis feugiat elit.', '12.00', 0, 'Rouge', 'jpg', '2018-03-17', NULL, 0),
(24, 28, 'LAM233', 'Brown', 'Morbi porta ultricies nibh vel varius. Vestibulum nec rutrum ex, vel posuere nisi. Ut scelerisque sit amet ligula sed imperdiet. Morbi lacinia sapien in elementum iaculis. Vivamus a ultrices enim. ', '9.98', 500, 'Brun', 'jpg', '2018-03-17', NULL, 0),
(25, 25, 'PRS-01C', 'Biarritz', 'Quisque fermentum, dui eu elementum sagittis, risus lorem placerat ipsum, vitae venenatis tellus sapien id nibh. Suspendisse et aliquet tellus, in suscipit magna.', '157.00', 5, 'Brun', 'jpg', '2018-08-19', NULL, 0),
(26, 25, 'PRS-38A', 'Cannes', 'Curabitur sodales sem vitae ex commodo, in ullamcorper quam congue. Aliquam erat volutpat. Praesent mollis at velit eu molestie. Proin ac tellus a enim venenatis ultrices vitae sed libero. Vivamus at vulputate orci. Curabitur mattis ac turpis id tempus. Sed turpis enim, egestas ac arcu et, elementum luctus ante.', '299.40', 4, 'rOSE', 'jpg', '2018-08-12', NULL, 0),
(27, 25, 'PRS-87F', 'Crotoy', 'Morbi porta ultricies nibh vel varius. Vestibulum nec rutrum ex, vel posuere nisi. Ut scelerisque sit amet ligula sed imperdiet. Morbi lacinia sapien in elementum iaculis.', '89.00', 21, 'Rouge', 'jpg', '2018-04-12', '2018-08-21 00:00:00', 0),
(28, 21, 'POT_001', 'Agave', '. Vivamus a ultrices enim. Etiam at viverra justo. Cras consectetur justo euismod mi maximus, ac tincidunt leo suscipit. Quisque fermentum, dui eu elementum sagittis, risus lorem placerat ipsum, vitae venenatis tellus sapien id nibh.', '288.32', 11, 'Orange', 'jpg', '2017-11-12', NULL, 0),
(29, 21, 'POT-002', 'Dark', 'Curabitur sodales sem vitae ex commodo, in ullamcorper quam congue. Aliquam erat volutpat. Praesent mollis at velit eu molestie.', '32.50', 45, 'Noir', 'jpg', '2018-08-19', NULL, 0),
(30, 21, 'POT_003', 'Fuschia', 'Vel porta orci convallis. Duis sodales vehicula porta. Etiam sit amet scelerisque massa. ', '149.97', 0, 'Rose', 'jpg', '2018-03-04', NULL, 0),
(31, 6, 'POT-381', 'Iris', 'Praesent nunc dui, porta at leo eget, iaculis ultrices quam. Mauris vulputate metus in nisl aliquam, et sollicitudin nisl mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', '245.00', 10, 'Marron', 'jpg', '2017-04-16', NULL, 0),
(32, 2, 'SEC-A', 'Bahco', 'In hac habitasse platea dictumst. Quisque at sagittis nunc.', '9.90', 280, 'Orange', 'jpg', '2018-08-14', NULL, 0),
(33, 2, 'SEC-B', 'Red', 'Phasellus ac gravida lorem. Aliquam sed aliquam nisl. Etiam non ornare sapien. Aenean ut tellus non risus varius bibendum quis vel ligula.', '14.99', 16, 'Rouge', 'jpg', '2018-08-05', NULL, 0),
(34, 10, 'ENH0335', 'Einhell', 'Suspendisse congue nibh sed dui commodo sollicitudin. Vestibulum augue eros, accumsan vel vulputate ut, gravida id libero. Nullam sodales urna id nulla porta vestibulum. Aliquam lectus lacus, tincidunt nec metus.', '335.00', 1, 'Rouge', 'jpg', '2018-05-17', NULL, 0),
(35, 10, 'GRIZ_001', 'Grizzly', 'luctus aliquet enim. Phasellus quis velit quis tellus pharetra aliquam in at urna. Cras vitae turpis erat. Phasellus libero arcu, fringilla sit amet tempus blandit, congue eu nulla. Morbi id efficitur tellus.', '990.00', 1, 'Chrome', 'jpg', '2018-08-05', NULL, 0),
(36, 9, 'HERO', 'Hero', NULL, '75.00', 7, 'Vert', 'jpg', '2018-08-13', NULL, 0),
(37, 9, 'SL1280', 'SL 1280', 'Quisque nec nisi risus. Fusce eu est non velit mollis tristique a et magna. Proin sodales.', '120.50', 5, 'Vert', 'jpg', '2018-08-05', '2018-08-22 00:00:00', 0),
(38, 10, '6cv', 'Red 6CV ', 'uis vehicula risus in nibh lobortis euismod. In hac habitasse platea dictumst. Quisque at sagittis nunc. Phasellus ac gravida lorem. Aliquam sed aliquam nisl. Etiam non ornare sapien.', '348.00', 2, 'Rouge', 'jpg', '2018-08-16', '2018-08-21 00:00:00', 0),
(39, 10, 'TRIKE', 'Trike', 'Aenean ut tellus non risus varius bibendum quis vel ligula. ', '497.00', 1, 'Rouge', 'jpg', '2018-08-21', '2018-08-21 10:05:51', 0),
(40, 9, 'WAZAA', 'Wazaa', NULL, '68.00', 14, 'Vert', 'jpg', '2018-04-27', NULL, 0),
(41, 9, 'ZOOM', 'Zoom', 'Nunc magna erat, ultrices et facilisis non, viverra in turpis. Nulla orci mi, maximus eu facilisis a, pretium sit amet ex.', '49.80', 223, 'Gris', 'jpg', '2018-08-13', NULL, 0);
