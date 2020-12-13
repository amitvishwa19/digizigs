
@extends('digilearn.layout.admin')

@section('title','Add Classes')


@section('style')



@endsection


@section('content')

<div class="content-body " id="contentbody">

  <div class="card">

    <div class="d-sm-flex align-items-right justify-content-between mg-b-5 mg-lg-b-5 mg-xl-b-5">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="{{route('digilearn.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('classes.index')}}">Classess</a></li>
            <li class="breadcrumb-item active" aria-current="page">Classes</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="">
      <h4>Add New Classes</h4>

      <div class="mg-t-50">
        <form method="post" action="{{route('classes.store')}}">
            @csrf

            <div class="form-group">
                <label class="d-block"><b>Class Name</b></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{old('name')}}">
                @error('name')
                    <span class="" role="alert">
                        <strong><i>{{ $message }}</i></strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label class="d-block"><b>Class Description</b></label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <label class="d-block">Class Status</label>
                <select name="status" class="form-control col-2">
                    <option value="enabled">Enabled</option>
                    <option value="disabled" selected>Disabled</option>
                </select>
            </div>


            <button class="btn btn-primary btn-xs" id="btnpublish">Save</button>
            <a href="{{route('classes.index')}}" class="btn btn-dark btn-xs">Cancel</a>


        </form>
      </div>

    </div>

  </div>

</div>

@endsection


@section('modal')



@endsection


@section('javascript')


  	<script>

  	</script>

@endsection
