@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Binoni yangilash</h1></div>
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

                    <form action="{{route('admin.binos.update',$data->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="description_ru"> Bino nomi </label>
                            <input type="text" name="name" class="form-control" id="header_ru"
                                   value="{{$data->name}}">
                        </div>

                        <div class="form-group">
                            <select name="user_id" required class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="0" selected> {{ $isUser->email }} </option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
