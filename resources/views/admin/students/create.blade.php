@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Talaba ma'lumotlarini kiriting </h1></div>
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


                    <form action="" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Ismni kiriting</label>
                            <input type="text" name="name" class="form-control" id="header_ru" placeholder="Ism">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Familyani kiriting</label>
                            <input type="text" name="surname" class="form-control" id="header_ru" placeholder="Familya">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Sharifni kiriting</label>
                            <input type="text" name="f_s_name" class="form-control" id="header_ru" placeholder="Sharif">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Manzilni kiriting</label>
                            <input type="text" name="address" class="form-control" id="header_ru" placeholder="Manzil">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Pasport seriyasi va raqami</label>
                            <input type="text" name="passport" class="form-control" id="header_ru" placeholder="AA0000000">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Telefon raqami</label>
                            <input type="text" name="phone" class="form-control" id="header_ru" placeholder="+998883621700">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ota-onasining ma'lumoti</label>
                            <input type="text" name="parent_name" class="form-control" id="header_ru" placeholder="Familya Ism Sharif">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ota-onasining telefon raqami </label>
                            <input type="text" name="parent_phone" class="form-control" id="header_ru" placeholder="+998883621700">
                        </div>
                        <div class="form-group">
                            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Xonani tanlang</option>
                                @foreach($rooms as $room)
                                <option value="{{$room->id}}">{{$room->room_number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Fakultetni tanlang</option>
                                <option value="1">Telekomunikatsiya texnologiyalari</option>
                                <option value="2">Kompyuter injinering</option>

                            </select>
                        </div>







                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
