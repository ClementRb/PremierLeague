<?php


namespace App\Controller;

use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TeamController extends AbstractController {

    /**
     * @return |Symfony|Component|HttpFoundation|Response
     */


    public function getTeams()
    {
        $repo = $this->getDoctrine()->getRepository('Team');

        $teams = $repo->findAll();

        return $this->render('team.html.twig',[
            'teams' => $teams
        ]);
    }

}