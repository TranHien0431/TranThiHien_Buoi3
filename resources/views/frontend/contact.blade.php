@extends('layouts.site')
@section('title','Liên hệ')
@section('content')
<div>
    
   


    <div class="contact">
        <div class="side_one">
            <h2>Hãy Liên Hệ Với Chúng Tôi</h2>
            <div class="inputBx">
                <i class='bx bx-envelope'></i>
                <input type="email" placeholder="Nhập địa chỉ email của bạn">
            </div>
            <div class="inputBx">
                <textarea cols="30" rows="10" placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
            </div>
        
            <button>Gửi</button>
        </div>
        
        <div class="side_two">
            <div class="col-1">
                <i class='bx bx-location-plus' ></i>
                <div class="container">
                    <h4>Địa chỉ:</h4>
                    <p>164 Trần Hưng Đạo, Quận 1, Thành phố Hồ Chí Minh</p>
                </div>
            </div>
            <div class="col-1">
                <i class='bx bx-phone'></i>
                <div class="container">
                    <h4>Hotline: </h4>
                    <span>0707 516 159</span>
                </div>
            </div>
            <div class="col-1">
                <i class='bx bx-envelope'></i>
                <div class="container">
                    <h4>Hỗ trợ bán hàng</h4>
                    <span>thinh26@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

    
    


   
    

</div>
@endsection

