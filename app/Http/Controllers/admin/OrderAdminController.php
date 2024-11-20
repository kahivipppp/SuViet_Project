<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use App\Models\OrderItem;

class OrderAdminController extends Controller
{
    public function showlistorders()
    {
        $showlistorders = Order::latest()->paginate(10); // Lấy danh sách đơn hàng, phân trang 10 đơn hàng mỗi trang
        return view('admin.template.donhang', compact('showlistorders'));
    }

    // public function showorderdetail($id)
    // {
    //     $items = Order::with('items')->get();
    //     $userinfo = Order::with('user')->get();
    //     $orderstatus = Order::with('status')->get();
    //     $showorderdetail = Order::where('order_id', $id)->first();
    //     return view('admin.template.donhangchitietAdmin', compact('showorderdetail'));
    // }
    public function showorderdetail($id)
    {
        // Lấy chi tiết đơn hàng với thông tin người dùng, trạng thái đơn hàng, và các sản phẩm trong đơn hàng
        $showorderdetail = Order::with(['user', 'status', 'orderItems.product']) // Lấy dữ liệu liên quan
                                ->findOrFail($id); // Lấy đơn hàng duy nhất
        // Nếu không tìm thấy đơn hàng, trả về lỗi hoặc trang khác
        if (!$showorderdetail) {
            return redirect()->route('admin.donhang')->with('error', 'Không tìm thấy đơn hàng.');
        }

        // Trả về view và truyền dữ liệu đơn hàng vào
        return view('admin.template.donhangchitietAdmin', compact('showorderdetail'));
    }

    // Cập nhật trạng thái đơn ha
    public function updateStatus(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy đơn hàng.']);
        }

        // Cập nhật trạng thái đơn hàng
        $order->status = $request->input('status'); // Cập nhật trạng thái
        $order->save();

        return response()->json(['success' => true, 'message' => 'Trạng thái đã được cập nhật.', 'status' => $order->status]);
    }

    
}
