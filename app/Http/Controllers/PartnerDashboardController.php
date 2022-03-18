<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class PartnerDashboardController extends Controller
{
    //get all partner
    public function getPartner(){
        $all_partner = DB::table('partner')->select('partner.*');
        $all_partner = $all_partner-> orderBy("partner.id","DESC");
        $all_partner = $all_partner->paginate(15);
        return View('backend.layouts.Partner.allPartner')->with('all_partner',$all_partner);
    }
    //get add partner 
    public function getAddPartner(){
        return View('backend.layouts.Partner.addPartner');
    }
    //get save partner
    public function getSavePartner(Request $request){
        $data = array();
        $data['name_partner'] = $request->title;
       
        $get_image = $request->file('image_partner');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            
            $get_image->move('public/backend/images/partner/', $new_image);
            $data['image_partner'] = $new_image;

            DB::table('partner')->insert($data);
          
            return Redirect::route('admin.partner')->with([ "message" => "Thêm we would thành công!"]);;
        }
        $data['image_partner'] = '';
         DB::table('partner')->insert($data);
        return Redirect::route('admin.artnerd')->with('message','Thêm we would thành công');

       
        // // $get_image = $request->file('image');
        // // if ($get_image) {
        // //     $get_name = $get_image->getClientOriginalName();
        // //     $name_image = current(explode('.', $get_name));
        // //     $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        // //     $get_image->move('backend/images/partner/', $new_image);
        // //     $data['image'] = $new_image;
        // //     DB::table('press')->insert($data);
          
        // //     return Redirect::route('admin.press')->with([ "message" => "Thêm báo chí thành công!"]);;
        // // }
        // // $data['image'] = '';
        // if ($request->hasFile('image_partner')) {
        //     $file = $request->image_partner;
        //     $file_name = Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
        //     $file_name_2 = "partner".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
        //     //$file_name_3 = "teacher".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
        //     //resize file befor to upload large
        //         if ($file->getClientOriginalExtension() != "svg") {
        //             // $image_resize = Image::make($file->getRealPath());
        //             // $thumb_size = json_decode($settings["THUMB_SIZE_TEACHERS"]);
        //             // $image_resize->fit($thumb_size->width, $thumb_size->height);
        //             // $image_resize->save('public/upload/images/teachers/thumb/' . $file_name);

        //             $image_resize_2 = Image::make($file->getRealPath());
        //             $image_resize_2->fit(1100, 600);
        //             $image_resize_2->save('public/backend/images/partner/' . $file_name_2);
        //             //var_dump($image_resize_2); die();
        //         }   
        //     // close upload image
        //     $file->move("public/backend/images/partner/", $file_name);
        //     //save database
        //     $data['image_partner'] = $file_name_2;
        //     DB::table('partner')->insert($data);
        //     return Redirect::route('admin.partner')->with('message','Thêm đối tác liên kết thành công');
    
        //     }
        //     $data['image_partner'] ="";
        //  DB::table('partner')->insert($data);
        // return Redirect::route('admin.partner')->with('message','Thêm đối tác liên kết thành công');
    }
    //get edit partner
    public function getEditPartner($id)
    {
        
        $id = substr($id,9);
        $partner = DB::table('partner')->where('id',$id)->get();
        //var_dump($partner); die();
        return View('backend.layouts.Partner.editPartner')->with('partner',$partner);
    }
    //get update partner
    public function getUpdatePartner($id, Request $request)
    {
        $data = array();
        $data['name_partner'] = $request->title;
        
       
        $get_image = $request->file('image_partner');
        if ($get_image) {
            $get_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/images/partner/', $new_image);
            $data['image_partner'] = $new_image;
            DB::table('partner')->where('id',$id)->update($data);
          
            return Redirect::route('admin.partner')->with([ "message" => "Cập nhập đối tác thành công!"]);
        }
        DB::table('partner')->where('id',$id)->update($data);
        return Redirect::route('admin.partner')->with('message','Cập nhập partner thành công');
        // $data = array();
        // $data['name_partner'] = $request->title;
       
        // if ($request->hasFile('image_partner')) {
        //     $file = $request->image;
        //     $file_name = Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
        //     $file_name_2 = "partner".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
        //     //$file_name_3 = "teacher".Str::slug($file->getClientOriginalName(), "-") . "-" . time() . "." . $file->getClientOriginalExtension();
        //     //resize file befor to upload large
        //         if ($file->getClientOriginalExtension() != "svg") {
        //             // $image_resize = Image::make($file->getRealPath());
        //             // $thumb_size = json_decode($settings["THUMB_SIZE_TEACHERS"]);
        //             // $image_resize->fit($thumb_size->width, $thumb_size->height);
        //             // $image_resize->save('public/upload/images/teachers/thumb/' . $file_name);

        //             $image_resize_2 = Image::make($file->getRealPath());
        //             $image_resize_2->fit(1100, 600);
        //             $image_resize_2->save('public/backend/images/partner/' . $file_name_2);
        //         }   
        //     // close upload image
        //     $file->move("public/backend/images/partner/", $file_name);
        //     //save database
        //     $data['image'] = $file_name_2;
        //     DB::table('partner')->where('id',$id)->update($data);
          
        //     return Redirect::route('admin.partner')->with([ "message" => "Cập nhập báo chí thành công!"]);;
        // }
        // DB::table('partner')->where('id',$id)->update($data);
        // return Redirect::route('admin.partner')->with('message','Cập nhập báo chí thành công');

       
    }
    //Delete partner
    public function deletePartner($id)
    {
        $id = substr($id,9);
        DB::table('partner')->where('id',$id)->delete();
        return Redirect::route('admin.partner')->with('message','Xóa báo chí thành công');
    }
}
