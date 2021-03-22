<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	

	<style>
		body {
    margin: 0;
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #eee
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .1875rem
}

.card-img-actions {
    position: relative
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center
}

.card-title {
    margin-top: 10px;
    font-size: 17px;
    margin-left: 44%;
}

.invoice-color {
    color: red !important
}

.card-header {
    padding: .9375rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, .02);
    border-bottom: 1px solid rgba(0, 0, 0, .125)
}

a {
    text-decoration: none !important
}

.btn-light {
    color: #333;
    background-color: #fafafa;
    border-color: #ddd
}

.header-elements-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

@media (min-width: 768px) {
    .wmin-md-400 {
        min-width: 400px !important
    }
}
.logo{

    vertical-align: middle;
    border-style: none;
    /* width: 40px; */
    position: absolute;
    width: 137px;
    height: 72px;

}
.btn-primary {
    color: #fff;
    background-color: #2196f3
}

.btn-labeled>b {
    position: absolute;
    top: -1px;
    background-color: blue;
    display: block;
    line-height: 1;
    padding: .62503rem
}
	</style>
</head>
<body>
<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            	<div ><img src="assets/kagaz.png" class="logo"></div>
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">Sale invoice</h6>
                    <div class="header-elements"> <button type="button" class="btn btn-light btn-sm"><i class="fa fa-file mr-2"></i> Save</button> <button type="button" class="btn btn-light btn-sm ml-3"><i class="fa fa-print mr-2"></i> Print</button> </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4 pull-left">
                                <h6>Kagaz Creation</h6>
                                <ul class="list list-unstyled mb-0 text-left">
                                    <li>Plot no.362,
                                    Karnal	</li>
                                    <li>Haryana,India</li>
                                    <li>---------- </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4 ">
                                <div class="text-sm-right">
                                    <h4 class="invoice-color mb-2 mt-md-2">Invoice #BBB1243</h4>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Date: <span class="font-weight-semibold">March 15, 2020</span></li>
                                        <li>Due date: <span class="font-weight-semibold">March 30, 2020</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex flex-md-wrap">
                        <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Invoice To:</span>
                            <ul class="list list-unstyled mb-0">
                                <li>
                                    <h5 class="my-2">Gayatri Associated</h5>
                                </li>
                                <li><span class="font-weight-semibold">Gayatri Associated ltd.</span></li>
                                <li>Haryana 06</li>
                                <li>India</li>
                                <li>0jcnisujjshjjj</li>
                                <li><a href="#" data-abc="true">Gayatri@associated.com</a></li>
                            </ul>
                        </div>
                        <div class="mb-2 ml-auto"> <span class="text-muted">Company Bank Details:</span>
                            <div class="d-flex flex-wrap wmin-md-400">
                                <ul class="list list-unstyled mb-0 text-left font-weight-bold">
                                    <li>
                                        <h5 class="my-2">Total Due:</h5>
                                    </li>
                                    <li>Bank name:</li>
                                    <li>A/C No:</li>
                                    <li>Branch:</li>
                                    <li>IFSC Code:</li>
                                    
                                </ul>
                                <ul class="list list-unstyled text-right mb-0 ml-auto font-weight-bold">
                                    <li>
                                        <h5 class="font-weight-semibold my-2">$1,090</h5>
                                    </li>
                                    <li><span class="font-weight-semibold">State Bank Of India</span></li>
                                    <li>35730651486</li>
                                    <li>Namastey Chownk, Karnal</li>
                                    <li>SBIN0011979</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                            	<th>S.I</th>
                                <th>Description of goods</th>
                                <th>HSN/SAC</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Per</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                         <script>


function Calculate()
{
var Quantity = document.getElementById('Quantity').value;
var Rate = document.getElementById('Rate').value; 
var x=parseInt(Quantity) * parseInt(Rate);
alert(x);
   }
 </script>
                        <tbody>
                            <tr>
                            	<td>
                                   1
                                </td>

                                <td>
                                    <b><div contenteditable="true" >Sugar</div></b>
                                </td>
                                <td>  <input type="text" class="form-control" id="HSN"></td>
                                <td>  <input type="number" value="1" class="form-control" id="Quantity"></td>
                                <td>  <input type="text" value="1" class="form-control" id="Rate" onblur="calculate()" ></td>
                                <td>  <input type="text " class="form-control" id="Per"></td>
                                <td>  <input type="text" class="form-control" id="Amount"></td>
                            </tr>
                           
                         
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <div class="d-md-flex flex-md-wrap">
                        <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                            <h6 class="mb-3 text-left">Total due</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="text-left">Subtotal:</th>
                                            <td class="text-right">$1,090</td>
                                        </tr>
                                        <tr>
                                            <th class="text-left">Tax: <span class="font-weight-normal">(25%)</span></th>
                                            <td class="text-right">$27</td>
                                        </tr>
                                        <tr>
                                            <th class="text-left">Total:</th>
                                            <td class="text-right text-primary">
                                                <h5 class="font-weight-semibold">$1,160</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="card-footer"> <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit</span> </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>