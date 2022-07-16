
const pattern = /\/payment\/(?<userId>[^&]+)/;
const href = window.location.href;
const desc = `Student Payment`;

Moyasar.init({
      
    element: '.mysr-form',

    // Required
    // Amount in the smallest currency unit
    // For example:
    // 10 SAR = 10 * 100 Halalas
    // 10 KWD = 10 * 1000 Fils
    // 10 JPY = 10 JPY (Japanese Yen does not have fractions)
    amount: 41500,

   
    currency: 'EGP',

  
    description: `${desc.padEnd(27, ' ')}&&${href.match(pattern).groups.userId}`,
    publishable_api_key: 'pk_test_Zfj3kX7i8z14WzMVkxPHKQM5gtBzs7hbjZ3H6srD' ,
    onCmpleted:  'https://fba5-102-184-210-201.eu.ngrok.io/moyasar/on-completed',
    callback_url: 'https://google.com',

    methods: [
        'creditcard',
    ],
});