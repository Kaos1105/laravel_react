<?php

return [
    'accepted' => ':attributeが未承認です',
    'active_url' => ':attributeは有効なURLではありません',
    'after' => ':attributeは:dateより後にしてください',
    'after_or_equal' => ':attribute以降の日付にしてください',
    'alpha' => ':attributeは英字のみ有効です',
    'alpha_dash' => ':attributeは「英字」「数字」「-(ダッシュ)」「_(下線)」のみ有効です',
    'alpha_num' => ':attributeは「英字」「数字」のみ有効です',
    'array' => ':attributeは配列タイプのみ有効です',
    'before' => ':attributeは:dateより前の日付にしてください',
    'before_or_equal' => ':attributeは:date以前の日付にしてください',
    'between' => [
        'numeric' => ':attributeは:min ～ :maxまでの数値まで有効です',
        'file' => ':attributeは:min ～ :maxキロバイトまで有効です',
        'string' => ':attributeは:min ～ :max文字まで有効です',
        'array' => ':attributeは:min ～ :max個まで有効です',
    ],
    'boolean' => ':attributeの値は true もしくは false のみ有効です',
    'confirmed' => ':attributeを確認用と一致させてください',
    'date' => ':attributeを有効な日付形式にしてください',
    'date_format' => ':attributeを:format書式と一致させてください',
    'different' => ':attributeを:otherと違うものにしてください',
    'digits' => ':attributeは:digits 桁のみ有効です',
    'digits_between' => ':attributeは:min ～ :max桁のみ有効です',
    'dimensions' => ':attributeルールに合致する画像サイズのみ有効です',
    'distinct' => ':attributeに重複している値があります',
    'email' => ':attributeメールアドレスの書式のみ有効です',
    'exists' => ':attribute無効な値です',
    'file' => ':attributeアップロード出来ないファイルです',
    'filled' => ':attribute値を入力してください',
    'gt' => [
        'numeric' => ':attributeは:valueより大きい必要があります。',
        'file' => ':attributeは:valueキロバイトより大きい必要があります。',
        'string' => ':attributeは:value文字より多い必要があります。',
        'array' => ':attributeには:value個より多くの項目が必要です。',
    ],
    'gte' => [
        'numeric' => ':attributeは:value以上である必要があります。',
        'file' => ':attributeは:valueキロバイト以上である必要があります。',
        'string' => ':attributeは:value文字以上である必要があります。',
        'array' => ':attributeにはvalue個以上の項目が必要です。',
    ],
    'image' => ':attribute画像は「jpg」「png」「bmp」「gif」「svg」のみ有効です',
    'in' => ':attribute無効な値です',
    'in_array' => ':attributeは:otherと一致する必要があります',
    'integer' => ':attributeは整数のみ有効です',
    'ip' => ':attributeIPアドレスの書式のみ有効です',
    'ipv4' => ':attributeIPアドレス(IPv4)の書式のみ有効です',
    'ipv6' => ':attributeIPアドレス(IPv6)の書式のみ有効です',
    'json' => ':attribute正しいJSON文字列のみ有効です',
    'lt' => [
        'numeric' => ':attributeは:value未満である必要があります。',
        'file' => ':attributeは:valueキロバイト未満である必要があります。',
        'string' => ':attributeは:value文字未満である必要があります。',
        'array' => ':attributeは:value未満の項目を持つ必要があります。',
    ],
    'lte' => [
        'numeric' => ':attributeは:value以下である必要があります。',
        'file' => ':attributeは:valueキロバイト以下である必要があります。',
        'string' => ':attributeは:value文字以下である必要があります。',
        'array' => ':attributeは:value以上の項目を持つ必要があります。',
    ],
    'max' => [
        'numeric' => ':attributeは:max以下のみ有効です',
        'file' => ':attributeは:maxKB以下のファイルのみ有効です',
        'string' => ':attributeは:max文字以下のみ有効です',
        'array' => ':attributeは:max個以下のみ有効です',
    ],
    'mimes' => ':attributeは:valuesタイプのみ有効です',
    'mimetypes' => ':attributeは:valuesタイプのみ有効です',
    'min' => [
        'numeric' => ':attributeは:min 以上のみ有効です',
        'file' => ':attributeは:min KB以上のファイルのみ有効です',
        'string' => ':attributeは:min 文字以上のみ有効です',
        'array' => ':attributeは:min 個以上のみ有効です',
    ],
    'not_in' => ':attribute無効な値です',
    'not_regex' => 'The :attributeformat is invalid.',
    'numeric' => ':attributeは数字のみ有効です',
    'numeric_list' => 'は数字のみ有効です',
    'present' => ':attributeが存在しません',
    'regex' => ':attribute無効な値です',
    'required' => ':attributeは必須項目です',
    'required_manufacturing' => 'は必須項目です',
    'required_list' => 'は必須項目です',
    'required_if' => ':attributeは:otherが:valueには必須です',
    'required_unless' => ':attributeは:otherが:valuesでなければ必須です',
    'required_with' => ':attributeは:valuesが入力されている場合は必須です',
    'required_with_all' => ':attributeは:valuesが入力されている場合は必須です',
    'required_without' => ':attributeは:valuesが入力されていない場合は必須です',
    'required_without_all' => ':attributeは:valuesが入力されていない場合は必須です',
    'same' => ':attributeは:otherと同じ場合のみ有効です',
    'size' => [
        'numeric' => ':attributeは:sizeのみ有効です',
        'file' => ':attributeは:sizeKBのみ有効です',
        'string' => ':attributeは:size文字のみ有効です',
        'array' => ':attributeは:size個のみ有効です',
    ],
    'string' => ':attributeは文字列のみ有効です',
    'timezone' => ':attribute正しいタイムゾーンのみ有効です',
    'unique' => '入力した:attributeは既に使用されています',
    'unique_inventory' => 'その組み合わせは、既に登録されています',
    'uploaded' => ':attributeアップロードに失敗しました',
    'url' => ':attributeは正しいURL書式のみ有効です',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],

        'furigana_name' => [
            'regex' => 'ひらがなのみ有効です',
        ],

        'phone_number' => [
            'numeric' => '数字のみ有効です',
        ],

        'mobile' => [
            'numeric' => '数字のみ有効です',
        ],

        'mail' => [
            'email' => 'メールアドレス形式で入力してください',
        ],

        'title' => [
            'max' => 'は100文字以内で入力してください',
        ],

        'name' => [
            'max' => 'は100文字以内で入力してください',
        ],

        'content_body' => [
            'max' => 'は200文字以内で入力してください',
        ],
    ],

    'attributes' => [
        'login_id' => 'ログインID',
        'title' => 'タイトル',
        'category_id' => 'カテゴリー',
        'published_start_date' => '公開開始日時',
        'published_end_date' => '公開終了日時',
        'content_id' => 'リンク先コンテンツ',
        'url' => 'リンク先URL',
        'thumbnail' => 'サムネイル',
        'is_published' => 'プレビュー',
        'is_active' => '有効',
        'text' => '本文の文字数が多すぎます。',
        'description' => 'ピックアップ概要',
        'full_name' => '姓名',
        'furigana_name' => 'フリガナ',
        'email' => 'メールアドレス',
        'phone' => '電話',
        'mobile' => '携帯',
        'password' => 'パスワード',
        'type' => '種類',
        'content_detail' => '詳細内容',
        'content_body' => '概要内容',
        'contract_end_date' => '契約終了日',
        'contract_start_date' => '契約開始日',
        'start_date_time' => '製造開始日',
        'start_time' => '製造開始時刻',
        'end_date_time' => '製造終了日',
        'end_time' => '製造終了時刻',
        'product_specification_id' => '製品仕様書'
    ],

    'values' => [
        'published_start_datetime' => [
            'now' => '現在の日時'
        ],
        'application_start_date' => [
            'now' => '現在の日時'
        ],
        'publish_datetime' => [
            'now' => '現在の日時'
        ]
    ],

    'success' => '処理が完了しました。',
    'max_size_file' => 'KB以下のファイルのみ有効です',
    'total_ratio' => '比率の合計は 100 以下でなければなりません',
    'duplicate_datetime' => 'その組み合わせは既に登録されています'
];
