@extends('backend.layouts.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Entry</h5>
              @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                <li>{{$err}}</li>
                @endforeach

              </div>
              @endif
              

              <!-- General Form Elements -->
              <form method="post" action="{{route('product.update', $data->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name='name' class="form-control" value="{{$data->name ? $data->name : old('name')}}">
                  </div>
                </div>

              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" name='price' class="form-control" value="{{old('price',$data->price)}}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                      <select name="category" class="from-select" aria-label="Default selest example">
                      <option selected>Select a category </option>
                      @foreach ($cats as $cat)
                         <option value="{{$cat->id}}" @selected(old('category',$data->category_id) == $cat->id)>{{$cat->name}}</option>
                         @endforeach
                    </select>
                   
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label" >Description</label>
                  <div class="col-sm-10">
                    <textarea name='description' class="form-control quill-editor-full" rows="10" style="height: 100px">{{$data->description}}</textarea>
                  </div>
                </div>
                
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Product Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="availibility" id="gridRadios1" value="1" @checked(old('availibility', $data->availibility)==1)>
                      <label class="form-check-label" for="gridRadios1">
                        Available
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="availibility" id="gridRadios2" value="0" @checked(old('availibility', $data->availibility)==0)>
                      <label class="form-check-label" for="gridRadios2">
                       Not Available
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Tags</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" name="tags[]" type="checkbox" id="gridCheck1" value="wood" @checked(old('tags',in_array('wood', $data->tags))=='wood')>
                      <label class="form-check-label" for="gridCheck1">
                        Wood
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input"  name="tags[]" type="checkbox" id="gridCheck2"  value="board" @checked(old('tags',in_array('board', $data->tags))=='board')>
                      <label class="form-check-label" for="gridCheck2">
                        Board
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input"  name="tags[]" type="checkbox" id="gridCheck2"  value="glass" @checked(old('tags',in_array('glass', $data->tags))=='glass')>
                      <label class="form-check-label" for="gridCheck2">
                        Glass
                      </label>
                    </div>

                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Photo Upload</label>
                  <div class="col-sm-10">
                    <img src="{{asset('images/'. $data->image)}}" width="60px" height="70px" alt="">
                    <input class="form-control" type="file" name="photo" id="formFile">
                  </div>
                </div>
                

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Update Button</label>
                      <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update Form</button>
                 
                  </div>
                </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
    
@endsection