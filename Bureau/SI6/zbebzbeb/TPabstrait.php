<?php
	abstract class Personne{		
		protected $id;
		protected $nom;
		protected $prenom;
		protected $mail;
		protected $telephone;
		protected $salaire;
	
		public function __get($prop){
			return $this->prop;
		}

		abstract public function calculerSalaire();

		abstract public function afficher();
	}

?>