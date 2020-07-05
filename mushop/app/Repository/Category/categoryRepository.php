<?php

namespace App\Repository\Category;

use App\Category;
use Illuminate\Http\Request;
class categoryRepository implements categoryRepositoryInterface
{
    protected $model;
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function create($request)
    {
        return $this->model::create($request->all());
        
    }
    public function showus(Category $model){
        return view('admin.category.show', [
            'category' => $model
        ]);
    }
    public function all(Category $model)
    {
        return $model::all();
    }
    public function edit(Request $request, Category $model)
    {
        return $model->update($request->all());
    }

    public function delete(Category $model)
    {
         return $model->delete();
    }
    public function fetchAll(Request $request)
    {
        $query_search = $request->query('search');
        $limit = $request->query('limit', 10);
        return $this->model::orderBy('id', 'desc')
        ->with(['parent'])
        ->where('name', 'LIKE', "%$query_search%")
        ->paginate($limit);

    }
    
}
?>