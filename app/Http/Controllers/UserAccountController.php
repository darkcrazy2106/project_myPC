<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class UserAccountController extends Controller
{
    // public function checkLogin(){
    //     $user = Auth::user();
    //     dd($user->fullname);
    // }
    public function showFormLogin(){
        return view('user.login');
    }
    public function showAllAccount(){
        if(Auth::guard('admin')->check()){
            $users = DB::table('user_accounts')->select('*')->get();
            return view('manager.account')->with(compact('users'));
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function showUserProfile(){
        if(Auth::guard('user')->check()){
            return view('user.userProfile');
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
        
    }
    public function change_password(){
        if(Auth::guard('user')->check()){
            return view('user.changepassword');
            
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
    }
    public function show_history_orders(){
        if(Auth::guard('user')->check()){
            $orders = DB::table('orders')->select('*')->orderBy('order_id','DESC')->get();
            $order_details = DB::table('orders')
                ->select('*')
                ->join('order_details', 'order_details.order_id', '=','orders.order_id')
                ->get();
            return view('user.userOrder')->with(compact('orders'))->with(compact('order_details'));
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
    }
    public function cancelOrderByID($id){
        if(Auth::guard('user')->check()){
            $order = DB::table('orders')->select('*')->where('order_id','=',$id);
            if (!empty($id)){
                if (!empty($order)){
                    DB::table('orders')->where('order_id','=',$id)->delete();
                    $msg = 'Deleted Successful';
                }else{
                    $msg = 'Order is not available';
                }
            }else{
                $msg = 'The connection is not available';
            }
            return redirect()->route('user-orders')->with('msg',$msg);
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
    }
    public function show_list_vouchers(){
        if(Auth::guard('user')->check()){
            return view('user.userVoucherList');
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
    }
    public function showFormRegister(){
        return view('user.register');
    }
    public function registerAccount(Request $request){
        $user_phone_new = $request->phone;
        $username_new = $request->username;
        $users = DB::table('user_accounts')->select('*')->get();
        foreach($users as $key => $user){
            $phone = $user->phone;
            if($user_phone_new==$phone){
                return redirect()->route('register-form')->with('msg','This number phone has already been register !!!');
            }
            $username = $user->username;
            if($username_new==$username){
                return redirect()->route('register-form')->with('msg','User Name is available !!!');
            }
        }
        
        DB::table('user_accounts')->insert([
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
            'status'=>'1',

        ]);
        return redirect()->route('loginForm')->with('msg','Register Successful');
    }
    public function update_profile(Request $request){
        if(Auth::guard('user')->check()){
            $id = Auth::guard('user')->id();
            $user= Auth::guard('user')->user();
            $old_avatar = $user->avatar;
            $new_avatar = $request->img_path;
            $fullname = $request->fullname;
            $phone = $request->phone;
            $address = $request->address;
            $birthday = $request->birthday;
            $hobby = $request->hobby;
            $description = $request->description;
            if($new_avatar==null){
                DB::table('user_accounts')->where('id','=',$id)
                ->update([
                    'fullname'=>$fullname,
                    'birthday'=>$birthday,
                    'phone'=>$phone,
                    'address'=>$address,
                    'hobby'=>$hobby,
                    'description'=>$description,
                ]);
            }else{
                $avatar = $new_avatar;
                if(File::exists("images/avatar/$old_avatar")){
                    File::delete("images/avatar/$old_avatar");
                }
                $filename= $avatar->getClientOriginalName();
                $avatar-> move(public_path('images/avatar'), $filename);
                DB::table('user_accounts')->where('id','=',$id)
                ->update([
                    'fullname'=>$fullname,
                    'birthday'=>$birthday,
                    'phone'=>$phone,
                    'address'=>$address,
                    'avatar'=>$filename,
                    'hobby'=>$hobby,
                    'description'=>$description,
                ]);
            }
           
            return redirect()->route('userProfile')->with('msg','Update Profile successful');
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
    }
    public function update_password(Request $request){
        if(Auth::guard('user')->check()){
            $user = Auth::guard('user')->user();
            $data = $request->all();
            if(password_verify($data['current_password'], $user->password)){
                if($data['new_password']==$data['confirm_new_password']){
                    DB::table('user_accounts')->where('id','=',$user->id)
                    ->update([
                        'password'=>bcrypt($data['new_password'])
                    ]);
                    return back()->with('msg','Update Password Successful');
                }else
                {
                    return back()->with('msg','Confirm Password is incorrect !!!');
                }
            }else{
                return back()->with('msg','Current Password is incorrect !!!');
            }
        }else{
            return redirect()->route("loginForm")->with('msg','Login first, please !!!');
        }
    }
    public function set_Account_Disable_ByID($id){
        if(Auth::guard('admin')->check()){
            $user = DB::table('user_accounts')->select()->where('id','=',$id)->first();
            if (!empty($id)){
                if (!empty($user)){
                    DB::table('user_accounts')->where('id','=',$id)->update([
                        'status'=>'0',
                    ]);
                    $msg = 'Update Status Status for '.$user->username.' Successful';
                }else{
                    $msg = 'Account is not available';
                }
            }else{
            $msg = 'The connection is not available';
            }
            return redirect()->route('admin.account.index')->with('msg',$msg);
        }else{
             return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }

    }
    public function set_Account_Enable_ByID($id){
        if(Auth::guard('admin')->check()){
            $user = DB::table('user_accounts')->select()->where('id','=',$id)->first();
            if (!empty($id)){
                if (!empty($user)){
                    DB::table('user_accounts')->where('id','=',$id)->update([
                        'status'=>'1',
                    ]);
                    $msg = 'Update Status Status for '.$user->username.' Successful';
                }else{
                    $msg = 'Account is not available';
                }
            }else{
            $msg = 'The connection is not available';
            }
            return redirect()->route('admin.account.index')->with('msg',$msg);
        }else{
             return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }   
    }

    public function userLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        // dd($username,$password);
        $user = DB::table('user_accounts')->select("*")->where(
            'username','=',$username
        )->first();
        if($user->status=='1'){
            if (Auth::guard('user')->attempt(['username' => $username, 'password' => $password])) {
                $request->session()->regenerate();
                return redirect()->route('userProfile');
            } else {
                return redirect()->route('loginForm')->with('msg','Username or Password incorrect');
            }
        }else{
            return redirect()->route('loginForm')->with('msg','Your account has been disable');
        }
       
    }
    public function logout(Request $request){
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginForm');
    }
    public function showFormForgotPassword(){
        return view('user.forgotPassword');
    }
    public function sendVerifyMail(Request $request){
        $request->validate([
            'username'=>'required|email|exists:user_accounts,username'
        ]);
        $data = $request->all();
        DB::table('password_resets')->insert([
            'email'=>$data['username'],
            'token'=>$data['_token'],
            'created_at'=>Carbon::now(),
        ]);
        $link_reset = route('reset.password.form',['token'=>$data['_token'], 'username'=>$data['username']]);
        $context_mail = 'This is a link for reset password of user   '.$data['username']  .'   This Link is valid in 15 minutes';
        
        Mail::send('emailForgot',['action_link'=>$link_reset,'body'=>$context_mail], function($messages) use($request){
            $messages->from('norely@example.com','Apple Store VN');
            $messages->to($request->username,'Apple Store')->subject('Reset Password');
        });
        return back()->with('msg','We have already sent link to your email !!!');
    }
    public function showFormResetPassword(Request $request, $token){
        return view('user.resetPassword')->with(['token'=>$token,'email'=>$request->username]);
    }
    public function resetPassword(Request $request){
        $request->validate([
            'username'=>'required|email|exists:user_accounts,username',
            'password'=>'required',
            'confirm_password'=>'required',
        ]);
        $check = DB::table('password_resets')->where([
            'email'=>$request->username,
            'token'=>$request->token,
        ])->first();
        $created_at = DB::table('password_resets')->select('created_at')->where([
            'email'=>$request->username,
            'token'=>$request->token,
        ])->first();
        $currentTime = Carbon::now();
        $timeCreated = $created_at->created_at;
        $timeLimited = $currentTime->diffInMinutes($timeCreated);
        
        if($check){
            if($timeLimited<=15){
                if($request->password==$request->confirm_password){
                    DB::table('user_accounts')->where('username','=',$request->username)
                    ->update([
                        'password'=>bcrypt($request->password)
                    ]);
                    return redirect()->route('loginForm')->with('msg','Your password has been changed! Enter new password, please!');
                }else{
                    return back()->withInput()->with('error','Confirm Password is incorrect !!!');
                }
            }else{
                return back()->withInput()->with('error','Invalid Link');
            }
        }else{
            return back()->withInput()->with('error','Invalid Link');
        }
    }
}
