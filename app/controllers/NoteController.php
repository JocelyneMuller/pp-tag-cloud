<?php

require_once 'BaseController.php';
/**
 * Contrôleur Note : affiche les notes
 */

class NoteController extends BaseController
{
    public function index()
    {
        echo "Liste de toutes les notes";
    }

    public function show()
    {
        echo "uneNote";
    }
}
