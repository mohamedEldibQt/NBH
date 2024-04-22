@extends('layouts.master')
@section('title' , 'Home')
@section('content')


    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">

            @if($partners->isNotEmpty())
                <div class="flex-w flex-sb-m p-b-10  p-t-150">
                    <h3 class="mtext-111 cl2 p-b-16">
                        partners
                    </h3>
                </div>
            @endif
            <div class="row isotope-grid">
                @if($partners->isNotEmpty())
                    @foreach ($partners as $partner)

                <div class="col-sm-6 col-md-3 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2-txt flex-w flex-t p-t-14 effect8" style=" filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.3));">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('product_show',['id'=>$partner->id])}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-10" 
                                style="padding-left: 10px;font-size: 24px; color: #505050;">
                                {{$partner->partner_name}}
                            </a>
                        </div>
                    </div>

                    <div class="block2 effect8" style=" padding: 20px;    filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.3));">
                        <div class="block2-pic hov-img0">
                           
                            <a href="{{route('product_show',['id'=>$partner->id])}}" class="hov-img0 how-pos5-parent">
                              <img src="{{asset($partner->partner_img) ?? asset('images/no-image.png') }}" style=" height: 280px; " alt="IMG">
                             </a>
                        </div>


                    </div>
                </div>
                    @endforeach
           
                @else 
                    <div>
                        <h2>No partners found</h2>
                    </div>
                @endif

            </div>
            
    


{{-- ============================================= --}}
            @if($products->isNotEmpty())
                <div class="flex-w flex-sb-m p-b-10  p-t-100">
                    <h3 class="mtext-111 cl2 p-b-16">
                        products
                    </h3>
                </div>
            @endif
            <div class="row isotope-grid">
                @if($products->isNotEmpty())
                    @foreach ($products as $product)

                <div class="col-sm-6 col-md-3 col-lg-3 p-b-35 isotope-item women " >
                    <!-- Block2 -->
                    <div class="block2-txt flex-w flex-t p-t-14 effect8" style=" filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.3));">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-10" style="padding-left: 10px;font-size: 24px; color: #505050;">
                                {{$product->product_name}}
                            </a>
                        </div>
                    </div>

                    <div class="block2 effect8" style=" padding: 20px;    filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.3));">
                        <div class="block2-pic hov-img0">
                 
                            <a href="{{route('product_show',['id'=>$partner->id])}}" class="hov-img0 how-pos5-parent">
                                <img src="{{asset($product->product_img) ?? asset('images/no-image.png') }}" style=" height: 370px; " alt="IMG">
                            </a>
                           
                        </div>
                    </div>
                </div>
                    @endforeach

                @else 
                    <div>
                        <h2>No products found</h2>
                    </div>
                @endif

            </div>

     
{{-- ============================================= --}}



        </div>
    </div>


@endsection
