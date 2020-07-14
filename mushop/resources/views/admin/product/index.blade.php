@extends('layouts.app')
@section('title', 'All Products')
@section('menue')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Create Category</li>
              <li class="breadcrumb-item active">create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @endsection
    @section('content')
    
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-body">
                        <div class="row">
                 </div>
                 <table class="table-bordered">
                 <thead>
                 <tr>
                 <th>#</th>
                 <th>product name</th>
                 <th>product Category</th>
                 <th>product Price</th>
                 <th>Added By</th>
                 <th>action</th>
                 
                 </tr>
                 </thead>
                 <tbody>
                 @foreach($products as $product)
                 <tr>
                 <td>{{$product->id}}</td>
                 <td>{{$product->name}}</td>
                 <td>{{$product->category->name}}</td>
                 <td>{{$product->category->price}}</td>
                 <td>{{$product->users->name}}</td>
                 <td>
                 <a href="{{route('admin.products.show', $product)}}" class="btn btn-info">Show</a>
                 <a href="" class="btn btn-primary">Edit</a>
                 <form method="POST" action="{{route('admin.products.destroy', $product)}}" style="display:inline-block;">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
                 </td>
                 </tr>
                 @endforeach
                 </tbody>
                 </table>
            </div>
        </div>
    </div>
  </div>
</div>
    @endsection