@extends('layouts.app')
@section('title', 'Single product')
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
              <li class="breadcrumb-item"><a href="#">{{$product->name}}</a></li>
           
              <li class="breadcrumb-item active">Category {{$product->category->name}}</li>
            
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
                        <h1>{{$product->name}}</h1>
                        <p>{{$product->description}}</p>

                        
                        <h2>the parent method is : </h2>
                        <a href = "{{route('admin.categories.show', $product->category->id)}}">{{$product->category->name}}</a>
                       
                        <div class = "text-center">
                        <a href="{{route('admin.products.edit', $product->id)}}" class = "btn btn-primary form-control">Edit</a>
                        </div>
                        </div>
                        </div>
                  </div> 
               </div>
           </div>
       </div>
      </div>
@endsection
