<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController {
    /**
     * @Route("/", name="product")
     */
    public function index(ProductRepository $repository, LoggerInterface $logger): Response
    {
        $products = $repository->findAll();
        $logger->info($products[0]->getName());
        return $this->render("product/index.html.twig", [
            "products" => $products
        ]);
    }
}
