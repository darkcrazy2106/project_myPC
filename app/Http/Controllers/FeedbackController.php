<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

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
}

