<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body, .container, .row, .wrap, #admin_right{
            height: 100%;
        }

        .wrap {
            width: 100%;
            background-color: #272742;
        }

        #admin_right {
            background-color: white;
        }

        .sidebar {
            background-color:#272742;
            padding:0;
            min-height:100% !important;
            border-left: 5px solid #23253A;
        }

        .sidebar_info {
            padding-top: 10px;
            padding-left: 20px;
            min-height: 100px;
            padding-bottom: 60px;
        }

        /*User Info*/
        .sidebar_info a{
            text-transform: uppercase;
            text-decoration: none;
            color: #838EAB;
        }

        .sidebar_user {
            padding-top: 10px;
            color: #838EAB;
            line-height: 10px;
        }
        
        .sidebar_user span{
            color: #fff;
        }
        /*End of User Info*/

        /*Links*/
        .sidebar_links ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar_links a {
            color: #6F7894;
            display: block;
            font-size: 15px;
            padding: 20px 20px;
            text-decoration: none;
        }

        .sidebar_links a:hover {
            color: #fff;
        }

        .sidebar_links i {
            margin-right: 20px;
            font-size: 12px;
        }

        .fa-bell {
            color: #FA6B41;
        }
        
        .fa-snowflake-o {
            color: #535FFC;
        }

        .fa-users {
            color: #9874DB;
        }
        /*End of Links*/
    </style>
</head>
<body>
<div class="wrap">
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-1 col-xs-2 sidebar hidden-sm hidden-xs" id="admin_left">
            <div class="sidebar_info">
                <a href="#"><h5>Admin Panel</h5></a>
                <div class="sidebar_user">
                    <p>Hello,</p>
                    <span>Pavel Petrovič</span>
                </div>
            </div>
            <div class="sidebar_links">
                <ul>
                    <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>Link 1</a></li>
                    <li><a href="#"><i class="fa fa-snowflake-o" aria-hidden="true"></i>Link 2</a></li>
                    <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Teams</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-12" id="admin_right">
            <button class="btn btn-default hidden-lg hidden-md" id="menu_button">BTN</button>
        </div>
    </div>
</div>
</div>
<script>
    var $toggled= false;
    $("#menu_button").click(function(){
        if(!$toggled){
            $( "#admin_left" ).removeClass( "hidden-sm hidden-xs" );
            $( "#admin_right" ).removeClass("col-sm-12").addClass("col-sm-11");
            $toggled = true;
        }else{
            $( "#admin_left" ).addClass( "hidden-sm hidden-xs" );
            $( "#admin_right" ).addClass("col-sm-12").removeClass("col-sm-11");
            $toggled = false;
        }
    });
</script>
</body>
</html>