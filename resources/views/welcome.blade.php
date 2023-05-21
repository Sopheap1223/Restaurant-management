<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    <div class="mt-5">
        <a href="{{url('login')}}">Log Out</a>
    </div>

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
                    <a href=""><i class="fas fa-th-large"></i>
                    <div class="bar">Statistic</div></a>
                </li>
                <li>
                    <a href="#table"><i class="fas fa-user-gratuate"></i>
                    <div class="bar">Table</div></a>
                </li>
                <li>
                    <a href="/menu"><i class="fas fa-menu"></i>
                    <div class="bar">Menu</div></a>
                </li>
                <li>
                    <a href="/category"><i class="fas fa-chart-bar"></i>
                    <div class="bar">Categorie</div></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-hand-holding-usd"></i>
                    <div class="bar">staff</div></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-hand-holding-usd"></i>
                    <div class="bar">Chef</div></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-cog"></i>
                    <div class="bar">Setting</div></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-question"></i>
                    <div class="bar">Help</div></a>
                </li>
            </ul>
        </div>
        <!-- thems -->
        <div class="main" id="table">
            <div class="tables" >
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.1</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.2</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.3</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.4</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.5</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.6</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.7</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.9</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.10</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.11</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.12</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.13</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.14</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.15</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.16</div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-content">
                       <div class="table-number">No.17</div>
                    </div>
                </div>
            </div>
            <div class="chart"></div>

        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
