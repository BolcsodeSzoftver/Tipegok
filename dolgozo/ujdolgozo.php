
      <?php
      if (isset($_POST['mentes'])) {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = "bolcsode";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
          die('Could not Connect My Sql:' . mysqli_error());
        } else {
          echo "sikeres kapcsolódás<br>";
        }
        $allapot = $_POST['allapot'];
        $bolcsiNev = $_POST['munkNev'];
        $userId = $_POST['userID'];
        $nev = $_POST['nev'];
        $telefonszam = $_POST['telefonszam'];
        $szulNev = $_POST['szulNev'];
        $anyjaNeve = $_POST['anyjaNeve'];
        $szulHely = $_POST['szulHely'];
        $szulIdo = $_POST['szulIdo'];
        $allPolgarsag = $_POST['allPolgarsag'];
        //választós
        if (isset($_POST['no'])) {
          $neme = $_POST['no'];
        } elseif (isset($_POST['ferfi'])) {
          $neme = $_POST['ferfi'];
        }
        //
        $allandoLakhely = $_POST['allandoLakhely'];
        $tartozkodasiHely = $_POST['tartozkodasiHely'];
        $adoazonJel = $_POST['adoazonJel'];
        $tajszam = $_POST['tajszam'];
        $tizenhatAlattiGyermek = $_POST['tizenhatAlattiGyermek'];
        $bankszamlaSzam = $_POST['bankszamlaSzam'];
        //választós
        if (isset($_POST['igen'])) {
          $hazas_e = $_POST['igen'];
        } elseif (isset($_POST['nem'])) {
          $hazas_e = $_POST['nem'];
        }
        //


        $sql = "INSERT INTO `alkalmazotts`( `bolcsode_id`, `users_id`, `szul_nev`, `szul_hely`, `szul_ido`, `anyja_neve`, `adoazon_jel`, `tajszam`, `nem`,
   `nev`, `banszamla_szam`, `telefonszam`, `allando_lakhely`, `tartozkodasi_hely`, `hazas_e`, `tizenhat_alatti_gyermek`, `all_polgarsag`, `allapot`,) VALUES ('$bolcsiNev', '$userId', '$nev','$szulHely',
         '$szulIdo','$anyjaNeve','$adoazonJel','$tajszam','$neme','$nev','$bankszamlaSzam','$telefonszam','$allandoLakhely','$tartozkodasiHely','$hazas_e','$tizenhatAlattiGyermek',
         '$allPolgarsag','$allapot')";
        $ment = mysqli_query($conn, $sql);
        if ($ment) {
          echo "<b>Sikeres mentés<br>" . $sql;
        } else {
          echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
        }
        mysqli_close($conn);
      }
      ?>
