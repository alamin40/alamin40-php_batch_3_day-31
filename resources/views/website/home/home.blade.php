@extends('master.front.master')

@section('body')

    <section class="notice-section py-5">
        <div class="container">
            <div class="carousel slide h-50" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body rounded-0 h-250">
                            <h3 class="card-title">Notice title</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda consequatur dicta ducimus eligendi excepturi id, ipsa laboriosam laborum magnam molestias neque officia qui quos reiciendis repellendus repudiandae sapiente soluta.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus error explicabo magnam mollitia nisi numquam optio possimus soluta tempora voluptatum. Asperiores ea explicabo harum quibusdam!</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card card-body h-250">
                            <h3 class="card-title">Adipisicing elit. Doloribus</h3>
                            <hr/>
                            <p class="card-text">Consectetur adipisicing elit.que officia qui quos reiciendis repellendus repudiandae sapiente soluta.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus error explicabo magnam mollitia nisi numquam optio possimus soluta tempora voluptatum. Asperiores ea explicabo harum quibusdam!</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card card-body h-250">
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, reiciendis.</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda consequatur dicta ducimus eligendi excepturi id, ipsa laboriosam laborum magnam molestias neque officia qui quos reiciendis repellendus repudiandae sapiente soluta.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus error explicabo magnam mollitia nisi numquam optio possimus soluta tempora voluptatum. Asperiores ea explicabo harum quibusdam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset($subject->image)}}" class="img-fluid h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>{{$subject->title}}</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                {{$subject->teacher->name}}
                                            </figcaption>
                                        </figure>
                                    </h5>
                                    <div>{!! $subject->short_description !!}</div>
                                    <p class="card-text"><small class="text-muted">Started Date: 05/05/22</small></p>
                                    <a href="{{route('course-detail', ['id' => $subject->id])}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" placeholder="Enter Your Email Here" class="form-control" />
                            </div>
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
