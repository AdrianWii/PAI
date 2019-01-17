<!DOCTYPE html>
<html>
<head>
    <?php include(dirname(__DIR__) . '/head.html'); ?>
</head>
<body>
<header>
    <div class="container">
        <div id="logo">
            <a href="?page=index"><img src="public/img/logo.png"> </a>
        </div>
        <div id="login">
            <a href="?page=login"><img src="public/img/login.png"></a>
        </div>
    </div>
    <?php include(dirname(__DIR__) . "/header.html"); ?>
</header>
<div class="asd">

</div>
</body>
</html>

<?= $products->getName(); ?>

<script>

    window.onload = function () {
        const $list = $('.asd');
        $.ajax({
            url: apiUrl + '/?page=products',
            dataType: 'json'
        })
            .done((res) => {
                $list.empty();
                res.forEach(el => {
                    $list.append(
                        "<tr>\n" +
                        "<td>${el.name}</td>\n" +
                        "</tr>"
                    );
                })

            }
    }

    // const apiUrl = 'http://localhost:63342';
    // const $list = $('.asd');
    // $.ajax({
    //     url: apiUrl + '/?page=products',
    //     dataType: 'json'
    // })
    //     .done((res) => {
    //         $list.empty();
    //         res.forEach(el => {
    //             $list.append(
    //                 "{el.name}"
    //             );
    //         })
    //
    //     }
</script>



