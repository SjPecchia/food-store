<?php
class Pages extends Controller{
    public function __construct() {
      //$this-> postModel=$this->model("Post");
      $this->productModel = $this->model("Product");
      $this->productsModel = $this->model("Products");
      $this->aboutModel = $this->model("About");
    }

      public function index() {
        $data = [
          "body_class" => "home"
        ];
        $this->view("pages/index", $data);
      }

      public function product() {
        $product2 = $this->productModel->getProduct();
        $data = [
          "body_class" => "product", "product" => $product2
        ];
        $this->view("pages/product", $data);
      }

      public function products() {
        $productss = $this->productsModel->getproducts();
        $data = [
          "body_class" => "products", "productss" => $productss
        ];
        $this->view("pages/products", $data);
      }
      
      public function about() {
        $abouts = $this->aboutModel->getAbout();
        $data = [
          "body_class" => "about", "abouts" => $abouts
        ];
        $this->view("pages/about", $data);
      }
      public function edit($id = 0) {
        echo "load edit" . $id . ".php" . "<br>";
      }
}
