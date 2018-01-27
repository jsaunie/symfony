<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use App\Repository\ProductRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route(path="/", name="homepage")
     */
    public function homepage()
    {
        $manager = $this->getDoctrine()->getManager();
        /** @var ProductRepository $repo */
        $products = $manager->getRepository(Product::class)->findAll();
        $msg = 'He\'s awesome anyway 😎';

        return $this->render('homepage.html.twig', compact('products', 'msg'));
    }

    /*
     * @ROUTE (path="/product/{id}", requirements={"id" = "\d+"})
     */
    public function showProduct($id)
    {
        $manager = $this->getDoctrine()->getManager();
        /** @var ProductRepository $repo */
        $product = $manager->getRepository(Product::class)->find($id);
        return $this->render('show.html.twig', compact('product'));
    }

}