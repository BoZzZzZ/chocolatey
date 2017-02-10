<html class="gr__habbo_com_br"><head>
    <title>Congratulations!</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{$chocolatey['url']}}/habbo-web/assets/css/habbo.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Ubuntu:normal|Ubuntu+Condensed:normal" rel=stylesheet>
</head>
<body data-gr-c-s-loaded="true">
<div class="center">
    <img src="{{$chocolatey['url']}}/habbo-web/assets/images/credits_teaser_success.png" srcset="{{$chocolatey['url']}}/habbo-web/assets/images/credits_teaser_success.png 1x, {{$chocolatey['url']}}/habbo-web/assets/images/credits_teaser_success_big.png 2x" alt="Success" width="145" height="146">
    <h1>Congratulations!</h1>
    <p>Número do pedido: {{$checkoutId}}</p>
    <button onclick="window.close();">Ok</button>

    <script>
        window.opener.postMessage({ status: 'SUCCESS', txId: {{$checkoutId}}, priceInCents: 0, currency: '*' }, '*');
    </script>

</div>


</body></html>