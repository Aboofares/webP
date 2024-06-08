@extends('Dashlayouts.master')

@section('Page_title')
Common Settings
@endsection

@section('customCSS')

{{--    {{ URL::asset('theme/ltr/') }}--}}
@endsection

@section('content')



    <section >
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <!-- <h4 class="card-title">New Customers</h4> -->
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="card-header pt-0 pb-0">
                                <p class="danger darken-2">{{trans('mainTrans.Nationalities')}}</p>
                                <h3 class="display-4 blue-grey lighten-1">{{\App\Models\Settings\Nationality::count()}}</h3>
                                <a href=""><p class="danger darken-3">{{trans('mainTrans.Edit')}}</p></a>
                                <hr>
                                <p class="warning darken-2">{{trans('mainTrans.BloodType')}}</p>
                                <h3 class="display-4 blue-grey lighten-1">{{App\Models\Settings\BloodType::count()}}</h3>
                                <a href=""><p class="warning darken-3">{{trans('mainTrans.Edit')}}</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <!-- <h4 class="card-title">New Projects</h4> -->
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="card-header pt-0 pb-0">
                                <p class="info darken-2">{{trans('mainTrans.Religion')}}</p>
                                <h3 class="display-4 blue-grey lighten-1">{{App\Models\Settings\Religion::count()}}</h3>
                                <a href=""><p class="info darken-3">{{trans('mainTrans.Edit')}}</p></a>
                               <hr>
                                <p class="success darken-1">{{trans('mainTrans.Gender')}}</p>
                                <h3 class="display-4 blue-grey lighten-1">{{App\Models\Settings\Gender::count()}}</h3>
                                <a href=""><p class="success darken-1">{{trans('mainTrans.Edit')}}</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




@endsection



@section('customScript')

@endsection
