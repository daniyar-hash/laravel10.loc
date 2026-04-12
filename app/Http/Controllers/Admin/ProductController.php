<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {


        return 'Admin products list';
    }

    public function create()
    {
        dump(route('admin.products.create'));
        return 'Admin products create';
    }

    public function store()
    {
       
        return "Admin products store ";
    }

    public function show($product)
    {
        dump(route('admin.products.show', ['product_id'=>$product]));
        return "Admin products show: $product ";
    }


    public function edit($product)
    {

        // dump(route('admin.products.edit'));
       
        return "Admin products edit: $product ";
    }

    public function update($product)
    {
        
      
       
        return "Admin products update: $product ";
    }

    public function destroy($product)

    {
        
        return "Admin products delete: $product ";
    }



}