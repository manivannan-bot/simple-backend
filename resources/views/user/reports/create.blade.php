<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="first_name">@lang('Title')</label>
            <input type="text" class="form-control input-solid" id="title"
                   name="title" placeholder="@lang('Title')" value="{{ $edit ? $user->title : '' }}">
        </div>
        <div class="form-group">
        <label for="last_name">@lang('Type')</label>
                <select class="form-control" name="type">
                    <option value="Event">Event</option>
                    <option value="AnnuualReport">Annual Report</option>
                    <option value="Publication">Publication</option>
                    <option value="StudyMaterial">Study Material</option>
                </select>
        </div>

    </div>

    <div class="col-md-8">
        
        <div class="form-group">
        <label for="description">@lang('Description')</label>
        <input id="description" type="hidden" name="description" value="{{ $edit ? $user->description : '' }}">
        <trix-editor input="description"></trix-editor>
    </div>


    
        <div class="form-group">
            <label class="form-label" for="customFile">@lang('Upload Banner')</label>
            <input type="file"  class="form-control" id="banner" name="banner"/>
         </div>
         <div class="form-group">
            <label class="form-label" for="customFile">@lang('Upload file')</label>
            <input type="file" class="form-control" id="customFile" name="customFile"/>
         </div>
       
    </div>

    @if ($edit)
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary" id="update-details-btn">
                <i class="fa fa-refresh"></i>
                @lang('Create Report')
            </button>
        </div>
    @else
        <div class="col-md-12 mt-2">
                <button type="submit" class="btn btn-primary" id="update-details-btn">
                    <i class="fa fa-refresh"></i>
                    @lang('Create Report')
                </button>
        </div>
    @endif
</div>

<script src="https://cdn.tiny.cloud/1/rvx7jjskysl6s4tjausn2v8kspszhoc6uw3ug969xk0ay4k4/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#description',
        height: 200,
        plugins: 'link lists',
        toolbar: 'bold italic | bullist numlist',
    });
</script>
