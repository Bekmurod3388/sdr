@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Fakultet</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.student_info.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Fakultet qo'shing
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nomi</th>
                            <th scope="col">Amal</th>

                         </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row" class="col-1">{{$post->id}}</th>
                                <td>{{$post->name}}</td>


                                <td class="col-2">
                                    <form action="{{ route('admin.student_info.destroy',$post->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.student_info.edit',$post->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
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

