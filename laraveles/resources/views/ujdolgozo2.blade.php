@extends('layouts.UjdolgozoSzerkezet')
@section('UjdolgozoTartalom')
<label class="form-label" for="form8Example1">Állandó lakhely</label>
<div class="row">
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label>Város</label>
      <input
        type="text"
        class="form-control"
        id="validationTooltip03"
        placeholder="Város"
        required
      />
    </div>
    <div class="col-md-2 mb-3">
      <label>Utca</label>
      <input
        type="text"
        class="form-control"
        id="validationTooltip04"
        placeholder="Utca"
        required
      />
    </div>
    <div class="col-md-4 mb-3">
      <label>Irányítószám</label>
      <input
        type="text"
        class="form-control"
        id="validationTooltip05"
        placeholder="Irányítószám"
        required
      />
    </div>
  </div>
</div>
<hr />
<label class="form-label" for="form8Example1">Tartózkodási hely</label>
<div class="row">
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label>Város</label>
      <input
        type="text"
        class="form-control"
        id="validationTooltip03"
        placeholder="Város"
        required
      />
    </div>
    <div class="col-md-2 mb-3">
      <label>Utca</label>
      <input
        type="text"
        class="form-control"
        id="validationTooltip04"
        placeholder="Utca"
        required
      />
    </div>
    <div class="col-md-4 mb-3">
      <label>Irányítószám</label>
      <input
        type="text"
        class="form-control"
        id="validationTooltip05"
        placeholder="Irányítószám"
        required
      />
    </div>
  </div>
</div>
@endsection
