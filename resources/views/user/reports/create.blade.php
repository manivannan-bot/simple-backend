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
            <label for="phone">@lang('Description')</label>
            <input type="text" class="form-control input-solid" id="description"
                   name="description" placeholder="@lang('Description')" value="{{ $edit ? $user->description : '' }}">
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
