@extends('layouts.app')

@section('content')
    <h1>Create Activity</h1>
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="done">Done</option>
            </select>
        </div>
        <div class="form-group">
            <label for="remark">Remark</label>
            <textarea name="remark" id="remark" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
