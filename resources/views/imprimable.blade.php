@extends('layouts.main')
@section('contenu')
<h1 class="text-center">Détails du personnel {{$finds->id}} </h1>
<body onload="window.print()">
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('storage').'/'.$finds->photo }}" class="img-fluid rounded-start" alt=""> <br> <br>
        <img src="{{ asset('img/code.jpg') }}" width="100%"  alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title text-center text-danger">Carte personnel HCR</h3>
          <p>Nom: <b>{{$finds->nom}} </b></p>
          <p>Prénom:<b>{{$finds->prenom}} </b></p>
          <p>Genre: <b>{{$finds->genre}} </b></p>
          <p>Poste: <b>{{$finds->poste}} </b></p>
          <p>Titre: <b>{{$finds->titre}} </b></p>
          <p>N° matricule: <b>{{$finds->matricule}} </b></p>
          </h5>
        </div>
      </div>
    </div>
  </div>

</body>

@endsection

