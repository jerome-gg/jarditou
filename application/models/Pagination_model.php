<?php

class pagination_model extends CI_Model
{
    
        protected $table = 'produits';

    /**
     * appelle de la méthode parent constructor
     */
        public function __construct(){
            parent::__construct();
        }
    /**
     * retourne la totalité des enregistrements de la table "produits".
     */
        public function get_counter(){
            return $this->db->count_all($this->table);
        }
    /**
     * cette méthode sera utilisée pour récupérer les résultats de pagination 
     * de la table. limit definit le nombre total d'enregistrements à retourner
     * tandis que 'start' définit le nombre d'enregistrements qui sont sautés.
     */
        public function get_prod($limit, $start){
            $this->db->limit($limit, $start);
            $query = $this->db->get($this->table);
            return $query->result();
        }
}

