<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function getAllProduct() 
    {
        $products = DB::table('products')->select('*')
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->orderBy('id','DESC')
        ->paginate(5);
        return $products;
    }
    public function getProductByCategory($category) 
    {
        // $products =DB::select('SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id WHERE category_name = ? ORDER BY id DESC', [$category]);
        $products = DB::table('products')->select('*')->where('category_name','=',$category)
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->orderBy('id','DESC')
        ->paginate(3);
        // select * from products, categories where products.id = categories.id and category_name = ? order by id desc
        return $products;
    }
   
    public function addProduct($data) 
    {
        DB::insert('INSERT INTO products (product_code, name, category_id, description, price, quantity, img_path, created_at) values (?,?,?, ?, ?, ?, ?, ?)', $data); 
    }
    public function getProductByID($id) {
        return DB::select('SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id WHERE id = ?', [$id]);
    }
    public function updateProduct($data, $product_id) {
        $data[] = $product_id;
        return DB::update('UPDATE products SET product_code=?, name=?, category_id=?, description=?, price=?, quantity=?, img_path=?, updated_at=? WHERE id = ?', $data);
    }
    public function updateProductWithoutImg($data, $product_id) {
        $data[] = $product_id;
        return DB::update('UPDATE products SET product_code=?, name=?, category_id=?, description=?, price=?, quantity=?, updated_at=? WHERE id = ?', $data);
    }
    public function deleteProductByID($id) {
        return DB::delete('DELETE FROM products WHERE id = ?', [$id]);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'product_id');
    }
}
