@extends('layouts.app')

@section('content')
<div class="container">

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>{{ $company->name}}</h1>
        <p class="lead">{{ $company->description}}</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        @foreach($company->projects as $project)
          <div class="col-lg-4">
            <h2>{{$project->name}}</h2>
            <p>{{$project->description}}</p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View project »</a></p>
          </div>
        @endforeach

      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

    </div>

@endsection