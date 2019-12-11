<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Trebuie să acceptați :attribute',
    'active_url' => ':attribute nu este o adresă validă URL',
    'after' => ':attribute trebuie să fie o dată înainte de :date.',
    'after_or_equal' => ':attribute trebuie să fie o dată înainte sau egală cu :date.',
    'alpha' => ':attribute poate să conțină numai litere.',
    'alpha_dash' => ':attribute poate să conțină numai litere, numere și linii.',
    'alpha_num' => ':attribute poate să conțină numai litere și numere.',
    'array' => ':attribute trebuie să fie un șir.',
    'before' => ':attribute trebuie să fie o dată înainte de :date.',
    'before_or_equal' => ':attribute trebuie să fie o dată înainte sau egală cu :date.',
    'between' => [
        'numeric' => ':attribute trebuie să fie între :min și :max.',
        'file' => ':attribute trebuie să fie între :min și :max kilobytes.',
        'string' => ':attribute trebuie să conțină între :min și :max caractere.',
        'array' => ':attribute trebuie să aibă între :min și :max elemente.',
    ],
    'boolean' => ':attribute trebuie să fie adevărat sau fals.',
    'confirmed' => 'Câmpul de confirmare pentru :attribute nu se potrivește.',
    'date' => ':attribute nu este o dată validă.',
    'date_equals' => ':attribute trebuie să fie egală cu :date.',
    'date_format' => ':attribute nu se potrivește cu formatul :format.',
    'different' => ':attribute și :other trebuie să fie diferite.',
    'digits' => ':attribute trebuie să conțină :digits cifre.',
    'digits_between' => ':attribute trebuie să conțină între :min și :max cifre.',
    'dimensions' => ':attribute conține dimensiuni invalide pentru imagine.',
    'distinct' => ':attribute trebuie să fie distinct.',
    'email' => ':attribute trebuie să fie o adresă validă de email.',
    'ends_with' => ':attribute trebuie să se termine cu una din valori: :values',
    'exists' => 'Opțiunea pentru :attribute este invalidă.',
    'file' => ':attribute trebuie să fie un fișier.',
    'filled' => 'Trebuie să completați câmpul :attribute',
    'gt' => [
        'numeric' => ':attribute trebuie să fie mai mare decât :value.',
        'file' => ':attribute trebuie să fie mai mare decât :value kilobytes.',
        'string' => ':attribute trebuie să conțină mai mult de :value caractere.',
        'array' => ':attribute trebuie să conțină mai mult de :value elemente.',
    ],
    'gte' => [
        'numeric' => ':attribute trebuie să fie mai mare sau egal cu :value.',
        'file' => ':attribute trebuie să fie mai mare sau egal cu :value kilobytes.',
        'string' => ':attribute trebuie să conțină :value sau mai multe caractere.',
        'array' => ':attribute trebuie să conțină :value sau mai multe elemente.',
    ],
    'image' => ':attribute trebuie să fie o imagine.',
    'in' => 'Opțiunea :attribute selectată este invalidă.',
    'in_array' => ':attribute nu există în :other.',
    'integer' => ':attribute trebuie să fie un număr..',
    'ip' => ':attribute trebuie să fie o adresă IP validă.',
    'ipv4' => ':attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6' => ':attribute trebuie să fie o adresă IPv6 validă.',
    'json' => ':attribute trebuie să fie un string JSON valid.',
    'lt' => [
        'numeric' => ':attribute must be less than :value.',
        'file' => ':attribute must be less than :value kilobytes.',
        'string' => ':attribute must be less than :value characters.',
        'array' => ':attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute must be less than or equal :value.',
        'file' => ':attribute must be less than or equal :value kilobytes.',
        'string' => ':attribute must be less than or equal :value characters.',
        'array' => ':attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute may not be greater than :max.',
        'file' => ':attribute may not be greater than :max kilobytes.',
        'string' => ':attribute may not be greater than :max characters.',
        'array' => ':attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute must be at least :min.',
        'file' => ':attribute must be at least :min kilobytes.',
        'string' => ':attribute must be at least :min characters.',
        'array' => ':attribute must have at least :min items.',
    ],
    'not_in' => 'Opțiunea :attribute este invalidă.',
    'not_regex' => 'Formatul pentru :attribute este invalid.',
    'numeric' => ':attribute trebuie să fie un număr.',
    'password' => 'Parola este incorectă.',
    'present' => ':attribute trebuie să fie prezent.',
    'regex' => 'Formatul pentru :attribute este invalid.',
    'required' => 'Câmpul pentru :attribute este obligatoriu.',
    'required_if' => 'Câmpul :attribute este obligatoriu dacă :other este :value.',
    'required_unless' => 'Câmpul :attribute este obligatoriu dacă :other nu este în :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same' => 'Câmpurile pentru :attribute și :other trebuie să se potrivească.',
    'size' => [
        'numeric' => ':attribute trbuie să aibă :size. cifre.',
        'file' => ':attribute trebuie să aibă :size kilobytes.',
        'string' => ':attribute trebuie să aibă :size caractere.',
        'array' => ':attribute trebuie să conțină :size elemente.',
    ],
    'starts_with' => ':attribute trebuie să înceapă cu una din urmatoarele: :values',
    'string' => ':attribute trebuie să fie un șir de caractere.',
    'timezone' => ':attribute trebuie să fie o zonă valida.',
    'unique' => ':attribute există deja. Câmpul trebuie să fie unic.',
    'uploaded' => 'Nu s-a reușit încarcarea pentru câmpul :attribute ',
    'url' => ':attribute formatul este invalid.',
    'uuid' => ':attribute trebuie să fie un UUID valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'phone_num' => 'Numărul de telefon',
        'CNP' => 'Codul Numeric Personal',
        'email' => 'Adresa de email'
    ],

];
