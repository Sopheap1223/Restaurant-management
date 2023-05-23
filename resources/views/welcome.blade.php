<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    

    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>brand.</h2>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="/image/coverphoto.jpg" alt="">
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href=""><i class="fa-regular fa-flag"></i>
                    <div class="bar">Report</div></a>
                </li>
                <li>
                    <a href="#table"><i class="fas fa-th-large"></i>
                    <div class="bar">Table</div></a>
                </li>
                <li>
                    <a href="/menu"><i class="fa-regular fa-box"></i>
                    <div class="bar">Product</div></a>
                </li>
                <li>
                    <a href="/category"><i class="fas fa-chart-bar"></i>
                    <div class="bar">Categorie</div></a>
                </li>
                <li>
                <a href=""><i class="fa-sharp fa-solid fa-cart-plus"></i>
                <div class="bar">POS</div></a>
            </li>
                <li>
                    <a href=""><i class="fa-sharp fa-solid fa-clipboard-user"></i>
                    <div class="bar">staff</div></a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-kitchen-set"></i>
                    <div class="bar">Kitchen</div></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-cog"></i>
                    <div class="bar">Setting</div></a>
                </li>
                <li>
                    <a href="{{url('login')}}"><i class="fa-solid fa-right-from-bracket"></i>
                    <div class="">Exit</div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- thems -->
        <div class="main" id="table">
            <div class="tables" >
                <table>
                    <tr>
                        <a href="{{url('register')}}">
                            <div class="table">
                                <div class="table-content">
                                    <div class="table-number">No.1</div>
                                </div>
                            </div>    
                        </a>
                    </tr>
                    <tr>
                        <a href="{{url('register')}}">
                            <div class="table">
                                <div class="table-content">
                                    <div class="table-number">No.2</div>
                                </div>
                            </div>    
                        </a>
                    </tr>
                </table>
                
            </div>
            <div class="chart"></div>

        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
