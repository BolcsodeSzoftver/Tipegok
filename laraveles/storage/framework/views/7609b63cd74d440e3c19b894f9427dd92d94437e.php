<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melléklet 10</title>
    <link rel="stylesheet" href="css/mellekletek_css/melleklet10.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/mellekletAdatok.js"></script>
    <script src="js/melleklet.js"></script>
</head>
<body>
    <main>
        <label class="alkalmazottNevek">Válasz dolgozót: </label>
        <select class="alkalmazottNevek">
            <?php $__currentLoopData = $alkalmazotts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alkalmazott): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option class='nevekLista' value=<?php echo e($alkalmazott->id); ?>><?php echo e($alkalmazott->nev); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <div id="export">
        <header>
            <h2 id="vekony">10. melléklet</h2>
            <p id="alahuzott">1.számú melléklet a 8/2000. (VIII. 4.) SzCsM rendelethez</p>
            <h3 id="dolt">Adatlap személyes gondoskodást végző személyek működési nyilvántartásba vételéhez</h3>
            <p>Kérjük az adatlapot írógéppel vagy nyomtatott betűkkel töltsék ki!</p>
        </header>
        <aside class="padding">
            <div id="kockak">
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
            </div>
            <p class="jobboldalt">Nyilvántartási szám * :</p>

            <table>
                <tr>
                    <td><p>1. Megye: <input type="text" class="adat" id="megye"></p></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p>2. Név: <input type="text" class="adat" id="nev"></p></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p>3. Születési családi és utónév: <input type="text" class="adat" id="szulNev"></p></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p>4. Neme: <input type="text" class="adat" id="nem"></p></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p>5. Születési hely: <input type="text" class="adat" id="szulHely"></td>
                    <td><p>6. Születési idő: <input type="text" class="adat" id="szulIdo"></td>
                </tr>
                <tr>
                    <td><p>7. Anyja neve:<input type="text" class="adat" id="anyjaNeve"></td>
                    <td><p>8. Állampolgárság:<input type="text" class="adat" id="allamP"></td>
                </tr>
                <tr>
                    <td><p>9. Munkáltató székhelyének neve, címe: <input type="text" class="adat" id="szekHely"></p></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p class="bentebb">A nyilvántartó által megadott kódja:<span>.........................</span></td>
                    <td><p>Telefonszáma:<span>.........................</span></td>
                </tr>
                <tr>
                    <td><p class="bentebb">Telephely neve, címe:<span>.........................</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p class="bentebb">A nyilvántartó által megadott kódja:<span>.........................</span></td>
                    <td><p>Telefonszáma:<span>.........................</span></td>
                </tr>
            </table>
        </aside>
        <article>
            <p class="padding">10. Ellátási forma, intézmény típusa <b>(A megfelelő rész aláhúzandó):</b></p>
            <table>
                <tr>
                    <td class="sor"><p>1. Étkeztetés</p></td>
                    <td class="sor1"><p>14. Gondozási központ </p></td>
                    <td><p>27. Bölcsőde</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>2. Házi segítségnyújtás</p></td>   
                    <td class="sor1"><p>15. Fogyatékosok nappali intézménye</p></td>
                    <td><p class="kivalasztott">28. Családi bölcsőde</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>3. Családsegítés</p></td>
                    <td class="sor1"><p>16. Szenvedélybetegek nappali intézménye</p></td>
                    <td><p>29. Házi gyermekfelügyelet</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>4. Idősek otthona</p></td>
                    <td class="sor1"><p>17. Pszichiátriai betegek nappali intézménye</p></td>
                    <td><p>30. Helyettes szülő</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>5. Pszichiátriai betegek otthona</p></td>
                    <td class="sor1"><p>18. Nappali melegedő</p></td>
                    <td><p>31. Gyermekek átmeneti otthona</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>6. Szenvedélybetegek otthona </p></td>
                    <td class="sor1"><p>19. Időskorúak gondozóháza</p></td>
                    <td><p>32. Családok átmeneti otthona</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>7. Fogyatékos személyek otthona</p></td>
                    <td class="sor1"><p>20. Fogyatékosok gondozóháza</p></td>
                    <td><p>33. Nevelőszülői hálózat</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>8. Hajléktalanok otthona</p></td>
                    <td class="sor1"><p>21. Pszichiátriai és szenvedélybetegek átmeneti otthona</p></td>
                    <td><p>34. Javítóintézet</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>9. Pszichiátriai betegek rehabilitációs intézménye </p></td>
                    <td class="sor1"><p>22. Hajléktalanok éjjeli menedékhelye</p></td>
                    <td><p>35. Gyermekotthon</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>10. Szenvedélybetegek rehabilitációs intézménye</p></td>
                    <td class="sor1"><p>23. Hajléktalanok átmeneti szállása</p></td>
                    <td><p>36. Területi gyermekvédelmi szakszolgálat</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>11. Fogyatékos személyek rehabilitációs intézménye</p></td>
                    <td class="sor1"><p>24. Pszichiátriai betegek lakóotthona</p></td>
                    <td><p>37. Egyéb, éspedig:..............</p></td>
                </tr>
                <tr>
                    <td class="sor"><p>12. Hajléktalan személyek rehabilitációs intézménye</p></td>
                    <td class="sor1"><p>25. Fogyatékos személyek lakóotthona</p></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="sor"><p>13. Idősek klubja</p></td>
                    <td class="sor1"><p>26. Gyermekjóléti szolgálat</p></td>
                    <td></td>
                </tr>
            </table>
        </article>
        <article>
            <div class="padding">
                <table>
                    <tr>
                        <td><p>11. Fenntartó típusa (A megfelelő rész aláhúzandó):</p></td>
                        <td><p>1. állami</p></td>
                        <td><p class="kivalasztott">2. nem állami</p></td>
                        <td><p>3. egyházi</p></td>
                    </tr>
                </table>
            </div>
            <p class="padding">12. Betöltött munkakör; tevékenységi kör <b>(A megfelelő rész aláhúzandó):</b> Az I/2000. (I.7.) SzCsM rendelet illetve a 15/1998. NM rendelet alapján</p>
            <table>
                <tr>
                    <td><p>1. intézményvezető</p></td>
                    <td><p>14. ápoló </p></td>
                    <td><p>27. gyógypedagógus</p></td>
                </tr>
                <tr>
                    <td><p>2. szakmai vezető</p></td>
                    <td><p>15. szociális és mentálhigiénés csoportvezető</p></td>
                    <td><p>28. pszichológus</p></td>
                </tr>
                <tr>
                    <td><p>3. szociális segítő</p></td>
                    <td><p>16. foglalkoztatás szervező</p></td>
                    <td><p>29. fejlesztő pedagógus</p></td>
                </tr>
                <tr>
                    <td><p>4. gondozó </p></td>
                    <td><p>17. helyettes szülői tanácsadó</p></td>
                    <td><p>30. pedagógus</p></td>
                </tr>
                <tr>
                    <td><p>5. szakgondozó </p></td>
                    <td><p>18. nevelő</p></td>
                    <td><p>31. pszichológiai tanácsadó</p></td>
                </tr>
                <tr>
                    <td><p>6. vezető gondozó</p></td>
                    <td><p>19. nevelőszülő</p></td>
                    <td><p>32. gyógytornász</p></td>
                </tr>
                <tr>
                    <td><p>7. családgondozó</p></td>
                    <td><p>20. gyermekfelügyelő </p></td>
                    <td><p>33. konduktor</p></td>
                </tr>
                <tr>
                    <td><p>8. családgondozó asszisztens</p></td>
                    <td><p>21. gyermekvédelmi ügyintéző</p></td>
                    <td><p>34. munkaoktató</p></td>
                </tr>
                <tr>
                    <td><p>9. utógondozó</p></td>
                    <td><p>22. nevelőszülői tanácsadó</p></td>
                    <td><p>35. közvetítő</p></td>
                </tr>
                <tr>
                    <td><p>10. gondozási központ vezető</p></td>
                    <td><p>23. örökbefogadási tanácsadó</p></td>
                    <td><p>36. hivatásos gondnok</p></td>
                </tr>
                <tr>
                    <td><p>11. klubvezető</p></td>
                    <td><p>24. gyermekvédelmi gyám</p></td>
                    <td><p>37. terápiás munkatárs</p></td>
                </tr>
                <tr>
                    <td><p>12. mentálhigiénés munkatárs</p></td>
                    <td><p class="kivalasztott">25. gyermekgondozó</p></td>
                    <td><p>38. egyéb, éspedig:..............</p></td>
                </tr>
                <tr>
                    <td><p>13. szociális munkatárs</p></td>
                    <td><p>26. növendékügyi előadó</p></td>
                    <td></td>
                </tr>
            </table>
        </article>
        <section>
            <div id="kockak2">
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
            </div>
            <p class="padding">13. 1. Jelenlegi munkáltatónál a munkaviszony kezdete:</p>
            <div id="kockak2">
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
                <div class="kocka"></div>
            </div>
            <p class="padding">13. A közalkalmazotti jogviszony, munkaviszony, hivatásos nevelőszülői foglalkoztatási jogviszony</p>
            <p class="bentebb">létesítésének ideje; tevékenység kezdete</p>
            <div class="padding">
                <table>
                    <tr>
                        <td><p>14. Iskolai végzettség <b>(A megfelelő rész aláhúzandó):</b></p></td>
                        <td><p>1. általános iskolai végzettség</p></td>
                        <td><p>2. középfokú végzettség</p></td>
                        <td><p>3. felsőfokú végzettség</p></td>
                    </tr>
                </table>
            </div>
            <p class="padding">15. A szakképzettségre vonatkozó adatok: ): Az I/2000. (I.7.) SzCsM rendelet illetve a 15/1998. NM rendelet alapján</p>
            <table>
                <tr>
                    <th>A képzettség megnevezése</th>
                    <th>Az oklevelet, bizonyítványtkiállító (képző) intézmény</th>
                    <th>Az oklevél, bizonyítvány száma</th>
                    <th>A bizonyítvány, oklevél kiállításánakideje</th>
                </tr>
                <tr>
                    <td><input style="text-align:center;" type="text" class="adat" id="vegzettseg"></td>
                    <td><input style="text-align:center;" type="text" class="adat" id="bizIntezmenyNev"></td>
                    <td><input style="text-align:center;" type="text" class="adat" id="bizonyitvanySz"></td>
                    <td><input style="text-align:center;" type="text" class="adat" id="kiadasDatum"></td>
                </tr>
            </table>
            <div class="padding">
                <table>
                    <tr>
                        <td><p>16. Szakvizsgára kötelezett-e**:</p></td>
                        <td><p>1. Igen</p></td>
                        <td><p class="kivalasztott">2. Nem</p></td>
                    </tr>
                </table>
            </div>
            <p>17. A szakvizsga kötelezettség teljesítésének határideje:</p>
        </section>
        <footer>
            <table id="footer">
                <tr>
                    <td><p>Dátum:<span>.........................</span></p></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><p id="kozepen">P. H.</p></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><p class="jobboldalt1">................................................................</p></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><p class="jobboldalt2">a bejelentésre kötelezett aláírása</p></td>
                </tr>
            </table>

            <p class="padding">* Amennyiben ismert kérjük kitölteni!</p>
            <p>** Az I/2000. (I.7.) SzCsM rendelet illetve a 15/1998. NM rendelet alapján</p>
        </footer>
    </div>
    <input type="submit" value="word exportálása" id="gomb" onclick="Export2Word('export', 'melléklet_10');">
    <input type="button" value="Nyomtatás" onclick="printDiv()" id="gomb"> 
    </main>
</body>
</html><?php /**PATH C:\Users\Bibor\Desktop\Szakdoga\Tipegok\laraveles\resources\views/melleklet10.blade.php ENDPATH**/ ?>