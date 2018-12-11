@extends ('master')
@section('content')
    <div class="login-area">
        <div class="bg-image">
            <div class="login-signup">
                <div class="container">
                    <div class="login-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="login-logo">
                                    <img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkury_logo" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="login-details">
                                    <ul class="nav nav-tabs navbar-right">
                                        <li><a data-toggle="tab" href="#register">Registro</a></li>
                                        <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="tab-content">
                        <div id="register" class="tab-pane active">
                            <div class="login-inner">
                                <div class="title">
                                    <h1>Bienvenido</h1>
                                </div>
                                <div class="login-form">
                                    @include('error')
                                    <form action="{{url('/registrar')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-details">
                                            <label class="vchNombre">
                                                <input type="text" name="vchNombre" placeholder="Nombre" id="vchNombre">
                                            </label>
                                            <label class="vchAPaterno">
                                                <input type="text" name="vchAPaterno" placeholder="Primer apellido" id="vchAPaterno">
                                            </label>
                                            <label class="vchAMaterno">
                                                <input type="text" name="vchAMaterno" placeholder="Segundo Apellido" id="vchAMaterno">
                                            </label>
                                            <label class="email">
                                                <input type="email" name="email" placeholder="Ejemplo@web.com" id="email">
                                            </label>
                                            <label class="password">
                                                <input type="password" name="password" placeholder="Contraseña" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn" >Aceptar</button>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <div id="login" class="tab-pane fade in ">
                            <div class="login-inner">
                                <div class="title">
                                    <h1>Bienvenido</h1>
                                </div>
                                <div class="login-form">
                                    <form method="post" action="{{url('/verificar')}}">
                                        {{csrf_field()}}
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="email" name="email" placeholder="Ejemplo@web.com" id="email">
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="password" placeholder="Contraseña" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn">Aceptar</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop