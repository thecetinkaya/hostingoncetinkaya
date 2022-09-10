@extends('admin.layouts.master',['title'=>'Eğtitim Bilgisi Ekle | Burak Çetinkaya'])
@section('css')
<style>
    .atag{
        color: #000;
        font-weight: :900;
    }
    .atag:hover{
        color:#000;
    }
    </style>
    @endsection
    @section('content')
    @if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> WARNING!</h5>
        Error was encountered!
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> WARNING!</h5>
        {{Session::get('message')}}
    </div>
@endif
  <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New Education</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a class="atag" href="{{url('admin/icerikyonetimi/egitimim')}}">GO BACK<i class="fa fa-undo ml-1"></i></a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-9 mx-auto">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Education Info</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="{{url('admin/icerikyonetimi/egitimim/ekle')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="inputClientCompany">Title</label>
                <input type="text" name="title" id="inputClientCompany" required class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Content</label>
                <textarea id="inputDescription" name="content" required class="form-control" rows="4"></textarea>
              </div>
              <div class="row">
                <div class="col-12">
                  <a href="./" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Save" class="btn btn-success float-right">
                </div>
              </div>
            </form>
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      
    </div>
    
  </section>
  <!-- /.content -->
@endsection
@section('js')
@endsection