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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
</head>
<body>
  <!-- menu left side  -->
  <div class="container">
    
    <div class="sidebar">
        <ul>
            <li>
                <a href=""><i class="fa-regular fa-flag"></i>
                <div class="bar">Report</div></a>
            </li>
            <li>
                <a href="/welcome"><i class="fas fa-th-large"></i>
                <div class="bar">Table</div></a>   
            </li>
            <li>
                <a href="/menu"><i class="fa-regular fa-box"></i>
                <div class="bar">Product</div></a>
            </li>
            <li>
                <a href="#category"><i class="fas fa-chart-bar"></i>
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

    <!-- category body  -->
    <div class="box-container" id="category">
      <div class="element-container">
        <div class="add-new">
          <a href="" class="link-add"><i class="fa-solid fa-plus"></i></a>
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
    
</body>
</html>