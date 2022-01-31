@extends('products.layout')
@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $product->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $product->detail }}
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Image:</strong>
                    <div class="form-group">
                        <img src="/image/{{ $product->image }}" width="500px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

<style>
    .container{
        width: 90%;
    }

    .row{
        display: flex;
    }

    .left{
        width: 50%;
    }
</style>