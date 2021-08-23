<?php encabezado() ?>

<!-- Sidebar Navigation end-->
<div class="page-content" >
    <div class="page-header bg-light">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom text-dark font-weight-light">Panel de Administración</h2>
        </div>
    </div>
    <section class="no-padding-bottom">
        <div class="container-fluid">
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 bg-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-white text-uppercase mb-1">Usuarios</div>
                                    <div class="h5 mb-0 font-weight-bold text-white"><?php echo $alert; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-info border-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-white text-uppercase mb-1">Productos</div>
                                    <div class="h5 mb-0 font-weight-bold text-white"><?php echo $data; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fab fa-product-hunt fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 bg-dark shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-white text-uppercase mb-1">Clientes</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-white"><?php echo $cliente; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 bg-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-white text-uppercase mb-1">Ventas</div>
                                    <div class="h5 mb-0 font-weight-bold text-white"><?php echo $config; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cart-arrow-down fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                reportes
            </div>
        </div>
    </section>

   
</div>
<?php pie() ?>