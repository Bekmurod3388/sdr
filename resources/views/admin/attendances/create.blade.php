@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Davomat olish</h1></div>
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


                    <form action="{{route('admin.attendances.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <label for="building">Bino</label>
                            <select name="building" id="building" class="form-select form-control">
                                <option value="none">Binoni tanlang</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="floor">Qavat</label>
                            <select name="floor" id="floor" class="form-select form-control">
                                <option value="none">Qavatni tanlang</option>
                                @foreach($floors as $floor)
                                    <option value="{{ $floor->floor }}">{{ $floor->floor }}</option>
                                @endforeach
{{--                                <option value="1">1</option>--}}
{{--                                <option value="2">2</option>--}}
{{--                                <option value="3">3</option>--}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="room">Xona</label>
                            <select name="room" id="room" class="form-select form-control">
                                <option value="none">Xonani tanlang</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Talabalar</label>
                            <div class="border p-3 d-flex flex-lg-column">
                                <label for="1" class="form-control d-flex justify-content-between align-items-center">Asadbek
                                    <input type="checkbox" name="student" value="1" id="1" class="form-check-label">
                                </label>
                                <label for="2" class="form-control d-flex justify-content-between align-items-center">Diyorbek
                                    <input type="checkbox" name="student" value="2" id="2" class="form-check-label">
                                </label>
                                <label for="3" class="form-control d-flex justify-content-between align-items-center">Ozodbek
                                    <input type="checkbox" name="student" value="3" id="3" class="form-check-label">
                                </label>
                                <label for="4" class="form-control d-flex justify-content-between align-items-center">Fayzulla
                                    <input type="checkbox" name="student" value="4" id="4" class="form-check-label">
                                </label>
                            </div>
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        input[type=checkbox]{
            width: 25px;
            height: 25px;
        }
    </style>

    <script>
        $(document).ready(function (){
            $("#floor").on('change', function (){
                let query = $(this).val();
                $("#room").empty();
                $("#room").append('<option value="0" disabled selected >Kuting...</option>');
                var _token=$('input[name="_token"]').val();
                console.log('ajaxdan aldin');
                $.ajax({
                    type:'post',
                    url:'/autoroom',
                    data:{query:query,_token:_token},
                    success:function (data) {
                        $("#room").empty();
                        $("#room").append(data);
                    }

                });
                console.log('ajaxdan keyin')
            })
        });
    </script>
@endsection
