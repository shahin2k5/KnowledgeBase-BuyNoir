

@extends('frontend.layouts.master')

@section('title')
	BuyNoir Knowledge Base
@endsection


@section('content')
	<div class="container">
        <div class="row">
            <div class="col">
                <div class="list-group">
                    
                    @foreach($article_categories as $article_category)

                    @php
                        $article_count = \App\Models\Article::where('status',1)->where('article_category_id', $article_category->id)->get();
                    @endphp

                        <a href="{{ route('article_category', $article_category->slug) }}" class="list-group-item list-group-item-action px-4 px-lg-5 py-4 rounded-2 border-0">
                            <div class="row align-items-center gx-lg-5">
                                <div class="col-auto d-none d-lg-block"  style="">
                                    {{-- <i class="list-group-item-icon fas fa-book-open"></i> --}}
                                    <img src="{{ asset('assets/frontend/img/documentation_book.png') }}" alt="Documentation Image">      
                                </div>
                                <div class="col">
                                    <h5 class="mb-1" style="font-weight: bolder; color: #0ea1e2" >{{ $article_category->title }}</h5>
                                    <p  style="font-size: 16px;"class="mb-3">{{ $article_category->description }}</p>
                                    <div class="row align-items-center gx-2">
                                        <div class="col-auto">
                                            <div class="text-black fw-bold text-center rounded-circle" style="width: 35px; height: 35px; line-height: 35px; background-color: #ebf7fc;">P</div>
                                        </div>
                                        <div class="col">
                                            <p style="font-size: 16px;" class="m-0 small">{{ count($article_count) }} articles in this collection</p>
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
@endsection