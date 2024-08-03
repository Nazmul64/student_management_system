
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
                          <h2>Add Class
                             <a href="{{route('stups.view')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-list">List User</i></a>
                          </h2>
                      </div>
                      <div class="card-body">
                         <form method="post"id="myForm"action="{{route('stups.store')}}">
                            @csrf
                             <div class="row">
                            <div class="col-md-4">
                                 <label>Name</label>
                                 <input type="text"name="name"class="form-control">
                                @error ('name')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                             </div>
                             <button type="submit" class="btn btn-primary  mt-2">Submit</button>
                         </form>
                      </div>
                   </div>
               </div>
            </div>
          </div>
        </section>

      </div>
       @endsection
