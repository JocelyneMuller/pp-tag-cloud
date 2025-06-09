<?php
/**
 * Classe abstraite pour les contrôleurs
 * Fournit une méthode render() partagée
 */
abstract class BaseController {
    public function __construct($action) {
        echo "Je suis dans le contrôleur " . get_class($this) . " action : " . $action;

        switch ($action) {
            case "index":
                $this->index();
                break;
            case "show":
                $this->show();
                break;
            default:
                echo "404";
                break;
        }
    }

    // On déclare les méthodes attendues, mais on ne les définit pas ici
    abstract public function index();
    abstract public function show();
}
