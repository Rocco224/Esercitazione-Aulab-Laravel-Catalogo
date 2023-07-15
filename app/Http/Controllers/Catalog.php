<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catalog extends Controller
{

    public $products = [
        1 => ['category' => 'tv', 'brand' => 'Sony', 'name' => 'TV 42"', 'price' => 1000],
        2 => ['category' => 'tv', 'brand' => 'Samsung', 'name' => 'TV 55"', 'price' => 800],
        3 => ['category' => 'tv', 'brand' => 'LG', 'name' => 'TV 32"', 'price' => 800],
        4 => ['category' => 'notebook', 'brand' => 'HP', 'name' => 'Notebook i7', 'price' => 750],
        5 => ['category' => 'notebook', 'brand' => 'Lenovo', 'name' => 'Notebook i5', 'price' => 600],
        6 => ['category' => 'notebook', 'brand' => 'Dell', 'name' => 'Notebook i3', 'price' => 400],
        7 => ['category' => 'smartphone', 'brand' => 'Samsung', 'name' => 'S23', 'price' => 800],
        8 => ['category' => 'smartphone', 'brand' => 'Apple', 'name' => 'iPhone 14', 'price' => 1000],
        9 => ['category' => 'smartphone', 'brand' => 'Apple', 'name' => 'iPhone 14 Pro', 'price' => 1300],
        10 => ['category' => 'tablet', 'brand' => 'Samsung', 'name' => 'Galaxy Tab', 'price' => 300],
        11 => ['category' => 'tablet', 'brand' => 'Apple', 'name' => 'iPad', 'price' => 400],
    ];

    public function categoryList() {

        $categories = [];

        // Creo un elenco di categorie eliminando i duplicati
        foreach($this->products as $product) {
            
            // Se già presente non inserisco la categoria nell'array
            if(! in_array($product['category'], $categories)) {
                $categories[] = $product['category'];
            }

        }

        return $categories;
    }

    public function catalog()
    {

        $categories = $this->categoryList();
        //dd( $categories);

        return view('catalog', [
            'categories' => $categories,
            'products' => $this->products, 
        ]);

    }

    public function product($id) {

        //dd($this->products[$id]);
        return view('product', ['product' => $this->products[$id]]);

    }

    public function category($category) {

        $categories = $this->categoryList();

        $products = [];

        foreach ($this->products as $id => $product) {

            if($product['category'] == $category) {

                $products[$id] = $product;

            }

        }

        return view('catalog', compact('products', 'categories'));

    }
  
}