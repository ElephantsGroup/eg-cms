<?php
use yii\helpers\Html;
use backend\assets_b\SbAdminAsset;
use backend\assets_b\SbAdminRTLAsset;

SbAdminAsset::register($this);
if(isset(Yii::$app->controller->direction) && Yii::$app->controller->direction == 'rtl')
{
    SbAdminRTLAsset::register($this);
}
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="description" content="<?= Yii::t('config', 'Description') ?>">
    <meta name="author" content="Jalal Jaberi, Arezou Zahedi Majd, Saleh Asadi">

    <link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/images/apple-touch-icon-180x180.png" />

    <title><?= Html::encode($this->title) ?></title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/js/html5shiv.js"></script>
        <script src="<?= Yii::getAlias('@web') ?>/assets_b/sb-admin/js/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>

<body dir="<?= isset(Yii::$app->controller->direction) ? Yii::$app->controller->direction : 'rtl' ?>">
    <?php $this->beginBody() ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Yii::getAlias('@web') ?>?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><?= Yii::t('app', 'Management') ?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-<?= (isset(Yii::$app->controller->direction) && Yii::$app->controller->direction == 'ltr') ? 'right' : 'left' ?> top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <?php /*
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                    */ ?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <?php /*
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                    */ ?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= (Yii::$app->user->identity == null) ? "" : Yii::$app->user->identity->username ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= Yii::getAlias('@web') ?>/user/profile?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-user"></i> <?= Yii::t('app', 'Profile') ?></a>
                        </li>
                        <?php /*
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> <?= Yii::t('app', 'Inbox') ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> <?= Yii::t('app', 'Settings') ?></a>
                        </li>
                        */ ?>
                        <li class="divider"></li>
                        <li><?php // TODO: make log out post request ?>
                            <a onclick="logout()" ><i class="fa fa-fw fa-power-off"></i> <?= Yii::t('app', 'Log Out') ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?= Yii::getAlias('@web') ?>?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-dashboard"></i> <?= Yii::t('app', 'Main Page') ?> </a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#news-menu"> <?= Yii::t('app', 'News') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/news/category-admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Category') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/news/admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'List') ?> </a></li>
                        </ul>
                    </li> 
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#blog-menu"> <?= Yii::t('app', 'Blog') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="blog-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/blog/category-admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Category') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/blog/admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Articles') ?> </a></li>
                        </ul>
                    </li> 
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#events-menu"> <?= Yii::t('app', 'Events') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="events-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/event/category-admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Category') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/event/admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'List') ?> </a></li>
                        </ul>
                    </li> 
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#gallery-menu"> <?= Yii::t('app', 'Gallery') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="gallery-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/gallery/category?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Category') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/gallery/album?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Album') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/gallery/picture?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Picture') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/gallery/video?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Video') ?> </a></li>
                        </ul>
                    </li> 
                    <?php /*[OWL_SLIDER_CONFIG_BEGIN]<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#owl-slider-menu"> <?= Yii::t('app', 'Owl Slider') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="owl-slider-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/owl-slider/category-admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Category') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/owl-slider/admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Slides') ?> </a></li>
                        </ul>
                    </li>[OWL_SLIDER_CONFIG_END]*/ ?>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#stat-menu"> <?= Yii::t('app', 'Statistics') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="stat-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/stat/admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'List') ?> </a></li>
                        </ul>
                    </li> 
                    <?php /*[SERVICE_RELATION_CONFIG_BEGIN]<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#service-relation-menu"> <?= Yii::t('app', 'Relations') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="service-relation-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/service-relation/admin?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'List') ?> </a></li>
                        </ul>
                    </li>[SERVICE_RELATION_CONFIG_END]*/ ?>
                    <?php /*[SHOPPING_CONFIG_BEGIN]<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#shopping-menu"> <?= Yii::t('app', 'Shopping') ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="shopping-menu" class="collapse">
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/attribute?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Attributes') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/attribute-value?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Attribute Values') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/category?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Category') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/goods?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Goods') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/goods-attribute?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Goods Attributes') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/goods-attribute-value?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Goods Attribute Values') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/saleable-goods?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Saleable Goods') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/saleable-goods-detail?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Saleable Good Detail') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/customer?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Customers') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/supplier?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Suppliers') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/sale-header?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Sale Header') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/sale-detail?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Sale Detail') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/buy-header?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Buy Header') ?> </a></li>
                            <li><a href="<?= Yii::getAlias('@web') ?>/shopping/buy-detail?lang=<?= isset(Yii::$app->controller->language) ? Yii::$app->controller->language : 'fa-IR' ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?= Yii::t('app', 'Buy Detail') ?> </a></li>
                        </ul>
                    </li>[SHOPPING_CONFIG_END]*/ ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?= $content ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<script>

    var logout = function()
    {
        $.ajax({
            url: "<?= Yii::getAlias('@web') ?>/../user/logout",
            method: "POST",
            data: {
                <?= Yii::$app->request->csrfParam; ?>:"<?= Yii::$app->request->csrfToken; ?>"
            }
        })
        .done(function (response)
        {
            alert(1);
            alert(response);
        })
        .fail(function( req, status, err )
        {
            console.log(req);
            console.log( 'something went wrong', status, err );
        })
    }
</script>
