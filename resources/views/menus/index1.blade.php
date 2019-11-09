@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <button id="btn_add" name="btn_add" class="btn btn-default">Add New Product</button>
            </div>
            <div class="col-md-3">
                <button id="btn_add" name="btn_add" class="btn btn-default ">Add New Menu</button>
            </div>
            <div class="col-md-3">
                <button id="btn_add" name="btn_add" class="btn btn-default ">Add New Item</button>
            </div>
        </div>
        <div class="form-group">
                <label for="sel1">Select Menu:</label>
                <select class="form-control" id="sel1">
                </select>
            </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped table-hover ">
                <thead>
                    <tr class="info">
                        <th>ID </th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Aisle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="products-list" name="products-list">

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Passing BASE URL to AJAX -->
<input id="url" type="hidden" value="{{ \Request::url() }}">
@endsection
