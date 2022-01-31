@extends('products.layout')    
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create +</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $product->image }}" width="100px" height="80px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <a class="btn btn-info" style="margin: 10px;" href="{{ route('products.show',$product->id) }}">Show</a>
                        <a class="fa fa-pencil" style="font-size:24px; margin: 10px; text-decoration:none;" href="{{ route('products.edit',$product->id) }}"></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fa fa-trash-o" style="font-size:24px; color: red; outline:none; border: none; background: #fff;"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        <span>{!! $products->links() !!}</span> 
    </div>
@endsection

<style>

    form{
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .pagination{
        width: 100px;
        height: auto;
        background: #000;
    }

    thead {
        height: 7vh;
        font-size: 18px;
    }

    thead th {
        font-size: 15px;
        text-align: center;
    }

    tbody td{
        font-size: 15px;
        text-align: center;
    }
</style>