@extends('layouts.adminMaster')
@section('title' , 'Dashboard')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> {{trans('words.create_partner')}}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('partner')}}">{{trans('words.all_partners')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('partner_trashed')}}">{{trans('words.trashed_partner')}}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

                    </div>
                </div>
            </div>

            <div class="content-body">
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
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
                                    <div class="card-body">
                                        <div class="card-text">
                                            @if(Session::has('success'))
                                                <div class="alert bg-success alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                                                    <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Well done!</strong> You  create  successfully
                                                </div>
                                            @elseif(Session::has('error'))
                                                <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                                                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>ERROR!</strong> plz check data and tray again
                                                </div>
                                            @endif
                                        </div>
                                        <form class="form" action="{{route('partner_store')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-info"></i>   {{trans('words.partner_info')}}</h4>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{trans('words.partner_code')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.partner_code')}}"
                                                                   name="code">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{trans('words.partner_name')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.partner_name')}}"
                                                                   name="partner_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label> {{trans('words.upload_partner_img')}}</label> <br>
                                                            <label>Select File</label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file" name="partner_img" class="form-control">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{trans('words.small_description')}}</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="{{trans('words.small_description')}}"
                                                                   name="partner_s_description">                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  {{trans('words.partner_details')}}</label>
                                                            <textarea id="issueinput8" rows="5" class="form-control" name="partner_description" placeholder=" {{trans('words.partner_details')}}"
                                                                      data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="mission"
                                                                      data-original-title="" title="" style="height: 115px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{trans('words.Save')}}
                                                </button>
                                            </div>
                                        </form>
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
