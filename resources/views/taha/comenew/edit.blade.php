@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.ServicePoint')}}">الاخبار</a>
                                </li>
                                <li class="breadcrumb-item active">تعديل الاخبار والعروض
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">تعديل الاخبار والعروض  </h4>
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
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.comenew.update',$News -> id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{asset($News -> news_img)}}" class="rounded-circle  height-150" alt="صورة الوكيل  ">
                                                </div>
                                            </div>

                                            <label> الصوره </label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="news_img">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('news_img')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                            <div class="form-body">

                                                <h4 class="form-section">
                                                    <i class="ft-home"></i> بيانات الخبر </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان بالعربي </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   value="{{$News -> title_ar}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title_ar">
                                                            @error('title_ar')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان بالانجليزي </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   value="{{$News -> title_en}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title_en">
                                                            @error('title_en')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> الوصف بالعربي </label>

                                                    <textarea class="form-control"
                                                              value="{{Request::old('description_ar')}}"
                                                              id="placeTextarea" rows="3" name="description_ar"
                                                              type="text"
                                                              placeholder="ادخل الوصف.">{{$News -> description_ar}}</textarea>
                                                    @error('description_ar')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> الوصف بالانجليزي </label>

                                                    <textarea class="form-control"
                                                              value="{{Request::old('description_en')}}"
                                                              id="placeTextarea" rows="3" name="description_en"
                                                              type="text"
                                                              placeholder="ادخل الوصف.">{{$News -> description_en}}</textarea>
                                                    @error('description_en')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>
                                                </div>

                                                    {{--<div class="col-md-6">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="projectinput2"> أختر القسم </label>--}}
                                                            {{--<select name="category_id" class="select2 form-control">--}}
                                                                {{--<optgroup label="من فضلك أختر القسم ">--}}
                                                                    {{--@if($categories && $categories -> count() > 0)--}}
                                                                        {{--@foreach($categories as $category)--}}
                                                                            {{--<option--}}
                                                                                    {{--value="{{$category -> id }}"--}}
                                                                                    {{--@if($vendor -> category_id == $category -> id  )  selected @endif--}}
                                                                            {{-->{{$category -> name}}</option>--}}
                                                                        {{--@endforeach--}}
                                                                    {{--@endif--}}
                                                                {{--</optgroup>--}}
                                                            {{--</select>--}}
                                                            {{--@error('category_id')--}}
                                                            {{--<span class="text-danger"> {{$message}}</span>--}}
                                                            {{--@enderror--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}


                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-6 ">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="projectinput1"> رقم الهاتف </label>--}}
                                                            {{--<input type="text" id="mobile"--}}
                                                                   {{--class="form-control"--}}
                                                                   {{--placeholder="  " name="phone"--}}
                                                                   {{--value="{{$Points ->phone}}">--}}

                                                            {{--@error("phone")--}}
                                                            {{--<span class="text-danger"> {{$message}}</span>--}}
                                                            {{--@enderror--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-6 ">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="projectinput1"> الفاكس </label>--}}
                                                            {{--<input type="text" id="email"--}}
                                                                   {{--class="form-control"--}}
                                                                   {{--placeholder="  " name="fax"--}}
                                                                   {{--value="{{$Points -> fax}}">--}}

                                                            {{--@error("fax")--}}
                                                            {{--<span class="text-danger"> {{$message}}</span>--}}
                                                            {{--@enderror--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}





                                                <div class="row">
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<div class="form-group mt-1">--}}
                                                            {{--<input type="checkbox" value="1"--}}
                                                                   {{--name="active"--}}
                                                                   {{--id="switcheryColor4"--}}
                                                                   {{--class="switchery" data-color="success"--}}
                                                                   {{--@if($vendor -> active == 1)checked @endif/>--}}
                                                            {{--<label for="switcheryColor4"--}}
                                                                   {{--class="card-title ml-1">الحالة </label>--}}

                                                            {{--@error("active")--}}
                                                            {{--<span class="text-danger"> </span>--}}
                                                            {{--@enderror--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                </div>






                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script src="  {{asset(' js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="country_id"]').on('change',function(){
                var countryID = jQuery(this).val();
                if(countryID)
                {


                    jQuery.ajax({
                        url: "{{ url ('/agent/getstates/')}}/"+countryID,
                        type : "GET",
                        dataType: "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="city_id"]').empty();
                            jQuery  .each(data, function(key,value){
                                jQuery('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');

                            });
                        }
                    });


                }
                else
                {
                    jQuery('select[name="city_id"]').empty();
                }

            });
        });
    </script>

@stop
