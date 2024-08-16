@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Featured 1 - Bootstrap Brain Component -->
        <div class="py-3 py-md-5 py-xl-8 bg-light">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12">
                        <h2 class="display-3 fw-bold mb-4">About</h2>
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 d-flex gap-3">
                                <p class="lead m-0">—</p>
                                <p class="lead text-secondary m-0">At our core, we prioritize pushing boundaries, embracing
                                    the unknown, and fostering a culture of continuous learning.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main -->
        <main id="main">

            <!-- About 4 - Bootstrap Brain Component -->
            <section class="py-3 py-md-5 py-xl-10">
                <div class="container">
                    <div class="row gy-3 gy-md-4 gy-lg-0">
                        <div class="col-12 col-lg-6">
                            <div class="card bg-accent-subtle border-accent-subtle p-3 m-0">
                                <div class="row gy-3 gy-md-0 align-items-md-center">
                                    <div class="col-md-5">
                                        <img src="{{ asset('assets/img/about/about-img-1.jpg') }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body p-0">
                                            <h2 class="card-title h4 mb-3">Why Choose Us?</h2>
                                            <p class="card-text">With years of experience and deep industry knowledge, we
                                                have a proven track record of success and are pushing ourselves to stay
                                                ahead of the curve.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card bg-primary-subtle border-primary-subtle p-3 m-0">
                                <div class="row gy-3 gy-md-0 align-items-md-center">
                                    <div class="col-md-5">
                                        <img src="{{ asset('assets/img/about/about-img-2.jpg') }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body p-0">
                                            <h2 class="card-title h4 mb-3">Visionary Team</h2>
                                            <p class="card-text">With a team of visionary engineers, developers, and
                                                creative minds, we embark on a journey to transform complex challenges into
                                                ingenious technological solutions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>
    </div>
@endsection
