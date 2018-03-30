@section('title', 'Store')
@extends('index')
@section('content')

            
<!-- START: Header Title -->
<!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
-->
<div class="nk-header-title nk-header-title-sm nk-header-title-parallax nk-header-title-parallax-opacity">
    <div class="bg-image">
        <div style="background-image: url('assets/images/image-12.jpg');"></div>
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">
                
                
                    <h1 class="nk-title">Our Store</h1>
                
                
                
                
            </div>
        </div>
    </div>
    
</div>
<!-- END: Header Title -->
        
 <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nk-gap-4"></div>

                <div class="nk-store">

                    <!-- START: Products List -->
                    <div class="row no-gutters">
                        @foreach($products as $product)
                            @include('front.parts.product', ['product' => $product])
                            <div class="nk-gap-4"></div>
                        @endforeach  
                    </div>
                    <!-- END: Products List -->
                    <div class="nk-gap-4"></div>
                </div>
            </div>
        </div>
@endsection