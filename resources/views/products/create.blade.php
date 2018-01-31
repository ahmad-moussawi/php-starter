@extends('layouts.app')

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="/products/create" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label>Color</label>
            <input name="color" type="text" class="form-control" value="{{ old('color') }}">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input name="price" type="text" class="form-control" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label>In Discount ?</label>
            <input type="checkbox" name="discount">
        </div>

        <p class="text-right">
            <button type="submit" class="btn btn-primary">Save</button>
        </p>

    </form>

@endsection