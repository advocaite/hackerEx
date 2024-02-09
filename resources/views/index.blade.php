<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ __('Hacker Experience') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="{{ __('Hacker Experience') }} - The Internet Under Attack is an online hacking simulation game. Play as a hacker seeking for fame and money. Join now for free.">
    <meta name="keywords"
        content="Hacker, hacker game, hacking simulation, online hacker game, browser game, pbbg, {{ __('Hacker Experience') }}, computer science game, programming game" />

    <meta property="og:locale" content="pt_BR">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:title" content="{{ __('Hacker Experience') }}" />
    <meta property="og:image" content="https://hackerexperience.com/images/ogbr.png" />
    <meta property="og:url" content="https://hackerexperience.com/" />
    <meta property="og:description"
        content="{{ __('Hacker Experience') }} é um browser-game de simulação de hacking, onde você assume o papel de um hacker buscando dinheiro e poder. Cadastre-se agora!" />

    <link href="<?php echo asset('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo asset('css/he_index.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/tipTip.css'); ?>">

</head>

<body>
    <div id="terminal"></div>
    <div class="intro-header">

        <div id="lang_selector">
            <dl id="sample" class="dropdown">


                <?php
                
                $current = 'en';
                
                ?>

                <dt><a href="#"><span><img class="flag" src="<?php echo asset('images/' . str_replace('_', '-', app()->getLocale()) . '.png'); ?>"
                                alt="{{ str_replace('_', '-', app()->getLocale()) }}" /></span></a></dt>
                <dd>
                    <ul>
                        <li><a href="https://en.hackerexperience.com/"><img class="flag" src="<?php echo asset('images/en.png'); ?>"
                                    alt="" />{{ __('English') }}</a></li>
                        <li><a href="https://br.hackerexperience.com/"><img class="flag" src="<?php echo asset('images/pt.png'); ?>"
                                    alt="" />{{ __('Português') }}</a></li>
                    </ul>
                </dd>
            </dl>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">



                    <div class="intro-message">
                        <h1>{{ __('Hacker Experience') }}</h1>
                        <h3 class="digital"><?php echo _('The Internet under attack'); ?><span class="a_bebida_que_pisca">_</span></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><a class="btn btn-default btn-lg btn-front goto-login"><i
                                        class="fa fa-power-off fa-fw"></i> <span
                                        class="network-name"><?php echo _('Login'); ?></span></a></li>
                            <li><a class="btn btn-default btn-lg btn-front goto-signup"><i class="fa fa-plus fa-fw"></i>
                                    <span class="network-name"><?php echo _('Register'); ?></span></a></li>
                            <li><a class="btn btn-default btn-lg btn-front goto-about"><i
                                        class="fa fa-info-circle fa-fw"></i> <span
                                        class="network-name"><?php echo _('About'); ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a" id="Login">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr id="mLogin" class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?php echo _('Welcome back!'); ?></h2>
                    <p class="lead">
                    <div id="fb-root"></div>
                    <ul class="list-inline login-social-buttons">

                    </ul><br /><br />
                    <div style="margin-left: 10px"><a href="reset"><?php echo _('I forgot my password.'); ?></a></div>
                    <div style="margin-left: 10px; margin-top: 5px"><a class="goto-signup link"><?php echo _('I don\'t have an account.'); ?></a>
                    </div>
                    </p>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">



                    <div id="container">
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <label for="email"><?php echo _('Email'); ?>:</label>
                            <input class="login-input" type="text" id="login-username" name="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <label for="password"><?php echo _('Password'); ?>:</label>
                            <input class="login-input" type="password" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div id="lower">
                                <input class="login-input" type="checkbox" id="remember" name="remember"
                                    CHECKED><label class="check" for="keepalive"><?php echo _('Keep me logged in'); ?></label>
                                <input id="login-submit" class="login-input btn btn-success" type="submit"
                                    value="<?php echo _('Login'); ?>">
                            </div>
                            <a href="{{ url('login/google') }}" class="btn btn-secondary btn-block">
                                <i class="fa fa-google" aria-hidden="true"></i> Login with Google
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section-b" id="About">
        <div class="container">
            <div class="row">
                <div id="mAbout" class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?php echo _('About Hacker Experience'); ?></h2>
                    <p class="lead">
                        <?php echo _('Hacker Experience is a browser-based hacking simulation game, where you play the role of a hacker seeking for money and power.'); ?>
                    </p>
                    <p class="lead">
                        <?php echo _('Play online against other users from all the globe on an exciting battle to see who can conquer the Internet.'); ?>
                    </p>
                    <p class="lead">
                        <?php echo _('Hack, install viruses, research better software, complete missions, steal money from bank accounts and much more.'); ?>
                    </p>
                    <p class="lead">
                        <?php echo sprintf(_('%sSign up now%s for free and join thousands of other players trying to be the most powerful hacker of the game.'), '<a class="goto-signup link">', '</a>'); ?>
                    </p>

                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <?php
                    $abouthack = 'Hack players, companies, banks and even the NSA! Use the best exploits, port scanners and brute-force crackers you find!';
                    $aboutvirus = 'Spam bots, warez, bitcoin miners or DDoS slaves. Create your own virus army.';
                    $aboutmoney = 'Collect money from your virus, or complete missions for it! Hacking bank accounts is also an option.';
                    $aboutbtc = 'Hack the system! Your bitcoin miners will do the hard hashing work for you. Buy or sell bitcoins at real price market. If you manage to get someone\'s key, you can trasfer all his BTC to you :)';
                    $aboutupgrade = 'Get yourself a better processor, memory, HD or increase your internet connection speed. Buy a shiny external HD to safely backup your files.';
                    $aboutresearch = 'You don\'t want to rely on a basic 1.0 firewall, right? Research better software. Awesome hackers have awesome tools!';
                    $aboutclan = 'Create or join a clan and develop your own team strategies. Engage in exciting clans wars and head to the bounty.';
                    $aboutddos = 'Show your power and DDoS your enemies! Severely damage their hardware and overload their network. But be careful, you don\'t want to get into the FBI Most Wanted list.';
                    $aboutmore = 'Really, much more. There is no space here, why don\'t you join to find out? ;)';
                    ?>
                    <ul class="nav ul-about">
                        <li class="about1 about btn btn-success" data-toggle="tooltip" title="<?php echo _($abouthack); ?>">
                            <i class="fa fa-terminal fa-fw"></i> <span><?php echo _('Hack players'); ?></span>
                        </li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutvirus); ?>"><i
                                class="fa fa-bug fa-fw"></i> <span><?php echo _('Install viruses'); ?></span></li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutmoney); ?>"><i
                                class="fa fa-dollar fa-fw"></i> <span><?php echo _('Earn money'); ?></span></li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutbtc); ?>"><i
                                class="fa fa-btc fa-fw"></i> <span><?php echo _('Mine bitcoins'); ?></span></li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutupgrade); ?>"><i
                                class="fa fa-desktop fa-fw"></i> <span><?php echo _('Upgrade hardware'); ?></span></li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutresearch); ?>"><i
                                class="fa fa-flask fa-fw"></i> <span><?php echo _('Research software'); ?></span></li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutclan); ?>"><i
                                class="fa fa-users fa-fw"></i> <span><?php echo _('Join a clan'); ?></span></li>
                        <li class="about btn btn-success" data-toggle="tooltip" title="<?php echo _($aboutddos); ?>"><i
                                class="fa fa-globe fa-fw"></i> <span><?php echo _('DDoS the world!'); ?></span></li><br />
                        <li class="about-more center" data-toggle="tooltip" data-placement="bottom"
                            title="<?php echo _($aboutmore); ?>"><span><?php echo _('... and <strong>much</strong> more!'); ?></span></li><br />

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section-a" id="SignUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?php echo sprintf(_('Sign up now. It\'s %sfree%s!'), '<font color="black">', '</font>'); ?></h2>
                    <p class="lead">
                    <div style=""><a class="goto-faq link"><?php echo _('I am scared.'); ?></a></div>
                    <div style="margin-top: 5px"><a class="goto-login link"><?php echo _('Login with facebook or twitter.'); ?></a></div>
                    <h5 class="play"><?php echo _('Play anywhere!'); ?></h5>
                    <div class="play-icons">
                        <i class="fa fa-windows fa-4x appico"></i>
                        <i class="fa fa-linux fa-4x appico"></i>
                        <i class="fa fa-apple fa-4x appico"></i>
                        <i class="fa fa-mobile fa-4x appico"></i>
                        <i class="fa fa-android fa-4x appico"></i>
                    </div>
                    </p>
                </div>
                <div id="mSignUp" class="col-lg-5 col-sm-pull-6  col-sm-6">



                    <form class="form-horizontal" id="signup-form" action="{{ route('register.post') }}"
                        method="POST">
                        <fieldset class="signup">
                            <br />
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="username"><?php echo _('Username'); ?></label>
                                <div class="col-md-8">
                                    <input id="signup-username" name="username" placeholder="<?php echo _('Your in-game name.'); ?>"
                                        class="form-control input-md" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="password"><?php echo _('Password'); ?></label>
                                <div class="col-md-8">
                                    <input id="password" name="password" placeholder="123456"
                                        class="form-control input-md" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">E-mail</label>
                                <div class="col-md-8">
                                    <input id="email" name="email" placeholder="<?php echo _('We don\'t spam.'); ?>"
                                        class="form-control input-md" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="checkboxes"></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label for="terms">
                                            <input name="terms" id="terms" value="1" type="checkbox">
                                            <?php echo sprintf(_('I accept the %sterms of service%s'), '<a target="__blank" href="TOS">', '</a>'); ?>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="signup"></label>
                                <div class="col-md-8">
                                    <input id="signup-submit" type="submit" value="<?php echo _('Sign up'); ?>"
                                        class="btn btn-success">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section-b" id="FAQ">
        <div class="container">
            <div class="row">
                <h2 id="freq" class="text-center" style="margin-top: -10px;"><?php echo _('Frequent questions'); ?></h2>
                <br />
                <div id="accordion">
                    <h3><?php echo _('Will anything happen to my computer?'); ?></h3>
                    <div>
                        <p><?php echo _('There is no need to worry! This is a simulation game that takes place at a virtual world.'); ?></p>
                        <p><?php echo _('By the way, no download is needed. You will play the whole time using your browser.'); ?></p>
                    </div>
                    <h3><?php echo _('Is this real-life hacking?'); ?></h3>
                    <div>
                        <p><?php echo _('No! The whole game is virtual, you will be hacking "made up" servers from others players. You also won\'t learn how to hack in real life. No technical knowledge is needed in order to play the game.'); ?></p>
                        <p><?php echo _('You don\'t actually kill anyone when playing Grand Theft Auto, right?'); ?></p>
                    </div>
                    <h3><?php echo _('Where do I download the game?'); ?></h3>
                    <div>
                        <p><?php echo _('You don\'t! The whole game can be played through your browser, whether you are using a PC with Linux, Windows, Mac, tablet or mobile phone.'); ?></p>
                    </div>
                    <h3><?php echo _('Is it really free?'); ?></h3>
                    <div>
                        <p><?php echo _('Oh yeah. You can play the whole game, <strong>with all features</strong>, for free.'); ?></p>
                        <p><?php echo _('The only reason we can offer Hacker Experience for free is because of the non-intrusive ads we show in the game.'); ?></p>
                        <p><?php echo _('The user can opt for a premium account to get rid of the ads and help us directly. This is not a "pay to win" game, though. Premium users have no tactical advantages over basic accounts.'); ?></p>
                    </div>
                    <h3><?php echo _('Shouldn\'t it be "cracker"?'); ?></h3>
                    <div>
                        <p><?php echo _('Here comes a <a href="http://www.paulgraham.com/gba.html">looong discussion</a>. Many believe the word <em>hacker</em> should designate the so-called white hat (talented programmer, or an ethical hacker). Others, assume it to mean criminals behind the screen.'); ?></p>
                        <p><?php echo _('<a href="http://duartes.org/gustavo/blog/post/first-recorded-usage-of-hacker/">History has shown us</a> that maybe it really was meant to define the bad guys, however we do believe that hacker means <a href="https://stallman.org/articles/on-hacking.html">way more</a> than that.'); ?></p>
                        <p><?php echo _('Regardless of definition, we want our users to enjoy the game, whether they call it Hacker or Cracker Experience. That\'s it, name whatever you want.'); ?></p>
                        <p><?php echo _('Meanwhile, we have a special <a href="https://forum.hackerexperience.com/">board designated to teach computer science and programming</a> for people. Instead of engaging into useless flame wars, feel free to join and share your knowledge to others. I\'d call <em>that</em> hacker :)'); ?></p>
                    </div>
                </div>
                <div class="faq-buttons-intro">
                    <h3 class="text-center" style="margin-bottom: 20px;"><?php echo _('So, what are you waiting?'); ?></h2>
                        <ul class="list-inline intro-social-buttons">
                            <li><a class="btn btn-default btn-lg btn-front goto-login btn-faq"><i
                                        class="fa fa-power-off fa-fw"></i> <span
                                        class="network-name"><?php echo _('Login'); ?></span></a></li>
                            <li><a class="btn btn-default btn-lg btn-front goto-signup btn-faq"><i
                                        class="fa fa-plus fa-fw"></i> <span
                                        class="network-name"><?php echo _('Register'); ?></span></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="footer">
        <div class="row">
            <div class="one column"></div>
            <div id="navigate" class="three columns">
                <h5 class="footer-title"><?php echo _('NAVIGATE'); ?></h5>
                <ul>
                    <li><a target="__blank" href="privacy" class="scroll"><?php echo _('PRIVACY'); ?></a></li>
                    <li><a href="http://status.hackerexperience.com/" class="scroll">STATUS</a></li>
                    <li><a href="http://forum.hackerexperience.com/" class="scroll"><?php echo _('FORUM'); ?></a></li>
                    <li><a href="http://wiki.hackerexperience.com/" class="scroll">WIKI</a></li>
                </ul>
            </div>
            <div id="legal-disclaimer" class="three columns">
                <h5 class="footer-title"><?php echo _('LEGAL DISCLAIMER'); ?></h5>
                <p style="margin-top: -10px;">
                    <?php echo _('Hacker Experience is <strong>NOT</strong> related to any real hacking activity.'); ?>
                    <?php echo _('All in-game content is purely fictional and do not represent real user identification. IP addresses are randomly generated.'); ?>
                </p>
            </div>
            <div id="contact" class="four columns text-right">
                <h5 class="footer-title"><?php echo _('CONTACT US'); ?></h5>
                <div class="mail-link">
                    <a href="http://www.neoartlabs.com"><i class="fa fa-home"></i>www.neoartlabs.com</a><br />
                    <a href="mailto:<?php echo _('contact@hackerexperience.com'); ?>"><i
                            class="fa fa-envelope-o"></i><?php echo _('contact@hackerexperience.com'); ?></a><br />
                </div>
                <div class="footer-social">
                    <a href="https://facebook.com/HackerExperience"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://twitter.com/HackerExp"><i class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/105485198485447624885" rel="publisher"><i
                            class="fa fa-google-plus"></i></a>
                    <a href="https://renatomassaro.com"><i class="fa fa-user"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="one column"></div>
            <div class="three columns">
                <h3 class="footer-title left footer-social"><i class="fa fa-linux"
                        style="color: #fff; font-size: 40px; opacity: 1; cursor: default;"
                        title="Proudly powered by Linux"></i></h3>
            </div>
            <div class="three columns">
                <span id="hand" class="footer-social left small"
                    style="margin-left: 35%;"><?php echo _('Handcrafted in Brazil'); ?></span>
            </div>
            <h3 id="neoart" class="footer-title right">2014 &copy; <a href="#"
                    style="color: #fff; margin-right: 10px;">NeoArt Labs</a></h3>

        </div>

    </section>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/he_index.js"></script>
</body>
<!--
    Hello! I've just got to let you know.
    www.neoartgames.com
-->

</html>
