@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Qavatlar</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.binos.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Bino qo'shing
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bino nomi</th>
                            <th scope="col">Foydalanuvchi Id</th>
                            <th scope="col">Ammallar</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php $id = 0; ?>

                        @foreach($data as $key => $post)
                            <?php $id++; ?>
                            <tr>

                                <th scope="row" class="col-1"> {{ $key+1 }} </th>
                                <td>{{$post->name}}</td>
                                <td>{{$post->user_id}}</td>

                                <td class="col-2">
                                    <form action="{{ route('admin.binos.destroy',$post->id) }}" method="POST">

                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.binos.edit',$post->id) }}">
                                        <span class="btn-label">
                                            <i class="fa fa-pen"></i>
                                        </span>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </button>

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


