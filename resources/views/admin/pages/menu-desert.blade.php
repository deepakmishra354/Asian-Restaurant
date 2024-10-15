@extends('admin.main-layout')
@section('content')

<div class="main-content" style="min-height: 512px;">
  <section class="section">
    <div class="section-body">
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <ul style="color:red">
            <li>{{ $error }}</li>
          </ul>
        @endforeach
      @endif
      <div class="form-modal-wrapper" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);">
        <form action="{{ route('submit-menu-desert') }}" method="post" enctype="multipart/form-data">
          @csrf 

          <div class="form-group">
            <label>Upload Menu image</label>
            <input type="file" class="form-control" name="menu_image">
          </div>

          <div class="form-group">
            <label>Enter Menu Title</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Course Title" name="menu_title">
            </div>
          </div>

          <div class="form-group">
            <label>Enter Menu Price</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Course Price" name="menu_price">
            </div>
          </div>

          <div class="form-group">
            <label>Enter Menu Description</label>
            <div class="input-group">
              <textarea class="form-control" placeholder="Enter Course Description" name="menu_description"></textarea>
            </div>
          </div>

          <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-danger" type="reset">Reset</button>
          </div>
        </form>
      </div>

    </div>
  </section>
</div>

@endsection
