@extends('layouts.app')
@section('content')
@if(auth()->check())<!-- check auth -->
  <section class="vh-100 bg-dark">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7">
              <div class="card bg-secondary" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Datos usuario</h2>
    
                  <form>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg">Nombre</label>
                      <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example3cg">Email</label>
                      <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Contraseña</label>
                      <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cdg">Repite contraseña</label>
                      <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                    </div>
                    <label class="form-label" for="form3Example4cdg">Telefono</label>
                      <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-primary btn-lg bg-dark text-white border border-white">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@else 
<div class="text-white px-4 pt-5 my-5 text-center">
    <div class="col-xl-6 mx-auto">
    <p>No estas loggeado</p>
    <a href="login"><p>Login In</p></a>
    </div>
</div>
@endif   
@endsection