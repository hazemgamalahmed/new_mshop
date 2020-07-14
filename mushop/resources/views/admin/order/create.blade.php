@extends('layouts.app')
@section('title', 'All Orders')
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
              <li class="breadcrumb-item"><a href="#">Orders</a></li>
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
                    <h1 class="text-center text-success">Add Category</h1>
                    <form class="form-group" method="POST" action="{{route('admin.orders.store')}}">
                    @csrf

                   @include('admin.order.form')
                    </form>
                    </div>
                </div>
             </div>
            </div>
       </div>
@endsection
