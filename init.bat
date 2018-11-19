@echo off

rem -------------------------------------------------------------
rem  Yii command line init script for Windows.
rem
rem  @author Qiang Xue <qiang.xue@gmail.com>
rem  @link http://www.yiiframework.com/
rem  @copyright Copyright (c) 2008 Yii Software LLC
rem  @license http://www.yiiframework.com/license/
rem -------------------------------------------------------------

@setlocal

set YII_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%YII_PATH%init" %*

"%PHP_COMMAND%" "%YII_PATH%mig" migrate/up --migrationPath=@vendor/elephantsgroup/eg-user/migrations %*

"%PHP_COMMAND%" "%YII_PATH%mig" migrate/up --migrationPath=@yii/rbac/migrations %*

"%PHP_COMMAND%" "%YII_PATH%mig" migrate/up --migrationPath=@vendor/elephantsgroup/eg-admin/migrations %*

"%PHP_COMMAND%" "%YII_PATH%mig" migrate/up %*

set /p enable_stat="Do yout want to enable stat module? ('y' for yes, anything else for no) "
echo %enable_stat%

if /I "%enable_stat%"=="y" goto enable_stat
    goto skip_stat

:enable_stat
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-stat/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%stat-init" %*

:skip_stat
set /p enable_news="Do yout want to enable news module? ('y' for yes, anything else for no) "
    echo %enable_news%

if /I "%enable_news%"=="y" goto enable_news
goto skip_news

:enable_news
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-news/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%news-init" %*

:skip_news

set /p enable_event="Do yout want to enable event module? ('y' for yes, anything else for no) "
echo %enable_event%

if /I "%enable_event%"=="y" goto enable_event
    goto skip_event

:enable_event
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-event/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%event-init" %*

:skip_event

set /p enable_gallery="Do yout want to enable gallery module? ('y' for yes, anything else for no) "
echo %enable_gallery%

if /I "%enable_gallery%"=="y" goto enable_gallery
    goto skip_gallery

:enable_gallery
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-gallery/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%gallery-init" %*

:skip_gallery

set /p enable_blog="Do yout want to enable blog module? ('y' for yes, anything else for no) "
echo %enable_blog%

if /I "%enable_blog%"=="y" goto enable_blog
    goto skip_blog

:enable_blog
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-blog/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%blog-init" %*

:skip_blog

set /p enable_owl-slider="Do yout want to enable owl-slider module? ('y' for yes, anything else for no) "
echo %enable_owl-slider%

if /I "%enable_owl-slider%"=="y" goto enable_owl-slider
    goto skip_owl-slider

:enable_owl-slider
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-owl-slider/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%owl-slider-init" %*

:skip_owl-slider

set /p enable_service-relation="Do yout want to enable service-relation module? ('y' for yes, anything else for no) "
echo %enable_service-relation%

if /I "%enable_service-relation%"=="y" goto enable_service-relation
    goto skip_service-relation

:enable_service-relation
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-service-relation/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%service-relation-init" %*

:skip_service-relation

set /p enable_contact="Do yout want to enable contact module? ('y' for yes, anything else for no) "
    echo %enable_contact%

if /I "%enable_contact%"=="y" goto enable_contact
goto skip_contact

:enable_contact
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-contact/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%contact-init" %*

:skip_contact


set /p enable_comment="Do yout want to enable comment module? ('y' for yes, anything else for no) "
    echo %enable_comment%

if /I "%enable_comment%"=="y" goto enable_comment
goto skip_comment

:enable_comment
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-comment/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%comment-init" %*

:skip_comment


set /p enable_like="Do yout want to enable like module? ('y' for yes, anything else for no) "
    echo %enable_like%

if /I "%enable_like%"=="y" goto enable_like
goto skip_like

:enable_like
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-like/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%like-init" %*

:skip_like

set /p enable_follow="Do yout want to enable follow module? ('y' for yes, anything else for no) "
    echo %enable_follow%

if /I "%enable_follow%"=="y" goto enable_follow
goto skip_follow

:enable_follow
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-follow/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%follow-init" %*

:skip_follow


set /p enable_star-rating="Do yout want to enable star-rating module? ('y' for yes, anything else for no) "
    echo %enable_like%

if /I "%enable_star-rating%"=="y" goto enable_star-rating
goto skip_star-rating

:enable_star-rating
    "%PHP_COMMAND%" "%YII_PATH%mig" migrate/up  --migrationPath=@vendor/elephantsgroup/eg-star-rating/migrations %*
    "%PHP_COMMAND%" "%YII_PATH%star-rating-init" %*

:skip_star-rating

@endlocal
