<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;

use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function index()
    {

        return view('admin.admin');
    }
    public function user()
    {
        $allUser = User::orderBy('id', 'desc')->paginate(8);
        return view('admin.user', compact('allUser'));
    }
    public function productad()

    {
        $categories = Category::orderBy('id', 'desc')->get();
        $allProducts = Product::orderBy('id', 'desc')->paginate(8);
        return view('admin.productad', compact('allProducts', 'categories'));
    }


    //xoá
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->img) {
            $imgPath = public_path($product->img);
            if (File::exists($imgPath)) {
                File::delete($imgPath);
            }
        }
        $product->delete();
        return redirect()->route('productad')->with('success', 'Product deleted successfully!');
    }

    //thêm
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('productad', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'price', 'category_id', 'img']);
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'upload/' . $imageName;
            $image->move(public_path('upload'), $imageName);
            $data['img'] = url($imagePath);
        }

        Product::create($data);
        return redirect()->route('productad')->with('success', 'Product added successfully!');
    }

    //sua
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('productad', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->only(['name', 'description', 'price', 'category_id']);

        if ($request->hasFile('img')) {
            if ($product->img) {
                $imgPath = public_path($product->img);
                if (File::exists($imgPath)) {
                    File::delete($imgPath);
                }
            }
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'upload/' . $imageName;
            $image->move(public_path('upload'), $imageName);
            $data['img'] =  url($imagePath);
        }

        $product->update($data);
        return redirect()->route('productad')->with('success', 'Product updated successfully!');
    }
    public function searchad(Request $request)
    {
        $keyword = $request->input('keyword');
        $allProducts = Product::SearchProduct($keyword);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.productad', compact('allProducts', 'categories', 'keyword'));
    }


    //user
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $roles = User::select('role')->distinct()->pluck('role');
        return view('admin.user', compact('user', 'roles'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->only(['role']);
        $user->update($data);

        return redirect()->route('user')->with('success', 'Cập nhật thành công !');
    }

    public function lockUser($id)
    {
        $user = User::findOrFail($id);
        $user->block = true;
        $user->save();
        return redirect()->back()->with('success', 'Tài khoản đã được khóa.');
    }

    public function unlockUser($id)
    {
        $user = User::findOrFail($id);
        $user->block = false;
        $user->save();
        return redirect()->back()->with('success', 'Tài khoản đã được mở khóa.');
    }
    public function dealad()
    {

        $hty = Order::all();
        return view('admin.dealad', compact('hty'));
    }
    public function history_detail_ad($id)
    {
        $Items = Cart::where('id_order', $id)->get();
        $order = Order::find($id);
        return view('admin.dealad_detail', compact('Items', 'order'));
    }
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->input('status');
        $order->save();
        return redirect()->back()->with('success', 'Trạng thái đơn hàng đã được cập nhật.');
    }
    public function categoryad()
    {
        $firstCategory = Category::orderBy('id', 'asc')->first();
        $categories = Category::orderBy('id', 'desc')->get();
        $firstCategoryProducts = $firstCategory->products()->orderBy('id', 'desc')->paginate(8);

        return view('admin.categoryad', compact('firstCategory', 'firstCategoryProducts', 'categories'));
    }

    public function showProductsByCategoryad($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::orderBy('id', 'desc')->get();
        $selectedCategoryProducts = $category->products()->orderBy('id', 'desc')->paginate(8);

        return view('admin.categoryad', compact('selectedCategoryProducts', 'categories', 'category'));
    }

    //xoá danh mục
    public function destroycate($id)
    {
        $category = Category::findOrFail($id);
        if ($category->products()->exists()) {
            return redirect()->back()->with('error', 'Cannot delete category with associated products!');
        }
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    //thêm danh mục
    public function createcate()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categoryad', compact('categories'));
    }

    public function storecate(Request $request)
    {
        $data = $request->only(['name']);
        $category = Category::create($data);
        return redirect()->route('categoryad', ['id' => $category->id])->with('success', 'Category added successfully!');
    }
    //sửa
    public function editcate($id)
    {

        $categories = Category::all();
        return view('admin.categoryad', compact('categories'));
    }

    public function updatecate(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->only(['name']);
        $category->update($data);
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}
