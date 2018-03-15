<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Logs;
use Carbon\Carbon;
use DB;
use Auth;
use Illuminate\Support\Facades\Log;

class OfferController extends Controller
{
    private $data = [];

    public function index(Request $request)
    {
        $offer = new Offer();
        $this->data['offers'] = $offer->getAllOffers();
        Log::info(Carbon::now());
        Log::info($request->header('User-Agent'));
        Log::info($request->url());
        Log::info($request->ip());
        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.home', $this->data);
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.home', $this->data);
        }
    }
    public function create()
    {
        //
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
            try {
                DB::table('comments')->insertGetId(
                    [
                        'content' => $request->input('content'),
                        'idDeal' => $request->input('deal'),
                        'idUser' => $request->input('user'),
                        'ctime' => Carbon::now(),
                    ]
                );
                return redirect('/home/' . $request->input('deal'))->with('success', Auth::user()->name . ', you inserted comment successfully!');
            }
            catch(\Illuminate\Database\QueryException $ex){
                \Log::error($ex->getMessage());
                return redirect()->back()->with('error','Greska pri dodavanju komentara u bazu');
            }
            catch(\ErrorException $ex) {
                \Log::error('Problem sa korisnicima!! '.$ex->getMessage());
                return redirect()->back()->with('error','Doslo je do greske!');
            }
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
}
