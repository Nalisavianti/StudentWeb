@extends('template.layout')
@section('content')

<div class="card shadow border-0 mb-7">
    <div class="table-responsive mt-3 mb-3">
        <table class="mt-4 table table-stripped table-hover bg-white" id="usertable">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email Address</th>
                <th scope="col">NIM</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($userAccounts as $account)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$account->username}}</td>
                    <td>{{$account->email}}</td>
                    <td>{{$account->nim}}</td>
                    <td>
                        <a href = "/admin-coba/{{$account->id}}/edit" class="me-4"><img src="{{asset('img/edit.png')}}"></a>
                        <form action="/admin-coba/{{ $account->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <a onclick="return confirm('Are you sure?')"><img src="{{asset('img/drop.png')}}"></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection