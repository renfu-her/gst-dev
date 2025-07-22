# 格尚資訊 - 企業網站

這是一個基於 Laravel 框架開發的企業形象網站，專注於展示格尚資訊的專業服務。

## 專案概述

格尚資訊是專業的資訊服務公司，提供 ERP 導入、專案開發、軟體銷售、機房規劃建置、資訊委外服務、硬體銷售等服務。

## 功能特色

### 前台功能
- ✅ **首頁** - 企業形象展示與服務介紹
- ✅ **服務項目** - 六大核心服務展示
  - ERP 導入服務
  - 專案開發
  - 軟體銷售
  - 機房規劃建置
  - 資訊委外服務
  - 硬體銷售
- ✅ **文章選單** - 動態內容管理
- ✅ **隱私權政策** - 法律條款頁面
- ✅ **響應式設計** - 支援多種裝置瀏覽

### 後台管理
- ✅ **內容管理系統** - 文章、廣告、選單管理
- ✅ **會員管理** - 會員資料管理
- ✅ **訂單管理** - 訂單狀態追蹤
- ✅ **系統設定** - 網站基本設定

## 技術架構

### 後端技術
- **框架**: Laravel 10.x
- **資料庫**: MySQL
- **PHP 版本**: 8.1+

### 前端技術
- **CSS 框架**: Bootstrap 5
- **JavaScript**: jQuery, GSAP
- **圖示**: Font Awesome 6
- **模板引擎**: Blade

### 第三方整合
- **驗證碼**: 自建驗證碼系統
- **郵件服務**: Laravel Mail
- **圖片處理**: Laravel Image Intervention

## 專案結構

```
gst-dev/
├── app/
│   ├── Http/Controllers/
│   │   ├── Frontend/          # 前台控制器
│   │   │   ├── HomeController.php
│   │   │   ├── ServiceController.php
│   │   │   ├── PrivacyController.php
│   │   │   ├── PostMenuController.php
│   │   │   └── TestController.php
│   │   └── Admin/             # 後台控制器
│   ├── Models/                # 資料模型
│   └── Services/              # 服務層
├── resources/views/
│   ├── frontend/              # 前台視圖
│   │   ├── layouts/
│   │   ├── service/
│   │   ├── post-menus/
│   │   ├── home.blade.php
│   │   └── privacy.blade.php
│   └── admin/                 # 後台視圖
├── public/
│   └── frontend/              # 前台靜態資源
└── routes/
    └── web.php                # 路由定義
```

## 安裝與設定

### 環境需求
- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js (可選，用於前端資源編譯)

### 安裝步驟

1. **克隆專案**
```bash
git clone [repository-url]
cd gst-dev
```

2. **安裝依賴**
```bash
composer install
```

3. **環境設定**
```bash
cp .env.example .env
php artisan key:generate
```

4. **資料庫設定**
```bash
# 編輯 .env 檔案設定資料庫連線
php artisan migrate
php artisan db:seed
```

5. **啟動開發伺服器**
```bash
php artisan serve
```

## 路由說明

### 前台路由
- `/` - 首頁
- `/privacy` - 隱私權政策
- `/services/*` - 服務項目頁面
- `/post-menus/{slug}` - 文章選單頁面

### 後台路由
- `/admin/*` - 後台管理介面

## 重要說明

### 不包含的功能
⚠️ **本專案不包含以下功能：**
- 購物車系統
- 綠界金流整合
- 會員註冊/登入系統
- 商品管理系統
- 付款處理功能

### 測試功能
- `TestController` 包含綠界金流相關的測試程式碼，但僅供開發測試使用
- 實際部署時應移除或停用相關功能

## 開發團隊

- **開發者**: 格尚資訊開發團隊
- **技術支援**: 格尚資訊技術部門

## 授權

本專案為格尚資訊內部專案，版權所有。

## 聯絡資訊

- **公司**: 格尚資訊
- **網站**: https://www.gst.com
- **服務**: ERP導入、專案開發、軟體銷售、機房規劃建置、資訊委外服務、硬體銷售

---

*最後更新: 2024年*
