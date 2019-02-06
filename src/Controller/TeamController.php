<?php


namespace App\Controller;

use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class TeamController extends AbstractController {

    /**
     * @return |Symfony|Component|HttpFoundation|Response
     */


    public function getTeams()
    {
    $repo = $this->getDoctrine()->getRepository('App:Team');

        $teams = $repo->findAll();

        return $this->render('team.html.twig',[
            'teams' => $teams
        ]);
    }


    public function addTeams(Request $request)
    {
        $team = new Team();

        $form = $this->createFormBuilder($team)
            ->add('name', TextType::class)
            ->add('year', IntegerType::class)
            ->add('stadium', TextType::class)
            ->add('number_of_titles', IntegerType::class)
            ->add('logo', TextType::class)
            ->add('points', IntegerType::class)
            ->add('win', IntegerType::class)
            ->add('loses', IntegerType::class)
            ->add('draws', IntegerType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Add Team'
    ])
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $formData = $form->getData();

            $team->setName($formData->getName());
            $team->setYear($formData->getYear());
            $team->setStadium($formData->getStadium());
            $team->setNumberOfTitles($formData->getNumberOfTitles());
            $team->setLogo($formData->getLogo());
            $team->setPoints($formData->getPoints());
            $team->setWin($formData->getWin());
            $team->setLoses($formData->getLoses());
            $team->setDraws($formData->getDraws());


            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute('getTeams');
        }
        return $this->render('addTeam.html.twig', array('form' => $form->createView(),
            ));
    }



}