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
    <title>Student list</title>
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
            <div class="content">
                <div class="navigate">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('students.academics') }}">Sinh Viên</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('students.academics') }}">Niên khóa</a></li>
                            <li class="breadcrumb-item">
                                @foreach( $classes as $class)
                                    @foreach($academics as $academic)
                                        <a href="{{ route('students.classFilter', $academic->id)}}">
                                            @if($class->academic_id == $academic->id)
                                                {{ $academic->academic_name }}
                                            @endif
                                    @endforeach
                                @endforeach
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a>
                                    @foreach($classes as $class)
                                        {{ $class-> class_name}}
                                    @endforeach
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <h3 class="table-name2">Student List</h3>
                <div class="main-content">
                    @foreach( $classes as $class)
                        <h4 class="admin">Lớp {{ $class-> class_name}}</h4>
                    @endforeach
                    <div class="btn-add">
                        @foreach($classes as $class)
                        <a href="{{ route('students.create', $class->id) }}">
                            <i class="fas fa-plus"></i>
                            Add
                        </a>
                        @endforeach
                    </div>
                    <div class="clear"></div>
                    <div class="table2">
                        <table border="1px" cellspacing="0" cellpadding="0" width="100%" id="myDataTable">
                            <thead>
                                <tr>
                                    <th class="left">ID</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>SDT</th>
                                    <th>Địa chỉ</th>
                                    <th>Tên lớp</th>
                                    <th>Học bổng</th>
                                    <th>Tổng học phí</th>
                                    <th>Số tiền đóng/lần</th>
                                    <th>Kiểu đóng</th>
                                    <th>SDT phụ huynh </th>
                                    <th class="right" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->student_dob}}</td>
                                    <td>{{ $student->student_phone}}</td>
                                    <td>{{ $student->province}} province, {{ $student->district}} district, {{ $student->street }} street</td>
                                    <td>{{ $student->className}}</td>
                                    <td>{{ number_format($student->scholarship,0,'',',') }}</td>
                                    <td>{{ number_format($student->total_fee,0,'',',') }}</td>
                                    <td>{{ number_format($student->amount_each_time,0,'',',') }}</td>
                                    <td>{{ $student->paymentTypeName}}</td>
                                    <td>{{ $student->student_parent_phone }}</td>
                                    <td class="btn-edit">
                                        <div class="edit-block">
                                            <a href="{{ route('students.edit',$student->id) }}">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="btn-delete">
                                        <form method="post" action="{{ route('students.destroy', [$student->class_id, $student->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="delete-block">
                                                <button>
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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

    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable({

                "columns": [
                    {
                        "data": "id"
                    },
                    {
                        "data": "student_name"
                    },
                    {
                        "data": "student_dob"
                    },

                    {
                        "data": "student_phone"
                    },
                    {
                        "data":[
                            "province", "district", "street"
                        ]
                    },
                    {
                        "data":"className"
                    },
                    {
                        "data":"scholarship"
                    },
                    {
                        "data":"total_fee"
                    },
                    {
                        "data":"amount_each_time"
                    },
                    {
                        "data":"paymentTypeName"
                    },
                    {
                        "data":"student_parent_phone"
                    },
                    {
                        "defaultContent": "<button>Edit</button>" // Cột giả với nội dung mặc định
                    },
                    {
                        "defaultContent": "<button>Delete</button>" // Cột giả với nội dung mặc định
                    }
                ]
            });
        });
    </script>
</body>
</html>
