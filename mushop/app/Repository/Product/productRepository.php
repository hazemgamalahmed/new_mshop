<?php
namespace App\Repository\Product;
use App\Product;
use Illuminate\Http\Request;

class productRepository implements productRepositoryInterface
{
    protected $model;
    public function __construct(Product $model)
    {
        $this->model = $model;
    }
    public function caption()
    {
        return $this->model::orderBy('id','desc')
        ->with(['category'])
        ->with(['users'])
        ->paginate(5);
    }
    public function showUs(Product $model)
    {
        return view('admin.product.show', [
            'product' => $model 

        ]);
    }
    public function delete(Product $model)
    {
        return $model->delete();
        
    }
}