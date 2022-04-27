@extends('layouts.app')
@section('content')
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{asset('/images/img.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Maisonneuve Etudiants</h1>
        <p class="lead">Les Communautés favorisent et facilitent les interactions entre les membres des différents groupes de votre établissement. Les Communautés contribueront à populariser votre intranet au sein de votre établissement et à solidifier sa vocation de source centralisée d'information et de collaboration..</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/etudiants"> <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Liste des etudiants</button></a>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Others</button>
        </div>
      </div>
    </div>
  </div>
@endsection