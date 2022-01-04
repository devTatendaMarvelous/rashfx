@extends('layouts.app')
@section('content')
          
			 
            
<iframe src="https://trade.mql5.com/trade?servers=FXCM-USDReal05,FXCM-USDDemo02&amp;&amp;lang=en&amp;save_password=off" allowfullscreen="none" style="width: 100%; height: 695px; border: none;"></iframe>


            
             
                        						<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
<script>
function myFunction2() {
  var copyText = document.getElementById("myInput2");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
                                <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deposit Fund</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                            
                                                <p>                                               
                                                <div class="form-group">
						
                                                    <label for="example-text-input" class="col-form-label">Please Copy the Address </label>
                                        <label for="example-text-input" class"col-form-label">And send the amount you want to invest.</label></label>            
                                            <h7><br><p style="color:#FF0000";>Bitcoin </p><input class="float-center" type="text" value="1GranReYgRP1RSUXK7pFxDqoMyb4X6J7XH"  size="40" id="myInput" readonly>
<button class="btn btn-danger" onclick="return myFunction()"> Copy Wallet </button></h7>
											<center><img class="img-responsive" style="margin: auto" src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=1GranReYgRP1RSUXK7pFxDqoMyb4X6J7XH"></center>
											
											<h7><br> <p style="color:#FF0000";>Ethereum </p><input class="float-center" type="text" value="0x159c6DD2863CA1D48D0Fed9fBa9a2592547Bb36c"  size="40"  id="myInput2" readonly>
<button class="btn btn-danger" onclick="myFunction2()"> Copy Wallet </button></h7>
<center><img class="img-responsive" style="margin: auto" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=Ethereum:0x159c6DD2863CA1D48D0Fed9fBa9a2592547Bb36c"></center>
                                        </div>
										 <label for="example-text-input" class"col-form-label">Investment range from 150 USD to 50000 USD</label></label>  
                                         
                                                 </p>
                                            </div>
                                            <div class="modal-footer" id="response">
																	<script>
            $(document).ready(function(){
                $("#clkMe").click(function(){
                    var dataString={};
                    $.ajax({                                      
                        url:"../read-deposits.php",
                        type: 'POST',
                        cache:false,
                        data: dataString,
                        beforeSend: function() {},
                        timeout:10000,
                        error: function() { },     
                        success: function(response) {
                           $("#response").html(response);
                           alert("Analyzing ... If your deposit has been made, it will be credited to your account.");
                        } 
                    });
                });
            });
        </script>
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" id="clkMe"  name="depo" class="btn btn-flat btn-success btn-lg btn-block" >Deposited</button>    									 
                                           </div>
                                        </div>
                                    </div>
                                    
                                </div>
                           
                                          
                                         
                                                 </p>
                                            </div>
                                            <div class="modal-footer">
                                        
                                           </div></form>
                                        </div>
                                    </div>
                                    
                                </div>
                                                    
                                    
                   
                </div>
                <!-- overview area end -->
                <!-- market value area start -->
               
                <!-- market value area end -->
                <!-- row area start -->
              
                <!-- row area end -->
               
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        
           <!-- Large modal -->
                               
                                <div class="modal fade bd-example-modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Order</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                              
                                              <form method="post" action="">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Volume</label>
                        <input type="number" class="form-control"  name="amount" placeholder="Amount to buy" value="" step="any" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Type</label>
                        <select  class="form-control" name="type" >
                        <option value="Market Execution">Market Execution</option>
                        <option value="Pending Order">Pending Order</option>
                        </select>
                        <input type="hidden" name="ordertype" value="buy" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Symbol</label>
                        <select name="symbol" class="form-control" >
                        <option value="GBPUSD">GBPUSD, Great Britain Pound vs US Dollar</option>
                        <option value="CHFJPY">CHFJPY,Swiss Franc vs Japanise Yen </option>
                        <option value="EURAUD">EURAUD, Euro vs Australian Dollar</option>
                        <option value="EURCHF">EURCHF, Euro vs Swiss Franc</option>
                        <option value="EURUSD">EURUSD, Euro vs US Dollar</option>
                        <option value="EURGBP">EURGBP, Euro vs Great Britain </option>
                        <option value="GBPCAD">GBPCAD, Great Britain Pound vs Canadian Dollar</option>
                        <option value="GBPNZD">GBPNZD, Great Britain Pound vs New Zealand Dollar</option>
                        <option value="NZDJPY">NZDJPY, New Zealand vs Japanise Yen</option>
                        <option value="NZDUSD">NZDUSD, New Zealand vs US Dollar</option>
                        <option value="NZDCHF">NZDCHF, New Zealand vs Swiss France</option>
                        <option value="EURONZD">EURNZD, Euro vs New Zealand </option>
                        <option value="CADJPYm">CADJPYm, Canadian Dollar vs Japanise Yen</option>
                        <option value="AUDJPYm">AUDJPYm, Australian Dollar vs Japanise Yen</option>
                        <option value="USDCHF">USDCHF, US Dollar vs Swiss Franc</option>
                        <option value="GBPAUD">GBPAUD, Great Britain Pound vs Australian Dollar</option>
                        
                        <option value="USDTRY">USDTRY, US Dollar vs Turkish New Lira</option>
                        
                        <option value="USDTHB">USD vs THB</option>
                        
                        <option value="AUDUSD">AUD vs USD</option>
                        
                        <option value="CADJPY">CAD vs JPY</option>
                        
                        <option value="USDRUB">USDRUB, US Dollar vs Russian Ruble</option>
                        
                        <option value="EURCHF">EURCHF, Euro vs Swiss France</option>
                        
                        <option value="NZDCHF">NZDCHF, New Zealand Dollar vs Swiss France</option>
                        
                        <option value="XAUUSD">XAUUSD, Gold vs US Dollar</option>
                        <option value="NZDJPY">NZDJPY, New Zealand Dollar vs Japanise Yen</option>
                        
                        <option value="CADJPY">CAD vs JPY</option>
                        
                        
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Stop Loss</label>
                        <input type="number" name="sl" class="form-control"  min="0" value="0.0000" step="any"  required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Take Profit</label>
                        <input type="number" name="tp" class="form-control"  min="0" value="0.0000" step="any" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Comment</label>
                        <input type="text"  class="form-control" name="comment"  >
                      </div>
                    </div>
                  </div>
                  
                    
                    
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label></label>
                        <input type="submit" name="buy" class="btn btn-block btn-success btn-lg" value="Buy by Market">
                      </div>
                    </div>
                  </div>
                </form>    
                                              
                                              
                                              
                                                              
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Large modal modal end -->

@endsection