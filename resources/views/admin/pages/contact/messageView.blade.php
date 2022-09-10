@extends('admin.layouts.master', ['title' => 'Mesaj Görüntüle | Burak Çetinkaya'])
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesajı Görüntüle - {{$message->name}}<br>[{{$message->created_at}}]</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="atag" href="../">Geri Dön<i class="fa fa-undo ml-1"></i></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="">
          <!-- /.col -->
        <div class="col-md-6 mx-auto">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Mesajı Oku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>{{$message->subject}}</h5>
                <h6>Gönderici Mail Adresi: <a class="atag" href="mailto:{{$message->email}}">{{$message->email}}</a>
                  <span class="mailbox-read-time float-right">{{$message->created_at}}</span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <p>Merhaba Burak,</p>

                <p>{{$message->message}}</p>

                <p class="float-right font-weight-bold"><br>{{$message->name}}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
@endsection