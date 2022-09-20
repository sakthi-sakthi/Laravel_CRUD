@extends('products.layout')
  
@section('content')
<center>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h2>Personal Details</h2>
                </center>
            </div>
            <br>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <br>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $product->email }}
            </div>
        </div>
        <br>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place:</strong>
                {{ $product->place }}
            </div>
        </div>
    </div>
    <br>
        <br>
    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
            </center>
@endsection