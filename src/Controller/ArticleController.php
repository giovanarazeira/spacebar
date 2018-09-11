<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ArticleController
 *
 * @author giovanarazeira
 */
class ArticleController extends AbstractController {

    /**
     * @return Response
     * @Route("/")
     */
    public function homepage() {
        return new Response('TESTE');
    }

    /**
     * @return Response
     * @Route("/news/{slug}")
     */
    public function show($slug) {
        
        $comments = [
          'I ate a normal rock once. It did NOT taste like bacon!',
          'Woohoo! I\'m going on an all-asteroid diet',
          'I like bacon too! Buy some from my site! bakinsomebacon.com'  
        ];
        
        //return new Response(sprintf('Future page to show the article: %s', $slug));
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }

}
