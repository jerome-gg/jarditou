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
                        'rules'=> 'required|is_unique[produits.pro_ref]|max_length[10]|regex_match[/^([A-za-z0-9]+)$/]',
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
                        'field'=> 'pro_prix',
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
                'Produits/modif_liste'=> array(
                    array(
                        'field'=> 'pro_ref',
                        'label'=> 'reference',
                        'rules'=> 'required|is_unique[produits.pro_ref]|max_length[10]|regex_match[/^([A-za-z0-9]+)$/]',
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
                        'field'=> 'pro_prix',
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
                /*-------------------------------Gestion des erreur et contrôle formulaire inscription user-------------------------------*/
                'Users/inscription' => array(
                    array(
                        'field'=> 'nom',
                        'label'=> 'nom',
                        'rules'=> 'required|max_length[25]|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'prenom',
                        'label'=> 'prenom',
                        'rules'=> 'required|max_length[25]|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'mail',
                        'label'=> 'E-mail',
                        'rules'=> 'required|max_length[50]',//|regex_match[/^[A-Za-z \-\']+$/]
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 50 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'login',
                        'label'=> 'login',
                        'rules'=> 'required|is_unique[user.user_login]|max_length[25]|regex_match[/^[A-Za-z \-\']+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'is_unique' => 'Ce login est déjà utilisé, veuillez en saisir un nouveau.',
                            'max_length' => 'Saisie limité à 25 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'pass1',
                        'label'=> 'mot de passe',
                        'rules'=> 'required|max_length[100]|regex_match[/^[a-zA-Z0-9]+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 100 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    ),
                    array(
                        'field'=> 'pass2',
                        'label'=> 'vérification du mot de passe',
                        'rules'=> 'required|max_length[100]|regex_match[/^[a-zA-Z0-9]+$/]',
                        'errors'=> array(
                            'required' => 'Veuillez remplir ce champ.',
                            'max_length' => 'Saisie limité à 100 caractères.',
                            'regex_match' => 'Veuillez entrer une saisie valide.',
                        )
                    )
                )
            );