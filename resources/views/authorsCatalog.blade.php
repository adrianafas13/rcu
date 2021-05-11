@extends('layouts.generallayout')
@section('content')
<br>
<div class="container-fluid">
    <div class="title-author">
        <h2><b>CATÁLOGO DE AUTORES:</b></h2>
    </div>
    <hr>
    <div class="row" id="abc_authors">
        <div class="col-sm-3" >
            <a data-toggle="modal" data-target="#exampleModalLong">
                <img src="{{asset('img/A-10.png')}}" alt="A_author">
                @include('authorsModal')
                
            </a>
        </div>
        <div class="col-sm-3">
            <a data-toggle="modal" data-target="#modalLogin">
                <img src="{{asset('img/B-10.png')}}" alt="B_author">
                @include('auth/loginModal')
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/C-10.png')}}" alt="C_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/D-10.png')}}" alt="D_author">
            </a>
        </div>
    </div>

    <div class="row" id="abc_authors">
        <div class="col-sm-3" >
            <a href="#">
                <img src="{{asset('img/E-10.png')}}" alt="E_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/F-10.png')}}" alt="F_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/G-10.png')}}" alt="G_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/H-10.png')}}" alt="H_author">
            </a>
        </div>
    </div>

    <div class="row" id="abc_authors">
        <div class="col-sm-3" >
            <a href="#">
                <img src="{{asset('img/I-10.png')}}" alt="I_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/J-10.png')}}" alt="J_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/K-10.png')}}" alt="K_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/L-10.png')}}" alt="L_author">
            </a>
        </div>
    </div>

    <div class="row" id="abc_authors">
        <div class="col-sm-3" >
            <a href="#">
                <img src="{{asset('img/M-10.png')}}" alt="M_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/N-10.png')}}" alt="N_author">
             </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/O-10.png')}}" alt="O_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/P-10.png')}}" alt="P_author">
            </a>
        </div>
    </div>
   
    <div class="row" id="abc_authors">
        <div class="col-sm-3" >
            <a href="#">
                <img src="{{asset('img/Q-10.png')}}" alt="Q_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/R-10.png')}}" alt="R_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/S-10.png')}}" alt="S_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/T-10.png')}}" alt="T_author">
            </a>
        </div>
    </div>
  
    <div class="row" id="abc_authors">
        <div class="col-sm-3" >
            <a href="#">
                <img src="{{asset('img/U-10.png')}}" alt="U_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/V-10.png')}}" alt="V_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/W-10.png')}}" alt="W_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/X-10.png')}}" alt="X_author">
            </a>
        </div>
    </div>
   
    <div class="row" id="abc_authors">
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/Y-10.png')}}" alt="Y_author">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="#">
                <img src="{{asset('img/Z-10.png')}}" alt="Z_author">
            </a>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
    </div>
  
</div>
<br>
@endsection