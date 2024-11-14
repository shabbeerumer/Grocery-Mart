{{-- 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="z single.css" />

</head>

<body> --}}

    <!-- heading -->
    {{-- <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <i class="fa-solid fa-user ms-5"></i>

            <a class="navbar-brand">
                <h1><b>Grocery Mart</b></h1>
            </a>

            <form class="d-flex">
                <i class="fa-solid fa-magnifying-glass me-5"></i>
                <i class="fa-solid fa-bag-shopping me-5"></i>
            </form>
        </div>
    </nav> --}}

    <!-- navber -->
        {{-- <nav class="navbar navbar-expand-lg" style="background-color: #121cac;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: rgb(255, 255, 255)" class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: rgb(255, 255, 255)" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a style="color: white" class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item e dropdown">
                            <a style="color: white" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PAGES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a style="color: white" class="nav-link" aria-disabled="true">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="f">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAA61JREFUWEftmFuopmMUx39/MY5NbkyOGWdhigy5GFG4cU5KMkqjwRQymuQ0FzSmJsUQmhJylohcOBeFCzQuJOUwOUvEBTnk0N+ztN7p8e73+7537/19u1FW7Yv9vms96/+u5//813o+sYWZtjA8/PcB2d4XWAFcCHwInCbpu3FVuneFbC8CbgFObCVfIWnDnAKyfRbwELB9R+LzJD0yJ4BsRwXXAldXCX8HtgK2zmeLJW2cK0C3AldUyV4CLgbeBHbJ5/Ml/TRxQLaDuHdViYI/qyTZ9lfA7vlunqQ/JgrI9uHAO7BZFjZICoD/mO1PgIX570JJn00a0NPAGZkkgB1TV8H2K8Dx+X6JpDcmBsj2EUVbgqRBaAMHSvq4Tmj7RmB1Plstac0kAQVvmu25W9JF7WS2Q4uC4GGxXfsEt8YBaoow2v4a2C0XXyTpvQ5AceSjanvnu1MkPTt2QKnG7zZfLqkh7pRctuP4Nwr9ERB69ONsQf2rQrbPAR7LRe+XdMGgBLbnAZuAPdMnKnTqbLeuDWhl9qvIsbacrOuGfbHtE4AXU7nD9Q7g8tmAagO6Cbg2QayUtH7UFti+DLi98nsGOFfSL6Niu963Aa0Cbk7HNZKaoz10bdsBKIA19k1pxOuCY5J+mw6wNqDzgQdygXslxczTy2xflSBq/+hxjwMhtMG3z4EdCk8PLs8PKfSYD0Se75ugNqDjigK/mi83Sdq/F5p0yjHltorofcI3Slo8CNC2pfSBdsd0OKCt0qMy5OlbnuJ66Ch/4EtJe3UCioe2nwLOTIf1kuLkzchsx0RwOnAkcFj+7dRabF3h2eZ5q0upYzp8MoNirDhIUnT3sZjtENsPiqyEjoVF2/l0YIWySm8BR6XT69HZy4n7axyIymhTTxLPSTq5XrdzyLe9BHitcrxT0qWzBWS7nkB/zXbz/khAWaUYKWqlDq25ciaVSqKHnERramyZpPvaHznwGlRmnhjknwdOqoJiMFtaRpKYCHqZ7f0KDx+tKBBxD5fTu7RrgaH3Mts7Ay8AR1fBUeobChmj+YYid5rtGE2WAdcA21ROL8fJkxTrTLGRF0XboU1xJzu7Iz6Gs5iXYuj/trSKXYE9ijLHTN7MVHXYPXFrGbbtIwEln8LvEuD66rbRa8vS6YuIldS0pYGxvQA10UnO2IbQqmOB7Yag+jnb0BPAg30Pw7QA1clzK4NbocYLgODbD0D88BAVeVvSn9MpY/jOGNB0E/X1/x/QqEr9DQRdJjRojjwSAAAAAElFTkSuQmCC" />
                    </div>
                </div>
            </div>
        </nav> --}}

      

  <!-- home link -->
  @extends('layout.layout')

  @section('content')

  {{-- <div class="a2">
    <div class="container">
        <div class="row">
            <h2 style="padding-bottom: 19rem;">Single</h2>
        </div>
    </div>
</div>  --}}
<div class="firstimage">
    <h2 style="padding-top: 40px;">Single</h2>
  </div>

  <div class="breadcrumb" style="padding-left: 46%;">
    <a href="index.html"> <b>Home</b> </a>&nbsp;&nbsp;&nbsp; <span> /&nbsp;&nbsp; Single</span>
  </div>


    <!-- image -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m1">
                <a href=""><img src="../images/pp4.png" alt=""></a>
            </div>



            
            <div class="col-lg-8 m2">
                <h2>Fortune Everyday Basmati Rice</h2>
                <div class="j2">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABJxJREFUWEfdl11oXEUUx8+Zm41LzN2ZbfNBPx5apFZp3/RBKvjVqsQgoS8++VFblYqiYktFKIIIKlUEi6hYrRX7IFgRES1Yil9PvhVroVhqLMSGZNPdObubGrK79+9OmZXbZbM32ZQanJd7uXfmnN/8z5kzM0xLrPES46H/H1BPT8+K7u7u7wBUa7XaveVyeXIxqi9aIa31u0T0mIc4ICJP/WdAvb29/V1dXaMAuh0EM89Wq9W15XI51ynUohQyxrwC4IW4c2Z+3Vr70lUH6uvrCyuVyp9EFDY5L4VhuHpsbOzvTqA6VsgY8xyAfd7pqIsYEa3xodttrd1/NYG6tNZniWiFd/o0ESkiakCMi8h1RFRdKFRHChljHgbwoVcjZ61d696NMS7B+/33HdbaT68GEBtjfgOwzjvbKyKXQqe1frEeupc90Blr7UYiwkKgmhVKZbPZW2q12iql1ACAASIaYGb3XAZgpXsHkPZOSqlUas3U1FTJK2QA/EFEvR5qBsAkM58nogsAcsw8QUS5KIomgyAYKxQKvxBRpQF9GZDW+igRbV7AjPaJyN54f631a0S0awE2jovIUEsgY8w5AI1ETbJ5KgiC2/P5fDHeMZvNagA/AbgxyYD/f05EGuG/fHPNZDLDzHyEiIKYsTeY+TSACQAFpVQulUpN5XK5cjuH/f39vbOzs/0uyYMguPQkoi0AHoiNu8jMI9baH1sq5D5mMpn7lFJHAHT5PPi9VqvdUSqVpuY545bdwjDcpJT6OlZILzDzkLX2RHxAy2XvoT4HkGpAVSqVzdPT0y4hF9yc8kqpzwBc4+2N18N6l4i4WnZZm7MOaa23MPNXDSgiGq1Wq7ctFMoY8xCAA75wOudngyC4O5/Pj7WaWdvCuFgorfVuIno15vhEFEVDpVLpwlwyJ1ZqrfU9LtFjteeYiAwnxc1Nhoi+jfX7IZ1Ob52YmJhuNzYRyA02xmyrF8UPvKFfReTmeQA9QUTv+Jw5ba29KV4AO1bIA+2qJ6QreK59JCJPJgGFYbheKXXS97soIq7azyaNm5dCWusviOh+P9vH65vpJ0mG3X+ttTsvrfR9h0XkWNK4eQEZY84D6HPGAGwoFotnGoYzmcyQUupN9yuKoj3FYvHfvDHGvF0vqA0194uIS/K2LREok8msY+ZT3kpJRJa798HBwWtnZmbeIqJHmzwcZubnrbXWwbrS4ZV1u/+GRQPVzziP+DriDvHfWGu3+qp7mIhWt3LgdnQA20TkZ2NMvnEJIKIbRMSdBuZsiQpprd8joh1+lu5Qr4nombhFZn7fh3Nnk6dDzHw9gE3++7Mi4ux1DmSMOQlgfWO1EFFPzNpfzLzdWvu9+2aMuRPAQSJaNYdyR621Ix0DhWG4XCk1PoeBg+l0eldzoWuTW5fubfXD/7J2y79tyLLZ7HAURV82ATnA7SJyvN1MtdabmfkQgMF4PwAjxWLRHQRbtrZATVcdZ+BjpdSeQqEgSavFh9Adad1KfLDRn5nbXpGSFNoI4CiACMDOdjNrB+iPMy7x3VXpVmvtuY4Umo8KV7pP4rK/0g6T7C05oH8AsYMDQyqCLl4AAAAASUVORK5CYII=" />
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABJxJREFUWEfdl11oXEUUx8+Zm41LzN2ZbfNBPx5apFZp3/RBKvjVqsQgoS8++VFblYqiYktFKIIIKlUEi6hYrRX7IFgRES1Yil9PvhVroVhqLMSGZNPdObubGrK79+9OmZXbZbM32ZQanJd7uXfmnN/8z5kzM0xLrPES46H/H1BPT8+K7u7u7wBUa7XaveVyeXIxqi9aIa31u0T0mIc4ICJP/WdAvb29/V1dXaMAuh0EM89Wq9W15XI51ynUohQyxrwC4IW4c2Z+3Vr70lUH6uvrCyuVyp9EFDY5L4VhuHpsbOzvTqA6VsgY8xyAfd7pqIsYEa3xodttrd1/NYG6tNZniWiFd/o0ESkiakCMi8h1RFRdKFRHChljHgbwoVcjZ61d696NMS7B+/33HdbaT68GEBtjfgOwzjvbKyKXQqe1frEeupc90Blr7UYiwkKgmhVKZbPZW2q12iql1ACAASIaYGb3XAZgpXsHkPZOSqlUas3U1FTJK2QA/EFEvR5qBsAkM58nogsAcsw8QUS5KIomgyAYKxQKvxBRpQF9GZDW+igRbV7AjPaJyN54f631a0S0awE2jovIUEsgY8w5AI1ETbJ5KgiC2/P5fDHeMZvNagA/AbgxyYD/f05EGuG/fHPNZDLDzHyEiIKYsTeY+TSACQAFpVQulUpN5XK5cjuH/f39vbOzs/0uyYMguPQkoi0AHoiNu8jMI9baH1sq5D5mMpn7lFJHAHT5PPi9VqvdUSqVpuY545bdwjDcpJT6OlZILzDzkLX2RHxAy2XvoT4HkGpAVSqVzdPT0y4hF9yc8kqpzwBc4+2N18N6l4i4WnZZm7MOaa23MPNXDSgiGq1Wq7ctFMoY8xCAA75wOudngyC4O5/Pj7WaWdvCuFgorfVuIno15vhEFEVDpVLpwlwyJ1ZqrfU9LtFjteeYiAwnxc1Nhoi+jfX7IZ1Ob52YmJhuNzYRyA02xmyrF8UPvKFfReTmeQA9QUTv+Jw5ba29KV4AO1bIA+2qJ6QreK59JCJPJgGFYbheKXXS97soIq7azyaNm5dCWusviOh+P9vH65vpJ0mG3X+ttTsvrfR9h0XkWNK4eQEZY84D6HPGAGwoFotnGoYzmcyQUupN9yuKoj3FYvHfvDHGvF0vqA0194uIS/K2LREok8msY+ZT3kpJRJa798HBwWtnZmbeIqJHmzwcZubnrbXWwbrS4ZV1u/+GRQPVzziP+DriDvHfWGu3+qp7mIhWt3LgdnQA20TkZ2NMvnEJIKIbRMSdBuZsiQpprd8joh1+lu5Qr4nombhFZn7fh3Nnk6dDzHw9gE3++7Mi4ux1DmSMOQlgfWO1EFFPzNpfzLzdWvu9+2aMuRPAQSJaNYdyR621Ix0DhWG4XCk1PoeBg+l0eldzoWuTW5fubfXD/7J2y79tyLLZ7HAURV82ATnA7SJyvN1MtdabmfkQgMF4PwAjxWLRHQRbtrZATVcdZ+BjpdSeQqEgSavFh9Adad1KfLDRn5nbXpGSFNoI4CiACMDOdjNrB+iPMy7x3VXpVmvtuY4Umo8KV7pP4rK/0g6T7C05oH8AsYMDQyqCLl4AAAAASUVORK5CYII=" />
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABJxJREFUWEfdl11oXEUUx8+Zm41LzN2ZbfNBPx5apFZp3/RBKvjVqsQgoS8++VFblYqiYktFKIIIKlUEi6hYrRX7IFgRES1Yil9PvhVroVhqLMSGZNPdObubGrK79+9OmZXbZbM32ZQanJd7uXfmnN/8z5kzM0xLrPES46H/H1BPT8+K7u7u7wBUa7XaveVyeXIxqi9aIa31u0T0mIc4ICJP/WdAvb29/V1dXaMAuh0EM89Wq9W15XI51ynUohQyxrwC4IW4c2Z+3Vr70lUH6uvrCyuVyp9EFDY5L4VhuHpsbOzvTqA6VsgY8xyAfd7pqIsYEa3xodttrd1/NYG6tNZniWiFd/o0ESkiakCMi8h1RFRdKFRHChljHgbwoVcjZ61d696NMS7B+/33HdbaT68GEBtjfgOwzjvbKyKXQqe1frEeupc90Blr7UYiwkKgmhVKZbPZW2q12iql1ACAASIaYGb3XAZgpXsHkPZOSqlUas3U1FTJK2QA/EFEvR5qBsAkM58nogsAcsw8QUS5KIomgyAYKxQKvxBRpQF9GZDW+igRbV7AjPaJyN54f631a0S0awE2jovIUEsgY8w5AI1ETbJ5KgiC2/P5fDHeMZvNagA/AbgxyYD/f05EGuG/fHPNZDLDzHyEiIKYsTeY+TSACQAFpVQulUpN5XK5cjuH/f39vbOzs/0uyYMguPQkoi0AHoiNu8jMI9baH1sq5D5mMpn7lFJHAHT5PPi9VqvdUSqVpuY545bdwjDcpJT6OlZILzDzkLX2RHxAy2XvoT4HkGpAVSqVzdPT0y4hF9yc8kqpzwBc4+2N18N6l4i4WnZZm7MOaa23MPNXDSgiGq1Wq7ctFMoY8xCAA75wOudngyC4O5/Pj7WaWdvCuFgorfVuIno15vhEFEVDpVLpwlwyJ1ZqrfU9LtFjteeYiAwnxc1Nhoi+jfX7IZ1Ob52YmJhuNzYRyA02xmyrF8UPvKFfReTmeQA9QUTv+Jw5ba29KV4AO1bIA+2qJ6QreK59JCJPJgGFYbheKXXS97soIq7azyaNm5dCWusviOh+P9vH65vpJ0mG3X+ttTsvrfR9h0XkWNK4eQEZY84D6HPGAGwoFotnGoYzmcyQUupN9yuKoj3FYvHfvDHGvF0vqA0194uIS/K2LREok8msY+ZT3kpJRJa798HBwWtnZmbeIqJHmzwcZubnrbXWwbrS4ZV1u/+GRQPVzziP+DriDvHfWGu3+qp7mIhWt3LgdnQA20TkZ2NMvnEJIKIbRMSdBuZsiQpprd8joh1+lu5Qr4nombhFZn7fh3Nnk6dDzHw9gE3++7Mi4ux1DmSMOQlgfWO1EFFPzNpfzLzdWvu9+2aMuRPAQSJaNYdyR621Ix0DhWG4XCk1PoeBg+l0eldzoWuTW5fubfXD/7J2y79tyLLZ7HAURV82ATnA7SJyvN1MtdabmfkQgMF4PwAjxWLRHQRbtrZATVcdZ+BjpdSeQqEgSavFh9Adad1KfLDRn5nbXpGSFNoI4CiACMDOdjNrB+iPMy7x3VXpVmvtuY4Umo8KV7pP4rK/0g6T7C05oH8AsYMDQyqCLl4AAAAASUVORK5CYII=" />
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABJxJREFUWEfdl11oXEUUx8+Zm41LzN2ZbfNBPx5apFZp3/RBKvjVqsQgoS8++VFblYqiYktFKIIIKlUEi6hYrRX7IFgRES1Yil9PvhVroVhqLMSGZNPdObubGrK79+9OmZXbZbM32ZQanJd7uXfmnN/8z5kzM0xLrPES46H/H1BPT8+K7u7u7wBUa7XaveVyeXIxqi9aIa31u0T0mIc4ICJP/WdAvb29/V1dXaMAuh0EM89Wq9W15XI51ynUohQyxrwC4IW4c2Z+3Vr70lUH6uvrCyuVyp9EFDY5L4VhuHpsbOzvTqA6VsgY8xyAfd7pqIsYEa3xodttrd1/NYG6tNZniWiFd/o0ESkiakCMi8h1RFRdKFRHChljHgbwoVcjZ61d696NMS7B+/33HdbaT68GEBtjfgOwzjvbKyKXQqe1frEeupc90Blr7UYiwkKgmhVKZbPZW2q12iql1ACAASIaYGb3XAZgpXsHkPZOSqlUas3U1FTJK2QA/EFEvR5qBsAkM58nogsAcsw8QUS5KIomgyAYKxQKvxBRpQF9GZDW+igRbV7AjPaJyN54f631a0S0awE2jovIUEsgY8w5AI1ETbJ5KgiC2/P5fDHeMZvNagA/AbgxyYD/f05EGuG/fHPNZDLDzHyEiIKYsTeY+TSACQAFpVQulUpN5XK5cjuH/f39vbOzs/0uyYMguPQkoi0AHoiNu8jMI9baH1sq5D5mMpn7lFJHAHT5PPi9VqvdUSqVpuY545bdwjDcpJT6OlZILzDzkLX2RHxAy2XvoT4HkGpAVSqVzdPT0y4hF9yc8kqpzwBc4+2N18N6l4i4WnZZm7MOaa23MPNXDSgiGq1Wq7ctFMoY8xCAA75wOudngyC4O5/Pj7WaWdvCuFgorfVuIno15vhEFEVDpVLpwlwyJ1ZqrfU9LtFjteeYiAwnxc1Nhoi+jfX7IZ1Ob52YmJhuNzYRyA02xmyrF8UPvKFfReTmeQA9QUTv+Jw5ba29KV4AO1bIA+2qJ6QreK59JCJPJgGFYbheKXXS97soIq7azyaNm5dCWusviOh+P9vH65vpJ0mG3X+ttTsvrfR9h0XkWNK4eQEZY84D6HPGAGwoFotnGoYzmcyQUupN9yuKoj3FYvHfvDHGvF0vqA0194uIS/K2LREok8msY+ZT3kpJRJa798HBwWtnZmbeIqJHmzwcZubnrbXWwbrS4ZV1u/+GRQPVzziP+DriDvHfWGu3+qp7mIhWt3LgdnQA20TkZ2NMvnEJIKIbRMSdBuZsiQpprd8joh1+lu5Qr4nombhFZn7fh3Nnk6dDzHw9gE3++7Mi4ux1DmSMOQlgfWO1EFFPzNpfzLzdWvu9+2aMuRPAQSJaNYdyR621Ix0DhWG4XCk1PoeBg+l0eldzoWuTW5fubfXD/7J2y79tyLLZ7HAURV82ATnA7SJyvN1MtdabmfkQgMF4PwAjxWLRHQRbtrZATVcdZ+BjpdSeQqEgSavFh9Adad1KfLDRn5nbXpGSFNoI4CiACMDOdjNrB+iPMy7x3VXpVmvtuY4Umo8KV7pP4rK/0g6T7C05oH8AsYMDQyqCLl4AAAAASUVORK5CYII=" />
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAABJxJREFUWEfdl11oXEUUx8+Zm41LzN2ZbfNBPx5apFZp3/RBKvjVqsQgoS8++VFblYqiYktFKIIIKlUEi6hYrRX7IFgRES1Yil9PvhVroVhqLMSGZNPdObubGrK79+9OmZXbZbM32ZQanJd7uXfmnN/8z5kzM0xLrPES46H/H1BPT8+K7u7u7wBUa7XaveVyeXIxqi9aIa31u0T0mIc4ICJP/WdAvb29/V1dXaMAuh0EM89Wq9W15XI51ynUohQyxrwC4IW4c2Z+3Vr70lUH6uvrCyuVyp9EFDY5L4VhuHpsbOzvTqA6VsgY8xyAfd7pqIsYEa3xodttrd1/NYG6tNZniWiFd/o0ESkiakCMi8h1RFRdKFRHChljHgbwoVcjZ61d696NMS7B+/33HdbaT68GEBtjfgOwzjvbKyKXQqe1frEeupc90Blr7UYiwkKgmhVKZbPZW2q12iql1ACAASIaYGb3XAZgpXsHkPZOSqlUas3U1FTJK2QA/EFEvR5qBsAkM58nogsAcsw8QUS5KIomgyAYKxQKvxBRpQF9GZDW+igRbV7AjPaJyN54f631a0S0awE2jovIUEsgY8w5AI1ETbJ5KgiC2/P5fDHeMZvNagA/AbgxyYD/f05EGuG/fHPNZDLDzHyEiIKYsTeY+TSACQAFpVQulUpN5XK5cjuH/f39vbOzs/0uyYMguPQkoi0AHoiNu8jMI9baH1sq5D5mMpn7lFJHAHT5PPi9VqvdUSqVpuY545bdwjDcpJT6OlZILzDzkLX2RHxAy2XvoT4HkGpAVSqVzdPT0y4hF9yc8kqpzwBc4+2N18N6l4i4WnZZm7MOaa23MPNXDSgiGq1Wq7ctFMoY8xCAA75wOudngyC4O5/Pj7WaWdvCuFgorfVuIno15vhEFEVDpVLpwlwyJ1ZqrfU9LtFjteeYiAwnxc1Nhoi+jfX7IZ1Ob52YmJhuNzYRyA02xmyrF8UPvKFfReTmeQA9QUTv+Jw5ba29KV4AO1bIA+2qJ6QreK59JCJPJgGFYbheKXXS97soIq7azyaNm5dCWusviOh+P9vH65vpJ0mG3X+ttTsvrfR9h0XkWNK4eQEZY84D6HPGAGwoFotnGoYzmcyQUupN9yuKoj3FYvHfvDHGvF0vqA0194uIS/K2LREok8msY+ZT3kpJRJa798HBwWtnZmbeIqJHmzwcZubnrbXWwbrS4ZV1u/+GRQPVzziP+DriDvHfWGu3+qp7mIhWt3LgdnQA20TkZ2NMvnEJIKIbRMSdBuZsiQpprd8joh1+lu5Qr4nombhFZn7fh3Nnk6dDzHw9gE3++7Mi4ux1DmSMOQlgfWO1EFFPzNpfzLzdWvu9+2aMuRPAQSJaNYdyR621Ix0DhWG4XCk1PoeBg+l0eldzoWuTW5fubfXD/7J2y79tyLLZ7HAURV82ATnA7SJyvN1MtdabmfkQgMF4PwAjxWLRHQRbtrZATVcdZ+BjpdSeQqEgSavFh9Adad1KfLDRn5nbXpGSFNoI4CiACMDOdjNrB+iPMy7x3VXpVmvtuY4Umo8KV7pP4rK/0g6T7C05oH8AsYMDQyqCLl4AAAAASUVORK5CYII=" />
                </div>
                <p style="color: #0011ff;"><b>Description</b></p>
                <p style="color: rgb(183, 176, 176);">Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                    sequi nesciunt.</p>
                <br>

                <h6 style="color: #0a15ab;">QUALITY :</h6><br>

                <style>
                    .quantity-select {
                        display: flex;
                        align-items: center;
                    }

                    .entry {
                        cursor: pointer;
                        padding: 10px;
                        border: 1px solid #ccc;
                        margin: 0 5px;
                    }

                    .active {
                        /* background-color: #1e04b0; */
                        color: rgb(227, 203, 203);
                    }
                </style>
                </head>

                <body>

                    <div class="quantity-select">
                        <div class="entry value-minus1" onclick="changeQuantity(-1)" style="border-radius: 5px 5px 5px 5px;">&nbsp;-</div>
                        <div class="entry value1" style="border-radius: 5px 5px 5px 5px;"><span id="quantity">1</span></div>
                        <div class="entry value-plus1 active" onclick="changeQuantity(1)"style="border-radius: 5px 5px 5px 5px;">&nbsp;+</div>
                    </div><br>
                    <h4>Quantity:</h4>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">5 kg</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">10 kg</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">25 kg</label>
                      </div>


