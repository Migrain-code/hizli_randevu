@extends('layouts.master')
@section('title', "Salonlar")
@section('meta_description',"Salonlar")
@section('styles')

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Ansayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hizmetler</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">{{$serviceAll->count()}} Sonuç Bulundu</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <!-- Browse Section Five -->
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">Tüm Hizmetler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($services as $service)
                    <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card-five d-flex hvr-bounce-to-right">
                            <div class="specialist-img-five">
                                <img src="{{image($service->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                            </div>
                            <div class="specialist-nav-five ms-auto">
                                <a href="{{route('service.detail', $service->slug)}}"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- /Browse Section Five -->

@endsection
@section('scripts')

@endsection