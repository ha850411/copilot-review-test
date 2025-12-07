# Global Copilot Instructions for PHP/Laravel/PhpStorm

這些指令協助 Copilot 生成符合 Laravel 9/11/12 標準、善用 PHP 8.2/8.4 新特性的現代化程式碼，並依循軟體工程原則及業界最佳實踐，以提升軟體品質、可維護性與安全性。

## General
- 所有產生的程式碼，請使用 **繁體中文註解**，且保持語意清晰。
- 產生程式碼時，**不要使用簡體中文**，不要出現英文夾雜簡體的情形。
- 遇到專有名詞或 Laravel 內建用語，保留英文原文。

## 程式碼風格
- 所有 PHP 檔案開頭都必須加上 `declare(strict_types=1)`;。
- 所有 PHP 程式碼必須遵循 [PSR-12 標準](https://www.php-fig.org/psr/psr-12/) ，確保一致的排版與縮排格式。
- 禁止自創格式或與 PSR-12 相衝的撰寫習慣。
- 優先使用簡潔、具表達力且易讀的程式碼。
- 變數、函式、類別、檔案名稱必須具意義且具描述性。
- 複雜邏輯、類別、方法需加上合適的 PHPDoc。
- 程式應拆分為單一職責的小型、可重用的函式或類別。
- 避免魔術數字或硬編碼字串，改用常數或設定檔。

## PHP 8.2/8.4 實作建議
- 適當時善用 readonly 屬性，強化不可變性。
- 使用 Enum 取代字串或整數常數。
- 使用 第一類可調用語法（first-class callable syntax） 作為 callback。
- 善用 建構子屬性提升（Constructor Property Promotion）。
- 合理使用 Union Types、Intersection Types 與 true/false 回傳型別，強化型別嚴謹性。
- 需要時加入 Static Return Type。
- 適時使用 Nullsafe Operator (?->) 做安全鏈結。
- 非預期被繼承時請加上 final class。
- 多參數函式呼叫時請優先用 Named Arguments，提升可讀性。

## Laravel 專案結構與慣例
- 遵循官方 Laravel 專案目錄結構：
  - app/Http/Controllers - 控制器
  - app/Models - Eloquent 模型
  - app/Http/Requests - 表單請求驗證
  - app/Http/Resources - API 資源響應
  - app/Enums - Enum
  - app/Service - 業務邏輯
  - app/Repositories - 資料庫存取邏輯
  - app/Dtos - DTO（資料傳輸物件）

## Laravel 實作建議
- 優先依照 Laravel 官方最佳實踐產生程式碼。
- 遇到 Model、Controller、Request、Migration、Seeder、Factory，請遵循 Laravel 命名與結構。
- 撰寫 Eloquent 查詢時，請使用 Query Builder 語法，避免直接撰寫 SQL，除非明確需求。
- 註解務必清楚說明每段程式碼的目的，尤其是複雜邏輯。
- Trait、Service、Repository、Resource 請區分清楚職責與用途，避免過度耦合。

## 軟體品質與可維護性
- 遵守 SOLID 原則（單一職責、開放封閉、里氏替換、介面分離、依賴反轉）。
- 避免重複（DRY）、保持簡單（KISS）。
- 避免過度設計（YAGNI）。
- 複雜邏輯應以 PHPDoc 與註解說明。

## 未來相容性與升級預防

- 撰寫程式碼與測試時，請**優先使用官方公開 API**，**避免呼叫 protected 或 private method/property**。
- **禁止使用已標註為 @deprecated 或 @internal 的 class/method。**
- 撰寫 PHPUnit 測試時，避免使用官方文件已標註 deprecated 或即將淘汰的方法（如 `assertRegExp`、`assertAttributeEquals` 等）。
- 程式碼必須加上型別宣告（type hint），避免動態型別帶來的升級相容性問題。
- 避免用 Reflection、eval、或魔術方法（`__call`, `__get`, `__set`）做關鍵流程。
- 遇到 Laravel、PHP、PHPUnit 相關函式時，請確認用法與官方文件一致，勿用已被淘汰的寫法。
- 若有相依 package，請參考其文件的支援版本區間，避免使用專屬於非 LTS 版本的 API。

## 其他
- 給出程式碼時，請完整標示命名空間（namespace）與 use 區塊。
- 不要省略必要的 class 或 function 定義。
- 如有多檔案內容，請標明每個檔案的檔名。

# Copilot Review Instructions / PR檢查指令

Please perform code reviews according to the following guidelines:
請依照下列規則進行程式碼審查：

- Ensure the code follows [our coding style guide].
  確認程式符合專案的程式風格規則。
- Check for potential bugs, security risks, and performance issues.
  檢查潛在的bug、資安風險，與效能問題。
- Suggest improvements or refactoring when needed.
  若有需要，建議可改善或重構之處。
- Make sure code comments are sufficient and meaningful.
  確保註解足夠且有意義。
- All functions and variables should be named descriptively.
  所有函式跟變數命名需具意義、易懂。
- Review all test code, and verify new features are covered by tests.
  審查測試程式碼，並確認有為新功能補上測試。
- Translate PR suggestions into Chinese.
  將PR建議翻譯成中文。

If any of the above is not met, provide concise and clear feedback, listing specific code lines or problems.
若未符上述要求，請提供簡單明確的回饋，並列出相關程式行數或問題。