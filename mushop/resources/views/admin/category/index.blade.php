@extends('layouts.app')
@section('title', 'All Categories')
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
              <li class="breadcrumb-item"><a href="#">Categories</a></li>
              <li class="breadcrumb-item active">pages</li>
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
                            <div class="col">
                            	<form class="form-group">
                              <input class="form-control" type="number" name="limit"/>
                              <div class="text-center">
                              <button type="submit" class="btn btn-primary">update data</button>
                              </div>
                              </form>
                            </div>

                            
                            <div class="col">
                            <form class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="search"/>
                            <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                            <a class="btn btn-primary" href="{{route('admin.categories.index')}}">Reset</a>
                            </form>
                            </div>
                            <div class="col">
                            <a class="btn btn-success" href="{{route('admin.categories.create')}}"><i class="fa fa-plus"></i> Add Category</a>
                            <a class="btn btn-primary" href="{{route('admin.categories.export')}}"><i class="fa fa-file"></i> Export</a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>parent</th>
                        <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                      @if($category->parent)
                      <a href="{{route('admin.categories.show', $category->parent)}}">{{$category->parent->name}}</a>
                      @endif
                      </td>
                      <td>
                      <a href="{{route('admin.categories.show', $category->id)}}" class = "btn btn-info">Show</a>
                      <a href="{{route('admin.categories.edit', $category->id)}}" class = "btn btn-primary">Edit</a>
                      <form method="post" style="display:inline-block;" action="{{route('admin.categories.destroy', $category->id)}}">
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
                {!! $categories->links() !!}
            </div>
        </div>

</div>
@endsection