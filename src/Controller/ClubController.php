<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ClubController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index()
    {
        $titre = 'Clubs ESPRIT';
        $description = 'Un club est un groupe d"étudiants qui se regroupent autour d"un intérêt commun. Les clubs peuvent offrir une variété de activités, telles que des activités sportives, des activités culturelles, des activités communautaires et des activités académiques. Les clubs sont souvent dirigés par des étudiants et sont soutenus par la faculté pour offrir une expérience enrichissante aux étudiants et renforcer la communauté de l"université. Les clubs permettent aux étudiants de se faire des amis, de développer de nouvelles compétences et de s"impliquer dans la communauté universitaire.';
        $image = 'images/esprit.jpg';

        return $this->render('club/index.html.twig', [
            'titre' => $titre,
            'description' => $description,
            'image' => $image,
        ]);

    }

    /**
 * @Route("/club/get/{nom}", name="ClubName")
 */

    public function getName(string $nom)
{
    return $this->render('club/detail.html.twig', [
        'nom' => $nom
    ]);
}

 /**
     * @Route("/formations", name="formations_list")
     */
    public function list()
    {
        $formations = [
            [
                'ref' => 'form147',
                'Titre' => 'Formation Symfony 4',
                'Description' => 'Formation pratique',
                'date_debut' => '12/06/2020',
                'date_fin' => '19/06/2020',
                'nb_participants' => 19,
            ],
            [
                'ref' => 'form177',
                'Titre' => 'Formation SOA',
                'Description' => 'Formation théorique',
                'date_debut' => '03/12/2020',
                'date_fin' => '10/12/2020',
                'nb_participants' => 0,
            ],
            [
                'ref' => 'form178',
                'Titre' => 'Formation Angular',
                'Description' => 'Formation théorique',
                'date_debut' => '10/06/2020',
                'date_fin' => '14/06/2020',
                'nb_participants' => 12,
            ],
        ];

        return $this->render('club/list.html.twig', [
            'formations' => $formations,
        ]);
    }


/**
     * @Route("/formation/{titre}", name="formation_detail")
     */

    public function detail($titre)
    {
        
        return $this->render('club/detail.html.twig', [
            'nom' => $titre,
        ]);
    }

}
