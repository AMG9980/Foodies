<?php


//on charge le fichier mère du controlleur
require "app/controllers/controller.php";

//classe HomeController instanciée de la classe Controlleur
class HomeRoleController extends Controller {

    //initialisation de la classe
	public function __construct() {
		parent::__construct();
	}

    //on affiche la page home avec une variable title définie
	public function indexRole() {
		$this->view->render("homeRole"]);
	}
}
?>
