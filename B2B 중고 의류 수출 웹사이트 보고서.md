# B2B 중고 의류 수출 기업 영문 웹사이트 데모

## 1. 프로젝트 개요

| 항목 | 내용 |
|------|------|
| **프로젝트명** | B2B 중고 의류 수출 기업 영문 웹사이트 |
| **프로젝트 유형** | B2B 기업 홍보 웹사이트 (정적 데모) |
| **도메인** | 중고 의류 수출 무역업 |
| **대상 사용자** | 해외 B2B 바이어 (아프리카, 남미, 동남아) |
| **핵심 목적** | 한국산 고품질 중고 의류를 수거·분류·압축하여 수출하는 B2B 전문 무역 기업의 글로벌 세일즈 목적 영문 웹사이트 |

### 배경 및 목적

중고 의류 수출 기업이 해외 B2B 바이어에게 기업의 신뢰성을 제고하고, 고단가 컨테이너 구매 문의를 안정적으로 확보하기 위해 공식 영문 웹사이트 구축을 추진합니다. 주요 타겟은 아프리카, 남미, 동남아 지역의 중고 의류 수입 바이어입니다.

이 데모는 다음을 증명합니다:
- B2B 수출 기업 도메인에 대한 이해도
- Eurotex(eurotexglobal.com) 레퍼런스 기반의 시각적 완성도
- 문의 폼이 실제 동작하는 기술력
- 수주 후 WordPress 전환이 용이한 시맨틱 HTML 구조

---

## 2. 주요 기능

### 2-1. 메인 페이지 (Home)

- **히어로 슬라이더**: 3개 슬라이드, 풀폭 배경 이미지 + 오버레이 텍스트 + CTA 버튼. 5초 자동 재생, 화살표/dot 네비게이션, hover/focus 시 자동 정지
- **Why Choose Us**: 3개 카드 (Global Reach / Quality Control / Competitive Pricing). 아이콘 + 제목 + 설명으로 핵심 강점 전달
- **Statistics Bar**: 검정 배경, 4개 숫자 카운트업 애니메이션 (15+ Years / 500+ Tons / 200+ Employees / 150+ Products)
- **Products Overview**: 3개 제품 카테고리 카드 (Premium / Africa / Tropical). 이미지 + 설명 + 상세 링크
- **Testimonials**: 3개 가상 바이어 후기 (나이지리아, 칠레, 필리핀)
- **Global Reach**: 12개국 국가 플래그 그리드로 수출 시장 시각화
- **CTA Section**: "Request a Quote Today" 전환 유도 섹션

### 2-2. 회사 소개 (About Us)

- **Company Overview**: 2컬럼 레이아웃 (텍스트 + 이미지), 미션/비전/설립 연도/규모
- **Process Flow**: CSS 수평 타임라인, 5단계 프로세스 (Collection → Sorting → Quality Check → Compression → Export)
- **Facility Gallery**: 3×2 이미지 그리드, hover 확대 효과
- **Certifications**: 4개 인증 배지 카드 (ISO 9001, Eco-Certified, KITA Member, Fair Trade)

### 2-3. 제품 소개 (Products)

- **Category Grid**: 3개 카테고리 카드, 클릭 시 앵커 스크롤
- **Category Detail**: 각 카테고리별 상세 섹션
  - **Premium Export**: 유럽/일본/중동 시장, Grade A, 45kg 베일
  - **Africa Export**: 서아프리카/동아프리카 시장, Grade A/B, 55kg 베일
  - **Tropical Mix**: 남미/동남아 시장, 경량 의류 특화, 45kg 베일
- 각 카테고리: 타겟 시장, 품목, 품질 등급, 포장 방식, 최소 주문량(MOQ) 스펙 제공
- **FAQ Accordion**: 5개 Q&A (MOQ, 품질 관리, 결제 조건, 배송 기간, 시설 방문)

### 2-4. 문의 (Contact)

- **Contact Info Cards**: 3컬럼 (Phone / Email / Address)
- **Inquiry Form**: 6개 필드 (Name*, Email*, Company*, Country, Product Interest, Message*)
  - Client-side validation (필수 필드, 이메일 형식)
  - Formspree 연동 (실제 이메일 전송)
  - 데모 모드: Formspree 미설정 시 성공 메시지 자동 표시
  - 전송 중 버튼 비활성화, 성공/실패 피드백 UI

