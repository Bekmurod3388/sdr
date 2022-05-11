@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Xonani yangilash</h1></div>
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

                    <form action="{{route('admin.rooms.update',$data->id)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="header_ru">Xona raqami</label>
                            <input type="text" name="number" class="form-control" id="header_ru" placeholder="000-A" value="{{$data->room_number}}">
                        </div>

                        <div class="form-group">
                            <label for="description_ru">O`rinlar soni</label>
                            <input type="number" name="count" class="form-control" id="header_ru" placeholder="0" value="{{$data->count}}">
                        </div>


                        <div class="form-group">
                            <select name="floor_id" required class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="0" selected> {{ $isfloor->floor }} </option>
                                @foreach($floors as $floor)
                                    <option value="{{$floor->id}}">{{$floor->floor}}</option>
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
