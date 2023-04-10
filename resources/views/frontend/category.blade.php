

@extends('frontend.layouts.master')

@section('title')
	{{ $category->title }}
@endsection


@section('content')
	<div class="container">
        <div class="row">
            <div class="col">
                <div class="list-group">

                    <div class="row">
                        <div class="col">
                            <div class="px-4 py-5 px-lg-5" style="background-color: #ffffff">
                                <div class="row align-items-center gx-lg-5">
                                    <div class="col-auto">
                                        {{-- <i class="list-group-item-icon fas fa-book-open ms-lg-5"></i> --}}
                                        <img src="{{ asset('assets/frontend/img/documentation_book.png') }}" alt="Documentation Image">      
                                    </div>
                                    <div class="col">
                                        <h3 class="mb-3" style="font-weight: bolder; color: #0ea1e2" >{{ $category->title }}</h3>
                                        <p style="font-size: 16px;" class="mb-3">{{ $category->description }}</p>
                                        <div class="row align-items-center gx-2">
                                            <div class="col-auto">
                                                <div class="text-black fw-bold text-center rounded-circle"
                                                    style="width: 35px; height: 35px; line-height: 35px; background-color: #ebf7fc;">P</div>
                                            </div>
                                            <div class="col">
                                                @php
                                                    $article_count = \App\Models\Article::where('status',1)->where('article_category_id', $category->id)->get();
                                                @endphp
                                                <p class="m-0 small" style="font-size: 16px;">{{ count($article_count) }} articles in this collection</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="list-group mt-5">
                                    @foreach($articles as $article)
                                        <a href="{{ route('article', $article->slug) }}" style="background-color: #faf8f8" class="list-group-item list-group-item-action px-4 px-lg-5 py-4 rounded-2 border-0">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="mb-1" style="color: #0ea1e2; font-weight: 600; font-size: 18px">{{ $article->title }}</h5>
                                                    <!-- <p class="mb-3">{!! substr($article->description,0,150) !!}...</p> -->
                                                    <div class="row align-items-center gx-2">
                                                        <div class="col-auto">
                                                            <div class="text-black fw-bold text-center rounded-circle"
                                                                style="width: 35px; height: 35px; line-height: 35px; background-color: #ebf7fc;">P</div>
                                                        </div>
                                                        <div class="col">
                                                            @php
                                                                $user = \App\Models\User::find($article->user_id);
                                                            @endphp

                                                            <p class="m-0 small" style="font-size: 16px;">Written by {{ $user->name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                    
                    

                </div>
            </div>
        </div>
    </div>
@endsection