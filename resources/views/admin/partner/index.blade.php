@extends('layouts.adminMaster')
@section('title' , 'Dashboard')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> {{trans('words.partner_datatable')}}</h3>

                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" >

                        <div class="heading-elements">
                            <a href="{{ route('partner_create') }}">
                                <button class="btn btn-primary btn-sm"><i class="ft-plus white"></i>  {{trans('words.create_partner')}} </button></a>
                            <span class="dropdown">
                                            <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-download white"></i></button>
                                            <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">

                                              <a class="btn btn-secondary buttons-copy buttons-html5 btn-primary mr-1 dropdown-item" tabindex="0"
                                                 aria-controls="DataTables_Table_10" href="#"><span>Copy</span>
                                              </a>
                                              <a class="btn btn-secondary buttons-csv buttons-html5 btn-primary mr-1 dropdown-item" tabindex="0"
                                                 aria-controls="DataTables_Table_10" href="#"><span>CSV</span>
                                              </a>
                                              <a class="btn btn-secondary buttons-excel buttons-html5 btn-primary mr-1 dropdown-item" tabindex="0"
                                                 aria-controls="DataTables_Table_10" href="#"><span>Excel</span>
                                              </a>
                                              <a class="btn btn-secondary buttons-pdf buttons-html5 btn-primary mr-1 dropdown-item" tabindex="0"
                                                 aria-controls="DataTables_Table_10" href="#"><span>PDF</span>
                                              </a>
                                              <a class="btn btn-secondary buttons-print btn-primary mr-1 dropdown-item" tabindex="0"
                                                 aria-controls="DataTables_Table_10" href="#"><span>Print</span>
                                              </a>

                                            </span>
                                        </span>

                        </div>


                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
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
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered file-export"  >
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>  {{trans('words.partner_name')}}</th>
                                                <th>  {{trans('words.small_description')}}</th>
                                                <th>  {{trans('words.partner_description')}}</th>
                                                <th>  {{trans('words.partner_img')}}</th>

                                                <th>  {{trans('words.action')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($partner as $item)
                                                <tr>
                                                    <td>{{$item->code}}</td>
                                                    <td>{{$item->partner_name}}</td>
                                                    <td>{{$item->partner_s_description}}</td>
                                                    <td>{{$item->partner_description}}</td>
                                                    <td class="text-center">
                                                        <span class="avatar  ">
                                                          <img src="{{URL::asset($item->partner_img)}}" alt="{{$item->partner_img}}"
                                                               data-toggle="tooltip" data-placement="right" title="image header">
                                                        </span>
                                                    </td>


                                                    <td>
                                                        <span class="dropdown">
                                                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i>
                                                          </button>
                                                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">

                                                            <a href="{{ route('partner_edit',['id'=>$item->id]) }}" class="dropdown-item">
                                                                <i class="ft-edit-2"></i> {{trans('words.edit')}}
                                                            </a>

                                                          <form action="{{ route('partner_softdelete',['id'=>$item->id]) }}" method="get">
                                                              @csrf
                                                            <button type="submit" class="dropdown-item">
                                                                 <i class="ft-trash"></i> {{trans('words.delete')}}
                                                            </button>
                                                          </form>

                                                            <a href="{{ route('partner_trashed') }}" class="dropdown-item">
                                                                <i class="ft-edit-2"></i> {{trans('words.trash')}}
                                                            </a>


                                                          </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>

        </div>
    </div>

@endsection
