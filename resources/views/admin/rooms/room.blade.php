@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Xonalar</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.rooms.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Xona qo'shing
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Xona raqami</th>
                            <th scope="col">Qavat raqami</th>
                            <th scope="col">Joylar soni</th>
                            <th scope="col">Ammallar</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php $id=0; ?>

                        @foreach($data as $post)
                            <?php $id++; ?>
                            <tr>
                                <th scope="row" class="col-1"> <?php echo $id; ?> </th>
                                <td>{{$post->room_number}}</td>
                                <td>{{$post->floor}}</td>
                                <td>{{$post->count}}</td>

                                <td class="col-2">
                                    <form action="{{ route('admin.rooms.destroy',$post->id) }}" method="POST">

                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.rooms.edit',$post->id) }}">
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
                        <section class="content12 cid-t34gh8nW7r" id="content12-2s">

                            <div class="container">
                                <div class="row justify-content-center">
                                    @if ($data->links())
                                        <div class="mt-4 p-4 box has-text-centered">
                                            {{ $data->links() }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                </div>
            </div>
        </div>
    </div>



@endsection


