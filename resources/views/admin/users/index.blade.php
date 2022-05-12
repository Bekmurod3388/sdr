@extends('admin.master')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Foydalanuvchi</h1></div>
                    <div class="col-md-1">
                        @if(\Illuminate\Support\Facades\Auth::user()->role != 'user')
                            <a class="btn btn-primary" href="{{route('admin.users.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                                Qo'shish
                            </a>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roli</th>
                            <th scope="col">Harakat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row" class="col-1">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                        @if(\Illuminate\Support\Facades\Auth::id() == $user->id)
                                            <a class="btn btn-warning btn-sm"
                                               href="{{ route('admin.users.edit',$user->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                            </a>
                                        @endif
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
