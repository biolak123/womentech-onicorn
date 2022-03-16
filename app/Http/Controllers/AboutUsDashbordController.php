<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


class AboutUsDashbordController extends Controller
{
    public function getUpdateAboutUs($id)
    {
        
       
        $about_us = DB::table('about_us')->where('id',$id)->get();
       
        return View('backend.layouts.About-Us.editAboutUsHome')->with('about',$about_us);
    }
    public function postUpdateAboutUs($id, Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['content_2'] = $request->content_2;
        $data['content_3'] = $request->content_3;
        $data['link_video'] = $request->link_video;
       
        
        DB::table('about_us')->where('id',$id)->update($data);
        return Redirect::to('/about-us/edit/'.$id)->with('message','Cập nhập about us home thành công');
    }
    public function getUpdateBanner($id)
    {
        
       
        $banner = DB::table('banner_home')->where('id',$id)->get();
       
        return View('backend.layouts.Banner-home.editBannerHome')->with('banner',$banner);
    }
    public function postUpdateBanner($id, Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        
        $data['link'] = $request->link;
        $data['button_name'] = $request->button_name;
        if ($request->hasFile('image_banner')) {
            $file = $request->image_banner;
            $file_name = Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            $file_name_2 = "press".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            //$file_name_3 = "teacher".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
            //resize file befor to upload large
                if ($file->getClientOriginalExtension() != "svg") {
                    // $image_resize = Image::make($file->getRealPath());
                    // $thumb_size = json_decode($settings["THUMB_SIZE_TEACHERS"]);
                    // $image_resize->fit($thumb_size->width, $thumb_size->height);
                    // $image_resize->save('public/upload/images/teachers/thumb/' . $file_name);

                    $image_resize_2 = Image::make($file->getRealPath());
                    $image_resize_2->fit(1920, 658);
                    $image_resize_2->save('public/frontend/images/' . $file_name_2);
                }   
            // close upload image
            $file->move("public/frontend/images/", $file_name);
            //save database
            $data['image_banner'] = $file_name;
            DB::table('banner_home')->where('id',$id)->update($data);
          
            return Redirect::to('/banner-home/edit/'.$id)->with('message','Cập nhập banner home thành công');
        }
        
        DB::table('banner_home')->where('id',$id)->update($data);
        return Redirect::to('/banner-home/edit/'.$id)->with('message','Cập nhập banner home thành công');
    }
}
