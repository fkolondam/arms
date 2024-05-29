<!-- app/Views/layout/navbar.php -->
<!-- App navbar starts -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="offcanvas offcanvas-end" id="MobileMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title semibold">Navigation</h5>
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="offcanvas">
                    <i class="icon-clear"></i>
                </button>
            </div>
            <?php if (isset($menus) && is_array($menus)) : ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($menus as $menu) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="<?php echo $menu['icon']; ?>"></i> <?php echo $menu['nama']; ?>&nbsp;
                        </a>
                        <?php if (isset($menu['children']) && is_array($menu['children']) && !empty($menu['children'])) : ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($menu['children'] as $child) : ?>
                                    <li><a class="dropdown-item" href="<?php echo $child['url']; ?>"> <?php echo $child['nama']; ?></a> </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php else : ?>
                <p>No menu items found.</p>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- App Navbar ends -->
