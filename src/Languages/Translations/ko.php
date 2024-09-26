<?php

namespace Macmotp\Languages\Translations;

use Macmotp\Continent;
use Macmotp\Country;

/**
 * Korean
 */
class ko implements Translation
{
    /**
     * Get translation
     *
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        return match ($key) {
            Continent::AFRICA => '아프리카',
            Continent::ANTARCTICA => '남극',
            Continent::ARCTIC => '북극',
            Continent::ASIA => '아시아',
            Continent::EUROPE => '유럽',
            Continent::NORTH_AMERICA => '북아메리카',
            Continent::OCEANIA => '오세아니아',
            Continent::SOUTH_AMERICA => '남아메리카',

            Country::AFGHANISTAN => '아프가니스탄',
            Country::ALAND => '올란드',
            Country::ALBANIA => '알바니아',
            Country::ALGERIA => '알제리',
            Country::AMERICAN_SAMOA => '아메리칸 사모아',
            Country::ANDORRA => '안도라',
            Country::ANGOLA => '앙골라',
            Country::ANGUILLA => '앵귈라',
            Country::ANTARCTICA => '남극',
            Country::ANTIGUA_AND_BARBUDA => '앤티가 바부다',
            Country::ARGENTINA => '아르헨티나',
            Country::ARMENIA => '아르메니아',
            Country::ARUBA => '아루바',
            Country::AUSTRALIA => '호주',
            Country::AUSTRIA => '오스트리아',
            Country::AZERBAIJAN => '아제르바이잔',
            Country::BAHAMAS => '바하마',
            Country::BAHRAIN => '바레인',
            Country::BANGLADESH => '방글라데시',
            Country::BARBADOS => '바베이도스',
            Country::BELARUS => '벨라루스',
            Country::BELGIUM => '벨기에',
            Country::BELIZE => '벨리즈',
            Country::BENIN => '베냉',
            Country::BERMUDA => '버뮤다',
            Country::BHUTAN => '부탄',
            Country::BOLIVIA => '볼리비아',
            Country::BONAIRE => '보네르',
            Country::BOSNIA_AND_HERZEGOVINA => '보스니아 헤르체고비나',
            Country::BOTSWANA => '보츠와나',
            Country::BOUVET_ISLAND => '부베 섬',
            Country::BRAZIL => '브라질',
            Country::BRITISH_INDIAN_OCEAN_TERRITORY => '영국 인도양 해외 영토',
            Country::BRUNEI => '브루나이',
            Country::BULGARIA => '불가리아',
            Country::BURKINA_FASO => '부르키나파소',
            Country::BURUNDI => '부룬디',
            Country::CAMBODIA => '캄보디아',
            Country::CAMEROON => '카메룬',
            Country::CANADA => '캐나다',
            Country::CAPE_VERDE => '카보베르데',
            Country::CAYMAN_ISLANDS => '케이맨 제도',
            Country::CENTRAL_AFRICAN_REPUBLIC => '중앙 아프리카 공화국',
            Country::CHAD => '차드',
            Country::CHILE => '칠레',
            Country::CHINA => '중국',
            Country::CHRISTMAS_ISLAND => '크리스마스 섬',
            Country::COCOS_KEELING_ISLANDS => '코코스(킬링) 제도',
            Country::COLOMBIA => '콜롬비아',
            Country::COMOROS => '코모로',
            Country::COOK_ISLANDS => '쿡 제도',
            Country::COSTA_RICA => '코스타리카',
            Country::CROATIA => '크로아티아',
            Country::CUBA => '쿠바',
            Country::CURACAO => '큐라소',
            Country::CYPRUS => '키프로스',
            Country::CZECHIA => '체코',
            Country::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => '민주 공화국',
            Country::DENMARK => '덴마크',
            Country::DJIBOUTI => '지부티',
            Country::DOMINICA => '도미니카',
            Country::DOMINICAN_REPUBLIC => '도미니카 공화국',
            Country::ECUADOR => '에콰도르',
            Country::EGYPT => '이집트',
            Country::EL_SALVADOR => '엘살바도르',
            Country::EQUATORIAL_GUINEA => '적도 기니',
            Country::ERITREA => '에리트레아',
            Country::ESTONIA => '에스토니아',
            Country::ESWATINI => '에스와티니',
            Country::ETHIOPIA => '에티오피아',
            Country::FALKLAND_ISLANDS => '포클랜드 제도',
            Country::FAROE_ISLANDS => '페로 제도',
            Country::FIJI => '피지',
            Country::FINLAND => '핀란드',
            Country::FRANCE => '프랑스',
            Country::FRENCH_GUIANA => '프랑스 기아나',
            Country::FRENCH_POLYNESIA => '프랑스 폴리네시아',
            Country::FRENCH_SOUTHERN_TERRITORIES => '프랑스 남부 영토',
            Country::GABON => '가봉',
            Country::GAMBIA => '감비아',
            Country::GEORGIA => '조지아',
            Country::GERMANY => '독일',
            Country::GHANA => '가나',
            Country::GIBRALTAR => '지브롤터',
            Country::GREECE => '그리스',
            Country::GREENLAND => '그린란드',
            Country::GRENADA => '그레나다',
            Country::GUADELOUPE => '과들루프',
            Country::GUAM => '괌',
            Country::GUATEMALA => '과테말라',
            Country::GUERNSEY => '건지',
            Country::GUINEA => '기니',
            Country::GUINEA_BISSAU => '기니비사우',
            Country::GUYANA => '가이아나',
            Country::HAITI => '아이티',
            Country::HEARD_ISLAND_AND_MCDONALD_ISLANDS => '허드 섬과 맥도널드 제도',
            Country::HONDURAS => '온두라스',
            Country::HONG_KONG => '홍콩',
            Country::HUNGARY => '헝가리',
            Country::ICELAND => '아이슬란드',
            Country::INDIA => '인도',
            Country::INDONESIA => '인도네시아',
            Country::IRAN => '이란',
            Country::IRAQ => '이라크',
            Country::IRELAND => '아일랜드',
            Country::ISLE_OF_MAN => '맨 섬',
            Country::ISRAEL => '이스라엘',
            Country::ITALY => '이탈리아',
            Country::IVORY_COAST => '코트디부아르',
            Country::JAMAICA => '자메이카',
            Country::JAPAN => '일본',
            Country::JERSEY => '저지',
            Country::JORDAN => '요르단',
            Country::KAZAKHSTAN => '카자흐스탄',
            Country::KENYA => '케냐',
            Country::KIRIBATI => '키리바시',
            Country::KOSOVO => '코소보',
            Country::KUWAIT => '쿠웨이트',
            Country::KYRGYZSTAN => '키르기스스탄',
            Country::LAOS => '라오스',
            Country::LATVIA => '라트비아',
            Country::LEBANON => '레바논',
            Country::LESOTHO => '레소토',
            Country::LIBERIA => '라이베리아',
            Country::LIBYA => '리비아',
            Country::LIECHTENSTEIN => '리히텐슈타인',
            Country::LITHUANIA => '리투아니아',
            Country::LUXEMBOURG => '룩셈부르크',
            Country::MACAO => '마카오',
            Country::MADAGASCAR => '마다가스카르',
            Country::MALAWI => '말라위',
            Country::MALAYSIA => '말레이시아',
            Country::MALDIVES => '몰디브',
            Country::MALI => '말리',
            Country::MALTA => '몰타',
            Country::MARSHALL_ISLANDS => '마샬 제도',
            Country::MARTINIQUE => '마르티니크',
            Country::MAURITANIA => '모리타니',
            Country::MAURITIUS => '모리셔스',
            Country::MAYOTTE => '마요트',
            Country::MEXICO => '멕시코',
            Country::MICRONESIA => '미크로네시아',
            Country::MOLDOVA => '몰도바',
            Country::MONACO => '모나코',
            Country::MONGOLIA => '몽골',
            Country::MONTENEGRO => '몬테네그로',
            Country::MONTSERRAT => '몬트세랫',
            Country::MOROCCO => '모로코',
            Country::MOZAMBIQUE => '모잠비크',
            Country::MYANMAR => '미얀마',
            Country::NAMIBIA => '나미비아',
            Country::NAURU => '나우루',
            Country::NEPAL => '네팔',
            Country::NETHERLANDS => '네덜란드',
            Country::NEW_CALEDONIA => '뉴 칼레도니아',
            Country::NEW_ZEALAND => '뉴질랜드',
            Country::NICARAGUA => '니카라과',
            Country::NIGER => '니제르',
            Country::NIGERIA => '나이지리아',
            Country::NIUE => '니우에',
            Country::NORFOLK_ISLAND => '노퍽 섬',
            Country::NORTHERN_MARIANA_ISLANDS => '북마리아나 제도',
            Country::NORTH_KOREA => '북한',
            Country::NORTH_MACEDONIA => '북마케도니아',
            Country::NORWAY => '노르웨이',
            Country::OMAN => '오만',
            Country::PAKISTAN => '파키스탄',
            Country::PALAU => '팔라우',
            Country::PALESTINE => '팔레스타인',
            Country::PANAMA => '파나마',
            Country::PAPUA_NEW_GUINEA => '파푸아뉴기니',
            Country::PARAGUAY => '파라과이',
            Country::PERU => '페루',
            Country::PHILIPPINES => '필리핀',
            Country::PITCAIRN_ISLANDS => '핏케언 제도',
            Country::POLAND => '폴란드',
            Country::PORTUGAL => '포르투갈',
            Country::PUERTO_RICO => '푸에르토리코',
            Country::QATAR => '카타르',
            Country::REPUBLIC_OF_THE_CONGO => '콩고 공화국',
            Country::REUNION => '레위니옹',
            Country::ROMANIA => '루마니아',
            Country::RUSSIA => '러시아',
            Country::RWANDA => '르완다',
            Country::SAINT_BARTHELEMY => '생바르텔레미',
            Country::SAINT_HELENA => '세인트헬레나',
            Country::SAINT_KITTS_AND_NEVIS => '세인트키츠 네비스',
            Country::SAINT_LUCIA => '세인트루시아',
            Country::SAINT_MARTIN => '세인트마르탱',
            Country::SAINT_PIERRE_AND_MIQUELON => '생피에르 미클롱',
            Country::SAINT_VINCENT_AND_THE_GRENADINES => '세인트빈센트 그레나딘',
            Country::SAMOA => '사모아',
            Country::SAN_MARINO => '산마리노',
            Country::SAO_TOME_AND_PRINCIPE => '상투메 프린시페',
            Country::SAUDI_ARABIA => '사우디아라비아',
            Country::SENEGAL => '세네갈',
            Country::SERBIA => '세르비아',
            Country::SEYCHELLES => '세이셸',
            Country::SIERRA_LEONE => '시에라리온',
            Country::SINGAPORE => '싱가포르',
            Country::SINT_MAARTEN => '신트마르턴',
            Country::SLOVAKIA => '슬로바키아',
            Country::SLOVENIA => '슬로베니아',
            Country::SOLOMON_ISLANDS => '솔로몬 제도',
            Country::SOMALIA => '소말리아',
            Country::SOUTH_AFRICA => '남아프리카',
            Country::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => '남조지아와 남샌드위치 제도',
            Country::SOUTH_KOREA => '대한민국',
            Country::SOUTH_SUDAN => '남수단',
            Country::SPAIN => '스페인',
            Country::SRI_LANKA => '스리랑카',
            Country::SUDAN => '수단',
            Country::SURINAME => '수리남',
            Country::SVALBARD_AND_JAN_MAYEN => '스발바르와 얀마옌',
            Country::SWEDEN => '스웨덴',
            Country::SWITZERLAND => '스위스',
            Country::SYRIA => '시리아',
            Country::TAIWAN => '대만',
            Country::TAJIKISTAN => '타지키스탄',
            Country::TANZANIA => '탄자니아',
            Country::THAILAND => '태국',
            Country::TIMOR_LESTE => '동티모르',
            Country::TOGO => '토고',
            Country::TOKELAU => '토켈라우',
            Country::TONGA => '통가',
            Country::TRINIDAD_AND_TOBAGO => '트리니다드 토바고',
            Country::TUNISIA => '튀니지',
            Country::TURKEY => '터키',
            Country::TURKMENISTAN => '투르크메니스탄',
            Country::TURKS_AND_CAICOS_ISLANDS => '터크스 케이커스 제도',
            Country::TUVALU => '투발루',
            Country::UGANDA => '우간다',
            Country::UKRAINE => '우크라이나',
            Country::UNITED_ARAB_EMIRATES => '아랍에미리트',
            Country::UNITED_KINGDOM => '영국',
            Country::UNITED_STATES_OF_AMERICA => '미국',
            Country::URUGUAY => '우루과이',
            Country::US_MINOR_OUTLYING_ISLANDS => '미국의 미소외 섬',
            Country::UZBEKISTAN => '우즈베키스탄',
            Country::VANUATU => '바누아투',
            Country::VATICAN_CITY => '바티칸 시국',
            Country::VENEZUELA => '베네수엘라',
            Country::VIET_NAM => '베트남',
            Country::VIRGIN_ISLANDS_BRITISH => '영국령 버진 제도',
            Country::VIRGIN_ISLANDS_US => '미국령 버진 제도',
            Country::WALLIS_AND_FUTUNA => '와리수와 푸투나',
            Country::WESTERN_SAHARA => '서사하라',
            Country::YEMEN => '예멘',
            Country::ZAMBIA => '잠비아',
            Country::ZIMBABWE => '짐바브웨',

            'Andorra la Vella' => '안도라 라 벨라',
            'Abu Dhabi' => '아부다비',
            'Kabul' => '카불',
            'Saint John\'s' => '세인트 존스',
            'The Valley' => '더 밸리',
            'Tirana' => '티라나',
            'Yerevan' => '예레반',
            'Luanda' => '루안다',
            'Buenos Aires' => '부에노스 아이레스',
            'Pago Pago' => '파고 파고',
            'Vienna' => '비엔나',
            'Canberra' => '캔버라',
            'Oranjestad' => '오란예스타드',
            'Mariehamn' => '마리헤멘',
            'Baku' => '바쿠',
            'Sarajevo' => '사라예보',
            'Bridgetown' => '브리지타운',
            'Dhaka' => '다카',
            'Brussels' => '브뤼셀',
            'Ouagadougou' => '와가두구',
            'Sofia' => '소피아',
            'Manama' => '마나마',
            'Gitega' => '기테가',
            'Porto-Novo' => '포르토노보',
            'Gustavia' => '귀스타비아',
            'Hamilton' => '해밀턴',
            'Bandar Seri Begawan' => '반다르 세리 베가완',
            'Sucre' => '수크레',
            'Kralendijk' => '크랄렌다이크',
            'Brasília' => '브라질리아',
            'Nassau' => '나소',
            'Thimphu' => '팀푸',
            'None' => '없음',
            'Gaborone' => '가보로네',
            'Minsk' => '민스크',
            'Belmopan' => '벨모판',
            'Ottawa' => '오타와',
            'West Island' => '웨스트 아일랜드',
            'Kinshasa' => '킨샤사',
            'Bangui' => '방기',
            'Brazzaville' => '브라자빌',
            'Bern' => '베른',
            'Yamoussoukro' => '야무수크로',
            'Avarua' => '아바루아',
            'Santiago' => '산티아고',
            'Yaoundé' => '야운데',
            'Beijing' => '베이징',
            'Bogotá' => '보고타',
            'San José' => '산호세',
            'Havana' => '하바나',
            'Praia' => '프라이아',
            'Willemstad' => '윌렘스타트',
            'Flying Fish Cove' => '플라잉 피쉬 코브',
            'Nicosia' => '니코시아',
            'Prague' => '프라하',
            'Berlin' => '베를린',
            'Djibouti City' => '지부티 시',
            'Copenhagen' => '코펜하겐',
            'Roseau' => '로조',
            'Santo Domingo' => '산토도밍고',
            'Algiers' => '알제',
            'Quito' => '키토',
            'Tallinn' => '탈린',
            'Cairo' => '카이로',
            'El Aaiún' => '엘 아아이운',
            'Asmara' => '아스마라',
            'Madrid' => '마드리드',
            'Addis Ababa' => '아디스아바바',
            'Helsinki' => '헬싱키',
            'Suva' => '수바',
            'Stanley' => '스탠리',
            'Palikir' => '팔리키르',
            'Tórshavn' => '토르스하운',
            'Paris' => '파리',
            'Libreville' => '리브르빌',
            'London' => '런던',
            'St. George\'s' => '세인트 조지스',
            'Tbilisi' => '트빌리시',
            'Cayenne' => '카이엔',
            'St. Peter Port' => '세인트 피터 포트',
            'Accra' => '아크라',
            'Gibraltar' => '지브롤터',
            'Nuuk' => '누크',
            'Banjul' => '반줄',
            'Conakry' => '코나크리',
            'Basse-Terre' => '바스테르',
            'Malabo' => '말라보',
            'Athens' => '아테네',
            'King Edward Point' => '킹 에드워드 포인트',
            'Guatemala City' => '과테말라 시티',
            'Hagåtña' => '하가트냐',
            'Bissau' => '비사우',
            'Georgetown' => '조지타운',
            'Hong Kong' => '홍콩',
            'Tegucigalpa' => '테구시갈파',
            'Zagreb' => '자그레브',
            'Port-au-Prince' => '포르토프랭스',
            'Budapest' => '부다페스트',
            'Jakarta' => '자카르타',
            'Dublin' => '더블린',
            'Jerusalem' => '예루살렘',
            'Douglas' => '더글라스',
            'New Delhi' => '뉴델리',
            'Diego Garcia' => '디에고 가르시아',
            'Baghdad' => '바그다드',
            'Tehran' => '테헤란',
            'Reykjavik' => '레이캬비크',
            'Rome' => '로마',
            'Saint Helier' => '세인트 헬리어',
            'Kingston' => '킹스턴',
            'Amman' => '암만',
            'Tokyo' => '도쿄',
            'Nairobi' => '나이로비',
            'Bishkek' => '비슈케크',
            'Phnom Penh' => '프놈펜',
            'South Tarawa' => '사우스 타라와',
            'Moroni' => '모로니',
            'Basseterre' => '바스테르',
            'Pyongyang' => '평양',
            'Seoul' => '서울',
            'Kuwait City' => '쿠웨이트 시티',
            'George Town' => '조지타운',
            'Nur-Sultan' => '누르술탄',
            'Vientiane' => '비엔티안',
            'Beirut' => '베이루트',
            'Castries' => '카스트리스',
            'Vaduz' => '바두츠',
            'Colombo' => '콜롬보',
            'Monrovia' => '몬로비아',
            'Maseru' => '마세루',
            'Vilnius' => '빌니우스',
            'Luxembourg' => '룩셈부르크',
            'Riga' => '리가',
            'Tripoli' => '트리폴리',
            'Rabat' => '라바트',
            'Monaco' => '모나코',
            'Chișinău' => '키시나우',
            'Podgorica' => '포드고리차',
            'Marigot' => '마리고',
            'Antananarivo' => '안타나나리보',
            'Majuro' => '마주로',
            'Skopje' => '스코페',
            'Bamako' => '바마코',
            'Naypyidaw' => '네피도',
            'Ulaanbaatar' => '울란바토르',
            'Macao' => '마카오',
            'Saipan' => '사이판',
            'Fort-de-France' => '포르트 드 프랑스',
            'Nouakchott' => '누악쇼트',
            'Plymouth' => '플리머스',
            'Valletta' => '발레타',
            'Port Louis' => '포트 루이스',
            'Malé' => '말레',
            'Lilongwe' => '릴롱궤',
            'Mexico City' => '멕시코시티',
            'Kuala Lumpur' => '쿠알라룸푸르',
            'Maputo' => '마푸투',
            'Windhoek' => '빈트후크',
            'Nouméa' => '누메아',
            'Niamey' => '니아메',
            'Kingston' => '킹스턴',
            'Abuja' => '아부자',
            'Managua' => '마나과',
            'Amsterdam' => '암스테르담',
            'Oslo' => '오슬로',
            'Kathmandu' => '카트만두',
            'Yaren' => '야렌',
            'Alofi' => '알로피',
            'Wellington' => '웰링턴',
            'Muscat' => '무스카트',
            'Panama City' => '파나마 시티',
            'Lima' => '리마',
            'Papeete' => '파페에테',
            'Port Moresby' => '포트모르즈비',
            'Manila' => '마닐라',
            'Islamabad' => '이스라마바드',
            'Warsaw' => '바르샤바',
            'Saint-Pierre' => '생피에르',
            'Adamstown' => '아담스타운',
            'San Juan' => '산후안',
            'East Jerusalem' => '동예루살렘',
            'Lisbon' => '리스본',
            'Ngerulmud' => '응게룰무드',
            'Asunción' => '아순시온',
            'Doha' => '도하',
            'Saint-Denis' => '생드니',
            'Bucharest' => '부쿠레슈티',
            'Belgrade' => '벨그라드',
            'Moscow' => '모스크바',
            'Kigali' => '키갈리',
            'Riyadh' => '리야드',
            'Honiara' => '호니아라',
            'Victoria' => '빅토리아',
            'Khartoum' => '카르툼',
            'Stockholm' => '스톡홀름',
            'Singapore' => '싱가포르',
            'Jamestown' => '제임스타운',
            'Ljubljana' => '류블랴나',
            'Longyearbyen' => '롱기르비엔',
            'Bratislava' => '브라티슬라바',
            'Freetown' => '프리타운',
            'San Marino' => '산마리노',
            'Dakar' => '다카르',
            'Mogadishu' => '모가디슈',
            'Paramaribo' => '파라마리보',
            'Juba' => '주바',
            'São Tomé' => '상투메',
            'San Salvador' => '산살바도르',
            'Philipsburg' => '필립스버그',
            'Damascus' => '다마스쿠스',
            'Mbabane' => '음바바네',
            'Cockburn Town' => '콕번타운',
            'N\'Djamena' => 'ND자메나',
            'Port-aux-Français' => '포르토프랑세',
            'Lomé' => '로메',
            'Bangkok' => '방콕',
            'Dushanbe' => '두샨베',
            'Fakaofo' => '파카오포',
            'Dili' => '딜리',
            'Ashgabat' => '아쉬가바트',
            'Tunis' => '튀니스',
            'Nuku\'alofa' => '누쿠알로파',
            'Ankara' => '앙카라',
            'Port of Spain' => '스페인 항구',
            'Funafuti' => '푸나푸티',
            'Taipei' => '타이베이',
            'Dodoma' => '도도마',
            'Kyiv' => '키이우',
            'Kampala' => '캄팔라',
            'Montevideo' => '몬테비데오',
            'Washington, D.C.' => '워싱턴 D.C.',
            'Tashkent' => '타슈켄트',
            'Vatican City' => '바티칸 시티',
            'Kingstown' => '킹스타운',
            'Caracas' => '카라카스',
            'Road Town' => '로드 타운',
            'Charlotte Amalie' => '샬럿 아말리',
            'Hanoi' => '하노이',
            'Port Vila' => '포트빌라',
            'Mata-Utu' => '마타우투',
            'Apia' => '아피아',
            'Pristina' => '프리슈티나',
            'Sana\'a' => '사나',
            'Mamoudzou' => '마무드주',
            'Pretoria' => '프리토리아',
            'Lusaka' => '루사카',
            'Harare' => '하라레',
            'N/A' => 'N/A',

            default => '***',
        };
    }
}