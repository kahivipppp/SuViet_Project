@extends('desktop.master')

@section('content')
<!-- BREADCRUMD -->
<div class="container-main py-5 px-[5%] lg:px-0">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="/inline-flex flex gap-2 items-center space-x-1">
            <li class="inline-flex items-center">
                <a href="#" class="text-teal-500 hover:text-teal-700">Trang chủ</a>
            </li>
            <li>
                <span class="flex w-1 h-1 bg-cmain rounded-full "></span>
            </li>
            <li>
                <a href="#" class="text-gray-700 hover:text-gray-900">Giỏ hàng</a>
            </li>
        </ol>
    </nav>
</div>
<!-- END BREADCRUMD -->

<!-- GIO HÀNG -->

<div class="cart_page pb-10">
    <div class="tlt_r flex justify-center">
        <h4 class="text-2xl 800:text-[28px] text-cmain font-el font-semibold mb-6">Giỏ hàng của bạn</h4>
    </div>
    <hr>
    <div class="container-main px-[5%] lg:px-0">
        <div class="tiltle_cart flex justify-between">
            <table class="table-auto mt-5">
                <thead class="">
                    <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th> 
                    <th class="hidden 900:table-cell">Giá</th>
                    <th class="hidden 900:table-cell"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                    <td class="px-2 900:px-10 py-2 w-[250px]">
                        <img src="img/chen1.png" alt="">
                    </td>
                    <td class="px-2 900:px-10 py-3 w-[calc(100%-250px-20px)]">
                        Chén cơm 11.2 cm - Jasmine Ly's - Trắng Ngàg
                    </td>
                    <td class="px-2 900:px-10 py-2 ">
                        <div class="flex gap-5 items-center group border rounded-[20px] border-gray-300">
                            <button onclick="decreaseQuantity(1)" class="px-3 800:px-5 py-3 bg-gray-300 hover:bg-gray-400">-</button>
                            <span id="quantity-1" class="">1</span>
                            <button onclick="increaseQuantity(1)" class="px-3 800:px-5 py-3 bg-gray-300 hover:bg-gray-400">+</button>
                        </div>
                    </td>
                    <td class="px-10 py-2 hidden 900:table-cell">880.000 VNĐ</td>
                    <td class="px-10 py-2 hidden 900:table-cell">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.85547 6.5H24.1412" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.64062 6.5H21.3549V23.2143C21.3549 23.7068 21.1592 24.1793 20.811 24.5275C20.4627 24.8757 19.9903 25.0714 19.4978 25.0714H6.49777C6.00522 25.0714 5.53285 24.8757 5.18456 24.5275C4.83629 24.1793 4.64062 23.7068 4.64062 23.2143V6.5Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.35547 6.50014V5.57157C8.35547 4.34021 8.84462 3.15927 9.71532 2.28857C10.586 1.41787 11.767 0.928711 12.9983 0.928711C14.2297 0.928711 15.4106 1.41787 16.2813 2.28857C17.152 3.15927 17.6412 4.34021 17.6412 5.57157V6.50014" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.2109 12.0742V19.5057" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.7852 12.0742V19.5057" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                                
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="cart_sp">
            <!-- back page product -->
            <a href="product.html" class="back_cart pt-8 flex group">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 12H5" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12 19L5 12L12 5" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                <p class="text-base text-cmain3 hover:text-cmain font-el font-semibold">Tiếp tục mua hàng</p>
            </a>
            <div class="form_cp_info mt-5 flex flex-col md:flex-row gap-5 800:gap-20 justify-between">
                <!-- insert coupon -->
                <div class="coupon w-full md:w-[40%]  /border-1 /border-black /rounded-[15px] p-3 800:p-8 flex flex-col gap-3 800:gap-5">
                    <div class="tlt flex gap-2">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10.59 21.09L3.42 13.92C3.23405 13.7343 3.08653 13.5137 2.98588 13.2709C2.88523 13.0281 2.83343 12.7678 2.83343 12.505C2.83343 12.2422 2.88523 11.9819 2.98588 11.7391C3.08653 11.4963 3.23405 11.2757 3.42 11.09L12 2.5L22 2.5L22 12.5L13.41 21.09C13.0353 21.4625 12.5284 21.6716 12 21.6716C11.4716 21.6716 10.9647 21.4625 10.59 21.09Z" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M17 7.5L17 7.51" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                        <p class="text-base 800:text-xl font-el text-cmain3 font-semibold">Phiếu giảm giá</p>
                    </div>
                    <span class="w-full bg-cmain3 h-0.5 border"></span>
                    <div class="frm w-full">
                        <form action="" class="flex flex-col gap-y-3">
                            <input type="text" name="coupon" class="w-full border-2 rounded-[12px] /bg-transparent text-gray-900 placeholder:text-[#939393] bg-[#F2F2F2] focus:ring-0 indent-8 py-3" placeholder="Nhap ma giam gia">
                            <button type="submit" name="" class="w-full border rounded-[12px] hover:bg-cmain text-black hover:text-white focus:ring-0 py-3">Ap dung</button>
                        </form>
                    </div>
                </div>

                <!-- thong tin  -->
                <div class="info w-full md:w-[50%] border-2 rounded-[15px] p-3 800:p-8 flex flex-col gap-8 800:gap-6">
                    <h2 class="text-xl font-semibold mb-6">Đơn hàng tạm tính</h2>
                
                <div class="mb-2 flex justify-between">
                    <span class="text-sm text-gray-600">Thông tin sản phẩm</span>
                    <span class="text-sm text-gray-800">Tạm tính:</span>
                </div>

                <div class="mb-2 flex justify-between">
                    <span class="text-sm text-gray-600 ">Chén cơm 11.2 cm - Jasmine Ly's - Trắng Ngà</span>
                    <span class="text-sm text-gray-800">1.760.000 VNĐ</span>
                </div>
        
                <div class="mb-2 flex justify-between">
                    <span class="text-sm text-gray-600">Tạm tính</span>
                    <span class="text-sm text-gray-800">1.760.000 VNĐ</span>
                </div>

                <div class="mb-2 flex justify-between">
                    <span class="text-sm text-gray-600">Đã giảm giá</span>
                    <span class="text-sm text-green-600">0 VNĐ</span>
                </div>
            
                <div class="border-t border-gray-300 my-4"></div>
            
                <div class="mb-6 flex justify-between">
                    <span class="text-lg font-semibold text-gray-800">Tạm tính thanh toán:</span>
                    <span class="text-lg font-semibold text-gray-800">1.760.000 VNĐ</span>
                </div>
            
                <a href="{{ route('checkout') }}" class="w-full bg-cmain text-white py-2 text-center rounded-lg">Tiến hành thanh Toán</a>
        
                <!-- <p class="text-sm text-gray-600 mt-4">Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <a href="#" class="text-blue-600">Điều khoản Sứ Việt.</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END GIO HANG -->

@endsection