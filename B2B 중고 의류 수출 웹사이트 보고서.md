# B2B 중고 의류 수출 기업 영문 웹사이트 (WordPress)

## 1. 프로젝트 개요

| 항목 | 내용 |
|------|------|
| **프로젝트명** | B2B 중고 의류 수출 기업 영문 웹사이트 |
| **프로젝트 유형** | B2B 기업 홍보 웹사이트 (WordPress 커스텀 테마) |
| **도메인** | 중고 의류 수출 무역업 |
| **대상 사용자** | 해외 B2B 바이어 (아프리카, 남미, 동남아) |
| **핵심 목적** | 한국산 고품질 중고 의류를 수거·분류·압축하여 수출하는 B2B 전문 무역 기업의 글로벌 세일즈 목적 영문 웹사이트 |

### 배경 및 목적

중고 의류 수출 기업이 해외 B2B 바이어에게 기업의 신뢰성을 제고하고, 고단가 컨테이너 구매 문의를 안정적으로 확보하기 위해 공식 영문 웹사이트 구축을 추진합니다. 주요 타겟은 아프리카, 남미, 동남아 지역의 중고 의류 수입 바이어입니다.

이 프로젝트는 다음을 증명합니다:
- B2B 수출 기업 도메인에 대한 이해도
- Eurotex(eurotexglobal.com) 레퍼런스 기반의 시각적 완성도
- WordPress 커스텀 테마 개발 역량 (Custom Walker, 커스터마이저, CF7 연동)
- Docker 기반 재현 가능한 개발 환경 + MailHog 메일 테스트

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
- **Inquiry Form (Contact Form 7)**: 6개 필드 (Name*, Email*, Company*, Country, Product Interest, Message*)
  - CF7 `class:form__input` 속성으로 BEM 클래스 매핑
  - WP Mail + MailHog SMTP로 이메일 전송 테스트
  - CF7 기본 스타일 제거, 기존 `.form__*` CSS 재활용
