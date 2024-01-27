@extends('backend.layouts.app')
  
@section('content')
<main id="main" class="main">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Brand</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('brands.index') }}"> Back</a>
        </div>
    </div>
</div>
   
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{$brand->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                {{$brand->discription}}
            </div>
        </div>
        
    </div>
</main>

@endsection