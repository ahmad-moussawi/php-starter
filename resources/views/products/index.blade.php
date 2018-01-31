@extends('layouts.app')

@section('content')
    <h1 class="page-header">
        Products <small>Show all products</small>
    </h1>

    <p class="text-right">
        <a href="/products/create" class="btn btn-primary">+</a>
    </p>

    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Color</th>
            <th>Price</th>
            <th>In Discount ?</th>
        </tr>

        @foreach($products as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->description }}</td>
            <td>{{ $row->color }}</td>
            <td>{{ number_format($row->price) }}</td>
            <td>{{ $row->discount ? 'Yes' : 'No' }}</td>
        </tr>
        @endforeach
    </table>

@endsection