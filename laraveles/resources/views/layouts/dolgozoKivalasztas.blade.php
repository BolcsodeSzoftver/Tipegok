<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/mellekletek_css/dolgozoKivalaszt.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  </head>

<div class="kereso_box">
  <select class="w-100" data-live-search="true">
        <option >Válaszon dolgozót</option>
    @foreach ($alkalmazotts as $alkalmazott)
        <option class='nevekLista' value={{ $alkalmazott->id }}>{{ $alkalmazott->nev }}</option>
    @endforeach
  </select> 
</div>
