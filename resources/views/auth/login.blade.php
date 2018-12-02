@extends('layouts.app')

@section('content')

   <div class="login_page_wrapper login_page">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="user_avatar"></div>
                </div>
                 <form id="form1" class="form-horizontal" method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                    <div class="uk-form-row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                   <!--   <label for="login_username">Username</label>
                        <input class="md-input" type="text" id="login_username" name="login_username" /> -->
                        <label for="login_username">Email</label>
                      <input id="email" type="email" class=" md-input" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="uk-form-row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Senha</label>


                         <input id="password" type="password" class=" md-input" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                    </div>
                    <div class="uk-margin-medium-top">
                        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Login</button>
                    </div>
                    <div class="uk-margin-top">
                        <a href="#" id="login_help_show" class="uk-float-right">Preciso de ajuda?</a>
                        <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Permaneça conectado</label>
                        </span>
                    </div>
                </form>
            </div>
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_b uk-text-success">Can't log in?</h2>
                <p>Here’s the info to get you back in to your account as quickly as possible.</p>
                <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
                <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
            </div>
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-large-bottom">Redefinir senha</h2>
               <!--  <form>
                    <div class="uk-form-row">
                        <label for="login_email_reset">Your email address</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                    </div>
                </form> -->
            </div>
         
        </div>
           <div class="uk-margin-top uk-text-center">
            <a href="{{route('register')}}">Crie a sua conta aqui</a>
               <!--   <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Esqueceu sua senha?
                                </a> -->
        </div>
    </div>


@endsection
