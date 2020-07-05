<?php
namespace App\Repository\Product;
use App\Product;
use Illuminate\Http\Request;

interface productRepositoryInterface
{
    public function caption();
    public function showUs(Product $product);
}