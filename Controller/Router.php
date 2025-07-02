<?php

class Router {
    //Propriétés
    private string $request;

    //Constructeur
    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD']; // Récupère la méthode de la requête HTTP
    }

    // Vérification de la méthode HTTP

    public function handleRequest() {
        switch ($this->request) {
            case 'GET': // En cas de requête GET
                return $this->getRequest();
                break;
            
            case 'POST': // En cas de requête POST
                return 'Requête POST effectuée';
                break;
            
            default: // Pour tout autre cas en dehors de GET et POST
                return 'Requête non autorisée';
                break;
        }
    }

    public function getRequest() {

        $uri = 'Views/pages' . $_SERVER['REQUEST_URI'];
        
        if($_SERVER['REQUEST_URI'] == '/') { // Onviréfie si l'URI est = à '/'
            return $uri .'accueil.html.php'; // Si oui on renvoie a la page accueil
        } else {
            return $this->getPage($_SERVER['REQUEST_URI']); // Sinon on vérifie que le template existe
        }
    }

    public function getPage($uri) {
        $path = 'Views/pages' . $uri. '.html.php';

        if(file_exists($path)) { // Si me template existe
            return $path; // Inclut la page correspondante
        } else {
            http_response_code(404); //Retourne une erreur 404
            return 'Views/pages/404.html.php'; // Inclut la page 404 si le template n'existe pas 
        }
    }
}


//Ne rien ecrire après cette accolade.