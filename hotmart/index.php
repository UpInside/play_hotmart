<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Teste HotMart</title>
    <link rel="stylesheet" href="_cdn/css/style.css">
</head>
<body>

<div class="container">
    <div class="content">

        <form action="https://localhost/play/hotmart/hotmart.php" method="post">

            <section class="item">
                <h1>Hotmart</h1>

                <div class="item_content">
                    <article class="group">
                        <h2>hottok</h2>
                        <input type="text" name="hottok" placeholder="hottok" value="abc123"/>
                    </article>

                    <article class="group">
                        <h2>cms_marketplace</h2>
                        <input type="text" name="cms_marketplace" placeholder="cms_marketplace" value="30.00"/>
                    </article>

                    <article class="group">
                        <h2>cms_vendor</h2>
                        <input type="text" name="cms_vendor" placeholder="cms_vendor" value="350.00"/>
                    </article>

                    <article class="group">
                        <h2>callback_type</h2>
                        <input type="text" name="callback_type" placeholder="callback_type" value="1"/>
                    </article>
                </div>
            </section>

            <section class="item">
                <h1>Cliente</h1>

                <div class="item_content">
                    <article class="group">
                        <h2>email</h2>
                        <input type="text" name="email" placeholder="email" value="gustavo@upinside.com"/>
                    </article>

                    <article class="group">
                        <h2>name</h2>
                        <input type="text" name="name" placeholder="name" value="Gustavo Web"/>
                    </article>

                    <article class="group">
                        <h2>first_name</h2>
                        <input type="text" name="first_name" placeholder="first_name" value="Gustavo"/>
                    </article>

                    <article class="group">
                        <h2>last_name</h2>
                        <input type="text" name="last_name" placeholder="last_name" value="Web"/>
                    </article>

                    <article class="group">
                        <h2>doc</h2>
                        <input type="text" name="doc" placeholder="doc" value="43506637207"/>
                    </article>

                    <article class="group">
                        <h2>phone_local_code</h2>
                        <input type="text" name="phone_local_code" placeholder="phone_local_code" value="48"/>
                    </article>

                    <article class="group">
                        <h2>phone_number</h2>
                        <input type="text" name="phone_number" placeholder="phone_number" value="988081234"/>
                    </article>

                    <article class="group">
                        <h2>address</h2>
                        <input type="text" name="address" placeholder="address" value="Rua do Bobos"/>
                    </article>

                    <article class="group">
                        <h2>address_number</h2>
                        <input type="text" name="address_number" placeholder="address_number" value="0"/>
                    </article>

                    <article class="group">
                        <h2>address_country</h2>
                        <input type="text" name="address_country" placeholder="address_country" value="Brasil"/>
                    </article>

                    <article class="group">
                        <h2>address_district</h2>
                        <input type="text" name="address_district" placeholder="address_district" value="Campeche"/>
                    </article>

                    <article class="group">
                        <h2>address_comp</h2>
                        <input type="text" name="address_comp" placeholder="address_comp" value="Apto 123"/>
                    </article>

                    <article class="group">
                        <h2>address_city</h2>
                        <input type="text" name="address_city" placeholder="address_city" value="Florianópolis"/>
                    </article>

                    <article class="group">
                        <h2>address_state</h2>
                        <input type="text" name="address_state" placeholder="address_state" value="SC"/>
                    </article>

                    <article class="group">
                        <h2>address_zip_code</h2>
                        <input type="text" name="address_zip_code" placeholder="address_zip_code" value="88000123"/>
                    </article>
                </div>
            </section>

            <section class="item">
                <h1>Produto</h1>

                <div class="item_content">
                    <article class="group">
                        <h2>prod</h2>
                        <input type="text" name="prod" placeholder="prod" value="123456"/>
                    </article>

                    <article class="group">
                        <h2>prod_name</h2>
                        <input type="text" name="prod_name" placeholder="prod_name" value="UpInside Play"/>
                    </article>

                    <article class="group">
                        <h2>off</h2>
                        <input type="text" name="off" placeholder="off" value="abc123"/>
                    </article>

                    <article class="group">
                        <h2>price</h2>
                        <input type="text" name="price" placeholder="price" value="497.00"/>
                    </article>
                </div>
            </section>

            <section class="item">
                <h1>Afiliado</h1>

                <div class="item_content">
                    <article class="group">
                        <h2>aff</h2>
                        <input type="text" name="aff" placeholder="aff" value=""/>
                    </article>

                    <article class="group">
                        <h2>aff_name</h2>
                        <input type="text" name="aff_name" placeholder="aff_name" value="Afiliado 1;Afiliado 2"/>
                    </article>

                    <article class="group">
                        <h2>cms_aff</h2>
                        <input type="text" name="cms_aff" placeholder="cms_aff" value="58.50;58.50"/>
                    </article>
                </div>
            </section>

            <section class="item">
                <h1>Transação</h1>

                <div class="item_content">
                    <article class="group">
                        <h2>transaction</h2>
                        <input type="text" name="transaction" placeholder="transaction" value="HQ<?= time(); ?>"/>
                    </article>

                    <article class="group">
                        <h2>xcod</h2>
                        <input type="text" name="xcod" placeholder="xcod" value=""/>
                    </article>

                    <article class="group">
                        <h2>src</h2>
                        <input type="text" name="src" placeholder="src" value="fb_ads"/>
                    </article>

                    <article class="group">
                        <h2>status</h2>
                        <select name="status">
                            <option value="started">Iniciada</option>
                            <option value="approved">Aprovada</option>
                            <option value="canceled">Cancelada</option>
                            <option value="pending_analysis">*Pendente</option>
                            <option value="billet_printed">*Boleto Impresso</option>
                            <option value="refunded">Devolvida</option>
                            <option value="completed">Concluída</option>
                            <option value="blocked">*Bloqueada</option>
                            <option value="chargeback">Chargeback</option>
                            <option value="delayed">*Atrasada</option>
                        </select>
                    </article>

                    <article class="group">
                        <h2>payment_engine</h2>
                        <input type="text" name="payment_engine" placeholder="payment_engine" value="hotmart"/>
                    </article>

                    <article class="group">
                        <h2>payment_type</h2>
                        <select name="payment_type">
                            <option value="bank_transfer">Transferência</option>
                            <option value="bcash_balance">Saldo bCash</option>
                            <option value="billet">Boleto</option>
                            <option value="credit_card">Cartão</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </article>

                    <article class="group">
                        <h2>transaction_ext</h2>
                        <input type="text" name="transaction_ext" placeholder="transaction_ext" value="HQ<?= time(); ?>"/>
                    </article>

                    <article class="group">
                        <h2>sck</h2>
                        <input type="text" name="sck" placeholder="sck" value="pg_vendas"/>
                    </article>

                    <article class="group">
                        <h2>purchase_date</h2>
                        <input type="text" name="purchase_date" placeholder="purchase_date" value="<?= date(DATE_W3C); ?>"/>
                    </article>

                    <article class="group">
                        <h2>confirmation_purchase_date</h2>
                        <input type="text" name="confirmation_purchase_date" placeholder="confirmation_purchase_date" value="<?= date(DATE_W3C); ?>"/>
                    </article>

                    <article class="group">
                        <h2>currency</h2>
                        <input type="text" name="currency" placeholder="currency" value="BRL"/>
                    </article>

                    <article class="group">
                        <h2>warranty_date</h2>
                        <input type="text" name="warranty_date" placeholder="warranty_date" value="<?= date(DATE_W3C, strtotime("+7days")); ?>"/>
                    </article>
                </div>
            </section>

            <div class="action">
                <button type="submit" class="btn btn-hotmart">Enviar Post</button>
            </div>
        </form>

    </div>
</div>

</body>
</html>