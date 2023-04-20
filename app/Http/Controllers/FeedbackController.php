<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function storeByBlogID(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'rating' => 'required',
        ]);
    
        $feedback = new Feedback();
        $feedback->name = $validatedData['name'];
        $feedback->email = $validatedData['email'];
        $feedback->comment = $validatedData['comment'];
        $feedback->blog_id = $request->input('blog_id');
        $feedback->rating = $validatedData['rating'];
        $feedback->save();
    
        return redirect()->back()->with('success', 'Your feedback has been submitted!');
    }

    public function storeByProductID(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'rating' => 'required',
        ]);
    
        $feedback = new Feedback();
        $feedback->name = $validatedData['name'];
        $feedback->email = $validatedData['email'];
        $feedback->comment = $validatedData['comment'];
        $feedback->product_id = $request->input('product_id');
        $feedback->rating = $request->input('rating');
        $feedback->save();
    
        return redirect()->back()->with('success', 'Your feedback has been submitted!');
    }

    public function showFeedback($id) {
        $feedback = Feedback::find($id);
        return view('feedback.show', ['feedback' => $feedback]);
    }

    public function showBlogFeedbacks() {
        if(Auth::guard('admin')->check()){
            $feedback = new Feedback();
            $feedbacklist = $feedback->getBlogFeedbacks();
            return view ('manager.blogfeedback', compact('feedbacklist'));
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        } 
    }

    public function showProductFeedbacks() {
        if(Auth::guard('admin')->check()){
            $feedback = new Feedback();
            $feedbacklist = $feedback->getProductFeedbacks();
            return view ('manager.productfeedback', compact('feedbacklist'));
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        } 
    }

    public function deletefeedback($id=0) {
        if(Auth::guard('admin')->check()){
            $feedback = new Feedback();
            if (!empty($id)){
                $feedbackDetail = $feedback->getFeedbackByID($id);
                if (!empty($feedbackDetail[0])){
                    $deleteStatus = $feedback->deleteFeedbackByID($id);
                    if ($deleteStatus) {
                        $msg = 'Deleted Successful';
                    }else {
                        $msg = 'Error';
                    }
                }else{
                    $msg = 'The Feedback is not available';
                }
            }else{
            $msg = 'The connection is not available';
            }
            return redirect()->route('admin.feedback.blogfeedback')->with('msg',$msg);
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
}

