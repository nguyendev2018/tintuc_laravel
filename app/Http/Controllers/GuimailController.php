<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
class GuimailController extends Controller
{
    function guimaillienhe(Request $request){
        $input = $request->all();
          Mail::send('mauthulienhe', 
            array(  'name'=>$input["name"],
                    'email'=>$input["email"], 
                    'content'=>$input['message']
             ), 
            function($message){
                $message
                ->from('wixc8657@gmail.com','Từ ứng dụng website')
                ->to('thaonguyenvivo2000@gmail.com', 'Ban quan tri')
                //->attach('img/a.png') // gửi đính kèm file nếu muốn
                ->subject('Thư liên hệ');
            }
          );
          Session::flash('thongbao', 'Đã gửi mail thành công');     
          echo 'Gửi mail  thành công' ;
    }
}
