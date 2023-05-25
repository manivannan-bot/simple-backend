@extends('layouts.app')

@section('page-title', __('My Profile'))
@section('page-heading', __('My Profile'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('My Profile')
    </li>
@stop

@section('content')

@include('partials.messages')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active"
                           id="reports-tab"
                           data-toggle="tab"
                           href="#details"
                           role="tab"
                           aria-controls="home"
                           aria-selected="true">
                            @lang('Report Details')
                        </a>
                    </li>
                    
                  
                </ul>

                
                <div class="tab-content mt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active px-2"
                         id="details"
                         role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <form action="{{ route('report.create') }}" method="POST" id="report-form" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            @include('user.reports.create' )
                               
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

   
</div>

@stop

@section('scripts')
    {!! HTML::script('assets/js/as/btn.js') !!}
    {!! HTML::script('assets/js/as/profile.js') !!}
    {!! JsValidator::formRequest('Vanguard\Http\Requests\User\UpdateDetailsRequest', '#details-form') !!}
    {!! JsValidator::formRequest('Vanguard\Http\Requests\User\UpdateProfileLoginDetailsRequest', '#login-details-form') !!}

    @if (setting('2fa.enabled'))
        {!! JsValidator::formRequest('Vanguard\Http\Requests\TwoFactor\EnableTwoFactorRequest', '#two-factor-form') !!}
    @endif
@stop
