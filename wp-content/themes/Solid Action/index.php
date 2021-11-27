<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solid Action</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/solid-action.css">
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="header-container">
            <!-- header__texts-->
            <div class="header-texts">
                <h1 class="header__logo"><a href="./index.html">
                        Solid Action
                    </a></h1>
                <p class="header__text">プログラミングを始めたとある男のブログ</p>
            </div>
            <!-- header-nav -->
            <nav class="header-nav">
                <ul class="header-nav__menu">
                    <li class="header-nav__menu-item"><a href="./index.html">Archives</a></li>
                    <li class="header-nav__menu-item"><a href="#">Category</a></li>
                    <li class="header-nav__menu-item"><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <div class="top-content">
                <div class="top-content__twitter-wrapper">
                    <!-- <a class="twitter-timeline" data-theme="dark"
                        href="https://twitter.com/eRgo27923546?ref_src=twsrc%5Etfw">Tweets by eRgo27923546</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                </div>
                <div class="top-content__scroll-wrapper">
                    <a href="#posts-content" class="top-content__scroll-btn"><span>scroll</span></a>
                </div>
                <div class="top-content__profile">
                    <div class="top-content__profile-herder">
                        <div class="top-content__profile-img">
                            <img src="./images/profile.jpeg" alt="profile-photo">
                        </div>
                        <p class="top-content__profile-name">Sousuke</p>
                    </div>
                    <div class="top-content__profile-texts">
                        <p class="top-content__profile-text">Webサイトを作りたくてプログラミングを始めた30代一般男性、なんやかんやしてこのサイトができました。</p>
                    </div>
                </div>
            </div>
        </section>
        <article>
            <div id="posts-content" class="posts-content">
                <section>
                    <div class="posts-content__new-post">
                        <div class="posts-content__header">
                            <h2>最近の記事</h2>
                        </div>
                        <div class="posts-content__text">
                            <h3>このサイトを作る時に困ったこと</h3>
                            <p>1.Webサイトってどうやって作るの？</p>
                            <p>2.使ったツール類</p>
                            <p>3.サイトのデザインについて</p>
                            <h3>cssを自動フォーマットしたい話</h3>
                            <p>1.VSCodeのプラグインを使う</p>
                            <p>2.csscombの設定</p>
                            <p>3.cssプロパティの並び順</p>

                        </div>
                    </div>
                </section>
                <aside>
                    <div class="archive-content">
                        <section>
                            <div class="archive-content__wrapper">

                                <div class="archive-content__header">
                                    <h3>Archives</h3>
                                </div>
                                <div class="archive-content__datelist">
                                    <ul>
                                        <li class="archive-content__item"><a href="./index.html">2021年11月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年10月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年9月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年8月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年7月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年6月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年5月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年4月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年3月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年2月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2021年1月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年12月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年11月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年10月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年9月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年8月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年7月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年6月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年5月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年4月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年3月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年2月(1)</a></li>
                                        <li class="archive-content__item"><a href="./index.html">2020年1月(1)</a></li>

                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </article>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <small>&copy;2021 sousuke</small>
        </div>
    </footer>
</body>

</html>