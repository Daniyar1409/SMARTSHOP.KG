</main>
<!--/!start #main-site-->

<!--start #footer-->
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <a href="index.php"><h4 class="font-rubik font-size-20">SMARTPHONE.KG</h4></a>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit.
                    Nobis nulla dolore
                    magnam illo adipisci
                    enim.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Новостная рассылка</h4>
                <form action="index.php" method="post" class="form-row" style="display: flex; flex-direction: column;">
                    <?php
                    $userEmail = "";
                    if(isset($_POST['subscribe'])){
                        $userEmail = $_POST['email'];
                        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
                            $subject = "Спасибо за подписку на SMARTPHONE.KG!";
                            $body = "Спасибо, что Вы с нами! Вы будете получать самые свежие новости и анонсы от нас самым первым!\n\nНаши самые свежие новости здесь - \n\n С любовью, ваш SMARTSHOP.KG";
                            $sender = "From: kenjebekov.daniyar.1409@gmail.com";
                            if(mail($userEmail, $subject, $body, $sender)){
                                ?>
                                <div class="success" style="display: block">Спасибо за подписку!</div>
                                <?php
                                $userEmail = "";
                            }else{
                                ?>
                                <!-- error message in case of typing invalid email-->
                                <div class="error">Ошибка при отправке на почту!</div>
                                <?php
                            }
                        }else{
                            ?>
                            <!-- error message in case of typing invalid email-->
                            <div class="error"><?php echo $userEmail ?> - не существующая почта!</div>
                            <?php
                        }
                    }
                    ?>

                    <div class="col mb-2" style="width: 200px">
                        <input type="text" name="email" class="form-control" placeholder="Email *" required value="<?php echo $userEmail ?>">
                    </div>
                    <div class="col">
                        <button type="submit" name="subscribe" class="btn btn-primary mb-2" style="width: 200px">Подписаться</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Информация</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">О нас</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Доставка</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Политика Конфиденциальности</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Правила и условия</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Профиль</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Мой Профиль</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">История Заказов</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Список желаний</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Рассылка</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">&copy;Copyrights 2022 By <a href="#" class="color-secong">Kenjebekov
            Daniyar</a></p>
</div>
<!--/!start #footer-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

<!--Owl Carousel JS file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--isotope plugin cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Custom Javastript-->
<script src="index.js"></script>
</body>

</html>