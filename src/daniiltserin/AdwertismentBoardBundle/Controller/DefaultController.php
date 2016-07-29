<?php

namespace daniiltserin\AdwertismentBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('daniiltserinAdwertismentBoardBundle:Default:index.html.twig');
    }
}
