@extends('master.front.master')

@section('title')
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header fw-bolder text-center">Enroll Form</div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <label class="col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <label class="col-md-3">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Confirm Enroll">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