<br><br>


                      <p><span><del style="color: #aeaeae;">$460</del></span> <i class="item_price" style="font-size: 20px;"><b>&nbsp;&nbsp;$450</b></i></p>

                      <button type="button" class="btn btn-outline-primary">Add to Cart</button>


                    <script>

                        let quantity = 1;

                        function changeQuantity(amount) {
                            quantity += amount;
                            if (quantity < 1) quantity = 1; // Prevent negative quantity
                            document.getElementById('quantity').innerText = quantity;
                        }
                    </script>
            </div>
        </div>

<div class="col-md-6 w3agile_newsletter_right">
    <div class="clearfix"> </div>
				</div>

<br><br>

                {{-- <div class="newsletter">
                    <div class="container-fluid">
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <h3 style="color: aliceblue;">Newsletter</h3>
                          <p style="color: aliceblue;">Excepteur sint occaecat cupidatat non proident, sunt.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <form action="#" method="post">
                            <input type="email" name="Email" placeholder="Email" required="" class="newsletter-input">
                            <button type="submit" class="btn btn-style"><span class="fas fa-paper-plane"></span></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  <div class="newsletter">
                    <div class="container-fluid">
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <h3 style="color: aliceblue;">Newsletter</h3>
                          <p style="color: aliceblue;">Excepteur sint occaecat cupidatat non proident, sunt.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <form action="#" method="post">
                            <input type="email" name="Email" placeholder="Email" required="" class="newsletter-input">
                            <button type="submit" class="btn btn-style"><span class="fas fa-paper-plane"></span></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
        <br><br><br><br>
<!-- top header? -->



  @endsection


      

            <!-- footer? -->
            {{-- <div class="container py-4">
                <div class="row w3_footer_grids">
                  <!-- Contact Section -->
                  <div class="col-md-3 w3_footer_grid">
                    <h2>Contact</h2><br><br>
                    <ul class="address">
                      <li><i class="fas fa-map-marker-alt"></i>London, 235 Terry, 10001</li><br>
                      <li><i class="fas fa-envelope-open-text"></i><a href="mailto:info@example.com">info@example.com</a></li><br>
                      <li><a href="tel:+44-000-888-999"><i class="fas fa-phone-alt"></i>+44-000-888-999</a></li>
                    </ul>
                  </div>
            
                  <!-- Information Section -->
                  <div class="col-md-3 w3_footer_grid">
                    <h2>Information</h2><br><br>
                    <ul class="info">
                      <li><a href="about.html"><i class="fas fa-angle-right"></i>About Us</a></li>
                      <li><a href="mail.html"><i class="fas fa-angle-right"></i>Contact Us</a></li>
                      <li><a href="codes.html"><i class="fas fa-angle-right"></i>Shortcodes</a></li>
                      <li><a href="faq.html"><i class="fas fa-angle-right"></i>FAQ's</a></li>
                      <li><a href="products1.html"><i class="fas fa-angle-right"></i>Special Products</a></li>
                    </ul>
                  </div>
            
                  <!-- Category Section -->
                  <div class="col-md-3 w3_footer_grid">
                    <h2>Category</h2><br><br>
                    <ul class="info">
                      <li><a href="products1.html"><i class="fas fa-angle-right"></i>Fruits &amp; Vegetables</a></li>
                      <li><a href="products2.html"><i class="fas fa-angle-right"></i>Meats &amp; Seafood</a></li>
                      <li><a href="products1.html"><i class="fas fa-angle-right"></i>Bakery &amp; Pastry</a></li>
                      <li><a href="products2.html"><i class="fas fa-angle-right"></i>Beverages</a></li>
                      <li><a href="products1.html"><i class="fas fa-angle-right"></i>Breakfast &amp; Dairy</a></li>
                    </ul>
                  </div>
            
                  <!-- Profile and Social Media Section -->
                  <div class="col-md-3 w3_footer_grid">
                    <h2>Profile</h2><br><br>
                    <ul class="info">
                      <li><a href="index.html"><i class="fas fa-angle-right"></i>Home</a></li>
                      <li><a href="products2.html"><i class="fas fa-angle-right"></i>Today's Deals</a></li>
                    </ul><br>
                    <h4>Follow Us</h4>
                    <div class="agileits_social_button">
                      <ul class="social-icons">
                        <li><a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#google" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#pinterest" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                 <br><br><br>
                  <hr style="color:rgb(199, 197, 197); margin-bottom: 30px;">
                  <br><br>
                  <div class="z">
                    <p style="text-align: center;">© 2021 Grocery Mart. All rights reserved. Design by <a href=""
                        style="text-decoration: none; color:rgb(1, 1, 133);">W3Layouts</a></p>
                  </div>
            
                </div>
              </div> --}}


        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/brands.min.js"
            integrity="sha512-N5K6sQXjzT79tR16zvBu7B0AqvYtHKvk3+eKuQWoVNQDGU5kR9W8OP3CTYtm3vVM2EtObrmtm0Jup17F718OyA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html> --}}