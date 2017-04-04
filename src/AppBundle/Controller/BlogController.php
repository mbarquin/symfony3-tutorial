<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class BlogController extends Controller
{
    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
     */
    public function listAction($page=1)
    {
        return new Response(
            '<html><body>Showing page number: '.$page.'</body></html>'
        );
    }
    /**
     * @Route("/blog/{title}", name="blog_read", requirements={"title": "\S+"})
     */
    public function readAction($title)
    {
        return new Response(
            '<html><body>Showing post:'.$title.'</body></html>'
        );
    }
}
