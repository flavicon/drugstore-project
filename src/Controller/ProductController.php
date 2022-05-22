<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Product;

use App\Connection\Connection;

class ProductController extends AbstractController
{
    public function list(): void
    {
        $con = Connection::open();

        $data = $con->getRepository(Product::class)->findAll();

        parent::render('product/list', $data);
    }

    public function add(): void
    {
        if ($_POST) {
            $prod = new Product();
            $prod->setName($_POST['product-name']);
            $prod->setDescription($_POST['product-details']);

            $con = Connection::open();
            $con->persist($prod);
            $con->flush();

            echo 'Deu bom';
        }

        parent::render('product/add');
    }

    public function remove(): void
    {
        if (!isset($_GET['id'])) {
            $this->render('error/notFound');
            return;
        }

        $id = $_GET['id'];

        $con = Connection::open();

        $prod = $con->getRepository(Product::class)->find($id);

        if (!$prod) {
            die('Produto não existe');
        }

        $con->remove($prod);
        $con->flush();

        header('location: /listar-produtos');
    }
}
