<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bolcsiadat.css" />
    <script src="js/ajax.js"></script>
    <script src="js/bolcsodeAdatLista.js"></script>
    <script src="js/bolcsodeClass.js"></script>
    <script src="js/bolcsode.js"></script>
    <script src="js/fenntListazas.js"></script>
    <script src="js/fenntClass.js"></script>
    <script src="js/fennt.js"></script>
    <title>Document</title>
</head>

<body>
    <main>
        <form action="/api/bolcsode" method="POST">   
            <?php echo csrf_field(); ?>  
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Bölcsőde adatai</h5>
                </div>
                <div class="modal-body">
                    <div class="modositUrlap">
                        <div class="row">
                            <div class="col">
                               
                                <div class="form-outline">
                                    <input type="text" id="cim" class="form-control"  name="fenntarto"/>
                                    <label class="form-label" for="cim">Fenntartó</label>
                                </div>
                            </div>
                            <div class="col">
                               
                                <div class="form-outline">
                                    <input type="text" id="cim" class="form-control"  name="admin"/>
                                    <label class="form-label" for="cim">Admin</label>
                                </div>
                            </div>
                            <div class="col">
                               
                                <div class="form-outline">
                                    <input type="text" id="cim" class="form-control"  name="cim"/>
                                    <label class="form-label" for="cim">Cím</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="nev" class="form-control" name="nev" />
                                    <label class="form-label" for="nev">Név</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="agazatiAzon" class="form-control" name="agazatiAzon" />
                                    <label class="form-label" for="agazatiAzon">Ágazati azonosító</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="feorAzon" class="form-control" name="feorAzon" />
                                    <label class="form-label" for="feorAzon">FEOR azonosító</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="szgyfKod" class="form-control" name="szgyfKod" />
                                    <label class="form-label" for="szgyfKod">SZGYF kód</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="number" id="ferohelyekSzama" class="form-control" name="ferohelyekSzama" />
                                    <label class="form-label" for="ferohelyekSzama">Férőhelyek száma</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="agazatiPotlek" class="form-control"  name="agazatiPotlek"/>
                                    <label class="form-label" for="agazatiPotlek">Ágazati pótlék</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="col">
                        <div class="form-outline">
                            <button class="btn btn-primary" id="ujBolcsi" type="submit">
                                Mentés
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>

</html>
<?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/ujBolcsi.blade.php ENDPATH**/ ?>