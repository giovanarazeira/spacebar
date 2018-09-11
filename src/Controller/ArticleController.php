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
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of ArticleController
 *
 * @author giovanarazeira
 */
class ArticleController extends AbstractController {

    /**
     * @return Response
     * @Route("/", name="app_homepage")
     */
    public function homepage() {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @return Response
     * @Route("/news/{slug}", name="article_show")
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
            'comments' => $comments,
            'slug' => $slug
        ]);
    }
    
    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug) {
        
        // TODO - actually heart/unheart the article!
        
        //return new Response(json_encode(['hearts' => 5]));
        return new JsonResponse(['hearts' => rand(5,100)]);
    }

}
