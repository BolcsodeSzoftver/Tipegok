<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\alkalmazott;
use Illuminate\Support\Facades\DB;

class dolgozController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * -Ezt használjuk az összes megjegyzés lekéréséhez. 
     */
    public function index()
    {
        /*  $alkalmazott = alkalmazott::all();
        return response()->json(alkalmazott::all()); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*   $alkalmazott = new alkalmazott();
        $alkalmazott->szul_nev  = $request->szul_nev;
        $alkalmazott->szul_hely   = $request->szul_hely;
        $alkalmazott->szul_ido   = $request->szul_ido;
        $alkalmazott->anyja_neve   = $request->anyja_neve;
        $alkalmazott->adoazon_jel  = $request->adoazon_jel;
        $alkalmazott->tajszam  = $request->tajszam;
        $alkalmazott->nem  = $request->nem;
        $alkalmazott->nev   = $request->nev;
        $alkalmazott->banszamla_szam   = $request->banszamla_szam;
        $alkalmazott->telefonszam   = $request->telefonszam;
        $alkalmazott->allando_lakhely   = $request->allando_lakhely;
        $alkalmazott->tartozkodasi_hely   = $request->tartozkodasi_hely;
        $alkalmazott->hazas_e   = $request->hazas_e;
        $alkalmazott->tizenhat_alatti_gyermek    = $request->tizenhat_alatti_gyermek;
        $alkalmazott->all_polgarsag     = $request->all_polgarsag;

        $alkalmazott->save(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*   $alkalmazott = alkalmazott::findOrFail($id);
        return response()->json($alkalmazott); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*  $alkalmazotts = alkalmazott::find($id);
        return view('dolgozo', compact('alkalmazotts', 'id')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Az update() metódus hasonló a store() metódushoz, de ahelyett, hogy új megjegyzést hozna létre, először megragadja a meglévő kért megjegyzést
     * a findOrFail($id) paraméterrel. Ezután érvényesíti az új kérést, frissíti a meglévő megjegyzést, 
     * ha a kérelem érvényes, menti az adatbázisba, és visszaküldi a frissített megjegyzést.
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = alkalmazott::find($id);
        $flight->delete();
        return redirect("/dolgozo");
    }

    public function dolgozoKeres($szo)
    {
        /* $alkalmazott = alkalmazott::where('nev',$szo)->get(); */
        /*    $alkalmazott = alkalmazott::all();
        return response()->json($alkalmazott); */
    }

    /* public function search(Request $request)
    {
        $queryString = $request->query('q');
        $tasks=alkalmazott::select('*');
        $columns = \Schema::getColumnListing('alkalmazott');

        foreach ($columns as $column) {
            $tasks->orWhere(function ($tasks) use ($column, $queryString){
                $tasks->orWhere($column,'like', '%' . $queryString . '%');
            });
        }

        return $tasks->get();
    } */

    public $search = '';
    public function allapot()
    {
        $alkalmazott = alkalmazott::all();
        $alkalmazotts = alkalmazott::paginate(5);

        return view(
            'dolgozo',
            ['alkalmazott' => alkalmazott::search('nev', $this->search)->paginate()],
            compact('alkalmazott', 'alkalmazotts')
        );
    }


    /* public $sortField;
    public $sortDirection='asc';

    public function sortBy($field){
        if($this->sortField===$field){
            $this->sortDirection=$this->sortDirection==='asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection='asc';
        }
        $this->sortField=$field;
    }

    public function rendez(){
        return view('dolgozo', [
            'alkalmazott' => alkalmazott::search('nev', $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(5),
        ]);
    } */
}
