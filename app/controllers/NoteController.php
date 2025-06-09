<?php

require_once 'BaseController.php';
/**
 * Contrôleur Note : affiche les notes
 */

class NoteController extends BaseController
{
    /**
     * Affiche la liste de toutes les notes
     *
     * @return void
     */
    public function index() : void
    {
        echo "Liste de toutes les notes";
    }
    /**
     * Affiche une note
     *
     * @return void
     */
    public function show() : void
    {
        echo "uneNote";
    }
}
