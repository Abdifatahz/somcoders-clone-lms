@extends('layouts.frontend')

@section('content')
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center p-4">
                        <h2 class="fw-bolder text-muted">{{ $category->courses->count() }} courses found in <span
                                class="text-primary">{{ $category->name }}</span>
                            </p>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gx-5">

                @forelse($category->courses as $course)
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

                @empty
                    <h4 class="text-muted p-4">No Courses Found in this category</h4>
                @endforelse

            </div>
        </div>
    </section>
@endsection
