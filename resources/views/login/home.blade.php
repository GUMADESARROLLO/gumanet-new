@extends('template.main')
@section('content')   
<main class="form-signin w-100 m-auto text-center">
      <form>
        <img class="mb-4" src="{{ asset('img/logo-100x50.png') }}" alt="Small logo"/>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            placeholder="name@example.com"
            id="email"
            value="hello@amaharjan.de"
            autocomplete="off"
          />
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            placeholder="Password"
            value="********************"
            autocomplete="off"
          />
          <label for="floatingPassword">Password</label>
        </div>

    
        <a class="btn btn-primary-amj w-100 py-2" href="#"
          >Sign in</a
        >
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p>
      </form>
    </main>

@endsection