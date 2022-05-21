@extends('layout.base')
@section('banner')
@endsection
@section('content')
<div class="container pt-md-5 mb-5 pb-5">
    <h2 class="h2__underline" tabindex="0">Profile</h2>
    
    <h3 tabindex="0" class="mb-4">User Details</h3>
    <div style="max-width:400px;">
      <form class="ajax-form tab-form active" id="user-info" method="post">
      <div class="mb-3">
        <label for="formFile" class="form-label mb-3">Logo(Max Image Size : 1.5MB. Required Format : png/jpg/jpeg)</label>
        <div class="image-upload">
          <div class="dplay-tbl">
              <div class="dplay-tbl-cell">
                  <img class="max-h-200x rounded-circle mx-auto mb-5 uploaded-image user image_name" alt="" src="https://iLyrics.org/uploads/207644697_3647918891980076_4521274487918248114_n.jpg">
              </div>
          </div>

          <input data-action="user-image-action" type="file" class="ajax-img-upload" name="image_name">
      </div>
      </div>
    
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control mb-4" id="exampleFormControlInput1" placeholder="name@example.com">
        
        <label for="exampleFormControlInput2" class="form-label">Username</label>
        <input type="text" class="form-control mb-4" id="exampleFormControlInput2" placeholder="name@example.com">
        
        <div class="mb-5">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Female</label>
          </div>
    </div>
  </form>
        <button class="btn btn--primary btn--small" type="button">Update</button>
    
</div>
</div>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection