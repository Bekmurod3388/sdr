@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Foydalanuvchi qo'shing</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>!!!</strong> Qandaydir xatolik ro'y berdi.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.users.store')}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Foydalanuvchi nomi</label>
                            <input type="text" name="name" required class="form-control" id="header_ru"
                                   value="{{old('name')}}" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Email</label>
                            <input type="email" name="email" required class="form-control" id="header_ru"
                                   value="{{old('email')}}" placeholder="user@example.com">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Parol o'rnating</label>
                            <input type="password" name="password" required class="form-control" id="myInput1"
                                   placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Parolni takrorlang</label>
                            <input type="password" name="password_confirm" required class="form-control" id="myInput2"
                                   placeholder="password">
                            <input type="checkbox" onclick="myFunction1()" id="chb">
                            <label for="chb">Parolni ko'rsatish</label>
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
{{--                        <form method="post">--}}
{{--                            Username--}}
{{--                            <input type="text" name="username" autofocus="" autocapitalize="none" autocomplete="username" required="" id="id_username">--}}
{{--                            Password--}}
{{--                            <input type="password" name="password" autocomplete="current-password" required="" id="id_password">--}}
{{--                            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>--}}
{{--                            <button type="submit" class="btn btn-primary">Login</button>--}}
{{--                        </form>--}}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        // const togglePassword = document.querySelector('#togglePassword');
        // const password = document.querySelector('#id_password');
        //
        // togglePassword.addEventListener('click', function (e) {
        //     // toggle the type attribute
        //     const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        //     password.setAttribute('type', type);
        //     // toggle the eye slash icon
        //     this.classList.toggle('fa-eye-slash');
        // });
        function myFunction1() {
            var x = document.getElementById("myInput1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var x = document.getElementById("myInput2");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

@endsection
