<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        $search = request('search');
        $query = Product::select('id','name','desc','url');
        if(isset($search) && ($search !=null))
        {
            $query->where('name', 'like' , '%'  . $search . '%');
        }

        $products = $query->latest()->get();

        $data = [
            'products' => $products,
            'user' => $user
        ];
        return view('dashboard.product.index', $data);
    }

    public function show($id)
    {
        $user = Auth::User();
        $product = Product::with('images')->findOrFail($id);
        // dd($product);
        $data = [
            'product' => $product,
            'user' => $user
        ];
        return view('dashboard.product.show', $data);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'desc' => 'required',
                'url' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // dd($request);

            $product = Product::create($request->only(['name', 'desc', 'url']));

            // dd($product);

            if($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('product_images', 'public');
                    $product->images()->create(['image_path' => $path]);
                }
            }

            Alert::success('Horee', 'Product Telah dibuat');

            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'desc' => 'required',
                'url' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Temukan produk berdasarkan ID
            $product = Product::findOrFail($id);

            // Perbarui atribut produk
            $product->update($request->only(['name', 'desc', 'url']));

            // Periksa apakah ada file gambar baru yang diunggah
            if($request->hasFile('images')) {
                // Hapus gambar lama jika ada
                foreach ($product->images as $image) {
                    Storage::disk('public')->delete($image->image_path);
                    $image->delete();
                }

                // Simpan gambar baru
                foreach ($request->file('images') as $image) {
                    $path = $image->store('product_images', 'public');
                    $product->images()->create(['image_path' => $path]);
                }
            }

            Alert::success('Horee', 'Product Telah diperbarui');

            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            // Temukan produk berdasarkan ID
            $product = Product::findOrFail($id);

            // Hapus gambar yang terkait dengan produk
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }

            // Hapus produk
            $product->delete();

            Alert::success('Horee', 'Product Telah dihapus');

            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    //img


    public function showimg($id)
    {
        $user = Auth::User();
        $product = Product::with('images')->findOrFail($id);
        // dd($product);
        $data = [
            'product' => $product,
            'user' => $user
        ];
        return view('dashboard.product.edit-img', $data);
    }


    public function addImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Temukan produk berdasarkan ID
            $product = Product::findOrFail($id);

            // Simpan gambar baru ke storage
            $imagePath = $request->file('image')->store('product_images', 'public');

            // Tambahkan gambar ke produk
            $image = new ProductImage();
            $image->product_id = $product->id;
            $image->image_path = $imagePath;
            $image->save();

            Alert::success('Horee', 'Gambar telah ditambahkan');

            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateImage(Request $request, $imageId)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Temukan gambar berdasarkan ID
            $image = ProductImage::findOrFail($imageId);

            // Hapus gambar lama dari storage
            Storage::disk('public')->delete($image->image_path);

            // Simpan gambar baru
            $newImagePath = $request->file('image')->store('product_images', 'public');

            // Perbarui jalur gambar di database
            $image->image_path = $newImagePath;
            $image->save();

            Alert::success('Horee', 'Gambar telah diperbarui');

            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroyImg($imageId) {
        try {
            // Temukan gambar berdasarkan ID
            $image = ProductImage::findOrFail($imageId);

            // Hapus gambar dari storage
            Storage::disk('public')->delete($image->image_path);

            // Hapus rekaman gambar dari database
            $image->delete();

            Alert::success('Horee', 'Gambar telah dihapus');

            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }




}
