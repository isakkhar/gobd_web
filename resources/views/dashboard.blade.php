@extends('layouts.backend')

@section('content')
<!-- Main Container -->
       <main id="main-container">
           <!-- Hero -->
           <div class="bg-image overflow-hidden" style="background-image: url('assets/media/photos/photo3@2x.jpg');">
               <div class="bg-primary-dark-op">
                   <div class="content content-narrow content-full">
                       <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                           <div class="flex-sm-fill">
                               <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                           </div>
                           <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                               <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                               </span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END Hero -->
           <!-- Page Content -->
           <div class="content content-narrow">
               <!-- Stats -->
               <div class="row">
                   <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                       <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                           <div class="block-content block-content-full">
                               <div class="font-size-sm font-w600 text-uppercase text-muted">All Order</div>
                               <div class="font-size-h2 font-w400 text-dark">120</div>
                           </div>
                       </a>
                   </div>
                   <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                       <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                           <div class="block-content block-content-full">
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                               <div class="font-size-h2 font-w400 text-dark">150</div>
                           </div>
                       </a>
                   </div>
                   <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                       <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                           <div class="block-content block-content-full">
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                               <div class="font-size-h2 font-w400 text-dark">3,200</div>
                           </div>
                       </a>
                   </div>
                   <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                       <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                           <div class="block-content block-content-full">
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Avg Sale</div>
                               <div class="font-size-h2 font-w400 text-dark">21</div>
                           </div>
                       </a>
                   </div>
               </div>
               <!-- END Stats -->
           </div>
           <!-- END Page Content -->
       </main>
       <!-- END Main Container -->
@endsection
