@extends('Dashlayouts.master')

@section('Page_title')
AccountTypes
@endsection


@section('content')

    {{--Start  Add Model --}}
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel1">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form" action="{{ URL('/Settings/AccountTypes/Add') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="AccountTypeArName">{{trans('mainTrans.AccountTypes_Ar_Name')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="AccountTypeArName" class="form-control" placeholder="{{trans('mainTrans.AccountTypes_Ar_Name')}}" name="AccountTypeArName">
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="AccountTypeEngName">{{trans('mainTrans.AccountTypes_En_Name')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="AccountTypeEngName" class="form-control" placeholder="{{trans('mainTrans.AccountTypes_En_Name')}}" name="AccountTypeEngName">
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <button type="button" class="btn btn-danger mr-1" data-dismiss="modal">
                                <i class="ft-x"></i> {{trans('mainTrans.Cancel')}}
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i>  {{trans('mainTrans.Save')}}
                            </button>
                        </div>


                    </form>






                </div>

            </div>
        </div>
    </div>
    {{--end  Add Model --}}

    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> card-title
                            <button type="button" class="btn btn-purple btn-sm" data-toggle="modal" data-target="#default">
                                <i class="ft-plus-circle"></i>
                            </button>

                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Position</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                @foreach($AccountTypes as $AccountType)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{$AccountType->account_type_name}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{ $AccountType->id }}"
                                                    title="{{ trans('mainTrans.Edit') }}">
                                                <i class="ft-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{ $AccountType->id }}"
                                                    title="{{ trans('mainTrans.Delete') }}">
                                                <i class="ft-trash-2"></i>
                                            </button>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Position</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
