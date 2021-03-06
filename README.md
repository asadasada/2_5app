# オンラインメモ帳
![screenshot](https://user-images.githubusercontent.com/6861884/118459117-61b06800-b736-11eb-9f43-f9b5e2a783e2.png)


これはlaravel-sanctumを使用し登録機能を備えたオンラインメモ帳アプリです。
vue.jsを使用しているためスムーズにページ遷移ができ、保存したメモ帳は編集の度にデータベースに保存しているため
ちょっとしたメモやリンク等の保存をかんたんに行うことができどこからでもログインしてチェックができます。
またメモ帳はマークダウン記法にも対応しているため、文章の構成に変化をもたせることが可能です！
[ メモ帳へのリンク ](http://piyohiko.tk)
## 使い方

上部のバー右からregisterをクリックし、お好きな名前、メールアドレス、パスワードを設定してください（メールアドレスへの確認はしていないのでtest@test.comのような実在しないものでも大丈夫です！)
登録が完了したらloginをクリックし、メールアドレスとパスワードで自分のダッシュボードページにログインできます。
ダッシュボードにあるメモ帳ボタンを押すとメモ帳のページに移動いたします。
文章をメモ帳に貼り付け"編集”ボタンをクリックすると文章がデータベースに保存されます。
## マークダウン記法の使い方(一部)

![Screenshot from 2021-05-18 13-14-22](https://user-images.githubusercontent.com/6861884/118589278-084e4480-b7db-11eb-9841-f1a9c3ba13fc.png)

![Screenshot from 2021-05-18 13-22-04](https://user-images.githubusercontent.com/6861884/118589822-210b2a00-b7dc-11eb-869c-6fe987305f46.png)


"# text" `見出し1`

"## text" `見出し2`

"### text" `見出し3`

"\`(shift + @)" `text`

"-,+ *"  `リスト`

"数値+半角ドット" `番号付きリスト`

" >"  `引用`

">> " `二重引用`

"\`\`\`" `codeの記述`

###　使用技術

- digital_ocean_droplet(ubuntu)
-php7.4(laravel)
-nginx+php7.4-fpm
- lodash
- vue.js
- sqlite3
- axios
- laravel-sanctum
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
