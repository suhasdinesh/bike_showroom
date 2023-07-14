<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
    @include(backpack_view('inc.head'))
</head>
<body style="background-color:#FFF">

    <div clas="container-fluid card">
      
      <img height="100%" src="https://images.ctfassets.net/x7j9qwvpvr5s/7l63y8KePbk82JsU50Bstw/7bb4453de02d565e858451f5edf25cb4/XDiavel-03-Hero-740x850.jpg" alt="" class="card-img" style="object-fit:cover;">
      <div class="card-img-overlay container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 2%">
          <div class="container-fluid">
            <div class="collapse navbar-collapse navbar-nav-link-padding-2 " id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>  
    <div class="container p-4">
        <div class="card" style="margin-left: 2px; border-left : 3px solid red">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <p style="color: #AAA">MOTOGP</p>
                        <h3 class="title">British GP: the Ducati Lenovo Team arrives at Silverstone for the twelfth GP of the 2021 MotoGP season.</h3>
                        <a href="#" style="color: red">FOLLOW THE RACE</a>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid rounded" src='https://images.ctfassets.net/x7j9qwvpvr5s/3BLR7ypr8aSbgUpyFAZ9ou/107f881eaeaf99b4dbeeda4ff41c4050/banner-wide-Bagnaia_R09_663x249.jpg'>
                    </div>
                </div>
                
                <div> 
            </div>
        </div>
        </div>
       
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="https://images.ctfassets.net/x7j9qwvpvr5s/1aHPgpfwmfg6dqrOb38sJW/80a3bc3dd529f03754a19f33267f82b6/Accessori-Panigale-V4-grid-imgtext-432x230.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 14px;coloe:#AAA">PANIGALE</h5>
                  <p class="card-text">To make the Panigale V4 S even more unique on the racetrack, Ducati offers its fans a series of accessories from the Ducati Performance catalogue.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://images.ctfassets.net/x7j9qwvpvr5s/i46tVmQ4lznorrvm4mTF7/81d4eba8bc84cad894bfee5a45ff6251/Touring-Accessories-grid-imgtext-432x230.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 14px;coloe:#AAA">ACCESSORIES</h5>
                  <p class="card-text">Ducati offers a selection of touring accessories from the Performance catalogue, to increase the pleasure of every riding adventure.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://images.ctfassets.net/x7j9qwvpvr5s/29ao5rau06RGqXMxIuDXaa/f479fd9ef93112aecfcd83af6a522120/Ducati-Ogio-thumb-img-medium-432x230.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 14px;coloe:#AAA">APPAREL</h5>
                  <p class="card-text">Ducati offers enthusiasts the Redline collection of trolleys and sports bags, which gives all Ducatisti the opportunity to take their passion for Ducati with them when travelling.</p>
                </div>
              </div>
            </div>
            
          </div>
    </div>
    <div class="container">
        <div class="card">
          <img class="card-img" src="https://images.ctfassets.net/x7j9qwvpvr5s/2pe89zi2F5KoLpPFSI8mC4/f96c0850f039ac503000422eb5b9952a/Readline-magazine-ENG-01-banner-full-1330x600.jpg">
          <div class="card-img-overlay">
            <div class="card-title" style="padding: 3%; " >
                <h1 style="color:#FFF">Ducati Redline Magazine 01 | 2021</h1>

            </div>
            <div class="card-text">
                <h4 class="col-lg-4" style="color: #FFF;font-spacing:2px;" >
                    Discover all the most beautiful stories from the Ducati world in the full version of the Magazine, available for free in digital format
                </h4>
                <button class="btn btn-primary" style="margin-left: 1%;margin-top:1%"><b>Discover More</b></button>
            </div>
          </div>  
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h6>SCRAMBLER RADIO</h6>
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="card-text">It's a joy to play!</h3>
                        <p class="card-text">Our rumbling sound! Radio Ducati Scrambler is the echo of freedom, passion and experiences.</p>
                        </div>
                        <div class="col-lg-8">
                             <img class="img-fluid rounded" src="https://images.ctfassets.net/x7j9qwvpvr5s/1xoJ54s8IKAb7j9Vk2OUIi/d85a8c53f107ae65fdf3c6500981d218/Scrambler-radio-Scrambler-01-banner-wide-663x249.jpg">
                        </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
          <img class="card-img" src="https://images.ctfassets.net/x7j9qwvpvr5s/2LT5v6CyC1IXoieCs4FsG4/c9448a82773e9e34d9ecfa50de4db2c3/MTS-V4-01-Banner-Full-1330x600.jpg">
          <div class="card-img-overlay">
            <div class="card-title" style="padding: 3%; " >
                <h1 style="color:#FFF">
                    Get ready to rule all roads 
                </h1>

            </div>
            <div class="card-text">
                <h4 class="col-lg-6" style="color: #FFF;font-spacing:2px;" >


                    Sportier and more touristic, more capable off-road and easier in urban use: four perfectly balanced souls to make the fourth generation Multistrada effective and fun in all riding conditions. 
                                    </h4>
                <button class="btn btn-primary" style="margin-left: 1%;margin-top:1%"><b>Discover More</b></button>
            </div>
          </div>  
        </div>
    </div>
    <div class="container">
      <div class="card ">
        <div class="row">
          <div class="col-md-7">
            <img src="https://images.ctfassets.net/x7j9qwvpvr5s/3hHZ0IOisZBYQakIVR74YJ/3a3e055b7e84b92640eac4facb6f1e85/MyDucati-Manutenzione-Digitale-ENG-banner-wide-663x249-v03.png" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <h6 class="card-title">MYDUCATI</h6>
              <p class="card-text">My Ducati App evolves: the new "Maintenance section is now available!</p>
              <p class="card-text" style="color: #AAA">With MyDucati app you can access the digital maintenance of your motorcycle with a click: check the maintenance history, view the scheduled service and be informed in real time on the updates available for your bike.</p>
              <h6><a style="color: red">FIND OUT MORE</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card shadow-lg rounded">
        <img src="https://images.ctfassets.net/x7j9qwvpvr5s/5SS6tIXLGyQmhSogHnjsNK/2b750f338efd1d341e8ad2e89c5e10f7/Scrambler-Abbigliamento-01-Banner-full-1330x600.jpg" alt="" class="card-img">
        <div class="card-img-overlay">
          <div class="card-title" style="padding-top: 1%; padding-left:3%"><h4 style="color: #FFF" class="card-title">It's a joy to wear</h4></div>
          <h3 class="card-text col-lg-6" style="color: #FFF;padding: 3%;">
            The Scrambler apparel is the perfect mix of riding comfort, lifestyle and self-expression. 
          </h3>
          asd
          <button class=" btn btn-danger"><h6 style="color: #FFF">FIND OUT MORE</h6></button>
        </div>
      </div>
    </div>
    <div class="container-fluid-lg" width="60%">
      <div class="card bg-dark">
        Footer
      </div>
    </div>
</body>
</html>