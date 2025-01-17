@extends('layouts.app')
@section('content')
    <!-- Featured 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-8 bg-light">
        <div class="container">
            <div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
                <div class="col-12 col-lg-7 order-1 order-lg-0">
                    <div class="entry-header mb-3">
                        <ul class="entry-meta list-unstyled d-flex mb-3 ">
                            <li>
                                <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7 me-4"
                                    href="#!">{{ $article->category->name }} Article</a>
                            </li>
                            <li>
                                <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis  bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7 me-4"
                                    href="{{ route('articles.edit', $article) }}">Edit Article</a>
                            </li>
                            <li>
                                <form action="{{ route('articles.destroy', $article) }}" method="POST">
                                    @csrf

                                    @method('DELETE')
                                    <button type=" submit"
                                        onclick="return confirm('Are you sure you want to delete this article?')"
                                        class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-danger border border-accent-subtle rounded-2 text-decoration-none fs-7 text-danger">Delete
                                        Article</button>
                                </form>

                            </li>
                        </ul>
                        <h2 class="display-3 fw-bold mb-4">{{ $article->title }}</h2>
                    </div>
                    <div class="entry-footer">
                        <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                            <li>
                                <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center"
                                    href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path
                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path
                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <span class="ms-2 fs-7">{{ $article->created_at }}</span>
                                </a>
                            </li>
                            <li>
                                <span class="px-3">&bull;</span>
                            </li>
                            <li>
                                <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        <path
                                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                    </svg>
                                    <span class="ms-2 fs-7">{{ $article->user->name }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <a class="d-block bsb-hover-image overflow-hidden rounded" href="#!">
                        <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                            src="{{ asset('storage/' . $article->image) }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main -->
    <main id="main">

        <!-- Entry Content Bootstrap Brain Component -->
        <section class="py-3 py-md-5 py-xl-10">
            <div class="container">
                <div class="row justify-content-md-center gy-3 gy-xl-4">


                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 gy-3 gy-xl-4 bsb-entry-content">

                        <figure
                            class="text-accent-emphasis bg-accent-subtle border-start border-5 border-accent rounded-2 p-3">
                            <blockquote class="blockquote mb-3">
                                <p class="m-0">"{{ $article->content }}"</p>
                            </blockquote>
                            <figcaption class="blockquote-footer m-0">
                                <cite title="Charlotte Johnson">{{ $article->title }}</cite>
                            </figcaption>
                        </figure>

                    </div>
                </div>
            </div>
        </section>

        <!-- Entry Meta -->
        <div class="pb-3 pb-md-5 pb-xl-10">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                        <span class="me-1 fw-bold">Tags:</span>
                        <ul class="entry-meta list-unstyled d-inline-flex align-items-center justify-content-center mb-3">

                            <li>
                                @foreach ($article->tags as $tag)
                                    <a class="link-secondary text-decoration-none" href="#!">{{ $tag->name }}</a>
                                    @if ($loop->last)
                                        <span class="pe-2 text-secondary">.</span>
                                    @else
                                        <span class="pe-2 text-secondary">,</span>
                                    @endif
                                @endforeach

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <!-- Author 2 - Bootstrap Brain Component -->
        <section class="bsb-author-2 py-3 py-md-5 py-xl-10 bsb-section-py-xxl-1X">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
                        <div class="card border-light-subtle p-4">
                            <div class="row gy-3 align-items-center">
                                <div class="col-md-4">
                                    <a href="#!" class="bsb-hover-image d-block rounded overflow-hidden">
                                        <img class="img-fluid author-avatar bsb-scale bsb-hover-scale-up" loading="lazy"
                                            src="./assets/img/single/author-img-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-body-secondary">Article written by</h6>
                                        <h3 class="card-title mb-2">
                                            <a class="card-link link-dark text-decoration-none"
                                                href="#!">{{ $article->user->name }}</a>
                                        </h3>

                                        <ul class="bsb-social-media nav m-0">
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                        fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog 5 - Bootstrap Brain Component -->
        <section class="bsb-blog-5 py-3 py-md-5 py-xl-8 bsb-section-py-xxl-1X bg-light">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12">
                        <h2 class="h4 mb-4 mb-md-5 text-center">Related Articles</h2>
                    </div>
                </div>
            </div>

            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-5 gx-xl-6 gy-xl-6 gx-xxl-9 gy-xxl-9">
                    @forelse ($relatedArticles as $relatedArticle)
                        <div class="col-12 col-lg-4">
                            <article>
                                <div class="card border-0 bg-transparent">
                                    <figure class="card-img-top mb-4 overflow-hidden bsb-overlay-hover">
                                        <a href="#!">
                                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                                src="{{ asset('storage/' . $relatedArticle->image) }}" alt="">
                                        </a>
                                        <figcaption>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                            <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body m-0 p-0">
                                        <div class="entry-header mb-3">
                                            <ul class="entry-meta list-unstyled d-flex mb-3">
                                                <li>
                                                    <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                                                        href="#!">{{ $relatedArticle->category->name }}</a>
                                                </li>
                                            </ul>
                                            <h2 class="card-title entry-title h4 m-0">
                                                <a class="link-dark text-decoration-none"
                                                    href="#!">{{ $relatedArticle->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent p-0 m-0">
                                        <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                                            <li>
                                                <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center"
                                                    href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                        <path
                                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                    </svg>
                                                    <span class="ms-2 fs-7">{{ $relatedArticle->created_at }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <span class="px-3">&bull;</span>
                                            </li>
                                            <li>
                                                <a class="link-secondary text-decoration-none d-flex align-items-center"
                                                    href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                        <path
                                                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                                    </svg>
                                                    <span class="ms-2 fs-7">{{ $relatedArticle->user->name }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                    @empty
                        <div class="row justify-content-center m-5">
                            <div class="col-12 col
                    -md-10 col-lg-8 col-xl-7 col-xxl-6">
                                <div class="alert alert-info text-center" role="alert">
                                    No related article found.
                                </div>
                            </div>
                        </div>
                    @endforelse


                </div>
            </div>
        </section>



    </main>
@endsection
