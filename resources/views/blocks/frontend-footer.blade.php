<?php
use Illuminate\Support\Facades\Route;
use App\Models\Settings;
use App\Models\Title;
use App\Models\Text;

$action = Route::getCurrentRoute()->uri;
?>

<footer class="footer">
    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a href="<?=url('/')?>">
                            <img class="img-responsive" src="{{asset('themes/frontend/img/logo-footer.png')}}" alt="footer">
                        </a>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-md-8">
                    <div class="footer-text">
                        <p>
                            {{Text::getContent('office-footer-text')}}
                        </p>
                        <ul>
                            <li class="phone">
                            <i class="fa fa-volume-control-phone" aria-hidden="true">
                            </i>
                                <?=Settings::getValue('office_phone');?>
                                <small>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <?=Settings::getValue('office_time');?>
                                </small>
                            </li>
                            <li class="address">
                                <address>
                                    <i class="fa fa-map-pin" aria-hidden="true"></i>
                                    <?=Settings::getValue('office_address');?>
                                </address>
                            </li>
                        </ul>

                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
            <span class="copytext">
                Powered &copy; 2020 | 
                    <a href="https://lordfaktor.uz">Lord Faktor</a>
                - jamoasi Dasturchisi: 
                <strong style="color:#4d6de3">Xoliqov. A</strong>
            </span>

            <ul class="list-inline pull-right">
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
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li class="<?php echo ($action=='contact')?'active':''?>">
                    <a href="<?=Url('/contact')?>">
                        Biz bilan aloqa
                    </a>
                </li>
            </ul>
        </div><!-- .container -->

    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->
