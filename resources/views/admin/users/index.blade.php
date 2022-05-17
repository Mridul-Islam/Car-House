@extends('layouts.admin')

@section('content')

    <h2 class="text-center bg-info">All Users</h2>
    <hr>

    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>name</th>
                <th>email</th>
                <th>role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr class="tr-shadow">
                <td>{{ $user->id }}</td>
                <td><img src="{{ $user->image_id ? asset('images/' . $user->image->name) : asset('images/user_logo.png') }}" width="120px"/></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name}}</td>
                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['users.destroy', $user->id]]) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            <tr class="spacer"></tr>
            @endforeach

{{--            <tr class="tr-shadow">--}}
{{--                <td>Lori Lynch</td>--}}
{{--                <td>--}}
{{--                    <span class="block-email">lori@example.com</span>--}}
{{--                </td>--}}
{{--                <td class="desc">Samsung S8 Black</td>--}}
{{--                <td>2018-09-27 02:12</td>--}}
{{--                <td>--}}
{{--                    <span class="status--process">Processed</span>--}}
{{--                </td>--}}
{{--                <td>$679.00</td>--}}
{{--                <td>--}}
{{--                    <div class="table-data-feature">--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
{{--                            <i class="zmdi zmdi-mail-send"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
{{--                            <i class="zmdi zmdi-edit"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                            <i class="zmdi zmdi-delete"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
{{--                            <i class="zmdi zmdi-more"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr class="spacer"></tr>--}}
{{--            <tr class="tr-shadow">--}}
{{--                <td>--}}
{{--                    <label class="au-checkbox">--}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="au-checkmark"></span>--}}
{{--                    </label>--}}
{{--                </td>--}}
{{--                <td>Lori Lynch</td>--}}
{{--                <td>--}}
{{--                    <span class="block-email">john@example.com</span>--}}
{{--                </td>--}}
{{--                <td class="desc">iPhone X 64Gb Grey</td>--}}
{{--                <td>2018-09-29 05:57</td>--}}
{{--                <td>--}}
{{--                    <span class="status--process">Processed</span>--}}
{{--                </td>--}}
{{--                <td>$999.00</td>--}}
{{--                <td>--}}
{{--                    <div class="table-data-feature">--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
{{--                            <i class="zmdi zmdi-mail-send"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
{{--                            <i class="zmdi zmdi-edit"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                            <i class="zmdi zmdi-delete"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
{{--                            <i class="zmdi zmdi-more"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr class="spacer"></tr>--}}
{{--            <tr class="tr-shadow">--}}
{{--                <td>--}}
{{--                    <label class="au-checkbox">--}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="au-checkmark"></span>--}}
{{--                    </label>--}}
{{--                </td>--}}
{{--                <td>Lori Lynch</td>--}}
{{--                <td>--}}
{{--                    <span class="block-email">lyn@example.com</span>--}}
{{--                </td>--}}
{{--                <td class="desc">iPhone X 256Gb Black</td>--}}
{{--                <td>2018-09-25 19:03</td>--}}
{{--                <td>--}}
{{--                    <span class="status--denied">Denied</span>--}}
{{--                </td>--}}
{{--                <td>$1199.00</td>--}}
{{--                <td>--}}
{{--                    <div class="table-data-feature">--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
{{--                            <i class="zmdi zmdi-mail-send"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
{{--                            <i class="zmdi zmdi-edit"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                            <i class="zmdi zmdi-delete"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
{{--                            <i class="zmdi zmdi-more"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr class="spacer"></tr>--}}
{{--            <tr class="tr-shadow">--}}
{{--                <td>--}}
{{--                    <label class="au-checkbox">--}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="au-checkmark"></span>--}}
{{--                    </label>--}}
{{--                </td>--}}
{{--                <td>Lori Lynch</td>--}}
{{--                <td>--}}
{{--                    <span class="block-email">doe@example.com</span>--}}
{{--                </td>--}}
{{--                <td class="desc">Camera C430W 4k</td>--}}
{{--                <td>2018-09-24 19:10</td>--}}
{{--                <td>--}}
{{--                    <span class="status--process">Processed</span>--}}
{{--                </td>--}}
{{--                <td>$699.00</td>--}}
{{--                <td>--}}
{{--                    <div class="table-data-feature">--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
{{--                            <i class="zmdi zmdi-mail-send"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
{{--                            <i class="zmdi zmdi-edit"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                            <i class="zmdi zmdi-delete"></i>--}}
{{--                        </button>--}}
{{--                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
{{--                            <i class="zmdi zmdi-more"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
            </tbody>
        </table>
    </div>

@stop
