# 📌 Konfiguracja Początkowa Panelu Administracyjnego WordPress

## 🔹 **Moduł Ustawienia**

- **Czytanie** – ustaw statyczną stronę dla strony głównej i dla wpisów blogowych (jeżeli takowe mają istnieć).
- **Bezpośrednie odnośniki** – ustaw nazwę wpisu (opcjonalne, w formie przypomnienia).

## 🔹 **Moduł Wtyczki**

- Może się przydać **Advanced Custom Fields (ACF)** (najlepiej w wersji PRO, aby móc korzystać z zapętleń/opcji strony itd.).

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

- **theme-main.php** – funkcje pomocnicze, nowe modyfikacje
- **theme-config.php** – ustawienia dot. motywu/kokpitu
- **enqueue.php** – konfiguracja importowanych zasobów.
- **cpt.php** – dodawanie własnych typów postów i taksonomii (przykładowe dodane).
- **hooks.php** – konfiguracja hooków.
- **widgets.php** – konfiguracja dodatkowych widgetów (przykładowe dodane).
- **template-tags.php** – funkcje utility renderowania danych itd.
- **woocommerce.php** – ustawienia woocommerce

## 🔹 **Zarządzanie Stylami i JavaScript**

### Wygoda pracy nad stylami i skryptami:

1. Uruchom `npm run start`.
2. Zmiany w plikach **.js** i **.scss** będą automatycznie renderowane w `/build`.


## Struktura Plików Stylów

Projekt używa rozbudowanej struktury plików SCSS dla lepszego zarządzania i modularności stylów. Każdy plik i folder ma swoje specyficzne przeznaczenie:

#### Katalog główny `/styles`
- **main.scss**: Główny plik SCSS, który importuje wszystkie inne pliki stylów. Jest to punkt wejścia dla kompilacji finalnych stylów CSS.
- **index.scss**: Plik startowy, który zazwyczaj zawiera globalne style i importy do innych plików, takich jak normalize oraz specyficzne dla projektu style.
- **normalize.scss**: Plik z resetem CSS, który zapewnia spójność wyglądu elementów HTML w różnych przeglądarkach.
- **nav.scss**: Zawiera style specyficzne dla nawigacji strony, takie jak menu czy breadcrumb.

#### Katalog `/shared`
Zawiera pliki SCSS, które definiują globalne zmienne i mixiny, używane w wielu komponentach i modułach:
- **variables.scss**: Definiuje zmienne SCSS, takie jak kolory, rozmiary czcionek, breakpointy itp.
- **mixins.scss**: Zawiera mixiny SCSS, które oferują reusable funkcjonalności, takie jak media queries, flexbox helpers, itp.

#### Katalog `/utility`
Zawiera pomocnicze klasy CSS, które mają na celu zapewnienie szybkich i efektywnych rozwiązań dla często używanych stylów:
- **grid.scss**: Definiuje klasę systemu siatkowego, który jest używany do tworzenia responsywnych układów.
- **spacing.scss**: Zawiera klasy do zarządzania odstępami (margin i padding).
- **typography.scss**: Zawiera klasy związane z typografią, takie jak wielkości czcionek, grubość czcionek, styl tekstu itp.
- **utility.scss**: Obejmuje różne klasy pomocnicze, które mogą być używane w różnych kontekstach w całym projekcie.

Ta struktura plików jest zaprojektowana tak, aby zwiększyć efektywność i umożliwić łatwe zarządzanie stylami w dużym projekcie. Pliki są logicznie uporządkowane, aby wspierać rozwój modułowy i ułatwić współpracę między członkami zespołu.




Szczegółowe opisy w poszczególnych plikach style/utility

## 🔹 **Zarządzanie Ikonami SVG**

- Dodany **`sprite.svg`** (wygenerowany na podstawie ok. 300 ikon z [Feather Icons](https://feathericons.com/)).
- Proste użycie w template:

```html
<svg class="icon icon-instagram">
  <use xlink:href="#icon-instagram"></use>
</svg>
```

lub w css:

```css
.icon {
  display: inline-block;
  width: 24px;
  height: 24px;
}

.instagram::before {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  background: url("#{$assets}img/sprite.svg#icon-instagram") no-repeat center;
  background-size: contain;
}
```

Więcej o ikonach + lista: [Icons.md](ICONS.md)

## 🔹 **Pomocne Linki**

- [Inspiracja](https://wordpress.org/themes/understrap/)
