<div class="container">
    <img src="{{asset('assets')}}/img/booking-confirm/user-icon.png" alt="User Icon" class="user-icon" id="userIcon">
</div>
<div class="slide-in-div" id="slideInDiv">
    <img style="width: 150px; height: 150px; display:block; margin:auto;" src="{{asset('assets')}}/img/booking-confirm/user-icon.png" alt="">
    @if (Auth::check())
        <p>{{Auth::user()->name}}</p>
        <a href="{{route('logout')}}">Logout</a>
    @else
        <div style="width: 100%; height: 30px;"></div>
        <p style="padding-top: 0px; padding-bottom: 0px;font-size: 40px;font-family: silverline_script_demoregular, Sans-serif;font-weight: bold;text-align: center; display: flex; justify-content: center; align-items: center;">Welcome to Zin's Hotel!</p>
        <p style="margin-bottom: 18px;padding-top: 0px; padding-bottom: 0px;font-size: 16px;font-weight: bold;text-align: center; display: flex; justify-content: center; align-items: center;">You don't have an account or haven't logged in yet.</p>
        <a style="background-color: #39ad3eab; padding: 12px; display: block; font-size: 16px; font-weight: bold; text-align: center;" href="{{route('login_sign-up')}}">Login & Sign Up</a>
    @endif
</div>
<style>	
    .container {
        z-index: 10;
        position: absolute;
        top: 30%;
        left: -80px;
        transform: translateY(-50%);
    }

    .user-icon {
        width: 50px; /* Kích thước của icon */
        height: 50px;
        cursor: pointer;
        border-radius: 7px;
        opacity: 0.9;
    }

    .slide-in-div {
        width: 300px;
        position: fixed;
        top: 35%;
        z-index: 10;
        right: -1300px; /* Thẻ div sẽ bắt đầu ẩn bên phải ngoài màn hình */
        transform: translateY(-50%);
        background-color: #fff; /* Màu nền của thẻ div */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Hiển thị bóng đổ */
        transition: right 0.3s ease; /* Hiệu ứng di chuyển */
    }
</style>