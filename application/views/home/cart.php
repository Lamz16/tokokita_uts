
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php foreach($cartItems as $item){ ?>
                        <tr>
                            <td class="align-middle"><img src="<?php echo base_url('assets/foto_produk/'.$item['image']);?>" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">Rp <?php echo $item['price'];?></td>
                            <td class="align-middle">
                                <?php echo $item['qty'];?>
                            </td>
                            <td class="align-middle">Rp <?php echo $item['price']*$item['qty'];?></td>
                            <td class="align-middle"><a href="<?php  echo site_url('main/delete_cart/'.$item['rowid']);?>"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a></td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><?php echo  $total;?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Dikirim dari</h6>
                            <h6 class="font-weight-medium">

                            <?php 
                                $this->load->helper('toko');
                                $city = getDetailCity($kota_asal);
                                echo $city['rajaongkir']['results']['city_name'].", ".$city['rajaongkir']['results']['province'];
                            ?> 
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Dikirim ke</h6>
                            <h6 class="font-weight-medium">
                            <?php 
                                $this->load->helper('toko');
                                $city = getDetailCity($kota_tujuan);
                                echo $city['rajaongkir']['results']['city_name'].", ".$city['rajaongkir']['results']['province'];
                            ?> 
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Kurir</h6>
                            <h6 class="font-weight-medium">JNE</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Biaya Kurir</h6>
                            <h6 class="font-weight-medium">
                            <?php 
                                $this->load->helper('toko');
                                $ongkir = getOngkir($kota_asal,$kota_tujuan,'1000','jne');
                                $ongkir_value = $ongkir['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
                                echo $ongkir['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
                            ?> 
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?php echo $total+$ongkir_value;?></h5>
                        </div>
                        <button id="pay-button" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="Mid-client-NgNLF0uK4KMwql5v"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">

$('#pay-button').click(function (event){
    event.preventDefault();
    $(this).attr("disabled","disabled");
 
 $.ajax({
    url: '<?= site_url()?>/main/proses_transaksi',
    cache: false,
    
    succes: function(data){
        console.log('token= '+data);

        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
        }

        snap.pay(data, {
            onSuccess: function(result){
                changeResult('succes',result);
                console.log(result.status_message);
                console.log(result);
                $("payment-form").submit();
            },
            onError:function(result){
                changeResult('error',result);
                console.log(result.status_message);
                $("payment-form").submit();
            }
        });
        }
        });
    });
    </script>
