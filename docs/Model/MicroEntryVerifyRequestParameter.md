# # MicroEntryVerifyRequestParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partner_id** | **string** | Your Partner ID displayed in the [Developer Dashboard](https://developer.mastercard.com/account/log-in) | [optional]
**customer_id** | **string** | A customer ID. See Add Customer API for how to create a customer ID. | [optional]
**redirect_uri** | **string** | The URL that customers will be redirected to after completing Finicity Connect. Required unless Connect is embedded inside our application (iframe). | [optional]
**webhook** | **string** | The publicly available URL you want to be notified with events as the user progresses through the application. See [Connect Webhook Event](https://developer.mastercard.com/open-banking-us/documentation/webhooks/webhooks-connect/) for event details. | [optional]
**webhook_content_type** | **string** | The content type the webhook events will be sent in. Supported types: \&quot;application/json\&quot; and \&quot;application/xml\&quot;. | [optional] [default to 'application/json']
**webhook_data** | **object** | Allows additional identifiable information to be inserted into the payload of connect webhook events. See: [Custom Webhooks](https://developer.mastercard.com/open-banking-us/documentation/webhooks/webhooks-custom/). | [optional]
**webhook_headers** | **object** | Allows additional identifiable information to be included as headers of connect webhook event. See: [Custom Webhooks](https://developer.mastercard.com/open-banking-us/documentation/webhooks/webhooks-custom/). | [optional]
**experience** | **string** | The &#x60;experience&#x60; field allows you to customize: * Brand: color and logo * Icon: displayed on the \&quot;Share your data\&quot; page  * Popular institutions: displayed on the Bank Search page  * Report: the credit decisioning report to send when Connect completes.  * MVS modules: financial, payroll, paystub  Note: the Finicity sales engineers (SE) help you set up a default experience for your company when you migrate to Connect 2.0. For each additional experience you create thereafter, they&#39;ll give you a unique ID. See [Generate Connect URL](https://developer.mastercard.com/open-banking-us/documentation/connect/generate-2-connect-url-apis/).  Experience values options:  * \&quot;default\&quot;: your default experience (must be defined)  * GUID: the code for a different experience * Not defined: If you don&#39;t pass the experience parameter, then Connect&#39;s out of the box default experience (add accounts but no branding) is used, and the MVS modules will not run. | [optional]
**account_id** | **string** | An account ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
