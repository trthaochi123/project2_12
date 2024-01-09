<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/majors_fix.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
    <title>Admin-add</title>
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
            <div class="content2">
                <h3 class="table-name2">Create A New Administrator</h3>
                <div class="add-form">
                    <form method="post">
                        <div class="form-heading">Enter Information Fields</div>
                        @csrf
                        <div class="inputs-list">
                            <div class="mt-3 mb-3">
                                <label for="admin_name">Full name</label>
                                <input name="admin_name" type="text" id="admin_name" class="form-control form-control-sm"/>
                            </div>
                            <div class="mt-3 mb-3">
                                <label for="admin_phone">Phone number</label>
                                <input name="admin_phone" type="text" id="admin_phone" class="form-control form-control-sm"/>
                            </div>

                            <div class="mt-3 mb-3">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <span>Address</span>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <label for="province">Province</label>
                                        <input name="province" type="text" id="province" class="form-control form-control-sm"/>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <label for="district">District</label>
                                        <input name="district" type="text" id="district" class="form-control form-control-sm"/>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <label for="street">Street</label>
                                        <input name="street" type="text" id="street" class="form-control form-control-sm"/>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-3 mb-3">
                                <label for="email">Email</label>
                                <input name="email" type="text" id="email" class="form-control form-control-sm"/>
                            </div>
                            <div class="mt-3 mb-3">
                                <label for="password">Password</label>
                                <input name="password" type="password" id="password" class="form-control form-control-sm"/>
                            </div>
                            <div>
                                <button class="btn btn-success btn-sm">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
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
</body>
</html>
