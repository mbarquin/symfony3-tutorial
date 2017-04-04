<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class BlogController extends Controller
{
    /**
     * @Route("/blog")
     */
    public function listAction()
    {
        return new Response(
            '<html><body>Reading Blog index page</body></html>'
        );
    }
}
