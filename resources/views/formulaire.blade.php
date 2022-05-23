@extends('layouts.main')
@section('contenu')

<div class="container">
    <form method="POST" action="{{ route('insertion') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="col-sm-3 control-label">GENRE</label>
            <div class="col-sm-12">
            <select class="form-select" type="text" aria-label="Default select example" name="genre" >
            <option selected > Genre </option>
            <option value="Masculin">Masculin</option>
            <option value="Feminin">Feminin</option>
            </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poste</label>
            <input type="text" class="form-control" name="poste" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Matricule</label>
            <input type="text" class="form-control" name="matricule" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" id="photo" aria-describedby="emailHelp">
          </div>
          <div class="container d-flex">
              <div class="col">
              <button type="submit" class="btn btn-primary">Valider</button>
              </div> &nbsp;&nbsp;&nbsp;
              <div>
              <button type="reset" class="btn btn-danger">Supprimer</button>
              </div>
          </div>

      </form>
</div>

@endsection
