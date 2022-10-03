<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DeleteProductController extends AbstractController {
    /**
     * @Route("/delete/{id}")
     */
    public function index(ProductRepository $productRepository, int $id, EntityManagerInterface $em): RedirectResponse {
        $product = $productRepository->find($id);
        $em->remove($product);
        $em->flush();
        return $this->redirect("/");
    }
}
