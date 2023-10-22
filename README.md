![DESIGN TOMATO](ScreenShot.jpg)

# デザイントマトの WordPress テーマ

## テーマ概要

＞ [DESIGN TOMATO](https://design-tomato.com/)

この WordPress テーマは自身が運営している Web 制作会社『DESIGN TOMATO』の専用テーマです。

Web からの制作依頼を受け付ける窓口としてこのサイトを制作しました。

内部 SEO やパフォーマンス UP 以外にも、デザインにこだわって制作しています。

ポップで楽しくなるような華やかなデザインにしました。

&nbsp;

---

&nbsp;

## 使用技術

### ワイヤーフレーム

-   [AdobeXD](https://xd.adobe.com/view/ff9e7e2f-618b-4443-a811-a20877c96375-aacd/) (サイトマップ/ワイヤーフレーム)

### 開発環境

-   MAMP v5.7
-   Node.js v18.12.1

### 使用言語

-   HTML
-   SCSS / CSS
-   TypeScript / JavaScript
-   PHP

### その他

-   CSS フレームワーク > TailWindCSS
-   CSS 設計 > FLOCSS
-   CSS プロパティ記述順 > [mozilla.org Base Styles](https://qiita.com/akuden/items/e9c91a7a2b0596d53fd1) (視覚順)
-   Webpack
-   Git / GitHub
-   Gitmoji

&nbsp;

---

&nbsp;

### 開発方法

MAMP を使用してローカルに仮想サーバーを構築し、Node 環境で開発。

TypeScript のコンパイルは"Webpack","ts-loader"を使用。

開発用ファイルは"src"フォルダに格納、本番用ファイルは"dist"フォルダに格納。

&nbsp;

開発用フォルダ内の SCSS から自動生成される CSS を"copy-webpack-plugin"を使用し、

ビルド時に自動的に本番用フォルダ内にコピーされるようにしています。

これにより必要のない SCSS ファイルを本番用に含めないようにしています。

&nbsp;

本番環境へのアップロードは"dist"フォルダを圧縮するだけで

そのままアップロードする事ができるので、快適に制作をしつつ、必要最低限のファイルのみでテーマを制作できるようにしています。

---

# Wordpress Theme by DesignTomato

## Theme Overview

＞ [DESIGN TOMATO](https://design-tomato.com/)

This WordPress theme is exclusively for the web design company "DESIGN TOMATO" that I operate.

I created this site to serve as a point of contact for receiving web design requests.

Besides improving internal SEO and performance, it's crafted with a keen focus on design.

I aimed for a bright and fun design that feels pop and lively.

&nbsp;

---

&nbsp;

## Technologies Used

### Wireframe

-   [AdobeXD](https://xd.adobe.com/view/ff9e7e2f-618b-4443-a811-a20877c96375-aacd/) (Sitemap/Wireframe)

### Development Environment

-   MAMP v5.7
-   Node.js v18.12.1

### Languages Used

-   HTML
-   SCSS / CSS
-   TypeScript / JavaScript
-   PHP

### Miscellaneous

-   CSS Framework > TailWindCSS
-   CSS Architecture > FLOCSS
-   CSS Property Order > [mozilla.org Base Styles](https://qiita.com/akuden/items/e9c91a7a2b0596d53fd1) (Visual order)
-   Webpack
-   Git / GitHub
-   Gitmoji

&nbsp;

---

&nbsp;

### Development Approach

I used MAMP to set up a virtual server locally and developed in a Node environment.

For TypeScript compilation, I utilized "Webpack" and "ts-loader."

Development files are stored in the "src" folder, and production files are kept in the "dist" folder.

&nbsp;

Using "copy-webpack-plugin," CSS automatically generated from SCSS within the development folder

is copied automatically to the production folder during the build process.

This ensures that unnecessary SCSS files are not included in the production version.

&nbsp;

For uploading to the production environment, simply compressing the "dist" folder

allows for direct uploading, enabling a smooth development process while crafting the theme with only essential files.
