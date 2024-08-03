
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
                          <h2>Class List
                             <a href="{{route('stups.add')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle">Add Class</i></a>
                          </h2>
                      </div>
                      <div class="card-body">
                         <table id="example1" class="table table-bordered table-hover">
                             <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                                @foreach ($student_class as $index => $student_class)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $student_class->name }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"href="{{ route('stups.edit',$student_class->id) }}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger"href="{{ route('stups.delete',$student_class->id) }}"><i class="fa fa-trash"></i></a>
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
