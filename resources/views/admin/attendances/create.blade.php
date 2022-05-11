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
                            <strong>Vayyay!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.attendances.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data" id="contactForm">
                       @csrf
                        <div class="form-group">
                            <label for="floor">Qavat</label>
                            <select name="floor" id="floor" class="form-select form-control">
                                <option value="none">Qavatni tanlang</option>
                                @foreach($floors as $floor)
                                    <option value="{{$floorer =  $floor->floor }}">{{ $floor->floor }}</option>
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
                                @foreach($rooms as $room)
                                    @if($room->floor === $floorer) <option value=" {{$room->room_number}} ">{{$room->room_number}}</option>
                                    @endif
                                @endforeach
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

@endsection
@section("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
    $(document).ready(function () {
    $("#floor").change(function () {
    var val = $(this).val();
    for(let i =0; i< val.length; i++){
    if (val == "item1") {
    $("#size").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
    } else if (val == "item2") {
    $("#size").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
    } else if (val == "item3") {
    $("#size").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
    } else if (val == "item0") {
    $("#size").html("<option value=''>--select one--</option>");
    }}
    });
    });
</script>




    <script type="text/javascript">
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            var modalAjax = document.querySelector('.modal-back')
            if(modalAjax)modalAjax.classList.add("modal__disable");
            document.documentElement.style.removeProperty('overflow');
            document.documentElement.style.paddingRight = '0';
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            $.ajax({
                url: "{{route('admin.attendances.store')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    phone: phone,
                    email: email,
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: '{{__("about.success")}}',
                    })
                },
                fail: function (response) {
                    Swal.fire({
                        icon: 'fail',
                        title: '{{__("about.success")}}',
                    })
                }
            });
        });
    </script>


@stop
