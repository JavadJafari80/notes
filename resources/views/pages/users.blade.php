@extends('layouts.app')

@section('content')
    <div class="breadcrumb">
        <ul>
            <li><a href="index.html" >پیشخوان</a></li>
            <li><a href="courses.html" class="is-active">کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="users.html">همه کاربران</a>
                <a class="tab__item" href="">مدیران</a>
                <a class="tab__item" href="">نویسنده</a>
                <a class="tab__item" href="create-user.html">ایجاد کاربر جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی کاربر">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="ایمیل">
                            <input type="text"  class="text" placeholder="شماره">
                            <input type="text"  class="text" placeholder="آی پی">
                            <input type="text"  class="text margin-bottom-20" placeholder="نام و نام خانوادگی">
                            <btutton class="btn btn-netcopy_net">جستجو</btutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>سطح کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr role="row">
                        <td><a href="">{{ $user->id }}</a></td>
                        <td><a href="">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('user.updateRole', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT') <!-- برای مشخص کردن نوع درخواست به PUT -->
                                <select name="role" onchange="this.form.submit()">
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>مالک</option>
                                    <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>مدیر</option>
                                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>کاربر عادی</option>
                                    <!-- گزینه‌های دیگر در صورت نیاز -->
                                </select>
                            </form>
                        </td>

                        <td>{{ \Morilog\Jalali\Jalalian::fromCarbon($user->created_at)->format('Y/m/d') }}</td>
                        <td>
                            <a href="{{ route('user.delete', $user->id) }}" class="item-delete mlg-15" title="حذف"></a>
                            <a href="{{ route('user.edit', $user->id) }}" class="item-edit " title="ویرایش"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
