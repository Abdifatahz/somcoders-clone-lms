@extends('layouts.frontend')

@section('content')
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="h5">500 users</h2>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-building"></i></div>
                            <h2 class="h5">10 Courses</h2>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">7372 Lessons</h2>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">43747 Stats</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Courses</h2>
                        <p class="lead fw-normal text-muted mb-5">Most popular courses</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">

                @foreach ($courses as $course)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://picsum.photos/id/1{{ $course->id }}/600/350"
                                alt="..." />
                            <div class="card-body p-4">
                                @foreach ($course->categories as $category)
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $category->name }}
                                    </div>
                                @endforeach

                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">{{ \Str::limit($course->title, 50) }}</h5>
                                </a>
                                <p class="card-text mb-0">{{ \Str::limit($course->description, 80) }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex justify-content-between">
                                    <div class="fw-bold text-secondary">{{ $course->duration }}
                                        Hours</div>
                                    <div class="small">
                                        <div class="fw-bold text-secondary">23 Lessons</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <br>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Categories</h2>
                        <p class="lead fw-normal text-muted mb-5">Most popular Categories</p>
                    </div>
                </div>
            </div>

            <div class="row gx-5">

                @foreach ($categories as $category)
                    <div class="col-lg-4 mb-5">
                        <div class="card shadow border-0">
                            <div class="card-body p-4 d-flex justify-content-center">
                                <a class="text-decoration-none text-primary stretched-link" href="#!">
                                    <h5 class="card-title">{{ $category->name }} <b
                                            class="text-secondary">({{ $category->courses_count }})</b>
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div
                    class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                    <div class="mb-4 mb-xl-0">
                        <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                        <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                    </div>
                    <div class="ms-xl-4">
                        <div class="input-group mb-2">
                            <input class="form-control" type="text" placeholder="Email address..."
                                aria-label="Email address..." aria-describedby="button-newsletter" />
                            <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign
                                up</button>
                        </div>
                        <div class="small text-white-50">We care about privacy, and will never share your data.
                        </div>
                    </div>
                </div>
            </aside>
        </div> --}}
    </section>
@endsection
