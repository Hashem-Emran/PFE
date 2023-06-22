<div class="mt-3 pt-4">
    <!-- <img  src="welcome.svg" style="width: 80%;margin:10px auto;display:block"> -->
    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <a href="">Users</a>
                    </div>
                    <a href="{{route('gestion',['users'])}}">
                        <span style="color: red;">{{$infoUsers}}</span>
                    </a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-md-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       Products
                    </div>
                    <!-- class="btn btn-primary" -->
                    <a href="{{route('gestion',['produits'])}}" >
                       <span style="color: red;">{{$infoProduit}}</span>
                    </a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-bag fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="col-xl-3 col-md-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       Categorie
                    </div>
                    <a href="{{route('gestion',['categories'])}}"> <span style="color: red;">{{$infoCategorie}}</span></a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                         
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            commandes  </div>
                             
                              <a href="{{route('gestion',['comm'])}}"> <span style="color: red;">{{$info}}</span></a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
