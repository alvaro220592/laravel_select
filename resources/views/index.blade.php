@extends('layouts.main')

@section('title', 'Select dinâmico')

@section('content')

<div class="row">
    <div class="col-md-4">
        <h3>Category<span class="gcolor"></span> </h3>
        <div>
            <select class="form-control formselect required" placeholder="Select Category"
                id="category" name="category">
                <option value="0" disabled selected>
                    Select category
                </option>
                @foreach($data as $categories)
                <option  value="{{ $categories->id }}">
                    {{ ucfirst($categories->name) }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <h3 id="subcategory">Sub Category*</h3>
        <select class="form-control formselect required" placeholder="Select Sub Category" id="sub_category">
        </select>
    </div>

    <div class="col-md-4">
        <h3 id="aaa">aaaa</h3>
        <select class="form-control formselect required" placeholder="Select Sub Category" id="aaaa">
        </select>
    </div>
        
</div>

@endsection