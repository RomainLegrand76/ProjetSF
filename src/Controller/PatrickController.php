<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 14/05/2018
 * Time: 10:37
 */
//src/Controller/PatrickController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PatrickController
{
    public function display()
    {
        $html = "<html><body><h1>Coucou Patrick</h1></body></html>";
        return new Response($html);
    }
}