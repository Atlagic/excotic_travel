<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Deals;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //---------------------- ADMIN PAGES -----------------------//
    public function index()
    {
        return view('pages.admin.dashboard');
    }
    public function dealsadmin(){
        $deals = DB::table('deals')
            ->select('*')
            ->get();
        return view('pages.admin.dealsadmin', [
            'deals' => $deals
        ]);
    }
    public function galleriesadmin(){
        $pictures = DB::table('galleries')
            ->select('*')
            ->get();
        return view('pages.admin.galleriesadmin')->with('pictures', $pictures);
    }
    public function pagesadmin(){
        $pages = DB::table('pages')
            ->select('*')
            ->get();
        return view('pages.admin.pagesadmin')->with('pages', $pages);
    }
    public function reservationsadmin(){
        $reservations = DB::table('reservation')
            ->select('*')
            ->get();
        return view('pages.admin.reservationsadmin')->with('reservations', $reservations);
    }
    public function usersadmin(){
        $users = DB::table('users')
            ->select('*')
            ->get();
        return view('pages.admin.usersadmin')->with('users', $users);
    }
    public function admins(){
        $admins = DB::table('admins')
            ->select('*')
            ->get();
        return view('pages.admin.admins')->with('admins', $admins);
    }
    //------------------------------------------------------------//


    //---------------------- INSERT PAGES -----------------------//
    public function createDeal()
    {
        return view('pages.admin.create.createdeal');
    }
    public function createGalleries()
    {
        return view('pages.admin.create.creategalleries');
    }
    public function createPages()
    {
        return view('pages.admin.create.createpages');
    }
    public function createReservations()
    {
        return view('pages.admin.create.createreservations');
    }
    public function createUsers()
    {
        return view('pages.admin.create.createusers');
    }
    public function createAdmins()
    {
        return view('pages.admin.create.createadmins');
    }
    //----------------------------------------------------//

    //---------------------- INSERT METHODS -----------------------//
    public function storeDeal(Request $request)
    {
        $this->validate($request,[
            'header' => 'required|max:50|regex:/[A-Z]{1,}[a-z]{2,}/',
            'place' => 'required|max:50|regex:/[A-Z]{1,}[a-z]{2,}/',
            'title' => 'required|max:500',
            'title2' => 'required|max:500',
            'time' => 'required|max:30',
            'price' => 'required|max:20',
            'picture' => 'required|max:100',
        ]);
        DB::table('deals')->insertGetId(
            [
                'header' => $request->input('header'),
                'place' => $request->input('place'),
                'title' => $request->input('title'),
                'title2' => $request->input('title2'),
                'time' => $request->input('time'),
                'price' => $request->input('price'),
                'date' => Carbon::now()->timestamp,
                'picture' => $request->input('picture')
            ]
        );

        return redirect('admin/dealsadmin')->with('success', 'Deal created successfully!');
    }
    public function storeGalleries(Request $request)
    {
        $this->validate($request,[
            'small' => 'required|max:100',
            'big' => 'required|max:100',
            'alt' => 'required|max:50',
        ]);
        DB::table('galleries')->insertGetId(
            [
                'smallPicture' => $request->input('small'),
                'bigPicture' => $request->input('big'),
                'alt' => $request->input('alt'),
            ]
        );

        return redirect('admin/galleriesadmin')->with('success', 'Picture inserted successfully!');
    }
    public function storePages(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:10|regex:/[A-Z]{1,}[a-z]{2,}/',
            'title' => 'required|max:20',
            'url' => 'required|max:50|active_url',
        ]);
        DB::table('pages')->insertGetId(
            [
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'url' => $request->input('url'),
            ]
        );

        return redirect('admin/pagesadmin')->with('success', 'Page inserted successfully!');
    }
    public function storeReservations(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:20|regex:/[A-Z]{1,}[a-z]{2,}/',
            'lastname' => 'required|max:20|regex:/[A-Z]{1,}[a-z]{2,}/',
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
                'time' => Carbon::now()->timestamp
            ]
        );

        return redirect('admin/reservationsadmin')->with('success', 'Reservation inserted successfully!');
    }
    public function storeUsers(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'lastname' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'email' => 'required|email',
            'password' => 'required|max:190',
        ]);
        DB::table('users')->insertGetId(
            [
                'name' => $request->input('name'),
                'lastName' => $request->input('lastname'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request->input('password')),
            ]
        );

        return redirect('admin/usersadmin')->with('success', 'User inserted successfully!');
    }
    public function storeAdmins(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'lastname' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        DB::table('admins')->insertGetId(
            [
                'name' => $request->input('name'),
                'lastName' => $request->input('lastname'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request->input('password')),
            ]
        );

        return redirect('admin/admins')->with('success', 'Admin inserted successfully!');
    }
    //-------------------------------------------------------------------------------------//

    //---------------------- UPDATE PAGES -----------------------//
    public function editDeal($id){
        $deal = DB::table('deals')
            ->select('*')
            ->where('idDeal', $id)
            ->first();
        return view('pages.admin.edit.editdeal')->with('deal', $deal);
    }
    public function editGalleries($id){
        $picture = DB::table('galleries')
            ->select('*')
            ->where('idPicture', $id)
            ->first();
        return view('pages.admin.edit.editgalleries')->with('picture', $picture);
    }
    public function editPages($id){
        $page = DB::table('pages')
            ->select('*')
            ->where('idPage', $id)
            ->first();

        return view('pages.admin.edit.editpages')->with('page', $page);
    }
    public function editReservations($id){
        $reservation = DB::table('reservation')
            ->select('*')
            ->where('idReservation', $id)
            ->first();
        return view('pages.admin.edit.editreservations')->with('reservation', $reservation);
    }
    public function editUsers($id){
        $user = DB::table('users')
            ->select('*')
            ->where('id', $id)
            ->first();
        return view('pages.admin.edit.editusers')->with('user', $user);
    }
    public function editAdmins($id){
        $admin = DB::table('admins')
            ->select('*')
            ->where('id', $id)
            ->first();
        return view('pages.admin.edit.editadmins')->with('admin', $admin);
    }
    //--------------------------------------------------------------------//

    //---------------------- UPDATE METHODS -----------------------//
    public function updateDeal(Request $request, $id){
        $this->validate($request,[
            'header' => 'require',
            'place' => 'required',
            'title' => 'required',
            'title2' => 'required',
            'time' => 'required',
            'price' => 'required',
            'picture' => 'required',
        ]);
        DB::table('deals')->where('idDeal', $id)
                          ->update(
            [
                'header' => $request->input('header'),
                'place' => $request->input('place'),
                'title' => $request->input('title'),
                'title2' => $request->input('title2'),
                'time' => $request->input('time'),
                'price' => $request->input('price'),
                'date' => Carbon::now()->timestamp,
                'picture' => $request->input('picture')
            ]
        );
        return redirect('admin/dealsadmin')->with('success', 'Deal updated successfully!');
    }
    public function updateGalleries(Request $request, $id)
    {
        $this->validate($request,[
            'small' => 'required',
            'big' => 'required',
            'alt' => 'required',
        ]);
        DB::table('galleries')->where('idPicture', $id)
                              ->update(
            [
                'smallPicture' => $request->input('small'),
                'bigPicture' => $request->input('big'),
                'alt' => $request->input('alt'),
            ]
        );

        return redirect('admin/galleriesadmin')->with('success', 'Picture updated successfully!');
    }
    public function updatePages(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'title' => 'required',
            'url' => 'required',
        ]);
        DB::table('pages')->where('idPage', $id)
            ->update(
            [
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'url' => $request->input('url'),
            ]
        );

        return redirect('admin/pagesadmin')->with('success', 'Page updated successfully!');
    }
    public function updateReservations(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'place' => 'required',
            'departure' => 'required',
            'return' => 'required',
            'kids' => 'required',
            'accommodation' => 'required',
        ]);
        DB::table('reservation')->where('idReservation', $id)
            ->update(
            [
                'firstName' => $request->input('name'),
                'lastName' => $request->input('lastname'),
                'place' => $request->input('place'),
                'startDate' => $request->input('departure'),
                'endDate' => $request->input('return'),
                'kids' => $request->input('kids'),
                'accommodation' => $request->input('accommodation'),
                'time' => Carbon::now()->timestamp
            ]
        );

        return redirect('admin/reservationsadmin')->with('success', 'Reservation updated successfully!');
    }
    public function updateUsers(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        DB::table('users')->where('id', $id)
            ->update(
            [
                'name' => $request->input('name'),
                'lastName' => $request->input('lastname'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request->input('password')),
            ]
        );

        return redirect('admin/usersadmin')->with('success', 'User updated successfully!');
    }
    public function updateAdmins(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        DB::table('admins')->where('id', $id)
            ->update(
            [
                'name' => $request->input('name'),
                'lastName' => $request->input('lastname'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request->input('password')),
            ]
        );

        return redirect('admin/admins')->with('success', 'Admin updated successfully!');
    }

    //------------------------------------------------------------------------------------//

    //---------------------- DELETE METHODS -----------------------//

    public function destroyDeal($id){
        DB::table('deals')->where('idDeal', $id)
                          ->delete();
        return redirect('admin/dealsadmin')->with('success', 'Deal deleted successfully!');
    }
    public function destroyGalleries($id){
        DB::table('galleries')->where('idPicture', $id)
            ->delete();
        return redirect('admin/galleriesadmin')->with('success', 'Gallery deleted successfully!');
    }
    public function destroyPages($id){
        DB::table('pages')->where('idPage', $id)
            ->delete();
        return redirect('admin/pagesadmin')->with('success', 'Page deleted successfully!');
    }
    public function destroyReservations($id){
        DB::table('reservation')->where('idReservation', $id)
            ->delete();
        return redirect('admin/reservationsadmin')->with('success', 'Reservation deleted successfully!');
    }
    public function destroyUsers($id){
        DB::table('users')->where('id', $id)
            ->delete();
        return redirect('admin/usersadmin')->with('success', 'User deleted successfully!');
    }
    public function destroyAdmins($id){
        DB::table('admins')->where('id', $id)
            ->delete();
        return redirect('admin/admins')->with('success', 'Admin deleted successfully!');
    }

    //------------------------------------------------------------------------------------//
}
