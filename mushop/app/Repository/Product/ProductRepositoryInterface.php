<?php
namespace App\Repository\Product;
use App\Product;
use Illuminate\Http\Request;

interface productRepositoryInterface
{
    public function caption(Request $request);
    public function all();
    public function showUs(Product $product);
    public function delete(Product $product);
}