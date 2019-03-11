<?php
namespace App\Controller;

use App\Entity\Text;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Text $text */
        $text = $this->getDoctrine()
            ->getRepository(Text::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            'text' => $text[0],
        ]);
    }
}