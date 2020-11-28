@extends('layouts.app')
@section('content')
<main class="container perfil main-crear-curso text-md-center">
    <!-- Title -->
    <h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Mi perfil</h1>
    <h2>Anallely Martínez</h2>
    <p>anallely.proteco@gmail.com</p>
    @if($user->avatar != NULL)
    <h3 class="text-secondary">Tu personaje es:</h3>
    <img id="perfil_avatar" src="{{ asset("$user->avatar") }}" alt="">
    @endif
    <div class="mt-md-4 mt-4">
        <form class="mx-md-auto" action="{{route('perfil.update', Auth::user()->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <hr>
            @if($user->avatar == NULL)
            <label class="d-block text-left">Elige tu personaje</label>
            @else
            <label class="d-block text-left">Modificar: </label>
            @endif
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace1.png">
                    <img src="img/ToyFace1.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace2.png">
                    <img src="img/ToyFace2.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace3.png">
                    <img src="img/ToyFace3.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace4.png">
                    <img src="img/ToyFace4.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace5.png">
                    <img src="img/ToyFace5.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace6.png">
                    <img src="img/ToyFace6.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace7.png">
                    <img src="img/ToyFace7.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace8.png">
                    <img src="img/ToyFace8.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace9.png">
                    <img src="img/ToyFace9.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace10.png">
                    <img src="img/ToyFace10.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace11.png">
                    <img src="img/ToyFace11.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace12.png">
                    <img src="img/ToyFace12.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace14.png">
                    <img src="img/ToyFace14.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace15.png">
                    <img src="img/ToyFace15.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace16.png">
                    <img src="img/ToyFace16.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace17.png">
                    <img src="img/ToyFace17.png" alt="">
                </div>
                <div class="col d-flex">
                    <input type="radio" name="avatar" value="img/ToyFace18.png">
                    <img src="img/ToyFace18.png" alt="">
                </div>
            </div>
            <input type="submit" value="Guardar" id="submit" class="btn btn-primary bg-yellow text-dark">
        </form>
    </div>
</main>
@endsection