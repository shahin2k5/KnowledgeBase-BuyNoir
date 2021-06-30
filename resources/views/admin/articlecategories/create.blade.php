@extends('admin.layouts.master')

@section('page_title')
    {{__('articlecategory.create.title')}}
@endsection

@push('css')
	<style>
		#output{
			width: 100%;
		}

	</style>
@endpush

@section('content')

    <div class="content container-fluid">

    	<form method="post" action="{{ route('articlecategories.store') }}" enctype="multipart/form-data" id="articlecategory_create_form">
    		@csrf()
	    	<div class="page-header">
	    		<div class="row">
			    	<div class="col-6">
			    		<h3 class="page-title">
			    			<a href="{{ route('articlecategories.index') }}"><i class="fe fe-arrow-left"></i></a>
					        {{__('articlecategory.create.title')}}
        					{{ Breadcrumbs::render('articlecategories.create') }}
					    </h3>

			    	</div>
			    	<div class="col-6">
			    		<button type="submit" class="save-button btn btn-outline-success btn-rounded float-right">
			    			<i class="fe fe-document"></i> 
			    			{{__('articlecategory.form.save-button')}}
			    		</button>
			    	</div>
			    </div>
	    	</div>

	    	<div class="card-body">

	    		<div class="row">
	    			<div class="col-md-12">
	    				<div class="card">
							<div class="card-header">
							    <h5 class="card-title">
							    	Page Information
							    </h5>
							</div>
					      
					        <div class="card-body">

					        	<div class="row">
					        		<div class="col-md-12">
					        			<div class="form-group">
											<label for="title" class="required">{{__('articlecategory.form.title')}}:</label>

											<input type="text" name="title" id="title" class="form-control @error('title') form-control-error @enderror" required="required" value="{{old('title')}}">

											@error('title')
												<span class="text-danger">{{ $message }}</span>
											@enderror

										</div>


										<div class="form-group">
											<label for="slug" class="required">{{__("articlecategory.form.slug")}}:</label>

											<input type="text" name="slug" id="slug" class="form-control @error('slug') form-control-error @enderror" required="required" value="{{old('slug')}}">

											@error('slug')
												<span class="text-danger">{{ $message }}</span>
											@enderror
											
										</div>


										<div class="form-group">
											<label for="description" class="required">{{__("articlecategory.form.description")}}:</label>

											<textarea name="description" id="description" class="form-control @error('description') form-control-error @enderror" required="required" style="height: 80vh">{{old('description')}}</textarea>

											@error('description')
												<span class="text-danger">{{ $message }}</span>
											@enderror
											
										</div>


										<div class="form-group">
											<label for="status" class="required">{{__("articlecategory.form.status")}}:</label>

											<select type="text" name="status" id="status" class="form-control @error('status') form-control-error @enderror" required="required">
												<option value="1">Active</option>
												<option value="0">Inactive</option>
											</select>

											@error('status')
												<span class="text-danger">{{ $message }}</span>
											@enderror
											
										</div>
					        		</div>
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
		$("#articlecategory_create_form").validate();
	</script>


	{{-- <script>
	  document.addEventListener("DOMContentLoaded", function() {

	    document.getElementById('button-image').addEventListener('click', (event) => {
	      event.preventDefault();

	      inputId = 'image1';

	      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
	    });

	  });

	  // input
	  let inputId = '';
	  let output = 'output';

	  // set file link
	  function fmSetLink($url) {
	    document.getElementById(inputId).value = $url;
	    document.getElementById(output).src = $url;
	  }
	</script> --}}



	{{-- <script>
		tinymce.init({
	      selector: '#description',

	      plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

	      file_picker_callback (callback, value, meta) {
	        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
	        let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

	        tinymce.activeEditor.windowManager.openUrl({
	          url : '/file-manager/tinymce5',
	          title : 'File manager',
	          width : x * 0.8,
	          height : y * 0.8,
	          onMessage: (api, message) => {
	            callback(message.content, { text: message.text })
	          }
	        })
	      }
	    });

    </script> --}}
@endpush