@extends('layouts.app')
@section('content')
<div class="text-white px-4 pt-5 my-5 text-center">
  <div class="mx-auto col-xl-8">
      <h2 class="text-uppercase text-center mb-5">Register</h2>
      <form action="/register" method="post" >
        @csrf
        <div class="form-outline mb-4">
          <label class="form-label">Nombre *</label>
          <input type="text" name="name" class="text-center form-control form-control-lg bg-dark text-white" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label">Email *</label>
          <input type="email" name="email" class="text-center form-control form-control-lg bg-dark text-white" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label">Contraseña *</label>
          <input type="password" name="password" class="text-center form-control form-control-lg bg-dark text-white" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label">Repite contraseña *</label>
          <input type="password" name="password_confirmation" class="text-center form-control form-control-lg bg-dark text-white" />
        </div>
        <label class="form-label">Telefono</label>
          <input type="text" name="phone" class="text-center form-control form-control-lg bg-dark text-white" />
        </div>
        <label class="form-label mt-4">Sexo</label>
        <div class="d-flex w-50 mt-2 m-auto justify-content-around">
          <div class="form-check">
            <input type="radio" name="sex" value="man" class="form-check-input text-center" />
            <label class="form-check-label">
              Hombre
            </label>&nbsp;
          </div>
          <div class="form-check">
            <input type="radio" name="sex" value="woman" class="form-check-input text-center" />
            <label class="form-check-label">
              Mujer
            </label>
          </div>
          <div class="form-check">
            <input type="radio" name="sex" value="others" class="form-check-input text-center" />
            <label class="form-check-label">
              Otros
            </label>
          </div>
        </div>
        <br>
        @if($errors->any())
            @foreach ($errors->all() as $error)
              <p class="border border border-danger rounded-md bg-red-100 w-full text-red-600 p-2 mt-2">{{$error}}</p>
            @endforeach 
          </p>
        @endif
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary btn-lg bg-dark text-white border border-white">Register</button>
        </div>
        <p class="text-center text-muted mt-5 mb-0">Ya tienes una cuenta? <a href="login" class="fw-bold "><u>Login aqui</u></a></p>
      </form>
  </div>
</div>
@endsection