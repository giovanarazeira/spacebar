<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ArticleController
 *
 * @author giovanarazeira
 */
class ArticleController {

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
        return new Response(sprintf('Future page to show the article: %s', $slug));
    }

}
