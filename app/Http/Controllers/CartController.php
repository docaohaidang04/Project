<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;

class CartController extends Controller
{
    //
    public function deal()
    {
        $cart = session()->get('cart', []);
        $totalAmount = 0;
        // Tính tổng thành tiền
        foreach ($cart as $item) {
            $totalAmount += $item['total'];
        }

        return view('deal', compact('cart', 'totalAmount'));
    }
    public function index()
    {
        $cart = session()->get('cart', []);
        $totalAmount = 0;
        // Tính tổng thành tiền
        foreach ($cart as $item) {
            $totalAmount += $item['total'];
        }

        return view('cart', compact('cart', 'totalAmount'));
    }
    public function removeFromCart($id)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart');

        // Xoá sản phẩm khỏi giỏ hàng
        unset($cart[$id]);

        // Cập nhật giỏ hàng trong session
        session()->put('cart', $cart);

        // Chuyển hướng lại đến trang giỏ hàng
        return redirect()->route('cart');

        return redirect()->route('cart');
    }

    public function infocus(Request $request)
    {
        if (Auth::check()) {
            $id_user = Auth::id();
        } else {
            $user = User::create([
                'name' => $request->input('customer_name'),
                'email' => $request->input('customer_email'),
                'address' => $request->input('customer_address'),
                'phone' => $request->input('customer_phone'),
            ]);
            $id_user = $user->id;
        }

        $data = $request->only(['receiver_name', 'receiver_phone', 'receiver_address', 'customer_name', 'customer_email', 'customer_address', 'customer_phone', 'payment_method']);
        $cart = session()->get('cart', []);
        $totalAmount = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['total'];
        }, 0);

        if (empty($data['receiver_name']) || empty($data['receiver_phone']) || empty($data['receiver_address'])) {
            $data['receiver_name'] = $data['customer_name'];
            $data['receiver_phone'] = $data['customer_phone'];
            $data['receiver_address'] = $data['customer_address'];
        }

        $data['total_amount'] = $totalAmount;
        $data['id_user'] = $id_user;

        $order = Order::create($data);
        $order_id = $order->id;

        foreach ($cart as $item) {
            Cart::create([
                'id_product' => $item['id_product'],
                'name' => $item['name'],
                'image' => $item['img'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total' => $item['total'],
                'id_order' => $order_id,
            ]);
        }
        session()->forget('cart');

        return redirect()->route('deal');
    }

    public function addProduct(Request $request)
    {

        $id = $request->input('product_id');
        $product = Product::find($id);

        $cartItem = [
            'id_product' => $product->id,
            'name' => $product->name,
            'img' => $product->img,
            'price' => $product->price,
            'quantity' => $request->input('quantity'),
            'size' => $request->input('size') ?? null,
            'total' => $product->price * $request->input('quantity'),
        ];

        $cart = session()->get('cart', []);
        $found = false;
        foreach ($cart as &$item) {
            if ($item['id_product'] == $cartItem['id_product'] && $item['size'] == $cartItem['size']) {
                // Cập nhật số lượng và tổng thành tiền
                $item['quantity'] += $cartItem['quantity'];
                $item['total'] = $item['price'] * $item['quantity'];
                $found = true;
                break;
            }
        }
        if (!$found) {
            $cart[] = $cartItem;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    public function addProductCart(Request $request)
    {
        $id = $request->input('product_id');
        $product = Product::find($id);

        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }

        $cartItem = [
            'id_product' => $product->id,
            'name' => $product->name,
            'img' => $product->img,
            'price' => $product->price,
            'quantity' => $request->input('quantity'),
            'size' => $request->input('size') ?? null,
            'total' => $product->price * $request->input('quantity'),
        ];

        $cart = session()->get('cart', []);
        $found = false;
        foreach ($cart as &$item) {
            if ($item['id_product'] == $cartItem['id_product'] && $item['size'] == $cartItem['size']) {
                // Cập nhật số lượng và tổng thành tiền
                $item['quantity'] += $cartItem['quantity'];
                $item['total'] = $item['price'] * $item['quantity'];
                $found = true;
                break;
            }
        }
        if (!$found) {
            $cart[] = $cartItem;
        }

        session()->put('cart', $cart);

        // Trả về chuyển hướng đến trang hiện tại kèm theo id của sản phẩm
        return redirect()->route('productdetail', ['id' => $id]);
    }

    //history
    public function orderhistory()
    {

        if (Auth::check()) {
            $id_user = Auth::id();
        }
        $hty = Order::where('id_user', $id_user)->get();
        return view('history', compact('hty'));
    }
    public function history_detail($id)
    {
        $Items = Cart::where('id_order', $id)->get();
        return view('history_detail', compact('Items'));
    }
}