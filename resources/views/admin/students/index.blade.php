@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Talabalar</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.students.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Talaba qo'shing
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col">Ism</th>
                            <th class="" scope="col">Familya</th>
                            <th  class="w-25" scope="col">Telefon raqam</th>

                            <th class="w-25" scope="col">Harakat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $ind=>$post)
                            <tr>
                                <th scope="row" class="col-1">{{$ind+1}}</th>
                                <td>{{$post->name}}</td>
                                <td>{{$post->surname}}</td>
                                <td>{{$post->phone}}</td>

                                <td class="col-2">
                                    <form action="{{route('admin.students.destroy',$post->id)}}" method="POST">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.students.show',$post->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-eye"></i>
                                    </span>

                                        </a>
                                        <a class="btn btn-warning btn-sm" href="{{route('admin.students.edit',$post->id)}}">
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
