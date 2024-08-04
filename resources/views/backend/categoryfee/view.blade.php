
 @extends('backend.layouts.master')
 @section('main_content')
 <div class="content-wrapper">

        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <section class="content">
          <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                   <div class="card">
                     @if (session('success') )
                        <span class="alert alert-info">{{ session('success') }}</span>
                     @endif
                      <div class="card-header">
                          <h2>Category Manages
                             <a href="{{route('categoryfee.add')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle">Add Category Fee</i></a>
                          </h2>
                      </div>
                      <div class="card-body">
                         <table id="example1" class="table table-bordered table-hover">
                             <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                                @foreach ($category as $index => $category)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $category->categoryfee }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"href="{{route('categoryfee.edit',$category->id) }}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger"href="{{route('categoryfee.delete',$category->id) }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                             </tbody>
                         </table>
                      </div>
                   </div>
               </div>
            </div>
          </div>
        </section>

      </div>
       @endsection
