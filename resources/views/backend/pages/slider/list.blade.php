@extends('backend.master')
@section('title') Dashboard || Slider @endsection
@section('content')
<div class="col-md-12">
    @include('backend.partials._flash')
    <div class="tile">
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addSlider">Add Slider</button>
      <h3 class="tile-title">Slider List</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>S.I</th>
              <th>Slider Image</th>
              <th>Product LInk</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($sliders)>0)
                @foreach($sliders as $slider)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><img src="{{asset('uploads/sliders/'.$slider->slider_image)}}" width="80px" alt="{{$slider->product_link}}"></td>
                    <td id="product_link">{{$slider->product_link}}</td>
                    <td>{{ $slider->status == 0 ? "Deactive" : "Active" }}</td>
                    <td>
                        <button class="btn btn-info" onclick="sliderEditModal('{{$slider->id}}','{{$slider->slider_image}}','{{$slider->product_link}}')">Edit</button>

                        <a href="{{route('backend.slider.delete',['slider_id'=> $slider->id])}}" class="btn btn-danger delete-confirm">Delete</a
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="5" class="field-empty">Your Slider Table Field is Empty!!</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('modals')
@include('backend.pages.slider.modals.slider_add')
@include('backend.pages.slider.modals.slider_edit')
@endsection
@section('custom_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
      function sliderEditModal(slider_id,slider_image,product_link){
          $('#editSlider').modal('show');
          $('#slider_id').val(slider_id);
          $('#old_slider_image').prop('src',"/uploads/sliders/"+slider_image);
          $('#editSliderProductLink').val(product_link);
      }
      $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
  </script>
@endsection
@section('custom_styles')
<style>
    .field-empty{
    text-align:center;
    font-size: 18px ;
    color:red;
}
</style>
@endsection
