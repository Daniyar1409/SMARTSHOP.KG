<!--Product-->
<?php
    $item_id = $_GET['item_id']??1;
    foreach ($product->getData() as $item):
        if($item['item_id'] == $item_id):

        //reqest method post
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['product_submit'])){
                //call method add to cart
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
?>
  <section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col" style="margin-right: 30px;">
                        <button type="submit" class="btn btn-danger form-control">Купить</button>
                    </div>
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control font-size-16">Добавлено в Корзину</button>';
                            }else{
                                echo '<button type="submit" name="product_submit" class="btn btn-warning form-control font-size-16">В Корзину</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" col-sm-6 py-5">
                <h5 class="font-rubik font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                <small><?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20.534 голосов | 1000+ отзывов</a>
                </div>
                <hr class="m-0">

                <!--Product price-->
                <table class="my-3">
                    <tr class="font-rale font-size-20">
                        <td>Цена:</td>
                        <td class="font-rale font-size-20 text-danger">
                            <span><?php echo $item['item_price'] ?? 0 ?></span> сом
                            <small class="text-dark font-size-12">&nbsp;&nbsp;с учётом ндс</small>
                        </td>
                    </tr>
                </table>
                <!--/!Product price-->

                <!--Policy-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secong">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">7 дней<br>на Возврат</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secong">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Доставка<br>В регионы</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secong">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 год<br>Гарантии</a>
                        </div>
                    </div>
                </div>
                <!--/!Policy-->
                <hr>
                <!--Order details-->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Примерные сроки доставки: Февраль 22 - Февраль 24</small>
                    <small>Продается компанией <a href="#">Doni Electronics</a>(4.5 из 5 | 18,192
                        голосов)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Доставка
                        пользователю - 424201</small>
                </div>
                <!--/!Order details-->

                <div class="row">
                    <div class="col-6">
                        <!--color-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Цвет:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button
                                        class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-primary-bg rounded-circle"><button
                                        class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-secong-bg rounded-circle"><button
                                        class="btn font-size-14"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <!--product qty section-->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Кол-во:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i
                                        class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"
                                       style="max-width: 5rem;" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i
                                        class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!--/!product qty section-->
                    </div>
                </div>

                <!--size-->
                <div class="size my-3">
                    <h6 class="font-baloo">Оперативная память:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!--/!size-->
            </div>

            <div class="col-12">
                <h6 class="font-rubik font-size-20" style=" margin-top: 5rem">Описание</h6>
                <hr>
                <p class="font-rale font-size-14">Экран
                    Диагональ: 6.53"
                    Разрешение: 1080x2340 px, FHD+
                    Тип матрицы: LTPS LCD
                    Защитное стекло Corning Gorilla Glass 3
                    <br>
                    <br>
                    Параметры
                    Процессор: Qualcomm Snapdragon 662, Octa-Core 4x Kryo 260 2.0 GHz + 4x Kryo 260 1.8 GHz
                    Графический процессор: GPU Qualcomm Adreno 610
                    Оперативная память: 4 GB (LPDDR4X RAM)
                    Основная память: 128 (UFS Storage 2.2)
                    <br>
                    <br>
                    Камера
                    Основная: Samsung S5KGM1 - 48 Mpx
                    Широкоугольный объектив: Omnivision OV8856 - 8 Mpx
                    Портретный режим: 2 Mpx
                    Макро объектив: 2 Mpx
                    Селфи: 8 Mpx
                    <br>
                    <br>
                    Коммуникации: Wi-Fi 802.11 a/b/g/n/ac , Bluetooth 5.0, GPS/AGPS/GLONASS
                    Платформа: Android 10(Q)
                    Аккумулятор: 6000 мАч
                    Прочее: Сканер отпечатков пальцев, Акселерометр, Датчики приближения и освещения
                    Тип USB: USB Type-C
                </p>
            </div>
        </div>
    </div>
</section>
<!--/!Product-->
<?php
    endif;
    endforeach;
?>

