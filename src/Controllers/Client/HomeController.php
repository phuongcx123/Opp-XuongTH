<?php 

namespace Caophuong\Phuong\Controllers\Client;

use Caophuong\Phuong\Commons\Controller;
use Caophuong\Phuong\Commons\Helper;
use Caophuong\Phuong\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'DucTV44';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}