- **WhatsApp 플로팅 버튼**: 우측 하단 고정, 클릭 시 WhatsApp 대화 열림 (커스터마이저 번호 연동)

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
| **CMS** | WordPress | 최신 버전, 커스텀 PHP 테마 |
| **마크업** | HTML5 + PHP | 시맨틱 태그, WP 템플릿 계층 |
| **스타일링** | CSS3 | Custom Properties, Flexbox, Grid, BEM 네이밍 |
| **스크립트** | Vanilla JavaScript | ES6+ (IntersectionObserver, wp_enqueue_script) |
| **폰트** | Google Fonts | Open Sans, Roboto (wp_enqueue_style) |
| **이미지** | Unsplash → 로컬 | 13개 이미지 테마 assets/images/에 저장 |
| **문의 폼** | Contact Form 7 | BEM 클래스 매핑, WP Mail 연동 |
| **WhatsApp** | Click-to-Chat | 플로팅 버튼, 커스터마이저 번호 연동 |
| **SEO** | Yoast SEO | 메타태그, 사이트맵 자동 생성 |
| **로컬 환경** | Docker Compose | WordPress + MySQL + MailHog |
| **배포** | GitHub + (수주 후 Cloudways) | 테마 코드 GitHub, 실배포는 수주 후 |

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
├── docker-compose.yml              # WP + MySQL + MailHog
├── .gitignore
├── koreatextile-theme/             # WordPress 커스텀 테마
│   ├── style.css                   # 테마 메타 + BEM CSS (~1370줄)
│   ├── functions.php               # Enqueue, Walker, 커스터마이저, WhatsApp, SMTP
│   ├── header.php                  # 공통 헤더 (topbar + nav + Walker)
│   ├── footer.php                  # 공통 푸터 + wp_footer()
│   ├── front-page.php              # Home
│   ├── page-about.php              # About Us
│   ├── page-products.php           # Products + FAQ
│   ├── page-contact.php            # Contact + CF7
│   ├── page.php                    # 기본 페이지 (the_content())
│   ├── 404.php                     # 404 에러
│   ├── inc/
│   │   └── class-nav-walker.php    # Custom Walker (BEM 클래스)
│   └── assets/
│       ├── js/main.js              # 네비게이션, 스크롤, 카운터, FAQ
│       ├── js/slider.js            # 히어로 슬라이더
│       └── images/                 # Unsplash 로컬 이미지 (13개)
├── index.html                      # 정적 HTML 원본 (참고용)
├── about.html / products.html / contact.html
├── css/ / js/                      # 정적 원본 (참고용)
└── B2B 중고 의류 수출 웹사이트.md   # 프로젝트 메모
```

---

## 6. 핵심 구현 포인트

### 6-1. Vanilla JS 히어로 슬라이더

외부 라이브러리(Swiper.js 등) 없이 ~50줄의 순수 JavaScript로 구현. 자동 재생(5초), 수동 화살표/dot 네비게이션, hover/focus 시 자동 정지 기능을 포함. CSS `opacity` 트랜지션으로 부드러운 슬라이드 전환.

### 6-2. BEM CSS + Co-located 반응형

`style.css`와 `responsive.css`를 분리하지 않고, 각 컴포넌트 스타일 바로 아래에 미디어쿼리를 배치. 컴포넌트 수정 시 관련 반응형 코드를 즉시 찾을 수 있어 유지보수가 용이.

### 6-3. Contact Form 7 BEM 클래스 매핑

CF7의 기본 마크업 대신, `class:form__input` 속성으로 기존 BEM 클래스를 적용. CF7 기본 CSS는 `wp_dequeue_style`로 제거하고, 기존 `.form__*` 스타일을 그대로 재활용. Docker MailHog로 이메일 전송까지 테스트 가능.

### 6-4. WordPress 커스터마이저 통합

전화번호, 이메일, 주소, WhatsApp 번호를 커스터마이저에서 관리. `get_theme_mod()`로 header/footer/WhatsApp 버튼에서 동적으로 가져옴. 클라이언트가 코드 수정 없이 WP 관리자에서 연락처 변경 가능.

### 6-4. WCAG 접근성 준수

- 햄버거 메뉴: `<button>` + `aria-label` + `aria-expanded` 토글
- `<nav aria-label="Main navigation">`
- `<main>` 랜드마크로 본문 영역 명시
- `:focus-visible` 글로벌 스타일로 키보드 네비게이션 지원
- 모든 이미지에 의미 있는 `alt` 텍스트

### 6-5. Docker Compose 개발 환경

WordPress + MySQL + MailHog를 `docker compose up -d` 한 방으로 구동. MailHog로 CF7 이메일 전송을 로컬에서 완벽 테스트. 테마 폴더를 볼륨 마운트하여 코드 수정 시 즉시 반영.

---

## 7. 작업 산출물

| 산출물 | 설명 |
|--------|------|
| WordPress 커스텀 테마 | KoreaTextile 테마 (PHP 템플릿 10개) |
| 4페이지 영문 웹사이트 | Home, About, Products, Contact |
| 반응형 디자인 | 모바일/태블릿/데스크탑 대응 |
| 문의 폼 시스템 | Contact Form 7 + WP Mail + MailHog |
| WhatsApp 연동 | Click-to-Chat 플로팅 버튼 |
| SEO | Yoast SEO + 사이트맵 |
| Docker 환경 | docker-compose.yml (WP + MySQL + MailHog) |
| 정적 HTML 데모 | GitHub Pages 라이브 데모 별도 제공 |
| 프로젝트 문서 | 메모 + 보고서 |

---

## 8. 확장 가능성 (수주 후)

- **Cloudways 배포**: 실서버 배포 + 도메인 연결 + SSL
- **Cloudflare CDN**: 아프리카/남미 접속 속도 최적화
- **ACF 동적 콘텐츠**: 하드코딩된 콘텐츠를 WP 관리자에서 편집 가능하게 전환
- **Custom Post Type**: 제품 카테고리를 CPT로 관리 (추가/수정/삭제)
- **다국어 지원**: WPML 또는 Polylang으로 스페인어/포르투갈어/프랑스어 추가
- **WhatsApp Business API**: 문의 폼 제출 시 담당자 WhatsApp 자동 알림
- **구조화 데이터**: Schema.org 마크업으로 검색 결과 노출 강화
- **블록 테마 마이그레이션**: 장기적으로 FSE 전환 검토

---

## 9. 기술적 특징 요약

- **WordPress 커스텀 테마**: PHP 템플릿 계층 + Custom Walker + 커스터마이저
- **BEM CSS**: 컴포넌트 기반 네이밍, 1370줄 단일 파일, 반응형 co-located
- **접근성 우선**: WCAG 준수 (ARIA, focus-visible, semantic HTML)
- **Docker 재현성**: `docker compose up` 한 방으로 WP+MySQL+MailHog 구동
- **CF7 BEM 매핑**: 기존 폼 CSS를 그대로 재활용하는 CF7 클래스 매핑
- **이미지 로컬화**: Unsplash CDN 의존 제거, 13개 이미지 테마 내 저장
- **반응형 디자인**: 3단계 breakpoint (1200px / 768px / 480px)
- **SEO 대응**: Yoast SEO + 사이트맵 + 메타태그 자동 생성

---

## 포트폴리오 요약 (한 줄)

> WordPress 커스텀 테마 기반 B2B 중고 의류 수출 기업 영문 웹사이트. Custom Walker(BEM), Contact Form 7, WhatsApp 플로팅 버튼, Yoast SEO, Docker Compose(WP+MySQL+MailHog) 환경 구성. 4페이지 반응형 + WCAG 접근성 + 커스터마이저 연락처 관리.

---

## 핵심 키워드

`WordPress` `PHP` `HTML5` `CSS3` `BEM` `Vanilla JS` `반응형 웹` `B2B` `영문 웹사이트` `중고 의류 수출` `Contact Form 7` `Yoast SEO` `WhatsApp` `Docker Compose` `Custom Walker` `커스터마이저` `WCAG 접근성`
