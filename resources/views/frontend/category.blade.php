

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
                            <div class="px-4 py-5 px-lg-5" style="background-color: #ebeef1">
                                <div class="row align-items-center gx-lg-5">
                                    <div class="col-auto">
                                        <i class="list-group-item-icon fas fa-book-open ms-lg-5"></i>
                                    </div>
                                    <div class="col">
                                        <h3 class="mb-3 text-primary-dark">{{ $category->title }}</h3>
                                        <div class="row align-items-center gx-2">
                                            <div class="col-auto">
                                                <div class="bg-primary text-white fw-bold text-center rounded-circle"
                                                    style="width: 35px; height: 35px; line-height: 35px">P</div>
                                            </div>
                                            <div class="col">
                                                @php
                                                    $article_count = \App\Models\Article::where('status',1)->where('article_category_id', $category->id)->get();
                                                @endphp
                                                <p class="m-0 small">{{ count($article_count) }} articles in this collection</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="list-group mt-5">
                                    @foreach($articles as $article)
                                        <a href="{{ route('article', $article->slug) }}" class="list-group-item list-group-item-action px-4 px-lg-5 py-4">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="mb-1 text-primary-dark">{{ $article->title }}</h5>
                                                    <p class="mb-3">{!! substr($article->description,0,150) !!}...</p>
                                                    <div class="row align-items-center gx-2">
                                                        <div class="col-auto">
                                                            <div class="bg-primary text-white fw-bold text-center rounded-circle"
                                                                style="width: 35px; height: 35px; line-height: 35px">P</div>
                                                        </div>
                                                        <div class="col">
                                                            @php
                                                                $user = \App\Models\User::find($article->user_id);
                                                            @endphp

                                                            <p class="m-0 small">Written by {{ $user->name }}</p>
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