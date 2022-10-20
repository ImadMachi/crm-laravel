<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_icon"> <i class='bx bx-user-circle'></i> </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">CRM</span> </a>
        <div class="nav_list">
          <a href="#" class="nav_link {{(request()->is('dashboard'))?'active':''}}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
          <a href="/dashboard/clients" class="nav_link {{(request()->is('dashboard/clients'))?'active':''}}"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Clients</span> </a>
          <a href="/dashboard/produits" class="nav_link {{(request()->is('dashboard/produits'))?'active':''}}"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Produits</span> </a>
          <a href="/dashboard/factures" class="nav_link {{(request()->is('dashboard/factures'))?'active':''}}"> <i class="fa-regular fa-file-lines nav_icon mx-1"></i> <span class="nav_name">Factures</span> </a>
          <a href="/dashboard/devis" class="nav_link {{(request()->is('dashboard/devis'))?'active':''}}"> <i class='bx bx-notepad nav_icon'></i> <span class="nav_name">Devis</span> </a>
          <a href="/dashboard/bons-commande" class="nav_link {{(request()->is('dashboard/bons-commande'))?'active':''}}"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Bons De Commandes</span></a>
          <a href="/dashboard/bons-livraison" class="nav_link {{(request()->is('dashboard/bons-livraison'))?'active':''}}"> <i class='bx bx-package nav_icon'></i> <span class="nav_name">Bons De Livraison</span></a>
        </div>
      </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
  </div>


  <div id="wrapper" class="wrapper">
    {{$slot}}
  </div>

  <footer class="bg-white mt-4">
    <div class="d-flex justify-content-between align-items-center p-3">
      <p class="m-0">2022 &copy; Imad Machi</p>
      <p class="m-0">Laravel</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>

</html>