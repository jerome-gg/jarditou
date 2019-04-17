<?php

class Errors extends CI_Model{

    public function chk_errors(){

    
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
                array(
                    'field'=> 'pro_ref',
                    'label'=> 'reference',
                    'rules'=> 'required|max_length[10]|regex_match[/^([A-za-z0-9]+)$/]',
                    'errors'=> array(
                        'max_length' => 'Veuillez entrer une saisie valide.',
                        'required' => 'Veuillez remplir ce champ.',
                        'regex_match' => 'Veuillez entrer une saisie valide.',
                    )
                ),

                array(
                    'field'=> 'pro_libelle',
                    'label'=> 'libelle',
                    'rules'=> 'required|max_length[200]|regex_match[/^([A-za-z0-9]+)$/]',
                    'errors'=> array(
                        'required' => 'Veuillez remplir ce champ.',
                        'max_length' => 'Veuillez entrer une saisie valide.',
                        'regex_match' => 'Veuillez entrer une saisie valide.',
                    )
                ),

                array(
                    'field'=> 'pro_prix',
                    'label'=> 'prix',
                    'rules'=> 'required|max_length[9]|regex_match[/^([0-9]+)([.]?[0-9]+)?$/]',
                    'errors'=> array(
                        'required' => 'Veuillez remplir ce champ.',
                        'max_length' => 'Veuillez entrer une saisie valide.',
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
                        'max_length' => 'Veuillez entrer une saisie valide.',
                        'regex_match' => 'Veuillez entrer une saisie valide.',
                    )
                )

            );
        return $config;
    }
}
?>