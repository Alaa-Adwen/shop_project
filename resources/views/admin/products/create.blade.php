@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <form action="{{ url('products/store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
            </div>
            <div class="mb-3">
                <label for="quantityFormControlInput1" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="الكمية">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput1" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="السعر">
            </div>
            <div class="mb-3">
                <label for="descriptionFormControlTextarea1" class="form-label">الوصف</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="categoryFormControlTextarea1" class="form-label">اختر الصنف</label>
                <select name="category" id="category" class="form-control">
                    <option value="#"></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection
