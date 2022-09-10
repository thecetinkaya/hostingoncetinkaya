@extends('admin.layouts.master', ['title' => 'Deneyim Ekle | Burak Çetinkaya'])
@section('css')
<style>
  .atag{
    color: #000;
    font-weight: 900;
  }
  .atag:hover{
    color: #000;
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
          <h1>Beceri Ekle</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a class="atag" href="{{url('admin/icerikyonetimi/deneyimim/')}}">Geri Dön<i class="fa fa-undo ml-1"></i></a></li>
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
            <h3 class="card-title">Experience Info</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="{{url('admin/icerikyonetimi/deneyimim/duzenle').'/'.$experience->id}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="inputClientCompany">Company</label>
                <input type="text" name="company" value="{{$experience->company}}" id="inputClientCompany" required class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Job</label>
                <input type="text" name="job" value="{{$experience->position}}" id="inputClientCompany" required class="form-control">
              </div>
            
              <div class="form-group">
                <label for="inputClientCompany">Position</label>
                <input type="text" name="position" value="{{$experience->position}}" id="inputClientCompany" required class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Year</label>
                <input type="date" name="year" value="{{$experience->year}}" id="inputClientCompany" required class="form-control">
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