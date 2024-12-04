<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view("admin.kelolaBahan.all", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/kelolaBahan/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "name" =>"required|unique:products,name|max:1000|string",
            "price" =>"required|integer",
            "image" =>"required|mimes:png,jpg,jpeg|max:2048",
            "unit" =>"required",
            "stock" =>"required",
        ]);
        if ($request->has('image')){
            $imageName = time(). '.'. $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/products'), $imageName);
            $data['image'] = $imageName;
        }
        $data['slug'] = Str::of($request->name)->lower()->slug('-')->value();
        Product::create($data);
        return redirect()->route('product.index')->with('success','Hore, Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {   
        dd($product);
        return view('', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("admin.kelolaBahan.create", compact("product"));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validasi input
        $data = $request->validate([
            "price" => "required|numeric",
            "image" => "required|mimes:png,jpg,jpeg|max:2048",
            "unit" => "required",
            "stock" => "required",
        ]);
        if($request->name !== $product->name){
            $data = $request->validate(["name"=>"required|unique:products,name|max:1000|string"]);        // Update slug berdasarkan nama baru
            $data['slug'] = Str::of($request->name)->lower()->slug('-')->value();
        }
        // Cek jika ada gambar baru
        if ($request->has('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && file_exists(public_path('images/products/' . $product->image))) {
                unlink(public_path('images/products/' . $product->image));
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/products'), $imageName);
            $data['image'] = $imageName;
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $data['image'] = $product->image;
        }

        // Update produk
        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Hore, Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
            // Hapus file gambar dari folder jika ada
    if ($product->image && File::exists(public_path('images/products/' . $product->image))) {
        File::delete(public_path('images/products/' . $product->image));
    }

    // Hapus data dari database
    $product->delete();

    return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus.');
    }
}
