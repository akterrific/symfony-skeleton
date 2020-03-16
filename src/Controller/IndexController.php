<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function home()
    {
        $result = [];

        return $this->render(
            'index/getresult.html.twig',
            [
                'items' => $result
            ]
        );
    }
}