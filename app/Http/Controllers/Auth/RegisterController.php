<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\ThuChaoMung;
class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        $rules =[
            'name' => ['required', 'string', 'min:2', 'max:30'],
            'username' => ['required', 'string', 'min:2', 'max:30'],
            'diachi' => ['required', 'string', 'min:10', 'max:70'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            
    ];
    $messages = [
        'name.required'=> 'Chưa nhập họ tên bạn ơi',
        'name.min' => 'Họ tên ngắn quá',
        'name.max' => 'Họ tên dài quá',
        'username.required'=> 'Chưa nhập tên tắt bạn ơi',
        'username.min' => 'tên ngắn quá',
        'username.max' => 'tên dài quá',
        'diachi.required'=> 'Chưa nhập địa chỉ bạn ơi',
        'diachi.min' => 'địa chỉ ngắn quá',
        'diachi.max' => 'địa chỉ dài quá',
        'password.required'=>'Nhập mật khẩu đi ',
       
        'email.required' =>' Nhập email đi bạn',
        'email.email' =>' Email phải đúng định dạng',
        'email.unique' =>' Đã có người dùng email này',
    ];
    $vd = Validator::make($data, $rules,$messages);
    return $vd;
}

    
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'diachi' => $data['diachi'],
            'password' => Hash::make($data['password']),
          
        ]);
        Mail::to($data['email'])->send( new ThuChaoMung($user));
        return $user;

    }
    
}
