<?php

/**
 * Send WhatsApp template message using Infobip API PHP Client.
 *
 * For your convenience, environment variables are already pre-populated with your account data
 * like authentication, base URL and phone number.
 *
 * Send WhatsApp API reference: https://www.infobip.com/docs/api#channels/whatsapp/send-whatsapp-template-message
 *
 * Please find detailed information in the readme file.
 */

require '../../vendor/autoload.php';

use Infobip\Api\WhatsAppApi;
use Infobip\ApiException;
use Infobip\Model\WhatsAppMessage;
use Infobip\Model\WhatsAppTemplateContent;
use Infobip\Model\WhatsAppTemplateDataContent;
use Infobip\Model\WhatsAppTemplateBodyContent;
use Infobip\Model\WhatsAppBulkMessage;
use Infobip\Configuration;

$BASE_URL = "https://xlme9q.api.infobip.com";
$API_KEY = "5fcd68769431a3cc8a46e2439d7c2cdc-24b3f473-ecd6-4599-ae63-0205d6b92f8d";
$RECIPIENT = "639095019617";

$configuration = new Configuration(host: $BASE_URL, apiKey: $API_KEY);

$whatsAppApi = new WhatsAppApi(config: $configuration);

$message = new WhatsAppMessage(
    from: '447860099299',
    to: $RECIPIENT,
    content: new WhatsAppTemplateContent(
        templateName: 'welcome_multiple_languages',
        templateData: new WhatsAppTemplateDataContent(
            body: new WhatsAppTemplateBodyContent(placeholders: ['IB_USER_NAME'])
        ),
        language: 'en'
    )
);

$bulkMessage = new WhatsAppBulkMessage(messages: [$message]);

try {
    $messageInfo = $whatsAppApi->sendWhatsAppTemplateMessage($bulkMessage);

    foreach ($messageInfo->getMessages() ?? [] as $messageInfoItem) {
        echo $messageInfoItem->getStatus()->getDescription() . PHP_EOL;
    }
} catch (ApiException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
