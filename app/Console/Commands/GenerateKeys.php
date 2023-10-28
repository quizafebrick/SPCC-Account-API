<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateKeys extends Command
{
    protected $signature = 'generate:keys';
    protected $description = 'Generate and store public and private keys';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // * CREATE THE "KEYS" DIRECTORY IF IT DOESN'T EXIST IN THE STORAGE DIRECTORY * //
        if (!is_dir(public_path('keys'))) {
            mkdir(public_path('keys'), 0755, true);
        }

        // * GENERATE A PRIVATE KEY * //
        $privateKey = openssl_pkey_new([
            'private_key_bits' => 2048,
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
        ]);

        // * EXTRACT AND STORE THE PRIVATE KEY IN THE "KEYS" DIRECTORY * //
        openssl_pkey_export($privateKey, $privateKeyPEM);
        file_put_contents(public_path('keys/private_key.pem'), $privateKeyPEM);

        // * GENERATE THE CORRESPONDING PUBLIC KEY * //
        $publicKeyDetails = openssl_pkey_get_details($privateKey);
        $publicKeyPEM = $publicKeyDetails['key'];
        file_put_contents(public_path('keys/public_key.pem'), $publicKeyPEM);

        $this->info('Public and private keys generated and stored in the storage/keys directory.');
    }
}
