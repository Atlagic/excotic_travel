<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Deals;
use App\Admin;
use DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //---------------------- ADMIN PAGES -----------------------//
    public function index()
    {
        $activity = new Admin();
        $this->data['logs'] = $activity->getLogs();

        return view('pages.admin.dashboard', $this->data);
    }
    public function dealsadmin(){
        $deals = new Admin();
        $this->data['deals'] = $deals->getDeals();

        return view('pages.admin.dealsadmin', $this->data);
    }
    public function galleriesadmin(){
        $pictures = new Admin();
        $this->data['pictures'] = $pictures->getGalleries();

        return view('pages.admin.galleriesadmin', $this->data);
    }
    public function pagesadmin(){
        $pages = new Admin();
        $this->data['pages'] = $pages->getPages();

        return view('pages.admin.pagesadmin', $this->data);
    }
    public function reservationsadmin(){
        $reservations = new Admin();
        $this->data['reservations'] = $reservations->getReservations();

        return view('pages.admin.reservationsadmin', $this->data);
    }
    public function usersadmin(){
        $users = new Admin();
        $this->data['users'] = $users->getUsers();

        return view('pages.admin.usersadmin', $this->data);
    }
    public function admins(){
        $admins = new Admin();
        $this->data['admins'] = $admins->getAdmins();

        return view('pages.admin.admins', $this->data);
    }
    public function commentsadmin(){
        $comments = new Admin();
        $this->data['comments'] = $comments->getComments();

        return view('pages.admin.commentsadmin', $this->data);
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
    public function createComments()
    {
        return view('pages.admin.create.createcomments');
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
            'picture' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
        ]);
        if($request->hasFile('picture')){
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        try{
            DB::table('deals')->insertGetId(
                [
                    'header' => $request->input('header'),
                    'place' => $request->input('place'),
                    'title' => $request->input('title'),
                    'title2' => $request->input('title2'),
                    'time' => $request->input('time'),
                    'price' => $request->input('price'),
                    'date' => Carbon::now()->timestamp,
                    'picture' => $fileNameToStore
                ]
            );
            return redirect('admin/dealsadmin')->with('success', 'Deal created successfully!');
        }
        catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $ex) {
            \Log::error('Problem sa fajlom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Greska pri dodavanju slike!');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa fajlom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function storeGalleries(Request $request)
    {
        $this->validate($request,[
            'small' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
            'big' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
            'alt' => 'required|max:50',
        ]);
        if( $request->hasFile('small') && $request->hasFile('big') ){
            $fileNameWithExtSmall = $request->file('small')->getClientOriginalName();
            $fileNameWithExtBig = $request->file('big')->getClientOriginalName();

            $fileNameSmall = pathinfo($fileNameWithExtSmall, PATHINFO_FILENAME);
            $fileNameBig = pathinfo($fileNameWithExtBig, PATHINFO_FILENAME);

            $extensionSmall = $request->file('small')->getClientOriginalExtension();
            $extensionBig = $request->file('big')->getClientOriginalExtension();

            $fileNameToStoreSmall = $fileNameSmall.'.'.$extensionSmall;
            $fileNameToStoreBig = $fileNameBig.'.'.$extensionBig;

            $pathSmall = $request->file('small')->storeAs('public/smallPictures', $fileNameToStoreSmall);
            $pathBig = $request->file('big')->storeAs('public/pictures', $fileNameToStoreBig);

            if(file_exists($fileNameToStoreSmall && $fileNameToStoreBig)){
                @unlink($fileNameToStoreSmall);
                @unlink($fileNameToStoreBig);
            }
        }else{
            $fileNameToStoreSmall = 'nosmallimage.jpg';
            $fileNameToStoreBig = 'nobigimage.jpg';
        }
        try{
            DB::table('galleries')->insertGetId(
                [
                    'smallPicture' => $fileNameToStoreSmall,
                    'bigPicture' => $fileNameToStoreBig,
                    'alt' => $request->input('alt'),
                ]
            );

            return redirect('admin/galleriesadmin')->with('success', 'Picture inserted successfully!');
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri dodavanju galerije u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa fajlom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }

    }
    public function storePages(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:10|regex:/[A-Z]{1,}[a-z]{2,}/',
            'title' => 'required|max:20',
            'url' => 'required|max:50|active_url',
        ]);
        try{
            DB::table('pages')->insertGetId(
                [
                    'name' => $request->input('name'),
                    'title' => $request->input('title'),
                    'url' => $request->input('url'),
                ]
            );

            return redirect('admin/pagesadmin')->with('success', 'Page inserted successfully!');
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri dodavanju stranice u bazu');
        }
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
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri dodavanju rezervacije u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa rezervaciom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function storeUsers(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'lastname' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'email' => 'required|email',
            'password' => 'required|max:190',
        ]);
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri dodavanju korisnika u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa korisnicima!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function storeAdmins(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'lastname' => 'required|regex:/[A-Z]{1,}[a-z]{2,}/',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
        \Log::error($ex->getMessage());
        return redirect()->back()->with('error','Greska pri dodavanju admina u bazu');
        }
        catch(\ErrorException $ex) {
        \Log::error('Problem sa korisnicima!! '.$ex->getMessage());
        return redirect()->back()->with('error','Doslo je do greske!');
         }
    }
    public function storeComments(Request $request)
    {
        $this->validate($request,[
            'content' => 'required|max:200',
            'deal' => 'required',
            'user' => 'required',
        ]);
        try{
            DB::table('comments')->insertGetId(
                [
                    'content' => $request->input('content'),
                    'idDeal' => $request->input('deal'),
                    'idUser' => $request->input('user'),
                    'ctime' =>  Carbon::now(),
                ]
            );

            return redirect('admin/commentsadmin')->with('success', 'Comment inserted successfully!');
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
    //-------------------------------------------------------------------------------------//

    //---------------------- UPDATE PAGES -----------------------//
    public function editDeal($id){
        $deal = new Admin();
        $this->data['deal'] = $deal->editD($id);

        return view('pages.admin.edit.editdeal', $this->data);
    }
    public function editGalleries($id){
        $picture = new Admin();
        $this->data['picture'] = $picture->editG($id);

        return view('pages.admin.edit.editgalleries', $this->data);
    }
    public function editPages($id){
        $page = new Admin();
        $this->data['page'] = $page->editP($id);

        return view('pages.admin.edit.editpages', $this->data);
    }
    public function editReservations($id){
        $reservation = new Admin();
        $this->data['reservation'] = $reservation->editR($id);

        return view('pages.admin.edit.editreservations', $this->data);
    }
    public function editUsers($id){
        $user = new Admin();
        $this->data['user'] = $user->editU($id);

        return view('pages.admin.edit.editusers', $this->data);
    }
    public function editAdmins($id){
        $admin = new Admin();
        $this->data['admin'] = $admin->editA($id);

        return view('pages.admin.edit.editadmins', $this->data);
    }
    public function editComments($id){
        $comment = new Admin();
        $this->data['comment'] = $comment->editC($id);

        return view('pages.admin.edit.editcomments', $this->data);
    }
    //--------------------------------------------------------------------//

    //---------------------- UPDATE METHODS -----------------------//
    public function updateDeal(Request $request, $id){
        $this->validate($request,[
            'header' => 'required',
            'place' => 'required|max:50|regex:/[A-Z]{1,}[a-z]{2,}/',
            'title' => 'required|max:500',
            'title2' => 'required|max:500',
            'time' => 'required|max:30',
            'price' => 'required|max:20',
            'picture' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
        ]);
        if($request->hasFile('picture')){
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        try{
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
                    'picture' => $fileNameToStore
                ]
            );
            return redirect('admin/dealsadmin')->with('success', 'Deal updated successfully!');
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju posta u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa postom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function updateGalleries(Request $request, $id)
    {
        $this->validate($request,[
            'small' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
            'big' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
            'alt' => 'required|max:50',
        ]);
        if( $request->hasFile('small') && $request->hasFile('big') ){
            $fileNameWithExtSmall = $request->file('small')->getClientOriginalName();
            $fileNameWithExtBig = $request->file('big')->getClientOriginalName();

            $fileNameSmall = pathinfo($fileNameWithExtSmall, PATHINFO_FILENAME);
            $fileNameBig = pathinfo($fileNameWithExtBig, PATHINFO_FILENAME);

            $extensionSmall = $request->file('small')->getClientOriginalExtension();
            $extensionBig = $request->file('big')->getClientOriginalExtension();

            $fileNameToStoreSmall = $fileNameSmall.'.'.$extensionSmall;
            $fileNameToStoreBig = $fileNameBig.'.'.$extensionBig;

            $pathSmall = $request->file('small')->storeAs('public/smallPictures', $fileNameToStoreSmall);
            $pathBig = $request->file('big')->storeAs('public/pictures', $fileNameToStoreBig);
            if(file_exists($fileNameToStoreSmall && $fileNameToStoreBig)){
                @unlink($fileNameToStoreSmall);
                @unlink($fileNameToStoreBig);
            }
        }else{
            $fileNameToStoreSmall = 'nosmallimage.jpg';
            $fileNameToStoreBig = 'nobigimage.jpg';
        }
        try{
            DB::table('galleries')->where('idPicture', $id)
                                  ->update(
                [
                    'smallPicture' => $fileNameToStoreSmall,
                    'bigPicture' => $fileNameToStoreBig,
                    'alt' => $request->input('alt'),
                ]
            );

            return redirect('admin/galleriesadmin')->with('success', 'Picture updated successfully!');
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju galerije u bazu');
        }
        catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $ex) { // greske sa fajlom
            \Log::error('Problem sa fajlom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Greska pri dodavanju slike!');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa galerijom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function updatePages(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'title' => 'required',
            'url' => 'required',
        ]);
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju stranice u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa stranicama!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }

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
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju rezervacije u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa rezervaciom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function updateUsers(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju korisnika u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa korisnicima!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function updateAdmins(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        try{
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
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju administratora u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa administratorom!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }
    public function updateComments(Request $request, $id)
    {
        $this->validate($request,[
            'content' => 'required|max:200',
            'deal' => 'required',
            'user' => 'required',
        ]);
        try{
            DB::table('comments')->where('idComment', $id)
                ->update(
                    [
                        'content' => $request->input('content'),
                        'idDeal' => $request->input('deal'),
                        'idUser' => $request->input('user'),
                        'ctime' =>  Carbon::now(),
                    ]
                );

            return redirect('admin/commentsadmin')->with('success', 'Comment updated successfully!');
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Log::error($ex->getMessage());
            return redirect()->back()->with('error','Greska pri azuriranju komentara u bazu');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa komentarima!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
    }

    //------------------------------------------------------------------------------------//

    //---------------------- DELETE METHODS -----------------------//

    public function destroyDeal($id){
        DB::table('deals')->where('idDeal', $id)
                          ->delete();
        return redirect('admin/dealsadmin')->with('success', 'Deal deleted successfully!');
    }
    public function destroyGalleries($id){
        $delete = DB::table('galleries')
            ->select('*')
            ->where('idPicture', $id)
            ->first();
        File::delete(['storage/smallPictures/'.$delete->smallPicture, 'storage/pictures/'.$delete->bigPicture]);

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
    public function destroyComment($id){
        DB::table('comments')->where('idComment', $id)
            ->delete();
        return redirect('admin/commentsadmin')->with('success', 'Comment deleted successfully!');
    }

    //------------------------------------------------------------------------------------//
}
