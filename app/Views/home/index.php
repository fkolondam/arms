<!-- app/Views/home/index.php -->

<div class="app-body">
    <div class="container-fluid">
        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-12 col-xl-6">
                <!-- Breadcrumb start -->
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item">
                        <i class="icon-house_siding lh-1"></i>
                        <a href="index.html" class="text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item">Starter Page</li>
                </ol>
                <!-- Breadcrumb end -->
            </div>
        </div>
        <!-- Row end -->
        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Card Title</h5>
                    </div>
                    <div class="card-body">
                        <!-- Your code goes here -->
                        <?php
                        echo '<pre>';
                        print_r($menus);
                        echo '</pre>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
</div>


