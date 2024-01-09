<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/majors_fix.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/class.css') }}">
    <title>Danh sách lớp</title>
</head>
<body>
<div class="root">
    <div class="header">
        <div class="name-block">
            <h1 class="company-name">BKM</h1>
        </div>
        <div class="sub-head">
            <div id="date"></div>
            <div class="logout">
                <a href="{{ route('admins.logout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    Log out</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="sidebar">
            <ul class="category">
                <li>
                    <a href="{{ route('admins.index') }}">
                        <span><i class="fa fa-user"></i>Administrators</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('students.academics') }}">
                        <span><i class="fas fa-user-graduate"></i>Students Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('academics.index') }}">
                        <span><i class="fas fa-calendar"></i>Academic Years</span>
                    </a>
                </li>
                <li>
                    <a href=" {{ route('study_classes.index') }}">
                        <span><i class="fas fa-home"></i>Classes Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('majors.index') }}">
                        <span><i class="fas fa-network-wired"></i>Majors Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('accountants.index') }}">
                        <span><i class="fas fa-file-plus"></i>Accountants Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('payment_methods.index') }}">
                        <span><i class="fas fa-cash-register"></i>Payment Methods</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('basic_fees.index') }}">
                        <span><i class="fas fa-money-bill"></i>Basic Fees</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('scholarships.index') }}">
                        <span><i class="fas fa-gift"></i>Scholarships Level</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('payment_types.index') }}">
                        <span><i class="fas fa-meteor"></i>Payment Types</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content" style="margin-top:20px" >
            <div class="navigate" style="margin-left:50px">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('students.academics') }}">Sinh Viên</a></li>
                        <li class="breadcrumb-item"><a>Niên khóa</a></li>
                    </ol>
                </nav>
            </div>
            <h3 class="table-name2">Niên Khóa</h3>
            <div class="main-content">
                <div class="clear"></div>
                <h4>
                    Chọn niên khóa
                </h4>
                <div class="table2">
                    @foreach($academics as $academic)
                        <div class="card">
                            <h5>{{ $academic-> academic_name}}</h5>
                            <p>
                                <a href="{{ route('students.classFilter',$academic->id) }}">
                                    Xem chi tiết
                                </a>
                            </p>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="slogan">
            <i class="far fa-copyright"></i> 2023 BKM. Nền tảng công nghệ hàng đầu Việt Nam.
        </div>
    </div>
</div>
<script>
    var today = new Date();
    var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
    document.getElementById("date").innerHTML = date;
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</body>
</html>
