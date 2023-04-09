<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;
use  Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use App\Models\blog;
use App\Http\Controllers\View;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;


class ProductController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $blogs = new blog();
        $category = new Category();
        $categoriesList = $category->getAllCategories();
        $blogList = $blogs->getAllBlog();
        $productList = DB::table('products')->select('*')
            ->join('categories', 'products.category_id', '=', 'categories.category_id')
            ->orderBy('id', 'DESC')->get();
        return view('user.index')
            ->with(compact('productList'))
            ->with(compact('categoriesList'))
            ->with(compact('blogList'));
    }
    public function showProductList()
    {
        $products = new Product();
        $productsList = $products->getAllProduct();
        return view('user.productList', compact('productsList'));
    }

    public function searchProducts($category)
    {
        $products = new Product();
        $productsList = $products->getProductByCategory($category);
        return view('user.search', compact('productsList', 'category'));
    }

    public function showContact()
    {
        return view('user.contact');
    }
    public function admin()
    {
        if (Auth::guard('admin')->check()) {
            $products = new Product();
            $productsList = $products->getAllProduct();
            // dd(Auth::guard('admin')->check());
            return view('manager.product', compact('productsList'));
        } else {
            // dd(Auth::guard('admin')->check());
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function showAddForm()
    {
        if (Auth::guard('admin')->check()) {
            $categories = new Category();
            $categoriesList = $categories->getAllCategories();
            return view('manager.add', compact('categoriesList'));
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function postAdd(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $products = new Product();
            $request->validate([
                'product_code' => 'required||unique:products',
                'name' => ' required ||unique:products',
                'price' => 'required',
                'description' => 'required',
                'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category_id' => 'required',
                'quantity' => 'required'
            ], [
                'product_code.required' => 'Product code cannot blank',
                'product_code.unique' => 'ID is available',
                'name.required' => 'Name cannot blank',
                'name.unique' => 'Product is available',
                'price.required' => 'Price cannot blank',
                'description.required' => 'Description cannot blank',
                'category_id.required' => 'Category cannot blank',
                'quantity.required' => 'Quantity cannot blank',
                'img_path.required' => 'Choose The Images, Please'
            ]);
            $file = $request->img_path;
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $dateInsert = [
                $request->product_code,
                $request->name,
                $request->category_id,
                $request->description,
                $request->price,
                $request->quantity,
                $filename,
                date("Y-m-d H:i:s")
            ];
            $productsList = $products->addProduct($dateInsert);
            return redirect()->route('admin.index')->with('msg', 'Add successful');
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function getEdit(Request $request, $id = 0)
    {
        if (Auth::guard('admin')->check()) {
            $categories = new Category();
            $categoriesList = $categories->getAllCategories();
            $products = new Product();
            if (!empty($id)) {
                $productDetail = $products->getProductByID($id);
                if (!empty($productDetail[0])) {
                    $request->session()->put('id', $id);
                    $productDetail = $productDetail[0];
                    // dd($productDetail);  
                } else {
                    return redirect()->route('admin.index')->with('msg', 'The Product is not available');
                }
            } else {
                return redirect()->route('admin.index')->with('msg', 'The connection is not available');
            }
            return view('manager.edit', compact('productDetail', 'categoriesList'));
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function postEdit(Request $request, $id = 0)
    {
        if (Auth::guard('admin')->check()) {
            $products = new Product();
            $id = session('id');
            $productDetail = $products->getProductByID($id);
            if (empty($id)) {
                return back()->with('msg', 'The connection is not available');
            }
            $request->validate([

                'product_code' => 'required',
                'name' => [
                    ' required',
                    Rule::unique('products')->ignore($id)
                ],
                'price' => 'required',
                'description' => 'required',
                // 'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'quantity' => 'required'
            ], [

                'product_code.required' => 'Product code cannot blank',
                'name.required' => 'Name cannot blank',
                'name.unique' => 'Product is available',
                'price.required' => 'Price cannot blank',
                'description.required' => 'Description cannot blank',
                'quantity.required' => 'Quantity cannot blank',
                // 'img_path.required' => 'Choose The Images, Please'
            ]);
            $file = $request->img_path;
            $oldFile = $productDetail[0]->img_path;
            if (empty($file)) {
                // $filename = $tempFile;
                $dataUpdate = [
                    // $request->id,
                    $request->product_code,
                    $request->name,
                    $request->category_id,
                    $request->description,
                    $request->price,
                    $request->quantity,
                    // $filename,
                    date("Y-m-d H:i:s")
                ];
                // dd($dataUpdate);
                $products->updateProductWithoutImg($dataUpdate, $id);
                return back()->with('msg', 'Update Success');
            } else {
                if (File::exists("images/$oldFile")) {
                    File::delete("images/$oldFile");
                }
                $filename = $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $dataUpdate = [
                    // $request->id,
                    $request->product_code,
                    $request->name,
                    $request->category_id,
                    $request->description,
                    $request->price,
                    $request->quantity,
                    $filename,
                    date("Y-m-d H:i:s")
                ];
                // dd($dataUpdate);
                $products->updateProduct($dataUpdate, $id);
                return back()->with('msg', 'Update Success');
            }
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function delete($id = 0)
    {
        if (Auth::guard('admin')->check()) {
            $products = new Product();
            $productDetail = $products->getProductByID($id);
            if (!empty($id)) {
                $productDetail = $products->getProductByID($id);
                if (!empty($productDetail[0])) {
                    $path = $productDetail[0]->img_path;
                    File::delete("images/$path");
                    $deleteStatus = $products->deleteProductByID($id);
                    if ($deleteStatus) {
                        $msg = 'Deleted Successful';
                    } else {
                        $msg = 'Error';
                    }
                } else {
                    $msg = 'The Product is not available';
                }
            } else {
                $msg = 'The connection is not available';
            }
            return redirect()->route('admin.index')->with('msg', $msg);
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function searchProductsByID(Request $request, $id)
    {
        $request->session()->forget('productDetail');
        $products = new Product();
        $productDetail = $products->getProductByID($id);
        $request->session()->put('productDetail', $productDetail);
        $relatedProduct = $products->getProductByCategory($productDetail[0]->category_name);
        $comments = Feedback::where('product_id', $id)->get();
        $average_rating = Feedback::where('product_id', $id)->avg('rating');
        return view('user.productDetails')->with(compact('relatedProduct','comments', 'average_rating'));
    }    
}
