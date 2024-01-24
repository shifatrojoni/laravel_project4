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
                    <th>id</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cats as $cat)
                        <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>
                        <a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('category.delete', $cat->id)}}" class="btn btn-secondary btn-sm">Delete</a>
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