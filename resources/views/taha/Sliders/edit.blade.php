@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.Sliders')}}"> أللغات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل لغة
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافةاسلايد </h4>
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
                                        <form class="form" action="{{route('admin.Sliders.update',$slider -> id)}}" method="POST"enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>بيانات الاسلايدات </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$slider -> title}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title">
                                                            @error('title')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> الوصف </label>

                                                    <textarea     class="form-control"    value="{{Request::old('description')}}"   id="placeTextarea" rows="3"  name="description" type="text"   placeholder="ادخل الوصف."    >{{$slider -> description}}</textarea>
                                                    @error('description')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> صوره الاسلايد </label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file" name="image">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                            @error('image')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="text-center">
                                                                <img src="{{asset($slider -> image)}}"
                                                                     class="rounded-circle  height-150"
                                                                     alt="صورة الاسلايدر  ">
                                                            </div>
                                                        </div>
                                                        </div>

                                                        </div>


                                                {{--<div class="row">--}}

                                                    {{--<div class="col-md-6">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="projectinput2"> الاتجاة </label>--}}
                                                            {{--<select name="direction" class="select2 form-control">--}}
                                                                {{--<optgroup label="من فضلك أختر اتجاه اللغة ">--}}
                                                                    {{--<option value="rtl" @if($language ->direction == 'rtl' ) selected @endif>من اليمين الي اليسار</option>--}}
                                                                    {{--<option value="ltr" @if($language ->direction == 'ltr') selected @endif>من اليسار الي اليمين</option>--}}
                                                                {{--</optgroup>--}}
                                                            {{--</select>--}}
                                                            {{--@error('direction')--}}
                                                            {{--<span class="text-danger">{{$message}}</span>--}}
                                                            {{--@enderror--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="1" name="statu"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"


                                                                   @if($slider -> statu  ==1 )
                                                                   checked > @endif

                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>

                                                            @error('statu')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>  تحديث
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