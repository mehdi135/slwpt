<!-- Header
============================================= -->
<header id="header" class="sticky-style-2">

    <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="index.html" class="standard-logo" data-dark-logo="<?php Asset::images('logo-dark.png'); ?>"><img src="<?php Asset::images('logo.png'); ?>" alt="Canvas Logo"></a>
            <a href="index.html" class="retina-logo" data-dark-logo="<?php Asset::images('logo-dark@2x.png') ?>"><img src="<?php Asset::images('logo@2x.png'); ?>" alt="Canvas Logo"></a>
        </div><!-- #logo end -->

        <ul class="header-extras">
            <li>
                <i class="i-medium i-circled i-bordered icon-thumbs-up2 nomargin"></i>
                <div class="he-text">
                    برندهای اصلی
                    <span>تضمین 100٪</span>
                </div>
            </li>
            <li>
                <i class="i-medium i-circled i-bordered icon-truck2 nomargin"></i>
                <div class="he-text">
                    ارسال رایگان
                    <span>برای بیشتر از 100 هزار تومان</span>
                </div>
            </li>
            <li>
                <i class="i-medium i-circled i-bordered icon-undo nomargin"></i>
                <div class="he-text">
                    30 روز ضمانت برگشت
                    <span>کاملا رایگان</span>
                </div>
            </li>
        </ul>

    </div>

    <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->

        <?php View::render('partial/main-nav') ?>

    </div>

</header><!-- #header end -->