<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeskController extends AbstractController
{
    /**
     * @Route("/desk", name="app_desk")
     */
    public function index(): Response
    {
        return $this->render('desk/index.html.twig');
    }

    /**
     * @Route("/description", name="app_description")
     */
    public function description(): Response
    {
        return $this->render('desk/description.html.twig');
    }

    /**
     * @Route("/career", name="app_career")
     */
    public function career(): Response
    {
        return $this->render('desk/career.html.twig');
    }

    /**
     * @Route("/competences", name="app_skills")
     */
    public function skills(): Response
    {
        return $this->render('desk/skills.html.twig');
    }

    /**
     * @Route("/projets", name="app_project")
     */
    public function project(): Response
    {
        return $this->render('desk/project.html.twig');
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(): Response
    {
        return $this->render('desk/contact.html.twig');
    }
}
