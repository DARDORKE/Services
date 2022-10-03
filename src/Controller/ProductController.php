<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\services\ReductionService;
use App\services\ProductService;

class ProductController extends AbstractController {
    /**
     * @Route("/", name="product")
     */
    public function index(ProductRepository $productRepository, ProductService $productService, ReductionService $reductionService) {
        $products = $productRepository->findAll();
        return $this->render("product/index.html.twig", [
            "products" => $productService->displayProducts($products),
            "promoProduct" => $products[0],
            "promoPrice" => $reductionService->applyReduction($products[0], 1)
        ]);
    }
}

