<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

public function boutiuqes_admin(){
     
       $boutiuqes =  DB::table('boutiuqes')->get();


       $data = array(
               'boutiuqes'  => $boutiuqes
       );
    return view('admin.boutiuqes.boutiuqes_admin',$data);
}

public function add_boutiuqes(){



    return view('admin.boutiuqes.boutiuqes_add');
}

public function save_boutiuqes(Request $request){

    DB::table('boutiuqes')->insert(
[
    'name_boutiuqes' => $request->name_boutiuqes,
    'boutiuqes_detail' => $request->boutiuqes_detail,
]
    );



    return redirect('boutiuqes_admin');


}

    public function boutiuqes_edit($id){

        $id_de = Crypt::decrypt($id);
        $boutiuqes =  DB::table('boutiuqes')
        ->where('id_boutiuqes',$id_de)
        ->first();


        $data = array(
                'boutiuqes'  => $boutiuqes
        );

        return view('admin.boutiuqes.boutiuqes_edit',$data);

    }

    public function edit_boutiuqes(Request $request, $id){


        $id_de = Crypt::decrypt($id);
        DB::table('boutiuqes')
        ->where('id_boutiuqes',$id_de)
        ->update(
            [
                'name_boutiuqes' => $request->name_boutiuqes,
                'boutiuqes_detail' => $request->boutiuqes_detail,
            ]
                );

        return redirect('boutiuqes_admin');
    }
    

    public function delete_boutiuqes(Request $request){


        $id_de = Crypt::decrypt($request->id);
        DB::table('boutiuqes')
        ->where('id_boutiuqes',$id_de)
        ->delete();

        return redirect('boutiuqes_admin');
    }
    

    public function trending_admin(){



        $trending =  DB::table('trending')->get();


        $data = array(
                'trending'  => $trending
        );

        return view('admin.trending.trending_admin',$data);
    }

    
    public function contact_admin(){

        $contact =  DB::table('contact')->get();


        $data = array(
                'contact'  => $contact
        );

        return view('admin.contact.contact_admin',$data);
    }
    



    public function contact_detail($id){
        $id_de = Crypt::decrypt($id);
       $contact  = DB::table('contact')
        ->where('id',$id_de)
        ->first();

        $data = array(
            'contact'  => $contact
    );


        return view('admin.contact.contact_detail',$data);
    }


    


    public function delete_contact(Request $request){


        $id_de = Crypt::decrypt($request->id);
        DB::table('contact')
        ->where('id',$id_de)
        ->delete();

        return redirect('contact_admin');
    }
    

    
    public function add_trending(){

        return view('admin.trending.trending_add');

    }


    public function save_trending(Request $request){

        $imageName = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('img'), $imageName);
        DB::table('trending')->insert([
                 'img'=>$imageName,
                 'detail' => $request->editor1,
                 'created_at'=>Carbon::now(),
               ]);

        return redirect('trending_admin');

    }
    


    public function trending_detail($id){

        $id_de = Crypt::decrypt($id);
        $trending  = DB::table('trending')
         ->where('id',$id_de)
         ->first();
 
         $data = array(
             'trending'  => $trending
           );
 

        return view('admin.trending.trending_edit',$data);

    }


    public function edit_trending(Request $request,$id){
    
        if($request->img != ""){
        $imageName = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('img'), $imageName);
        }
        if($request->img != ""){
            DB::table('trending')
            ->where('id',$id)
            ->update([
                     'img'=>$imageName,
                     'detail' => $request->editor1,
                     'created_at'=>Carbon::now(),
                   ]);
        }
        else
        {
            DB::table('trending')
            ->where('id',$id)
            ->update([
                     'detail' => $request->editor1,
                     'created_at'=>Carbon::now(),
                   ]);
        }
      

        return redirect('trending_admin');
    


    }
    
    

    public function delete_trending(Request $request){

        $id_de = Crypt::decrypt($request->id);
        DB::table('trending')
        ->where('id',$id_de)
        ->delete();

        return redirect('trending_admin');


    }
    


    public function blog_admin(){

      
         $blog =DB::table('blog')->get();



        $data = array(
            'blog'  => $blog
          );
        return view('admin.blog.blog_admin',$data);


    }


    public function add_blog(){

      
       return view('admin.blog.blog_add');


   }

   
   public function save_blog(Request $request){

    if($request->img_title != ""){
        $imageName = time().'.'.$request->img_title->getClientOriginalExtension();
        $request->img_title->move(public_path('img'), $imageName);
        }
        if($request->img_title != ""){
            DB::table('blog')
          
            ->insert([
                     'img'=>$imageName,
                     'name_blog' => $request->name_blog,
                     'blog_detail' => $request->boutiuqes_detail,
                     'titel_blog' => $request->titel_blog,
                     'created_at'=>Carbon::now(),
                   ]);
        }
        else
        {
            DB::table('blog')
            ->insert([
                'name_blog' => $request->name_blog,
                'blog_detail' => $request->boutiuqes_detail,
                'titel_blog' => $request->titel_blog,
                'created_at'=>Carbon::now(),
                   ]);
        }




    return redirect('blog_admin');


}

 public function blog_edit($id)
 
 {

    $id_de = Crypt::decrypt($id);
    $blog  = DB::table('blog')
     ->where('id_blog',$id_de)
     ->first();

     $data = array(
         'blog'  => $blog
       );

    return view('admin.blog.blog_edit',$data);
     
 }


 
 public function edit_blog(Request $request , $id){

    if($request->img_title != ""){
        $imageName = time().'.'.$request->img_title->getClientOriginalExtension();
        $request->img_title->move(public_path('img'), $imageName);
        }
        if($request->img_title != ""){
            DB::table('blog')
            ->where('id_blog',$id)
            ->update([
                     'img'=>$imageName,
                     'name_blog' => $request->name_blog,
                     'blog_detail' => $request->boutiuqes_detail,
                     'titel_blog' => $request->titel_blog,
                     'created_at'=>Carbon::now(),
                   ]);
        }
        else
        {
            DB::table('blog')
            ->where('id_blog',$id)
            ->update([
                'name_blog' => $request->name_blog,
                'blog_detail' => $request->boutiuqes_detail,
                'titel_blog' => $request->titel_blog,
                'created_at'=>Carbon::now(),
                   ]);
        }




    return redirect('blog_admin');

 }





 public function delete_blog(Request $request){

    $id_de = Crypt::decrypt($request->id);
    DB::table('blog')
    ->where('id_blog',$id_de)
    ->delete();

    return redirect('blog_admin');


}

