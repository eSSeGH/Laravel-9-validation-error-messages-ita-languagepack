<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Messaggi d'Errore di Validazione
    |--------------------------------------------------------------------------
    |
    | Le seguenti righe contengono i messaggi di errore usate dalle
    | classi di validazione. Alcune di queste regole possiedono diverse versioni come
    | ad esempio le regole 'size'. Puoi modificare liberamente i messaggi di errore.
    |
    */

    'accepted' => ':attribute deve essere accettato.',
    'accepted_if' => ':attribute deve essere accettato quando :other è :value.',
    'active_url' => ':attribute non è un URL valido.',
    'after' => ':attribute deve essere una data seguente a :date.',
    'after_or_equal' => ':attribute deve essere una data seguente o coincidente a :date.',
    'alpha' => ':attribute deve contenere solo lettere.',
    'alpha_dash' => ':attribute deve contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => ':attribute deve contenere solo lettere e numeri.',
    'array' => ':attribute deve essere un array.',
    'before' => ':attribute deve essere una data antecedente :date.',
    'before_or_equal' => ':attribute deve essere una data antecedente o coincidente a :date.',
    'between' => [
        'array' => ':attribute deve avere un numero di oggetti compreso tra :min e :max.',
        'file' => ':attribute deve avere un numero di kilobytes compreso tra :min e :max.',
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'string' => ':attribute deve avere un numero di caratteri compreso tra :min e :max.',
    ],
    'boolean' => ':attribute deve essere true o false.',
    'confirmed' => ':attribute non corrisponde.',
    'current_password' => 'password non è corretta.',
    'date' => ':attribute non è una data valida.',
    'date_equals' => ':attribute deve essere una data coincidente a :date.',
    'date_format' => ':attribute non corrisponde al formato :format.',
    'declined' => ':attribute deve essere rifiutato.',
    'declined_if' => ':attribute deve essere rifiutato quando :other è :value.',
    'different' => ':attribute e :other devono essere differenti.',
    'digits' => ':attribute deve avere :digits cifre.',
    'digits_between' => ':attribute deve avere un numero di cifre compreso tra :min e :max.',
    'dimensions' => ':attribute possiede delle dimensioni di immagine non valide.',
    'distinct' => ':attribute possiede un valore duplicato.',
    'doesnt_start_with' => ':attribute non può iniziare con uno dei seguenti valori: :values.',
    'email' => ':attribute deve essere un indirizzo email valido.',
    'ends_with' => ':attribute deve finire con uno dei seguenti valori: :values.',
    'enum' => ':attribute selezionato non è valido.',
    'exists' => ':attribute selezionato non è valido.',
    'file' => ':attribute deve essere un file.',
    'filled' => ':attribute deve avere un valore.',
    'gt' => [
        'array' => ':attribute deve avere più di :value oggetti.',
        'file' => ':attribute deve essere più grande di :value kilobyte.',
        'numeric' => ':attribute deve essere più grande di :value.',
        'string' => ':attribute deve avere un numero di caratteri più elevato di :value.',
    ],
    'gte' => [
        'array' => ':attribute deve avere :value oggetti o more.',
        'file' => ':attribute deve essere più grande di o uguale a :value kilobyte.',
        'numeric' => ':attribute deve essere più grande di o uguale a :value.',
        'string' => ':attribute deve essere più grande di o uguale a :value caratteri.',
    ],
    'image' => ':attribute deve essere un\'immagine.',
    'in' => ':attribute selezionato non è valido.',
    'in_array' => ':attribute non esiste in :other.',
    'integer' => ':attribute deve essere un numero intero.',
    'ip' => ':attribute deve essere un indirizzo IP valido.',
    'ipv4' => ':attribute deve essere a un indirizzo IPv4 valido.',
    'ipv6' => ':attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':attribute deve essere una stringa di JSON valida.',
    'lt' => [
        'array' => ':attribute deve avere meno di :value oggetti.',
        'file' => ':attribute deve essere grande meno di :value kilobyte.',
        'numeric' => ':attribute deve essere minore di :value.',
        'string' => ':attribute deve avere meno di :value caratteri.',
    ],
    'lte' => [
        'array' => ':attribute non può avere più di :value oggetti.',
        'file' => ':attribute deve essere più piccolo o uguale a :value kilobyte.',
        'numeric' => ':attribute deve essere minore o uguale a :value.',
        'string' => ':attribute deve avere un numero di caratteri minore o uguale a :value.',
    ],
    'mac_address' => ':attribute deve essere un indirizzo MAC valido.',
    'max' => [
        'array' => ':attribute non può avere più di :max oggetti.',
        'file' => ':attribute non può essere più grande di :max kilobyte.',
        'numeric' => ':attribute non può essere maggiore di :max.',
        'string' => ':attribute non può avere un numero di caratteri maggiore di :max.',
    ],
    'mimes' => ':attribute deve essere un file di tipo: :values.',
    'mimetypes' => ':attribute deve essere un file di tipo: :values.',
    'min' => [
        'array' => ':attribute deve avere almeno :min oggetti.',
        'file' => ':attribute deve essere grande almeno :min kilobyte.',
        'numeric' => ':attribute deve maggiore o uguale a :min.',
        'string' => ':attribute deve avere almeno un numero di caratteri di :min.',
    ],
    'multiple_of' => ':attribute deve essere un multiplo di :value.',
    'not_in' => ':attribute selezionato non è valido.',
    'not_regex' => 'Il formato di :attribute non è valido.',
    'numeric' => ':attribute deve essere un numero.',
    'password' => [
        'letters' => ':attribute deve contenere al massimo una lettera.',
        'mixed' => ':attribute deve contenere al massimo una lettera maiuscola e una minuscola.',
        'numbers' => ':attribute deve contenere al massimo un numero.',
        'symbols' => ':attribute deve contenere al massimo one simbolo.',
        'uncompromised' => ':attribute ha subito una fuga di dati. Per favore, scegli un\'altro :attribute.',
    ],
    'present' => ':attribute deve essere presente.',
    'prohibited' => ':attribute è proibito.',
    'prohibited_if' => ':attribute è proibito quando :other è :value.',
    'prohibited_unless' => ':attribute è proibito salvo che :other sia in :values.',
    'prohibits' => ':attribute proibisce che :other sia presente.',
    'regex' => 'Il formato di :attribute non è valido.',
    'required' => ':attribute è necessario.',
    'required_array_keys' => ':attribute deve contenere uno dei seguenti valori: :values.',
    'required_if' => ':attribute è necessario quando :other è :value.',
    'required_unless' => ':attribute è necessario salvo che :other sia in :values.',
    'required_with' => ':attribute è necessario quando :values è presente.',
    'required_with_all' => ':attribute è necessario quando :values sono presenti.',
    'required_without' => ':attribute è necessario quando :values non sono presenti.',
    'required_without_all' => ':attribute è necessario quando nessuno dei seguenti valori :values è presente.',
    'same' => ':attribute e :other devono corrispondere.',
    'size' => [
        'array' => ':attribute deve contenere :size oggetti.',
        'file' => ':attribute deve essere grande :size kilobyte.',
        'numeric' => ':attribute deve essere uguale a :size.',
        'string' => ':attribute deve avere un numero di caratteri uguale a :size.',
    ],
    'starts_with' => ':attribute deve iniziare con uno dei seguenti: :values.',
    'string' => ':attribute deve essere una stringa.',
    'timezone' => ':attribute deve essere un fuso orario valido.',
    'unique' => ':attribute è già stato utilizzato.',
    'uploaded' => 'L\'upload di :attribute è fallito.',
    'url' => ':attribute deve essere un URL valido.',
    'uuid' => ':attribute deve essere un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Messaggi di Errore di Validazione Personalizzati
    |--------------------------------------------------------------------------
    |
    | Di seguito è possibile specificare i messaggi di errore di validazione
    | personalizzati per quegli attributi che utilizzano la convenzione 
    |"attribute.rule" per dare un nome alla riga. Ciò rende più veloce specificare
    | un messaggio di errore personalizzato per una data "attribute.rule".
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributi di Validazione Personalizzati
    |--------------------------------------------------------------------------
    |
    | Le seguenti righe sono utilizzate per sostituire i nostri attributi standard
    | con alcuni che potrebbero risultare più facili da leggere come ad esempio
    | "E-Mail Address" al posto di "email". Ciò aiuta a rendere i nostri messaggi più espressivi
    |  e/o comprensibili.
    |
    */

    'attributes' => [],

];