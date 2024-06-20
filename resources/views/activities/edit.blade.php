@extends('layouts.app')

@section('content')
    <h1>Edit Activity</h1>
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $activity->description }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $activity->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="done" {{ $activity->status == 'done' ? 'selected' : '' }}>Done</option>
            </select>
        </div>
        <div class="form-group">
            <label for="remark">Remark</label>
            <textarea name="remark" id="remark" class="form-control">{{ $activity->remark }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
