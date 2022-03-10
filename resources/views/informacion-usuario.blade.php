@extends('layouts.app')
@section('content')
@if(auth()->check())<!-- check auth -->
    @php $user = auth()->user() @endphp
    <div class="container pt-4 mt-4 d-flex align-self-start bg-dark text-white">
        <div class="container bootstrap snippets bootdey pt-4 justify-content-center">
            <div class="panel-body inf-content pt-4">
                <div class="row mt-4">
                    <div class="col-md-4">
                        @if ($user->sex == 'man')
                            <img alt="" style="width:15rem;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
                        @elseif ($user->sex == 'woman')
                            <img alt="" style="width:15rem;" title="" class="img-circle img-thumbnail isTooltip" src="https://www.bootdey.com/img/Content/avatar/avatar3.png" data-original-title="Usuario"> 
                        @else 
                            <img alt="" style="width:15rem;" title="" class="img-circle img-thumbnail isTooltip" src="https://www.bootdey.com/img/Content/avatar/avatar8.png" data-original-title="Usuario"> 
                        @endif
                    </div>
                    <div class="col-md-6">
                        <strong>Information</strong><br>
                        <div class="table-responsive">
                        <table class="table table-user-information">
                            <tbody>
                                <tr>        
                                    <td>
                                        <strong class="text-white">
                                            <span class="text-white"></span>
                                            Identificacion                                                
                                        </strong>
                                    </td>
                                    <td class="text-white">
                                        {{$user->id}}     
                                    </td>
                                </tr>
                                <tr>    
                                    <td>
                                        <strong class="text-white">
                                            <span class=" text-white"></span>    
                                            Usuario                                               
                                        </strong>
                                    </td>
                                    <td class="text-white">
                                        {{$user->name}}    
                                    </td>
                                </tr>    
                                <tr>        
                                    <td>
                                        <strong class="text-white">
                                            <span class="text-white"></span>
                                            Correo electrónico                                                
                                        </strong>
                                    </td>
                                    <td class="text-white">
                                        {{$user->email}}  
                                    </td>
                                </tr>     
                                <tr>        
                                    <td>
                                        <strong class="text-white">
                                            <span class="text-white"></span>
                                            Teléfono                                                
                                        </strong>
                                    </td>
                                    <td class="text-white">
                                        {{$user->phone}}  
                                    </td>
                                </tr>     
                                <tr>        
                                    <td>
                                        <strong class="text-white">
                                            <span class="text-white"></span>
                                            Sexo                                                
                                        </strong>
                                    </td>
                                    <td class="text-white">
                                        {{$user->sex}}  
                                    </td>
                                </tr>                    
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
    </div>    
@else 
<div class="text-white px-4 pt-5 my-5 text-center">
    <div class="col-xl-6 mx-auto">
    <p>No estas loggeado</p>
    <a href="login"><p>Login In</p></a>
    </div>
</div>
@endif                        
@endsection