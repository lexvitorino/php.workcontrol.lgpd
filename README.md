# php.workcontrol.lgpd
Destinado ao uso do LGPD

1 - a pasta lgpd deve ser baixada para o caminho
- _cdn\widgets

2 - estou deixando abaixo um css padrão para customização do layout do popup
* style.css

```sh
/**COOKIE POLICY*/
#cookiePolicy {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #fff;
    z-index: 6;
    box-shadow: 0 -1px 10px 0 rgba(172, 171, 171, 0.3);
}

#cookiePolicy .cookiePolicy_flex{
    display: flex;
    justify-content: space-between;
}

#cookiePolicy .left{
    flex-basis: 100%;
}

#cookiePolicy .rigth{
    flex-basis: 10%;
}

#cookiePolicy .container {
    padding: 20px 30px;
}

#cookiePolicy span {
    margin-top: 8px;
    font-size: 0.975em;
    font-weight: 300;
    display: block;
    margin-right: 12px;
}

#cookiePolicy span a {
    color: #FFF;
    font-weight: 400;
    text-decoration: none;
    transition-duration: 2ms;
}

#cookiePolicy span a:hover {
    text-decoration: underline;
}

#cookiePolicy .footer_optout_btn {
    padding: 12px 24px;
    font-size: 1.3em;
    font-weight: 600;
}

#cookiePolicy .cta {
    text-transform: none;
    background: #7BC200;
}
#cookiePolicy .cta:hover {
    text-transform: none;
    background: #578703;
}
```
  
3 - no seu thema, na pasta inc\footer.php

```sh
<?php
require '_cdn/widgets/lgpd/lgpd.wc.php';
?>
```
  
4 - no index.php geral, não do thema, o que fica na raiz do projeto. Inclua a linha abaixo

```sh
// LGPD
define("COOKIEPOLICY", filter_input(INPUT_COOKIE, "cookiePolicy", FILTER_SANITIZE_STRIPPED));
```
OBS.: No meu caso em produção não funcionou o uso de cookie, mas não removi do projeto, então estou utilizando o localstorage para o controle do cookie
      fica a seu critério remover a parte do cookie ou do localstorage
