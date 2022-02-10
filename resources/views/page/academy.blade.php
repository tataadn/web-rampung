@extends('theme.index')

@section('content')

        <!-- jumbotron -->
        <section class="jumbotron" style="background-image: linear-gradient(to bottom, rgba(251, 251, 251, 0.6) 0%,rgba(251, 251, 251, 0.6) 100%), url(img/bigdata.jpg);">
            <div class="container p-5 justify-content-center text-center">
                <div class="row m-3 pt-3">
                    <div class="col mt-3 mb-2">
                        <h1 class="fw-bold display-5">Rala Academy</h1>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-sm-4 mb-3 hover-zoom">
                        <a href="{{route('page.course')}}">
                            <img src="img/bg/1.png" alt="" style="max-width: 280px;">
                        </a>
                    </div>
                    <div class="col-sm-4 mb-3 hover-zoom">
                        <a href="{{route('page.training')}}">
                            <img src="img/bg/2.png" alt="" style="max-width: 280px;">
                        </a>
                    </div>
                    <div class="col-sm-4 mb-3 hover-zoom">
                        <a href="{{route('page.mentorship')}}">
                            <img src="img/bg/3.png" alt="" style="max-width: 280px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- jumbotron -->
@endsection