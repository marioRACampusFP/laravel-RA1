@extends('layouts.landing') 

@section('title', 'Services')

@section('content')
    ¡<div class="container pt-5">
              <h1 class ="mt-4">Services</h1>
        </div>
    @Component('landing._components.card')
        @slot('title', 'Servicio 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.')
        @slot('foto', asset('assets/imgs/ORAN_1.jpg'))
    @endComponent

    @Component('landing._components.card')
        @slot('title', 'Servicio 2')
        @slot('content', 'Vivamus molestie diam in justo tincidunt, nec aliquam libero vestibulum.')
        @slot('foto', asset('assets/imgs/ORAN_2.jpg'))
    @endComponent

    @Component('landing._components.card')
        @slot('title', 'Servicio 3')
        @slot('content', 'Aliquam erat volutpat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.')
        @slot('foto', asset('assets/imgs/ORAN_3.jpg'))
    @endComponent
@endsection