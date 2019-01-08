<?php
/**
 * Created by PhpStorm.
 * User: clement
 * Date: 05/12/18
 * Time: 12:12
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @return |Symfony|Component|HttpFoundation|Response
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
}