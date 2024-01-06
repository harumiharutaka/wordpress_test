'use strict';

//WP用 クラスを与える
import { wpAddClass } from './module/wp_add-class';
wpAddClass();

//WP用 仕様を補正する
import { wpCorrection } from './module/wp_correction';
wpCorrection();

//bodyのスクロール制御
import { bodyScroll } from './module/bodyScroll';
bodyScroll();

//ドロップダウン
import { dropdown } from './module/dropdown';
dropdown();

//ハンバーガー＆ドロワー
import { hamburgerAndDrawer } from './module/hamburger-and-drawer';
hamburgerAndDrawer();

//ページトップ
import { pagetop } from './module/pagetop';
pagetop();

//タブ
import { tab } from './module/tab';
tab();

//アコーディオン
import { accordion } from './module/accordion';
accordion();

//モーダル
import { modal } from './module/modal';
modal();

//ローディング
import { loading } from './module/loading';
loading();

//プラグイン
import { plugin } from './module/plugin';
plugin();
