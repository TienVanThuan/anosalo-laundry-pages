<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anosalo Laundry</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen and (min-width: 641px), print" />
    <link rel="stylesheet" type="text/css" href="./css/style-sp.css" media="only screen and (max-width: 640px), only and (max-device-width: 735px) and (orientation : landscape)" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" 
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=ja"></script>

    <script src="./js/function.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    <div id="container">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1>
                        <a href="/"><img src="./img/logo.png" alt="logo"></a>
                    </h1>
                </div>
                <div class="sp-only">
                    <div class="sp-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#service">サービスメニュー<br class="pc-only"><span>Service menu</span></a>
                        </li>
                        <li>
                            <a href="#merit">洗濯代行のメリット<br class="pc-only"><span>Merit</span></a>
                        </li>
                        <li>
                            <a href="#contact">お問い合わせ<br class="pc-only"><span>Contact</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="background-top">
        <div class="container">
            <div class="sale">
                <div class="sale_content">
                    <p class="txt">タオル1枚なら</p>
                    <p class="number">10<span>円より!</span></p>
                </div>
            </div>
            <h1>洗濯代行サービス</h1>
            <h2>最高のおもてなしやサービスを</h2>
            <p class="sub-title">私たちは、現場の方々が提供する最高のおもてなしやサービスを洗濯代行サービスを通して「時間・コスト・人手不足」をサポートしたい<br class="pc-only"> そんな思いで「あのサロ ランドリー」は誕生しました！</p>
        </div>
    </section>
    <section class="top-service" id="service">
        <div class="container">
            <h2>いつも清潔なタオルを<br class= "sp-only">お客様に</h2>
            <p class="top-service_txt">大切なお客様をおもてなしするためのタオルは、いつも清潔で気持ちのよいものでなければなりません。<br class="pc-only">しかし、お忙しい業務の中でタオル一枚一枚のクオリティーにまで配慮するとなると、店舗様やサロン様に大きな負担がかかってしまいます。
            </p>
            <p class="top-service_txt">「あのサロランドリー」では、洗濯代行サービスを通して、洗濯機代、洗濯機スペース営業時間外の洗濯といった様々な問題を解決し、<br class="pc-only"> スタッフの皆様がより接客サービスに専念できるよう、きめ細やかにサービス致します。
            </p>
        </div>
    </section>
    <section class="top-point">
        <div class="top-point-row">
            <div class="point_img">
                <img src="./img/point1.jpg" alt="point1">
            </div>
            <div class="point_content point-txt-right">
                <h3>Point. <span>1</span></h3>
                <h4>汚れやオイルを徹底的に落とす！</h4>
                <p>リネン用洗剤と昇温85°C・15分洗浄の感染対策対応（電気ヒーター、　蒸気ヒーター仕様）搭載した洗濯機を使用することで、ウィル<br class="pc-only">スや汚れやオイルなど徹底的に落とします。</p>
            </div>
        </div>
        <div class="top-point-row">
            <div class="point_content point-txt-left">
                <h3>Point. <span>2</span></h3>
                <h4>生乾きの嫌な臭いなし！</h4>
                <p>専用機器で汚れやオイルなど徹底的に落とし、リネン用洗剤と82°Cの高温乾燥でウィルスにも安心です。</p>
            </div>
            <div class="point_img">
                <img src="./img/point2.jpg" alt="point2">
            </div>
        </div>
        <div class="top-merit" id="merit">
            <div class="container">
                <h2>洗濯代行のメリット</h2>
                <p class="txt">エステ、ネイルサロンなどは特にビル中での営業の為、自社洗濯や干し場の確保をできないところも多いですし、<br class="pc-only"> 自社で洗う場合もタオルのにおいやゴワゴワ感など、気になる点も多いかと思われます。
                    <br class="pc-only"> アウトソーシングによる経費のコスト軽減は、このサービスをお使い時も自社で洗濯機を回しているのと比べても変わりません。
                    <br class="pc-only"> 品質的には、プロ仕様、手たたみは見た目もよくお客様に大好評です
                </p>
                <div class="merit-row">
                    <div class="merit-row-col col-left">
                        <div class="merit-content">
                            <h3 class="sp-only">クリーニングのコストダウン</h3>
                            <div class="merit-content_spe spe-left">
                                <p>タオル1枚なら</p>
                                <p class="number">10<span>円より!</span></p>
                            </div>
                            <div class="merit-img">
                                <img src="./img/cleaning.png" alt="cleaning">
                            </div>
                            <h3 class="pc-only">クリーニングのコストダウン</h3>
                            <p class="merit-content_content">人件費・水道代・洗剤代・電気代・<br> 洗濯機代・乾燥機代・その他を削減できます。</p>
                        </div>
                    </div>
                    <div class="merit-row-col col-center">
                        <div class="merit-content">
                            <h3 class="sp-only">スタッフの負荷軽減</h3>
                            <div class="merit-content_spe spe-center">
                                <p>スタッフの</p>
                                <p class="spe_txt">負荷<span>を軽減!</span></p>
                            </div>
                            <div class="merit-img">
                                <img src="./img/staff-min.png" alt="staff">
                            </div>
                            <h3 class="pc-only">スタッフの負荷軽減</h3>
                            <p class="merit-content_content">人手不足を解消し、スタッフの負担を<br class="pc-only"> 軽減することができます。</p>
                        </div>
                    </div>
                    <div class="merit-row-col col-right">
                        <div class="merit-content">
                            <h3 class="sp-only">サービス品質の向上</h3>
                            <div class="merit-content_spe spe-right">
                                <p>お客様</p>
                                <p class="spe_txt">満足度<span>アップ!</span></p>
                            </div>
                            <div class="merit-img">
                                <img src="./img/improved.png" alt="cleaning">
                            </div>
                            <h3 class="pc-only">サービス品質の向上</h3>
                            <p class="merit-content_content">時間内外に洗濯をしなくて済み、空いた時間を技術向上やお客様接客に回すことができます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-contact" id="contact">
        <div class="container">
            <h2>お問い合わせ</h2>
            <div class="top-contact_content">
                <div class="block1">
                    <table>
                        <tbody>
                            <tr class="tel">
                                <th>お電話でのお問い合わせ</th>
                                <td class="number"><span>080-3028-1103</span></td>
                                <td class="txt">受付時間／年末年始・夏季休業期間を除く平日9:00～17:00</td>
                            </tr>
                            <tr class="fax">
                                <th>ファックスでのお問い合わせ</th>
                                <td class="number"><span>025-378-4810</span></td>
                                <td class="txt">受付時間／24時間　※弊社翌営業日までに折り返しご連絡を差し上げます。</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block2">
                    <form method="post" action="" id="formSendMail">
                        <table>
                            <tbody>
                                <tr>
                                    <th>会社名</th>
                                    <td>
                                        <input name="company_name" type="text" id="company">
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご担当者名</th>
                                    <td>
                                        <input name="name" type="text" id="name">
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご住所</th>
                                    <td class="address">
                                        <input name="address" type="text" id="address">
                                    </td>
                                </tr>
                                <tr>
                                    <th>お電話番号</th>
                                    <td>
                                        <input name="phone" type="text" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td>
                                        <input name="email" type="text" id="email">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="t-message">お問い合わせ内容</th>
                                    <td><textarea name="message" cols="30" rows="10" id="message"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="privacy"><span><input type="checkbox" name="privacy" id="privacy"></span><label for="privacy">個人情報の取扱いに同意する</label></div>
                        <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeQtuAZAAAAAEkpq6Cb8IEwY3HZjfHlXV9zp3LE">
                        </div>
                        <div class="btn">
                            <input type="hidden" name="action" value="sendMail" />
                            <input class="submit" type="submit" value="お問い合わせを送信する" id="submit">
                        </div>
                        <p id="success"></p>
                        <p id="error-send"></p>
                    </form>
                </div>
            </div>
            <div class="top-contact_privacy">
                <h3>プライバシーポリシー</h3>
                <div class="privacy_detail">
                    <h4>個人情報の収集・利用・提供</h4>
                    <p>お客様から預託される個人情報の取り扱いは、各企業の指定の範囲内で行います。 当社が実施する個人情報の収集は、目的を明確に定め、適法かつ公正な手段によって行います。また、収集した個人情報の利用・提供については情報主体に同意を得た範囲内で行います。</p>
                    <h4>個人情報の管理</h4>
                    <p>個人情報は、目的に応じ必要な範囲内において正確かつ最新の状態で保管し、不正アクセス、紛失、漏洩、破壊、改ざん等のリスクに対し、合理的な防止・是正措置を講じます。</p>
                    <h4>法令およびその他の規範の遵守</h4>
                    <p>当社は、個人情報保護に関する法令およびその他の規範を遵守いたします。</p>
                    <h4>継続的改善</h4>
                    <p>当社は、今後も常に変化する社会情勢およびテクノロジーの動向を鑑み、個人情報保護方針を含む情報セキュリティ保護方針の継続的な見直しと改善を行います。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="t-footer">
        <div class="t-footer_menu">
            <div class="container">
                <div class="logo">
                    <h1>
                        <a href="/"><img src="./img/logo.png" alt="logo"></a>
                    </h1>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#service">サービスメニュー<br><span>Service menu</span></a>
                        </li>
                        <li>
                            <a href="#merit">洗濯代行のメリット<br><span>Merit</span></a>
                        </li>
                        <li>
                            <a href="#contact">お問い合わせ<br><span>Contact</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="t-footer_bottom">
            <div class="container">
                <div class="bottom_logo">
                    <img src="./img/she.s-logo.png" alt="she.s">
                    <div class="bottom_logo_txt">
                        <p class="pc-only">株式会社シー・エス<br>新潟県新潟市中央区西堀前通5番町764-4 4F　TEL.025-378-4744　FAX.025-378-4810</p>
                        <p class="sp-only">株式会社シー・エス<br>新潟県新潟市中央区西堀前通5番町764-4 4F<br>TEL.025-378-4744<br>FAX.025-378-4810</p>
                    </div>
                </div>
                <p class="copy-right">© 2020 SHE.S co.,ltd</p>
            </div>
            <div class="l-pagetop">
                <a href="#container" title="このページのトップへ"><img src="./img/page-top.png" width="50" height="50" alt="このページのトップへ" /></a>
            </div><!-- /.l-pagetop -->
        </div>
    </div>
    </div>
</body>
</html>
