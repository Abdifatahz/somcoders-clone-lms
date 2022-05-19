@extends('layouts.frontend')

@section('content')
    <main class="flex-shrink-0">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5">

                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">{{ $course->title }}</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">{{ $course->created_at }}</div>
                                <!-- Post categories-->
                                @foreach ($course->categories as $category)
                                    <a class="badge bg-secondary text-decoration-none link-light"
                                        href="#!">{{ $category->name }}</a>
                                @endforeach
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="https://picsum.photos/id/1{{ $course->id }}/900/400" alt="..." /></figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">{{ $course->description }}</p>
                            </section>
                        </article>
                        <!-- Comments section-->
                        <section>
                            <div class="card bg-light">
                                @forelse ($course->lessons as $lesson)
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="heading{{ $lesson->id }}"><button
                                                    class="accordion-button bg-dark text-light collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $lesson->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="collapse{{ $lesson->id }}">{{ $lesson->title }}
                                                    <i class="mx-2">({{ $lesson->children->count() }}
                                                        videos)</i>
                                                </button>
                                            </h3>
                                            <div class="accordion-collapse collapse show" id="collapse{{ $lesson->id }}"
                                                aria-labelledby="heading{{ $lesson->id }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body p-0">
                                                    @forelse ($lesson->children as $child)
                                                        <ul class="list-group m-0 p-1">
                                                            <a href="#" class="text-decoration-none">
                                                                <li class="list-group-item p-2">
                                                                    <i class="bi bi-play-circle text-primary"></i>
                                                                    {{ $child->title }}
                                                                    @if (!$child->is_free)
                                                                        <i class="float-end bi bi-lock"></i>
                                                                    @endif
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    @empty
                                                        <p class="p-2">No Videos Found</p>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="p-2">No Lessons Found</p>
                                @endforelse
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4">
                        <br>
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">
                                    {{ $course->price > 0 ? 'Paid' : 'FREE' }}</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">${{ $course->price }}</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-watch text-primary"></i>
                                        <strong>{{ $course->duration }} Hours</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-list text-primary"></i>
                                        {{ 44 }} Lessons
                                    </li>

                                    <li class="text-muted">
                                        <i class="bi bi-laptop"></i>
                                        Project based
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Enroll</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
