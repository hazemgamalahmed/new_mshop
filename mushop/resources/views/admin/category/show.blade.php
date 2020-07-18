@extends('layouts.app')
@section('title', 'Single Category')
@section('menue')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">single category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{$category->name}}</a></li>
              @if($category->parent)
              <li class="breadcrumb-item active">Category {{$category->parent->name}}</li>
              @endif
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
                        <div class = "col">
                        <h1>{{$category->name}}</h1>
                        <p>{{$category->description}}</p>

                        @if($category->parent)
                        <h2>the parent method is : </h2>
                        <a href = "{{route('admin.categories.show', $category->parent->id)}}">{{$category->parent->name}}</a>
                        @endif
                        <div class = "text-center">
                        <a href="{{route('admin.categories.edit', $category->id)}}" class = "btn btn-primary form-control">Edit</a>
                        </div>
                        </div>
                        </div>
                  </div> 
               </div>
           </div>
       </div>
      </div>
@endsection