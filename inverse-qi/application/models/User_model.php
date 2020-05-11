<?php  namespace App\Models;

class User_model extends Model{
	
	protected $table = 'Users';
	protected $allowedFields = ['idUsers', 'Nom', 'Prenom', 'DateN', 'Mail', 'Score', 'MDP'];
	
}