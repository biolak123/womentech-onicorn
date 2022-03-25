<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsFrontendController extends Controller
{
    public function getIndexNewENG(){
         $all_new = DB::table('news')->select('news.*');
         $all_new = $all_new->orderBy("news.id","DESC");
         $all_new = $all_new->paginate(6);
         $all_press = DB::table('press')->select('press.*');
         $all_press = $all_press->orderBy("press.id","DESC");
         $all_press = $all_press->paginate(6);
        return View('frontend.layout.English.news-ENG')->with('news',$all_new)->with('press',$all_press);
    }
    // public function getIndexPartnerHomeENG(){
    //     $all_partner = DB::table('partner')->select('partner.*')->get();
    //     $all_partner = $all_partner->orderBy("partner.id","DESC");
    //     $all_partner = $all_partner->paginate(7);
    //     // var_dump($all_partner).die();
      
    //     return View('frontend.layout.VietNam.home')->with('partner', $all_partner);
    // }
    public function getIndexHomeENG(){
        $about_us = DB::table('about_us')->get();
        $banner = DB::table('banner_home')->first();
        $all_partner = DB::table('partner')->get();
        // $all_press = DB::table('press')->select('press.*');
        // $all_press = $all_press->orderBy("press.id","DESC");
        // $all_press = $all_press->paginate(6);
        //var_dump($about_us).die();
  
       return View('frontend.layout.English.home-ENG')->with('about',$about_us)->with('banner',$banner)->with('partner', $all_partner);
   }
   public function getIndexAboutENG(){
            // $all_new = DB::table('news')->select('news.*');
            // $all_new = $all_new->orderBy("news.id","DESC");
            // $all_new = $all_new->paginate(6);
            // $all_press = DB::table('press')->select('press.*');
            // $all_press = $all_press->orderBy("press.id","DESC");
            // $all_press = $all_press->paginate(6);
        return View('frontend.layout.English.about-ENG');
    }
        public function getIndexServiceENG(){
            // $all_new = DB::table('news')->select('news.*');
            // $all_new = $all_new->orderBy("news.id","DESC");
            // $all_new = $all_new->paginate(6);
            // $all_press = DB::table('press')->select('press.*');
            // $all_press = $all_press->orderBy("press.id","DESC");
            // $all_press = $all_press->paginate(6);
        return View('frontend.layout.English.dichvu-ENG');
    }
    public function getIndexDocthemENG(){
            // $all_new = DB::table('news')->select('news.*');
            // $all_new = $all_new->orderBy("news.id","DESC");
            // $all_new = $all_new->paginate(6);
            // $all_press = DB::table('press')->select('press.*');
            // $all_press = $all_press->orderBy("press.id","DESC");
            // $all_press = $all_press->paginate(6);
        return View('frontend.layout.English.docthem-ENG');
    }
    public function getIndexContactENG(){
        // $all_new = DB::table('news')->select('news.*');
        // $all_new = $all_new->orderBy("news.id","DESC");
        // $all_new = $all_new->paginate(6);
        // $all_press = DB::table('press')->select('press.*');
        // $all_press = $all_press->orderBy("press.id","DESC");
        // $all_press = $all_press->paginate(6);
    return View('frontend.layout.English.lienhe-ENG');
}
public function getIndexTokenENG(){
    // $all_new = DB::table('news')->select('news.*');
    // $all_new = $all_new->orderBy("news.id","DESC");
    // $all_new = $all_new->paginate(6);
    // $all_press = DB::table('press')->select('press.*');
    // $all_press = $all_press->orderBy("press.id","DESC");
    // $all_press = $all_press->paginate(6);
return View('frontend.layout.English.lotrinh-ENG');
}
public function getIndexPrivacyPolicyENG(){
    // $all_new = DB::table('news')->select('news.*');
    // $all_new = $all_new->orderBy("news.id","DESC");
    // $all_new = $all_new->paginate(6);
    // $all_press = DB::table('press')->select('press.*');
    // $all_press = $all_press->orderBy("press.id","DESC");
    // $all_press = $all_press->paginate(6);
return View('frontend.layout.English.privacyPolicy-ENG');
}
public function getIndexTermofuseENG(){
    // $all_new = DB::table('news')->select('news.*');
    // $all_new = $all_new->orderBy("news.id","DESC");
    // $all_new = $all_new->paginate(6);
    // $all_press = DB::table('press')->select('press.*');
    // $all_press = $all_press->orderBy("press.id","DESC");
    // $all_press = $all_press->paginate(6);
return View('frontend.layout.English.Termofuse-ENG');
}

// ---------------------------------
// ---------------------------------
// ---------------------------------
// ---------------------------------

public function getIndexNewVn(){
    $all_new = DB::table('news')->select('news.*');
        $all_new = $all_new->orderBy("news.id","DESC");
        $all_new = $all_new->paginate(6);
        $all_press = DB::table('press')->select('press.*');
        $all_press = $all_press->orderBy("press.id","DESC");
        $all_press = $all_press->paginate(6);
        return View('frontend.layout.Vietnam.TinTuc')->with('news',$all_new)->with('press',$all_press);
}

//partner in the home page
public function getIndexPartnerHomeVn(){
    $all_partner = DB::table('partner')->select('partner.*');
    $all_partner = $all_partner->orderBy("partner.id","DESC");
    $all_partner = $all_partner->paginate(10);
    // var_dump($all_partner).die();
    return View('frontend.layout.VietNam.home')->with('partner', $all_partner);
}
//public function getPartner
public function getIndexHomeVn(){
    return View('frontend.layout.Vietnam.home');
}
public function getIndexAboutVn(){
    return View('frontend.layout.Vietnam.about');
}
public function getIndexServiceVn(){
    return View('frontend.layout.Vietnam.DichVu');
}
public function getIndexDocthemVn(){
    return View('frontend.layout.Vietnam.DocThem');
}
public function getIndexContactVn(){
    return View('frontend.layout.Vietnam.Lienhe');
}
public function getIndexTokenVn(){
    return View('frontend.layout.Vietnam.LoTrinh');
}
public function getIndexPrivacyPolicyVn(){
    return View('frontend.layout.Vietnam.privacyPolicy');
}
public function getIndexTermofuseVn(){
    return View('frontend.layout.Vietnam.Termofuse');
}

public function getIndexfdf(){
    return View('frontend.partial.pdf');
}

public function getIndexHoTro(){
    return View('frontend.layout.Vietnam.huongdanchung');
}

public function getIndexHelp(){
    return View('frontend.layout.English.help');
}
public function getIndexpdf(){
    return View('frontend.partial.pdf');
}


}
