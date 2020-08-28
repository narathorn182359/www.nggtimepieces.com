<?php
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/new', function () {
    $banner = DB::table('banner')
        ->where('active', '1')
        ->get();

    $data = array(
        'banner' => $banner,
    );

    return view('nggtimepicecesthai.welcome', $data);
});

Route::get('/', function () {
 dd(bcrypt('0000'));
  $banner = DB::table('banner')
->where('active', '1')
->get();

$data = array(
'banner' => $banner,
);

return view('nggtimepieces.nggtimehome', $data); 
});

Route::get('i/index', function () {
    $banner = DB::table('banner')
        ->where('active', '1')
        ->get();

    $data = array(
        'banner' => $banner,
    );

    return view('nggtimepieces.welcome', $data);
});

Route::get('/faq', function () {
    return view('nggtimepieces.faq');
});

Route::get('i/duty', function () {
    return view('nggtimepieces.duty');
});

Route::get('/terms_and_conditions', function () {
    return view('nggtimepieces.terms_and_conditions');
});

Route::get('/privacy_policy', function () {
    return view('nggtimepieces.privacy_policy');
});

Route::get('/trending', function () {
    $trending = DB::table('trending')
        ->orderBy('id', 'desc')
        ->get();

    $data = array(
        'trending' => $trending,
    );

    return view('nggtimepieces.trending', $data);
});

Route::get('/rolex', function () {
    return view('nggtimepieces.rolex');
});

Route::get('/heritage', function () {
    return view('nggtimepieces.heritage');
});

Route::get('/vision', function () {
    return view('nggtimepieces.vision');
});

Route::get('/detailblog/{id}', function ($id) {
    $id_de = Crypt::decrypt($id);
    $blog = DB::table('blog')
        ->where('id_blog', $id_de)
        ->first();

    $data = array(
        'blog' => $blog,
    );

    return view('nggtimepieces.blogdetail', $data);
});

Route::get('contact', function () {
    return view('nggtimepieces.contact');
});

Route::get('/blog', function () {

    $bolg = DB::table('blog')

        ->get();

    $data = array(
        'bolg' => $bolg,
    );

    return view('nggtimepieces.bolg', $data);

});

Route::get('/boutiques', function () {
    $boutiuqes = DB::table('boutiuqes')
        ->where('active', '1')
        ->get();

    $data = array(
        'boutiuqes' => $boutiuqes,
    );

    return view('nggtimepieces.boutiques', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/boutiuqes_admin', 'HomeController@boutiuqes_admin')->name('boutiuqes_admin');

Route::get('/add_boutiuqes', 'HomeController@add_boutiuqes')->name('add_boutiuqes');

Route::post('/save_boutiuqes', 'HomeController@save_boutiuqes')->name('save_boutiuqes');

Route::post('/edit_boutiuqes/{id}', 'HomeController@edit_boutiuqes')->name('edit_boutiuqes');

Route::post('/delete_boutiuqes', 'HomeController@delete_boutiuqes')->name('delete_boutiuqes');

Route::get('/boutiuqes_edit/{id}', 'HomeController@boutiuqes_edit')->name('boutiuqes_edit');

Route::get('/add_trending', 'HomeController@add_trending')->name('add_trending');

Route::post('/save_trending', 'HomeController@save_trending')->name('save_trending');

Route::post('/delete_contact', 'HomeController@delete_contact')->name('delete_contact');

Route::get('/trending_admin', 'HomeController@trending_admin')->name('trending_admin');

Route::get('/contact_detail/{id}', 'HomeController@contact_detail')->name('contact_detail');

Route::post('/save_contact', 'SaveController@save_contact')->name('save_contact');

Route::get('/contact_admin', 'HomeController@contact_admin')->name('contact_admin');

Route::get('/trending_detail/{id}', 'HomeController@trending_detail')->name('trending_detail');

Route::post('/edit_trending/{id}', 'HomeController@edit_trending')->name('edit_trending');

Route::post('/delete_trending', 'HomeController@delete_trending')->name('delete_trending');

Route::get('/blog_admin', 'HomeController@blog_admin')->name('blog_admin');

Route::get('/add_blog', 'HomeController@add_blog')->name('add_blog');

Route::post('/save_blog', 'HomeController@save_blog')->name('save_blog');

Route::get('/blog_edit/{id}', 'HomeController@blog_edit')->name('blog_edit');

Route::post('/edit_blog/{id}', 'HomeController@edit_blog')->name('edit_blog');

Route::post('/delete_blog', 'HomeController@delete_blog')->name('delete_blog');

Route::get('/banner', 'HomeController@banner')->name('banner');
Route::get('/add_banner', 'HomeController@add_banner')->name('add_banner');
Route::post('/save_banner', 'HomeController@save_banner')->name('save_banner');
Route::get('/banner_edit/{id}', 'HomeController@edid_banner')->name('edid_banner');
Route::post('/edit_banner/{id}', 'HomeController@edit_banner')->name('edit_banner');
Route::post('delete_banner', 'HomeController@delete_banner')->name('delete_banner');

////

Route::get('/th', function () {

    $banner = DB::table('banner')
        ->where('active', '1')
        ->get();

    $data = array(
        'banner' => $banner,
    );
    return view('nggtimepicecesthai.welcome', $data);
});

Route::get('/faq', function () {
    return view('nggtimepicecesthai.faq');
});

Route::get('/duty', function () {
    return view('nggtimepicecesthai.duty');
});

Route::get('/terms_and_conditions', function () {
    return view('nggtimepicecesthai.terms_and_conditions');
});

Route::get('/privacy_policy', function () {
    return view('nggtimepicecesthai.privacy_policy');
});

Route::get('/rolex', function () {
    return view('nggtimepicecesthai.rolex');
});

Route::get('th/detailblog/{id}', function ($id) {
    $id_de = Crypt::decrypt($id);
    $blog = DB::table('blog')
        ->where('id_blog', $id_de)
        ->first();

    $data = array(
        'blog' => $blog,
    );

    return view('nggtimepicecesthai.blogdetail', $data);
});

Route::get('blog', function () {

    $bolg = DB::table('blog')

        ->get();

    $data = array(
        'bolg' => $bolg,
    );

    return view('nggtimepicecesthai.bolg', $data);

});

Route::get('confirm/{id}', function ($id) {

    DB::table('contact')
        ->where('key_set', $id)
        ->update([
            'send_mail' => '1',
        ]);

    return view('nggtimepieces.confirm');

});
