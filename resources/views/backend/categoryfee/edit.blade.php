
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
                          <h2>Update Category
                             <a href="{{route('categoryfee.view')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-list">List Category</i></a>
                          </h2>
                      </div>
                      <div class="card-body">
                         <form method="post"id="myForm"action="{{ route('categoryfee.update',$edit->id) }}">
                            @csrf
                             <div class="row">
                            <div class="col-md-4">
                                 <label>Year Edit </label>
                                 <input type="text"name="categoryfee"class="form-control    @error ('categoryfee') is-invalid   @enderror "value="{{ $edit->categoryfee }}">
                                @error ('categoryfee')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                             </div>
                             <button type="submit" class="btn btn-primary  mt-2">Update</button>
                         </form>
                      </div>
                   </div>
               </div>
            </div>
          </div>
        </section>

      </div>
       @endsection
