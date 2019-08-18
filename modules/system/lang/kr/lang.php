<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => '기본으로 돌아가기',
    ],
    'directory' => [
        'create_fail' => "디렉토리 ':name'을 작성할 수 없습니다.",
    ],
    'file' => [
        'create_fail' => "파일 ':name'을 작성할 수 없습니다.",
    ],
    'combiner' => [
        'not_found' => "combiner파일 ':name'을 발견할 수 없습니다.",
    ],
    'system' => [
        'name' => '시스템',
        'menu_label' => '시스템',
        'categories' => [
            'cms' => 'CMS',
            'misc' => '기타',
            'logs' => '로그',
            'mail' => '메일',
            'shop' => '샵',
            'team' => '팀',
            'users' => '유저',
            'system' => '시스템',
            'social' => '소셜',
            'events' => '이벤트',
            'customers' => '고객',
            'my_settings' => '내 설정',
        ],
    ],
    'theme' => [
        'label' => '테마',
        'unnamed' => '이름없는 테마',
        'name' => [
            'label' => '테마명',
            'help' => '중복없는 테마명을 사용해주세요. (예:RainLab.Vanilla)',
        ],
    ],
    'themes' => [
        'install' => '테마 설치',
        'search' => '설치할 테마 찾는중...',
        'installed' => '설치된 테마',
        'no_themes' => '마켓에서 설치된 테마가 없습니다.',
        'recommended' => '추천',
        'remove_confirm' => '이 테마를 삭제하시겠습니까?',
    ],
    'plugin' => [
        'label' => '플러그인',
        'unnamed' => '이름없는 플러그인',
        'name' => [
            'label' => '플러그인명',
            'help' => '중복없는 플러그인명을 사용해주세요. (예:RainLab.Blog)',
        ],
    ],
    'plugins' => [
        'manage' => '플러그인 관리',
        'enable_or_disable' => '활성화/비활성화',
        'enable_or_disable_title' => '플러그인 활성화/비활성화',
        'install' => '플러그인 설치',
        'install_products' => '제품 설치',
        'search' => '설치할 플러그인 찾는중...',
        'installed' => '설치된 플러그인',
        'no_plugins' => '마켓에서 설치된 플러그인이 없습니다.',
        'recommended' => '추천',
        'remove' => '삭제',
        'refresh' => '새로고침',
        'disabled_label' => '비활성화',
        'disabled_help' => '플러그인을 비활성화하면 애플리케이션에서 사용할수 없게됩니다.',
        'frozen_label' => '업데이트 동결',
        'frozen_help' => '동결된 플러그인은 업데이트 과정중에 무시됩니다.',
        'selected_amount' => '플러그인을 :amount개 선택',
        'remove_confirm' => '이 플러그인을 삭제하시겠습니까?',
        'remove_success' => '시스템에서 플러그인을 삭제했습니다.',
        'refresh_confirm' => '갱신하시겠습니까?',
        'refresh_success' => '시스템에 설치된 플러그인을 변경했습니다.',
        'disable_confirm' => '비활성화하시겠습니까?',
        'disable_success' => '플러그인을 비활성화 했습니다.',
        'enable_success' => '플러그인을 활성화했습니다.',
        'unknown_plugin' => '시스템에서 불명확한 플러그인을 삭제했습니다.',
    ],
    'project' => [
        'name' => '프로젝트',
        'owner_label' => '소유자',
        'attach' => '프로젝트 연결',
        'detach' => '프로젝트 분리',
        'none' => '없음',
        'id' => [
            'label' => '프로젝트ID',
            'help' => '프로젝트ID 찾는방법',
            'missing' => '사용하실 프로젝트 ID를 설정해주세요.',
        ],
        'detach_confirm' => '이 프로젝트를 분리하시겠습니까?',
        'unbind_success' => '프로젝트를 분리했습니다.',
    ],
    'settings' => [
        'menu_label' => '설정',
        'not_found' => '선택하신 설정을 사용할 수 없습니다.',
        'missing_model' => '모델의 정의를 발견할 수 없습니다.',
        'update_success' => ':name 을 설정했습니다.',
        'return' => '시스템 설정으로 돌아가기',
        'search' => '검색',
    ],
    'mail' => [
        'log_file' => '로그파일',
        'menu_label' => '이메일 설정',
        'menu_description' => '이메일 설정 관리',
        'general' => '일반',
        'method' => '전송 방법',
        'sender_name' => '보내는이',
        'sender_email' => '보내는이 주소',
        'php_mail' => 'PHP메일',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP주소',
        'smtp_authorization' => 'SMTP설정이 필요',
        'smtp_authorization_comment' => 'SMTP서버의 설정이 필요한경우 체크해주세요.',
        'smtp_username' => '유저이름',
        'smtp_password' => '비밀번호',
        'smtp_port' => 'SMTP포트',
        'smtp_ssl' => 'SSL접속여부',
        'smtp_encryption' => 'SMTP 암호 프로토콜',
        'smtp_encryption_none' => '비 암호화',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail 경로',
        'sendmail_path_comment' => 'Sendmail프로그램의 경로를 설정해주세요.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun도메인',
        'mailgun_domain_comment' => 'Mailgun도메인명을 설정해주세요.',
        'mailgun_secret' => 'Mailgun API키',
        'mailgun_secret_comment' => 'Mailgun API키를 설정해주세요.',
        'ses' => 'SES',
        'ses_key' => 'SES 키',
        'ses_key_comment' => 'SES API 키를 입력해주세요.',
        'ses_secret' => 'SES 비밀키',
        'ses_secret_comment' => 'SES API 비밀키를 입력해주세요.',
        'ses_region' => 'SES 지역',
        'ses_region_comment' => 'SES 지역 (예: us-east-1)',
        'drivers_hint_header' => '드라이버가 설치되지 않았습니다',
        'drivers_hint_content' => '이 전송방법은 ":plugin" 플러그인을 필요로 합니다.',
    ],
    'mail_templates' => [
        'menu_label' => '이메일 템플릿',
        'menu_description' => '이메일 템플릿의 변경, 유저/어드민에 보내기, 이메일 레이아웃관리.',
        'new_template' => '신규 템플릿',
        'new_layout' => '신규 레이아웃',
        'template' => '템플릿',
        'templates' => '템플릿들',
        'menu_layouts_label' => '이메일 레이아웃',
        'layout' => '레이아웃',
        'layouts' => '레이아웃들',
        'name' => '이름',
        'name_comment' => '시스템상의 고유이름을 붙여주세요.',
        'code' => '코드',
        'code_comment' => '시스템상의 고유코드를 붙여주세요.',
        'subject' => '제목',
        'subject_comment' => '이메일의 제목',
        'description' => '설명',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Plain Text',
        'test_send' => '테스트 발송',
        'test_success' => '테스트 발송 성공했습니다.',
        'test_confirm' => ':email 로 테스트메일을 발송합니다. 계속하시겠습니까?',
        'creating' => '템플릿 생성중...',
        'creating_layout' => '레이아웃 생성중...',
        'saving' => '템플릿 저장중...',
        'saving_layout' => '레이아웃 저장중...',
        'delete_confirm' => '이 템플릿을 삭제하시겠습니까?',
        'delete_layout_confirm' => '이 레이아웃을 삭제하시겠습니까?',
        'deleting' => '템플릿을 삭제중...',
        'deleting_layout' => '레이아웃을 삭제중...',
        'sending' => '테스트 메시지 전송중...',
        'return' => '템플릿 목록으로 돌아가기',
    ],
    'install' => [
        'project_label' => '프로젝트 추가',
        'plugin_label' => '플러그인 설치',
        'theme_label' => '테마 설치',
        'missing_plugin_name' => '설치할 플러그인명을 설정해주세요.',
        'missing_theme_name' => '설치할 테마명을 설정해주세요.',
        'install_completing' => '설치를 완료중입니다.',
        'install_success' => '플러그인을 설치했습니다.',
    ],
    'updates' => [
        'title' => '업데이트 관리',
        'name' => 'SW 업데이트',
        'menu_label' => '업데이트',
        'menu_description' => '시스템 변경, 플러그인과 테마의 관리와 설치.',
        'return_link' => '업데이트로 돌아가기',
        'check_label' => '업데이트 확인',
        'retry_label' => '재실행',
        'plugin_name' => '이름',
        'plugin_code' => '코드',
        'plugin_description' => '설명',
        'plugin_version' => '버전',
        'plugin_author' => '작성자',
        'plugin_not_found' => '플러그인을 찾을 수 없습니다',
        'core_current_build' => '현재의 빌드',
        'core_build' => '빌드 :build',
        'core_build_help' => '새로운 빌드가 존재합니다.',
        'core_downloading' => '애플리케이션 파일 다운로드중',
        'core_extracting' => '애플리케이션 파일 압축해제는중',
        'plugins' => '플러그인',
        'themes' => '테마',
        'disabled' => '비활성됨',
        'plugin_downloading' => '플러그인 다운로드중: :name',
        'plugin_extracting' => '플러그인 압축해제는중: :name',
        'plugin_version_none' => '최신버전',
        'plugin_current_version' => '현재버전',
        'theme_new_install' => '신규테마설치',
        'theme_downloading' => "테마 ':name' 다운로드중입니다",
        'theme_extracting' => "테마 ':name' 압축해제중입니다",
        'update_label' => 'SW 업데이트',
        'update_completing' => '업데이트 완료중',
        'update_loading' => '업데이트 로딩중...',
        'update_success' => '업데이트 했습니다.',
        'update_failed_label' => '업데이트 실패',
        'force_label' => '강제 업데이트',
        'found' => [
            'label' => '업데이트가능',
            'help' => '업데이트 하실 SW를 클릭해주세요.',
        ],
        'none' => [
            'label' => '업데이트없음',
            'help' => '업데이트를 발견할 수 없습니다.',
        ],
        'important_action' => [
            'empty' => '선택',
            'confirm' => '업데이트',
            'skip' => '이번만 업데이트 안함',
            'ignore' => '계속 업데이트 안',
        ],
        'important_action_required' => '선택 필요',
        'important_view_guide' => '업그레이드 가이드 보기',
        'important_view_release_notes' => '릴리즈 노트 보기',
        'important_alert_text' => '몇몇 업데이트는 주의가 필요합니다.',
        'details_title' => '플러그인 상세',
        'details_view_homepage' => '홈페이지 보기',
        'details_readme' => '참고문서',
        'details_readme_missing' => '참고문서가 제공되지 않습니다.',
        'details_changelog' => '변경로그',
        'details_changelog_missing' => '변경로그가 제공되지 않습니다.',
        'details_upgrades' => '업그레이드 지침',
        'details_upgrades_missing' => '업그레이드 지침이 제공되지 않습니다.',
        'details_licence' => '라이센스',
        'details_licence_missing' => '라이센스 정보가 제공되지 않습니다.',
        'details_current_version' => '현재 버전',
        'details_author' => '작성자',
    ],
    'server' => [
        'connect_error' => '서버 접속 오류.',
        'response_not_found' => '갱신할 서버를 발견할 수 없습니다.',
        'response_invalid' => '서버로부터의 응답이 정상적이지 않습니다.',
        'response_empty' => '서버로부터의 응답이 없습니다.',
        'file_error' => '서버가 패키지 전송에 실패.',
        'file_corrupt' => '서버의 파일이 정상적이지 않습니다.',
    ],
    'behavior' => [
        'missing_property' => ':class 클래스는 :behavior 행동이 사용하는 :property 를 정의해야합니다.',
    ],
    'config' => [
        'not_found' => ':location 에서 :file 설정파일을 발견할 수 없습니다.',
        'required' => ':location 의 설정에 필요한 :property 값이 존재해야합니다.',
    ],
    'zip' => [
        'extract_failed' => "코어파일: ':file' 추출에 실패했습니다.",
    ],
    'event_log' => [
        'hint' => '예외발생, 디버그정보 등 애플리케이션에서 발생한 잠재적 오류를 표시합니다.',
        'menu_label' => '이벤트로그',
        'menu_description' => '시스템로그메시지의 시간이나 세부사항을 표시합니다.',
        'empty_link' => '이벤트로그 비우기',
        'empty_loading' => '이벤트로그를 비우는 중입니다...',
        'empty_success' => '이벤트로그를 비웠습니다.',
        'return_link' => '이벤트로그로 돌아가기',
        'id' => 'ID',
        'id_label' => '이벤트ID',
        'created_at' => '생성시간',
        'message' => '메시지',
        'level' => '레벨',
        'preview_title' => '이벤트',
    ],
    'request_log' => [
        'hint' => '존재하지 않는 페이지요청등 주의가 필요한 브라우저 요청을 표시합니다.',
        'menu_label' => '요청로그',
        'menu_description' => '"Page not found (404)" 등의 올바르지 않은 요청이나 이동을 표시합니다.',
        'empty_link' => '요청로그 비우기',
        'empty_loading' => '요청로그 비우는 중입니다...',
        'empty_success' => '요청로그를 비웠습니다.',
        'return_link' => '요청로그로 돌아가기',
        'id' => 'ID',
        'id_label' => '로그ID',
        'count' => '카운트',
        'referer' => 'Referer',
        'url' => 'URL',
        'status_code' => '상태코드',
        'preview_title' => '요청',
    ],
    'permissions' => [
        'name' => '시스템',
        'manage_system_settings' => '시스템설정 관리',
        'manage_software_updates' => 'SW업데이트 관리',
        'access_logs' => '시스템로그 보기',
        'manage_mail_templates' => '이메일 템플릿 관리',
        'manage_mail_settings' => '이메일 설정 관리',
        'manage_other_administrators' => '다른 어드민 관리',
        'manage_preferences' => '백엔드 설정 관리',
        'manage_editor' => '코드 에디터 설정 관리',
        'view_the_dashboard' => '대시보드 표시',
        'manage_branding' => '백엔드 브랜드 변경',
    ],
    'log' => [
        'menu_label' => '로그 설정',
        'menu_description' => '로깅할 영역을 특정해주세요.',
        'default_tab' => '로깅',
        'log_events' => '시스템 이벤트 기록',
        'log_events_comment' => '시스템 이벤트를 DB를 파일에 기록',
        'log_requests' => '잘못된 요청 기록',
        'log_requests_comment' => '404같은 주의가 필요한 브라우저 요청 기록',
        'log_theme' => '테마 변경 기록',
        'log_theme_comment' => '백엔드를 사용한 테마변경 기록',
    ],
    'media' => [
        'invalid_path' => "잘못된 경로: ':path'.",
        'folder_size_items' => '갯수',
    ],
];
