<?php

namespace App\Controller;





use App\Entity\Player;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class PlayerController extends AbstractController{

    /**
     * @return |Symfony|Component|HttpFoundation|Response
     */


    public function getPlayers()
    {
        $repo = $this->getDoctrine()->getRepository(Player::class);

        $players = $repo->getPlayerASC();

        return $this->render('player.html.twig',[
            'players' => $players
        ]);
    }


    public function addPlayers(Request $request)
    {
        $player = new Player();

        $form = $this->createFormBuilder($player)
            ->add('team', EntityType::class,[
                'class' => Team::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a team'
            ])
            ->add('name', TextType::class)
            ->add('year', IntegerType::class)
            ->add('nationality', TextType::class)
            ->add('role', ChoiceType::class,[
                'choices' => [
                    'GK' => 'GK',
                    'CB' => 'CB',
                    'LB' => 'LB',
                    'RB' => 'RB',
                    'CM' => 'CM',
                    'LM' => 'LM',
                    'RM' => 'RM',
                    'CF' => 'CF',
                    'LW' => 'LW',
                    'RW' => 'RW'
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Add Player'
            ])

            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $formData = $form -> getData();

            $player->setTeam($formData->getTeam());
            $player->setName($formData->getName());
            $player->setYear($formData->getYear());
            $player->setNationality($formData->getNationality());
            $player->setRole($formData->getRole());

            $em ->persist($player);
            $em ->flush();

            return $this->redirectToRoute('getPlayers');
        }
        return $this->render('addPlayer.html.twig', array('form' => $form->createView(),
            ));
    }

    public function deletePlayer($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('App:Player');

        $playerToDelete = $repo->find($id);
        $em->remove($playerToDelete);
        $em->flush();

        return $this->redirectToRoute('getPlayers');

    }

    public function editPlayer($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $player = $em-> getRepository(Player::class)->find($id);
        $form = $this->createFormBuilder($player)
            ->add('team', EntityType::class,[
                'class' => Team::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a team'
            ])
            ->add('name', TextType::class)
            ->add('year', IntegerType::class)
            ->add('nationality', TextType::class)
            ->add('role', ChoiceType::class,[
                'choices' => [
                    'GK' => 'GK',
                    'CB' => 'CB',
                    'LB' => 'LB',
                    'RB' => 'RB',
                    'CM' => 'CM',
                    'LM' => 'LM',
                    'RM' => 'RM',
                    'CF' => 'CF',
                    'LW' => 'LW',
                    'RW' => 'RW'
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Update'
            ])
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $player = $form -> getData();
            $em -> flush();
            return $this->redirectToRoute('getPlayers');
        }
        return $this->render('editPlayer.html.twig', array('form' => $form->createView(),
        ));
    }







}