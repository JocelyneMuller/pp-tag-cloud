<?php

require_once 'BaseController.php';
/**
 * Contrôleur pour les tags
 */
class TagController extends BaseController
{
/**
 * Affiche la liste des tags
 * 
 * @return void
 */
    public function index() :void
    {
        echo "Liste de tous les tags ";
    }

    /**
     * Affiche un tag
     * 
     * @return void
     */
    public function show() : void
    {
        echo "Untag";
    }
}
