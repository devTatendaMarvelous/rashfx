@extends('layouts.app')
@section('content')
          
			 
           
<!-- TradingView Widget BEGIN -->

  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 610,
  "symbol": "OANDA:BCOUSD",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "withdateranges": true,
  "range": "all",
  "allow_symbol_change": true,
  "save_image": false,
  "details": true,
  "hotlist": true,
  "calendar": true,
  "news": [
    "stocktwits",
    "headlines"
  ],
  "studies": [
    "BB@tv-basicstudies",
    "MACD@tv-basicstudies",
    "MF@tv-basicstudies"
  ],
  "container_id": "tradingview_f263f"
}
  );
  </script>

<!-- TradingView Widget END -->


@endsection