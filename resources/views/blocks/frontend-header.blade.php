<?php
use App\Models\Settings;
use PharIo\Manifest\Url;
use Illuminate\Support\Facades\Route;

$action = Route::getCurrentRoute()->uri;
//dd($action);
?>

<!-- Header Top -->
<div class="header-top visible-md visible-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <ul class="social-icon">
                    <li>
                        <a href="<?=Settings::getValue('gmail_plus');?>" class="fa fa-plus" aria-hidden="true" target="_blan plus" title="Gmail plus"> </a>
                    </li>
                    <li>
                        <a href="<?=Settings::getValue('instagram');?>" class="fa fa-instagram" aria-hidden="true" target="_blan instagram" title="Instagram"> </a>
                    </li>
                    <li>
                        <a href="<?=Settings::getValue('facebook');?>" class="fa fa-facebook" aria-hidden="true" target="_blan facebook" title="Facebook"> </a>
                    </li>
                    <li>
                        <a href="<?=Settings::getValue('youtube');?>" class="fa fa-youtube" aria-hidden="true" target="_blan youtube" title="Youtube"> </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-8">
                <ul class="top-contact pull-right">
                    <li class="phone">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        <?=Settings::getValue('operator_phone');?>
                    </li>
                    <li class="email">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <?=Settings::getValue('operator_email');?>
                    </li>
                    <li class="get-a-quote">
                        <a href="<?=Settings::getValue('telegram');?>" title="Telegram" target="_blank telegram">
                            Telegram sahifamizga obuna bo'ling!
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- .navbar-top -->
<nav class="navbar m-menu navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=url('/')?>">
                <img src="{{asset('themes/frontend/img/logo.png')}}" alt="logo">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
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
                <li class="dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">Ochiladigan
                        ro'yxat <span><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Ajoyib xususiyatlar</a></li>
                        <li><a href="#">Toza interfeys</a></li>
                        <li><a href="#">Mavjud imkoniyatlar</a></li>
                        <li><a href="#">Javob beruvchi dizayn</a></li>
                        <li><a href="#">Pikselli mukammal grafikalar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->
