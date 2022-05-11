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
                            <strong>Xatolik!</strong> Quyidagi shartlar bajarilishi lozim !<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.students.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Ismni kiriting</label>
                            <input type="text" required name="name" class="form-control" id="header_ru"
                                   placeholder="Ism" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Familyani kiriting</label>
                            <input type="text" required name="surname" class="form-control" id="header_ru"
                                   placeholder="Familya" value="{{old('surname')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Sharifni kiriting</label>
                            <input type="text" required name="f_s_name" class="form-control" id="header_ru"
                                   placeholder="Sharif" value="{{old('f_s_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Manzilni kiriting</label>
                            <input type="text" required name="address" class="form-control" id="header_ru"
                                   placeholder="Manzil" value="{{old('address')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Pasport seriyasi va raqami</label>
                            <input type="text" required name="passport" class="form-control" id="header_ru"
                                   placeholder="AA0000000" value="{{old('passport')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Telefon raqami</label>
                            <input type="text" required name="phone" class="form-control" id="header_ru"
                                   placeholder="+998883621700" value="{{old('phone')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ota-onasining ma'lumoti</label>
                            <input type="text" required name="parent_name" class="form-control" id="header_ru"
                                   placeholder="Familya Ism Sharif" value="{{old('parent_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ota-onasining telefon raqami </label>
                            <input type="text" required name="parent_phone" class="form-control" id="header_ru"
                                   placeholder="+998883621700" value="{{old('parent_phone')}}">
                        </div>
                        <div class="form-group">
                            <select name="room_id" required class="form-select form-control form-select-lg mb-3"
                                    aria-label=".form-select-lg example">
                                <option value="" selected>Xonani tanlang</option>
                                @foreach($rooms as $room)
                                    <option value="{{$room->id}}">{{$room->room_number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="fak_id" required class="form-select form-control form-select-lg mb-3"
                                    aria-label=".form-select-lg example">
                                <option value="" selected>Fakultetni tanlang</option>
                                @foreach($fakultets as $fak)
                                    <option value="{{$fak->id}}">{{$fak->name}}</option>
                                @endforeach

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
