@extends('frontend.layouts.app')
@section('body')

<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h1>{{ trans('general.about_us') }}</h1>
        </div>
        {{-- @include('frontend.partials._breadcrumbs',['name' => trans('general.shop')]) --}}
    </div>
</section>
<!-- /BREADCRUMBS -->

<!-- PAGE -->
<section class="page-section color">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p style="text-size:51px">
                    {{ trans('message.aboutus_message')}}
                </p>
            </div>




        </div>
    </div>
</section>
<!-- /PAGE -->
@endsection 