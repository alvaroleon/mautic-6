# Mautic 5 Amazon SES

<p style="text-align: center;">
<img src="Assets/img/icon.png" alt="Amazon SES" width="200"/>
</p>

This plugin enable Mautic 5 to run AWS SES as a email transport and provide a callback to process bounces.
Tested in Mautic 5.0.0 to 5.2.0

## CARACTERÍSTICAS

- ✅ Soporte completo para cabeceras personalizadas configuradas en Mautic
- ✅ Procesamiento de bounces y complaints mediante callbacks de AWS SNS
- ✅ Compatible con todos los esquemas de SES: `ses+api`, `ses+https`, `ses+smtp`

## INSTALLATION

1. Get the plugin using

```
composer require pabloveintimilla/mautic-amazon-ses
```

2. Clear cache

```
php bin/console cache:clear
```

3. Install plugin

```
php bin/console mautic:plugins:reload
```

## CONFIGURATION MAUTIC

Be sure to use the `ses+api` as Data Source Name (DSN).
The following is the example for the DSN.
`ses+api://ACCESS_KEY:SECRET_KEY@default?region=REGION`

Follow the steps to setup plugin DSN:

1. Navigate to Configuration > Mail Send Settings
2. Update the following fields leaving rest default or empty,

| Field    | Value         |
| -------- | ------------- |
| Scheme   | `ses+api`     |
| Host     | `default`     |
| Port     | `465`         |
| User     | `<aws-user>`  |
| Password | `<secretKey>` |
| Region   | `<region>`    |

The `<apiKey>` and `<secretKey>` will be a credential access from a user AWS.
The `<region>` is AWS region were run AWS SES in your account

### Cabeceras personalizadas

Este plugin incluye un transporte personalizado (`MauticSesTransport`) que extiende el transporte estándar de Symfony para Amazon SES. El transporte personalizado garantiza que todas las cabeceras configuradas en Mautic (tanto globales en Configuración > Email como específicas de cada email) se envíen correctamente.

**Cómo funciona:**

- El transporte estándar de Symfony (`SesApiAsyncAwsTransport`) usa `Content.Simple` cuando no hay adjuntos, lo que omite las cabeceras personalizadas
- Nuestro transporte personalizado fuerza siempre el uso de `Content.Raw`, que incluye el mensaje completo con todas las cabeceras
- Las cabeceras se configuran en:
  - **Globales**: Configuración > Email > Cabeceras personalizadas
  - **Por email**: Al editar un email > Cabeceras personalizadas

## CONFIGURATION AWS

Process bounces you need to configure an AWS SNS to send a callback to Mautic.

1. Create a SNS topic attached to AWS SES Identity.
2. Configure a suscription:
   - Protocol: HTTPS
   - **Enable raw message delivery**
   - Endpoint: `URL_MAUTIC`/mailer/callback.
3. Confirm SNS suscription, this plugin automatic activate.

## AUTHOR

👤 **Pablo Veintimilla**

- Twitter: [@pabloveintimilla](https://twitter.com/pabloveintimilla)
- Github: [@pabloveintimilla](https://github.com/pabloveintimilla)

[MailjetGuidePage]: https://dev.mailjet.com/email/guides/getting-started/
