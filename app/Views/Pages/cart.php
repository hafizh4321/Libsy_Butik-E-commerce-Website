    <?php $this->extend('Layout/Template'); ?>

    <?php $this->Section('content'); ?>

    <div class="small-container cart-page">
        <?php echo form_open('Pages/cartupdate'); ?>
        <table>
            <tr>
                <th>Product</th>
                <th>QTY</th>
                <th>Subtotal</th>
            </tr>
            <?php
            // $qty = 0;
            $i = 1;
            foreach ($cart->contents() as $items) : ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="/img/<?= $items['options']['gambar']; ?>">
                            <div>
                                <p><?= $items['name']; ?></p>
                                <small><?= number_to_currency($items['price'], 'IDR'); ?></small><br>
                                <small><?= $items['options']['size']; ?> || <?= $items['options']['warna']; ?></small>
                                <br>
                                <a href="/Pages/cartdelete/<?= $items['rowid']; ?>">Remove</a>
                            </div>
                        </div>

                    </td>
                    <td><input name="qty<?= $i++ ?>" min="1" max="15" onchange="myFunction(this.value)" type="number" value="<?= $items['qty']; ?>"></td>
                    <?php $qty = $items['options']['stok']; ?>
                    <script>
                        function myFunction(value) {
                            if (value > <?= $qty; ?>) {
                                alert("Stok Tidak mencukupi");
                            } 
                            
                        }
                    </script>
                    

                    <td><?= number_to_currency($items['subtotal'], 'IDR'); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>


        <div class="total-price">
            <table>
                <tr>
                    <Td>
                    <td>
                        <button type="submit" name="submit"></button>
                        <a href="/Pages/cartclear">CLEAR</a>
                    </td>
                    </td>
                    <!-- </Td> -->
                </tr>
                <tr>
                    <td>Ongkir</td>
                    <td><?= number_to_currency($cart->total() * 0.11, 'IDR'); ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?= number_to_currency($cart->total() + $cart->total() * 0.11, 'IDR'); ?></td>
                </tr>
                <tr>
                    
                </tr>

                <!-- <tr>
                    <td>Uang</td>
                    <td><input type="number" name="uang" min="1"></td>
                </tr> -->
            </table>
        </div>
        <?php echo form_close(); ?>
                       
                    

        <form action="/Pages/transaksisave" method="post">

            <input type="hidden" name="name" class="form-control" value="<?= user()->username; ?>" placeholder="Name" readonly>
            <?php if (!empty($cart->contents())) : ?>
                 <div class="form-group"><br>
                                    <!-- <label for="username">Bank</label><br> -->
                                    <!-- <input type="text" name="username" placeholder="" required class="form-control" /> -->
                                    <SELECT class="form-control">
                                    <option>BNI</option>
                                    <option>BCA</option>
                                    <option>MANDIRI</option>
                                    <option>BRI</option>
                                    <option>CityBank</option>
                                    <option>OCBC</option>
                                    <option>Mandiri Syariah</option>
                                    <option>BTN</option>
                                    </SELECT>
                                </div>
                 <div class="form-group">
                                    <!-- <label for="cardNumber">Alamat</label> -->
                                    <div class="input-group"><input type="text" name="alamat" placeholder="Alamat" class="form-control" required />
                                        <div class="input-group-append"><span class="input-group-text text-muted"><i class="fa fa-cc-visa mx-1"></i><i class="fa fa-cc-amex mx-1"></i><i class="fa fa-cc-mastercard mx-1"></i></span></div>
                                    </div>
                                </div>
                                 <div class="row"> 
                                     <div class="col-sm-4"> 
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title="Three-digits code on the back of your card">
                                                Due Date
                                                <i class="fa fa-question-circle"></i></label>
                                                <input type="text" readonly class="form-control" value="<?php echo date("d M Y", time() + (3600*24*2)); ?>" /></div><br>
                                    </div> 
                                </div> 

                <input type="hidden" name="id_barang" class="form-control" value="<?= $items['id']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="total_harga" class="form-control" value="<?= $cart->total() + $cart->total() * 0.11; ?>" placeholder="Name" readonly>
                <input type="hidden" name="nama_barang" class="form-control" value="<?= $items['name']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="warna_barang" class="form-control" value="<?= $items['options']['warna']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="size_barang" class="form-control" value="<?= $items['options']['size']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="qty" class="form-control" value="<?= $items['qty']; ?>" placeholder="Name" readonly>
                <!-- <img src="/img/gopay.png" style="width: 100px;">  <img src="/img/ovo.png" style="width: 100px;"> -->
                <button type="submit" class="btn">PROCEED TO CHECKOUT</button>

            <?php else : ?>
                <input type="hidden" name="id_barang" class="form-control" value="" placeholder="Name" readonly>
                <input type="hidden" name="total_barang" class="form-control" value="" placeholder="Name" readonly>
                <input type="hidden" name="nama_barang" class="form-control" value="" placeholder="Name" readonly>
                <input type="hidden" name="size_barang" class="form-control" value="" placeholder="Name" readonly>
                <input type="hidden" name="warna_barang" class="form-control" value="" placeholder="Name" readonly>
                <input type="hidden" name="qty" class="form-control" value="" placeholder="Name" readonly>
            <?php endif; ?>
            <!-- <button type="submit" class="btn">PROCEED TO CHECKOUT</button> -->
        </form>
    </div><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>




    <?php $this->endsection(); ?>