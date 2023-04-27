<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Feedback;


class BlogController extends Controller
{
    public function showAllBlog() {
        if(Auth::guard('admin')->check()){
            $blogs = new blog();
            $blogList = $blogs->getAllBlog();
            return view ('manager.blog', compact('blogList'));
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
        
    }
    public function showAllBlogForUser() {
        $blogs = new blog();
        $blogList = $blogs->getAllBlog();
        return view ('user.blog', compact('blogList'));
    }
    public function showAddForm () {
        if(Auth::guard('admin')->check()){
            return view('manager.addBlog');
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function postAdd(Request $request) {
        if(Auth::guard('admin')->check()){
            $blogs = new blog();
            $request->validate([
                'title' => 'required||unique:blogs',
                'author' => ' required',
                'content' => 'required',
                'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'title.required' => 'Title cannot blank',
                'title.unique' => 'Title is available',
                'content.required' => 'Content cannot blank',
                'author.required' => 'Author cannot blank', 
                'img_path.required' => 'Choose The Images, Please'
            ]);
            $newBlog = $request->all();
            $blogs->title=$newBlog['title'];
            $blogs->author=$newBlog['author'];
            $blogs->content=$newBlog['content'];
            $file= $newBlog['img_path'];
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('images/blogThumbnail'), $filename);
            $blogs->thumbnail= $filename;
            $blogs->status= '1';
            $blogs->created_at = Carbon::now();
            $blogs->save();
            return redirect()->route('admin.blog.index')->with('msg', 'Add successful');
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function draftBlog(Request $request) {
        if(Auth::guard('admin')->check()){
            $blogs = new blog();
            $newBlog = $request->all();
            dd($newBlog);
            // $blogs->title=$newBlog['title'];
            // $blogs->author=$newBlog['author'];
            // $blogs->content=$newBlog['content'];
            // $file= $newBlog['img_path'];
            // $filename= $file->getClientOriginalName();
            // $file-> move(public_path('images/blogThumbnail'), $filename);
            // $blogs->thumbnail= $filename;
            // $blogs->status= '0';
            // $blogs->created_at = Carbon::now();
            // $blogs->save();
            // return redirect()->route('admin.blog.index')->with('msg', 'Add successful');
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function getEdit(Request $request, $id=0) {
       if(Auth::guard('admin')->check()){
        $blogs = new blog();
        if (!empty($id)){
            $blogDetail = $blogs->getBlogByID($id);
            if (!empty($blogDetail[0])){
                $request->session()->put('id', $id);
                $blogDetail = $blogDetail[0];
            }else{
                return redirect()->route('admin.blog.index')->with('msg','The Blog is not available');
            }
        }else{
            return redirect()->route('admin.blog.index')->with('msg','The connection is not available');
        }
        return view('manager.editBlog', compact('blogDetail'));
       }else{
        return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
       }
    }
    public function updateBlog(Request $request){
        if(Auth::guard('admin')->check()){
            $id = $request->session()->get('id');
            $blog = DB::table('blogs')->where('id','=',$id)->select('thumbnail')->first();
            $oldThumbNail = $blog->thumbnail;
            $newBlog = $request->all();
            $newThumbNail = $request->img_path;
            if($newThumbNail==null){
                DB::table('blogs')->where('id','=',$id)
                ->update([
                    'title'=>$newBlog['title'],
                    'author'=>$newBlog['author'],
                    'content'=>$newBlog['content'],
                ]);
            }else{
                $thumbNail = $newThumbNail;
                if(File::exists("images/blogThumbnail/$oldThumbNail")){
                    File::delete("images/blogThumbnail/$oldThumbNail");
                }
                $filename= $thumbNail->getClientOriginalName();
                $thumbNail-> move(public_path('images/blogThumbnail'), $filename);
                DB::table('blogs')->where('id','=',$id)
                ->update([
                    'title'=>$newBlog['title'],
                    'author'=>$newBlog['author'],
                    'content'=>$newBlog['content'],
                    'thumbnail'=>$filename,
                ]);
            }
            return back()->with('msg','Updated Blog Successful');
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
    public function delete($id=0) {
        if(Auth::guard('admin')->check()){
            $blogs = new blog();
            if (!empty($id)){
                $blogDetail = $blogs->getBlogByID($id);
                if (!empty($blogDetail[0])){
                    $deleteStatus = $blogs->deleteBlogByID($id);
                    if ($deleteStatus) {
                        $msg = 'Deleted Successful';
                    }else {
                        $msg = 'Error';
                    }
                }else{
                    $msg = 'The Blog is not available';
                }
            }else{
            $msg = 'The connection is not available';
            }
            return redirect()->route('admin.blog.index')->with('msg',$msg);
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }

    public function searchBlogByID(Request $request, $id){
        $request->session()->forget('blogDetails');
        $blog = new blog();
        $blogDetail = $blog->getBlogByID($id);
        $comments = Feedback::where('blog_id', $id)->get();
        $request->session()->put('blogDetails', $blogDetail);
        $average_rating = Feedback::where('blog_id', $id)->avg('rating');
        return view('user.blogDetails',compact('blogDetail', 'comments'));
    }
}
