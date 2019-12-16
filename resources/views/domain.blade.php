@extends('layouts.app')
@section('content')
      <table class="table table-striped table-light">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">updated_at</th>
                <th scope="col">created_at</th>
                <th scope="col">content_length</th>
                <th scope="col">response_code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{ $domain->id }}</th>
                <td><a href="{{ $domain->name }}" target="_blank">{{ $domain->name }}</a></td>
                <td>{{ $domain->updated_at }}</td>
                <td>{{ $domain->created_at }}</td>
                <td>{{ $domain->content_length }}</td>
                <td>{{ $domain->response_code }}</td>
                </tr>
            </tbody>
      </table>
@endsection