### 2-5. 공통 UI/UX

- **고정 헤더**: 스크롤 시 배경색 변경 (투명 → 검정)
- **반응형**: 데스크톱(1200px+) / 태블릿(769-1199px) / 모바일(768px-)
- **모바일 네비게이션**: 햄버거 버튼 → 슬라이드인 메뉴 + 오버레이
- **스크롤 애니메이션**: IntersectionObserver 기반 fade-in
- **접근성**: WCAG 준수 (focus-visible, ARIA labels, semantic HTML, `<main>` 랜드마크)
- **Footer**: 3컬럼 (회사 소개 / Quick Links / Contact + 소셜 아이콘)

---

## 3. 기술 스택

| 분류 | 기술 | 비고 |
|------|------|------|
| **마크업** | HTML5 | 시맨틱 태그 (`<main>`, `<section>`, `<nav>`, `<header>`, `<footer>`) |
| **스타일링** | CSS3 | Custom Properties, Flexbox, Grid, BEM 네이밍 |
| **스크립트** | Vanilla JavaScript | ES6+ (const/let, IntersectionObserver, fetch, FormData) |
| **폰트** | Google Fonts | Open Sans, Roboto (CDN) |
| **이미지** | Unsplash | 스톡 사진 (CDN 핫링크) |
| **문의 폼** | Formspree | 무료 플랜, REST API POST |
| **배포** | GitHub Pages | 정적 호스팅 |

---

## 4. 디자인 시스템

### 참고 사이트: Eurotex (eurotexglobal.com)

검정+빨강 산업적 톤의 B2B 중고 의류 수출 기업 웹사이트를 레퍼런스로 삼아, 동일한 신뢰감과 전문성을 전달하는 디자인을 구현했습니다.

### 컬러 팔레트

| 역할 | 색상 | 용도 |
|------|------|------|
| Primary Red | `#bc1e1e` | CTA 버튼, 액센트, 프로세스 아이콘 |
| Dark | `#1a1a1a` | 헤더, 푸터, 다크 섹션 배경 |
| Text | `#333333` | 본문 텍스트 |
| Light Gray | `#f5f5f5` | 교대 섹션 배경 |
| White | `#ffffff` | 카드 배경, 밝은 섹션 |

### CSS 방법론: BEM

```css
.hero { }
.hero__slide { }
.hero__slide--active { }
```

컴포넌트 단위로 스타일을 캡슐화하고, 반응형 미디어쿼리를 각 컴포넌트 바로 아래에 co-locate하여 유지보수성을 확보했습니다.

---

## 5. 프로젝트 구조

```
10.wishket/
├── index.html              # Home — 히어로, 강점, 통계, 제품, 후기, 글로벌, CTA
├── about.html              # About — 회사 소개, 프로세스, 갤러리, 인증
├── products.html           # Products — 3개 카테고리 상세 + FAQ
├── contact.html            # Contact — 연락처 + 문의 폼
├── css/
│   └── style.css           # 전체 스타일 (~750줄, BEM, 반응형 co-located)
├── js/
│   ├── main.js             # 네비게이션, 스크롤, 카운터, FAQ 아코디언
│   ├── slider.js           # 히어로 슬라이더 (자동재생 + pause on hover)
│   └── contact.js          # 폼 검증 + Formspree 전송 + 데모 모드
├── 프로젝트메모.md           # 위시켓 프로젝트 정보
└── 프로젝트_보고서.md        # 이 파일
```

---

## 6. 핵심 구현 포인트

### 6-1. Vanilla JS 히어로 슬라이더

외부 라이브러리(Swiper.js 등) 없이 ~50줄의 순수 JavaScript로 구현. 자동 재생(5초), 수동 화살표/dot 네비게이션, hover/focus 시 자동 정지 기능을 포함. CSS `opacity` 트랜지션으로 부드러운 슬라이드 전환.

### 6-2. BEM CSS + Co-located 반응형

