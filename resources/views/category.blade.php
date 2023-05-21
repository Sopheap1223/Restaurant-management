<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
</head>
<body>
  <!-- menu left side  -->
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
                <a href="/welcome"><i class="fas fa-user-gratuate"></i>
                <div class="bar">Table</div></a>   
            </li>
            <li>
                <a href="/menu"><i class="fas fa-menu"></i>
                <div class="bar">Menu</div></a>
            </li>
            <li>
                <a href="#category"><i class="fas fa-chart-bar"></i>
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

    <!-- category body  -->
    <div class="box-container" id="category">
      <div class="element-container">
        <div class="add-new">
          <a href="" class="link-add">Add New</a>
        </div>
        <tr>
          <td> 
            <div class="Search">
              <input type="text" placeholder="search" >
              <label for="search"><i class="fas fa-search"></i></label>
            </div>
          </td>
         
        </tr>
      </div>
    </div>
     <!-- <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav> -->

       
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script> --> 
</body>
</html>