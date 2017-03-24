<?php

class Developpeur extends Personne {
		protected $specialite;

		public function __construct($id, $nom,$prenom,$mail,$telephone,$salaire,$specialite){
			parent::__construct($id, $nom,$prenom,$mail,$telephone,$salaire);
			$this->specialite=$specialite;
		}
		public function afficher(){
			echo $this->id;
			echo $this->nom;
			echo $this->prenom;
			echo $this->mail;
			echo $this->telephone;
			echo $this->salaire;
			echo $this->specialite;
		}
		public function calculerSalaire(){
			$salaire=$salaire*1.08;
		}
	}

	?>