<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/voitures-doccasion', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
        
        ]);
    }

    #[Route('/voitures-doccasion', name: 'détails')]
    public function details(Product $product): Response
    {
        return $this->render('product/details.html.twig', compact('product') [
        ]);
    }
}
