<?php
class controller 
{
	protected $viewvar = array();
	
	public function set ($v)
	{
		$this->viewvar = array_merge($this->viewvar, $v);
	}
	
	public function controlleur()
	{
		echo "Erreur controlleur";
	}
	
	public function loadModel($model)
	{
		require(MODEL."$model.php");
		$this->$model = new $model();
	}
	
	public function render($view)
	{
		extract($this->viewvar);
		ob_start();
		$objet = str_replace('CTRL','',get_class($this));
		require(VIEW.$objet."/$view.php");
		$content = ob_get_clean();
		require(VIEW."layout/default.php");
	}
	
	public function connexion()
	{
		if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['password']))
		{
			// require_once 'kernel/lib/connexion.php';
			$req = $pdo->prepare('SELECT * FROM GF_utilisateur WHERE (username = :login)');
			$req->execute(['login' => $_POST['login']]);
			$user = $req->fetch();
			if($user == null)
			{
				$_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
			}
			elseif(password_verify($_POST['password'], $user->password))
			{
				$_SESSION['login'] = $user;
				$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
				header('Location: '.WEBROOT.'main');
				exit();
			}
			else
			{
				$_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
			}
		}
	}
}
?>