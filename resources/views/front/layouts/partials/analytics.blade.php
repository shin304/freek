@if(app()->environment('production'))
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-57290920-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-57290920-1');
    </script>
@endif
