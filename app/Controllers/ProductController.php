<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new ProductModel();
        
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data =[
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
            return view('products', $data);

        
     /*   $this->product->update($id);
        return redirect()->to('/product');   */
    }

    public function save()
    {
        $data = [
            
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity')
        ];
        $this->product->save($data);
        return redirect()->to('/product');
    }
    public function index()
    {
        $data['products'] = $this->product->findAll();
        return view('main', $data);
    }
    public function product($product)
    {
        echo $product;
    }
    public function Enuj06()
    {
       $data['product'] = $this->product->findAll();
       return view('products', $data);
    }
    

}

