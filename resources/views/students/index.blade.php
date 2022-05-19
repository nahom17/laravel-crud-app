@extends('students.layout')
@section('content')
    <div class="container w-100 h-100">
        <div class="row">
            <div class="col">
                <div class="card w-100">
                    <div class="card-header">
                        <h2>students data</h2>
                    </div>
                    <div class="card-body w-100">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="bi bi-person-plus" aria-hidden="false"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive w-100">
                            <table class="table w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th></th>
                                        <th>BirthDate</th>
                                        <th></th>
                                        <th></th>
                                        <th>Address</th>
                                        <th></th>
                                        <th>HouseNum</th>
                                        <th>Postcode</th>
                                        <th>City</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- //!! here we output all the student data --}}
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->FirstName }} </td>
                                        <td>{{ $item->LastName }} </th>
                                            <td></td>
                                        <td>{{$item->BirthDate}}</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$item->Address}}</th>
                                            <td></td>
                                        <td>{{$item->HouseNumber}}</th>
                                        <td>{{$item->Postcode}}</td>
                                        <td>{{$item->City}}</td>
                                        <td>{{$item->Mobile}}</td>
                                        <td>{{$item->Email}}</td>
                                        <td></td>
                                        <td>
                                            {{-- here we can add some actions to the table(view,edit,delete) --}}
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="bi bi-eye" aria-hidden="false"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" aria-hidden="false"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash" aria-hidden="false"></i> Delete</button>
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
        </div>
    </div>
@endsection
