<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Contacts;
use App\Models\PostCategory;
use App\Models\Partner;
use Brian2694\Toastr\Facades\Toastr;
session_start();

class ContactController extends Controller
{
    public function lien_he(){
        $contact = Contact::where('info_id',1)->get();
        $category_post = PostCategory::orderby('cate_post_id','desc')->get();
        return view('pages.lienhe.contact')->with(compact('category_post'))->with(compact('contact'));
    }
    public function information(){
        $contact = Contact::where('info_id',1)->get();
        return view('admin.information.add_information')->with(compact('contact'));
    }
    public function save_info(Request $request){
        $data = $request->all();
        $contact = new Contact();
        $contact->info_contact = $data['info_contact'];
        $contact->info_map = $data['info_map'];
        $contact->info_fanpage = $data['info_fanpage'];
        $get_image = $request->file('info_image');
        $path ='public/uploads/contact/';
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //phân tách chuỗi dựa vào dấu .
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi name ảnh
            $get_image->move($path,$new_image);  //thêm ảnh vào public/uploads/product
            $contact->info_logo = $new_image;
        }
        $contact->save();
        return redirect()->back()->with('message','Cập nhật thông tin liên hệ thành công');
    }
    public function update_info(Request $request,$info_id){
        $data = $request->all();
        $contact = Contact::find($info_id);
        $contact->info_contact = $data['info_contact'];
        $contact->info_map = $data['info_map'];
        $contact->info_fanpage = $data['info_fanpage'];
        $get_image = $request->file('info_image');
        $path ='public/uploads/contact/';
        if($get_image){
            unlink($path.$contact->info_logo);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //phân tách chuỗi dựa vào dấu .
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi name ảnh
            $get_image->move($path,$new_image);  //thêm ảnh vào public/uploads/product
            $contact->info_logo = $new_image;
        }
        $contact->save();
        return redirect()->back()->with('message','Cập nhật thông tin liên hệ thành công');
    }
    public function add_doitac(Request $request){
        $data = $request->all();
        $doitac = new Partner();
        $name = $data['name'];
        $link = $data['link'];
        $get_image = $request->file('file');

        $path = 'public/uploads/doitac/';

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //phân tách chuỗi dựa vào dấu .
            $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi name ảnh
            $get_image->move($path,$new_image);  //thêm ảnh vào public/uploads/product
            $doitac->image = $new_image;
        }
        $doitac->name = $name;
        $doitac->link = $link;
        $doitac->category = 'doitac';

        $doitac->save();
    }
    public function add_contacts(){
        return view('pages.lienhe.contact');
    }
    public function save_contact(Request $request){
        // dd($request->all());
        $data = $request->all();

        $contacts = new Contacts();
        $contacts->c_email = $data['contacts_email'];
        $contacts->c_content = $data['contacts_content'];
        $contacts->save();
        Toastr::success('Gửi phản hồi thành công','Thành công');
        return Redirect::to('lien-he');
    }
    public function manager_feedback(){
        $all_feedback = Contacts::orderBy('c_id','DESC')->get();
        return view('admin.contact.list_feedback')->with(compact('all_feedback'));
    }
    public function delete_feedback($c_id){
        DB::table('tbl_contacts')->where('c_id',$c_id)->delete();
        Toastr::success('Xóa phản hồi thành công','Thành công');
        return redirect()->back();
    }
}
