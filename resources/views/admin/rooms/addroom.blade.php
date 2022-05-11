@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Xona qo'shing</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.rooms.store')}}" method="POST" accept-charset="UTF-8"

                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="header_ru"> Xona raqami </label>
                            <input type="text" name="number" class="form-control"  placeholder="000-A">
                        </div>

                        <div class="form-group">
                            <label for="header_ru"> O`rinlar soni </label>
                            <input type="number" name="count" class="form-control" placeholder="0">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
