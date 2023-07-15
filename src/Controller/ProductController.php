<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class ProductController extends AbstractController
{
    #[Route('/voitures-doccasion', name: 'product_')]
    public function product(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'product' => $productRepository->findAll(),
        ]);
    }
    #[Route('/détails', name: 'details')]
    public function index(): Response
    {
        return $this->render('details/details.html.twig', [
            'controller_name' => 'DetailsController',
        ]);
    }
}
