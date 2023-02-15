<?php

namespace App\Controller;


use App\Form\IdentifierType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function index(Request $request):response
    {
        $form = $this->createForm(IdentifierType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('app_desk');
        }
        return $this->renderForm('base.html.twig', [
            'form' => $form,
        ]);
    }
}
