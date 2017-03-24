<?php

class Manager extends Personne {
		protected $service;

		public function __construct($id, $nom,$prenom,$mail,$telephone,$salaire,$service){
			parent::__construct($id, $nom,$prenom,$mail,$telephone,$salaire);
			$this->service=$service;
		}
		public function afficher(){
			echo $this->id;
			echo $this->nom;
			echo $this->prenom;
			echo $this->mail;
			echo $this->telephone;
			echo $this->salaire;
			echo $this->service;
		}
		public function calculerSalaire(){
			$salaire=$salaire*1.11;
		}
	}

	?>