@extends('admin.layouts.master')

@section('page_title')
    {{__('article.index.title')}}
@endsection

@push('css')
	<style>
		.table tr td{
			vertical-align: middle;
		}

	</style>
@endpush

@section('content')

    	<div class="content container-fluid">

	    	<div class="page-header">
	    		<div class="row">
			    	<div class="col-md-6 col-sm-12">
			    		<h3 class="page-title">
					        {{__('article.index.title')}}
					        {{ Breadcrumbs::render('articles.index') }}
					    </h3>
			    	</div>
			    	<div class="col-md-6 col-sm-12">
			    		
			    		@can('article-create')
			    			<a href="{{ route('articles.create') }}" class="create-button btn btn-outline-primary btn-rounded float-right"><i class="fe fe-plus"></i> {{__('article.form.add-button')}}</a>
			    		@endcan
			    	</div>
			    </div>
	    	</div>
		    <div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<table class="table table-hover table-center mb-0" id="table">
								<thead>
									<tr>
										<th class="">{{__('#')}}</th>
										<th class="">{{__('article.form.title')}}</th>
								
										<th class="">{{__('article.form.category')}}</th>
										<th class="">{{__('article.form.view')}}</th>
										<th class="">{{__('article.form.status')}}</th>
										<th class="">{{__('article.form.user_id')}}</th>

										@if(Gate::check('article-edit') || Gate::check('article-delete'))
											<th class="">{{__('article.form.action')}}</th>
										@endif 
									</tr>
								</thead>

								<tbody>
									
								</tbody>
								
							</table>
						</div>
					</div>
				</div>


				
		    </div>

		</div>


    </div>
	

@endsection




@push('scripts')

	<script>
		$(function() {


			$('#table').DataTable({
				processing	: true,
				responsive 	: false,
				serverSide	: true,
				order:       [[0, 'desc' ]],
				ajax 		: '{{ route('articles.index') }}',
				columns			: [
						{ data: 'DT_RowIndex', name: 'DT_RowIndex' },
				        { data: 'title', name: 'title' },
				     
				        { data: 'category', name: 'category' },	
				        { data: 'view', name: 'view' },	
				        { data: 'status', name: 'status' },	
				        { data:'user_id', name: 'user' },						        

						@if(Gate::check('article-edit') || Gate::check('article-delete'))
							{ data: 'action', name: 'action', orderable: false, searchable: false}
						@endif 
				    ],

			});
		});
    </script>
	<script type="text/javascript">
        $("body").on("click",".remove-article",function(){
            var current_object = $(this);
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "error",
                showCancelButton: true,
                dangerMode: true,
                cancelButtonClass: '#DD6B55',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Delete!',
            },function (result) {
                if (result) {
                    var action = current_object.attr('data-action');
                    var token = jQuery('meta[name="csrf-token"]').attr('content');
                    var id = current_object.attr('data-id');

                    $('body').html("<form class='form-inline remove-form' method='POST' action='"+action+"'></form>");
                    $('body').find('.remove-form').append('<input name="_method" type="hidden" value="post">');
                    $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
                    $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
                    $('body').find('.remove-form').submit();
                }
            });
        });
	</script>


	<script type="text/javascript">
		function changearticlestatus(_this, id) {
		    var status = $(_this).prop('checked') == true ? 1 : 0;
		    let _token = $('meta[name="csrf-token"]').attr('content');

		    $.ajax({
		        url: `{{route('articles.status_update')}}`,
		        type: 'get',
		        data: {
		            _token: _token,
		            id: id,
		            status: status 
		        },
		        success: function (result) {
		        	$(".msg").html('<div class="alert alert-success bg-success alert-dismissible text-white border-0 fade show" role="alert"><span>Status Updated</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		        }
		    });
		}
	</script>
@endpush