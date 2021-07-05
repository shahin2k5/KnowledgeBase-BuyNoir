{{-- @extends('frontend.layouts.master')

@section('title')
	{{$page->title}}
@endsection


@section('content')
	<div class="breadcrumb-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-12">
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
						</ol>
					</nav>
					<h2 class="breadcrumb-title">{{$page->title}}</h2>
				</div>
			</div>
		</div>
	</div>



	<div class="content" style="min-height: 183px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="terms-content">

						{!! $page->description !!}
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection
 --}}




@extends('frontend.layouts.master')

@section('title')
	{{$page->title}}
@endsection


@section('content')
			<div class="container">
				<div class="row">
                    <div class="col">
                        <div class="px-4 py-5 px-lg-5 bg-white">
                            <h3 class="mb-3 text-primary-dark"><b>{{$page->title}}</b></h3>
                            <div class="row align-items-center gx-2 mb-4">
                                <div class="col-auto">
                                    <div class="bg-primary text-white fw-bold text-center rounded-circle"
                                        style="width: 35px; height: 35px; line-height: 35px">P</div>
                                </div>
                                <div class="col">
									@php
										$user = \App\Models\User::find($page->user_id);
									@endphp
                                    <p class="m-0 small"><b>Written by   {{$user->name}} </b></p>
                                    <p class="m-0 small">Last updated: {{date('Y-m-d', strtotime($page->updated_at));}}</p>
                                </div>
                            </div>

                            <div class="content-details">
                                {!! $page->description !!}
                            </div>

                            <div class="vote-wrapper text-center p-4" style="background-color: #f3f5f7">
                                <p class="mb-2">Did this answer your question?</p>
                                <button class="btn" title="Disappointed">😞</button>
                                <button class="btn" title="Neutral">😐</button>
                                <button class="btn" title="Happy">😃</button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
@endsection