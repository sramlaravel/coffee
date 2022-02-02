@php
    $Connecting_Value = getContent('Connecting_Value.content', true);
    $Connecting_Values = getContent('Connecting_Value.element', false, 4, true);
@endphp
<section class="about__area about__area--2 grey-bg position-relative pt-120 pb-130">

<div class="container">
    <div class="section-heading section-heading__black mb-40">
        <h3 class="title"  style="text-align: center;"  >{{__($Connecting_Value->data_values->heading)}}</h3>
        <p   class="col-xl-12"  style="text-align: center;" >
            {{__($Connecting_Value->data_values->sub_heading)}}
        </p>
    </div>
</div>

<div class="feature__area feature__area--2 pb-115">

    <div class="container-fluid custom-width">


        <div class="row">

            <div class="col-xl-12">
                <div class="feature__wrapper">

                    <div class="row mt-none-50">
                        @foreach($Connecting_Values as $key=>  $value)
                        <div class="col-xl-4 col-lg-6 col-md-6 mt-50">
                            <div class="feature__item feature__item--2">
                                <span class="year">  @php echo $key+1 @endphp</span>
                                <div class="content mt-20">
                                    <h2 class="title">{{__($value->data_values->title)}}</h2>

                                    <p>          {{__($value->data_values->sub_title)}}     </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
</section>