<?php

namespace App\Repository\Category;
use Illuminate\Http\Request;
use App\Category;
interface categoryRepositoryInterface
{
    public function create(Request $request);

    public function showus(Category $category);

    public function all(Category $model);
    public function fetchAll(Request $request);
    public function edit(Request $request, Category $category);
    public function delete(Category $category);
}
?>