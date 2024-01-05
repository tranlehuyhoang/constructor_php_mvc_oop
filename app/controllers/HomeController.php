<?php
class HomeController extends Controller
{

    public function get()
    {
        $first_8 = $this->model('product')->getFirst8Products();
        $mostview_8 = $this->model('product')->getmostviewProducts();
        $mostview_8s = $this->model('product')->getmostviewProducts();
        $mostview_8s = $this->model('product')->getmostviewProducts();
        $hot_5s1 = $this->model('product')->getsaleProducts();
        $hot_5s2 = $this->model('product')->getsaleProducts();
        $hot_5s3 = $this->model('product')->getsaleProducts();
        $hot_5s4 = $this->model('product')->getsaleProducts();
        if ($first_8 || $mostview_8) {
            $this->view('frontend/index', [
                'products_first' => $first_8,
                'products_view' => $mostview_8,
                'products_views' => $mostview_8s,
                'products_hot_5s1' => $hot_5s1,
                'products_hot_5s2' => $hot_5s2,
                'products_hot_5s3' => $hot_5s3,
                'products_hot_5s4' => $hot_5s4,
            ]);
        } else {

            $this->view('frontend/index');
        }
    }
    public function getProducts()
    {
    }
}
