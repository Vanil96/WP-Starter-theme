# 📌 Konfiguracja Początkowa Panelu Administracyjnego WordPress

## 🔹 **Moduł Ustawienia**
- **Czytanie** – ustaw statyczną stronę dla strony głównej i dla wpisów blogowych (jeżeli takowe mają istnieć).
- **Bezpośrednie odnośniki** – ustaw nazwę wpisu (opcjonalne, w formie przypomnienia).

## 🔹 **Moduł Wtyczki**
- Zainstaluj **Advanced Custom Fields (ACF)** (najlepiej w wersji PRO, aby móc korzystać z zapętleń/opcji strony itd.).
- W pliku **theme-settings.php** są skonfigurowane przykładowe 2 moduły dla ustawień ogólnych i kontaktu/sociali.

## 🔹 **Nawigacja/Menu**
Wstępnie utworzone są **3 miejsca menu**:
- **Primary Menu** (główne menu nawigacyjne)
- **Social Menu** (menu dla ikon mediów społecznościowych)
- **Footer Menu** (menu w stopce strony)

> Napisany został prosty **`nav.scss`** dla responsywnego menu głównego, aby przyśpieszyć początkowe prace.

### 🔹 **Konfiguracja Social Menu**
1. Przejdź do **Ustawienia > Menu**.
2. W **Opcje ekranu** włącz **Klasy CSS**.
3. Utwórz Social Menu i przypisz URL'e.
4. Jako **klasę elementu** podaj nazwę social media, która w **`nav.scss`** ma przypisaną konkretną ikonę.

## 🔹 **Pliki Konfiguracyjne PHP w `/inc`**
- **cpt.php** – dodawanie własnych typów postów i taksonomii (przykładowe dodane).
- **enqueue.php** – konfiguracja importowanych plików.
- **hooks.php** – konfiguracja hooków.
- **setup.php** – konfiguracja podstawowych ustawień motywu.
- **widgets.php** – konfiguracja dodatkowych widgetów (przykładowe dodane).

## 🔹 **Zarządzanie Stylami i JavaScript**
Aby pracować nad stylami i skryptami:
1. Uruchom `npm run start`.
2. Zmiany w plikach **.js** i **.scss** będą automatycznie renderowane w `/build`.

## 🔹 **Zarządzanie Ikonami SVG**
- Dodany **`sprite.svg`** (wygenerowany na podstawie ok. 300 ikon z [Feather Icons](https://feathericons.com/)).
- Proste użycie w template:
```html
<svg class="icon icon-instagram">
  <use xlink:href="#icon-instagram"></use>
</svg>
```
📌 Pełna lista ikon SVG jest dostępna tutaj:  
➡️ [Podgląd ikon SVG](https://github.com/Vanil96/WP-Starter-theme/tree/main/assets/icons.html)

Pełna lista dostępnych ikon znajduje się w pliku [icons.md](icons.md).

## 🔹 **Pomocne Linki**
- [Understrap – WordPress Theme](https://wordpress.org/themes/understrap/)

