@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الخدمات الرئيسية </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الاصناف الرئيسية
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الاصناف الرئيسيه  </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('taha.includes.alerts.success')
                                @include('taha.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>الرقم </th>
                                                <th>اسم القسم</th>
                                                <th>اسم الصنف بالعربي </th>
                                                <th>اسم الصنف بالانجليزي </th>



                                                <th>الوصف بالعربي</th>
                                                <th> الوصف بالانجليزي</th>
                                                <th>العسر </th>

                                                <th>الصوره</th>
                                                <th>الصوره التفاصيل</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($items)
                                                @foreach($items as $key=> $item)
                                                    <tr>
                                                        <td>{{$key+1}}</td>

                                                        <td>  {{ optional($item-> category)->name_ar }} </td>
                                                        <td>{{$item->	title_ar}}</td>
                                                        <td>{{$item->	title_en}}</td>
                                                        <td>{{$item->description_ar}}</td>
                                                        <td>{{$item->description_en}}</td>
                                                        <td>{{$item->price}}</td>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{ asset( $item -> image) }}"></td>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{ asset( $item -> image1) }}"></td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                 s                                                aria-label="Basic example">
                                                                <a href="{{route('admin.items.edit',$item->id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{route('admin.items.delete',$item -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>



                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection