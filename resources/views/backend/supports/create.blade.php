@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('create') }}</h3>
    </div>
    <div class="block-content block-content-full">
        <form id="form-create" action="{{ route('backend.'.$routeNameData.'.store') }}" method="post">
            @csrf
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-block border" data-toggle="tabs" role="tablist">
                    @foreach($languageData as $language) 
                    <li class="nav-item">
                        <a class="nav-link" href="#btabs{{ $language->name }}">{{ $language->name }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="block-content tab-content border">
                    @foreach($languageData as $language) 
                    <div class="tab-pane" id="btabs{{ $language->name }}" role="tabpanel">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.name.*") }}</label>
                                <input type="text" name="name[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.name.*") }}">
                            </div>                                            
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">  
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.support_category_id") }}</label>
                            <select data-url="{{ route('backend.support_categories.select') }}" class="js-select2 form-control" name="support_category_id" data-placeholder="{{ __("backend.$routeNameData.support_category_id") }}">
                                <option></option>
                            </select>
                        </div>                                  
                        @foreach($support_files_type_data as $type) 
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <h2 class="content-heading  col-md-12">{{ $type->name }}</h2>
                            </div>    
                            <div class="form-row">
                                <div class="form-group col-md-12 text-right">
                                    <button type="button" class="add-btn btn btn-success mr-5 mb-5">
                                        <i class="fa fa-plus mr-5"></i>{{ __('add') }}
                                    </button>                                          
                                </div>
                            </div>                               
                            <div class="add form-row"> 
                                @foreach($languageData as $language) 
                                <div class="form-group col-md-2">
                                    <label>{{ __("backend.$routeNameData.support_files.*.name") }}({{ $language->name }})</label>
                                    <input type="text" name="support_files{{ $type->key }}[1][name][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.support_files.*.name") }}">
                                </div>  
                                @endforeach                            
                                <div class="form-group col-md-3">
                                    <label>{{ __("backend.$routeNameData.support_files.*.sort") }}</label>                                    
                                    <input type="text" name="support_files{{ $type->key }}[1][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                                </div>                                   
                                <div class="form-group col-md-4 filepond-dom">
                                    <label>{{ __("backend.$routeNameData.support_files.*.path") }}</label>                                    
                                    <fieldset class="image">                                
                                        <input type="file" name="support_files{{ $type->key }}[1][path]"/>    
                                    </fieldset>  
                                </div>  
                                <div class="form-group col-md-1 justify-content-center align-items-end d-none delete">
                                    <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                                        <i class="fa fa-times"></i>
                                    </button>    
                                </div>                                  
                            </div>                                                                                    
                        </div>      
                        @endforeach                                                 
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.sort") }}<span class="text-danger">*</span></label>
                            <input type="text" required name="sort" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                        </div>                    
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.status") }}<span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <label class="css-control css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" checked>
                                    <input type="hidden" required name="status" value="1">
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>         
                </div>       
            </div>
            <a href="{{ route('backend.'.$routeNameData.'.index') }}" class="btn btn-secondary">{{ __('back') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
        </form>
    </div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    var path = '{{ route('backend.'.$routeNameData.'.index') }}';
    var formCreate = $('#form-create');
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item))
    $(".nav-item a").eq(0).click();
    formCreate.ajaxForm({
        beforeSubmit: function(arr, $form, options) {
            formCreate.find('button[type=submit]').attr('disabled',true);
        },
        success: function(data) {
            Swal.fire({ text: data.message, icon: 'success' }).then(function() {
                location.href = path;
            });
        },
        complete: function() {
            formCreate.find('button[type=submit]').attr('disabled',false);
        }
    });
});
</script>
@endpush