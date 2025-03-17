@extends('layouts.admin')
@section('content')
    <div class="mt-4">
        <button type="button" class="btn btn-success"><a class="nav-link d-flex align-items-center gap-2"
                href="{{ url('categories/create') }}">أضف
                صنف جديد</a></button>
    </div>
    <div class="py-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('categories/delete/' . $category->id) }}" class="btn btn-danger">حذف</a>
                            <a href="{{ url('categories/edit/' . $category->id) }}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
