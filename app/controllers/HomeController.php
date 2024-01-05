<?php
class HomeController extends Controller
{

    public function get()
    {
        echo "model exist";
        $first_8 = $this->model('product')->getFirst8Products();
        if ($first_8) {
            $this->view('frontend/index', [
                'products_first' => $first_8,
            ]);
        } else {

            $this->view('frontend/index');
        }
    }
    public function getProducts()
    {
    }
}