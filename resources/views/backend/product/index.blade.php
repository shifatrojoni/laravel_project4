@extends('backend.layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td><img src="{{'images/'.$item->image}}" width="100px" alt=""></td>
                    <td>{{$item->category->name ?? 'N/A'}}</td>
                    <td>
                     {{-- {{ implode(",",$item->tags) }} --}}
                    <ul>
                      @foreach($item->tags as $tag) 
                            <li> {{$tag}}</li>
                      @endforeach
                    </ul>
                    </td>
                    <td>{!!$item->description!!}</td>
                    <td>
                        <a href="/product/edit/{{$item['id']}}" class="btn btn-primary btn-sm" >Edit</a>
                        
                        <a href="/product/delete/{{$item['id']}}" class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        {{-- <a href="{{route}}">Delete</a> --}}
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main --> 
@endsection