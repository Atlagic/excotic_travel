<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Offer;
use Carbon\Carbon;
use DB;
use Auth;

class OfferController extends Controller
{
    private $data = [];

    public function index(Request $request)
    {
        $offer = new Offer();
        $this->data['offers'] = $offer->getAllOffers();

        return view('pages.home', $this->data);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        if($request->has('reserve')) {
            $this->validate($request, [
                'name' => 'required',
                'lastname' => 'required',
                'place' => 'required|max:50',
                'departure' => 'required|date',
                'return' => 'required|date|after:tomorrow',
                'kids' => 'required|max:10|not_in:kids',
                'accommodation' => 'required|max:20|not_in:accommodation',
            ]);
            DB::table('reservation')->insertGetId(
                [
                    'firstName' => $request->input('name'),
                    'lastName' => $request->input('lastname'),
                    'place' => $request->input('place'),
                    'startDate' => $request->input('departure'),
                    'endDate' => $request->input('return'),
                    'kids' => $request->input('kids'),
                    'accommodation' => $request->input('accommodation'),
                    'time' => Carbon::now()
                ]
            );
            return redirect('/home/'.$request->input('deal'))->with('success', 'Reservation for '.$request->input('place').' created successfully!');
        }

    }
    public function show($id)
    {
        $item = new Offer();
        $this->data['item'] = $item->item($id);
        $comments = new Comments();
        $this->data['comments'] = $comments->getComments($id);
        return view('pages.offerItem', $this->data);
    }
    public function storeComment(Request $request)
    {
        if($request->has('comment')) {
            $this->validate($request, [
                'content' => 'required|max:200',
            ]);
            DB::table('comments')->insertGetId(
                [
                    'content' => $request->input('content'),
                    'idDeal' => $request->input('deal'),
                    'idUser' => $request->input('user'),
                    'ctime' => Carbon::now(),
                ]
            );
            return redirect('/home/'.$request->input('deal'))->with('success', Auth::user()->name.', you inserted comment successfully!');
        }
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
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
}
