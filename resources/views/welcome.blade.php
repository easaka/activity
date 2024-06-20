@extends ('layouts.app')

@section('content')
    <div class="jumbotron text-center bg-primary text-white">
        <h1 class="display-4">Welcome to Activity Tracker</h1>
        <p class="lead">Track and manage your tasks efficiently.</p>
        <hr class="my-4">
        <p>Hope this app can help you track the progress of your work.</p>
        <a class="btn btn-light btn-lg" href="{{ route('activities.index') }}" role="button">View Activities</a>
        @guest
            <a class="btn btn-light btn-lg" href="{{ route('register') }}" role="button">Get Started</a>
        @endguest
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Organize</h5>
                        <p class="card-text">Keep all your activities organized in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Track Progress</h5>
                        <p class="card-text">Monitor the progress of your tasks with ease.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Achieve Goals</h5>
                        <p class="card-text">Stay focused and achieve your goals faster.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
