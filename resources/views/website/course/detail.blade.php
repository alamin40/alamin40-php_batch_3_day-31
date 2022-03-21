@extends('master.front.master')
@section('title')
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <img src="{{asset($subject->image)}}" alt="" class=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$subject->title}}</h1>
                        <p>Course Fee: {{$subject->fee}}</p>
                        <hr/>
                        <h2>{{$subject->teacher->name}}</h2>
                        <img src="{{asset($subject->teacher->image)}}" alt="" height="200" width="200">
                        <hr/>
                        <div>
                            {!! $subject->short_description !!}
                        </div>

                        <a href="{{route('enroll-now', ['id' => $subject->id])}}" class="btn btn-outline-success w-25 mx-auto">Enroll Now</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <h1>Course Detail</h1>
                        <hr/>
                        <div>
                            {!! $subject->long_description !!}
                        </div>
                        <hr/>
                        <a href="" class="btn btn-outline-success w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
