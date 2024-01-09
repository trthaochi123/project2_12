<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/start.css') }}">
    <title>Welcom to BKACAD's tuition manager!</title>
</head>
<body>
    <div id="container">
            <div class="header">
                <h3>BKM</h3>
                <div class="nav">
                    <div class="mg3">
                        <a href="#">ABOUT</a>
                    </div>
                    <div class="mg2">
                        <a>LOGIN</a>
                        <ul class="sub-nav">
                            <li><a class="js-modal-login-adm">Administrator</a></li>
                            <li><a class="js-modal-login-acc">Accountant</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="start-content">
                <div class=" content">
                    Welcome To <br>BKACAD's Tuition <br>Manager!
                </div>
                <div class=" logo">
                    <div class="box" >
                        <div class="card">
                            BKACAD
                        </div>
                        <div class="card">
                            BKACAD
                        </div>
                        <div class="card">
                            BKACAD
                        </div>
                        <div class="card">
                            BKACAD
                        </div>
                        <div class="card">
                            BKACAD
                        </div>
                        <div class="card">
                            BKACAD
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-header">
                <h3 class="modal-name">Quyền truy cập</h3>
                <div class="modal-des">Lối vào cho Quản Trị Viên</div>
                <div class="modal-close js-modal-close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <form method="post" action="{{ route('admins.login') }}">
                @csrf
                <div class="modal-body">
                    <div class="modal-body-items">
                        <label for="admin_email" class="modal-label">Email*</label>
                        <input id="admin_email" name="email" type="text" class="modal-input">
                    </div>
                    <div class="modal-body-items">
                        <label for="admin_password" class="modal-label">Mật khẩu*</label>
                        <input id="admin_password" name="password" type="password" class="modal-input">
                    </div>
                </div>
                <button class="btn-login">
                    Đăng nhập
                </button>
            </form>
        </div>
    </div>
    <div class="modal js-modal2">
        <div class="modal-container js-modal-container2">
            <div class="modal-header">
                <h3 class="modal-name">Quyền truy cập</h3>
                <div class="modal-des">Lối vào cho Kế Toán</div>
                <div class="modal-close js-modal-close2">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <form method="post" action="{{ route('accountants.login') }}">
                @csrf
                <div class="modal-body">
                    <div class="modal-body-items">
                        <label for="accountant_email" class="modal-label">Email*</label>
                        <input id="accountant_email" name="email" type="text" class="modal-input">
                    </div>
                    <div class="modal-body-items">
                        <label for="accountant_password" class="modal-label">Mật khẩu*</label>
                        <input id="accountant_password" name="password" type="password" class="modal-input">
                    </div>
                </div>
                <button class="btn-login">
                    Đăng nhập
                </button>
            </form>
        </div>
    </div>
    <script>
        const modalAdminLogin = document.querySelector('.js-modal-login-adm');
        const modal = document.querySelector('.js-modal');
        const modalContainer = document.querySelector('.js-modal-container');
        const modalClose = document.querySelector('.js-modal-close');

        function showLoginAdmin(){
            modal.classList.add('open');
        }
        function hideLoginAdmin(){
            modal.classList.remove('open');
        }
        modalAdminLogin.addEventListener('click',showLoginAdmin);
        modalClose.addEventListener('click',hideLoginAdmin);
        modal.addEventListener('click',hideLoginAdmin);
        modalContainer.addEventListener('click',function(event){
            event.stopPropagation();
        })

        const modalAccountantLogin = document.querySelector('.js-modal-login-acc');
        const modal2 = document.querySelector('.js-modal2');
        const modalContainer2 = document.querySelector('.js-modal-container2');
        const modalClose2 = document.querySelector('.js-modal-close2');
        function showLoginAccountant(){
            modal2.classList.add('open');
        }
        function hideLoginAccountant(){
            modal2.classList.remove('open');
        }
        modalAccountantLogin.addEventListener('click',showLoginAccountant);
        modalClose2.addEventListener('click',hideLoginAccountant);
        modal2.addEventListener('click',hideLoginAccountant);
        modalContainer2.addEventListener('click',function(event){
            event.stopPropagation();
        })
    </script>

</body>
</html>
