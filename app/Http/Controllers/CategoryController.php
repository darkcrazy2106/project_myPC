<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class CategoryController extends Controller
{
    public function showAllCategories()
    {
        if (Auth::guard('admin')->check()) {
            $categoriesList = DB::table('categories')->select()->get();
            return view('manager.productCategories')->with(compact('categoriesList'));
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function deleteCategoryByID($id)
    {
        if (Auth::guard('admin')->check()) {
            if (!empty($id)) {
                $categoryDetail = DB::table('categories')->select()->where('category_id', '=', $id)->first();
                if (!empty($categoryDetail)) {
                    $deleteStatus = DB::table('categories')->where('category_id', '=', $id)->delete();
                    if ($deleteStatus) {
                        $msg = 'Deleted Successful';
                    } else {
                        $msg = 'Error';
                    }
                } else {
                    $msg = 'The Category is not available';
                }
            } else {
                $msg = 'The connection is not available';
            }
            return redirect()->route('admin.category.categories')->with('msg', $msg);
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function getCategoryDetails($id)
    {
        if (Auth::guard('admin')->check()) {
            $categoryDetail = DB::table('categories')->select()->where('category_id', '=', $id)->first();
            return view('manager.editCategory')->with(compact('categoryDetail'));
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login with admin account first, please !!!');
        }
    }
    public function updateCategory(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $newCategory = $request->all();
            DB::table('categories')->where('category_id', '=', $newCategory['category_id'])
                ->update([
                    'category_name' => $newCategory['category_name'],
                    'category_description' => $newCategory['category_description'],
                ]);
            return redirect()->route('admin.category.categories')->with('msg', 'Update Category Successful');
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login by Admin account first, please !!!');
        }
    }
    public function showAddFormCategory()
    {
        return view('manager.addCategory');
    }
    public function createCategory(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'category_id' => 'required||unique:categories',
                'category_name' => ' required ||unique:categories',
                'category_description' => 'required',
            ], [
                'category_id.required' => 'Category code cannot blank',
                'category_id.unique' => 'Category code is available',
                'category_name.required' => 'Category name cannot blank',
                'category_name.unique' => 'Category name is available',
                'category_description.required' => 'Description cannot blank',
            ]);
            $newCategory = $request->all();         
            $newCategory_name = ($newCategory['category_name']);
            $newCategory_id = ($newCategory['category_id']);

            $categoriesList = DB::table('categories')->select()->get();
            foreach ($categoriesList as $key => $category) {
                $category_id = $category->category_id;
                $category_name = $category->category_name;
                if (strcmp($newCategory_id, $category_id) == 0) {
                    return redirect()->route('admin.category.addCategory')->with('msg', 'This ID has already been register !!!');
                }
                if (strcmp($newCategory_name, $category_name) == 0) {
                    return redirect()->route('admin.category.addCategory')->with('msg', 'This Name has already been register !!!');
                }
            }
            DB::table('categories')->insert([
                'category_id' => $newCategory_id,
                'category_name' => $newCategory_name,
                'category_description' => $newCategory['category_description'],
            ]);
            return redirect()->route('admin.category.categories')->with('msg', 'Add new Category Successful');
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg', 'Login by Admin account first, pls !!!');
        }
    }


    // User
    // public function showAllCategoriesUser()
    // {
    //     $category = new Category();
    //     $categoriesList = $category->getAllCategories();
    //     // return view('user.index')->with(compact('categoriesList'));
    //     return $categoriesList;
    // }
}
