<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use DB;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(($search = $request->get('search'))){
            $deals = DB::table('deals')
                ->select('*')
                ->where('place', 'like', '%' .$search . '%')
                ->orderBy('date','asc')
                ->paginate(4);
        }else{
            $deals = DB::table('deals')
                ->select('*')
                ->orderBy('date','asc')
                ->paginate(4);

        }
        if(($filter = $request->get('filter'))){
            $deals = DB::table('deals')
                ->select('*')
                ->orderBy('price','desc')
                ->paginate(4);
        }else{
            $deals = DB::table('deals')
                ->select('*')
                ->orderBy('price','asc')
                ->paginate(4);
        }
        return view('pages.deals', [
            'deals' => $deals
        ]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
//    public function orderByAsc(){
//         $asc = DB::table('deals')
//                ->select('*')
//                ->limit(6)
//                ->orderBy('date', 'asc')
//                ->get();
//         return view('pages.orderByAsc')->with('asc', $asc);
//    }
//
//    public function orderByDesc(){
//         $desc = DB::table('deals')
//                ->select('*')
//                ->limit(6)
//                ->orderBy('date', 'desc')
//                ->get();
//         return view('pages.deals')->with('desc', $desc);
//    }

      public function item($id){
          $id = DB::table('deals')
              ->select('*')
              ->get();
          return view('pages.deals', [
              'id' => $id
          ]);
      }


}
