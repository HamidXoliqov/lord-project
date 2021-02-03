<?php
use Illuminate\Support\Facades\Route;

$action = Route::getCurrentRoute()->uri;

?>
<!-- .uc-mobile-menu-pusher -->
<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li class="<?php echo ($action=='/' || $action=='home')?'active':''?>">
                    <a href="<?=url('/')?>">Bosh sahifa</a>
                </li>
                <li class="<?php echo ($action=='about')?'active':''?>">
                    <a href="<?=url('/about')?>">
                        Biz haqimizda
                    </a>
                </li>
                <li class="<?php echo ($action=='service')?'active':''?>">
                    <a href="<?=url('/service')?>">
                        Xizmatlar
                    </a>
                </li>
                <li class="<?php echo ($action=='contact')?'active':''?>">
                    <a href="<?=Url('/contact')?>">
                        Biz bilan aloqa
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->
