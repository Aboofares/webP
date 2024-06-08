@extends('Dashlayouts.master')

@section('Page_title')
    Profile
@endsection

@section('customCSS')

{{--    {{ URL::asset('theme/ltr/') }}--}}
@endsection

@section('content')

    <section >
        <div class="row match-height">
            <div class="col-lg-6">
                <div class="card">
                        <div class="card-body">
                            <div class="col-sm-6">
                                    <a href="#" class="profile-image">
                                        <img src="{{ URL::asset('theme/ltr/app-assets/images/portrait/small/avatar-s-1.png') }}" class="rounded-circle img-border height-100" alt="Card image">
                                    </a>
                                <h3 class="font-medium-1">Thomas Cruise IV
                                    <span class="font-medium-1">(Project manager)</span>
                                </h3>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                            ghghghghghghghghghghghghg

                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection



@section('customScript')

@endsection
