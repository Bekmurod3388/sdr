@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Davomat</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.attendances.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Davomat olish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Talaba</th>
                            <th scope="col">Xona</th>
                            <th scope="col">Tekshirish</th>
                            <th scope="col">Sana</th>
{{--                            <th scope="col">Amallar</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($attendances as $attendance)
                            <tr>
                                <th scope="row" class="col-1">{{$attendance->id}}</th>
                                <td>{{ $attendance->student->name }}</td>
                                <td>{{ $attendance->room->room_number }}</td>
                                <td>{{ $attendance->check }}</td>
                                <td>{{ $attendance->created_at }}</td>
{{--                                <td class="col-2">--}}
{{--                                    <form action="{{ route('admin.attendances.destroy',$attendance->id) }}" method="POST">--}}
{{--                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.attendances.edit',$attendance->id) }}">--}}
{{--                                    <span class="btn-label">--}}
{{--                                        <i class="fa fa-pen"></i>--}}
{{--                                    </span>--}}

{{--                                        </a>--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">--}}
{{--                                        <i class="fa fa-trash"></i>--}}
{{--                                    </span></button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