`style.css`와 `responsive.css`를 분리하지 않고, 각 컴포넌트 스타일 바로 아래에 미디어쿼리를 배치. 컴포넌트 수정 시 관련 반응형 코드를 즉시 찾을 수 있어 유지보수가 용이.

### 6-3. Formspree 데모 모드

`contact.js`에서 Formspree URL에 플레이스홀더(`YOUR_FORM_ID`)가 있으면 자동으로 데모 모드 진입. 폼 검증은 정상 수행하되, 전송 시 성공 메시지를 바로 표시. 실제 배포 시 form_id만 교체하면 즉시 동작.

### 6-4. WCAG 접근성 준수

- 햄버거 메뉴: `<button>` + `aria-label` + `aria-expanded` 토글
- `<nav aria-label="Main navigation">`
- `<main>` 랜드마크로 본문 영역 명시
- `:focus-visible` 글로벌 스타일로 키보드 네비게이션 지원
- 모든 이미지에 의미 있는 `alt` 텍스트

### 6-5. WordPress 전환 대비 구조

시맨틱 HTML (`<header>`, `<main>`, `<section>`, `<footer>`)과 BEM CSS를 사용하여 수주 후 WordPress 테마로 자연스럽게 전환 가능:
- 각 HTML 페이지 → WP 페이지 템플릿
- Header/Footer → `header.php` / `footer.php`
- CSS Custom Properties → `theme.json`
- 제품 카테고리 → Custom Post Type

---

## 7. 작업 산출물

| 산출물 | 설명 |
|--------|------|
| 4페이지 영문 웹사이트 | Home, About, Products, Contact |
| 반응형 디자인 | 모바일/태블릿/데스크탑 대응 |
| 문의 폼 시스템 | Formspree 연동 + 데모 모드 |
| GitHub Pages 배포 | 라이브 데모 URL 제공 |
| 프로젝트 문서 | 메모 + 보고서 |

---

## 8. 확장 가능성

- **WordPress 전환**: 시맨틱 HTML + BEM CSS를 WP 테마로 이식. Custom Post Type으로 제품 관리
- **WhatsApp 연동**: 플로팅 버튼 + Click-to-Chat API로 바이어 실시간 소통
- **글로벌 인프라**: Cloudways/AWS 호스팅 + Cloudflare CDN으로 아프리카/남미 접속 속도 최적화
- **SEO 최적화**: Yoast SEO 플러그인, 구조화 데이터(Schema.org), 사이트맵/robots.txt
- **다국어 지원**: WPML 또는 Polylang으로 스페인어/포르투갈어/프랑스어 추가
- **관리자 기능**: 콘텐츠 CMS, 문의 내역 관리, 기본 통계 대시보드

---

## 9. 기술적 특징 요약

- **제로 의존성**: 외부 라이브러리 없이 순수 HTML/CSS/JS로 구현
- **BEM CSS**: 컴포넌트 기반 네이밍으로 일관성과 유지보수성 확보
- **접근성 우선**: WCAG 준수 (ARIA, focus-visible, semantic HTML)
- **오프라인 동작**: 로컬 파일로 열어도 레이아웃 정상 렌더링
- **데모 모드**: Formspree 미설정 시 자동 데모 모드 전환
- **반응형 디자인**: 3단계 breakpoint (1200px / 768px / 480px)
- **WP 전환 대비**: 시맨틱 HTML + BEM이 WordPress 테마 구조와 1:1 매핑

---

## 포트폴리오 요약 (한 줄)

> Eurotex 스타일의 B2B 중고 의류 수출 기업 영문 웹사이트 데모. Vanilla HTML/CSS(BEM)/JS로 4페이지 반응형 사이트를 구축하고, Formspree 문의 폼 연동과 WCAG 접근성을 갖춘 프로덕션 레디 데모. WordPress 전환 대비 시맨틱 구조 설계.

---

## 핵심 키워드

`HTML5` `CSS3` `BEM` `Vanilla JS` `반응형 웹` `B2B` `영문 웹사이트` `중고 의류 수출` `Formspree` `GitHub Pages` `WCAG 접근성` `WordPress 전환 대비`
