<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
// @Security("is_granted('ROLE_USER')")

class HomeController extends AbstractController
{

    /**
     * @Route("/home",name="home")
     * @Route("/", name="default_page")
     * 
     */
    public function index()
    {

        dd("Bonjour");
    }
}