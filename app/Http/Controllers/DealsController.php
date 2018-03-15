<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Validator;
use Illuminate\Http\Request;
use App\Models\Deals;
use Carbon\Carbon;
use DB;
use Illuminate\Contracts\Logging\Log;
use Auth;
use App\Models\Logs;

class DealsController extends Controller
{
    private $data = [];

    public function index(Request $request)
    {
        $deals = new Deals();
        $this->data['deals'] = $deals->getAllDeals();
        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.deals', $this->data);
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.deals', $this->data);
        }

    }
    public function sort($value){
        $deals = new Deals();
        $this->data['deals'] = $deals->sort($value);

        return view('inc.dealsItems', $this->data);
    }
    public function search($value){
        $deals = new Deals();
        $this->data['deals'] = $deals->search($value);
//        if($this->data['deals']['total'] === 0){
//            return "We don't have deals for that city or state";
//        }
//        else{
            return view('inc.dealsItems', $this->data);
//        }
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
            try {
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
                return redirect('/home/' . $request->input('deal'))->with('success', 'Reservation for ' . $request->input('place') . ' created successfully!');
            }
            catch(\Illuminate\Database\QueryException $ex){
                \Log::error($ex->getMessage());
                return redirect()->back()->with('error','Greska pri dodavanju rezervacije u bazu');
            }
            catch(\ErrorException $ex) {
                \Log::error('Problem sa rezervaciom!! '.$ex->getMessage());
                return redirect()->back()->with('error','Doslo je do greske!');
            }
        }
    }
    public function create()
    {
        //
    }
    public function show($id)
    {
        $item = new Deals();
        $this->data['item'] = $item->item($id);
        return view('pages.item', $this->data);
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
