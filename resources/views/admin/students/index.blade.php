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
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col">Ism</th>
                            <th class="" scope="col">Familya</th>
                            <th class="w-25" scope="col">Telefon raqam</th>

                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $ind=>$post)
                            <tr>
                                <th scope="row"
                                    class="col-1">{{($posts->currentpage()-1)*($posts->perpage())+$ind+1}}</th>
                                <td>{{$post->name}}</td>
                                <td>{{$post->surname}}</td>
                                <td>{{$post->phone}}</td>

                                <td class="col-2">
                                    <form action="{{route('admin.students.destroy',$post->id)}}" method="POST">
                                        <a title="Ko'rish" class="btn btn-primary btn-sm active"
                                           href="{{route('admin.students.show',$post->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-eye"></i>
                                    </span>

                                        </a>
                                        <a title="Tahrirlash" class="btn btn-warning btn-sm active"
                                           href="{{route('admin.students.edit',$post->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button title="O'chirish" type="submit"
                                                class="btn btn-danger active btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="container">
                        <div class="row justify-content-center">


                            @if ($posts->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $posts->links() }}
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
