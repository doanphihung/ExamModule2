<?php

use models\Customer;

class ProductController
{
    public $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function display()
    {
        $products = $this->model->getAll();
        include "./views/list.php";

    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "views/add.php";
        } else {
            $errors = [];
            $fields = ['productName', 'productLine', 'price', 'amount', 'description'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }

            if (empty($errors)) {
                $name = $_POST['productName'];
                $email = $_POST['productLine'];
                $price = $_POST['price'];
                $amount = $_POST['amount'];
                $description = $_POST['description'];
                $result = $this->model->insertProduct($name, $email, $price, $amount, $description);
                header('Location:index.php');
            } else {
                include 'views/add.php';
            }
        }

    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->model->delete($id);
        $this->display();
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->model->findById($id);
            include 'views/edit.php';
        } else {
            $errors = [];
            $fields = ['productName', 'productLine', 'price', 'amount', 'description'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }

            $id = $_POST['id'];
            if (empty($errors)) {
                $name = $_POST['productName'];
                $email = $_POST['productLine'];
                $price = $_POST['price'];
                $amount = $_POST['amount'];
                $description = $_POST['description'];
                $result = $this->model->update($name, $email, $price, $amount, $description, $id);
                header('Location:index.php');
            } else {
                $product = $this->model->findById($id);
                include 'views/edit.php';
            }
        }
    }

    function search()
    {
        $keyword = $_POST['keyword'];
        $data = $this->model->search($keyword);
        include 'views/search.php';
    }

}