public function banner()
{

   
    $banner  = DB::table('banner')->get();

     $data = array(
         'banner'  => $banner
       );

    return view('admin.banner.banner_admin',$data);

}



public function add_banner()
{

   


    return view('admin.banner.banner_add');

}

public function save_banner(Request $request)
{
    $imageName = time().'.'.$request->img->getClientOriginalExtension();
    $request->img->move(public_path('img'), $imageName);

   DB::table('banner')
   ->insert([
       'name_banner' => $request->name_banner,
       'img' => $imageName,
       'created_at' => Carbon::now(),
   ]);   
   

    return redirect('banner');

}



public function edid_banner($id)
 
{

   $id_de = Crypt::decrypt($id);
   $banner  = DB::table('banner')
    ->where('id_banner',$id_de)
    ->first();

    $data = array(
        'banner'  => $banner
      );

   return view('admin.banner.banner_edit',$data);
    
}


public function edit_banner(Request $request,$id)
 {

    if($request->img != ""){
        $imageName = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('img'), $imageName);
        }
        $banner  = DB::table('banner')
        ->where('id_banner',$id)
        ->first();
        $image_path = "/img/".$banner->img ;
        // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
            
        }
        if($request->img != ""){
            DB::table('banner')
            ->where('id_banner',$id)
            ->update([
             'name_banner' => $request->name_banner,
             'img' => $imageName,
             'created_at' => Carbon::now(),
             ]);   
        }
        else
        {
            DB::table('banner')
            ->where('id_banner',$id)
            ->update([
                'name_banner' => $request->name_banner,
                'created_at' => Carbon::now(),
            ]);   
        }




    return redirect('banner');


 }

 public function delete_banner(Request $request){

    $id_de = Crypt::decrypt($request->id);
    DB::table('banner')
    ->where('id_banner',$id_de)
    ->delete();

    return redirect('banner');


}



/*

$image_path = "/images/filename.ext";  // Value is not URL but directory file path
if(File::exists($image_path)) {
    File::delete($image_path);
}

*/



}
