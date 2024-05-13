@extends('layouts.site')
@section('title','Chi tiết sản phẩm')
@section('content')
<div>
    <div class="container">

        <div class="container py-3 ">
            <div class="row bg-light">
                <div class="col-md-4">
                    <div class="product-same-category">
                        <h3>Other Products </h3>
                        <div class="product-list">
                            <div class="product-card" >
                                <img src="{{asset("images/google-shopping-kem-chong-nang-d.webp")}}" alt="Product 1" >
                                
                            </div>
                           
                            <!-- Thêm các sản phẩm khác trong cùng loại -->
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="product-info">
                        <h3>Kem chống nắng</h3>
                        <p>Price: $100</p>
                        <p>Category: Electronics</p>
                        <!-- Thêm các thông tin khác về sản phẩm -->
                    </div>
            
                    <div class="product-detail">
                        <h4>Product Detail</h4>
                        <p>La Roche-Posay Effaclar Foaming Gel là gel rửa mặt được thiết kế đặc biệt để làm sạch da dầu nhạy cảm một cách nhẹ nhàng. Sản phẩm làm sạch sâu, loại bỏ bụi bẩn, bã nhờn và tạp chất mà không làm khô da, đồng thời giúp cân bằng độ pH tự nhiên của da.</p>
            <p>Đặc biệt, sản phẩm này không chứa cồn và không gây kích ứng, thích hợp cho những làn da nhạy cảm. Hương thơm nhẹ nhàng và dễ chịu.</p>
                        <!-- Thêm nội dung chi tiết sản phẩm -->
                    </div>

                </div>
                
            </div>
        
    </div>
</div>
@endsection
    
