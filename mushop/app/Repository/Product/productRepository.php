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
    public function caption(Request $request)
    {
        $Limits = $request->query('limit', 5);
        $query_search = $request->query('search');
        return $this->model::orderBy('id','desc')
        ->with(['category'])
        ->with(['users'])
        ->where('name', 'LIKE', "%$query_search%")
        ->paginate($Limits);
    }
    public function showUs(Product $model)
    {
        return view('admin.product.show', [
            'product' => $model 

        ]);
        

    }
    public function all()
    {
        return $this->model::all();
    }
    public function delete(Product $model)
    {
        return $model->delete();
        
    }
}