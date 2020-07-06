<?php

namespace AppBundle\Controller;

use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $userId = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('AppBundle:Complement')->findBy(array('id' => $userId));
        if ($profile != null){
            return $this->render('default/index.html.twig', array(
                'user' => $userId,
                'profile' => $profile
            ));
        }
        return $this->render('default/index.html.twig', array(
            'user' => $userId,
        ));
    }

    /**
     * @Route("/", name="password")
     */
    public function loginAction()
    {
        return $this->render('@FOSUser/Security/login.html.twig');
    }
}
