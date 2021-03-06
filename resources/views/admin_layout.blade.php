<!DOCTYPE html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css" />
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap-tagsinput.css')}}" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/backend/js/morris.js')}}"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                prevText: "Th??ng tr?????c",
                nextText: "Th??ng sau",
                dateFormat: "yy-mm-dd",
                dayNamesMin: ["Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? Nh???t"],
                duration: "slow"
            });
            $("#datepicker2").datepicker({
                prevText: "Th??ng tr?????c",
                nextText: "Th??ng sau",
                dateFormat: "yy-mm-dd",
                dayNamesMin: ["Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? Nh???t"],
                duration: "slow"
            });
            $("#start_coupon").datepicker({
                prevText: "Th??ng tr?????c",
                nextText: "Th??ng sau",
                dateFormat: "dd/mm/yy",
                dayNamesMin: ["Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? Nh???t"],
                duration: "slow"
            });
            $("#end_coupon").datepicker({
                prevText: "Th??ng tr?????c",
                nextText: "Th??ng sau",
                dateFormat: "dd/mm/yy",
                dayNamesMin: ["Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? Nh???t"],
                duration: "slow"
            });
        });
    </script>

</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{URL::to('/dashboard')}}" class="logo">
                    ADMIN
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" height="36px" src="{{asset('public/backend/images/avt.jpg')}}">
                            <span class="username">
                                <?php

                                use Illuminate\Support\Facades\Auth;

                                $name = Auth::user()->admin_name;
                                if ('$name') {
                                    echo $name;
                                }
                                ?>
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{URL::to('/logout-auth')}}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{URL::to('/dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>T???ng quan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/information')}}">
                            <i class="fa fa-arrow-circle-right"></i>
                                <span>Th??ng tin website</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Slider</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/manager-slider')}}">Qu???n l?? slider</a></li>
                                <li><a href="{{URL::to('/add-slider')}}">Th??m slider</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Ph???n h???i kh??ch h??ng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/manager-feedback')}}">Li???t k?? ph???n h???i kh??ch h??ng</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh m???c s???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-category-product')}}">Th??m danh m???c s???n ph???m</a></li>
                                <li><a href="{{URL::to('/all-category-product')}}">Li???t k?? danh m???c s???n ph???m</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Th????ng hi???u s???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-brand-product')}}">Th??m th????ng hi???u s???n ph???m</a></li>
                                <li><a href="{{URL::to('/all-brand-product')}}">Li???t k?? th????ng hi???u s???n ph???m</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>S???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-product')}}">Th??m s???n ph???m</a></li>
                                <li><a href="{{URL::to('/all-product')}}">Li???t k?? s???n ph???m</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>M?? gi???m gi??</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/insert-coupon')}}">Qu???n l?? m?? gi???m gi??</a></li>
                                <li><a href="{{URL::to('/list-coupon')}}">Li???t k?? m?? gi???m gi??</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>V???n chuy???n</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/delivery')}}">Qu???n l?? v???n chuy???n</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>????n h??ng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/manager-order')}}">Qu???n l?? ????n h??ng</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh m???c b??i vi???t</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-category-post')}}">Th??m danh m???c b??i vi???t</a></li>
                                <li><a href="{{URL::to('/all-category-post')}}">Li???t k?? danh m???c b??i vi???t</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>B??i vi???t</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-post')}}">Th??m b??i vi???t</a></li>
                                <li><a href="{{URL::to('/all-post')}}">Li???t k?? b??i vi???t</a></li>
                            </ul>
                        </li>
                        @hasrole(['admin','author'])
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Users</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-users')}}">Th??m user</a></li>
                                <li><a href="{{URL::to('/users')}}">Li???t k?? user</a></li>

                            </ul>
                        </li>
                        @endhasrole
                        <!-- d???ng chuy???n quy???n -->
                        @impersonate
                        <li class="sub-menu">
                            <span><a href="{{url::to('/impersonate-destroy')}}">Stop chuy???n quy???n</a></span>

                        </li>
                        @endimpersonate
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('admin_content')


            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>?? 2022 Visitors. All rights reserved | Design by <a href="https://www.facebook.com/annhien00000">V??n Phong</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('public/backend/js/scripts.js')}}"></script>
    <script src="{{asset('public/backend/ckeditor_4.16.2_full_easyimage/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('public/backend/js/validator.min.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('public/backend/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    @yield('javascript_page')


    <script type="text/javascript">
        function ChangeToSlug() {
            var slug;

            //L???y text t??? th??? input title
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
            slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
            slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
            slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
            slug = slug.replace(/??|???|???|???|???/gi, 'y');
            slug = slug.replace(/??/gi, 'd');
            //X??a c??c k?? t??? ?????t bi???t
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
            slug = slug.replace(/ /gi, "-");
            //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
            //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
    </script>
    <!-- x??? l?? t??nh tr???ng ????n h??ng ajax -->
    <script type="text/javascript">
        $('.order_details').change(function() {
            var order_status = $(this).val();
            var order_id = $(this).children(":selected").attr("id");
            var _token = $('input[name="_token"]').val();
            // l???y ra s??? l?????ng
            quantity = [];
            $("input[name='product_sales_quantity']").each(function() {
                quantity.push($(this).val());
            });
            // lay ra product_id
            order_product_id = [];
            $("input[name='order_product_id']").each(function() {
                order_product_id.push($(this).val());
            });
            $.ajax({
                url: 'update-order-qty',
                method: "GET",
                data: {
                    _token: _token,
                    order_status: order_status,
                    order_id: order_id,
                    quantity: quantity,
                    order_product_id: order_product_id
                },
                success: function(data) {
                    alert('C???p nh???t s??? l?????ng th??nh c??ng');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $.validate({

        });
    </script>

    <script>
        $(document).ready(function() {
            CKEDITOR.replace('1');
            CKEDITOR.replace('2');
            CKEDITOR.replace('3');
            CKEDITOR.replace('4');
            CKEDITOR.replace('5');
            CKEDITOR.replace('6');
            CKEDITOR.replace('7');
            CKEDITOR.replace('8', {
                filebrowserImageUploadUrl: "{{url('upload-ckeditor?_token='.csrf_token()) }}",
                filebrowserBrowseUrl: "{{url('file-browser?_token='.csrf_token())}}",
                filebrowerUploadMethod: 'form'
            });

            CKEDITOR.replace('9');
        });
    </script>

    <!-- ajax li???t k?? qu???n huy???n x?? -->
    <script type="text/javascript">
        $(document).ready(function() {
            fetch_delivery();

            function fetch_delivery() {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: 'select-feeship',
                    type: 'POST',
                    data: {
                        _token: _token
                    },
                    success: function(data) {
                        $('#load_delivery').html(data);
                    }
                });

            }
            $(document).on('blur', '.fee_feeship_edit', function() {
                var feeship_id = $(this).data('feeship_id');
                var fee_value = $(this).text();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: 'update-delivery',
                    type: 'POST',
                    data: {
                        feeship_id: feeship_id,
                        fee_value: fee_value,
                        _token: _token
                    },
                    success: function(data) {
                        fetch_delivery();
                    }
                });

            });

            $('.add_delivery').click(function() {

                var city = $('.city').val();
                var province = $('.province').val();
                var wards = $('.wards').val();
                var fee_ship = $('.fee_ship').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: 'insert-delivery',
                    type: 'POST',
                    data: {
                        city: city,
                        province: province,
                        wards: wards,
                        fee_ship: fee_ship,
                        _token: _token
                    },
                    success: function(data) {
                        fetch_delivery();
                    }
                });

            });

            $('.choose').on('change', function() {
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';
                if (action == 'city') {
                    result = 'province';
                } else {
                    result = 'wards';
                }
                $.ajax({
                    url: 'select-delivery',
                    type: 'POST',
                    data: {
                        action: action,
                        ma_id: ma_id,
                        _token: _token
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                });
            });
        })
    </script>
    <script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
    <!-- morris JavaScript -->
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2015 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    },
                    {
                        period: '2015 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    },
                    {
                        period: '2015 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    },
                    {
                        period: '2015 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    },
                    {
                        period: '2016 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    },
                    {
                        period: '2016 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    },
                    {
                        period: '2016 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    },
                    {
                        period: '2016 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    },
                    {
                        period: '2017 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },

                ],
                lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="{{asset('public/backend/js/monthly.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

            switch (window.location.protocol) {
                case 'http:':
                case 'https:':
                    // running on a server, should be good.
                    break;
                case 'file:':
                    alert('Just a heads-up, events will not work when run locally.');
            }

        });
    </script>
    <!-- //calendar -->
    <!-- x??? l?? th???ng k?? -->
    <script type="text/javascript">
        chart30daysorder();

        var chart = new Morris.Line({
            element: 'myfirstchart',
            lineColors: ['#819C79', '#fc8710', '#ff6541', '#A4ADD3', '#766B56'],
            pointFillColor: ['#ffffff'],
            pointStrokeColors: ['black'],
            fillOpacity: 0.5,
            hideHover: 'auto',
            parseTime: false,
            xkey: 'period',
            ykeys: ['order', 'sales', 'profit', 'quantity'],
            labels: ['????n h??ng', 'doanh s???', 'l???i nhu???n', 's??? l?????ng']
        });

        function chart30daysorder() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: 'days-order',
                type: 'POST',
                dataType: "JSON",
                data: {
                    _token: _token
                },
                success: function(data) {
                    chart.setData(data);
                }
            });

        }

        $('.dashboard-filter').change(function() {
            var dashboard_value = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: 'dashboard-filter',
                type: 'POST',
                dataType: "JSON",
                data: {
                    dashboard_value: dashboard_value,
                    _token: _token
                },
                success: function(data) {
                    chart.setData(data);
                }

            });
        });
        $('#btn-dashboard-filter').click(function() {

            var _token = $('input[name="_token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();
            $.ajax({
                url: 'filter-by-date',
                type: 'POST',
                dataType: "JSON",
                data: {
                    from_date: from_date,
                    to_date: to_date,
                    _token: _token
                },
                success: function(data) {
                    chart.setData(data);
                }
            });

        });
    </script>
    <!-- bi???u ????? donut c??c customer,post,... -->
    <script type="text/javascript">
        var colorDanger = "#FF1744";
        Morris.Donut({
            element: 'donut',
            resize: true,
            colors: [
                '#a83293',
                '#a88b32',
                '#0097A7',
                '#46a832',

            ],
            //labelColor:"#cccccc", // text color
            //backgroundColor: '#333333', // border color
            data: [{
                    label: "San pham",
                    value: <?php echo $app_product ?>
                },
                {
                    label: "Bai viet",
                    value: <?php echo $posts ?>
                },
                {
                    label: "Don hang",
                    value: <?php echo $app_order ?>
                },
                {
                    label: "Khach hang",
                    value: <?php echo $app_customer ?>
                },
            ]
        });
    </script>
<!-- gallery ???nh -->
    <script type="text/javascript">

            load_gallery();

            function load_gallery() {
                var pro_id = $('.pro_id').val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: 'select-gallery',
                    type: 'POST',
                    data: {pro_id,_token:_token},
                    success: function(data) {
                        $('#gallery_load').html(data);
                    }
                });
            }

    </script>
    <!-- ????i t??c -->
    <script type="text/javascript">
        $('.add-doitac').click(function() {
            var name = $('#name_doitac').val();
            var link = $('#link_doitac').val();
            var image = $('#image_doitac')[0].files[0];
            var form_data = new FormData();

            form_data.append('file',image);
            form_data.append('name',name);
            form_data.append('link',link);

            $.ajax({
                url: 'add-doitac',
                method: "POST",
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                contentType: false,
                cache: false,
                processData: false,

                data: form_data,
                success: function(data) {
                    alert('Th??m ?????i t??c th??nh c??ng');
                    // list_doitac();
                    // $('#name').val('');
                    // $('#link').val('');
                }
            });
        });
    </script>
    <script type="text/javascript">
        function previewFile(input){
            var file = $(".img-preview").get(0).files[0];

            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
