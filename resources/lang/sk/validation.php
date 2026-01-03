<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute musí byť akceptovaný.',
    'accepted_if' => ':attribute musí byť akceptovaný, keď :other je :value.',
    'active_url' => ':attribute nie je platná URL adresa.',
    'after' => ':attribute musí byť dátum po :date.',
    'after_or_equal' => ':attribute musí byť dátum po alebo presne :date.',
    'alpha' => ':attribute môže obsahovať iba písmená.',
    'alpha_dash' => ':attribute môže obsahovať iba písmená, čísla, pomlčky a podčiarkovníky.',
    'alpha_num' => ':attribute môže obsahovať iba písmená a čísla.',
    'any_of' => ':attribute je neplatný.',
    'array' => ':attribute musí byť pole.',
    'ascii' => ':attribute môže obsahovať iba jednobajtové alfanumerické znaky a symboly.',
    'before' => ':attribute musí byť dátum pred :date.',
    'before_or_equal' => ':attribute musí byť dátum pred alebo presne :date.',
    'between' => [
        'array' => ':attribute musí mať rozsah :min až :max prvkov.',
        'file' => ':attribute musí mať rozsah :min až :max kilobajtov.',
        'numeric' => ':attribute musí mať rozsah :min až :max.',
        'string' => ':attribute musí mať rozsah :min až :max znakov.',
    ],
    'boolean' => ':attribute musí byť pravda alebo nepravda.',
    'can' => ':attribute obsahuje neoprávnenú hodnotu.',
    'confirmed' => 'Potvrdenie :attribute sa nezhoduje.',
    'contains' => ':attribute chýba požadovaná hodnota.',
    'current_password' => 'Heslo je nesprávne.',
    'date' => ':attribute nie je platný dátum.',
    'date_equals' => ':attribute musí byť dátum rovnajúci sa :date.',
    'date_format' => ':attribute sa nezhoduje s formátom :format.',
    'decimal' => ':attribute musí mať :decimal desatinných miest.',
    'declined' => ':attribute musí byť zamietnutý.',
    'declined_if' => ':attribute musí byť zamietnutý, keď :other je :value.',
    'different' => ':attribute a :other musia byť odlišné.',
    'digits' => ':attribute musí mať :digits číslic.',
    'digits_between' => ':attribute musí mať rozsah :min až :max číslic.',
    'dimensions' => ':attribute má neplatné rozmery obrázka.',
    'distinct' => ':attribute má duplicitnú hodnotu.',
    'doesnt_contain' => ':attribute nesmie obsahovať žiadnu z nasledujúcich hodnôt: :values.',
    'doesnt_end_with' => ':attribute nesmie končiť jednou z nasledujúcich hodnôt: :values.',
    'doesnt_start_with' => ':attribute nesmie začínať jednou z nasledujúcich hodnôt: :values.',
    'email' => ':attribute musí byť platná emailová adresa.',
    'encoding' => ':attribute musí byť zakódovaný v :encoding.',
    'ends_with' => ':attribute musí končiť jednou z nasledujúcich hodnôt: :values.',
    'enum' => 'Vybraná hodnota :attribute je neplatná.',
    'exists' => 'Vybraná hodnota :attribute je neplatná.',
    'extensions' => ':attribute musí mať jednu z nasledujúcich prípon: :values.',
    'file' => ':attribute musí byť súbor.',
    'filled' => ':attribute musí mať hodnotu.',
    'gt' => [
        'array' => ':attribute musí mať viac ako :value prvkov.',
        'file' => ':attribute musí byť väčší ako :value kilobajtov.',
        'numeric' => ':attribute musí byť väčší ako :value.',
        'string' => ':attribute musí mať viac ako :value znakov.',
    ],
    'gte' => [
        'array' => ':attribute musí mať :value prvkov alebo viac.',
        'file' => ':attribute musí byť väčší alebo rovný :value kilobajtov.',
        'numeric' => ':attribute musí byť väčší alebo rovný :value.',
        'string' => ':attribute musí mať viac alebo rovný počet znakov ako :value.',
    ],
    'hex_color' => ':attribute musí byť platná hexadecimálna farba.',
    'image' => ':attribute musí byť obrázok.',
    'in' => 'Vybraná hodnota :attribute je neplatná.',
    'in_array' => ':attribute sa nenachádza v :other.',
    'in_array_keys' => ':attribute musí obsahovať aspoň jeden z nasledujúcich kľúčov: :values.',
    'integer' => ':attribute musí byť celé číslo.',
    'ip' => ':attribute musí byť platná IP adresa.',
    'ipv4' => ':attribute musí byť platná IPv4 adresa.',
    'ipv6' => ':attribute musí byť platná IPv6 adresa.',
    'json' => ':attribute musí byť platný JSON reťazec.',
    'list' => ':attribute musí byť zoznam.',
    'lowercase' => ':attribute musí byť napísaný malými písmenami.',
    'lt' => [
        'array' => ':attribute musí mať menej ako :value prvkov.',
        'file' => ':attribute musí byť menší ako :value kilobajtov.',
        'numeric' => ':attribute musí byť menší ako :value.',
        'string' => ':attribute musí mať menej ako :value znakov.',
    ],
    'lte' => [
        'array' => ':attribute nesmie mať viac ako :value prvkov.',
        'file' => ':attribute musí byť menší alebo rovný :value kilobajtov.',
        'numeric' => ':attribute musí byť menší alebo rovný :value.',
        'string' => ':attribute musí mať menej alebo rovný počet znakov ako :value.',
    ],
    'mac_address' => ':attribute musí byť platná MAC adresa.',
    'max' => [
        'array' => ':attribute nesmie mať viac ako :max prvkov.',
        'file' => ':attribute nesmie byť väčší ako :max kilobajtov.',
        'numeric' => ':attribute nesmie byť väčší ako :max.',
        'string' => ':attribute nesmie mať viac ako :max znakov.',
    ],
    'max_digits' => ':attribute nesmie mať viac ako :max číslic.',
    'mimes' => ':attribute musí byť súbor typu: :values.',
    'mimetypes' => ':attribute musí byť súbor typu: :values.',
    'min' => [
        'array' => ':attribute musí mať aspoň :min prvkov.',
        'file' => ':attribute musí mať aspoň :min kilobajtov.',
        'numeric' => ':attribute musí byť aspoň :min.',
        'string' => ':attribute musí mať aspoň :min znakov.',
    ],
    'min_digits' => ':attribute musí mať aspoň :min číslic.',
    'missing' => 'Pole :attribute musí chýbať.',
    'missing_if' => 'Pole :attribute musí chýbať, keď :other je :value.',
    'missing_unless' => 'Pole :attribute musí chýbať, pokiaľ :other nie je :value.',
    'missing_with' => 'Pole :attribute musí chýbať, keď je prítomné :values.',
    'missing_with_all' => 'Pole :attribute musí chýbať, keď sú prítomné :values.',
    'multiple_of' => ':attribute musí byť násobkom :value.',
    'not_in' => 'Vybraná hodnota :attribute je neplatná.',
    'not_regex' => 'Formát :attribute je neplatný.',
    'numeric' => ':attribute musí byť číslo.',
    'password' => [
        'letters' => ':attribute musí obsahovať aspoň jedno písmeno.',
        'mixed' => ':attribute musí obsahovať aspoň jedno veľké a jedno malé písmeno.',
        'numbers' => ':attribute musí obsahovať aspoň jedno číslo.',
        'symbols' => ':attribute musí obsahovať aspoň jeden symbol.',
        'uncompromised' => 'Zadaný :attribute sa objavil v úniku dát. Prosím, zvoľte iný :attribute.',
    ],
    'present' => 'Pole :attribute musí byť prítomné.',
    'present_if' => 'Pole :attribute musí byť prítomné, keď :other je :value.',
    'present_unless' => 'Pole :attribute musí byť prítomné, pokiaľ :other nie je :value.',
    'present_with' => 'Pole :attribute musí byť prítomné, keď je prítomné :values.',
    'present_with_all' => 'Pole :attribute musí byť prítomné, keď sú prítomné :values.',
    'prohibited' => 'Pole :attribute je zakázané.',
    'prohibited_if' => 'Pole :attribute je zakázané, keď :other je :value.',
    'prohibited_if_accepted' => 'Pole :attribute je zakázané, keď je prijaté :other.',
    'prohibited_if_declined' => 'Pole :attribute je zakázané, keď je zamietnuté :other.',
    'prohibited_unless' => 'Pole :attribute je zakázané, pokiaľ :other nie je v :values.',
    'prohibits' => 'Pole :attribute zakazuje prítomnosť :other.',
    'regex' => 'Formát :attribute je neplatný.',
    'required' => 'Pole :attribute je povinné.',
    'required_array_keys' => 'Pole :attribute musí obsahovať položky pre: :values.',
    'required_if' => 'Pole :attribute je povinné, keď :other je :value.',
    'required_if_accepted' => 'Pole :attribute je povinné, keď :other je prijaté.',
    'required_if_declined' => 'Pole :attribute je povinné, keď :other je zamietnuté.',
    'required_unless' => 'Pole :attribute je povinné, pokiaľ :other nie je v :values.',
    'required_with' => 'Pole :attribute je povinné, keď je prítomné :values.',
    'required_with_all' => 'Pole :attribute je povinné, keď sú prítomné :values.',
    'required_without' => 'Pole :attribute je povinné, keď nie je prítomné :values.',
    'required_without_all' => 'Pole :attribute je povinné, keď nie je prítomná ani jedna z hodnôt :values.',
    'same' => ':attribute a :other sa musia zhodovať.',
    'size' => [
        'array' => ':attribute musí obsahovať :size prvkov.',
        'file' => ':attribute musí mať :size kilobajtov.',
        'numeric' => ':attribute musí byť :size.',
        'string' => ':attribute musí mať :size znakov.',
    ],
    'starts_with' => ':attribute musí začínať jednou z nasledujúcich hodnôt: :values.',
    'string' => ':attribute musí byť reťazec.',
    'timezone' => ':attribute musí byť platná časová zóna.',
    'unique' => ':attribute už existuje.',
    'uploaded' => 'Nepodarilo sa nahrať :attribute.',
    'uppercase' => ':attribute musí byť napísaný veľkými písmenami.',
    'url' => ':attribute musí byť platná URL adresa.',
    'ulid' => ':attribute musí byť platné ULID.',
    'uuid' => ':attribute musí byť platné UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
