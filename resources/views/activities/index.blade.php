@extends('layouts.app')

@section('content')
    <h1>Activities</h1>
    <a href="{{ url('/activities/create') }}" class="btn btn-primary mb-3">Create New Activity</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Description</th>
                <th>Status</th>
                <th>Remark</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->description }}</td>
                    <td>{{ $activity->status }}</td>
                    <td>{{ $activity->remark }}</td>
                    <td>
                        <a href="{{ url('/activities/' . $activity->id . '/edit') }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ url('/activities/' . $activity->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
