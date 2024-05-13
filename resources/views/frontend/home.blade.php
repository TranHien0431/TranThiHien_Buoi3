@extends('layouts.site')
@section('title','trang chu')
@section('content')
<div>
    <section class="product-new">
        <div class="product_new bg-light">
            <h2>SẢN PHẨM MỚI</h2>
            <div class="row py-2">
                <div class="col-md-3">
                   
                    <div class="card" style="width: 210px;">
                        <img src="{{asset("images/Son_tint.webp")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Son Tint</h5>
                            <p class="card-text">Some quick example text to build on the card title and make and make
                                and make up the bulk of the more time .</p>
                            <a href="#" class="btn btn-success">200.000đ</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card" style="width: 210px;  ">
                        <img src="{{asset("images/Mat_cara.webp")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mascara</h5>
                            <p class="card-text">Mascara ZEESEA kháng nước lâu trôi 36h chống nhòe chuốt mi cong vút và
                                dài hơn lâu hơn khi sử dụng.</p>
                            <a href="#" class="btn btn-success">75.000</a>



                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 210px;">
                        <img src="{{asset("images/sua_rua_mat.webp")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sữa rữa mặt</h5>
                            <p class="card-text">[BILL 499K TẶNG 1 MINISIZE - SL GIỚI HẠN] Sữa Rửa Mặt Dịu Nhẹ Cetaphil
                                Gentle Skin Haki </p>
                            <a href="#" class="btn btn-success">400.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 210px;">
                        <img src="{{asset("images/Cocoon.webp")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cocoon</h5>
                            <p class="card-text">Bộ cà phê Đắk Lắk làm sạch da chết cocoon: da mặt 150ml + cơ thể 200ml
                                Hasaki chinh hãng.</p>
                            <a href="#" class="btn btn-success">250.000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
  
    <!-- Sale Products Section -->
    <section class="product-sale ">
        <div class="product_sale">
            <div class="bg-light">
                <h2>SẢN PHẨM SALE</h2>
            </div>
           <div class="row py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 210px;">
                                <img src="{{ asset("images/GARNIER.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">MAYBELLINE</h5>
                                    <p class="card-text">Son Kem Lì 16h Lâu Trôi Maybelline New York Matte Ink City Edition
                                        Lipstick 5ml</p>
                                        
                                    <a href="#" class="btn btn-success">150.00</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="card" style="width: 210px;  ;">
                                <img src="{{ asset("images/ROCHE_POSAY.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ROCHE-POSAY</h5>
                                    <p class="card-text">Gel rửa mặt cho da dầu nhạy cảm La Roche-Posay Effaclar Foaming Gel
                                        400ml tiết kiệm hơn</p>
                                    <a href="#" class="btn btn-success">175.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 210px;">
                                <img src="{{ asset("images/KLAIRS.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">KLAIRS</h5>
                                    <p class="card-text">Nước hoa hồng Dear, Klairs Supple Preparation Facial Toner 180ml sử
                                        dung tiện lợi hơn </p>
                                    <a href="#" class="btn btn-success">486.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 210px;">
                                <img src="{{ asset("/images/GẢNIER.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">GARNIER</h5>
                                    <p class="card-text">Nước Tẩy Trang làm sạch sâu dịu nhẹ cho mọi loại da - Garnier Micellar
                                        Cleansing Water 400ml</p>
                                    <a href="#" class="btn btn-success">250.000</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>

    <!-- Latest Posts Section -->
    <section class="post-new">
        <div class="bg-light">
            <h2>BLOG LÀM ĐẸP</h2>
        </div>

        <div class="container py-3 ">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html">
                        <img src="{{asset("images/a.webp")}}" class="logo" alt="Logo" height="200px" width="250px">
                    </a>
                    <h6>Rửa mặt bằng nước muối sinh lý như thế nào để không hại da?</h6>
                    <p>Bạn có thể dễ dàng rửa mặt bằng nước muối sinh lý hằng ngày. Dung dịch đặc biệt...</p>


                </div>
                <div class="col-md mx-1">
                    <a href="index.html">
                        <img src="{{asset("images/b.webp")}}" class="logo" alt="Logo" height="190px" width="260px">
                    </a>
                    <h6>Glycerin - Hợp chất “quốc dân” trong dưỡng da</h6>
                    <p> Glycerin là hợp chất phổ biến trong các sản phẩm làm đẹp vì đem lại nhiều...</p>

                </div>
                <div class="col-md">
                    <a href="index.html">
                        <img src="{{asset("images/untitled-1ad.webp")}}" class="logo" alt="Logo" height="190px" width="250px">
                    </a>
                    <h6>Serum là gì? Cách sử dụng serum để đạt kết quả tốt nhất
                    </h6>
                    <p> Serum là một sản phẩm chỉ mới xuất hiện vài năm gần đây. Tuy nhiên, mức độ...</p>
                </div>
                <div class="col-md-3">
                    <a href="index.html">
                        <img src="{{asset("images/untitled-1ag.webp")}}" class="logo" alt="Logo" height="190px" width="260px">
                    </a>
                    <h6>Glycerin - Hợp chất “quốc dân” trong dưỡng da</h6>
                    <p> Glycerin là hợp chất phổ biến trong các sản phẩm làm đẹp vì đem lại nhiều...</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
