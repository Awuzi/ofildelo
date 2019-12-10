<?php

namespace App\Controller;

use App\Entity\Patrimoine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiRestController extends AbstractController
{
    /**
     * @Route("/api/ponts", name="api_allPonts")
     */
    public function getAllPonts()
    {
        $em = $this->getDoctrine()->getManager();
        $ponts = $em->getRepository(Patrimoine::class)->findAll();
        $tabPonts = [];
        foreach ($ponts as $pont) {
            $tabPonts[] = [
                "id" => $pont->getId(),
                "identifiant" => $pont->getIdentifiant(),
                "commune" => $pont->getCommune(),
                "elem_patri" => $pont->getElemPatri(),
                "elem_princ" => $pont->getElemPrinc(),
            ];
        };
        $response = new Response(json_encode($tabPonts, true, 512));

        return $response;
    }


    /**
     * @Route("/api/ponts/{id}", name="api_OnePonts")
     * @param $id
     * @return Response
     */
    public function getPonts($id)
    {
        $response = new JsonResponse();
        $em = $this->getDoctrine()->getManager();
        $ponts = $em->getRepository(Patrimoine::class)->find($id);
        $response->headers->set('Content-Type', 'application/json');
        $response->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        $response->setData([
            "id" => $ponts->getId(),
            "identifiant" => $ponts->getIdentifiant(),
            "commune" => $ponts->getCommune(),
            "elem_patri" => $ponts->getElemPatri(),
            "elem_princ" => $ponts->getElemPrinc(),
        ]);

        return $response;
    }
}
