<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 23/10/18
 * Time: 15:58
 */

$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$postData = array_map('trim', $postData);
$postData = array_map('strip_tags', $postData);

$postData = (object) $postData;

require_once __DIR__ . '/config.php';

if (!empty($postData->hottok) && $postData->hottok === EAD_TOKEN_HOTMART) {

    var_dump($postData);

    /**
     * Instância de Objetos
     */
    $read = new \CRUD\Read;
    $create = new \CRUD\Create;
    $update = new \CRUD\Update;

    /**
     * Resgate de usuário
     */
    $read->read('users', "WHERE document = :document", "document={$postData->doc}");
    $getUserByDoc = (!empty($read->getResult()) ? $read->getResult()[0] : null);

    $read->read('users', "WHERE email = :email", "email={$postData->email}");
    $getUserByEmail = (!empty($read->getResult()) ? $read->getResult()[0] : null);

    if (!empty($getUserByDoc)) {
        $user = $getUserByDoc;
    } elseif (!empty($getUserByEmail)) {
        $user = $getUserByEmail;
    } else {

        $createUser = [
            'first_name' => $postData->first_name,
            'last_name' => $postData->last_name,
            'document' => $postData->doc,
            'email' => $postData->email,
            'password' => md5('111'),
        ];

        $create->create('users', $createUser);

        $read->read('users', "WHERE id = :id", "id={$create->getResult()}");
        $user = (!empty($read->getResult()) ? $read->getResult()[0] : null);

        // enviar um e-mail de boas vindas

        //resgatar usuário pelo CPF
        //resgatar usuário pelo email
        //criação de um novo usuário
    }

    $read->read('courses', "WHERE hotmart = :hotmart", "hotmart={$postData->prod}");
    $course = (!empty($read->getResult()) ? $read->getResult()[0] : null);
    //resgatar curso


    $read->read('orders', "WHERE transaction = :transaction", "transaction={$postData->transaction}");
    $order = (!empty($read->getResult()) ? $read->getResult()[0] : null);

    if (empty($order)) {

        $newOrder = [
            'transaction' => $postData->transaction,
            'user' => $user['id'],
            'course' => $course['id'],
            'price' => $postData->price,
            'cms_vendor' => $postData->cms_vendor,
            'cms_marketplace' => $postData->cms_marketplace,
            'date' => $postData->purchase_date,
            'date_confirmation' => $postData->confirmation_purchase_date,
            'payment_type' => $postData->payment_type,
            'aff_name' => $postData->aff_name,
            'aff_price' => $postData->cms_aff,
            'warranty' => $postData->warranty_date,
            'status' => $postData->status,
        ];

        $create->create('orders', $newOrder);

        $read->read('orders', "WHERE id = :id", "id={$create->getResult()}");
        $order = (!empty($read->getResult()) ? $read->getResult()[0] : null);
        //tratamento de pedidos
    }

    switch ($postData->status) {
        case 'started':
        case 'pending_analysis':
        case 'billet_printed':
        case 'refunded':
        case 'completed':
        case 'blocked':
        case 'chargeback':
        case 'delayed':
        case 'expired':
            $updateOrderStatus = ['status' => $postData->status];
            $update->update('orders', $updateOrderStatus, "WHERE id = :id", "id={$order['id']}");
            break;

        case 'canceled':
        case 'dispute':
            $updateOrderStatus = ['status' => $postData->status];
            $update->update('orders', $updateOrderStatus, "WHERE id = :id", "id={$order['id']}");

            //deletar a matrícula
            break;

        case 'approved':
            $updateOrderStatus = ['status' => $postData->status];
            $update->update('orders', $updateOrderStatus, "WHERE id = :id", "id={$order['id']}");

            $createEnrollment = [
                'user' => $user['id'],
                'course' => $course['id'],
                'order_source' => $order['id'],
                'date_start' => date('Y-m-d H:i:s', strtotime($postData->confirmation_purchase_date)),
                'date_end' => date('Y-m-d H:i:s', strtotime($postData->confirmation_purchase_date . "+1year"))
            ];

            $create->create('enrollments', $createEnrollment);
            // enviar um e-mail de boas vindas ao curso
            break;
    }

    //status

    var_dump($user, $course, $order);

}