<?php

namespace App\Http\Controllers;

use App\Models\alkalmazott;
use Illuminate\Http\Request;

class alkalmazottAdminSajatAdatController extends Controller
{
    public function update(Request $request, $id)
    {

        $alkalmazott = alkalmazott::findOrFail($request->id);
        $alkalmazott->szul_nev  = $request->szulN;
        $alkalmazott->szul_hely   = $request->szulH;
        $alkalmazott->szul_ido   = $request->szulI;
        $alkalmazott->anyja_neve   = $request->anyjaNeve;
        $alkalmazott->adoazon_jel  = $request->adoAzon;
        $alkalmazott->tajszam  = $request->tajSz;
        $alkalmazott->nem  = $request->nem;
        $alkalmazott->nev   = $request->nev;
        $alkalmazott->banszamla_szam   = $request->bankSZ;
        $alkalmazott->telefonszam   = $request->tel;
        $alkalmazott->allando_lakhely   = $request->allandoLak;
        $alkalmazott->tartozkodasi_hely   = $request->tartHely;
        $alkalmazott->hazas_e   = $request->hazas;
        $alkalmazott->tizenhat_alatti_gyermek    = $request->tizenhatAGy;
        $alkalmazott->all_polgarsag     = $request->allPorg;
        $alkalmazott->save();
        return redirect("/dolgozo");
    }
}
