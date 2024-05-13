@extends('layouts.site')
@section('title','Sản phẩm')
@section('content')
<div>
    <section class="product">
        <div class="container py-3 ">
            <div class="row bg-light">
                <div class="col-md-3">
                    <div class="filter-item">
                        <label for="category">Loại sản phẩm:</label>
                        <select id="category" name="category">
                          <option value="">Tất cả</option>
                          <option value="makeup">Trang điểm</option>
                          <option value="skincare">Chăm sóc da</option>
                          <option value="bodycare">Chăm sóc cơ thể</option>
                        </select>
                      </div>

                </div>
                <div class="col-md mx-1">
                    <div class="filter-item">
                        <label for="price-min">Giá tối thiểu:</label>
                        <input type="number" id="price-min" name="price-min">
                      </div>

                </div>
                <div class="col-md">
                    <div class="filter-item">
                        <label for="price-max">Giá tối đa:</label>
                        <input type="number" id="price-max" name="price-max">
                      </div>
                </div>
                <div class="col-md-3">
                    <section class="section-sort">
                        <div class="sort-options">
                          <label for="sort-by">Sắp xếp theo:</label>
                          <select id="sort-by" name="sort-by">
                            <option value="default">Mặc định</option>
                            <option value="price-asc">Cao - Thấp</option>
                            <option value="price-desc">Thấp- Cao</option>
                            
                          </select>
                </div>
            </div>
            <section class="product ">
                <div class="product">
                   
                    <div class="row py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{("images/MAYBELLINE.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">MAYBELLINE</h5>
                                    <p class="card-text">Son Kem Lì 16h Lâu Trôi Maybelline New York Matte Ink City Edition
                                        Lipstick 5ml</p>
                                    <a href="#" class="btn btn-success">150.00</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="card" style="width: 260px;  ;">
                                <img src="{{asset("images/ROCHE_POSAY.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ROCHE-POSAY</h5>
                                    <p class="card-text">Gel rửa mặt cho da dầu nhạy cảm La Roche-Posay Effaclar Foaming Gel
                                        400ml tiết kiệm hơn</p>
                                    <a href="#" class="btn btn-success">175.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/KLAIRS.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">KLAIRS</h5>
                                    <p class="card-text">Nước hoa hồng Dear, Klairs Supple Preparation Facial Toner 180ml sử
                                        dung tiện lợi hơn </p>
                                    <a href="#" class="btn btn-success">486.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/GẢNIER.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">GARNIER</h5>
                                    <p class="card-text">Nước Tẩy Trang làm sạch sâu dịu nhẹ cho mọi loại da - Garnier Micellar
                                        Cleansing Water 400ml</p>
                                    <a href="#" class="btn btn-success">250.000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/google-shopping-kem-chong-nang-d.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kem chống nắng</h5>
                                    <p class="card-text">Son Kem Lì 16h Lâu Trôi Maybelline New York Matte Ink City Edition
                                        Lipstick 5ml</p>
                                    <a href="#" class="btn btn-success">150.00</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="card" style="width: 260px;  ;">
                                <img src="{{asset("images/google-shopping-kem-duong-the-pa.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kem dưỡng thể</h5>
                                    <p class="card-text">Gel rửa mặt cho da dầu nhạy cảm La Roche-Posay Effaclar Foaming Gel
                                        400ml tiết kiệm hơn</p>
                                    <a href="#" class="btn btn-success">175.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/google-shopping-nuoc-can-bang-la.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nước tẩy trang</h5>
                                    <p class="card-text">Nước hoa hồng Dear, Klairs Supple Preparation Facial Toner 180ml sử
                                        dung tiện lợi hơn </p>
                                    <a href="#" class="btn btn-success">486.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/google-shopping-nuoc-tay-trang-n.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">GARNIER</h5>
                                    <p class="card-text">Nước Tẩy Trang làm sạch sâu dịu nhẹ cho mọi loại da - Garnier Micellar
                                        Cleansing Water 400ml</p>
                                    <a href="#" class="btn btn-success">250.000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/google-shopping-nuoc-tay-trang-t.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">MAYBELLINE</h5>
                                    <p class="card-text">Son Kem Lì 16h Lâu Trôi Maybelline New York Matte Ink City Edition
                                        Lipstick 5ml</p>
                                    <a href="#" class="btn btn-success">150.00</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="card" style="width: 260px;  ;">
                                <img src="{{asset("images/google-shopping-smoothie-tay-da-1.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ROCHE-POSAY</h5>
                                    <p class="card-text">Gel rửa mặt cho da dầu nhạy cảm La Roche-Posay Effaclar Foaming Gel
                                        400ml tiết kiệm hơn</p>
                                    <a href="#" class="btn btn-success">175.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/phan-nuoc-aprilskin-ma-thuat-mau-1.webp")}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">KLAIRS</h5>
                                    <p class="card-text">Nước hoa hồng Dear, Klairs Supple Preparation Facial Toner 180ml sử
                                        dung tiện lợi hơn </p>
                                    <a href="#" class="btn btn-success">486.000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 250px;">
                                <img src="{{asset("images/KLAIRS.webp")}}" class="card-img-top" alt="...">
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
        
    </section>



   
    </section>
</div>
@endsection
