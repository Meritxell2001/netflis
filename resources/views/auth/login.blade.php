@extends('layouts.app')
@section('content')
@if(auth()->check())
<div class="text-white px-4 pt-5 my-5 text-center">
  <div class="col-xl-6 mx-auto">
  <h1>You are already logged =)</h1>
  <a href="peliculas"><p>Go to stream movies and series</p></a>
  </div>
</div>
@else 
<div class="text-white px-4 pt-5 my-5 text-center">
  <div class="col-xl-6 mx-auto">
      <form method="POST" action="/login">
        @csrf
        <h1 class="row justify-content-center m-4"> Login </h1>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Dirección email</label>
            <input type="email" id="form3Example3" name="email" class="text-center form-control form-control-lg bg-dark text-white"
            placeholder="Escribe un email valido" />
          
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Contraseña</label>
            <input type="password" id="form3Example4" name="password" class="text-center form-control form-control-lg bg-dark text-white"
            placeholder="Escribe la contraseña" />
          
        </div>

        <div class="d-flex justify-content-between align-items-center">
          <!-- Checkbox -->
          <div class="form-check mb-0">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
            <label class="form-check-label" for="form2Example3">
              Recordar
            </label>
          </div>
          <a href="#!" class="text-body">Has olvidado tu contraseña?</a>
        </div>
        @if($errors->any())
            @foreach ($errors->all() as $error)
              <p class="border border border-danger rounded-md bg-red-100 w-full text-red-600 p-2 mt-2">{{$error}}</p>
            @endforeach 
          </p>
        @endif
        <div class="text-center text-lg-start mt-4 pt-2 d-flex justify-content-around">
          <button type="submit" class="btn btn-primary btn-lg bg-dark text-white border border-white"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          <p class="small fw-bold mt-2 pt-1 mb-0">No tienes cuenta? <a href="/register"
              class="link-danger">Registrate</a></p>
        </div>
      </form>
@endif      
@endsection