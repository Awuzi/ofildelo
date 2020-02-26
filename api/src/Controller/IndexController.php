<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/ponts", name="index")
     * @param ApiRestController $api
     * @return Response
     */
    public function index(ApiRestController $api)
    {
        $one = json_decode($api->getAllPonts()->getContent());
        return $this->render('index/index.html.twig', ['datas' => $one]);
    }

    /**
     * @Route("/ponts/{id}", name="one")
     * @param $id
     * @param ApiRestController $api
     * @return Response
     */
    public function oneWithApi($id, ApiRestController $api)
    {
        $one = json_decode($api->getPonts($id)->getContent());
        return $this->render('index/one.html.twig', ['datas' => $one]);
    }
}
