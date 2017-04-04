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
        $viewData = array(
            "blog_entries" => array(
                array( "title" => "First post", "body" => "blahblahblah"),
                array( "title" => "Second post", "body" => "blehblehbleh"),
                array( "title" => "Third post", "body" => "blihblihblih")
            )
        );
        
        return $this->render('blog/index.html.twig', $viewData);
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
