<?php



    
            // définition des règles sous forme de tableau
            /**
             * array(
             *  nom du champ.
             *  message humain
             *  règle
             *      gestions des erreurs array(
             *          nom de l'erreur => message à retourner
             *      )
             * )
             */
            $config = array(
                
                /*-------------------------------Gestion des erreur et contrôle formulaire produit (ajout)-------------------------------*/
                'Produits/ajout'=> array(
                    array(
                        'field'=> 'pro_ref',
                        'label'=> 'reference',
                        'rules'=> 'required|is_unique[produits.pro_ref]|max_length[10]|regex_match[/^([A-za-z0-9_]+)$/]',
                        'errors'=> array(
                            'max_length' => 'Veuillez entrer une saisie valide.',
                            'required' => 'Veuillez remplir ce champ.',
                            'regex_match' => 'Saisie limité à 10 caractères.',
                            'is_unique' => 'Référence éxistante.',

                        )
                    ),

                    array(
                        'field'=> 'pro_libelle',
                        'label'=> 'libelle',
                        'rules'=> 'required|max_length[200]|regex_match[/^([A-za-z0-9]+)$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 200 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),

                    array(
                        'field'=> 'cat_id',
                        'label'=> 'categorie',
                        'rules'=> 'required|in_list[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'in_list' => 'Veuillez entrer une saisie valide plzzzz.',
                        )
                    ),

                    array(
                        'field'=> 'pro_prix_ht',
                        'label'=> 'prix',
                        'rules'=> 'required|max_length[9]|regex_match[/^([0-9]+)([.]?[0-9]+)?$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 9 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),

                    array(
                        'field'=> 'pro_stock',
                        'label'=> 'stock',
                        'rules'=> 'required|regex_match[/^([0-9]+)$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',

                        )
                    ),

                    array(
                        'field'=> 'pro_couleur',
                        'label'=> 'couleur',
                        'rules'=> 'regex_match[/^[A-Za-z]*$/]',
                        'errors'=> array(
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),

                    array(
                        'field'=> 'pro_description',
                        'label'=> 'description',
                        'rules'=> 'max_length[1000]|regex_match[/^[[\'. A-Za-zéèàç]*$/]',
                        'errors'=> array(
                            'max_length' => 'Saisie limité à 1000 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )

                    )
                ),
                /*-------------------------------Gestion des erreur et contrôle formulaire produit ( modif)-------------------------------*/
                'Produits/modif'=> array(
                    array(
                        'field'=> 'pro_ref',
                        'label'=> 'reference',
                        'rules'=> 'required|max_length[10]|regex_match[/^([A-Za-z0-9\_]+)$/]',
                        'errors'=> array(
                            'max_length' => 'Saisie limité à 10 caractères.',
                            'required' => 'Veuillez remplir ce champ.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                            
                        )
                    ),

                    array(
                        'field'=> 'pro_libelle',
                        'label'=> 'libelle',
                        'rules'=> 'required|max_length[200]|regex_match[/^([A-Za-z0-9\\sàéèê]+)$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 200 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),

                    array(
                        'field'=> 'pro_prix_ht',
                        'label'=> 'prix',
                        'rules'=> 'required|max_length[9]|regex_match[/^([0-9]+)([.]?[0-9]+)?$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 9 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),

                    array(
                        'field'=> 'pro_stock',
                        'label'=> 'stock',
                        'rules'=> 'required|regex_match[/^([0-9]+)$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',

                        )
                    ),

                    array(
                        'field'=> 'pro_couleur',
                        'label'=> 'couleur',
                        'rules'=> 'regex_match[/^[A-Za-z]*$/]',
                        'errors'=> array(
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),

                    array(
                        'field'=> 'pro_description',
                        'label'=> 'description',
                        'rules'=> 'max_length[1000]|regex_match[/^[\',.\\sA-Za-zéèàç]*$/]',
                        'errors'=> array(
                            'max_length' => 'Saisie limité à 1000 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    )
                ),
                /*-------------------------------Gestion des erreur et contrôle formulaire inscription user-------------------------------*/
                'Users/inscription' => array(
                    array(
                        'field'=> 'user_nom',
                        'label'=> 'nom',
                        'rules'=> 'required|max_length[25]|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_prenom',
                        'label'=> 'prenom',
                        'rules'=> 'required|max_length[25]|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_mail',
                        'label'=> 'E-mail',
                        'rules'=> 'required|max_length[50]',//|regex_match[/^[A-Za-z \-\']+$/]
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 50 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_rue',
                        'label'=> 'rue',
                        'rules'=> 'required|max_length[25]',//|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_ville',
                        'label'=> 'ville',
                        'rules'=> 'required|max_length[25]',//|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_cp',
                        'label'=> 'cp',
                        'rules'=> 'required|max_length[25]',//|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',                           
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_pass',
                        'label'=> 'mot de passe',
                        'rules'=> 'required|max_length[100]|regex_match[/^[a-zA-Z0-9]+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 100 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'user_pass2',
                        'label'=> 'vérification du mot de passe',
                        'rules'=> 'required|max_length[100]|regex_match[/^[a-zA-Z0-9]+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 100 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    )
                ),
                /*-------------------------------Gestion des erreur et contrôle formulaire connexion user-------------------------------*/
                'Users/connexion' => array(
                    array(
                        'field'=> 'user_mail',
                        'label'=> 'E-mail',
                        'rules'=> 'required|max_length[50]',//|regex_match[/^[A-Za-z \-\']+$/]
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 50 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=>'user_pass',
                        'label'=>'Mot de passe',
                        'rules'=>'required|max_length[100]|regex_match[/^[a-zA-Z0-9]+$/]',
                        'errors'=>array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 100 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                )
            );