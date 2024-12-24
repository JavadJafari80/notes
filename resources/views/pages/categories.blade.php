@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="breadcrumb">
        <ul>
            <li><a href="index.html">پیشخوان</a></li>
            <li><a href="categories.html.html" class="is-active">دسته بندی ها</a></li>
        </ul>
    </div>
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">دسته بندی ها</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام دسته بندی</th>
                            <th>نام انگلیسی دسته بندی</th>
                            <th>دسته پدر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr role="row" class="">
                                <td><a href="">{{ $category->id }}</a></td>
                                <td><a href="">{{ $category->PTitle }}</a></td>
                                <td>{{ $category->ETitle }}</td>
                                <td>{{ $category->parent_id ? $categories->firstWhere('id', $category->parent_id)->PTitle : 'ندارد' }}</td>
                                <td>
                                    <a href="{{ route('categories.destroy', $category->id) }}"
                                       class="item-delete mlg-15" title="حذف"></a>
                                    <a href="{{ route('categories.edit', $category->id) }}"
                                       class="item-edit" title="ویرایش"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4 bg-white">
                <p class="box__title">ایجاد دسته بندی جدید</p>
                <form action="{{ route('categories.store') }}" method="post" class="padding-30">
                    @csrf
                    <input type="text" name="PTitle" placeholder="نام دسته" class="text" required>
                    <input type="text" name="ETitle" placeholder="نام انگلیسی دسته" class="text" required>
                    <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                    <select name="parent_id" id="">
                        <option value="0">ندارد</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->PTitle }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-netcopy_net">اضافه کردن</button>
                </form>
            </div>

        </div>
    </div>
@endsection
