@extends('admin.layouts.master')

@section('page_title')
    {{__('setting.edit.title')}}
@endsection

@push('css')
	<style>
		#website_logo_output{
			height: 60px;
		}
		#favicon_output{
			height: 60px;
		}
		.tab-content{
			padding-top: 0;
		}
		.select2-container{
			width: 100% !important;
		}

	</style>
@endpush

@section('content')

    <div class="content container-fluid">

    	<form method="post" action="{{ route('settings.site-setting.update', 1) }}" enctype="multipart/form-data" id="setting_create_form">
    		@csrf()
	    	<div class="page-header">
	    		<div class="row">
			    	<div class="col-6">
			    		<h3 class="page-title">
			    			{{-- <a href="{{ route('settings.index') }}"><i class="fe fe-arrow-left"></i></a> --}}
					        {{__('setting.edit.title')}}
        					{{-- {{ Breadcrumbs::render('settings.site-setti.edit') }} --}}
					    </h3>

			    	</div>
			    	<div class="col-6">
			    		<button type="submit" class="save-button btn btn-outline-success btn-rounded float-right">
			    			<i class="fe fe-document"></i> 
			    			{{__('setting.form.save-button')}}
			    		</button>
			    	</div>
			    </div>
	    	</div>

	    	<div class="card-body">


    			<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="website-tab" data-toggle="tab" href="#website" role="tab" aria-controls="website" aria-selected="true">Website Setting</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO Setting</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Setting</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
					</li>
				</ul>
				
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="website" role="tabpanel" aria-labelledby="website-tab">
	    				<div class="card">
							<div class="card-header">
							    <h5 class="card-title">
							    	Website Setting
							    </h5>
							</div>
					      
					        <div class="card-body">
										
										
								<div class="form-group">
									<label for="title" class="required">{{__('setting.form.title')}}:</label>

									<input type="text" name="title" id="title" class="form-control @error('title') form-control-error @enderror" required="required" value="{{$setting->title}}">

									@error('title')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>

								<div class="row">
									
								

									<div class="col-md-4">
										<div class="card">
											<div class="card-body text-center">
												<div class="form-group">
													<label for="logo" class="required">{{__('setting.form.logo')}}:</label>

													<div class="">
								            	
										            	@if(!empty($setting->logo))
										            		<img src="{{ $setting->logo }}" alt="..." id="logo_output" class="img-thumbnail rounded mb-3"  onerror="this.src='{{ asset('assets/admin/img/logo.svg') }}';">
										            	@else
										            		<img src="" alt="..." id="logo_output" class="img-thumbnail rounded mb-3" onerror="this.src='{{ asset('assets/admin/img/logo.svg') }}';">
										            	@endif

										                <input type="text" hidden id="logo" class="form-control" name="logo" aria-label="Website Logo" aria-describedby="logo_button_image">
										                <div class="" style="width: 100%;">
										                    <button class="btn btn-secondary" type="button" id="logo_button_image">
										                    <i data-feather="image" class="feather-icon"></i>
										                    Change Logo Image
										                 	</button>
										                </div>
										            </div>
												</div>
											</div>
										</div>
									</div>
									
								

									<div class="col-md-4">
										<div class="card">
											<div class="card-body text-center">
												<div class="form-group">
													<label for="logo_white" class="required">{{__('setting.form.logo_white')}}:</label>

													<div class="">
								            	
										            	@if(!empty($setting->logo_white))
										            		<img src="{{ $setting->logo_white }}" alt="..." id="logo_output" class="img-thumbnail rounded mb-3"  onerror="this.src='{{ asset('assets/admin/img/logo_white.png') }}';">
										            	@else
										            		<img src="" alt="..." id="logo_output" class="img-thumbnail rounded mb-3" onerror="this.src='{{ asset('assets/admin/img/logo-white.svg') }}';">
										            	@endif

										                <input type="text" hidden id="logo_white" class="form-control" name="logo_white" aria-label="Website Logo" aria-describedby="logo_button_image">
										                <div class="" style="width: 100%;">
										                    <button class="btn btn-secondary" type="button" id="logo_button_image">
										                    <i data-feather="image" class="feather-icon"></i>
										                    Change Logo White Image
										                 	</button>
										                </div>
										            </div>
												</div>
											</div>
										</div>
									</div>
										
											
									<div class="col-md-4">
										<div class="card">
											<div class="card-body text-center">
												<div class="form-group">
													<label for="title" class="required">{{__('setting.form.favicon')}}:</label>

													<div class="">
								            	
										            	@if(!empty($setting->favicon))
										            		<img src="{{ $setting->favicon }}" alt="..." id="favicon_output" class="img-thumbnail rounded mb-3"  onerror="this.src='{{ asset('assets/admin/img/favicon.png') }}';">
										            	@else
										            		<img src="" alt="..." id="favicon_output" class="img-thumbnail rounded mb-3" onerror="this.src='{{ asset('assets/admin/img/favicon.png') }}';">
										            	@endif

										                <input type="text" hidden id="favicon" class="form-control" name="favicon" aria-label="Website Logo" aria-describedby="favicon_button_image">
										                <div class="" style="width: 100%;">
										                    <button class="btn btn-secondary" type="button" id="favicon_button_image">
										                    <i data-feather="image" class="feather-icon"></i>
										                    Change Favicon Image
										                 	</button>
										                </div>
										            </div>
												</div>
											</div>
										</div>
									</div>

								</div>




					        </div>
					    </div>
					</div>

					<div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
	    				<div class="card">
							<div class="card-header">
							    <h5 class="card-title">
							    	SEO Setting
							    </h5>
							</div>
					      
					        <div class="card-body">
										
										
								<div class="form-group">
									<label for="meta_title">{{__('setting.form.meta_title')}}:</label>

									<input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title') form-control-error @enderror" value="{{$setting->meta_title}}">

									@error('meta_title')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
										
								<div class="form-group">
									<label for="meta_description">{{__('setting.form.meta_description')}}:</label>

									<textarea name="meta_description" id="meta_description" class="form-control @error('meta_description') form-control-error @enderror">{{$setting->meta_description}}</textarea> 

									@error('meta_description')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
										
								<div class="form-group">
									<label for="meta_tag">{{__('setting.form.meta_tag')}}:</label>

									<input type="text" name="meta_tag" id="meta_tag" class="form-control @error('meta_tag') form-control-error @enderror" value="{{$setting->meta_tag}}">

									@error('meta_tag')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>


					        </div>
					    </div>
					</div>

					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	    				<div class="card">
							<div class="card-header">
							    <h5 class="card-title">
							    	Contact Setting
							    </h5>
							</div>
					      
					        <div class="card-body">
										
										
								<div class="form-group">
									<label for="address">{{__('setting.form.address')}}:</label>

									<textarea name="address" id="address" class="form-control @error('address') form-control-error @enderror">{{$setting->address}}</textarea>

									@error('address')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
								<div class="form-group">
									<label for="phone">{{__('setting.form.phone')}}:</label>

									<input type="text" name="phone" id="phone" class="form-control @error('phone') form-control-error @enderror" value="{{$setting->phone}}">

									@error('phone')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
								<div class="form-group">
									<label for="email">{{__('setting.form.email')}}:</label>

									<input type="text" name="email" id="email" class="form-control @error('email') form-control-error @enderror" value="{{$setting->email}}">

									@error('email')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>

					        </div>
					    </div>
					</div>

					<div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
	    				<div class="card">
							<div class="card-header">
							    <h5 class="card-title">
							    	Social Media
							    </h5>
							</div>
					      
					        <div class="card-body">
										
										
								<div class="form-group">
									<label for="facebook">{{__('setting.form.facebook')}}:</label>

									<input type="text" name="facebook" id="facebook" class="form-control @error('facebook') form-control-error @enderror" value="{{$setting->facebook}}">

									@error('facebook')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
								<div class="form-group">
									<label for="twitter">{{__('setting.form.twitter')}}:</label>

									<input type="text" name="twitter" id="twitter" class="form-control @error('twitter') form-control-error @enderror" value="{{$setting->twitter}}">

									@error('twitter')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
								<div class="form-group">
									<label for="linkedin">{{__('setting.form.linkedin')}}:</label>

									<input type="text" name="linkedin" id="linkedin" class="form-control @error('linkedin') form-control-error @enderror" value="{{$setting->linkedin}}">

									@error('linkedin')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>
										
								<div class="form-group">
									<label for="instagram">{{__('setting.form.instagram')}}:</label>

									<input type="text" name="instagram" id="instagram" class="form-control @error('instagram') form-control-error @enderror" value="{{$setting->instagram}}">

									@error('instagram')
										<span class="text-danger">{{ $message }}</span>
									@enderror

								</div>

					        </div>
					    </div>
					</div>


				</div>
					       
				 
			</div>
			
		</form>

    </div>
	

@endsection


@push('scripts')

	<script>
	  document.addEventListener("DOMContentLoaded", function() {

	    document.getElementById('logo_button_image').addEventListener('click', (event) => {
	      event.preventDefault();

	      inputId = 'logo';
	      output = 'logo_output';

	      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
	    });

	    document.getElementById('website_logo_light_button_image').addEventListener('click', (event) => {
	      event.preventDefault();

	      inputId = 'website_logo_light';
	      output = 'website_logo_light_output';

	      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
	    });

	    document.getElementById('website_logo_small_button_image').addEventListener('click', (event) => {
	      event.preventDefault();

	      inputId = 'website_logo_small';
	      output = 'website_logo_small_output';

	      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
	    });



	    document.getElementById('favicon_button_image').addEventListener('click', (event) => {
	      event.preventDefault();

	      inputId = 'favicon';
	      output = 'favicon_output';

	      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
	    });

	  });

	  // input
	  let inputId = '';
	  let output = '';

	  // set file link
	  function fmSetLink($url) {
	    document.getElementById(inputId).value = $url;
	    document.getElementById(output).src = $url;
	  }
	</script>


@endpush